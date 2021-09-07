<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\wishlist.twig */
class default_template_account_wishlist extends Twix_Template
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
<div id="account-wishlist" class="container">
  <ul class="breadcrumb">
    <?php
        @$save53066 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save53066 ?>  </ul>
  <?php
        if (@$success) {
?>  <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
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
      <?php
        if (@$products) {
?>      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-center"><?php echo @$column_image ?></td>
              <td class="text-left"><?php echo @$column_name ?></td>
              <td class="text-left"><?php echo @$column_model ?></td>
              <td class="text-right"><?php echo @$column_stock ?></td>
              <td class="text-right"><?php echo @$column_price ?></td>
              <td class="text-right"><?php echo @$column_action ?></td>
            </tr>
          </thead>
          <tbody>
          
          <?php
            @$save17955 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>          <tr>
            <td class="text-center"><?php
                if (@$product["thumb"]) {
?><a href="<?php echo @$product["href"] ?>"><img src="<?php echo @$product["thumb"] ?>" alt="<?php echo @$product["name"] ?>" title="<?php echo @$product["name"] ?>" /></a><?php
                }
?></td>
            <td class="text-left"><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a></td>
            <td class="text-left"><?php echo @$product["model"] ?></td>
            <td class="text-right"><?php echo @$product["stock"] ?></td>
            <td class="text-right"><?php
                if (@$product["price"]) {
?>              <div class="price"> <?php
                    if ( !@$product["special"]) {
?>                <?php echo @$product["price"] ?>
                <?php
                    } else {
?> <b><?php echo @$product["special"] ?></b> <s><?php echo @$product["price"] ?></s> <?php
                    }
?> </div>
              <?php
                }
?></td>
            <td class="text-right"><button type="button" onclick="cart.add('<?php echo @$product["product_id"] ?>');" data-toggle="tooltip" title="<?php echo @$button_cart ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i></button>
              <a href="<?php echo @$product["remove"] ?>" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger"><i class="fa fa-times"></i></a></td>
          </tr>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save17955 ?>            </tbody>
          
        </table>
      </div>
      <?php
        } else {
?>      <p><?php echo @$text_empty ?></p>
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
        return "default/template/account/wishlist.twig";
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
