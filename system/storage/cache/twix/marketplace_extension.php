<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\extension.twig */
class marketplace_extension extends Twix_Template
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
        @$save15503 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save15503 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> <?php echo @$text_list ?></h3>
      </div>
      <div class="panel-body">
        <fieldset>
          <legend><?php echo @$text_type ?></legend>
          <div class="well">
            <div class="input-group">
              <select name="type" class="form-control">
                <?php
        @$save48395 = $category        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$categories);
        foreach ($context['_seq'] as $_key => $category) {
?>                <?php
            if ((@$type == @$category["code"])) {
?>                <option value="<?php echo @$category["href"] ?>" selected="selected"><?php echo @$category["text"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$category["href"] ?>"><?php echo @$category["text"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$category         = $save48395 ?>              </select>
              <span class="input-group-addon"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></span>
            </div>
          </div>
        </fieldset>
        <div id="extension"></div>
      </div>
    </div>
  </div>
  <?php
        if (@$categories) {
?>  <script type="text/javascript"><!--
$('select[name="type"]').on('change', function() {
	$.ajax({
		url: $('select[name="type"]').val(),
		dataType: 'html',
		beforeSend: function() {
			$('.fa-filter').addClass('fa-circle-o-notch fa-spin');
			$('.fa-filter').removeClass('fa-filter');
			$('select[name=\'type\']').prop('disabled', true);
		},
		complete: function() {
			$('.fa-circle-o-notch').addClass('fa-filter');
			$('.fa-circle-o-notch').removeClass('fa-circle-o-notch fa-spin');
			$('select[name=\'type\']').prop('disabled', false);
		},
		success: function(html) {
			$('#extension').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('select[name="type"]').trigger('change');

$('#extension').on('click', '.btn-success', function(e) {
	e.preventDefault();
	
	var element = this;

	$.ajax({
		url: $(element).attr('href'),
		dataType: 'html',
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(html) {
			$('#extension').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#extension').on('click', '.btn-danger, .btn-warning', function(e) {
	e.preventDefault();
	
	if (confirm('<?php echo @$text_confirm ?>')) {
		var element = this;
	
		$.ajax({
			url: $(element).attr('href'),
			dataType: 'html',
			beforeSend: function() {
				$(element).button('loading');
			},
			complete: function() {
				$(element).button('reset');
			},
			success: function(html) {
				$('#extension').html(html);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
});
//--></script>
  <?php
        }
?></div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "marketplace/extension.twig";
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
