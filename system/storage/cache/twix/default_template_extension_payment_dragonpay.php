<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\payment\dragonpay.twig */
class default_template_extension_payment_dragonpay extends Twix_Template
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
    extract($context); ?><h2><?php echo @$text_instruction ?></h2>
<p><b><?php echo @$text_description ?></b></p>
<div class="well well-sm">
  <p><?php echo @$bank ?></p>
  <p><?php echo @$text_payment ?> </p>
    <p><?php echo @$button_confirm ?> </p>
</div>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo @$button_confirm ?>" id="button-confirm" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
  </div>
</div>
<script type="text/javascript"><!--
$('#button-confirm').on('click', function() {
	$.ajax({
		url: 'index.php?route=extension/payment/dragonpay/confirm',
		dataType: 'json',
		beforeSend: function() {
			$('#button-confirm').button('loading');
		},
		complete: function() {
			$('#button-confirm').button('reset');
		},
		success: function(json) {
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
<?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/payment/dragonpay.twig";
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
