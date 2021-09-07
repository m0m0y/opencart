<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_form.twig */
class customer_customer_form extends Twix_Template
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
        <button type="submit" form="form-customer" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save18011 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save18011 ?>      </ul>
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
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-customer" class="form-horizontal">
          <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-general" data-toggle="tab"><?php echo @$tab_general ?></a></li>
            <li><a href="#tab-affiliate" data-toggle="tab"><?php echo @$tab_affiliate ?></a></li>
            <?php
        if (@$customer_id) {
?>            <li><a href="#tab-history" data-toggle="tab"><?php echo @$tab_history ?></a></li>
            <li><a href="#tab-transaction" data-toggle="tab"><?php echo @$tab_transaction ?></a></li>
            <li><a href="#tab-reward" data-toggle="tab"><?php echo @$tab_reward ?></a></li>
            <li><a href="#tab-ip" data-toggle="tab"><?php echo @$tab_ip ?></a></li>
            <?php
        }
?>          </ul>
          <div class="tab-content">
            <div class="tab-pane active" id="tab-general">
              <div class="row">
                <div class="col-sm-2">
                  <ul class="nav nav-pills nav-stacked" id="address">
                    <li class="active"><a href="#tab-customer" data-toggle="tab"><?php echo @$tab_general ?></a></li>
                    <?php
        $address_row = 1 ?>                    <?php
        @$save50787 = $address        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$addresses);
        foreach ($context['_seq'] as $_key => $address) {
?>                    <li><a href="#tab-address<?php echo @$address_row ?>" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$('#address a:first').tab('show'); $('#address a[href=\'#tab-address<?php echo @$address_row ?>\']').parent().remove(); $('#tab-address<?php echo @$address_row ?>').remove();"></i> <?php echo @$tab_address ?> <?php echo @$address_row ?></a></li>
                    <?php
            $address_row = (@$address_row + 1) ?>                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$address         = $save50787 ?>                    <li id="address-add"><a onclick="addAddress();"><i class="fa fa-plus-circle"></i> <?php echo @$button_address_add ?></a></li>
                  </ul>
                </div>
                <div class="col-sm-10">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab-customer">
                      <fieldset>
                        <legend><?php echo @$text_account ?></legend>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="input-customer-group"><?php echo @$entry_customer_group ?></label>
                          <div class="col-sm-10">
                            <select name="customer_group_id" id="input-customer-group" class="form-control">
                              <?php
        @$save91948 = $customer_group        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$customer_groups);
        foreach ($context['_seq'] as $_key => $customer_group) {
?>                              <?php
            if ((@$customer_group["customer_group_id"] == @$customer_group_id)) {
?>                              <option value="<?php echo @$customer_group["customer_group_id"] ?>" selected="selected"><?php echo @$customer_group["name"] ?></option>
                              <?php
            } else {
?>                              <option value="<?php echo @$customer_group["customer_group_id"] ?>"><?php echo @$customer_group["name"] ?></option>
                              <?php
            }
?>                              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$customer_group         = $save91948 ?>                            </select>
                          </div>
                        </div>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-firstname"><?php echo @$entry_firstname ?></label>
                          <div class="col-sm-10">
                            <input type="text" name="firstname" value="<?php echo @$firstname ?>" placeholder="<?php echo @$entry_firstname ?>" id="input-firstname" class="form-control" />
                            <?php
        if (@$error_firstname) {
?>                            <div class="text-danger"><?php echo @$error_firstname ?></div>
                            <?php
        }
?></div>
                        </div>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-lastname"><?php echo @$entry_lastname ?></label>
                          <div class="col-sm-10">
                            <input type="text" name="lastname" value="<?php echo @$lastname ?>" placeholder="<?php echo @$entry_lastname ?>" id="input-lastname" class="form-control" />
                            <?php
        if (@$error_lastname) {
?>                            <div class="text-danger"><?php echo @$error_lastname ?></div>
                            <?php
        }
?></div>
                        </div>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-email"><?php echo @$entry_email ?></label>
                          <div class="col-sm-10">
                            <input type="text" name="email" value="<?php echo @$email ?>" placeholder="<?php echo @$entry_email ?>" id="input-email" class="form-control" />
                            <?php
        if (@$error_email) {
?>                            <div class="text-danger"><?php echo @$error_email ?></div>
                            <?php
        }
?></div>
                        </div>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-telephone"><?php echo @$entry_telephone ?></label>
                          <div class="col-sm-10">
                            <input type="text" name="telephone" value="<?php echo @$telephone ?>" placeholder="<?php echo @$entry_telephone ?>" id="input-telephone" class="form-control" />
                            <?php
        if (@$error_telephone) {
?>                            <div class="text-danger"><?php echo @$error_telephone ?></div>
                            <?php
        }
?></div>
                        </div>
                        <?php
        @$save45606 = $custom_field        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$custom_fields);
        foreach ($context['_seq'] as $_key => $custom_field) {
?>                        <?php
            if ((@$custom_field["location"] == "account")) {
?>                        <?php
                if ((@$custom_field["type"] == "select")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <select name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control">
                              <option value=""><?php echo @$text_select ?></option>
                              <?php
                    @$save13595 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                              <?php
                        if ((@$account_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$account_custom_field[@$custom_field["custom_field_id"]]))) {
?>                              <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" selected="selected"><?php echo @$custom_field_value["name"] ?></option>
                              <?php
                        } else {
?>                              <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>"><?php echo @$custom_field_value["name"] ?></option>
                              <?php
                        }
?>                              <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save13595 ?>                            </select>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "radio")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <div> <?php
                    @$save89316 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                              <div class="radio"> <?php
                        if ((@$account_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$account_custom_field[@$custom_field["custom_field_id"]]))) {
?>                                <label>
                                  <input type="radio" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                                  <?php echo @$custom_field_value["name"] ?></label>
                                <?php
                        } else {
?>                                <label>
                                  <input type="radio" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                                  <?php echo @$custom_field_value["name"] ?></label>
                                <?php
                        }
