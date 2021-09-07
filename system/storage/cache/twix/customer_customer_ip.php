<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_ip.twig */
class customer_customer_ip extends Twix_Template
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
        <td class="text-left"><?php echo @$column_ip ?></td>
        <td class="text-right"><?php echo @$column_total ?></td>
        <td class="text-left"><?php echo @$column_date_added ?></td>
      </tr>
    </thead>
    <tbody>
      <?php
        if (@$ips) {
?>      <?php
            @$save47332 = $ip            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$ips);
            foreach ($context['_seq'] as $_key => $ip) {
?>      <tr>
        <td class="text-left"><a href="//whatismyipaddress.com/ip/<?php echo @$ip["ip"] ?>" target="_blank"><?php echo @$ip["ip"] ?></a></td>
        <td class="text-right"><a href="<?php echo @$ip["filter_ip"] ?>" target="_blank"><?php echo @$ip["total"] ?></a></td>
        <td class="text-left"><?php echo @$ip["date_added"] ?></td>      </tr>
      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$ip             = $save47332 ?>      <?php
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
</div><?php
    }

    public function getTemplateName()
    {
        return "customer/customer_ip.twig";
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
