<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\product\search.twig */
class default_template_product_search extends Twix_Template
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
<div id="product-search" class="container">
  <ul class="breadcrumb">
    <?php
        @$save36457 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save36457 ?>  </ul>
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
      <label class="control-label" for="input-search"><?php echo @$entry_search ?></label>
      <div class="row">
        <div class="col-sm-4">
          <input type="text" name="search" value="<?php echo @$search ?>" placeholder="<?php echo @$text_keyword ?>" id="input-search" class="form-control" />
        </div>
        <div class="col-sm-3">
          <select name="category_id" class="form-control">
            <option value="0"><?php echo @$text_category ?></option>
            <?php
        @$save29921 = $category_1        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$categories);
        foreach ($context['_seq'] as $_key => $category_1) {
?>            <?php
            if ((@$category_1["category_id"] == @$category_id)) {
?>            <option value="<?php echo @$category_1["category_id"] ?>" selected="selected"><?php echo @$category_1["name"] ?></option>
            <?php
            } else {
?>            <option value="<?php echo @$category_1["category_id"] ?>"><?php echo @$category_1["name"] ?></option>
            <?php
            }
?>            <?php
            @$save35511 = $category_2            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$category_1["children"]);
            foreach ($context['_seq'] as $_key => $category_2) {
?>            <?php
                if ((@$category_2["category_id"] == @$category_id)) {
?>            <option value="<?php echo @$category_2["category_id"] ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$category_2["name"] ?></option>
            <?php
                } else {
?>            <option value="<?php echo @$category_2["category_id"] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$category_2["name"] ?></option>
            <?php
                }
?>            <?php
                @$save95089 = $category_3                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$category_2["children"]);
                foreach ($context['_seq'] as $_key => $category_3) {
?>            <?php
                    if ((@$category_3["category_id"] == @$category_id)) {
?>            <option value="<?php echo @$category_3["category_id"] ?>" selected="selected">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$category_3["name"] ?></option>
            <?php
                    } else {
?>            <option value="<?php echo @$category_3["category_id"] ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo @$category_3["name"] ?></option>
            <?php
                    }
?>            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$category_3                 = $save95089 ?>            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$category_2             = $save35511 ?>            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$category_1         = $save29921 ?>          </select>
        </div>
        <div class="col-sm-3">
          <label class="checkbox-inline">
            <?php
        if (@$sub_category) {
?>            <input type="checkbox" name="sub_category" value="1" checked="checked" />
            <?php
        } else {
?>            <input type="checkbox" name="sub_category" value="1" />
            <?php
        }
?>            <?php echo @$text_sub_category ?></label>
        </div>
      </div>
      <p>
        <label class="checkbox-inline">
          <?php
        if (@$description) {
?>          <input type="checkbox" name="description" value="1" id="description" checked="checked" />
          <?php
        } else {
?>          <input type="checkbox" name="description" value="1" id="description" />
          <?php
        }
?>          <?php echo @$entry_description ?></label>
      </p>
      <input type="button" value="<?php echo @$button_search ?>" id="button-search" class="btn btn-primary" />
      <h2><?php echo @$text_search ?></h2>
      <?php
        if (@$products) {
?>      <div class="row">
        <div class="col-md-2 col-sm-6 hidden-xs">
          <div class="btn-group btn-group-sm">
            <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo @$button_list ?>"><i class="fa fa-th-list"></i></button>
            <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="<?php echo @$button_grid ?>"><i class="fa fa-th"></i></button>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="form-group">
            <a href="<?php echo @$compare ?>" id="compare-total" class="btn btn-link"><?php echo @$text_compare ?></a>
          </div>
        </div>
        <div class="col-md-4 col-xs-6">
          <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-sort"><?php echo @$text_sort ?></label>
            <select id="input-sort" class="form-control" onchange="location = this.value;">
              <?php
            @$save79893 = $sorts            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$sorts);
            foreach ($context['_seq'] as $_key => $sorts) {
?>              <?php
                if ((@$sorts["value"] == sprintf("%s-%s", @$sort, @$order))) {
?>              <option value="<?php echo @$sorts["href"] ?>" selected="selected"><?php echo @$sorts["text"] ?></option>
              <?php
                } else {
?>              <option value="<?php echo @$sorts["href"] ?>"><?php echo @$sorts["text"] ?></option>
              <?php
                }
?>              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$sorts             = $save79893 ?>            </select>
          </div>
        </div>
        <div class="col-md-3 col-xs-6">
          <div class="form-group input-group input-group-sm">
            <label class="input-group-addon" for="input-limit"><?php echo @$text_limit ?></label>
            <select id="input-limit" class="form-control" onchange="location = this.value;">
              <?php
            @$save57115 = $limits            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$limits);
            foreach ($context['_seq'] as $_key => $limits) {
?>              <?php
                if ((@$limits["value"] == @$limit)) {
?>              <option value="<?php echo @$limits["href"] ?>" selected="selected"><?php echo @$limits["text"] ?></option>
              <?php
                } else {
?>              <option value="<?php echo @$limits["href"] ?>"><?php echo @$limits["text"] ?></option>
              <?php
                }
?>              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$limits             = $save57115 ?>            </select>
          </div>
        </div>
      </div>
      <div class="row">
        <?php
            @$save14046 = $product            ;
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
?>                <p class="price">
                  <?php
                    if ( !@$product["special"]) {
?>                  <?php echo @$product["price"] ?>
                  <?php
                    } else {
?>                  <span class="price-new"><?php echo @$product["special"] ?></span> <span class="price-old"><?php echo @$product["price"] ?></span>
                  <?php
                    }
?>                  <?php
                    if (@$product["tax"]) {
?>                  <span class="price-tax"><?php echo @$text_tax ?> <?php echo @$product["tax"] ?></span>
                  <?php
                    }
?>                </p>
                <?php
                }
?>                <?php
                if (@$product["rating"]) {
?>                <div class="rating">
                  <?php
                    @$save48476 = $i                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $_key => $i) {
?>                  <?php
                        if ((@$product["rating"] < @$i)) {
?>                  <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php
                        } else {
?>                  <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                  <?php
                        }
?>                  <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$i                     = $save48476 ?>                </div>
                <?php
                }
?>              </div>
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
$product             = $save14046 ?>      </div>
      <div class="row">
        <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
        <div class="col-sm-6 text-right"><?php echo @$results ?></div>
      </div>
      <?php
        } else {
?>      <p><?php echo @$text_empty ?></p>
      <?php
        }
?>      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<script type="text/javascript"><!--
$('#button-search').bind('click', function() {
	url = 'index.php?route=product/search';

	var search = $('#content input[name=\'search\']').prop('value');

	if (search) {
		url += '&search=' + encodeURIComponent(search);
	}

	var category_id = $('#content select[name=\'category_id\']').prop('value');

	if (category_id > 0) {
		url += '&category_id=' + encodeURIComponent(category_id);
	}

	var sub_category = $('#content input[name=\'sub_category\']:checked').prop('value');

	if (sub_category) {
		url += '&sub_category=true';
	}

	var filter_description = $('#content input[name=\'description\']:checked').prop('value');

	if (filter_description) {
		url += '&description=true';
	}

	location = url;
});

$('#content input[name=\'search\']').bind('keydown', function(e) {
	if (e.keyCode == 13) {
		$('#button-search').trigger('click');
	}
});

$('select[name=\'category_id\']').on('change', function() {
	if (this.value == '0') {
		$('input[name=\'sub_category\']').prop('disabled', true);
	} else {
		$('input[name=\'sub_category\']').prop('disabled', false);
	}
});

$('select[name=\'category_id\']').trigger('change');
--></script>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
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
