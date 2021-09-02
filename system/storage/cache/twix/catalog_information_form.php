<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\catalog\information_form.twig */
class catalog_information_form extends Twix_Template
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
        <button type="submit" form="form-information" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save62482 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save62482 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-information" class="form-horizontal">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo @$tab_general ?></a></li>
            <li><a href="#tab-data" data-toggle="tab"><?php echo @$tab_data ?></a></li>
            <li><a href="#tab-seo" data-toggle="tab"><?php echo @$tab_seo ?></a></li>
            <li><a href="#tab-design" data-toggle="tab"><?php echo @$tab_design ?></a></li>
          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
              <ul class="nav nav-tabs" id="language">
                <?php
        @$save83411 = $language        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$languages);
        foreach ($context['_seq'] as $_key => $language) {
?>                <li><a href="#language<?php echo @$language["language_id"] ?>" data-toggle="tab"><img src="language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" title="<?php echo @$language["name"] ?>" /> <?php echo @$language["name"] ?></a></li>
                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$language         = $save83411 ?>              </ul>
              <div class="tab-content"><?php
        @$save28189 = $language        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$languages);
        foreach ($context['_seq'] as $_key => $language) {
?>                <div class="tab-pane" id="language<?php echo @$language["language_id"] ?>">
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-title<?php echo @$language["language_id"] ?>"><?php echo @$entry_title ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="information_description[<?php echo @$language["language_id"] ?>][title]" value="<?php echo ((@$information_description[@$language["language_id"]]) ? (@$information_description[@$language["language_id"]]["title"]) : ("")) ?>" placeholder="<?php echo @$entry_title ?>" id="input-title<?php echo @$language["language_id"] ?>" class="form-control" />
                      <?php
            if (@$error_title[@$language["language_id"]]) {
?>                      <div class="text-danger"><?php echo @$error_title[@$language["language_id"]] ?></div>
                      <?php
            }
?> </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-description<?php echo @$language["language_id"] ?>"><?php echo @$entry_description ?></label>
                    <div class="col-sm-10">
                      <textarea name="information_description[<?php echo @$language["language_id"] ?>][description]" placeholder="<?php echo @$entry_description ?>" id="input-description<?php echo @$language["language_id"] ?>" data-toggle="summernote" data-lang="<?php echo @$summernote ?>" class="form-control"><?php echo ((@$information_description[@$language["language_id"]]) ? (@$information_description[@$language["language_id"]]["description"]) : ("")) ?></textarea>
                      <?php
            if (@$error_description[@$language["language_id"]]) {
?>                      <div class="text-danger"><?php echo @$error_description[@$language["language_id"]] ?></div>
                      <?php
            }
?> </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-meta-title<?php echo @$language["language_id"] ?>"><?php echo @$entry_meta_title ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="information_description[<?php echo @$language["language_id"] ?>][meta_title]" value="<?php echo ((@$information_description[@$language["language_id"]]) ? (@$information_description[@$language["language_id"]]["meta_title"]) : ("")) ?>" placeholder="<?php echo @$entry_meta_title ?>" id="input-meta-title<?php echo @$language["language_id"] ?>" class="form-control" />
                      <?php
            if (@$error_meta_title[@$language["language_id"]]) {
?>                      <div class="text-danger"><?php echo @$error_meta_title[@$language["language_id"]] ?></div>
                      <?php
            }
?> </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-meta-description<?php echo @$language["language_id"] ?>"><?php echo @$entry_meta_description ?></label>
                    <div class="col-sm-10">
                      <textarea name="information_description[<?php echo @$language["language_id"] ?>][meta_description]" rows="5" placeholder="<?php echo @$entry_meta_description ?>" id="input-meta-description<?php echo @$language["language_id"] ?>" class="form-control"><?php echo ((@$information_description[@$language["language_id"]]) ? (@$information_description[@$language["language_id"]]["meta_description"]) : ("")) ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-meta-keyword<?php echo @$language["language_id"] ?>"><?php echo @$entry_meta_keyword ?></label>
                    <div class="col-sm-10">
                      <textarea name="information_description[<?php echo @$language["language_id"] ?>][meta_keyword]" rows="5" placeholder="<?php echo @$entry_meta_keyword ?>" id="input-meta-keyword<?php echo @$language["language_id"] ?>" class="form-control"><?php echo ((@$information_description[@$language["language_id"]]) ? (@$information_description[@$language["language_id"]]["meta_keyword"]) : ("")) ?></textarea>
                    </div>
                  </div>
                </div>
                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$language         = $save28189 ?></div>
            </div>
            <div class="tab-pane" id="tab-data">
              <div class="form-group">
                <label class="col-sm-2 control-label"><?php echo @$entry_store ?></label>
                <div class="col-sm-10">
                  <div class="well well-sm" style="height: 150px; overflow: auto;"> <?php
        @$save40152 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>                    <div class="checkbox">
                      <label> <?php
            if (twix_in_filter(@$store["store_id"], @$information_store)) {
?>                        <input type="checkbox" name="information_store[]" value="<?php echo @$store["store_id"] ?>" checked="checked" />
                        <?php echo @$store["name"] ?>
                        <?php
            } else {
?>                        <input type="checkbox" name="information_store[]" value="<?php echo @$store["store_id"] ?>" />
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
$store         = $save40152 ?></div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-bottom"><span data-toggle="tooltip" title="<?php echo @$help_bottom ?>"><?php echo @$entry_bottom ?></span></label>
                <div class="col-sm-10">
                  <div class="checkbox">
                    <label><?php
        if (@$bottom) {
?>                      <input type="checkbox" name="bottom" value="1" checked="checked" id="input-bottom" />
                      <?php
        } else {
?>                      <input type="checkbox" name="bottom" value="1" id="input-bottom" />
                      <?php
        }
?>                      &nbsp;</label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
                <div class="col-sm-10">
                  <select name="status" id="input-status" class="form-control">
                    <?php
        if (@$status) {
?>                    <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                    <option value="0"><?php echo @$text_disabled ?></option>
                    <?php
        } else {
?>                    <option value="1"><?php echo @$text_enabled ?></option>
                    <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                    <?php
        }
?>                  </select>
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
        @$save96083 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>                  <tr>
                    <td class="text-left"><?php echo @$store["name"] ?></td>
                    <td class="text-left"><?php
            @$save14236 = $language            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$languages);
            foreach ($context['_seq'] as $_key => $language) {
?>                      <div class="input-group"><span class="input-group-addon"><img src="language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" title="<?php echo @$language["name"] ?>" /></span>
                        <input type="text" name="information_seo_url[<?php echo @$store["store_id"] ?>][<?php echo @$language["language_id"] ?>]" value="<?php
                if (@$information_seo_url[@$store["store_id"]][@$language["language_id"]]) {
echo @$information_seo_url[@$store["store_id"]][@$language["language_id"]];
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
$language             = $save14236 ?></td>
                  </tr>
                  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$store         = $save96083 ?>                  </tbody>
                </table>
              </div>
            </div>
            <div class="tab-pane" id="tab-design">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-left"><?php echo @$entry_store ?></td>
                      <td class="text-left"><?php echo @$entry_layout ?></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
        @$save87248 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>                  <tr>
                    <td class="text-left"><?php echo @$store["name"] ?></td>
                    <td class="text-left"><select name="information_layout[<?php echo @$store["store_id"] ?>]" class="form-control">
                        <option value=""></option>
                        <?php
            @$save57208 = $layout            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$layouts);
            foreach ($context['_seq'] as $_key => $layout) {
?>                        <?php
                if ((@$information_layout[@$store["store_id"]] && (@$information_layout[@$store["store_id"]] == @$layout["layout_id"]))) {
?>                        <option value="<?php echo @$layout["layout_id"] ?>" selected="selected"><?php echo @$layout["name"] ?></option>
                        <?php
                } else {
?>                        <option value="<?php echo @$layout["layout_id"] ?>"><?php echo @$layout["name"] ?></option>
                        <?php
                }
?>                        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$layout             = $save57208 ?>                      </select></td>
                  </tr>
                  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$store         = $save87248 ?>                    </tbody>
                  
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href="view/javascript/codemirror/lib/codemirror.css" rel="stylesheet" />
  <link href="view/javascript/codemirror/theme/monokai.css" rel="stylesheet" />
  <script type="text/javascript" src="view/javascript/codemirror/lib/codemirror.js"></script> 
  <script type="text/javascript" src="view/javascript/codemirror/lib/xml.js"></script> 
  <script type="text/javascript" src="view/javascript/codemirror/lib/formatting.js"></script> 
  <script type="text/javascript" src="view/javascript/summernote/summernote.js"></script>
  <link href="view/javascript/summernote/summernote.css" rel="stylesheet" />
  <script type="text/javascript" src="view/javascript/summernote/summernote-image-attributes.js"></script> 
  <script type="text/javascript" src="view/javascript/summernote/opencart.js"></script> 
  <script type="text/javascript"><!--
$('#language a:first').tab('show');
//--></script></div>
<?php echo @$footer ?> 
<?php
    }

    public function getTemplateName()
    {
        return "catalog/information_form.twig";
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
