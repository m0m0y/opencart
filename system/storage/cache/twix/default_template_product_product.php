<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\product\product.twig */
class default_template_product_product extends Twix_Template
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
<div id="product-product" class="container">
  <ul class="breadcrumb">
    <?php
        @$save63150 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save63150 ?>  </ul>
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
      <div class="row"> <?php
        if ((@$column_left || @$column_right)) {
?>        <?php
            $class = "col-sm-6" ?>        <?php
        } else {
?>        <?php
            $class = "col-sm-8" ?>        <?php
        }
?>        <div class="<?php echo @$class ?>"> <?php
        if ((@$thumb || @$images)) {
?>          <ul class="thumbnails">
            <?php
            if (@$thumb) {
?>            <li><a class="thumbnail" href="<?php echo @$popup ?>" title="<?php echo @$heading_title ?>"><img src="<?php echo @$thumb ?>" title="<?php echo @$heading_title ?>" alt="<?php echo @$heading_title ?>" /></a></li>
            <?php
            }
?>            <?php
            if (@$images) {
?>            <?php
                @$save72504 = $image                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$images);
                foreach ($context['_seq'] as $_key => $image) {
?>            <li class="image-additional"><a class="thumbnail" href="<?php echo @$image["popup"] ?>" title="<?php echo @$heading_title ?>"> <img src="<?php echo @$image["thumb"] ?>" title="<?php echo @$heading_title ?>" alt="<?php echo @$heading_title ?>" /></a></li>
            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$image                 = $save72504 ?>            <?php
            }
?>          </ul>
          <?php
        }
?>          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-description" data-toggle="tab"><?php echo @$tab_description ?></a></li>
            <?php
        if (@$attribute_groups) {
?>            <li><a href="#tab-specification" data-toggle="tab"><?php echo @$tab_attribute ?></a></li>
            <?php
        }
?>            <?php
        if (@$review_status) {
?>            <li><a href="#tab-review" data-toggle="tab"><?php echo @$tab_review ?></a></li>
            <?php
        }
?>          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-description"><?php echo @$description ?></div>
            <?php
        if (@$attribute_groups) {
?>            <div class="tab-pane" id="tab-specification">
              <table class="table table-bordered">
                <?php
            @$save47483 = $attribute_group            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$attribute_groups);
            foreach ($context['_seq'] as $_key => $attribute_group) {
?>                <thead>
                  <tr>
                    <td colspan="2"><strong><?php echo @$attribute_group["name"] ?></strong></td>
                  </tr>
                </thead>
                <tbody>
                <?php
                @$save34267 = $attribute                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$attribute_group["attribute"]);
                foreach ($context['_seq'] as $_key => $attribute) {
?>                <tr>
                  <td><?php echo @$attribute["name"] ?></td>
                  <td><?php echo @$attribute["text"] ?></td>
                </tr>
                <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$attribute                 = $save34267 ?>                  </tbody>
                <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$attribute_group             = $save47483 ?>              </table>
            </div>
            <?php
        }
?>            <?php
        if (@$review_status) {
?>            <div class="tab-pane" id="tab-review">
              <form class="form-horizontal" id="form-review">
                <div id="review"></div>
                <?php
?>                <?php
            if (@$review_guest) {
?>                <?php
?>                <?php
?>                <?php
?>                <?php
?>                <?php
            } else {
?>                <?php echo @$text_login ?>
                <?php
            }
?>              </form>
            </div>
            <?php
        }
?></div>
        </div>
        <?php
        if ((@$column_left || @$column_right)) {
?>        <?php
            $class = "col-sm-6" ?>        <?php
        } else {
?>        <?php
            $class = "col-sm-4" ?>        <?php
        }
?>        <div class="<?php echo @$class ?>">
          <div class="btn-group">
            <button type="button" data-toggle="tooltip" class="btn btn-default" title="<?php echo @$button_wishlist ?>" onclick="wishlist.add('<?php echo @$product_id ?>');"><i class="fa fa-heart"></i></button>
            <button type="button" data-toggle="tooltip" class="btn btn-default" title="<?php echo @$button_compare ?>" onclick="compare.add('<?php echo @$product_id ?>');"><i class="fa fa-exchange"></i></button>
          </div>
          <h1><?php echo @$heading_title ?></h1>
          <ul class="list-unstyled">
            <?php
        if (@$manufacturer) {
?>            <li><?php echo @$text_manufacturer ?> <a href="<?php echo @$manufacturers ?>"><?php echo @$manufacturer ?></a></li>
            <?php
        }
