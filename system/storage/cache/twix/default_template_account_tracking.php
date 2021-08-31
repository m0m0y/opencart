<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\tracking.twig */
class default_template_account_tracking extends Twix_Template
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
    extract($context); echo @$header ?>
<div id="account-tracking" class="container">
  <ul class="breadcrumb">
    <?php
        @$save69444 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save69444 ?>  </ul>
  <div class="row"><?php echo @$column_left ?>
    <?php
        if ((@$column_left && @$column_right)) {
?>    <?php
            $class = "col-sm-6" ?>    <?php
        } elseif ((@$column_left || @$column_right)) {
?>    <?php
            $class = "col-sm-9" ?>    <?php
        } else {
?>    <?php
            $class = "col-sm-12" ?>    <?php
        }
?>    <div id="content" class="<?php echo @$class ?>"><?php echo @$content_top ?>
      <h1><?php echo @$heading_title ?></h1>
      <p><?php echo @$text_description ?></p>
      <form class="form-horizontal">
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-code"><?php echo @$entry_code ?></label>
          <div class="col-sm-10">
            <textarea cols="40" rows="5" placeholder="<?php echo @$entry_code ?>" id="input-code" class="form-control"><?php echo @$code ?></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-generator"><span data-toggle="tooltip" title="<?php echo @$help_generator ?>"><?php echo @$entry_generator ?></span></label>
          <div class="col-sm-10">
            <input type="text" name="product" value="" placeholder="<?php echo @$entry_generator ?>" id="input-generator" class="form-control" />
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-2 control-label" for="input-link"><?php echo @$entry_link ?></label>
          <div class="col-sm-10">
            <textarea name="link" cols="40" rows="5" placeholder="<?php echo @$entry_link ?>" id="input-link" class="form-control"></textarea>
          </div>
        </div>
      </form>
      <div class="buttons clearfix">
        <div class="pull-right"><a href="<?php echo @$continue ?>" class="btn btn-primary"><?php echo @$button_continue ?></a></div>
      </div>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<script type="text/javascript"><!--
$('input[name=\'product\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=account/tracking/autocomplete&filter_name=' +  encodeURIComponent(request) + '&tracking=' + encodeURIComponent($('#input-code').val()),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['link']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'product\']').val(item['label']);
		$('textarea[name=\'link\']').val(item['value']);
	}
});
//--></script>
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/account/tracking.twig";
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
