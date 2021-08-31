<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\catalog\manufacturer_form.twig */
class catalog_manufacturer_form extends Twix_Template
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
        <button type="submit" form="form-manufacturer" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save26971 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save26971 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"> <?php
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-manufacturer" class="form-horizontal">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo @$tab_general ?></a></li>
            <li><a href="#tab-seo" data-toggle="tab"><?php echo @$tab_seo ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-name"><?php echo @$entry_name ?></label>
                <div class="col-sm-10">
                  <input type="text" name="name" value="<?php echo @$name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
                  <?php
        if (@$error_name) {
?>                  <div class="text-danger"><?php echo @$error_name ?></div>
                  <?php
        }
?></div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo @$entry_store ?></label>
                <div class="col-sm-10">
                  <div class="well well-sm" style="height: 150px; overflow: auto;"> <?php
        @$save70322 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>                    <div class="checkbox">
                      <label><?php
            if (twix_in_filter(@$store["store_id"], @$manufacturer_store)) {
?>                        <input type="checkbox" name="manufacturer_store[]" value="<?php echo @$store["store_id"] ?>" checked="checked" />
                        <?php echo @$store["name"] ?>
                        <?php
            } else {
?>                        <input type="checkbox" name="manufacturer_store[]" value="<?php echo @$store["store_id"] ?>" />
                        <?php echo @$store["name"] ?>
                        <?php
            }
?></label>
                    </div>
                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$store         = $save70322 ?></div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-image"><?php echo @$entry_image ?></label>
                <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="<?php echo @$thumb ?>" alt="" title="" data-placeholder="<?php echo @$placeholder ?>" /></a>
                  <input type="hidden" name="image" value="<?php echo @$image ?>" id="input-image" />
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-sort-order"><?php echo @$entry_sort_order ?></label>
                <div class="col-sm-10">
                  <input type="text" name="sort_order" value="<?php echo @$sort_order ?>" placeholder="<?php echo @$entry_sort_order ?>" id="input-sort-order" class="form-control" />
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-seo">
              <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo @$text_keyword ?></div>
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left"><?php echo @$entry_store ?></td>
                      <td class="text-left"><?php echo @$entry_keyword ?></td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
        @$save58018 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>                  <tr>
                    <td class="text-left"><?php echo @$store["name"] ?></td>
                    <td class="text-left"><?php
            @$save73086 = $language            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$languages);
            foreach ($context['_seq'] as $_key => $language) {
?>                      <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" title="<?php echo @$language["name"] ?>" /></span>
                        <input type="text" name="manufacturer_seo_url[<?php echo @$store["store_id"] ?>][<?php echo @$language["language_id"] ?>]" value="<?php
                if (@$manufacturer_seo_url[@$store["store_id"]][@$language["language_id"]]) {
echo @$manufacturer_seo_url[@$store["store_id"]][@$language["language_id"]];
                }
?>" placeholder="<?php echo @$entry_keyword ?>" class="form-control" />
                      </div>
                      <?php
                if (@$error_keyword[@$store["store_id"]][@$language["language_id"]]) {
?>                      <div class="text-danger"><?php echo @$error_keyword[@$store["store_id"]][@$language["language_id"]] ?></div>
                      <?php
                }
?> 
                      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$language             = $save73086 ?></td>
                  </tr>
                  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$store         = $save58018 ?>                  </tbody>
                </table>
              </div>
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
        return "catalog/manufacturer_form.twig";
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
