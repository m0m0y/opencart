<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_group_form.twig */
class customer_customer_group_form extends Twix_Template
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
        <button type="submit" form="form-customer-group" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save25928 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save25928 ?>      </ul>
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
?>    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo @$text_form ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-customer-group" class="form-horizontal">
          <div class="form-group required">
            <label class="col-sm-2 control-label"><?php echo @$entry_name ?></label>
            <div class="col-sm-10">
              <?php
        @$save86467 = $language        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$languages);
        foreach ($context['_seq'] as $_key => $language) {
?>              <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" title="<?php echo @$language["name"] ?>" /></span>
                <input type="text" name="customer_group_description[<?php echo @$language["language_id"] ?>][name]" value="<?php echo ((@$customer_group_description[@$language["language_id"]]) ? (@$customer_group_description[@$language["language_id"]]["name"]) : ("")) ?>" placeholder="<?php echo @$entry_name ?>" class="form-control" />
              </div>
              <?php
            if (@$error_name[@$language["language_id"]]) {
?>              <div class="text-danger"><?php echo @$error_name[@$language["language_id"]] ?></div>
              <?php
            }
?>              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$language         = $save86467 ?>            </div>
          </div>
          <?php
        @$save65064 = $language        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$languages);
        foreach ($context['_seq'] as $_key => $language) {
?>          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-description<?php echo @$language["language_id"] ?>"><?php echo @$entry_description ?></label>
            <div class="col-sm-10">
              <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" title="<?php echo @$language["name"] ?>" /></span>
                <textarea name="customer_group_description[<?php echo @$language["language_id"] ?>][description]" rows="5" placeholder="<?php echo @$entry_description ?>" id="input-description<?php echo @$language["language_id"] ?>" class="form-control"><?php echo ((@$customer_group_description[@$language["language_id"]]) ? (@$customer_group_description[@$language["language_id"]]["description"]) : ("")) ?></textarea>
              </div>
            </div>
          </div>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$language         = $save65064 ?>          <div class="form-group">
            <label class="col-sm-2 control-label"><span data-toggle="tooltip" title="<?php echo @$help_approval ?>"><?php echo @$entry_approval ?></span></label>
            <div class="col-sm-10">
              <label class="radio-inline">
                <?php
        if (@$approval) {
?>                <input type="radio" name="approval" value="1" checked="checked" />
                <?php echo @$text_yes ?>
                <?php
        } else {
?>                <input type="radio" name="approval" value="1" />
                <?php echo @$text_yes ?>
                <?php
        }
?>              </label>
              <label class="radio-inline">
                <?php
        if ( !@$approval) {
?>                <input type="radio" name="approval" value="0" checked="checked" />
                <?php echo @$text_no ?>
                <?php
        } else {
?>                <input type="radio" name="approval" value="0" />
                <?php echo @$text_no ?>
                <?php
        }
?>              </label>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-sort-order"><?php echo @$entry_sort_order ?></label>
            <div class="col-sm-10">
              <input type="text" name="sort_order" value="<?php echo @$sort_order ?>" placeholder="<?php echo @$entry_sort_order ?>" id="input-sort-order" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "customer/customer_group_form.twig";
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
