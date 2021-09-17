<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\recurring_list.twig */
class default_template_account_recurring_list extends Twix_Template
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
<div id="account-recurring" class="container">
  <ul class="breadcrumb">
    <?php
        @$save31128 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save31128 ?>  </ul>
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
        if (@$recurrings) {
?>      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-right"><?php echo @$column_order_recurring_id ?></td>
              <td class="text-left"><?php echo @$column_product ?></td>
              <td class="text-left"><?php echo @$column_status ?></td>
              <td class="text-left"><?php echo @$column_date_added ?></td>
              <td class="text-right"></td>
            </tr>
          </thead>
          <tbody>
          
          <?php
            @$save81033 = $recurring            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$recurrings);
            foreach ($context['_seq'] as $_key => $recurring) {
?>          <tr>
            <td class="text-right">#<?php echo @$recurring["order_recurring_id"] ?></td>
            <td class="text-left"><?php echo @$recurring["product"] ?></td>
            <td class="text-left"><?php echo @$recurring["status"] ?></td>
            <td class="text-left"><?php echo @$recurring["date_added"] ?></td>
            <td class="text-right"><a href="<?php echo @$recurring["view"] ?>" data-toggle="tooltip" title="<?php echo @$button_view ?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
          </tr>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$recurring             = $save81033 ?>          
          </tbody>
        </table>
      </div>
      <div class="text-right"><?php echo @$pagination ?></div>
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
        return "default/template/account/recurring_list.twig";
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
