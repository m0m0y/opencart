<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_transaction.twig */
class customer_customer_transaction extends Twix_Template
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
        <td class="text-right"><?php echo @$column_amount ?></td>
      </tr>
    </thead>
    <tbody>
      <?php
        if (@$transactions) {
?>      <?php
            @$save14873 = $transaction            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$transactions);
            foreach ($context['_seq'] as $_key => $transaction) {
?>      <tr>
        <td class="text-left"><?php echo @$transaction["date_added"] ?></td>
        <td class="text-left"><?php echo @$transaction["description"] ?></td>
        <td class="text-right"><?php echo @$transaction["amount"] ?></td>
      </tr>
      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaction'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$transaction             = $save14873 ?>      <tr>
        <td>&nbsp;</td>
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
        return "customer/customer_transaction.twig";
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
