<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\extension\advertise.twig */
class extension_extension_advertise extends Twix_Template
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
    extract($context); ?><fieldset>
  <legend><?php echo @$heading_title ?></legend>
  <div id="blockerError" style="display: none;" class="alert alert-danger">
    <i class="fa fa-exclamation-circle"></i> <?php echo @$error_adblock ?>
  </div>
  <?php
        if (@$error_warning) {
?>  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <?php
        if (@$success) {
?>  <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr>
          <td class="text-left"><?php echo @$column_name ?></td>
          <td class="text-left"><?php echo @$column_status ?></td>
          <td class="text-right"><?php echo @$column_action ?></td>
        </tr>
      </thead>
      <tbody>
        <?php
        if (@$extensions) {
?>        <?php
            @$save24572 = $extension            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$extensions);
            foreach ($context['_seq'] as $_key => $extension) {
?>        <tr>
          <td class="text-left" colspan="2"><b><?php echo @$extension["name"] ?></b></td>
          <td class="text-right"><?php
                if ( !@$extension["installed"]) {
?>            <a href="<?php echo @$extension["install"] ?>" data-toggle="tooltip" title="<?php echo @$button_install ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i></a>
            <?php
                } else {
?>            <a href="<?php echo @$extension["uninstall"] ?>" data-toggle="tooltip" title="<?php echo @$button_uninstall ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a>
            <?php
                }
?></td>
        </tr>
        <?php
                if (@$extension["installed"]) {
?>        <?php
                    @$save86370 = $store                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$extension["store"]);
                    foreach ($context['_seq'] as $_key => $store) {
?>        <tr>
          <td class="text-left">&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;<?php echo @$store["name"] ?></td>
          <td class="text-left"><?php echo @$store["status"] ?></td>
          <td class="text-right"><a href="<?php echo @$store["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
        </tr>
        <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$store                     = $save86370 ?>        <?php
                }
?>        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$extension             = $save24572 ?>        <?php
        } else {
?>        <tr>
          <td class="text-center" colspan="3"><?php echo @$text_no_results ?></td>
        </tr>
        <?php
        }
?>      </tbody>
    </table>
  </div>
</fieldset>
<style type="text/css">
  .adBanner {
      background-color: transparent;
      height: 1px;
      width: 1px;
  }
</style>
<div id="wrapTest">
    <div class="adBanner">
    </div>
</div>
<script type="text/javascript">
  (function($) {
    $(document).ready(function() {
      $('#blockerError').toggle($("#wrapTest").height() == 0);
    });
  })(jQuery);
</script><?php
    }

    public function getTemplateName()
    {
        return "extension/extension/advertise.twig";
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
