<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\installer_history.twig */
class marketplace_installer_history extends Twix_Template
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
        <th><?php echo @$column_filename ?></th>
        <th><?php echo @$column_date_added ?></th>
        <th class="text-right"><?php echo @$column_action ?></th>
      </tr>
    </thead>
    <tbody>
    
    <?php
        if (@$histories) {
?>    <?php
            @$save22079 = $history            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$histories);
            foreach ($context['_seq'] as $_key => $history) {
?>    <tr>
      <td><?php echo @$history["filename"] ?></td>
      <td><?php echo @$history["date_added"] ?></td>
      <td class="text-right"><button type="button" value="<?php echo @$history["extension_install_id"] ?>" data-loading="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_uninstall ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i></button></td>
    </tr>
    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['history'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$history             = $save22079 ?>    <?php
        } else {
?>    <tr>
      <td colspan="3" class="text-center"><?php echo @$text_no_results ?></td>
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
        return "marketplace/installer_history.twig";
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
