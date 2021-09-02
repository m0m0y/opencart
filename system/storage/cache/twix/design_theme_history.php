<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\design\theme_history.twig */
class design_theme_history extends Twix_Template
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
    extract($context); ?><div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <td class="text-left"><?php echo @$column_store ?></td>
        <td class="text-left"><?php echo @$column_route ?></td>
        <td class="text-left"><?php echo @$column_theme ?></td>
        <td class="text-left"><?php echo @$column_date_added ?></td>
        <td class="text-right"><?php echo @$column_action ?></td>
      </tr>
    </thead>
    <tbody>
    <?php
        if (@$histories) {
?>    <?php
            @$save78047 = $history            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$histories);
            foreach ($context['_seq'] as $_key => $history) {
?>    <tr>
      <td class="text-left"><?php echo @$history["store"] ?>
      <input type="hidden" name="store_id" value="<?php echo @$history["store_id"] ?>" /></td>
      <td class="text-left"><?php echo @$history["route"] ?>
      <input type="hidden" name="path" value="<?php echo @$history["route"] ?>" /></td>
      <td class="text-left"><?php echo @$history["theme"] ?></td>
      <td class="text-left"><?php echo @$history["date_added"] ?></td>
      <td class="text-right"><a href="<?php echo @$history["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a> <a href="<?php echo @$history["delete"] ?>" data-loading-text="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger"><i class="fa fa fa-trash-o"></i></a></td>
    </tr>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$history             = $save78047 ?>    <?php
        } else {
?>    <tr>
      <td class="text-center" colspan="5"><?php echo @$text_no_results ?></td>
    </tr>
    <?php
        }
?>    </tbody>
  </table>
</div>
<div class="row">
  <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
  <div class="col-sm-6 text-right"><?php echo @$results ?></div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "design/theme_history.twig";
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
