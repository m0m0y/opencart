<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\catalog\option_list.twig */
class catalog_option_list extends Twix_Template
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
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-option').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save36112 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save36112 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php
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
        <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-option">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php
        if ((@$sort == "od.name")) {
?>                    <a href="<?php echo @$sort_name ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_name ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_name ?>"><?php echo @$column_name ?></a>
                    <?php
        }
?></td>
                  <td class="text-right"><?php
        if ((@$sort == "o.sort_order")) {
?>                    <a href="<?php echo @$sort_sort_order ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_sort_order ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_sort_order ?>"><?php echo @$column_sort_order ?></a>
                    <?php
        }
?></td>
                  <td class="text-right"><?php echo @$column_action ?></td>
                </tr>
              </thead>
              <tbody>
                <?php
        if (@$options) {
?>                <?php
            @$save36838 = $option            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$options);
            foreach ($context['_seq'] as $_key => $option) {
?>                <tr>
                  <td class="text-center"><?php
                if (twix_in_filter(@$option["option_id"], @$selected)) {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$option["option_id"] ?>" checked="checked" />
                    <?php
                } else {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$option["option_id"] ?>" />
                    <?php
                }
?></td>
                  <td class="text-left"><?php echo @$option["name"] ?></td>
                  <td class="text-right"><?php echo @$option["sort_order"] ?></td>
                  <td class="text-right"><a href="<?php echo @$option["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$option             = $save36838 ?>                <?php
        } else {
?>                <tr>
                  <td class="text-center" colspan="4"><?php echo @$text_no_results ?></td>
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
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "catalog/option_list.twig";
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
