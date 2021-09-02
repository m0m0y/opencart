<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\product\category.twig */
class default_template_product_category extends Twix_Template
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
<div id="product-category" class="container">
  <ul class="breadcrumb">
    <?php
        @$save28634 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save28634 ?>  </ul>
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
      <h2><?php echo @$heading_title ?></h2>
      <?php
        if ((@$thumb || @$description)) {
?>      <div class="row"> <?php
            if (@$thumb) {
?>        <div class="col-sm-2"><img src="<?php echo @$thumb ?>" alt="<?php echo @$heading_title ?>" title="<?php echo @$heading_title ?>" class="img-thumbnail" /></div>
        <?php
            }
?>        <?php
            if (@$description) {
?>        <div class="col-sm-10"><?php echo @$description ?></div>
        <?php
            }
?></div>
      <hr>
      <?php
        }
?>      <?php
        if (@$categories) {
?>      <h3><?php echo @$text_refine ?></h3>
      <?php
            if ((twix_length_filter($this->env, @$categories) <= 5)) {
?>      <div class="row">
        <div class="col-sm-3">
          <ul>
            <?php
                @$save20313 = $category                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$categories);
                foreach ($context['_seq'] as $_key => $category) {
?>            <li><a href="<?php echo @$category["href"] ?>"><?php echo @$category["name"] ?></a></li>
            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$category                 = $save20313 ?>          </ul>
        </div>
      </div>
      <?php
            } else {
?>      <div class="row"><?php
                @$save93648 = $category                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(twix_array_batch(@$categories, twix_round((twix_length_filter($this->env, @$categories) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $_key => $category) {
?>        <div class="col-sm-3">
          <ul>
            <?php
                    @$save35079 = $child                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$category);
                    foreach ($context['_seq'] as $_key => $child) {
?>            <li><a href="<?php echo @$child["href"] ?>"><?php echo @$child["name"] ?></a></li>
            <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$child                     = $save35079 ?>          </ul>
        </div>
        <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$category                 = $save93648 ?></div>
      <br />
      <?php
            }
?>      <?php
        }
?>      <?php
        if (@$products) {
?>      <div class="row">
        <div class="col-md-2 col-sm-6 hidden-xs">
          <div class="btn-group btn-group-sm">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo @$button_list ?>"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo @$button_grid ?>"><i class="fa fa-th"></i></button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="form-group"><a href="<?php echo @$compare ?>" id="compare-total" class="btn btn-link"><?php echo @$text_compare ?></a></div>
        </div>
        <div class="col-md-4 col-xs-6">
          <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-sort"><?php echo @$text_sort ?></label>
            <select id="input-sort" class="form-control" onchange="location = this.value;">
              
              
              
              <?php
            @$save30051 = $sorts            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$sorts);
            foreach ($context['_seq'] as $_key => $sorts) {
?>              <?php
                if ((@$sorts["value"] == sprintf("%s-%s", @$sort, @$order))) {
?>              
              
              
              <option value="<?php echo @$sorts["href"] ?>" selected="selected"><?php echo @$sorts["text"] ?></option>
              
              
              
              <?php
                } else {
?>              
              
              
              <option value="<?php echo @$sorts["href"] ?>"><?php echo @$sorts["text"] ?></option>
              
              
              
              <?php
                }
?>              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$sorts             = $save30051 ?>            
            
            
            </select>
          </div>
        </div>
        <div class="col-md-3 col-xs-6">
          <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-limit"><?php echo @$text_limit ?></label>
            <select id="input-limit" class="form-control" onchange="location = this.value;">
              
              
              
              <?php
            @$save21294 = $limits            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$limits);
            foreach ($context['_seq'] as $_key => $limits) {
?>              <?php
                if ((@$limits["value"] == @$limit)) {
?>              
              
              
              <option value="<?php echo @$limits["href"] ?>" selected="selected"><?php echo @$limits["text"] ?></option>
              
              
              
              <?php
                } else {
?>              
              
              
              <option value="<?php echo @$limits["href"] ?>"><?php echo @$limits["text"] ?></option>
              
              
              
              <?php
                }
?>              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$limits             = $save21294 ?>            
            
            
            </select>
          </div>
        </div>
      </div>
      <div class="row"> <?php
            @$save77531 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>        <div class="product-layout product-list col-xs-12">
          <div class="product-thumb">
            <div class="image"><a href="<?php echo @$product["href"] ?>"><img src="<?php echo @$product["thumb"] ?>" alt="<?php echo @$product["name"] ?>" title="<?php echo @$product["name"] ?>" class="img-responsive" /></a></div>
            <div>
              <div class="caption">
                <h4><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a></h4>
                <p><?php echo @$product["description"] ?></p>
                <?php
                if (@$product["price"]) {
?>                <p class="price"> <?php
                    if ( !@$product["special"]) {
?>                  <?php echo @$product["price"] ?>
                  <?php
                    } else {
?> <span class="price-new"><?php echo @$product["special"] ?></span> <span class="price-old"><?php echo @$product["price"] ?></span> <?php
                    }
?>                  <?php
                    if (@$product["tax"]) {
?> <span class="price-tax"><?php echo @$text_tax ?> <?php echo @$product["tax"] ?></span> <?php
                    }
?> </p>
                <?php
                }
?>                <?php
                if (@$product["rating"]) {
?>                <div class="rating"> <?php
                    @$save89728 = $i                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $_key => $i) {
?>                  <?php
                        if ((@$product["rating"] < @$i)) {
?> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <?php
                        } else {
?> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span><?php
                        }
?>                  <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$i                     = $save89728 ?> </div>
                <?php
                }
?> </div>
              <div class="button-group">
                <button type="button" onclick="cart.add('<?php echo @$product["product_id"] ?>', '<?php echo @$product["minimum"] ?>');"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$button_cart ?></span></button>
                <button type="button" data-toggle="tooltip" title="<?php echo @$button_wishlist ?>" onclick="wishlist.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-heart"></i></button>
                <button type="button" data-toggle="tooltip" title="<?php echo @$button_compare ?>" onclick="compare.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-exchange"></i></button>
              </div>
            </div>
          </div>
        </div>
        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save77531 ?> </div>
      <div class="row">
        <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
        <div class="col-sm-6 text-right"><?php echo @$results ?></div>
      </div>
      <?php
        }
?>      <?php
        if (( !@$categories &&  !@$products)) {
?>      <p><?php echo @$text_empty ?></p>
      <div class="buttons">
        <div class="pull-right"><a href="<?php echo @$continue ?>" class="btn btn-primary"><?php echo @$button_continue ?></a></div>
      </div>
      <?php
        }
?>      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<?php echo @$footer ?> 
<?php
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
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
