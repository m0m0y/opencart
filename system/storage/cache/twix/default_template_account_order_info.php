<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\order_info.twig */
class default_template_account_order_info extends Twix_Template
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
<div id="account-order" class="container">
  <ul class="breadcrumb">
    <?php
        @$save70175 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save70175 ?>  </ul>
  <?php
        if (@$success) {
?>  <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <?php
        if (@$error_warning) {
?>  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <div class="row"><?php echo @$column_left ?>
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
      <h2><?php echo @$heading_title ?></h2>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td class="text-left" colspan="2"><?php echo @$text_order_detail ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-left" style="width: 50%;"><?php
        if (@$invoice_no) {
?> <b><?php echo @$text_invoice_no ?></b> <?php echo @$invoice_no ?><br />
              <?php
        }
?> <b><?php echo @$text_order_id ?></b> #<?php echo @$order_id ?><br />
              <b><?php echo @$text_date_added ?></b> <?php echo @$date_added ?></td>
            <td class="text-left" style="width: 50%;"><?php
        if (@$payment_method) {
?> <b><?php echo @$text_payment_method ?></b> <?php echo @$payment_method ?><br />
              <?php
        }
?>              <?php
        if (@$shipping_method) {
?> <b><?php echo @$text_shipping_method ?></b> <?php echo @$shipping_method ?> <?php
        }
?></td>
          </tr>
        </tbody>
      </table>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td class="text-left" style="width: 50%; vertical-align: top;"><?php echo @$text_payment_address ?></td>
            <?php
        if (@$shipping_address) {
?>            <td class="text-left" style="width: 50%; vertical-align: top;"><?php echo @$text_shipping_address ?></td>
            <?php
        }
?> </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-left"><?php echo @$payment_address ?></td>
            <?php
        if (@$shipping_address) {
?>            <td class="text-left"><?php echo @$shipping_address ?></td>
            <?php
        }
?> </tr>
        </tbody>
      </table>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-left"><?php echo @$column_name ?></td>
              <td class="text-left"><?php echo @$column_model ?></td>
              <td class="text-right"><?php echo @$column_quantity ?></td>
              <td class="text-right"><?php echo @$column_price ?></td>
              <td class="text-right"><?php echo @$column_total ?></td>
              <?php
        if (@$products) {
?>              <td style="width: 20px;"> </td>
              <?php
        }
?> 
            </tr>
          </thead>
          <tbody>
          
          <?php
        @$save20813 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
?>          <tr>
            <td class="text-left"><?php echo @$product["name"] ?>
              <?php
            @$save49901 = $option            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$product["option"]);
            foreach ($context['_seq'] as $_key => $option) {
?> <br />
              &nbsp;<small> - <?php echo @$option["name"] ?>: <?php echo @$option["value"] ?></small> <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$option             = $save49901 ?></td>
            <td class="text-left"><?php echo @$product["model"] ?></td>
            <td class="text-right"><?php echo @$product["quantity"] ?></td>
            <td class="text-right"><?php echo @$product["price"] ?></td>
            <td class="text-right"><?php echo @$product["total"] ?></td>
            <td class="text-right" style="white-space: nowrap;"><?php
            if (@$product["reorder"]) {
?> <a href="<?php echo @$product["reorder"] ?>" data-toggle="tooltip" title="<?php echo @$button_reorder ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></a> <?php
            }
?> <a href="<?php echo @$product["return"] ?>" data-toggle="tooltip" title="<?php echo @$button_return ?>" class="btn btn-danger"><i class="fa fa-reply"></i></a></td>
          </tr>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save20813 ?>          <?php
        @$save40041 = $voucher        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$vouchers);
        foreach ($context['_seq'] as $_key => $voucher) {
?>          <tr>
            <td class="text-left"><?php echo @$voucher["description"] ?></td>
            <td class="text-left"></td>
            <td class="text-right">1</td>
            <td class="text-right"><?php echo @$voucher["amount"] ?></td>
            <td class="text-right"><?php echo @$voucher["amount"] ?></td>
            <?php
            if (@$products) {
?>            <td></td>
            <?php
            }
?> </tr>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$voucher         = $save40041 ?>            </tbody>
          
          <tfoot>
          
          <?php
        @$save95269 = $total        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$totals);
        foreach ($context['_seq'] as $_key => $total) {
?>          <tr>
            <td colspan="3"></td>
            <td class="text-right"><b><?php echo @$total["title"] ?></b></td>
            <td class="text-right"><?php echo @$total["text"] ?></td>
            <?php
            if (@$products) {
?>            <td></td>
            <?php
            }
?> </tr>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$total         = $save95269 ?>            </tfoot>
          
        </table>
      </div>
      <?php
        if (@$comment) {
?>      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td class="text-left"><?php echo @$text_comment ?></td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="text-left"><?php echo @$comment ?></td>
          </tr>
        </tbody>
      </table>
      <?php
        }
?>      <?php
        if (@$histories) {
?>      <h3><?php echo @$text_history ?></h3>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <td class="text-left"><?php echo @$column_date_added ?></td>
            <td class="text-left"><?php echo @$column_status ?></td>
            <td class="text-left"><?php echo @$column_comment ?></td>
          </tr>
        </thead>
        <tbody>
        
        <?php
            if (@$histories) {
?>        <?php
                @$save91123 = $history                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$histories);
                foreach ($context['_seq'] as $_key => $history) {
?>        <tr>
          <td class="text-left"><?php echo @$history["date_added"] ?></td>
          <td class="text-left"><?php echo @$history["status"] ?></td>
          <td class="text-left"><?php echo @$history["comment"] ?></td>
        </tr>
        <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$history                 = $save91123 ?>        <?php
            } else {
?>        <tr>
          <td colspan="3" class="text-center"><?php echo @$text_no_results ?></td>
        </tr>
        <?php
            }
?>          </tbody>
        
      </table>
      <?php
        }
?>      <div class="buttons clearfix">
        <div class="pull-right"><a href="<?php echo @$continue ?>" class="btn btn-primary"><?php echo @$button_continue ?></a></div>
      </div>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/account/order_info.twig";
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
