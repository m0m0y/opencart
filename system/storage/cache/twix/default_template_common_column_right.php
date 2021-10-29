<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\column_right.twig */
class default_template_common_column_right extends Twix_Template
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
    extract($context);         if (@$modules) {
?><aside id="column-right" class="col-sm-3 hidden-xs">
  <?php
            @$save30476 = $module            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$modules);
            foreach ($context['_seq'] as $_key => $module) {
?>  <?php echo @$module ?>
  <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$module             = $save30476 ?></aside>
<?php
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/column_right.twig";
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
