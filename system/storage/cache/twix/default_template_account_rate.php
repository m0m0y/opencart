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
        @$save32176 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save32176 ?>  </ul>
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
?>    <?php
        if (@$orders) {
?>    <div id="content" class="<?php echo @$class ?>"><?php echo @$content_top ?>
        <h1><?php echo @$heading_title ?></h1>
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <td class="text-left"><?php echo @$column_name ?></td>
                        <td class="text-left"><?php echo @$column_model ?></td>
                        <td class="text-right"><?php echo @$column_quantity ?></td>
                        <td class="text-right"><?php echo @$column_action ?></td>
                    </tr>
                </thead>
                <tbody>
                        <?php
            @$save34967 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>                        <tr>
                            <td class="text-right">#<?php echo @$product["order_id"] ?> <?php echo @$product["name"] ?></td>
                            <td class="text-right"><?php echo @$product["model"] ?></td>
                            <td class="text-right"><?php echo @$product["quantity"] ?></td>
                            <td class="text-right"><a href="<?php echo @$product["href"] ?>" <?php echo @$reviews ?>>Rate</a> </td>
                        </tr>
                        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save34967 ?>                </tbody>
            </table>
        </div>
         <div class="row">
            <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
            <div class="col-sm-6 text-right"><?php echo @$results ?></div>
      </div>
    <?php
        } else {
?>        <p><?php echo @$text_empty ?></p>
    <?php
        }
?>        <div class="buttons clearfix">
            <div class="pull-right"><a href="<?php echo @$continue ?>" class="btn btn-primary"><?php echo @$button_continue ?></a></div>
        </div>
        <?php echo @$content_bottom ?></div>
        <?php echo @$column_right ?></div>
    </div>
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
