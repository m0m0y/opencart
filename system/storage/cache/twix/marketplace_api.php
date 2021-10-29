<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\api.twig */
class marketplace_api extends Twix_Template
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
    extract($context); ?><div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title"><i class="fa fa-cog"></i> <?php echo @$heading_title ?></h4>
    </div>
    <div class="modal-body">
      <div class="alert alert-info"><i class="fa fa-info-circle"></i>  <?php echo @$text_signup ?></div>
      <div class="form-group">
        <label for="input-username"><?php echo @$entry_username ?></label>
        <input type="text" name="opencart_username" value="" placeholder="<?php echo @$entry_username ?>" id="input-username" class="form-control" />
      </div>
      <div class="form-group">
        <label for="input-secret"><?php echo @$entry_secret ?></label>
        <textarea name="opencart_secret" placeholder="<?php echo @$entry_secret ?>" rows="8" id="input-secret" class="form-control"></textarea>
      </div>
      <div class="form-group text-right">
        <button type="button" id="button-save" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary"><?php echo @$button_save ?></button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('#button-save').on('click', function(e) {
	$.ajax({
		url: 'index.php?route=marketplace/api/save&user_token=<?php echo @$user_token ?>',
		type: 'post',
		dataType: 'json',		
		data: $('#modal-opencart :input'),		
		beforeSend: function() {
			$('#button-save').button('loading');
		},
		complete: function() {
			$('#button-save').button('reset');
		},
		success: function(json) {
			$('.alert-dismissible, .text-danger').remove();
			
			if (json['error']) {
				if (json['error']['warning']) {
					$('#modal-opencart .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}
				
				if (json['error']['username']) {
					$('input[name="username"]').after('<div class="text-danger">' + json['error']['username'] + '</div>');
				}	
				
				if (json['error']['secret']) {
					$('textarea[name="secret"]').after('<div class="text-danger">' + json['error']['secret'] + '</div>');
				}						
			}
			
			if (json['success']) {
				$('#modal-opencart .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			
				window.location.reload();
			}			
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script> <?php
    }

    public function getTemplateName()
    {
        return "marketplace/api.twig";
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