?></div>
                              <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save89316 ?> </div>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "checkbox")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <div> <?php
                    @$save81782 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                              <div class="checkbox"><?php
                        if ((@$account_custom_field[@$custom_field["custom_field_id"]] && twix_in_filter(@$custom_field_value["custom_field_value_id"], @$account_custom_field[@$custom_field["custom_field_id"]]))) {
?>                                <label>
                                  <input type="checkbox" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                                  <?php echo @$custom_field_value["name"] ?></label>
                                <?php
                        } else {
?>                                <label>
                                  <input type="checkbox" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                                  <?php echo @$custom_field_value["name"] ?></label>
                                <?php
                        }
?></div>
                              <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save81782 ?></div>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "text")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "textarea")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <textarea name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" rows="5" placeholder="<?php echo @$custom_field["name"] ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control"><?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?></textarea>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "file")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <button type="button" id="button-custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
                            <input type="hidden" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : ("")) ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" />
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "date")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <div class="input-group date">
                              <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                              </span></div>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "time")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <div class="input-group time">
                              <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="HH:mm" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                              </span></div>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
                if ((@$custom_field["type"] == "datetime")) {
?>                        <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                          <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                          <div class="col-sm-10">
                            <div class="input-group datetime">
                              <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                              <span class="input-group-btn">
                              <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                              </span></div>
                            <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                            <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                            <?php
                    }
?></div>
                        </div>
                        <?php
                }
?>                        <?php
            }
?>                        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field         = $save45606 ?>                      </fieldset>
                      <fieldset>
                        <legend><?php echo @$text_password ?></legend>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-password"><?php echo @$entry_password ?></label>
                          <div class="col-sm-10">
                            <input type="password" name="password" value="<?php echo @$password ?>" placeholder="<?php echo @$entry_password ?>" id="input-password" class="form-control" autocomplete="off" />
                            <?php
        if (@$error_password) {
?>                            <div class="text-danger"><?php echo @$error_password ?></div>
                            <?php
        }
?></div>
                        </div>
                        <div class="form-group required">
                          <label class="col-sm-2 control-label" for="input-confirm"><?php echo @$entry_confirm ?></label>
                          <div class="col-sm-10">
                            <input type="password" name="confirm" value="<?php echo @$confirm ?>" placeholder="<?php echo @$entry_confirm ?>" autocomplete="off" id="input-confirm" class="form-control" />
                            <?php
        if (@$error_confirm) {
?>                            <div class="text-danger"><?php echo @$error_confirm ?></div>
                            <?php
        }
?></div>
                        </div>
                      </fieldset>
                      <fieldset>
                        <legend><?php echo @$text_other ?></legend>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="input-newsletter"><?php echo @$entry_newsletter ?></label>
                          <div class="col-sm-10">
                            <select name="newsletter" id="input-newsletter" class="form-control">
                              <?php
        if (@$newsletter) {
?>                              <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                              <option value="0"><?php echo @$text_disabled ?></option>
                              <?php
        } else {
?>                              <option value="1"><?php echo @$text_enabled ?></option>
                              <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                              <?php
        }
?>                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="input-status"><?php echo @$entry_status ?></label>
                          <div class="col-sm-10">
                            <select name="status" id="input-status" class="form-control">
                              <?php
        if (@$status) {
?>                              <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                              <option value="0"><?php echo @$text_disabled ?></option>
                              <?php
        } else {
?>                              <option value="1"><?php echo @$text_enabled ?></option>
                              <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                              <?php
        }
?>                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-2 control-label" for="input-safe"><span data-toggle="tooltip" title="<?php echo @$help_safe ?>"><?php echo @$entry_safe ?></span></label>
                          <div class="col-sm-10">
                            <select name="safe" id="input-safe" class="form-control">
                              <?php
        if (@$safe) {
?>                              <option value="1" selected="selected"><?php echo @$text_yes ?></option>
                              <option value="0"><?php echo @$text_no ?></option>
                              <?php
        } else {
?>                              <option value="1"><?php echo @$text_yes ?></option>
                              <option value="0" selected="selected"><?php echo @$text_no ?></option>
                              <?php
        }
