<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\report\statistics.twig */
class report_statistics extends Twix_Template
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
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save88203 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save88203 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"><?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <?php
        if (@$success) {
?>    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo @$text_list ?></h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-left"><?php echo @$column_name ?></td>
                <td class="text-right"><?php echo @$column_value ?></td>
                <td class="text-right"><?php echo @$column_action ?></td>
              </tr>
            </thead>
            <tbody>
              <?php
        if (@$statistics) {
?>              <?php
            @$save35906 = $statistic            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$statistics);
            foreach ($context['_seq'] as $_key => $statistic) {
?>              <tr>
                <td class="text-left"><?php echo @$statistic["name"] ?></td>
                <td class="text-right"><?php echo @$statistic["value"] ?></td>
                <td class="text-right"><a href="<?php echo @$statistic["href"] ?>" data-toggle="tooltip" title="<?php echo @$button_refresh ?>" class="btn btn-warning"><i class="fa fa-refresh"></i></a></td>
              </tr>
              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['statistic'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$statistic             = $save35906 ?>              <?php
        } else {
?>              <tr>
                <td class="text-center" colspan="3"><?php echo @$text_no_results ?></td>
              </tr>
              <?php
        }
?>            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "report/statistics.twig";
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
