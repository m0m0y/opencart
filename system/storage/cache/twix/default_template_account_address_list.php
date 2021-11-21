<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\address_list.twig */
class default_template_account_address_list extends Twix_Template
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
    extract($context); echo @$header ?>
<div id="account-address" class="container">
  <ul class="breadcrumb">
    <?php
        @$save73347 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save73347 ?>  </ul>
  <?php
        if (@$success) {
?>  <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?></div>
  <?php
        }
?>  <?php
        if (@$error_warning) {
?>  <div class="alert alert-warning"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
  <?php
        }
?>  <div class="row"><?php echo @$column_left ?>
    <?php
        if ((@$column_left && @$column_right)) {
?>    <?php
            $class = "col-sm-6" ?>    <?php
        } elseif ((@$column_left || @$column_right)) {
?>    <?php
            $class = "col-sm-9" ?>    <?php
        } else {
?>    <?php
            $class = "col-sm-12" ?>    <?php
        }
?>    <div id="content" class="<?php echo @$class ?>"><?php echo @$content_top ?>
      <h2><?php echo @$text_address_book ?></h2>
      <?php
        if (@$addresses) {
?>      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <?php
            @$save91180 = $result            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$addresses);
            foreach ($context['_seq'] as $_key => $result) {
?>           <form  action="<?php echo @$result["delete"] ?>" method="post" enctype="multipart/form-data" id="form-address-<?php echo @$result["address_id"] ?>">
          <tr>
            <td class="text-left"><?php echo @$result["address"] ?></td>
            <td class="text-right"><a href="<?php echo @$result["update"] ?>" class="btn btn-info"><?php echo @$button_edit ?></a> &nbsp; 
            <a href = "<?php echo @$result["delete"] ?>" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="return confirm('<?php echo @$text_confirm ?>')"><?php echo @$button_delete ?></a></td>
          </tr>
          </form>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$result             = $save91180 ?>        </table>
      </div>
      <?php
        } else {
?>      <p><?php echo @$text_empty ?></p>
      <?php
        }
?>      
      <div class="buttons clearfix">
        <div class="pull-left"><a href="<?php echo @$back ?>" class="btn btn-default"><?php echo @$button_back ?></a></div>
        <div class="pull-right"><a href="<?php echo @$add ?>" class="btn btn-primary"><?php echo @$button_new_address ?></a></div>
      </div>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/account/address_list.twig";
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
