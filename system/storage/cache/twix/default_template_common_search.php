<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\search.twig */
class default_template_common_search extends Twix_Template
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
    extract($context); ?><div id="search" class="input-group">
  <input type="text" name="search" value="<?php echo @$search ?>" placeholder="<?php echo @$text_search ?>" class="form-control input-lg" />
  <span class="input-group-btn">
    <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
  </span>
</div><?php
    }

    public function getTemplateName()
    {
        return "default/template/common/search.twig";
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
