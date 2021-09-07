<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\checkout\shipping_method.twig */
class default_template_checkout_shipping_method extends Twix_Template
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
        if (@$shipping_methods) {
?><p><?php echo @$text_shipping_method ?></p>
<?php
            @$save90737 = $shipping_method            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$shipping_methods);
            foreach ($context['_seq'] as $_key => $shipping_method) {
?><p><strong><?php echo @$shipping_method["title"] ?></strong></p>
<?php
                if ( !@$shipping_method["error"]) {
                    @$save45622 = $quote                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$shipping_method["quote"]);
                    foreach ($context['_seq'] as $_key => $quote) {
?><div class="radio">
  <label> <?php
                        if (((@$quote["code"] == @$code) ||  !@$code)) {
?>    <?php
                            $code = @$quote["code"] ?>    <input type="radio" name="shipping_method" value="<?php echo @$quote["code"] ?>" checked="checked" />
    <?php
                        } else {
?>    <input type="radio" name="shipping_method" value="<?php echo @$quote["code"] ?>" />
    <?php
                        }
?>    <?php echo @$quote["title"] ?> - <?php echo @$quote["text"] ?></label>
</div>
<?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quote'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$quote                     = $save45622;
                } else {
?><div class="alert alert-danger alert-dismissible"><?php echo @$shipping_method["error"] ?></div>
<?php
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping_method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$shipping_method             = $save90737;
        }
?><p><strong><?php echo @$text_comments ?></strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"><?php echo @$comment ?></textarea>
</p>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="<?php echo @$button_continue ?>" id="button-shipping-method" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary" />
  </div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/checkout/shipping_method.twig";
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
