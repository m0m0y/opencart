<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_approval_list.twig */
class customer_customer_approval_list extends Twix_Template
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
    extract($context); ?><div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td class="text-left"><?php echo @$column_name ?></td>
        <td class="text-left"><?php echo @$column_email ?></td>
        <td class="text-left"><?php echo @$column_customer_group ?></td>
        <td class="text-left"><?php echo @$column_type ?></td>
        <td class="text-left"><?php echo @$column_date_added ?></td>
        <td class="text-right"><?php echo @$column_action ?></td>
      </tr>
    </thead>
    <tbody>
    <?php
        if (@$customer_approvals) {
?>    <?php
            @$save98756 = $customer_approval            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$customer_approvals);
            foreach ($context['_seq'] as $_key => $customer_approval) {
?>    <tr>
      <td class="text-left"><?php echo @$customer_approval["name"] ?></td>
      <td class="text-left"><?php echo @$customer_approval["email"] ?></td>
      <td class="text-left"><?php echo @$customer_approval["customer_group"] ?></td>
      <td class="text-left"><?php echo @$customer_approval["type"] ?></td>
      <td class="text-left"><?php echo @$customer_approval["date_added"] ?></td>
      <td class="text-right"><a href="<?php echo @$customer_approval["approve"] ?>" data-toggle="tooltip" title="<?php echo @$button_approve ?>" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i></a> <a href="<?php echo @$customer_approval["deny"] ?>" data-toggle="tooltip" title="<?php echo @$button_deny ?>" class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i></a> <a href="<?php echo @$customer_approval["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
    </tr>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_approval'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$customer_approval             = $save98756 ?>    <?php
        } else {
?>    <tr>
      <td class="text-center" colspan="6"><?php echo @$text_no_results ?></td>
    </tr>
    <?php
        }
?>    </tbody>
  </table>
</div>
<div class="row">
  <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
  <div class="col-sm-6 text-right"><?php echo @$results ?></div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "customer/customer_approval_list.twig";
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
