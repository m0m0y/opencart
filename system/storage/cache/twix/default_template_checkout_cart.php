<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\checkout\cart.twig */
class default_template_checkout_cart extends Twix_Template
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
<div id="checkout-cart" class="container">
  <ul class="breadcrumb">
    <?php
        @$save80687 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save80687 ?>  </ul>
  <?php
        if (@$attention) {
?>  <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo @$attention ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <?php
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
      <h1><?php echo @$heading_title ?>
        <?php
        if (@$weight) {
?>        &nbsp;(<?php echo @$weight ?>)
        <?php
        }
?> </h1>
      <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-center"><?php echo @$column_image ?></td>
                <td class="text-left"><?php echo @$column_name ?></td>
                <td class="text-left"><?php echo @$column_model ?></td>
                <td class="text-left"><?php echo @$column_quantity ?></td>
                <td class="text-right"><?php echo @$column_price ?></td>
                <td class="text-right"><?php echo @$column_total ?></td>
              </tr>
            </thead>
            <tbody>
            
            <?php
        @$save72521 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
?>            <tr>
              <td class="text-center"><?php
            if (@$product["thumb"]) {
?> <a href="<?php echo @$product["href"] ?>"><img src="<?php echo @$product["thumb"] ?>" alt="<?php echo @$product["name"] ?>" title="<?php echo @$product["name"] ?>" class="img-thumbnail" /></a> <?php
            }
?></td>
              <td class="text-left"><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a> <?php
            if ( !@$product["stock"]) {
?> <span class="text-danger">***</span> <?php
            }
?>                <?php
            if (@$product["option"]) {
?>                <?php
                @$save21512 = $option                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$product["option"]);
                foreach ($context['_seq'] as $_key => $option) {
?> <br />
                <small><?php echo @$option["name"] ?>: <?php echo @$option["value"] ?></small> <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$option                 = $save21512 ?>                <?php
            }
?>                <?php
            if (@$product["reward"]) {
?> <br />
                <small><?php echo @$product["reward"] ?></small> <?php
            }
?>                <?php
            if (@$product["recurring"]) {
?> <br />
                <span class="label label-info"><?php echo @$text_recurring_item ?></span> <small><?php echo @$product["recurring"] ?></small> <?php
            }
?></td>
              <td class="text-left"><?php echo @$product["model"] ?></td>
              <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                  <input type="text" name="quantity[<?php echo @$product["cart_id"] ?>]" value="<?php echo @$product["quantity"] ?>" size="1" class="form-control" />
                  <span class="input-group-btn">
                  <button type="submit" data-toggle="tooltip" title="<?php echo @$button_update ?>" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                  <button type="button" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger" onclick="cart.remove('<?php echo @$product["cart_id"] ?>');"><i class="fa fa-times-circle"></i></button>
                  </span></div></td>
              <td class="text-right"><?php echo @$product["price"] ?></td>
              <td class="text-right"><?php echo @$product["total"] ?></td>
            </tr>
            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save72521 ?>            <?php
        @$save30045 = $voucher        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$vouchers);
        foreach ($context['_seq'] as $_key => $voucher) {
?>            <tr>
              <td></td>
              <td class="text-left"><?php echo @$voucher["description"] ?></td>
              <td class="text-left"></td>
              <td class="text-left"><div class="input-group btn-block" style="max-width: 200px;">
                  <input type="text" name="" value="1" size="1" disabled="disabled" class="form-control" />
                  <span class="input-group-btn">
                  <button type="button" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger" onclick="voucher.remove('<?php echo @$voucher["key"] ?>');"><i class="fa fa-times-circle"></i></button>
                  </span></div></td>
              <td class="text-right"><?php echo @$voucher["amount"] ?></td>
              <td class="text-right"><?php echo @$voucher["amount"] ?></td>
            </tr>
            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$voucher         = $save30045 ?>              </tbody>
            
          </table>
        </div>
      </form>
      <?php
        if (@$modules) {
?>      <h2><?php echo @$text_next ?></h2>
      <p><?php echo @$text_next_choice ?></p>
      <div class="panel-group" id="accordion"> <?php
            @$save41467 = $module            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$modules);
            foreach ($context['_seq'] as $_key => $module) {
?>        <?php echo @$module ?>
        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$module             = $save41467 ?> </div>
      <?php
        }
?> <br />
      <div class="row">
        <div class="col-sm-4 col-sm-offset-8">
          <table class="table table-bordered">
            <?php
        @$save28070 = $total        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$totals);
        foreach ($context['_seq'] as $_key => $total) {
?>            <tr>
              <td class="text-right"><strong><?php echo @$total["title"] ?>:</strong></td>
              <td class="text-right"><?php echo @$total["text"] ?></td>
            </tr>
            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$total         = $save28070 ?>          </table>
        </div>
      </div>
      <div class="buttons clearfix">
        <div class="pull-left"><a href="<?php echo @$continue ?>" class="btn btn-default"><?php echo @$button_shopping ?></a></div>
        <div class="pull-right"><a href="<?php echo @$checkout ?>" class="btn btn-primary"><?php echo @$button_checkout ?></a></div>
      </div>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
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
