<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\extension\payment.twig */
class extension_extension_payment extends Twix_Template
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
    extract($context); echo @$promotion ?>
<fieldset>
  <?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  <?php
        }
?>  <?php
        if (@$success) {
?>    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  <?php
        }
?>  <legend><?php echo @$heading_title ?></legend>
  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td class="text-left"><?php echo @$column_name ?></td>
          <td></td>
          <td class="text-left"><?php echo @$column_status ?></td>
          <td class="text-right"><?php echo @$column_sort_order ?></td>
          <td class="text-right"><?php echo @$column_action ?></td>
        </tr>
      </thead>
      <tbody>
        <?php
        if (@$extensions) {
?>          <?php
            @$save11809 = $extension            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$extensions);
            foreach ($context['_seq'] as $_key => $extension) {
?>            <tr>
              <td class="text-left"><?php echo @$extension["name"] ?></td>
              <td class="text-center"><?php echo @$extension["link"] ?></td>
              <td class="text-left"><?php echo @$extension["status"] ?></td>
              <td class="text-right"><?php echo @$extension["sort_order"] ?></td>
              <td class="text-right"><?php
                if (@$extension["installed"]) {
?>                  <a href="<?php echo @$extension["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                <?php
                } else {
?>                  <button type="button" class="btn btn-primary" disabled="disabled"><i class="fa fa-pencil"></i></button>
                <?php
                }
?>                <?php
                if ( !@$extension["installed"]) {
?>                  <a href="<?php echo @$extension["install"] ?>" data-toggle="tooltip" title="<?php echo @$button_install ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>
                <?php
                } else {
?>                  <a href="<?php echo @$extension["uninstall"] ?>" data-toggle="tooltip" title="<?php echo @$button_uninstall ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>
                <?php
                }
?></td>
            </tr>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$extension             = $save11809 ?>        <?php
        } else {
?>          <tr>
            <td class="text-center" colspan="5"><?php echo @$text_no_results ?></td>
          </tr>
        <?php
        }
?>      </tbody>
    </table>
  </div>
</fieldset>
<?php
    }

    public function getTemplateName()
    {
        return "extension/extension/payment.twig";
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
