<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\module\featured.twig */
class default_template_extension_module_featured extends Twix_Template
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
    extract($context); ?><h3><?php echo @$heading_title ?></h3>
<div class="row">
 <?php
        @$save96751 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
?>  <div class="product-layout col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="product-thumb transition">
      <div class="image"><a href="<?php echo @$product["href"] ?>"><img src="<?php echo @$product["thumb"] ?>" alt="<?php echo @$product["name"] ?>" title="<?php echo @$product["name"] ?>" class="img-responsive" /></a></div>
      <div class="caption">
        <h4><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a></h4>
        <p><?php echo @$product["description"] ?></p>
        <?php
            if (@$product["rating"]) {
?>        <div class="rating">
          <?php
                @$save79583 = $i                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(5);
                foreach ($context['_seq'] as $_key => $i) {
?>          <?php
                    if ((@$product["rating"] < @$i)) {
?>          <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
          <?php
                    } else {
?>          <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
          <?php
                    }
?>          <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$i                 = $save79583 ?>        </div>
        <?php
            }
?>        <?php
            if (@$product["price"]) {
?>        <p class="price">
          <?php
                if ( !@$product["special"]) {
?>          <?php echo @$product["price"] ?>
          <?php
                } else {
?>          <span class="price-new"><?php echo @$product["special"] ?></span> <span class="price-old"><?php echo @$product["price"] ?></span>
          <?php
                }
?>          <?php
                if (@$product["tax"]) {
?>          <span class="price-tax"><?php echo @$text_tax ?> <?php echo @$product["tax"] ?></span>
          <?php
                }
?>        </p>
        <?php
            }
?>      </div>
      <div class="button-group">
        <button type="button" onclick="cart.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$button_cart ?></span></button>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_wishlist ?>" onclick="wishlist.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-heart"></i></button>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_compare ?>" onclick="compare.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-exchange"></i></button>
      </div>
    </div>
  </div>
  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save96751 ?></div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/featured.twig";
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
