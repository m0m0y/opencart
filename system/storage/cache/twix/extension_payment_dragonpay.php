<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\payment\dragonpay.twig */
class extension_payment_dragonpay extends Twix_Template
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
        <button type="submit" form="form-payment" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save75628 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save75628 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-payment" class="form-horizontal">
          <?php
        @$save43157 = $language        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$languages);
        foreach ($context['_seq'] as $_key => $language) {
?>          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-bank<?php echo @$language["language_id"] ?>"><?php echo @$entry_bank ?></label>
            <div class="col-sm-10">
              <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" title="<?php echo @$language["name"] ?>" /></span>
                <textarea name="payment_dragonpay_bank<?php echo @$language["language_id"] ?>" cols="80" rows="10" placeholder="<?php echo @$entry_bank ?>" id="input-bank<?php echo @$language["language_id"] ?>" class="form-control"><?php
            if (@$payment_dragonpay_bank[@$language["language_id"]]) {
echo @$payment_dragonpay_bank[@$language["language_id"]];
            }
?></textarea>
              </div>
              <?php
            if (@$error_bank[@$language["language_id"]]) {
?>              <div class="text-danger"><?php echo @$error_bank[@$language["language_id"]] ?></div>
              <?php
            }
?>            </div>
          </div>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$language         = $save43157 ?>          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-total"><span data-toggle="tooltip" title="<?php echo @$help_total ?>"><?php echo @$entry_total ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="payment_dragonpay_total" value="<?php echo @$payment_dragonpay_total ?>" placeholder="<?php echo @$entry_total ?>" id="input-total" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-order-status"><?php echo @$entry_order_status ?></label>
            <div class="col-sm-10">
              <select name="payment_dragonpay_order_status_id" id="input-order-status" class="form-control">
                <?php
        @$save61044 = $order_status        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$order_statuses);
        foreach ($context['_seq'] as $_key => $order_status) {
?>                <?php
            if ((@$order_status["order_status_id"] == @$payment_dragonpay_order_status_id)) {
?>                <option value="<?php echo @$order_status["order_status_id"] ?>" selected="selected"><?php echo @$order_status["name"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$order_status["order_status_id"] ?>"><?php echo @$order_status["name"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$order_status         = $save61044 ?>              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-geo-zone"><?php echo @$entry_geo_zone ?></label>
            <div class="col-sm-10">
              <select name="payment_dragonpay_geo_zone_id" id="input-geo-zone" class="form-control">
                <option value="0"><?php echo @$text_all_zones ?></option>
                <?php
        @$save46744 = $geo_zone        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$geo_zones);
        foreach ($context['_seq'] as $_key => $geo_zone) {
?>                <?php
            if ((@$geo_zone["geo_zone_id"] == @$payment_dragonpay_geo_zone_id)) {
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
$geo_zone         = $save46744 ?>              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
            <div class="col-sm-10">
              <select name="payment_dragonpay_status" id="input-status" class="form-control">
                <?php
        if (@$payment_dragonpay_status) {
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
              <input type="text" name="payment_dragonpay_sort_order" value="<?php echo @$payment_dragonpay_sort_order ?>" placeholder="<?php echo @$entry_sort_order ?>" id="input-sort-order" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "extension/payment/dragonpay.twig";
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
