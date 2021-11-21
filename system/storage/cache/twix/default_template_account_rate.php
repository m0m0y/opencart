<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\rate.twig */
class default_template_account_rate extends Twix_Template
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
<div id="account-edit" class="container">
  <ul class="breadcrumb">
    <?php
        @$save46304 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save46304 ?>  </ul>
  <?php
        if (@$error_warning) {
?>  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
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
        <h1><?php echo @$heading_title ?></h1>
            <fieldset>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td class="text-left"><?php echo @$column_name ?></td>
                                <td class="text-left"><?php echo @$column_model ?></td>
                                <td class="text-right"><?php echo @$column_quantity ?></td>
                                <td class="text-center"><?php echo @$column_action ?></td>
                            </tr>
                        </thead>
                        <tbody>
                                <?php
        if (@$products) {
?>                                    <?php
            @$save45787 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>                                        <?php
                $productid = @$product["product_id"] ?>                                        <?php
                $ordernum = @$product["order_id"] ?>                                        <?php
                $order_prod_id = @$product["order_product_id"] ?>                                        <input type='hidden' name='productid' value='<?php echo @$productid ?>' disabled />
                                        <tr>
                                        <td class="text-left"><?php echo @$product["name"] ?></td>
                                        <td class="text-left"><?php echo @$product["model"] ?></td>
                                        <td class="text-right"><?php echo @$product["quantity"] ?></td>
                                        <?php
                if ((@$product["rate_status"] == 1)) {
?>                                        <td class="text-center">
                                            <button type="button" class="btn btn-primary" onclick="Updaterate('<?php echo @$order_prod_id ?>')">View Rate</button>
                                        </td>
                                        <?php
                } else {
?>                                        
                                            <td class="text-center">
                                                <button type="button" class="btn btn-primary" onclick="rate('<?php echo @$ordernum ?>','<?php echo @$order_prod_id ?>')">Rate </button>
                                            </td>
                                            
                                        <?php
                }
?>                                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save45787 ?>                                <?php
        } else {
?>                                    <tr>
                                        <td colspan="4" class="text-center"><?php echo @$text_no_results ?></td>
                                    </tr>
                                <?php
        }
?>                        </tbody>
                    </table>
                </div>
            </fieldset>

        <div class="row">
            <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
            <div class="col-sm-6 text-right"><?php echo @$results ?></div>
        </div>
        <?php echo @$content_bottom ?> </div>
    <?php echo @$column_right ?> </div>
    
</div>

<!-- Rate Modal -->
    <div id="RateModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h3><?php echo @$text_write ?></h3>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" id="rate_status" name="rate_status" value="1" placeholder="" class="form-control" />
                        <div class="form-group required">
                            <label class="control-label" for="input-name"><?php echo @$entry_name ?></label>
                            <input type="text" name="name" value="<?php echo @$customer_name ?>" id="input_name" class="form-control" />
                        </div>
                            <input type="hidden"  id="R_order_id"/>
                            <input type="hidden"  id="R_order_prod_id"/>
                        <div class="form-group required">
                            <label class="control-label" for="input-review"><?php echo @$entry_review ?></label>
                                <textarea name="text" rows="5" id="input_review" class="form-control"></textarea>
                            <div class="help-block"><?php echo @$text_note ?></div>
                        </div>

                        <div class="form-group required">
                            <label class="control-label"><?php echo @$entry_rating ?></label>
                            &nbsp;&nbsp;&nbsp; <?php echo @$entry_bad ?>&nbsp;

                           <input type="radio" name="rating" id="rating1" value="1"/>
                            &nbsp;
                            <input type="radio" name="rating" id="rating2" value="2" />
                            &nbsp;
                            <input type="radio" name="rating"  id="rating3"value="3" />
                            &nbsp;
                            <input type="radio" name="rating" id="rating4" value="4" />
                            &nbsp;
                                <input type="radio" name="rating"  id="rating5" value="5"/>
                            &nbsp;<?php echo @$entry_good ?>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="ordernum" id="btnSave" onclick="InsertRate()" class="btn btn-primary">Save</button>
                        <button type="submit" name="ordernum" id="btnUpdate" onclick="EditRate()" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
        </div>
    </div>
<!-- end -->

<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/account/rate.twig";
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