?>            <li><?php echo @$text_model ?> <?php echo @$model ?></li>
            <?php
        if (@$reward) {
?>            <li><?php echo @$text_reward ?> <?php echo @$reward ?></li>
            <?php
        }
?>            <li><?php echo @$text_stock ?> <?php echo @$stock ?></li>
          </ul>
          <?php
        if (@$price) {
?>          <ul class="list-unstyled">
            <?php
            if ( !@$special) {
?>            <li>
              <h2><?php echo @$price ?></h2>
            </li>
            <?php
            } else {
?>            <li><span style="text-decoration: line-through;"><?php echo @$price ?></span></li>
            <li>
              <h2><?php echo @$special ?></h2>
            </li>
            <?php
            }
?>            <?php
            if (@$tax) {
?>            <li><?php echo @$text_tax ?> <?php echo @$tax ?></li>
            <?php
            }
?>            <?php
            if (@$points) {
?>            <li><?php echo @$text_points ?> <?php echo @$points ?></li>
            <?php
            }
?>            <?php
            if (@$discounts) {
?>            <li>
              <hr>
            </li>
            <?php
                @$save84268 = $discount                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$discounts);
                foreach ($context['_seq'] as $_key => $discount) {
?>            <li><?php echo @$discount["quantity"];
echo @$text_discount;
echo @$discount["price"] ?></li>
            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$discount                 = $save84268 ?>            <?php
            }
?>          </ul>
          <?php
        }
