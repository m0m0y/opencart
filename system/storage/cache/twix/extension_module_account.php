<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\module\account.twig */
class extension_module_account extends Twix_Template
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
        <button type="submit" form="form-module" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save21246 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save21246 ?>      </ul>
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
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo @$text_edit ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-module" class="form-horizontal">
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
            <div class="col-sm-10">
              <select name="module_account_status" id="input-status" class="form-control">
                <?php
        if (@$module_account_status) {
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
        return "extension/module/account.twig";
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
