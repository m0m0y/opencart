<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\dashboard\recent_info.twig */
class extension_dashboard_recent_info extends Twix_Template
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
    extract($context); ?><div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> <?php echo @$heading_title ?></h3>
  </div>
  <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <td class="text-right"><?php echo @$column_order_id ?></td>
          <td><?php echo @$column_customer ?></td>
          <td><?php echo @$column_status ?></td>
          <td><?php echo @$column_date_added ?></td>
          <td class="text-right"><?php echo @$column_total ?></td>
          <td class="text-right"><?php echo @$column_action ?></td>
        </tr>
      </thead>
      <tbody>
        <?php
        if (@$orders) {
?>        <?php
            @$save38774 = $order            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$orders);
            foreach ($context['_seq'] as $_key => $order) {
?>        <tr>
          <td class="text-right"><?php echo @$order["order_id"] ?></td>
          <td><?php echo @$order["customer"] ?></td>
          <td><?php echo @$order["status"] ?></td>
          <td><?php echo @$order["date_added"] ?></td>
          <td class="text-right"><?php echo @$order["total"] ?></td>
          <td class="text-right"><a href="<?php echo @$order["view"] ?>" data-toggle="tooltip" title="<?php echo @$button_view ?>" class="btn btn-info"><i class="fa fa-eye"></i></a></td>
        </tr>
        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$order             = $save38774 ?>        <?php
        } else {
?>        <tr>
          <td class="text-center" colspan="6"><?php echo @$text_no_results ?></td>
        </tr>
        <?php
        }
?>      </tbody>
    </table>
  </div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "extension/dashboard/recent_info.twig";
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
