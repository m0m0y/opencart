<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\content_bottom.twig */
class default_template_common_content_bottom extends Twix_Template
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
    extract($context);         @$save14840 = $module        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$modules);
        foreach ($context['_seq'] as $_key => $module) {
echo @$module ?>
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$module         = $save14840;
    }

    public function getTemplateName()
    {
        return "default/template/common/content_bottom.twig";
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
