<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\dashboard\online_info.twig */
class extension_dashboard_online_info extends Twix_Template
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
    extract($context); ?><div class="tile tile-primary">
  <div class="tile-heading"><?php echo @$heading_title ?></div>
  <div class="tile-body"><i class="fa fa-users"></i>
    <h2 class="pull-right"><?php echo @$total ?></h2>
  </div>
  <div class="tile-footer"><a href="<?php echo @$online ?>"><?php echo @$text_view ?></a></div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "extension/dashboard/online_info.twig";
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