?>          <div id="product"> <?php
        if (@$options) {
?>            <hr>
            <h3><?php echo @$text_option ?></h3>
            <?php
            @$save49984 = $option            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$options);
            foreach ($context['_seq'] as $_key => $option) {
?>            <?php
                if ((@$option["type"] == "select")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label" for="input-option<?php echo @$option["product_option_id"] ?>"><?php echo @$option["name"] ?></label>
              <select name="option[<?php echo @$option["product_option_id"] ?>]" id="input-option<?php echo @$option["product_option_id"] ?>" class="form-control">
                <option value=""><?php echo @$text_select ?></option>
                <?php
                    @$save97561 = $option_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$option["product_option_value"]);
                    foreach ($context['_seq'] as $_key => $option_value) {
?>                <option value="<?php echo @$option_value["product_option_value_id"] ?>"><?php echo @$option_value["name"] ?>
                <?php
                        if (@$option_value["price"]) {
?>                (<?php echo @$option_value["price_prefix"];
echo @$option_value["price"] ?>)
                <?php
                        }
?> </option>
                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$option_value                     = $save97561 ?>              </select>
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "radio")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label"><?php echo @$option["name"] ?></label>
              <div id="input-option<?php echo @$option["product_option_id"] ?>"> <?php
                    @$save19858 = $option_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$option["product_option_value"]);
                    foreach ($context['_seq'] as $_key => $option_value) {
?>                <div class="radio">
                  <label>
                    <input type="radio" name="option[<?php echo @$option["product_option_id"] ?>]" value="<?php echo @$option_value["product_option_value_id"] ?>" />
                    <?php
                        if (@$option_value["image"]) {
?> <img src="<?php echo @$option_value["image"] ?>" alt="<?php echo @$option_value["name"] ?> <?php
                            if (@$option_value["price"]) {
?> <?php echo @$option_value["price_prefix"] ?> <?php echo @$option_value["price"] ?> <?php
                            }
?>" class="img-thumbnail" /> <?php
                        }
?>                  
                    <?php echo @$option_value["name"] ?>
                    <?php
                        if (@$option_value["price"]) {
?>                    (<?php echo @$option_value["price_prefix"];
echo @$option_value["price"] ?>)
                    <?php
                        }
?> </label>
                </div>
                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$option_value                     = $save19858 ?> </div>
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "checkbox")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label"><?php echo @$option["name"] ?></label>
              <div id="input-option<?php echo @$option["product_option_id"] ?>"> <?php
                    @$save23271 = $option_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$option["product_option_value"]);
                    foreach ($context['_seq'] as $_key => $option_value) {
?>                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="option[<?php echo @$option["product_option_id"] ?>][]" value="<?php echo @$option_value["product_option_value_id"] ?>" />
                    <?php
                        if (@$option_value["image"]) {
?> <img src="<?php echo @$option_value["image"] ?>" alt="<?php echo @$option_value["name"] ?> <?php
                            if (@$option_value["price"]) {
?> <?php echo @$option_value["price_prefix"] ?> <?php echo @$option_value["price"] ?> <?php
                            }
?>" class="img-thumbnail" /> <?php
                        }
?>                    <?php echo @$option_value["name"] ?>
                    <?php
                        if (@$option_value["price"]) {
?>                    (<?php echo @$option_value["price_prefix"];
echo @$option_value["price"] ?>)
                    <?php
                        }
?> </label>
                </div>
                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$option_value                     = $save23271 ?> </div>
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "text")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label" for="input-option<?php echo @$option["product_option_id"] ?>"><?php echo @$option["name"] ?></label>
              <input type="text" name="option[<?php echo @$option["product_option_id"] ?>]" value="<?php echo @$option["value"] ?>" placeholder="<?php echo @$option["name"] ?>" id="input-option<?php echo @$option["product_option_id"] ?>" class="form-control" />
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "textarea")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label" for="input-option<?php echo @$option["product_option_id"] ?>"><?php echo @$option["name"] ?></label>
              <textarea name="option[<?php echo @$option["product_option_id"] ?>]" rows="5" placeholder="<?php echo @$option["name"] ?>" id="input-option<?php echo @$option["product_option_id"] ?>" class="form-control"><?php echo @$option["value"] ?></textarea>
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "file")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label"><?php echo @$option["name"] ?></label>
              <button type="button" id="button-upload<?php echo @$option["product_option_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default btn-block"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
              <input type="hidden" name="option[<?php echo @$option["product_option_id"] ?>]" value="" id="input-option<?php echo @$option["product_option_id"] ?>" />
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "date")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label" for="input-option<?php echo @$option["product_option_id"] ?>"><?php echo @$option["name"] ?></label>
              <div class="input-group date">
                <input type="text" name="option[<?php echo @$option["product_option_id"] ?>]" value="<?php echo @$option["value"] ?>" data-date-format="YYYY-MM-DD" id="input-option<?php echo @$option["product_option_id"] ?>" class="form-control" />
                <span class="input-group-btn">
                <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "datetime")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label" for="input-option<?php echo @$option["product_option_id"] ?>"><?php echo @$option["name"] ?></label>
              <div class="input-group datetime">
                <input type="text" name="option[<?php echo @$option["product_option_id"] ?>]" value="<?php echo @$option["value"] ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-option<?php echo @$option["product_option_id"] ?>" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <?php
                }
?>            <?php
                if ((@$option["type"] == "time")) {
?>            <div class="form-group<?php
                    if (@$option["required"]) {
?> required <?php
                    }
?>">
              <label class="control-label" for="input-option<?php echo @$option["product_option_id"] ?>"><?php echo @$option["name"] ?></label>
              <div class="input-group time">
                <input type="text" name="option[<?php echo @$option["product_option_id"] ?>]" value="<?php echo @$option["value"] ?>" data-date-format="HH:mm" id="input-option<?php echo @$option["product_option_id"] ?>" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
            </div>
            <?php
                }
?>            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$option             = $save49984 ?>            <?php
        }
?>            <?php
        if (@$recurrings) {
?>            <hr>
            <h3><?php echo @$text_payment_recurring ?></h3>
            <div class="form-group required">
              <select name="recurring_id" class="form-control">
                <option value=""><?php echo @$text_select ?></option>
                <?php
            @$save18149 = $recurring            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$recurrings);
            foreach ($context['_seq'] as $_key => $recurring) {
?>                <option value="<?php echo @$recurring["recurring_id"] ?>"><?php echo @$recurring["name"] ?></option>
                <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$recurring             = $save18149 ?>              </select>
              <div class="help-block" id="recurring-description"></div>
            </div>
            <?php
        }
