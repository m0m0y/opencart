<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\total\voucher.twig */
class default_template_extension_total_voucher extends Twix_Template
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
    extract($context); ?><div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title"><a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle"><?php echo @$heading_title ?> <i class="fa fa-caret-down"></i></a></h4>
  </div>
  <div id="collapse-voucher" class="panel-collapse collapse">
    <div class="panel-body">
      <label class="col-sm-2 control-label" for="input-voucher"><?php echo @$entry_voucher ?></label>
      <div class="input-group">
        <input type="text" name="voucher" value="<?php echo @$voucher ?>" placeholder="<?php echo @$entry_voucher ?>" id="input-voucher" class="form-control" />
        <span class="input-group-btn">
        <input type="submit" value="<?php echo @$button_voucher ?>" id="button-voucher" data-loading-text="<?php echo @$text_loading ?>"  class="btn btn-primary" />
        </span> </div>
      <script type="text/javascript"><!--
$('#button-voucher').on('click', function() {
	$.ajax({
		url: 'index.php?route=extension/total/voucher/voucher',
		type: 'post',
		data: 'voucher=' + encodeURIComponent($('input[name=\'voucher\']').val()),
		dataType: 'json',
		beforeSend: function() {
			$('#button-voucher').button('loading');
		},
		complete: function() {
			$('#button-voucher').button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['error']) {
				$('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				
				$('html, body').animate({ scrollTop: 0 }, 'slow');
			}
			
			if (json['redirect']) {
				location = json['redirect'];
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script>
    </div>
  </div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/voucher.twig";
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
