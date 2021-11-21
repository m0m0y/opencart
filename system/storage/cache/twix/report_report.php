<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\report\report.twig */
class report_report extends Twix_Template
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
    extract($context); echo @$header;
echo @$column_left ?>
<div id="content">
  <div class="page-header">
    <div class="container-fluid">
      <div class="pull-right">
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_filter ?>" onclick="$('#filter-report').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save95525 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save95525 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart"></i> <?php echo @$text_type ?></h3>
      </div>
      <div class="panel-body">
        <div class="well">
          <div class="input-group">
            <select name="report" onchange="location = this.value;" class="form-control">
              
              <?php
        @$save27677 = $report        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$reports);
        foreach ($context['_seq'] as $_key => $report) {
?>              <?php
            if ((@$code == @$report["code"])) {
?>              
              <option value="<?php echo @$report["href"] ?>" selected="selected"><?php echo @$report["text"] ?></option>
              
              <?php
            } else {
?>              
              <option value="<?php echo @$report["href"] ?>"><?php echo @$report["text"] ?></option>
              
              <?php
            }
?>              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$report         = $save27677 ?>            
            </select>
            <span class="input-group-addon"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></span></div>
        </div>
      </div>
    </div>
    <div><?php echo @$report ?></div>
  </div>
</div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "report/report.twig";
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
