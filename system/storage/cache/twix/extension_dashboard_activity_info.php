<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\dashboard\activity_info.twig */
class extension_dashboard_activity_info extends Twix_Template
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
    extract($context); ?><div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><i class="fa fa-calendar"></i> <?php echo @$heading_title ?></h3>
  </div>
  <ul class="list-group">
    <?php
        if (@$activities) {
?>    <?php
            @$save31854 = $activity            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$activities);
            foreach ($context['_seq'] as $_key => $activity) {
?>    <li class="list-group-item"><?php echo @$activity["comment"] ?><br />
      <small class="text-muted"><i class="fa fa-clock-o"></i> <?php echo @$activity["date_added"] ?></small></li>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$activity             = $save31854 ?>    <?php
        } else {
?>    <li class="list-group-item text-center"><?php echo @$text_no_results ?></li>
    <?php
        }
?>  </ul>
</div><?php
    }

    public function getTemplateName()
    {
        return "extension/dashboard/activity_info.twig";
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
