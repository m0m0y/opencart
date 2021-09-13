<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\checkout\payment_method.twig */
class default_template_checkout_payment_method extends Twix_Template
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
    extract($context);         if (@$error_warning) {
?><div class="alert alert-warning alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
<?php
        }
        if (@$payment_methods) {
?><p><?php echo @$text_payment_method ?></p>
<?php
            @$save22988 = $payment_method            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$payment_methods);
            foreach ($context['_seq'] as $_key => $payment_method) {
?><div class="radio">
  <label><?php
                if (((@$payment_method["code"] == @$code) ||  !@$code)) {
?>    <?php
                    $code = @$payment_method["code"] ?>    <input type="radio" name="payment_method" value="<?php echo @$payment_method["code"] ?>" checked="checked" />
    <?php
                } else {
?>    <input type="radio" name="payment_method" value="<?php echo @$payment_method["code"] ?>" />
    <?php
                }
?>    <?php echo @$payment_method["title"] ?>
    <?php
                if (@$payment_method["terms"]) {
?>    (<?php echo @$payment_method["terms"] ?>)
    <?php
                }
?> </label>
</div>
<?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$payment_method             = $save22988;
        }
?><p><strong><?php echo @$text_comments ?></strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"><?php echo @$comment ?></textarea>
</p>
<?php
        if (@$text_agree) {
?><div class="buttons">
  <div class="pull-right"><?php echo @$text_agree ?>
    <?php
            if (@$agree) {
?>    <input type="checkbox" name="agree" value="1" checked="checked" />
    <?php
            } else {
?>    <input type="checkbox" name="agree" value="1" />
    <?php
            }
?>    &nbsp;
    <input type="button" value="<?php echo @$button_continue ?>" id="button-payment-method" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
  </div>
</div>
<?php
        } else {
?><div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo @$button_continue ?>" id="button-payment-method" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
  </div>
</div>
<?php
        }
?> <?php
    }

    public function getTemplateName()
    {
        return "default/template/checkout/payment_method.twig";
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
