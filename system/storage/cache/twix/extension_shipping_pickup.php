<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\shipping\pickup.twig */
class extension_shipping_pickup extends Twix_Template
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
        <button type="submit" form="form-shipping" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save85963 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save85963 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-shipping" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-geo-zone"><?php echo @$entry_geo_zone ?></label>
            <div class="col-sm-10">
              <select name="shipping_pickup_geo_zone_id" id="input-geo-zone" class="form-control">
                <option value="0"><?php echo @$text_all_zones ?></option>
                <?php
        @$save94363 = $geo_zone        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$geo_zones);
        foreach ($context['_seq'] as $_key => $geo_zone) {
?>                <?php
            if ((@$geo_zone["geo_zone_id"] == @$shipping_pickup_geo_zone_id)) {
?>                <option value="<?php echo @$geo_zone["geo_zone_id"] ?>" selected="selected"><?php echo @$geo_zone["name"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$geo_zone["geo_zone_id"] ?>"><?php echo @$geo_zone["name"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$geo_zone         = $save94363 ?>              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
            <div class="col-sm-10">
              <select name="shipping_pickup_status" id="input-status" class="form-control">
                <?php
        if (@$shipping_pickup_status) {
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
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-sort-order"><?php echo @$entry_sort_order ?></label>
            <div class="col-sm-10">
              <input type="text" name="shipping_pickup_sort_order" value="<?php echo @$shipping_pickup_sort_order ?>" placeholder="<?php echo @$entry_sort_order ?>" id="input-sort-order" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "extension/shipping/pickup.twig";
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
