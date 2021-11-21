<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\design\translation_list.twig */
class design_translation_list extends Twix_Template
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
      <div class="pull-right"><a href="<?php echo @$add ?>" data-toggle="tooltip" title="<?php echo @$button_add ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-translation').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save42041 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save42041 ?>      </ul>
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
        <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-translation">
          <div class="table-responsive">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php
        if ((@$sort == "store")) {
?><a href="<?php echo @$sort_store ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_store ?></a> <?php
        } else {
?><a href="<?php echo @$sort_store ?>"><?php echo @$column_store ?></a><?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "language")) {
?><a href="<?php echo @$sort_language ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_language ?></a><?php
        } else {
?><a href="<?php echo @$sort_language ?>"><?php echo @$column_language ?></a><?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "route")) {
?><a href="<?php echo @$sort_route ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_route ?></a> <?php
        } else {
?><a href="<?php echo @$sort_route ?>"><?php echo @$column_route ?></a><?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "key")) {
?><a href="<?php echo @$sort_key ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_key ?></a><?php
        } else {
?><a href="<?php echo @$sort_key ?>"><?php echo @$column_key ?></a><?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "value")) {
?><a href="<?php echo @$sort_value ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_value ?></a><?php
        } else {
?><a href="<?php echo @$sort_value ?>"><?php echo @$column_value ?></a><?php
        }
?></td>
                  <td class="text-right"><?php echo @$column_action ?></td>
                </tr>
              </thead>
              <tbody>
              <?php
        if (@$translations) {
?>              <?php
            @$save50480 = $translation            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$translations);
            foreach ($context['_seq'] as $_key => $translation) {
?>              <tr>
                <td class="text-center"><?php
                if (twix_in_filter(@$translation["translation_id"], @$selected)) {
?>                  <input type="checkbox" name="selected[]" value="<?php echo @$translation["translation_id"] ?>" checked="checked" />
                  <?php
                } else {
?>                  <input type="checkbox" name="selected[]" value="<?php echo @$translation["translation_id"] ?>" />
                  <?php
                }
?></td>
                <td class="text-left"><?php echo @$translation["store"] ?></td>
                <td class="text-left"><?php echo @$translation["language"] ?></td>
                <td class="text-left"><?php echo @$translation["route"] ?></td>
                <td class="text-left"><?php echo @$translation["key"] ?></td>
                <td class="text-left"><?php echo @$translation["value"] ?></td>
                <td class="text-right"><a href="<?php echo @$translation["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
              </tr>
              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$translation             = $save50480 ?>              <?php
        } else {
?>              <tr>
                <td class="text-center" colspan="7"><?php echo @$text_no_results ?></td>
              </tr>
              <?php
        }
?>              </tbody>
            </table>
          </div>
        </form>
        <div class="row">
          <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
          <div class="col-sm-6 text-right"><?php echo @$results ?></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer ?> 
<?php
    }

    public function getTemplateName()
    {
        return "design/translation_list.twig";
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
