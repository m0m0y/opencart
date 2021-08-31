<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\currency.twig */
class default_template_common_currency extends Twix_Template
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
    extract($context);         if ((twix_length_filter($this->env, @$currencies) > 1)) {
?><div class="pull-left">
  <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-currency">
    <div class="btn-group">
      <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"><?php
            @$save32718 = $currency            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$currencies);
            foreach ($context['_seq'] as $_key => $currency) {
?>      <?php
                if ((@$currency["symbol_left"] && (@$currency["code"] == @$code))) {
?> <strong><?php echo @$currency["symbol_left"] ?></strong> <?php
                } elseif ((@$currency["symbol_right"] && (@$currency["code"] == @$code))) {
?> <strong><?php echo @$currency["symbol_right"] ?></strong> <?php
                }
?>      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$currency             = $save32718 ?> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_currency ?></span>&nbsp;<i class="fa fa-caret-down"></i></button>
      <ul class="dropdown-menu">
        <?php
            @$save36015 = $currency            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$currencies);
            foreach ($context['_seq'] as $_key => $currency) {
?>        <?php
                if (@$currency["symbol_left"]) {
?>        <li>
          <button class="currency-select btn btn-link btn-block" type="button" name="<?php echo @$currency["code"] ?>"><?php echo @$currency["symbol_left"] ?> <?php echo @$currency["title"] ?></button>
        </li>
        <?php
                } else {
?>        <li>
          <button class="currency-select btn btn-link btn-block" type="button" name="<?php echo @$currency["code"] ?>"><?php echo @$currency["symbol_right"] ?> <?php echo @$currency["title"] ?></button>
        </li>
        <?php
                }
?>        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currency'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$currency             = $save36015 ?>      </ul>
    </div>
    <input type="hidden" name="code" value="" />
    <input type="hidden" name="redirect" value="<?php echo @$redirect ?>" />
  </form>
</div>
<?php
        }
?> <?php
    }

    public function getTemplateName()
    {
        return "default/template/common/currency.twig";
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
