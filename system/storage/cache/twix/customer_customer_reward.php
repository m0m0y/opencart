<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_reward.twig */
class customer_customer_reward extends Twix_Template
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
        <td class="text-left"><?php echo @$column_date_added ?></td>
        <td class="text-left"><?php echo @$column_description ?></td>
        <td class="text-right"><?php echo @$column_points ?></td>
      </tr>
    </thead>
    <tbody>
      <?php
        if (@$rewards) {
?>      <?php
            @$save45233 = $reward            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$rewards);
            foreach ($context['_seq'] as $_key => $reward) {
?>      <tr>
        <td class="text-left"><?php echo @$reward["date_added"] ?></td>
        <td class="text-left"><?php echo @$reward["description"] ?></td>
        <td class="text-right"><?php echo @$reward["points"] ?></td>
      </tr>
      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$reward             = $save45233 ?>      <tr>
        <td></td>
        <td class="text-right"><b><?php echo @$text_balance ?></b></td>
        <td class="text-right"><?php echo @$balance ?></td>
      </tr>
      <?php
        } else {
?>      <tr>
        <td class="text-center" colspan="3"><?php echo @$text_no_results ?></td>
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
        return "customer/customer_reward.twig";
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
