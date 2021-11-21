<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketing\marketing_form.twig */
class marketing_marketing_form extends Twix_Template
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
        <button type="submit" form="form-marketing" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save53534 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save53534 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-marketing" class="form-horizontal">
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
            <label class="col-sm-2 control-label" for="input-description"><?php echo @$entry_description ?></label>
            <div class="col-sm-10">
              <textarea name="description" rows="5" placeholder="<?php echo @$entry_description ?>" id="input-description" class="form-control"><?php echo @$description ?></textarea>
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-code"><span data-toggle="tooltip" title="<?php echo @$help_code ?>"><?php echo @$entry_code ?></span></label>
            <div class="col-sm-10">
              <input type="text" name="code" value="<?php echo @$code ?>" placeholder="<?php echo @$entry_code ?>" id="input-code" class="form-control" />
              <?php
        if (@$error_code) {
?>              <div class="text-danger"><?php echo @$error_code ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-example"><span data-toggle="tooltip" title="<?php echo @$help_example ?>"><?php echo @$entry_example ?></span></label>
            <div class="col-sm-10">
              <input type="text" placeholder="<?php echo @$entry_example ?>" id="input-example1" class="form-control" />
              <br />
              <input type="text" placeholder="<?php echo @$entry_example ?>" id="input-example2" class="form-control" />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#input-code').on('keyup', function() {
	$('#input-example1').val('<?php echo @$store ?>?tracking=' + $('#input-code').val());
	$('#input-example2').val('<?php echo @$store ?>index.php?route=common/home&tracking=' + $('#input-code').val());
});

$('#input-code').trigger('keyup');
//--></script></div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "marketing/marketing_form.twig";
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
