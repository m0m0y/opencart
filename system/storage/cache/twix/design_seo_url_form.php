<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\design\seo_url_form.twig */
class design_seo_url_form extends Twix_Template
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
        <button type="submit" form="form-seo-url" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save91283 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save91283 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"><?php
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-seo-url" class="form-horizontal">
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-query"><?php echo @$entry_query ?></label>
            <div class="col-sm-10">
              <input type="text" name="query" value="<?php echo @$query ?>" placeholder="<?php echo @$entry_query ?>" id="input-query" class="form-control" />
              <?php
        if (@$error_query) {
?>              <div class="text-danger"><?php echo @$error_query ?></div>
              <?php
        }
?>          
           
           </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-keyword"><?php echo @$entry_keyword ?></label>
            <div class="col-sm-10">
              <input type="text" name="keyword" value="<?php echo @$keyword ?>" placeholder="<?php echo @$entry_keyword ?>" id="input-keyword" class="form-control" />
              <?php
        if (@$error_keyword) {
?>              <div class="text-danger"><?php echo @$error_keyword ?></div>
              <?php
        }
?>            
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-store"><?php echo @$entry_store ?></label>
            <div class="col-sm-10">
              <select name="store_id" id="input-store" class="form-control">
                <?php
        @$save62958 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>                <?php
            if ((@$store["store_id"] == @$store_id)) {
?>                <option value="<?php echo @$store["store_id"] ?>" selected="selected"><?php echo @$store["name"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$store["store_id"] ?>"><?php echo @$store["name"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$store         = $save62958 ?>              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-language"><?php echo @$entry_language ?></label>
            <div class="col-sm-10">
              <select name="language_id" id="input-language" class="form-control">
                <?php
        @$save77865 = $language        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$languages);
        foreach ($context['_seq'] as $_key => $language) {
?>                <?php
            if ((@$language["language_id"] == @$language_id)) {
?>                <option value="<?php echo @$language["language_id"] ?>" selected="selected"><?php echo @$language["name"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$language["language_id"] ?>"><?php echo @$language["name"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$language         = $save77865 ?>              </select>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "design/seo_url_form.twig";
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
