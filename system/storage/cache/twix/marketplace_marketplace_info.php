<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\marketplace_info.twig */
class marketplace_marketplace_info extends Twix_Template
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
      <div class="pull-right"><?php
        if ( !@$error_signature) {
?>        <button type="button" id="button-opencart" data-toggle="tooltip" title="<?php echo @$button_opencart ?>" class="btn btn-info"><i class="fa fa-cog"></i></button>
        <?php
        } else {
?>        <button type="button" id="button-opencart" data-toggle="tooltip" title="<?php echo @$error_signature ?>"  data-placement="left" class="btn btn-danger"><i class="fa fa-exclamation-triangle"></i></button>
        <?php
        }
?> <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save39455 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save39455 ?>      </ul>
    </div>
  </div>
  <div id="marketplace-extension-info" class="container-fluid"><?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> <?php echo @$name ?></h3>
      </div>
      <div class="panel-body">
        <div class="row extension-info">
          <div class="col-sm-8"><?php
        if (@$banner) {
?>            <div id="banner" class="text-center thumbnail"><img src="<?php echo @$banner ?>" title="<?php echo @$name ?>" alt="<?php echo @$name ?>" class="img-responsive" /></div>
            <?php
        }
?>            <div class="row thumbnails"><?php
        @$save31836 = $image        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$images);
        foreach ($context['_seq'] as $_key => $image) {
?>              <div class="col-xs-4 col-sm-2"><a href="<?php echo @$image["popup"] ?>" class="thumbnail"><img src="<?php echo @$image["thumb"] ?>" alt="<?php echo @$image["name"] ?>" title="<?php echo @$image["name"] ?>" class="img-responsive" /></a></div>
              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$image         = $save31836 ?> </div>
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo @$tab_general ?></a></li>
              <li><a href="#tab-documentation" data-toggle="tab"><?php echo @$tab_documentation ?></a></li>
              <li><a href="#tab-download" data-toggle="tab"><?php echo @$tab_download ?></a></li>
              <li><a href="#tab-comment" data-toggle="tab"><?php echo @$tab_comment ?> (<?php echo @$comment_total ?>)</a></li>
            </ul>
            <div class="tab-content">
              <div id="tab-description" class="tab-pane active"><?php echo @$description ?></div>
              <div id="tab-documentation" class="tab-pane"><?php echo @$documentation ?></div>
              <div id="tab-download" class="tab-pane">
                <fieldset>
                  <legend><?php echo @$text_progress ?></legend>
                  <div id="progress">
                    <div class="progress">
                      <div id="progress-bar" class="progress-bar" style="width: 0%;"></div>
                    </div>
                    <div id="progress-text"></div>
                  </div>
                  <hr />
                </fieldset>
                <fieldset>
                  <legend><?php echo @$text_available ?></legend>
                  <table class="table table-bordered">
                    <thead>
                    <th><?php echo @$text_name ?></th>
                      <th><?php echo @$text_date_added ?></th>
                      <th class="text-right"><?php echo @$text_action ?></th>
                        </thead>
                    <tbody>
                    
                    <?php
        if (@$downloads) {
?>                    <?php
            @$save73292 = $download            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$downloads);
            foreach ($context['_seq'] as $_key => $download) {
?>                    <tr>
                      <td><?php echo @$download["name"] ?></td>
                      <td><?php echo @$download["date_added"] ?></td>
                      <td class="text-right"><?php
                if (@$download["extension_install_id"]) {
?>                        <button type="button" data-install="<?php echo @$download["extension_download_id"] ?>" data-uninstall="<?php echo @$download["extension_install_id"] ?>" data-loading="<?php echo @$text_loading ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> <?php echo @$button_uninstall ?></button>
                        <?php
                } elseif ((twix_slice($this->env, @$download["filename"],  -10) == ".ocmod.zip")) {
?>                        <button type="button" data-install="<?php echo @$download["extension_download_id"] ?>" data-uninstall="" data-loading="<?php echo @$text_loading ?>" class="btn btn-primary"<?php
                    if ( !@$download["status"]) {
?> disabled<?php
                    }
?>><i class="fa fa-download"></i> <?php echo @$button_install ?></button>
                        <?php
                } else {
?>                        <button type="button" data-install="<?php echo @$download["extension_download_id"] ?>" data-uninstall="" data-loading="<?php echo @$text_loading ?>" class="btn btn-primary"<?php
                    if ( !@$download["status"]) {
?> disabled<?php
                    }
?>><i class="fa fa-download"></i> <?php echo @$button_download ?></button>
                        <?php
                }
?></td>
                    </tr>
                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['download'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$download             = $save73292 ?>                    <?php
        } else {
?>                    <tr>
                      <td colspan="3" class="text-center"><?php echo @$text_no_results ?></td>
                    </tr>
                    <?php
        }
?>                    </tbody>
                    
                  </table>
                </fieldset>
              </div>
              <div id="tab-comment" class="tab-pane">
                <fieldset>
                  <legend><?php echo @$text_comment_add ?></legend>
                  <div class="form-group">
                    <textarea name="comment" rows="5" placeholder="<?php echo @$text_write ?>" id="input-comment" class="form-control"></textarea>
                  </div>
                  <div class="text-right">
                    <button type="button" id="button-comment" class="btn btn-primary"><?php echo @$button_comment ?></button>
                  </div>
                </fieldset>
                <br />
                <fieldset>
                  <legend><?php echo @$text_comment ?></legend>
                  <div id="comment"></div>
                </fieldset>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div id="buy" class="well"><?php
        if (((@$license == "1") &&  !@$purchased)) {
?>              <button id="button-buy" class="btn btn-success btn-lg btn-block"><?php echo @$button_purchase ?></button>
              <?php
        }
?>              <div id="price" class="row">
                <div class="col-xs-5"><strong><?php echo @$text_price ?></strong></div>
                <div class="col-xs-7 text-right"><?php
        if (@$license) {
?>                  <?php echo @$price ?>
                  <?php
        } else {
?>                  <?php echo @$text_free ?>
                  <?php
        }
?></div>
              </div>
              <hr>
              <ul class="list-check">
                <li><?php echo @$text_partner ?></li>
                <li><?php echo @$text_support ?></li>
                <li><?php echo @$text_documentation ?></li>
              </ul>
              <hr>
              <div class="row">
                <div class="col-xs-5"><strong><?php echo @$text_rating ?></strong></div>
                <div class="col-xs-7 text-right"><?php
        @$save64809 = $i        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $_key => $i) {
?>                  <?php
            if ((@$rating >= @$i)) {
?><i class="fa fa-star"></i><?php
            } else {
?><i class="fa fa-star-o"></i><?php
            }
?>                  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$i         = $save64809 ?> (<?php echo @$rating_total ?>)</div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-5"><strong><?php echo @$text_date_modified ?></strong></div>
                <div class="col-xs-7 text-right"><?php echo @$date_modified ?></div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-5"><strong><?php echo @$text_date_added ?></strong></div>
                <div class="col-xs-7 text-right"><?php echo @$date_added ?></div>
              </div>
            </div>
            <div id="sales" class="well"><i class="opencart-icon-cart-mini"></i> <strong><?php echo @$sales ?></strong> <?php echo @$text_sales ?></div>
            <div id="sales" class="well"><i class="opencart-icon-cart-mini"></i> <strong><?php echo @$downloaded ?></strong> <?php echo @$text_downloaded ?></div>
            <div class="well">
              <div class="media">
                <div class="media-left media-middle"><img src="<?php echo @$member_image ?>" alt="<?php echo @$member_username ?>" title="<?php echo @$member_username ?>" class="media-object img-circle"></div>
                <div class="media-body"> <span><a href="<?php echo @$filter_member ?>"><?php echo @$member_username ?></a></span><br>
                  <small><?php echo @$text_member_since ?> <?php echo @$member_date_added ?></small></div>
              </div>
              <br />
              <a href="<?php echo @$filter_member ?>" class="btn btn-primary btn-lg btn-block"><?php echo @$button_view_all ?></a> <a href="https://www.opencart.com/index.php?route=support/seller&amp;extension_id=<?php echo @$extension_id ?>" target="_blank" class="btn btn-ghost-dark btn-lg btn-block"><?php echo @$button_get_support ?></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#button-opencart').on('click', function(e) {
	$('#modal-opencart').remove();
	
	$.ajax({
		url: 'index.php?route=marketplace/api&user_token=<?php echo @$user_token ?>',
		dataType: 'html',
		beforeSend: function() {
			$('#button-opencart').button('loading');
		},
		complete: function() {
			$('#button-opencart').button('reset');
		},
		success: function(html) {
			$('body').append('<div id="modal-opencart" class="modal">' + html + '</div>');
			
			$('#modal-opencart').modal('show');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script> 
  <script type="text/javascript"><!--
$('#button-buy').on('click', function(e) {
	e.preventDefault();

	$('#modal-purchase').remove();

	html  = '<div id="modal-purchase" class="modal">';
	html += '  <div class="modal-dialog">';
	html += '    <div class="modal-content">';
	html += '      <div class="modal-header">';
	html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
	html += '        <h4 class="modal-title"><?php echo @$text_purchase ?></h4>';
	html += '      </div>';
	html += '      <div class="modal-body">';
	html += '        <p><?php echo @$text_pin ?></p>';
	html += '        <p><?php echo @$text_secure ?></p>';
	html += '        <div class="form-group">';
	html += '          <label for="input-pin"><?php echo @$entry_pin ?></label>';
	html += '          <input type="password" name="pin" value="" placeholder="<?php echo @$entry_pin ?>" id="input-pin" class="form-control" />';
	html += '        </div>';
	html += '        <div class="form-group text-right">';
	html += '          <button type="button" id="button-purchase" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary btn-lg"><?php echo @$button_purchase ?></button>';
	html += '        </div>';
	html += '      </div>';
	html += '    </div>';
	html += '  </div>';
	html += '</div>';

	$('body').append(html);

	$('#modal-purchase').modal('show');
});

$('body').on('click', '#modal-purchase #button-purchase', function(e) {
	e.preventDefault();

	var element = this;

	$.ajax({
		url: 'index.php?route=marketplace/marketplace/purchase&user_token=<?php echo @$user_token ?>&extension_id=<?php echo @$extension_id ?>',
		type: 'post',
		data: $('input[name=\'pin\']'),
		dataType: 'json',
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['error']) {
				$('#modal-purchase .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			if (json['success']) {
				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				$('#modal-purchase').modal('hide');
				
				$('#tab-download .btn-primary').prop('disabled', false);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

// Install
$('#tab-download').on('click', '.btn-primary', function(e) {
	e.preventDefault();

	var element = this;

	// Reset everything
	$('#progress-bar').css('width', '0%');
	$('#progress-bar').removeClass('progress-bar-success');
	$('#progress-text').html('');

	$.ajax({
		url: 'index.php?route=marketplace/marketplace/download&user_token=<?php echo @$user_token ?>&extension_id=<?php echo @$extension_id ?>&extension_download_id=' + $(this).attr('data-install'),
		dataType: 'json',
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['error']) {
				$('#tab-download').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button</div>');
			}

			if (json['redirect']) {
				location = json['redirect'];
			}
						
			if (json['text']) {
				$('#progress-bar').css('width', '20%');
				$('#progress-text').html(json['text']);
			}
						
			if (json['extension_install_id']) {
				$(element).replaceWith('<button type="button" data-install="' + $(element).attr('data-install') + '" data-uninstall="' + json['extension_install_id'] + '" data-loading="<?php echo @$text_loading ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> <?php echo @$button_uninstall ?></button>');
			}
						
			if (json['next']) {
				next(json['next'], element, 1);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

function next(url, element, i) {
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
			}
			
			if (json['text']) {
				$('#progress-text').html(json['text']);
			}

			if (json['next']) {
				next(json['next'], element, i);
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
}

// Uninstall
$('#tab-download').on('click', ' .btn-danger', function(e) {
	e.preventDefault();

	var element = this;

	$('#progress-bar').css('width', '0%');
	$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
	$('#progress-text').html('');

	$.ajax({
		url: 'index.php?route=marketplace/install/uninstall&user_token=<?php echo @$user_token ?>&extension_install_id=' + $(this).attr('data-uninstall'),
		dataType: 'json',
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			if (json['error']) {
				$('#progress-bar').addClass('progress-bar-danger');
				$('#progress-text').html(json['error']);
			}

			if (json['success']) {
				$('#progress-bar').css('width', '100%');
				$('#progress-bar').addClass('progress-bar-success');
				$('#progress-text').html(json['success']);
				
				$(element).replaceWith('<button type="button" data-install="' + $(element).attr('data-install') + '" data-uninstall="" data-loading="<?php echo @$text_loading ?>" class="btn btn-primary"><i class="fa fa-download"></i> <?php echo @$button_install ?></button>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#comment').delegate('.pagination a', 'click', function(e) {
	e.preventDefault();

	$('#comment').load(this.href);
});

// Comment
$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=<?php echo @$user_token ?>&extension_id=<?php echo @$extension_id ?>');

// Add comment
$('#button-comment').on('click', function() {
	$.ajax({
		url: 'index.php?route=marketplace/marketplace/addcomment&user_token=<?php echo @$user_token ?>&extension_id=<?php echo @$extension_id ?>',
		type: 'post',
		dataType: 'json',
		data: 'comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),
		beforeSend: function() {
			$('#button-comment').button('loading');
		},
		complete: function() {
			$('#button-comment').button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['error']) {
				$('#tab-comment').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}
			
			if (json['success']) {
				$('#tab-comment').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				$('#comment').load('index.php?route=marketplace/marketplace/comment&user_token=<?php echo @$user_token ?>&extension_id=<?php echo @$extension_id ?>');
			
				$('textarea[name=\'comment\']').val('');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

// Next replies
$('#comment').on('click', '.btn-block', function(e) {
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
			$(element).parent().parent().parent().append(html);
			
			$(element).parent().remove();
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

// Reply
$('#comment').on('click', '.btn-link', function(e) {
	e.preventDefault();

	$(this).parent().parent().find('.reply-input-box').toggle();
});

// Add reply
$('#comment').on('click', '.btn-primary', function(e) {
	e.preventDefault();
	
	var element = this;
	
	$.ajax({
		url: $(element).attr('href'),
		type: 'post',
		dataType: 'json',
		data: 'comment=' + encodeURIComponent($(element).parents('.reply-input-box').find('textarea[name=\'comment\']').val()),		
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['error']) {
				$(element).parents('.reply-input-box').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}
			
			if (json['success']) {
				$(element).parents('.reply-input-box').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				$(element).parents('.reply-input-box').parents('.media').find('.reply-refresh').last().trigger('click');
			
				$(element).parents('.reply-input-box').find('textarea[name=\'comment\']').val('');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

// Refresh
$('#comment').on('click', '.reply-refresh', function(e) {
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
			$(element).parent().replaceWith(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script> 
  <script type="text/javascript"><!--
$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled:true
		}
	});
});
//--></script> 
</div>
<?php echo @$footer ?> 
<?php
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_info.twig";
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
