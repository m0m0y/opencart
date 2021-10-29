<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\installer.twig */
class marketplace_installer extends Twix_Template
{
    public function __construct($env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
    extract($context); echo @$header;
echo @$column_left ?>
<div id="content">
<div class="page-header">
  <div class="container-fluid">
    <h1><?php echo @$heading_title ?></h1>
    <ul class="breadcrumb">
      <?php
        @$save43424 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>      <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
      <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save43424 ?>    </ul>
  </div>
</div>
<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> <?php echo @$text_upload ?></h3>
    </div>
    <div class="panel-body">
      <form class="form-horizontal">
        <fieldset>
          <legend><?php echo @$text_upload ?></legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="button-upload"><span data-toggle="tooltip" title="<?php echo @$help_upload ?>"><?php echo @$entry_upload ?></span></label>
            <div class="col-sm-10">
              <button type="button" id="button-upload" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
            </div>
          </div>
        </fieldset>
        <br />
        <fieldset>
          <legend><?php echo @$text_progress ?></legend>
          <div class="form-group">
            <label class="col-sm-2 control-label"><?php echo @$entry_progress ?></label>
            <div class="col-sm-10">
              <div class="progress">
                <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
              </div>
              <div id="progress-text"></div>
            </div>
          </div>
        </fieldset>
        <br />
        <fieldset>
          <legend><?php echo @$text_history ?></legend>
          <div id="history"></div>
        </fieldset>
      </form>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#history').delegate('.pagination a', 'click', function(e) {
	e.preventDefault();

	$('#history').load(this.href);
});

$('#history').load('index.php?route=marketplace/installer/history&user_token=<?php echo @$user_token ?>');
  
$('#button-upload').on('click', function() {
	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			// Reset everything
			$('.alert-dismissible').remove();
			$('#progress-bar').css('width', '0%');
			$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
			$('#progress-text').html('');

			$.ajax({
				url: 'index.php?route=marketplace/installer/upload&user_token=<?php echo @$user_token ?>',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$('#button-upload').button('loading');
				},
				complete: function() {
					$('#button-upload').button('reset');
				},
				success: function(json) {
					if (json['error']) {
						$('#progress-bar').addClass('progress-bar-danger');
						$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');
					}
			
					if (json['text']) {
						$('#progress-bar').css('width', '20%');
						$('#progress-text').html(json['text']);
					}
			
					if (json['next']) {
						next(json['next'], 1);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});

function next(url, i) {
	i = i + 1;

	$.ajax({
		url: url,
		dataType: 'json',
		success: function(json) {
			$('#progress-bar').css('width', (i * 20) + '%');
			
			if (json['error']) {
				$('#progress-bar').addClass('progress-bar-danger');
				$('#progress-text').html('<div class="text-danger">' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#progress-bar').addClass('progress-bar-success');
				$('#progress-text').html('<span class="text-success">' + json['success'] + '</span>');
				
				$('#history').load('index.php?route=marketplace/installer/history&user_token=<?php echo @$user_token ?>');
			}
			
			if (json['text']) {
				$('#progress-text').html(json['text']);
			}
			
			if (json['next']) {
				next(json['next'], i);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
}

// Uninstall
$('#history').on('click', '.btn-danger', function(e) {
	e.preventDefault();

	var element = this;

	$.ajax({
		url: 'index.php?route=marketplace/install/uninstall&user_token=<?php echo @$user_token ?>&extension_install_id=' + $(this).attr('value'),
		dataType: 'json',
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['success']) {
				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				$('#history').load('index.php?route=marketplace/installer/history&user_token=<?php echo @$user_token ?>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script></div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "marketplace/installer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array ();
    }
}
