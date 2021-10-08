<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\design\layout_form.twig */
class design_layout_form extends Twix_Template
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
        <button type="submit" form="form-layout" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save18094 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save18094 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-layout" class="form-horizontal">
          <fieldset>
            <legend><?php echo @$text_route ?></legend>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-name"><?php echo @$entry_name ?></label>
              <div class="col-sm-10">
                <input type="text" name="name" value="<?php echo @$name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
                <?php
        if (@$error_name) {
?>                <div class="text-danger"><?php echo @$error_name ?></div>
                <?php
        }
?>              </div>
            </div>
            <table id="route" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <td class="text-left"><?php echo @$entry_store ?></td>
                  <td class="text-left"><?php echo @$entry_route ?></td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                <?php
        $route_row = 0 ?>                <?php
        @$save19613 = $layout_route        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$layout_routes);
        foreach ($context['_seq'] as $_key => $layout_route) {
?>                <tr id="route-row<?php echo @$route_row ?>">
                  <td class="text-left"><select name="layout_route[<?php echo @$route_row ?>][store_id]" class="form-control">
                      <option value="0"><?php echo @$text_default ?></option>
                      <?php
            @$save45315 = $store            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$stores);
            foreach ($context['_seq'] as $_key => $store) {
?>                      <?php
                if ((@$store["store_id"] == @$layout_route["store_id"])) {
?>                      <option value="<?php echo @$store["store_id"] ?>" selected="selected"><?php echo @$store["name"] ?></option>
                      <?php
                } else {
?>                      <option value="<?php echo @$store["store_id"] ?>"><?php echo @$store["name"] ?></option>
                      <?php
                }
?>                      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$store             = $save45315 ?>                    </select></td>
                  <td class="text-left"><input type="text" name="layout_route[<?php echo @$route_row ?>][route]" value="<?php echo @$layout_route["route"] ?>" placeholder="<?php echo @$entry_route ?>" class="form-control" /></td>
                  <td class="text-left"><button type="button" onclick="$('#route-row<?php echo @$route_row ?>').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
                </tr>
                <?php
            $route_row = (@$route_row + 1) ?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_route'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$layout_route         = $save19613 ?>              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2"></td>
                  <td class="text-left"><button type="button" onclick="addRoute();" data-toggle="tooltip" title="<?php echo @$button_route_add ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
          <fieldset>
            <legend><?php echo @$text_module ?></legend>
            <?php
        $module_row = 0 ?>            <div class="row">
              <div class="col-lg-3 col-md-4 col-sm-12">
                <table id="module-column-left" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-center"><?php echo @$text_column_left ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
        @$save18244 = $layout_module        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$layout_modules);
        foreach ($context['_seq'] as $_key => $layout_module) {
?>                    <?php
            if ((@$layout_module["position"] == "column_left")) {
?>                    <tr id="module-row<?php echo @$module_row ?>">
                      <td class="text-left"><div class="input-group">
                          <select name="layout_module[<?php echo @$module_row ?>][code]" class="form-control input-sm">
                            <?php
                @$save15054 = $extension                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extensions);
                foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
                    if ( !@$extension["module"]) {
?>                            <?php
                        if ((@$extension["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$extension["code"] ?>" selected="selected"><?php echo @$extension["name"] ?></option>
                            <?php
                        } else {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
                        }
?>                            <?php
                    } else {
?>                            <?php
                        @$save54904 = $module                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                        foreach ($context['_seq'] as $_key => $module) {
?>                            <?php
                            if ((@$module["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$module["code"] ?>" selected="selected"><?php echo @$module["name"] ?></option>
                            <?php
                            } else {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                            }
?>                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$module                         = $save54904 ?>                            <?php
                    }
?>                            </optgroup>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$extension                 = $save15054 ?>                          </select>
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][position]" value="<?php echo @$layout_module["position"] ?>" />
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][sort_order]" value="<?php echo @$layout_module["sort_order"] ?>" />
                          <div class="input-group-btn"><a href="<?php echo @$layout_module["edit"] ?>" type="button" data-toggle="tooltip" title="<?php echo @$button_edit ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="button" onclick="$('#module-row<?php echo @$module_row ?>').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    <?php
                $module_row = (@$module_row + 1) ?>                    <?php
            }
?>                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$layout_module         = $save18244 ?>                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="text-left"><div class="input-group">
                          <select class="form-control input-sm">
                            <option value=""></option>
                            <?php
        @$save70630 = $extension        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$extensions);
        foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
            if ( !@$extension["module"]) {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
            } else {
?>                            <?php
                @$save58764 = $module                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                foreach ($context['_seq'] as $_key => $module) {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$module                 = $save58764 ?>                            <?php
            }
?>                            </optgroup>
                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$extension         = $save70630 ?>                          </select>
                          <div class="input-group-btn">
                            <button type="button" onclick="addModule('column-left');" data-toggle="tooltip" title="<?php echo @$button_module_add ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="col-lg-6 col-md-4 col-sm-12">
                <table id="module-content-top" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-center"><?php echo @$text_content_top ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
        @$save63156 = $layout_module        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$layout_modules);
        foreach ($context['_seq'] as $_key => $layout_module) {
?>                    <?php
            if ((@$layout_module["position"] == "content_top")) {
?>                    <tr id="module-row<?php echo @$module_row ?>">
                      <td class="text-left"><div class="input-group">
                          <select name="layout_module[<?php echo @$module_row ?>][code]" class="form-control input-sm">
                            <?php
                @$save29582 = $extension                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extensions);
                foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
                    if ( !@$extension["module"]) {
?>                            <?php
                        if ((@$extension["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$extension["code"] ?>" selected="selected"><?php echo @$extension["name"] ?></option>
                            <?php
                        } else {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
                        }
?>                            <?php
                    } else {
?>                            <?php
                        @$save18893 = $module                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                        foreach ($context['_seq'] as $_key => $module) {
?>                            <?php
                            if ((@$module["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$module["code"] ?>" selected="selected"><?php echo @$module["name"] ?></option>
                            <?php
                            } else {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                            }
?>                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$module                         = $save18893 ?>                            <?php
                    }
?>                            </optgroup>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$extension                 = $save29582 ?>                          </select>
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][position]" value="<?php echo @$layout_module["position"] ?>" />
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][sort_order]" value="<?php echo @$layout_module["sort_order"] ?>" />
                          <div class="input-group-btn"> <a href="<?php echo @$layout_module["edit"] ?>" type="button" data-toggle="tooltip" title="<?php echo @$button_edit ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="button" onclick="$('#module-row<?php echo @$module_row ?>').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    <?php
                $module_row = (@$module_row + 1) ?>                    <?php
            }
?>                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$layout_module         = $save63156 ?>                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="text-left"><div class="input-group">
                          <select class="form-control input-sm">
                            <option value=""></option>
                            <?php
        @$save90356 = $extension        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$extensions);
        foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
            if ( !@$extension["module"]) {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
            } else {
?>                            <?php
                @$save37772 = $module                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                foreach ($context['_seq'] as $_key => $module) {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$module                 = $save37772 ?>                            <?php
            }
?>                            </optgroup>
                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$extension         = $save90356 ?>                          </select>
                          <div class="input-group-btn">
                            <button type="button" onclick="addModule('content-top');" data-toggle="tooltip" title="<?php echo @$button_module_add ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
                <table id="module-content-bottom" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-center"><?php echo @$text_content_bottom ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
        @$save86500 = $layout_module        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$layout_modules);
        foreach ($context['_seq'] as $_key => $layout_module) {
?>                    <?php
            if ((@$layout_module["position"] == "content_bottom")) {
?>                    <tr id="module-row<?php echo @$module_row ?>">
                      <td class="text-left"><div class="input-group">
                          <select name="layout_module[<?php echo @$module_row ?>][code]" class="form-control input-sm">
                            <?php
                @$save55600 = $extension                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extensions);
                foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
                    if ( !@$extension["module"]) {
?>                            <?php
                        if ((@$extension["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$extension["code"] ?>" selected="selected"><?php echo @$extension["name"] ?></option>
                            <?php
                        } else {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
                        }
?>                            <?php
                    } else {
?>                            <?php
                        @$save20679 = $module                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                        foreach ($context['_seq'] as $_key => $module) {
?>                            <?php
                            if ((@$module["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$module["code"] ?>" selected="selected"><?php echo @$module["name"] ?></option>
                            <?php
                            } else {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                            }
?>                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$module                         = $save20679 ?>                            <?php
                    }
?>                            </optgroup>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$extension                 = $save55600 ?>                          </select>
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][position]" value="<?php echo @$layout_module["position"] ?>" />
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][sort_order]" value="<?php echo @$layout_module["sort_order"] ?>" />
                          <div class="input-group-btn"><a href="<?php echo @$layout_module["edit"] ?>" type="button" data-toggle="tooltip" title="<?php echo @$button_edit ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="button" onclick="$('#module-row<?php echo @$module_row ?>').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    <?php
                $module_row = (@$module_row + 1) ?>                    <?php
            }
?>                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$layout_module         = $save86500 ?>                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="text-left"><div class="input-group">
                          <select class="form-control input-sm">
                            <option value=""></option>
                            <?php
        @$save22028 = $extension        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$extensions);
        foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
            if ( !@$extension["module"]) {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
            } else {
?>                            <?php
                @$save30964 = $module                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                foreach ($context['_seq'] as $_key => $module) {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$module                 = $save30964 ?>                            <?php
            }
?>                            </optgroup>
                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$extension         = $save22028 ?>                          </select>
                          <div class="input-group-btn">
                            <button type="button" onclick="addModule('content-bottom');" data-toggle="tooltip" title="<?php echo @$button_module_add ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-12">
                <table id="module-column-right" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-center"><?php echo @$text_column_right ?></td>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
        @$save87190 = $layout_module        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$layout_modules);
        foreach ($context['_seq'] as $_key => $layout_module) {
?>                    <?php
            if ((@$layout_module["position"] == "column_right")) {
?>                    <tr id="module-row<?php echo @$module_row ?>">
                      <td class="text-left"><div class="input-group">
                          <select name="layout_module[<?php echo @$module_row ?>][code]" class="form-control input-sm">
                            <?php
                @$save92946 = $extension                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extensions);
                foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
                    if ( !@$extension["module"]) {
?>                            <?php
                        if ((@$extension["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$extension["code"] ?>" selected="selected"><?php echo @$extension["name"] ?></option>
                            <?php
                        } else {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
                        }
?>                            <?php
                    } else {
?>                            <?php
                        @$save63114 = $module                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                        foreach ($context['_seq'] as $_key => $module) {
?>                            <?php
                            if ((@$module["code"] == @$layout_module["code"])) {
?>                            <option value="<?php echo @$module["code"] ?>" selected="selected"><?php echo @$module["name"] ?></option>
                            <?php
                            } else {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                            }
?>                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$module                         = $save63114 ?>                            <?php
                    }
?>                            </optgroup>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$extension                 = $save92946 ?>                          </select>
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][position]" value="<?php echo @$layout_module["position"] ?>" />
                          <input type="hidden" name="layout_module[<?php echo @$module_row ?>][sort_order]" value="<?php echo @$layout_module["sort_order"] ?>" />
                          <div class="input-group-btn"><a href="<?php echo @$layout_module["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" target="_blank" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a>
                            <button type="button" onclick="$('#module-row<?php echo @$module_row ?>').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                    <?php
                $module_row = (@$module_row + 1) ?>                    <?php
            }
?>                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout_module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$layout_module         = $save87190 ?>                  </tbody>
                  <tfoot>
                    <tr>
                      <td class="text-left"><div class="input-group">
                          <select class="form-control input-sm">
                            <option value=""></option>
                            <?php
        @$save51459 = $extension        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$extensions);
        foreach ($context['_seq'] as $_key => $extension) {
?>                            <optgroup label="<?php echo @$extension["name"] ?>">
                            <?php
            if ( !@$extension["module"]) {
?>                            <option value="<?php echo @$extension["code"] ?>"><?php echo @$extension["name"] ?></option>
                            <?php
            } else {
?>                            <?php
                @$save15044 = $module                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                foreach ($context['_seq'] as $_key => $module) {
?>                            <option value="<?php echo @$module["code"] ?>"><?php echo @$module["name"] ?></option>
                            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$module                 = $save15044 ?>                            <?php
            }
?>                            </optgroup>
                            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$extension         = $save51459 ?>                          </select>
                          <div class="input-group-btn">
                            <button type="button" onclick="addModule('column-right');" data-toggle="tooltip" title="<?php echo @$button_module_add ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></button>
                          </div>
                        </div></td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
var route_row = <?php echo @$route_row ?>;

function addRoute() {
	html  = '<tr id="route-row' + route_row + '">';
	html += '  <td class="text-left"><select name="layout_route[' + route_row + '][store_id]" class="form-control">';
	html += '  <option value="0"><?php echo @$text_default ?></option>';
	<?php
        @$save26958 = $store        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$stores);
        foreach ($context['_seq'] as $_key => $store) {
?>	html += '<option value="<?php echo @$store["store_id"] ?>"><?php echo twix_escape_filter($this->env, @$store["name"], "js") ?></option>';
	<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$store         = $save26958 ?>	html += '  </select></td>';
	html += '  <td class="text-left"><input type="text" name="layout_route[' + route_row + '][route]" value="" placeholder="<?php echo @$entry_route ?>" class="form-control" /></td>';
	html += '  <td class="text-left"><button type="button" onclick="$(\'#route-row' + route_row + '\').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html += '</tr>';
	
	$('#route tbody').append(html);
	
	route_row++;
}

var module_row = <?php echo @$module_row ?>;

function addModule(type) {
	html  = '<tr id="module-row' + module_row + '">';
    html += '  <td class="text-left"><div class="input-group"><select name="layout_module[' + module_row + '][code]" class="form-control input-sm">';
	<?php
        @$save13714 = $extension        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$extensions);
        foreach ($context['_seq'] as $_key => $extension) {
?>	html += '    <optgroup label="<?php echo twix_escape_filter($this->env, @$extension["name"], "js") ?>">';
	<?php
            if ( !@$extension["module"]) {
?>	html += '      <option value="<?php echo @$extension["code"] ?>"><?php echo twix_escape_filter($this->env, @$extension["name"], "js") ?></option>';
	<?php
            } else {
?>	<?php
                @$save53314 = $module                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$extension["module"]);
                foreach ($context['_seq'] as $_key => $module) {
?>	html += '      <option value="<?php echo @$module["code"] ?>"><?php echo twix_escape_filter($this->env, @$module["name"], "js") ?></option>';
	<?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$module                 = $save53314 ?>	<?php
            }
?>	html += '    </optgroup>';
	<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$extension         = $save13714 ?>	html += '  </select>';
    html += '  <input type="hidden" name="layout_module[' + module_row + '][position]" value="' + type.replace('-', '_') + '" />';
    html += '  <input type="hidden" name="layout_module[' + module_row + '][sort_order]" value="" />';
	html += '  <div class="input-group-btn"><a href="" target="_blank" type="button" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></a><button type="button" onclick="$(\'#module-row' + module_row + '\').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-sm"><i class="fa fa fa-minus-circle"></i></button></div></div></td>';
	html += '</tr>';
	
	$('#module-' + type + ' tbody').append(html);
	
	$('#module-' + type + ' tbody select[name=\'layout_module[' + module_row + '][code]\']').val($('#module-' + type + ' tfoot select').val());
	
	$('#module-' + type + ' select[name*=\'code\']').trigger('change');
		
	$('#module-' + type + ' tbody input[name*=\'sort_order\']').each(function(i, element) {
		$(element).val(i);
	});
	
	module_row++;
}

$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').delegate('select[name*=\'code\']', 'change', function() {
	var part = this.value.split('.');
	
	if (!part[1]) {
		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=<?php echo @$user_token ?>');
	} else {
		$(this).parent().find('a').attr('href', 'index.php?route=extension/module/' + part[0] + '&user_token=<?php echo @$user_token ?>&module_id=' + part[1]);
	}
});

$('#module-column-left, #module-column-right, #module-content-top, #module-content-bottom').trigger('change');
//--></script> 
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "design/layout_form.twig";
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
