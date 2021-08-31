<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\checkout\confirm.twig */
class default_template_checkout_confirm extends Twix_Template
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
    extract($context);         if ( !@$redirect) {
?><div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td class="text-left"><?php echo @$column_name ?></td>
        <td class="text-left"><?php echo @$column_model ?></td>
        <td class="text-right"><?php echo @$column_quantity ?></td>
        <td class="text-right"><?php echo @$column_price ?></td>
        <td class="text-right"><?php echo @$column_total ?></td>
      </tr>
    </thead>
    <tbody>
    
    <?php
            @$save32275 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>    <tr>
      <td class="text-left"><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a> <?php
                @$save71716 = $option                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$product["option"]);
                foreach ($context['_seq'] as $_key => $option) {
?> <br />
        &nbsp;<small> - <?php echo @$option["name"] ?>: <?php echo @$option["value"] ?></small> <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$option                 = $save71716 ?>        <?php
                if (@$product["recurring"]) {
?> <br />
        <span class="label label-info"><?php echo @$text_recurring_item ?></span> <small><?php echo @$product["recurring"] ?></small> <?php
                }
?></td>
      <td class="text-left"><?php echo @$product["model"] ?></td>
      <td class="text-right"><?php echo @$product["quantity"] ?></td>
      <td class="text-right"><?php echo @$product["price"] ?></td>
      <td class="text-right"><?php echo @$product["total"] ?></td>
    </tr>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save32275 ?>    <?php
            @$save98212 = $voucher            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$vouchers);
            foreach ($context['_seq'] as $_key => $voucher) {
?>    <tr>
      <td class="text-left"><?php echo @$voucher["description"] ?></td>
      <td class="text-left"></td>
      <td class="text-right">1</td>
      <td class="text-right"><?php echo @$voucher["amount"] ?></td>
      <td class="text-right"><?php echo @$voucher["amount"] ?></td>
    </tr>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$voucher             = $save98212 ?>      </tbody>
    
    <tfoot>
    
    <?php
            @$save16562 = $total            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$totals);
            foreach ($context['_seq'] as $_key => $total) {
?>    <tr>
      <td colspan="4" class="text-right"><strong><?php echo @$total["title"] ?>:</strong></td>
      <td class="text-right"><?php echo @$total["text"] ?></td>
    </tr>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$total             = $save16562 ?>      </tfoot>
    
  </table>
</div>
<?php echo @$payment ?>
<?php
        } else {
?> 
<script type="text/javascript"><!--
location = '<?php echo @$redirect ?>';
//--></script> 
<?php
        }
?> <?php
    }

    public function getTemplateName()
    {
        return "default/template/checkout/confirm.twig";
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
