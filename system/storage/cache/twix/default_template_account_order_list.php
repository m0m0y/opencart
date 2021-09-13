<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\order_list.twig */
class default_template_account_order_list extends Twix_Template
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
        @$save42982 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save42982 ?>  </ul>
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
      <?php
        if (@$orders) {
?>      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-right"><?php echo @$column_order_id ?></td>
              <td class="text-left"><?php echo @$column_customer ?></td>
              <td class="text-right"><?php echo @$column_product ?></td>
              <td class="text-left"><?php echo @$column_status ?></td>
              <td class="text-right"><?php echo @$column_total ?></td>
              <td class="text-left"><?php echo @$column_date_added ?></td>
              <td></td>
            </tr>
          </thead>
          <tbody>
           <?php
            @$save50063 = $order            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$orders);
            foreach ($context['_seq'] as $_key => $order) {
?>            <tr>
              <td class="text-right">#<?php echo @$order["order_id"] ?></td>
              <td class="text-left"><?php echo @$order["name"] ?></td>
              <td class="text-right"><?php echo @$order["products"] ?></td>
              <td class="text-left"><?php echo @$order["status"] ?></td>
              <td class="text-right"><?php echo @$order["total"] ?></td>
              <td class="text-left"><?php echo @$order["date_added"] ?></td>
              <td class="text-right"><a href="<?php echo @$order["view"] ?>" data-toggle="tooltip" title="<?php echo @$button_view ?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
            </tr>
            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$order             = $save50063 ?>          </tbody>
        </table>
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
        <div class="col-sm-6 text-right"><?php echo @$results ?></div>
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
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/account/order_list.twig";
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