?>            <div class="form-group">
              <label class="control-label" for="input-quantity"><?php echo @$entry_qty ?></label>
              <input type="text" name="quantity" value="<?php echo @$minimum ?>" size="2" id="input-quantity" class="form-control" />
              <input type="hidden" name="product_id" value="<?php echo @$product_id ?>" />
              <br />
              <button type="button" id="button-cart" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary btn-lg btn-block"><?php echo @$button_cart ?></button>
            </div>
            <?php
        if ((@$minimum > 1)) {
?>            <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo @$text_minimum ?></div>
            <?php
        }
?></div>
          <?php
        if (@$review_status) {
?>          <div class="rating">
            <p><?php
            @$save47977 = $i            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $_key => $i) {
?>              <?php
                if ((@$rating < @$i)) {
?><span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span><?php
                } else {
?><span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span><?php
                }
?>              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$i             = $save47977 ?> <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo @$reviews ?></a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;"><?php echo @$text_write ?></a></p>
            <hr>
            <!-- AddThis Button BEGIN -->
            <div class="addthis_toolbox addthis_default_style" data-url="<?php echo @$share ?>"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>
            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script> 
            <!-- AddThis Button END --> 
          </div>
          <?php
        }
?> </div>
      </div>
      <?php
        if (@$products) {
?>      <h3><?php echo @$text_related ?></h3>
      <div class="row"> <?php
            $i = 0 ?>        <?php
            @$save22112 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>        <?php
                if ((@$column_left && @$column_right)) {
?>        <?php
                    $class = "col-xs-8 col-sm-6" ?>        <?php
                } elseif ((@$column_left || @$column_right)) {
?>        <?php
                    $class = "col-xs-6 col-md-4" ?>        <?php
                } else {
?>        <?php
                    $class = "col-xs-6 col-sm-3" ?>        <?php
                }
?>        <div class="<?php echo @$class ?>">
          <div class="product-thumb transition">
            <div class="image"><a href="<?php echo @$product["href"] ?>"><img src="<?php echo @$product["thumb"] ?>" alt="<?php echo @$product["name"] ?>" title="<?php echo @$product["name"] ?>" class="img-responsive" /></a></div>
            <div class="caption">
              <h4><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a></h4>
              <p><?php echo @$product["description"] ?></p>
              <?php
                if (@$product["rating"]) {
?>              <div class="rating"> <?php
                    @$save25043 = $j                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $_key => $j) {
?>                <?php
                        if ((@$product["rating"] < @$j)) {
?> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> <?php
                        } else {
?> <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> <?php
                        }
?>                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$j                     = $save25043 ?> </div>
              <?php
                }
?>              <?php
                if (@$product["price"]) {
?>              <p class="price"> <?php
                    if ( !@$product["special"]) {
?>                <?php echo @$product["price"] ?>
                <?php
                    } else {
?> <span class="price-new"><?php echo @$product["special"] ?></span> <span class="price-old"><?php echo @$product["price"] ?></span> <?php
                    }
?>                <?php
                    if (@$product["tax"]) {
?> <span class="price-tax"><?php echo @$text_tax ?> <?php echo @$product["tax"] ?></span> <?php
                    }
?> </p>
              <?php
                }
?> </div>
            <div class="button-group">
              <button type="button" onclick="cart.add('<?php echo @$product["product_id"] ?>', '<?php echo @$product["minimum"] ?>');"><span class="hidden-xs hidden-sm hidden-md"><?php echo @$button_cart ?></span> <i class="fa fa-shopping-cart"></i></button>
              <button type="button" data-toggle="tooltip" title="<?php echo @$button_wishlist ?>" onclick="wishlist.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-heart"></i></button>
              <button type="button" data-toggle="tooltip" title="<?php echo @$button_compare ?>" onclick="compare.add('<?php echo @$product["product_id"] ?>');"><i class="fa fa-exchange"></i></button>
            </div>
          </div>
        </div>
        <?php
                if (((@$column_left && @$column_right) && (((@$i + 1) % 2) == 0))) {
?>        <div class="clearfix visible-md visible-sm"></div>
        <?php
                } elseif ((@$column_left || (@$column_right && (((@$i + 1) % 3) == 0)))) {
?>        <div class="clearfix visible-md"></div>
        <?php
                } elseif ((((@$i + 1) % 4) == 0)) {
?>        <div class="clearfix visible-md"></div>
        <?php
                }
?>        <?php
                $i = (@$i + 1) ?>        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save22112 ?> </div>
        <?php
        }