?>                            </select>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <?php
        $address_row = 1 ?>                    <?php
        @$save79229 = $address        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$addresses);
        foreach ($context['_seq'] as $_key => $address) {
?>                    <div class="tab-pane" id="tab-address<?php echo @$address_row ?>">
                      <input type="hidden" name="address[<?php echo @$address_row ?>][address_id]" value="<?php echo @$address["address_id"] ?>" />
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-firstname<?php echo @$address_row ?>"><?php echo @$entry_firstname ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][firstname]" value="<?php echo @$address["firstname"] ?>" placeholder="<?php echo @$entry_firstname ?>" id="input-firstname<?php echo @$address_row ?>" class="form-control" />
                          <?php
            if (@$error_address[@$address_row]["firstname"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["firstname"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-lastname<?php echo @$address_row ?>"><?php echo @$entry_lastname ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][lastname]" value="<?php echo @$address["lastname"] ?>" placeholder="<?php echo @$entry_lastname ?>" id="input-lastname<?php echo @$address_row ?>" class="form-control" />
                          <?php
            if (@$error_address[@$address_row]["lastname"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["lastname"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-company<?php echo @$address_row ?>"><?php echo @$entry_company ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][company]" value="<?php echo @$address["company"] ?>" placeholder="<?php echo @$entry_company ?>" id="input-company<?php echo @$address_row ?>" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-address-1<?php echo @$address_row ?>"><?php echo @$entry_address_1 ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][address_1]" value="<?php echo @$address["address_1"] ?>" placeholder="<?php echo @$entry_address_1 ?>" id="input-address-1<?php echo @$address_row ?>" class="form-control" />
                          <?php
            if (@$error_address[@$address_row]["address_1"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["address_1"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label" for="input-address-2<?php echo @$address_row ?>"><?php echo @$entry_address_2 ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][address_2]" value="<?php echo @$address["address_2"] ?>" placeholder="<?php echo @$entry_address_2 ?>" id="input-address-2<?php echo @$address_row ?>" class="form-control" />
                        </div>
                      </div>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-city<?php echo @$address_row ?>"><?php echo @$entry_city ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][city]" value="<?php echo @$address["city"] ?>" placeholder="<?php echo @$entry_city ?>" id="input-city<?php echo @$address_row ?>" class="form-control" />
                          <?php
            if (@$error_address[@$address_row]["city"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["city"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-postcode<?php echo @$address_row ?>"><?php echo @$entry_postcode ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][postcode]" value="<?php echo @$address["postcode"] ?>" placeholder="<?php echo @$entry_postcode ?>" id="input-postcode<?php echo @$address_row ?>" class="form-control" />
                          <?php
            if (@$error_address[@$address_row]["postcode"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["postcode"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-country<?php echo @$address_row ?>"><?php echo @$entry_country ?></label>
                        <div class="col-sm-10">
                          <select name="address[<?php echo @$address_row ?>][country_id]" id="input-country<?php echo @$address_row ?>" onchange="country(this, '<?php echo @$address_row ?>', '<?php echo @$address["zone_id"] ?>');" class="form-control">
                            <option value=""><?php echo @$text_select ?></option>
                            <?php
            @$save17067 = $country            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$countries);
            foreach ($context['_seq'] as $_key => $country) {
?>                            <?php
                if ((@$country["country_id"] == @$address["country_id"])) {
?>                            <option value="<?php echo @$country["country_id"] ?>" selected="selected"><?php echo @$country["name"] ?></option>
                            <?php
                } else {
?>                            <option value="<?php echo @$country["country_id"] ?>"><?php echo @$country["name"] ?></option>
                            <?php
                }
?>                            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$country             = $save17067 ?>                          </select>
                          <?php
            if (@$error_address[@$address_row]["country"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["country"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <div class="form-group required">
                        <label class="col-sm-2 control-label" for="input-zone<?php echo @$address_row ?>"><?php echo @$entry_zone ?></label>
                        <div class="col-sm-10">
                          <select name="address[<?php echo @$address_row ?>][zone_id]" id="input-zone<?php echo @$address_row ?>" class="form-control">
                          </select>
                          <?php
            if (@$error_address[@$address_row]["zone"]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["zone"] ?></div>
                          <?php
            }
?></div>
                      </div>
                      <?php
            @$save35668 = $custom_field            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$custom_fields);
            foreach ($context['_seq'] as $_key => $custom_field) {
?>                      <?php
                if ((@$custom_field["location"] == "address")) {
?>                      <?php
                    if ((@$custom_field["type"] == "select")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label" for="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <select name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" id="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control">
                            <option value=""><?php echo @$text_select ?></option>
                            <?php
                        @$save35202 = $custom_field_value                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                        foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                            <?php
                            if ((@$address["custom_field"][@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$address["custom_field"][@$custom_field["custom_field_id"]]))) {
?>                            <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" selected="selected"><?php echo @$custom_field_value["name"] ?></option>
                            <?php
                            } else {
?>                            <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>"><?php echo @$custom_field_value["name"] ?></option>
                            <?php
                            }
?>                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                         = $save35202 ?>                          </select>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "radio")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <div> <?php
                        @$save57402 = $custom_field_value                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                        foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                            <div class="radio"> <?php
                            if ((@$address["custom_field"][@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$address["custom_field"][@$custom_field["custom_field_id"]]))) {
?>                              <label>
                                <input type="radio" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                                <?php echo @$custom_field_value["name"] ?></label>
                              <?php
                            } else {
?>                              <label>
                                <input type="radio" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                                <?php echo @$custom_field_value["name"] ?></label>
                              <?php
                            }
?></div>
                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                         = $save57402 ?> </div>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "checkbox")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <div> <?php
                        @$save70351 = $custom_field_value                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                        foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                            <div class="checkbox"> <?php
                            if ((@$address["custom_field"][@$custom_field["custom_field_id"]] && twix_in_filter(@$custom_field_value["custom_field_value_id"], @$address["custom_field"][@$custom_field["custom_field_id"]]))) {
?>                              <label>
                                <input type="checkbox" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                                <?php echo @$custom_field_value["name"] ?></label>
                              <?php
                            } else {
?>                              <label>
                                <input type="checkbox" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                                <?php echo @$custom_field_value["name"] ?></label>
                              <?php
                            }
?></div>
                            <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                         = $save70351 ?> </div>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "text")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label" for="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <input type="text" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$address["custom_field"][@$custom_field["custom_field_id"]]) ? (@$address["custom_field"][@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" id="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "textarea")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label" for="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <textarea name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" rows="5" placeholder="<?php echo @$custom_field["name"] ?>" id="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control"><?php echo ((@$address["custom_field"][@$custom_field["custom_field_id"]]) ? (@$address["custom_field"][@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?></textarea>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "file")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <button type="button" id="button-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
                          <input type="hidden" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$address["custom_field"][@$custom_field["custom_field_id"]]) ? (@$address["custom_field"][@$custom_field["custom_field_id"]]) : ("")) ?>" />
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "date")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label" for="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <div class="input-group date">
                            <input type="text" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$address["custom_field"][@$custom_field["custom_field_id"]]) ? (@$address["custom_field"][@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD" id="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                            </span></div>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "time")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label" for="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <div class="input-group time">
                            <input type="text" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$address["custom_field"][@$custom_field["custom_field_id"]]) ? (@$address["custom_field"][@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="HH:mm" id="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                            </span></div>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                    if ((@$custom_field["type"] == "datetime")) {
?>                      <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">
                        <label class="col-sm-2 control-label" for="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                        <div class="col-sm-10">
                          <div class="input-group datetime">
                            <input type="text" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$address["custom_field"][@$custom_field["custom_field_id"]]) ? (@$address["custom_field"][@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-address<?php echo @$address_row ?>-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                            <span class="input-group-btn">
                            <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                            </span> </div>
                          <?php
                        if (@$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]]) {
?>                          <div class="text-danger"><?php echo @$error_address[@$address_row]["custom_field"][@$custom_field["custom_field_id"]] ?></div>
                          <?php
                        }
?></div>
                      </div>
                      <?php
                    }
?>                      <?php
                }
?>                      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field             = $save35668 ?>                      <div class="form-group">
                        <label class="col-sm-2 control-label"><?php echo @$entry_default ?></label>
                        <div class="col-sm-10">
                          <label class="radio"><?php
            if (((@$address["address_id"] == @$address_id) ||  !@$addresses)) {
?>                            <input type="radio" name="address[<?php echo @$address_row ?>][default]" value="<?php echo @$address_row ?>" checked="checked" />
                            <?php
            } else {
?>                            <input type="radio" name="address[<?php echo @$address_row ?>][default]" value="<?php echo @$address_row ?>" />
                            <?php
            }
?></label>
                        </div>
                      </div>
                    </div>
                    <?php
            $address_row = (@$address_row + 1) ?>                    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$address         = $save79229 ?>                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="tab-affiliate">
              <fieldset>
                <legend><?php echo @$text_affiliate ?></legend>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-company"><?php echo @$entry_company ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="company" value="<?php echo @$company ?>" placeholder="<?php echo @$entry_company ?>" id="input-company" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-website"><?php echo @$entry_website ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="website" value="<?php echo @$website ?>" placeholder="<?php echo @$entry_website ?>" id="input-website" class="form-control" />
                  </div>
                </div>
                <div class="form-group required">
                  <label class="col-sm-2 control-label" for="input-tracking"><span data-toggle="tooltip" title="<?php echo @$help_tracking ?>"><?php echo @$entry_tracking ?></span></label>
                  <div class="col-sm-10">
                    <input type="text" name="tracking" value="<?php echo @$tracking ?>" placeholder="<?php echo @$entry_tracking ?>" id="input-tracking" class="form-control" />
                    <?php
        if (@$error_tracking) {
?>                    <div class="text-danger"><?php echo @$error_tracking ?></div>
                    <?php
        }
?>                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-commission"><span data-toggle="tooltip" title="<?php echo @$help_commission ?>"><?php echo @$entry_commission ?></span></label>
                  <div class="col-sm-10">
                    <input type="text" name="commission" value="<?php echo @$commission ?>" placeholder="<?php echo @$entry_commission ?>" id="input-commission" class="form-control" />
                  </div>
                </div>
                <?php
        @$save72345 = $custom_field        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$custom_fields);
        foreach ($context['_seq'] as $_key => $custom_field) {
?>                <?php
            if ((@$custom_field["location"] == "affiliate")) {
?>                <?php
                if ((@$custom_field["type"] == "select")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <select name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control">
                      <option value=""><?php echo @$text_select ?></option>
                      <?php
                    @$save48514 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                      <?php
                        if ((@$account_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$account_custom_field[@$custom_field["custom_field_id"]]))) {
?>                      <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" selected="selected"><?php echo @$custom_field_value["name"] ?></option>
                      <?php
                        } else {
?>                      <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>"><?php echo @$custom_field_value["name"] ?></option>
                      <?php
                        }
?>                      <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save48514 ?>                    </select>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "radio")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <div> <?php
                    @$save36545 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                      <div class="radio"><?php
                        if ((@$account_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$account_custom_field[@$custom_field["custom_field_id"]]))) {
?>                        <label>
                          <input type="radio" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                          <?php echo @$custom_field_value["name"] ?></label>
                        <?php
                        } else {
?>                        <label>
                          <input type="radio" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                          <?php echo @$custom_field_value["name"] ?></label>
                        <?php
                        }
?></div>
                      <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save36545 ?> </div>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "checkbox")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <div> <?php
                    @$save17372 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                      <div class="checkbox"><?php
                        if ((@$account_custom_field[@$custom_field["custom_field_id"]] && twix_in_filter(@$custom_field_value["custom_field_value_id"], @$account_custom_field[@$custom_field["custom_field_id"]]))) {
?>                        <label>
                          <input type="checkbox" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                          <?php echo @$custom_field_value["name"] ?></label>
                        <?php
                        } else {
?>                        <label>
                          <input type="checkbox" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                          <?php echo @$custom_field_value["name"] ?></label>
                        <?php
                        }
?></div>
                      <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save17372 ?> </div>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "text")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "textarea")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <textarea name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" rows="5" placeholder="<?php echo @$custom_field["name"] ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control"><?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?></textarea>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "file")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <button type="button" id="button-custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
                    <input type="hidden" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : ("")) ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" />
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "date")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <div class="input-group date">
                      <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                      </span></div>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "time")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <div class="input-group time">
                      <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="HH:mm" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                      </span></div>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
                if ((@$custom_field["type"] == "datetime")) {
?>                <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo @$custom_field["sort_order"] ?>">
                  <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
                  <div class="col-sm-10">
                    <div class="input-group datetime">
                      <input type="text" name="custom_field[<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo ((@$account_custom_field[@$custom_field["custom_field_id"]]) ? (@$account_custom_field[@$custom_field["custom_field_id"]]) : (@$custom_field["value"])) ?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                      <span class="input-group-btn">
                      <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                      </span></div>
                    <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>                    <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
                    <?php
                    }
?></div>
                </div>
                <?php
                }
?>                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field         = $save72345 ?>              </fieldset>
              <fieldset>
                <legend><?php echo @$text_payment ?></legend>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-tax"><?php echo @$entry_tax ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="tax" value="<?php echo @$tax ?>" placeholder="<?php echo @$entry_tax ?>" id="input-tax" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label"><?php echo @$entry_payment ?></label>
                  <div class="col-sm-10">
                    <div class="radio">
                      <label><?php
        if ((@$payment == "cheque")) {
?>                        <input type="radio" name="payment" value="cheque" checked="checked" />
                        <?php
        } else {
?>                        <input type="radio" name="payment" value="cheque" />
                        <?php
        }
?>                        <?php echo @$text_cheque ?></label>
                    </div>
                    <div class="radio">
                      <label> <?php
        if ((@$payment == "paypal")) {
?>                        <input type="radio" name="payment" value="paypal" checked="checked" />
                        <?php
        } else {
?>                        <input type="radio" name="payment" value="paypal" />
                        <?php
        }
?>                        <?php echo @$text_paypal ?></label>
                    </div>
                    <div class="radio">
                      <label> <?php
        if ((@$payment == "bank")) {
?>                        <input type="radio" name="payment" value="bank" checked="checked" />
                        <?php
        } else {
?>                        <input type="radio" name="payment" value="bank" />
                        <?php
        }
?>                        <?php echo @$text_bank ?></label>
                    </div>
                  </div>
                </div>
                <div id="payment-cheque" class="payment">
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-cheque"><?php echo @$entry_cheque ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="cheque" value="<?php echo @$cheque ?>" placeholder="<?php echo @$entry_cheque ?>" id="input-cheque" class="form-control" />
                      <?php
        if (@$error_cheque) {
?>                      <div class="text-danger"><?php echo @$error_cheque ?></div>
                      <?php
        }
?></div>
                  </div>
                </div>
                <div id="payment-paypal" class="payment">
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-paypal"><?php echo @$entry_paypal ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="paypal" value="<?php echo @$paypal ?>" placeholder="<?php echo @$entry_paypal ?>" id="input-paypal" class="form-control" />
                      <?php
        if (@$error_paypal) {
?>                      <div class="text-danger"><?php echo @$error_paypal ?></div>
                      <?php
        }
?></div>
                  </div>
                </div>
                <div id="payment-bank" class="payment">
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-bank-name"><?php echo @$entry_bank_name ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="bank_name" value="<?php echo @$bank_name ?>" placeholder="<?php echo @$entry_bank_name ?>" id="input-bank-name" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-bank-branch-number"><?php echo @$entry_bank_branch_number ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="bank_branch_number" value="<?php echo @$bank_branch_number ?>" placeholder="<?php echo @$entry_bank_branch_number ?>" id="input-bank-branch-number" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label" for="input-bank-swift-code"><?php echo @$entry_bank_swift_code ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="bank_swift_code" value="<?php echo @$bank_swift_code ?>" placeholder="<?php echo @$entry_bank_swift_code ?>" id="input-bank-swift-code" class="form-control" />
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-bank-account-name"><?php echo @$entry_bank_account_name ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="bank_account_name" value="<?php echo @$bank_account_name ?>" placeholder="<?php echo @$entry_bank_account_name ?>" id="input-bank-account-name" class="form-control" />
                      <?php
        if (@$error_bank_account_name) {
?>                      <div class="text-danger"><?php echo @$error_bank_account_name ?></div>
                      <?php
        }
?></div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-bank-account-number"><?php echo @$entry_bank_account_number ?></label>
                    <div class="col-sm-10">
                      <input type="text" name="bank_account_number" value="<?php echo @$bank_account_number ?>" placeholder="<?php echo @$entry_bank_account_number ?>" id="input-bank-account-number" class="form-control" />
                      <?php
        if (@$error_bank_account_number) {
?>                      <div class="text-danger"><?php echo @$error_bank_account_number ?></div>
                      <?php
        }
?></div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-affiliate"><?php echo @$entry_status ?></label>
                  <div class="col-sm-10">
                    <select name="affiliate" id="input-affiliate" class="form-control">
                      <?php
        if (@$affiliate) {
?>                      <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                      <option value="0"><?php echo @$text_disabled ?></option>
                      <?php
        } else {
?>                      <option value="1"><?php echo @$text_enabled ?></option>
                      <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                      <?php
        }
?>                     </select>
                  </div>
                </div>
              </fieldset>           
            </div>         
            <?php
        if (@$customer_id) {
?>            <div class="tab-pane" id="tab-history">
              <fieldset>
                <legend><?php echo @$text_history ?></legend>
                <div id="history"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend><?php echo @$text_history_add ?></legend>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-comment"><?php echo @$entry_comment ?></label>
                  <div class="col-sm-10">
                    <textarea name="comment" rows="8" placeholder="<?php echo @$entry_comment ?>" id="input-comment" class="form-control"></textarea>
                  </div>
                </div>
              </fieldset>
              <div class="text-right">
                <button id="button-history" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo @$button_history_add ?></button>
              </div>
            </div>
            <div class="tab-pane" id="tab-transaction">
              <fieldset>
                <legend><?php echo @$text_transaction ?></legend>
                <div id="transaction"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend><?php echo @$text_transaction_add ?></legend>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-transaction-description"><?php echo @$entry_description ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="description" value="" placeholder="<?php echo @$entry_description ?>" id="input-transaction-description" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-amount"><?php echo @$entry_amount ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="amount" value="" placeholder="<?php echo @$entry_amount ?>" id="input-amount" class="form-control" />
                  </div>
                </div>
              </fieldset>
              <div class="text-right">
                <button type="button" id="button-transaction" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo @$button_transaction_add ?></button>
              </div>
            </div>
            <div class="tab-pane" id="tab-reward">
              <fieldset>
                <legend><?php echo @$text_reward ?></legend>
                <div id="reward"></div>
              </fieldset>
              <br />
              <fieldset>
                <legend><?php echo @$text_reward_add ?></legend>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-reward-description"><?php echo @$entry_description ?></label>
                  <div class="col-sm-10">
                    <input type="text" name="description" value="" placeholder="<?php echo @$entry_description ?>" id="input-reward-description" class="form-control" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-points"><span data-toggle="tooltip" title="<?php echo @$help_points ?>"><?php echo @$entry_points ?></span></label>
                  <div class="col-sm-10">
                    <input type="text" name="points" value="" placeholder="<?php echo @$entry_points ?>" id="input-points" class="form-control" />
                  </div>
                </div>
              </fieldset>
              <div class="text-right">
                <button type="button" id="button-reward" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo @$button_reward_add ?></button>
              </div>
            </div>
            <?php
        }
?>            <div class="tab-pane" id="tab-ip">
              <fieldset>
                <legend><?php echo @$text_ip ?></legend>
                <div id="ip"></div>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script type="text/javascript"><!--
  $('input[name="affiliate"]').on('change', function() {
    if ($(this).val() == '1') { 
      $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', false);
    } else {
      $('#tab-affiliate :input').not('input[name="affiliate"]').prop('disabled', true);
    }
  }); 

  $('input[name=\'affiliate\']:checked').trigger('change');
  //--></script> 
  <script type="text/javascript"><!--
  $('select[name=\'customer_group_id\']').on('change', function() {
    $.ajax({
      url: 'index.php?route=customer/customer/customfield&user_token=<?php echo @$user_token ?>&customer_group_id=' + this.value,
      dataType: 'json',
      success: function(json) {
        $('.custom-field').hide();
        $('.custom-field').removeClass('required');

        for (i = 0; i < json.length; i++) {
          custom_field = json[i];

          $('.custom-field' + custom_field['custom_field_id']).show();

          if (custom_field['required']) {
            $('.custom-field' + custom_field['custom_field_id']).addClass('required');
          }
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });

  $('select[name=\'customer_group_id\']').trigger('change');
  //--></script> 
  <script type="text/javascript"><!--
  var address_row = <?php echo @$address_row ?>;

  function addAddress() {
    html  = '<div class="tab-pane" id="tab-address' + address_row + '">';
    html += '  <input type="hidden" name="address[' + address_row + '][address_id]" value="" />';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-firstname' + address_row + '"><?php echo @$entry_firstname ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][firstname]" value="" placeholder="<?php echo @$entry_firstname ?>" id="input-firstname' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-lastname' + address_row + '"><?php echo @$entry_lastname ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][lastname]" value="" placeholder="<?php echo @$entry_lastname ?>" id="input-lastname' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group">';
    html += '    <label class="col-sm-2 control-label" for="input-company' + address_row + '"><?php echo @$entry_company ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][company]" value="" placeholder="<?php echo @$entry_company ?>" id="input-company' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-address-1' + address_row + '"><?php echo @$entry_address_1 ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_1]" value="" placeholder="<?php echo @$entry_address_1 ?>" id="input-address-1' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group">';
    html += '    <label class="col-sm-2 control-label" for="input-address-2' + address_row + '"><?php echo @$entry_address_2 ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][address_2]" value="" placeholder="<?php echo @$entry_address_2 ?>" id="input-address-2' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-city' + address_row + '"><?php echo @$entry_city ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][city]" value="" placeholder="<?php echo @$entry_city ?>" id="input-city' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-postcode' + address_row + '"><?php echo @$entry_postcode ?></label>';
    html += '    <div class="col-sm-10"><input type="text" name="address[' + address_row + '][postcode]" value="" placeholder="<?php echo @$entry_postcode ?>" id="input-postcode' + address_row + '" class="form-control" /></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-country' + address_row + '"><?php echo @$entry_country ?></label>';
    html += '    <div class="col-sm-10"><select name="address[' + address_row + '][country_id]" id="input-country' + address_row + '" onchange="country(this, \'' + address_row + '\', \'0\');" class="form-control">';
      html += '         <option value=""><?php echo @$text_select ?></option>';
      <?php
        @$save97511 = $country        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$countries);
        foreach ($context['_seq'] as $_key => $country) {
?>      html += '         <option value="<?php echo @$country["country_id"] ?>"><?php echo twix_escape_filter($this->env, @$country["name"], "js") ?></option>';
      <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$country         = $save97511 ?>      html += '      </select></div>';
    html += '  </div>';

    html += '  <div class="form-group required">';
    html += '    <label class="col-sm-2 control-label" for="input-zone' + address_row + '"><?php echo @$entry_zone ?></label>';
    html += '    <div class="col-sm-10"><select name="address[' + address_row + '][zone_id]" id="input-zone' + address_row + '" class="form-control"><option value=""><?php echo @$text_none ?></option></select></div>';
    html += '  </div>';

    // Custom Fields
    <?php
        @$save42536 = $custom_field        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$custom_fields);
        foreach ($context['_seq'] as $_key => $custom_field) {
?>    <?php
            if ((@$custom_field["location"] == "address")) {
?>    <?php
                if ((@$custom_field["type"] == "select")) {
?>
    html += '  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '  		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?></label>';
    html += '  		<div class="col-sm-10">';
    html += '  		  <select name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control">';
    html += '  			<option value=""><?php echo @$text_select ?></option>';

    <?php
                    @$save22248 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>    html += '  			<option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?></option>';
    <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save22248 ?>
    html += '  		  </select>';
    html += '  		</div>';
    html += '  	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "radio")) {
?>    html += '  	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>">';
    html += '  		<label class="col-sm-2 control-label"><?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?></label>';
    html += '  		<div class="col-sm-10">';
    html += '  		  <div>';

    <?php
                    @$save19884 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>    html += '  			<div class="radio"><label><input type="radio" name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" /> <?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label></div>';
    <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save19884 ?>
    html += '		  </div>';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "checkbox")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label"><?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <div>';

    <?php
                    @$save96063 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>    html += '			<div class="checkbox"><label><input type="checkbox" name="address[<?php echo @$address_row ?>][custom_field][<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" /> <?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label></div>';
    <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save96063 ?>
    html += '		  </div>';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "text")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <input type="text" name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo twix_escape_filter($this->env, @$custom_field["value"], "js") ?>" placeholder="<?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?>" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "textarea")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <textarea name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" rows="5" placeholder="<?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?>" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control"><?php echo twix_escape_filter($this->env, @$custom_field["value"], "js") ?></textarea>';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "file")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label"><?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <button type="button" id="button-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>';
    html += '		  <input type="hidden" name="address[' + address_row + '][<?php echo @$custom_field["custom_field_id"] ?>]" value="" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" />';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "date")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <div class="input-group date"><input type="text" name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo twix_escape_filter($this->env, @$custom_field["value"], "js") ?>" placeholder="<?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?> data-date-format="YYYY-MM-DD" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "time")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <div class="input-group time"><input type="text" name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo twix_escape_filter($this->env, @$custom_field["value"], "js") ?>" placeholder="<?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?>" data-date-format="HH:mm" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
                if ((@$custom_field["type"] == "datetime")) {
?>    html += '	  <div class="form-group custom-field custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-sort="<?php echo (@$custom_field["sort_order"] + 1) ?>">';
    html += '		<label class="col-sm-2 control-label" for="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo twix_escape_filter($this->env, @$custom_field_value["name"], "js") ?></label>';
    html += '		<div class="col-sm-10">';
    html += '		  <div class="input-group datetime"><input type="text" name="address[' + address_row + '][custom_field][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo twix_escape_filter($this->env, @$custom_field["value"], "js") ?>" placeholder="<?php echo twix_escape_filter($this->env, @$custom_field["name"], "js") ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-address' + address_row + '-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" /><span class="input-group-btn"><button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button></span></div>';
    html += '		</div>';
    html += '	  </div>';
    <?php
                }
?>
    <?php
            }
?>    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field         = $save42536 ?>
    html += '  <div class="form-group">';
    html += '    <label class="col-sm-2 control-label"><?php echo @$entry_default ?></label>';
    html += '    <div class="col-sm-10"><label class="radio"><input type="radio" name="address[' + address_row + '][default]" value="1" /></label></div>';
    html += '  </div>';

    html += '</div>';

    $('#tab-general .tab-content').append(html);

    $('select[name=\'customer_group_id\']').trigger('change');

    $('select[name=\'address[' + address_row + '][country_id]\']').trigger('change');

    $('#address-add').before('<li><a href="#tab-address' + address_row + '" data-toggle="tab"><i class="fa fa-minus-circle" onclick="$(\'#address a:first\').tab(\'show\'); $(\'a[href=\\\'#tab-address' + address_row + '\\\']\').parent().remove(); $(\'#tab-address' + address_row + '\').remove();"></i> <?php echo @$tab_address ?> ' + address_row + '</a></li>');

    $('#address a[href=\'#tab-address' + address_row + '\']').tab('show');

    $('.date').datetimepicker({
		language: '<?php echo @$datepicker ?>',
		pickTime: false
    });

	$('.datetime').datetimepicker({
		language: '<?php echo @$datepicker ?>',
		pickDate: true,
		pickTime: true
    });

    $('.time').datetimepicker({
		language: '<?php echo @$datepicker ?>',
		pickDate: false
    });

    $('#tab-address' + address_row + ' .form-group[data-sort]').detach().each(function() {
		if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address' + address_row + ' .form-group').length) {
			$('#tab-address' + address_row + ' .form-group').eq($(this).attr('data-sort')).before(this);
		}
		
		if ($(this).attr('data-sort') > $('#tab-address' + address_row + ' .form-group').length) {
			$('#tab-address' + address_row + ' .form-group:last').after(this);
		}
		
		if ($(this).attr('data-sort') < -$('#tab-address' + address_row + ' .form-group').length) {
			$('#tab-address' + address_row + ' .form-group:first').before(this);
		}
    });

    address_row++;
  }
  //--></script> 
  <script type="text/javascript"><!--
  function country(element, index, zone_id) {
    $.ajax({
      url: 'index.php?route=localisation/country/country&user_token=<?php echo @$user_token ?>&country_id=' + element.value,
      dataType: 'json',
      beforeSend: function() {
        $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', true);
      },
      complete: function() {
        $('select[name=\'address[' + index + '][country_id]\']').prop('disabled', false);
      },
      success: function(json) {
        if (json['postcode_required'] == '1') {
          $('input[name=\'address[' + index + '][postcode]\']').parent().parent().addClass('required');
        } else {
          $('input[name=\'address[' + index + '][postcode]\']').parent().parent().removeClass('required');
        }

        html = '<option value=""><?php echo @$text_select ?></option>';

        if (json['zone'] && json['zone'] != '') {
          for (i = 0; i < json['zone'].length; i++) {
            html += '<option value="' + json['zone'][i]['zone_id'] + '"';

            if (json['zone'][i]['zone_id'] == zone_id) {
              html += ' selected="selected"';
            }

            html += '>' + json['zone'][i]['name'] + '</option>';
          }
        } else {
          html += '<option value="0"><?php echo @$text_none ?></option>';
        }

        $('select[name=\'address[' + index + '][zone_id]\']').html(html);
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  }

  $('select[name$=\'[country_id]\']').trigger('change');
  //--></script> 
  <script type="text/javascript"><!--
  $('#history').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#history').load(this.href);
  });

  $('#history').load('index.php?route=customer/customer/history&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

  $('#button-history').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      url: 'index.php?route=customer/customer/addhistory&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>',
      type: 'post',
      dataType: 'json',
      data: 'comment=' + encodeURIComponent($('#tab-history textarea[name=\'comment\']').val()),
      beforeSend: function() {
        $('#button-history').button('loading');
      },
      complete: function() {
        $('#button-history').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();

        if (json['error']) {
           $('#tab-history').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        }

        if (json['success']) {
          $('#tab-history').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

          $('#history').load('index.php?route=customer/customer/history&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

          $('#tab-history textarea[name=\'comment\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type="text/javascript"><!--
  $('#transaction').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#transaction').load(this.href);
  });

  $('#transaction').load('index.php?route=customer/customer/transaction&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

  $('#button-transaction').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      url: 'index.php?route=customer/customer/addtransaction&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent($('#tab-transaction input[name=\'description\']').val()) + '&amount=' + encodeURIComponent($('#tab-transaction input[name=\'amount\']').val()),
      beforeSend: function() {
        $('#button-transaction').button('loading');
      },
      complete: function() {
        $('#button-transaction').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();

        if (json['error']) {
           $('#tab-transaction').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        }

        if (json['success']) {
          $('#tab-transaction').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

          $('#transaction').load('index.php?route=customer/customer/transaction&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

          $('#tab-transaction input[name=\'amount\']').val('');
          $('#tab-transaction input[name=\'description\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });
  //--></script> 
  <script type="text/javascript"><!--
  $('#reward').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#reward').load(this.href);
  });

  $('#reward').load('index.php?route=customer/customer/reward&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

  $('#button-reward').on('click', function(e) {
    e.preventDefault();

    $.ajax({
      url: 'index.php?route=customer/customer/addreward&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>',
      type: 'post',
      dataType: 'json',
      data: 'description=' + encodeURIComponent($('#tab-reward input[name=\'description\']').val()) + '&points=' + encodeURIComponent($('#tab-reward input[name=\'points\']').val()),
      beforeSend: function() {
        $('#button-reward').button('loading');
      },
      complete: function() {
        $('#button-reward').button('reset');
      },
      success: function(json) {
        $('.alert-dismissible').remove();

        if (json['error']) {
           $('#tab-reward').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
        }

        if (json['success']) {
          $('#tab-reward').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

          $('#reward').load('index.php?route=customer/customer/reward&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

          $('#tab-reward input[name=\'points\']').val('');
          $('#tab-reward input[name=\'description\']').val('');
        }
      },
      error: function(xhr, ajaxOptions, thrownError) {
        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
      }
    });
  });

  $('#ip').delegate('.pagination a', 'click', function(e) {
    e.preventDefault();

    $('#ip').load(this.href);
  });

  $('#ip').load('index.php?route=customer/customer/ip&user_token=<?php echo @$user_token ?>&customer_id=<?php echo @$customer_id ?>');

  $('#content').delegate('button[id^=\'button-custom-field\'], button[id^=\'button-address\']', 'click', function() {
    var node = this;

    $('#form-upload').remove();

    $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

    $('#form-upload input[name=\'file\']').trigger('click');

    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function() {
      if ($('#form-upload input[name=\'file\']').val() != '') {
        clearInterval(timer);

        $.ajax({
          url: 'index.php?route=tool/upload/upload&user_token=<?php echo @$user_token ?>',
          type: 'post',
          dataType: 'json',
          data: new FormData($('#form-upload')[0]),
          cache: false,
          contentType: false,
          processData: false,
          beforeSend: function() {
            $(node).button('loading');
          },
          complete: function() {
            $(node).button('reset');
          },
          success: function(json) {
            $(node).parent().find('.text-danger').remove();

            if (json['error']) {
              $(node).parent().find('input[type=\'hidden\']').after('<div class="text-danger">' + json['error'] + '</div>');
            }

            if (json['success']) {
              alert(json['success']);
            }

            if (json['code']) {
              $(node).parent().find('input[type=\'hidden\']').val(json['code']);
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
          }
        });
      }
    }, 500);
  });

  $('.date').datetimepicker({
    language: '<?php echo @$datepicker ?>',
    pickTime: false
  });

  $('.datetime').datetimepicker({
    language: '<?php echo @$datepicker ?>',
    pickDate: true,
    pickTime: true
  });

  $('.time').datetimepicker({
    language: '<?php echo @$datepicker ?>',
    pickDate: false
  });

  // Sort the custom fields
  <?php
        $address_row = 1 ?>  <?php
        @$save93825 = $address        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$addresses);
        foreach ($context['_seq'] as $_key => $address) {
?>  $('#tab-address<?php echo @$address_row ?> .form-group[data-sort]').detach().each(function() {
    if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-address<?php echo @$address_row ?> .form-group').length) {
      $('#tab-address<?php echo @$address_row ?> .form-group').eq($(this).attr('data-sort')).before(this);
    }

    if ($(this).attr('data-sort') > $('#tab-address<?php echo @$address_row ?> .form-group').length) {
      $('#tab-address<?php echo @$address_row ?> .form-group:last').after(this);
    }

    if ($(this).attr('data-sort') < -$('#tab-address<?php echo @$address_row ?> .form-group').length) {
      $('#tab-address<?php echo @$address_row ?> .form-group:first').before(this);
    }
  });
  <?php
            $address_row = (@$address_row + 1) ?>  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$address         = $save93825 ?>
  $('#tab-customer .form-group[data-sort]').detach().each(function() {
    if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-customer .form-group').length) {
      $('#tab-customer .form-group').eq($(this).attr('data-sort')).before(this);
    }

    if ($(this).attr('data-sort') > $('#tab-customer .form-group').length) {
      $('#tab-customer .form-group:last').after(this);
    }

    if ($(this).attr('data-sort') < -$('#tab-customer .form-group').length) {
      $('#tab-customer .form-group:first').before(this);
    }
  });

  $('#tab-affiliate .form-group[data-sort]').detach().each(function() {
    if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#tab-affiliate .form-group').length) {
      $('#tab-affiliate .form-group').eq($(this).attr('data-sort')).before(this);
    }

    if ($(this).attr('data-sort') > $('#tab-affiliate .form-group').length) {
      $('#tab-affiliate .form-group:last').after(this);
    }

    if ($(this).attr('data-sort') < -$('#tab-affiliate .form-group').length) {
      $('#tab-affiliate .form-group:first').before(this);
    }
  });
  //--></script> 
  <script type="text/javascript"><!--
  $('input[name=\'payment\']').on('change', function() {
    $('.payment').hide();

    $('#payment-' + this.value).show();
  });

  $('input[name=\'payment\']:checked').trigger('change');
  //--></script> 
</div>
<?php echo @$footer ?> 
<?php
    }

    public function getTemplateName()
    {
        return "customer/customer_form.twig";
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
