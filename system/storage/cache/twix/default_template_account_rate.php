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
        @$save40563 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save40563 ?>  </ul>
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
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
            <input type="hidden" name="rate_status" value="1" placeholder="" class="form-control" />

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
        if (@$orders) {
?>                                    <?php
            @$save51341 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>                                        <?php
                $productid = @$product["product_id"] ?>                                        <input type='hidden' name='productid' value='<?php echo @$productid ?>' disabled />
                                        <tr>
                                        <td class="text-left"> <?php echo @$product["name"] ?></td>
                                        <td class="text-left"><?php echo @$product["model"] ?></td>
                                        <td class="text-right"><?php echo @$product["quantity"] ?></td>
                                        <?php
                if ((@$product["rate_status"] == 1)) {
?>                                        <td class="text-center">
                                            <button type="submit" name="ordernum" class="btn btn-link" disabled>Rate</button>
                                        </td>
                                        <?php
                } else {
?>                                        <?php
                    $ordernum = @$product["order_id"] ?>                                            <td class="text-center">
                                                <button type="submit" name="ordernum" value="<?php echo @$ordernum ?>" class="btn btn-link">Rate</button>
                                            </td>
                                        <?php
                }
?>                                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save51341 ?>                                <?php
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
        </form>
         <?php echo @$content_bottom ?> </div>
        <?php echo @$column_right ?> </div>
    
</div>
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
