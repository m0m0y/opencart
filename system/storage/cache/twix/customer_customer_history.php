<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_history.twig */
class customer_customer_history extends Twix_Template
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
  <table class="table table-bordered">
    <thead>
      <tr>
        <td class="text-left"><?php echo @$column_date_added ?></td>
        <td class="text-left"><?php echo @$column_comment ?></td>
      </tr>
    </thead>
    <tbody>
      <?php
        if (@$histories) {
?>      <?php
            @$save85835 = $history            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$histories);
            foreach ($context['_seq'] as $_key => $history) {
?>      <tr>
        <td class="text-left"><?php echo @$history["date_added"] ?></td>
        <td class="text-left"><?php echo @$history["comment"] ?></td>
      </tr>
      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$history             = $save85835 ?>      <?php
        } else {
?>      <tr>
        <td class="text-center" colspan="2"><?php echo @$text_no_results ?></td>
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
        return "customer/customer_history.twig";
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
