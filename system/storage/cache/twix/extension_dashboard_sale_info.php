<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\dashboard\sale_info.twig */
class extension_dashboard_sale_info extends Twix_Template
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
  <div class="tile-heading"><?php echo @$heading_title ?> <span class="pull-right">
    <?php
        if ((@$percentage > 0)) {
?>    <i class="fa fa-caret-up"></i>
    <?php
        } elseif ((@$percentage < 0)) {
?>    <i class="fa fa-caret-down"></i>
    <?php
        }
?>    <?php echo @$percentage ?>%</span></div>
  <div class="tile-body"><i class="fa fa-credit-card"></i>
    <h2 class="pull-right"><?php echo @$total ?></h2>
  </div>
  <div class="tile-footer"><a href="<?php echo @$sale ?>"><?php echo @$text_view ?></a></div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "extension/dashboard/sale_info.twig";
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
