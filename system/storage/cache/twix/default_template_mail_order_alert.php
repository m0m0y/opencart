<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\mail\order_alert.twig */
class default_template_mail_order_alert extends Twix_Template
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
    extract($context); echo @$text_received ?>

<?php echo @$text_order_id ?> <?php echo @$order_id ?>
<?php echo @$text_date_added ?> <?php echo @$date_added ?>
<?php echo @$text_order_status ?> <?php echo @$order_status ?>

Reffered by: <?php echo @$affiliate_name ?>

<?php echo @$text_product ?>

<?php
        @$save44691 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
echo @$product["quantity"] ?>x <?php echo @$product["name"] ?> (<?php echo @$product["model"] ?>) <?php echo @$product["total"] ?>
	<?php
            if (@$product["option"]) {
?>		<?php
                @$save55655 = $option                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$product["option"]);
                foreach ($context['_seq'] as $_key => $option) {
?>			- <?php echo @$option["name"] ?> <?php echo @$option["value"] ?>
		<?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$option                 = $save55655 ?>	<?php
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save44691;
        if (@$vouchers) {
?>
<?php
            @$save70007 = $voucher            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$vouchers);
            foreach ($context['_seq'] as $_key => $voucher) {
?>1x <?php echo @$voucher["description"] ?> <?php echo @$voucher["amount"] ?>
<?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$voucher             = $save70007;
        }
echo @$text_total ?>

<?php
        @$save64895 = $total        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$totals);
        foreach ($context['_seq'] as $_key => $total) {
echo @$total["title"] ?>: <?php echo @$total["value"] ?>
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$total         = $save64895 ?>  
<?php
        if (@$comment) {
echo @$text_comment ?>

<?php echo @$comment ?>
<?php
        }
?>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_alert.twig";
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
