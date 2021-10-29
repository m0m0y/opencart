<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\localisation\zone_form.twig */
class localisation_zone_form extends Twix_Template
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
        <button type="submit" form="form-zone" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save70019 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save70019 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-zone" class="form-horizontal">
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name"><?php echo @$entry_name ?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo @$name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
              <?php
        if (@$error_name) {
?>              <div class="text-danger"><?php echo @$error_name ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-code"><?php echo @$entry_code ?></label>
            <div class="col-sm-10">
              <input type="text" name="code" value="<?php echo @$code ?>" placeholder="<?php echo @$entry_code ?>" id="input-code" class="form-control" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-country"><?php echo @$entry_country ?></label>
            <div class="col-sm-10">
              <select name="country_id" id="input-country" class="form-control">
                <?php
        @$save57146 = $country        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$countries);
        foreach ($context['_seq'] as $_key => $country) {
?>                <?php
            if ((@$country["country_id"] == @$country_id)) {
?>                <option value="<?php echo @$country["country_id"] ?>" selected="selected"><?php echo @$country["name"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$country["country_id"] ?>"><?php echo @$country["name"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$country         = $save57146 ?>              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
            <div class="col-sm-10">
              <select name="status" id="input-status" class="form-control">
                <?php
        if (@$status) {
?>                <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                <option value="0"><?php echo @$text_disabled ?></option>
                <?php
        } else {
?>                <option value="1"><?php echo @$text_enabled ?></option>
                <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                <?php
        }
?>              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "localisation/zone_form.twig";
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
