<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\module\featured.twig */
class extension_module_featured extends Twix_Template
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
      <div class="pull-right">
        <button type="submit" form="form-module" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save48490 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save48490 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo @$text_edit ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-name"><?php echo @$entry_name ?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo @$name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
              <?php
        if (@$error_name) {
?>              <div class="text-danger"><?php echo @$error_name ?></div>
              <?php
        }
?>            </div>
          </div>          
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-product"><span data-toggle="tooltip" title="<?php echo @$help_product ?>"><?php echo @$entry_product ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="product_name" value="" placeholder="<?php echo @$entry_product ?>" id="input-product" class="form-control" />
              <div id="featured-product" class="well well-sm" style="height: 150px; overflow: auto;">
                <?php
        @$save90898 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
?>                <div id="featured-product<?php echo @$product["product_id"] ?>"><i class="fa fa-minus-circle"></i> <?php echo @$product["name"] ?>
                  <input type="hidden" name="product[]" value="<?php echo @$product["product_id"] ?>" />
                </div>
                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save90898 ?>              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-limit"><?php echo @$entry_limit ?></label>
            <div class="col-sm-10">
              <input type="text" name="limit" value="<?php echo @$limit ?>" placeholder="<?php echo @$entry_limit ?>" id="input-limit" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-width"><?php echo @$entry_width ?></label>
            <div class="col-sm-10">
              <input type="text" name="width" value="<?php echo @$width ?>" placeholder="<?php echo @$entry_width ?>" id="input-width" class="form-control" />
              <?php
        if (@$error_width) {
?>              <div class="text-danger"><?php echo @$error_width ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-height"><?php echo @$entry_height ?></label>
            <div class="col-sm-10">
              <input type="text" name="height" value="<?php echo @$height ?>" placeholder="<?php echo @$entry_height ?>" id="input-height" class="form-control" />
              <?php
        if (@$error_height) {
?>              <div class="text-danger"><?php echo @$error_height ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
            <div class="col-sm-10">
              <select name="status" id="input-status" class="form-control">
                <?php
        if (@$status) {
?>                <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                <option value="0"><?php echo @$text_disabled ?></option>
                <?php
        } else {
?>                <option value="1"><?php echo @$text_enabled ?></option>
                <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                <?php
        }
?>              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('input[name=\'product_name\']').autocomplete({
	source: function(request, response) {
		$.ajax({
			url: 'index.php?route=catalog/product/autocomplete&user_token=<?php echo @$user_token ?>&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['product_id']
					}
				}));
			}
		});
	},
	select: function(item) {
		$('input[name=\'product_name\']').val('');
		
		$('#featured-product' + item['value']).remove();
		
		$('#featured-product').append('<div id="featured-product' + item['value'] + '"><i class="fa fa-minus-circle"></i> ' + item['label'] + '<input type="hidden" name="product[]" value="' + item['value'] + '" /></div>');	
	}
});
	
$('#featured-product').delegate('.fa-minus-circle', 'click', function() {
	$(this).parent().remove();
});
//--></script></div>
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "extension/module/featured.twig";
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