?>        <?php
        if (@$tags) {
?>        <p><?php echo @$text_tags ?>
        <?php
            @$save14112 = $i            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(range(0, (twix_length_filter($this->env, @$tags) - 1)));
            foreach ($context['_seq'] as $_key => $i) {
?>        <?php
                if ((@$i < (twix_length_filter($this->env, @$tags) - 1))) {
?> <a href="<?php echo @$tags[@$i]["href"] ?>"><?php echo @$tags[@$i]["tag"] ?></a>,
        <?php
                } else {
?> <a href="<?php echo @$tags[@$i]["href"] ?>"><?php echo @$tags[@$i]["tag"] ?></a> <?php
                }
?>        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$i             = $save14112 ?> </p>
        <?php
        }
?>      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<script type="text/javascript"><!--
$('select[name=\'recurring_id\'], input[name="quantity"]').change(function(){
	$.ajax({
		url: 'index.php?route=product/product/getRecurringDescription',
		type: 'post',
		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
		dataType: 'json',
		beforeSend: function() {
			$('#recurring-description').html('');
		},
		success: function(json) {
			$('.alert-dismissible, .text-danger').remove();

			if (json['success']) {
				$('#recurring-description').html(json['success']);
			}
		}
	});
});
//--></script> 
<script type="text/javascript"><!--
$('#button-cart').on('click', function() {
	$.ajax({
		url: 'index.php?route=checkout/cart/add',
		type: 'post',
		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
		dataType: 'json',
		beforeSend: function() {
			$('#button-cart').button('loading');
		},
		complete: function() {
			$('#button-cart').button('reset');
		},
		success: function(json) {
			$('.alert-dismissible, .text-danger').remove();
			$('.form-group').removeClass('has-error');

			if (json['error']) {
				if (json['error']['option']) {
					for (i in json['error']['option']) {
						var element = $('#input-option' + i.replace('_', '-'));

						if (element.parent().hasClass('input-group')) {
							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						} else {
							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
						}
					}
				}

				if (json['error']['recurring']) {
					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
				}

				// Highlight any found errors
				$('.text-danger').parent().addClass('has-error');
			}

			if (json['success']) {
				$('.breadcrumb').after('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');

				$('html, body').animate({ scrollTop: 0 }, 'slow');

				$('#cart > ul').load('index.php?route=common/cart/info ul li');
			}
		},
        error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
	});
});
//--></script> 
<script type="text/javascript"><!--
$('.date').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickTime: false
});

$('.datetime').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickDate: true,
	pickTime: true
});

$('.time').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickDate: false
});

$('button[id^=\'button-upload\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script> 
<script type="text/javascript"><!--
$('#review').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#review').fadeOut('slow');

    $('#review').load(this.href);

    $('#review').fadeIn('slow');
});

$('#review').load('index.php?route=product/product/review&product_id=<?php echo @$product_id ?>');

$('#button-review').on('click', function() {
	$.ajax({
		url: 'index.php?route=product/product/write&product_id=<?php echo @$product_id ?>',
		type: 'post',
		dataType: 'json',
		data: $("#form-review").serialize(),
		beforeSend: function() {
			$('#button-review').button('loading');
		},
		complete: function() {
			$('#button-review').button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();

			if (json['error']) {
				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}

			if (json['success']) {
				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				$('input[name=\'name\']').val('');
				$('textarea[name=\'text\']').val('');
				$('input[name=\'rating\']:checked').prop('checked', false);
			}
		}
	});
});

$(document).ready(function() {
	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled: true
		}
	});
});
//--></script> 
<?php echo @$footer ?> 
<?php
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
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
