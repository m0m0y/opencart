<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\affiliate.twig */
class default_template_account_affiliate extends Twix_Template
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
    extract($context); echo @$header ?>
<div id="account-affiliate" class="container">
  <ul class="breadcrumb">
    <?php
        @$save24871 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save24871 ?>  </ul>
  <?php
        if (@$error_warning) {
?>  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
  <?php
        }
?>  <div class="row"><?php echo @$column_left ?>
    <?php
        if ((@$column_left && @$column_right)) {
?>    <?php
            $class = "col-sm-6" ?>    <?php
        } elseif ((@$column_left || @$column_right)) {
?>    <?php
            $class = "col-sm-9" ?>    <?php
        } else {
?>    <?php
            $class = "col-sm-12" ?>    <?php
        }
?>    <div id="content" class="<?php echo @$class ?>"><?php echo @$content_top ?>
      <h1><?php echo @$heading_title ?></h1>
      <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <fieldset>
          <legend><?php echo @$text_my_affiliate ?></legend>
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
       </fieldset>
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
?>                  <input type="radio" name="payment" value="cheque" checked="checked" />
                  <?php
        } else {
?>                  <input type="radio" name="payment" value="cheque" />
                  <?php
        }
?>                  <?php echo @$text_cheque ?></label>
              </div>
              <div class="radio">
                <label><?php
        if ((@$payment == "paypal")) {
?>                  <input type="radio" name="payment" value="paypal" checked="checked" />
                  <?php
        } else {
?>                  <input type="radio" name="payment" value="paypal" />
                  <?php
        }
?>                  <?php echo @$text_paypal ?></label>
              </div>
              <div class="radio">
                <label><?php
        if ((@$payment == "bank")) {
?>                  <input type="radio" name="payment" value="bank" checked="checked" />
                  <?php
        } else {
?>                  <input type="radio" name="payment" value="bank" />
                  <?php
        }
?>                  <?php echo @$text_bank ?></label>
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
?>              <div class="text-danger"><?php echo @$error_cheque ?></div>
              <?php
        }
?>            </div>
           </div>
          </div>
          <div id="payment-paypal" class="payment">
           <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-paypal"><?php echo @$entry_paypal ?></label>
            <div class="col-sm-10">
              <input type="text" name="paypal" value="<?php echo @$paypal ?>" placeholder="<?php echo @$entry_paypal ?>" id="input-paypal" class="form-control" />
              <?php
        if (@$error_paypal) {
?>              <div class="text-danger"><?php echo @$error_paypal ?></div>
              <?php
        }
?>            </div>
           </div>
          </div>
          <div class="payment" id="payment-bank">
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
?>                <div class="text-danger"><?php echo @$error_bank_account_name ?></div>
                <?php
        }
?>              </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-bank-account-number"><?php echo @$entry_bank_account_number ?></label>
              <div class="col-sm-10">
                <input type="text" name="bank_account_number" value="<?php echo @$bank_account_number ?>" placeholder="<?php echo @$entry_bank_account_number ?>" id="input-bank-account-number" class="form-control" />
                <?php
        if (@$error_bank_account_number) {
?>                <div class="text-danger"><?php echo @$error_bank_account_number ?></div>
                <?php
        }
?>              </div>
            </div>
          </div>
          <?php
        @$save31411 = $custom_field        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$custom_fields);
        foreach ($context['_seq'] as $_key => $custom_field) {
?>          <?php
            if ((@$custom_field["location"] == "affiliate")) {
?>          <?php
                if ((@$custom_field["type"] == "select")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <select name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control">
                <option value=""><?php echo @$text_select ?></option>
                <?php
                    @$save68331 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                <?php
                        if ((@$affiliate_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$affiliate_custom_field[@$custom_field["custom_field_id"]]))) {
?>                <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" selected="selected"><?php echo @$custom_field_value["name"] ?></option>
                <?php
                        } else {
?>                <option value="<?php echo @$custom_field_value["custom_field_value_id"] ?>"><?php echo @$custom_field_value["name"] ?></option>
                <?php
                        }
?>                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save68331 ?>              </select>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "radio")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <div>
                <?php
                    @$save85261 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                <div class="radio">
                  <?php
                        if ((@$affiliate_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$affiliate_custom_field[@$custom_field["custom_field_id"]]))) {
?>                  <label>
                    <input type="radio" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                    <?php echo @$custom_field_value["name"] ?></label>
                  <?php
                        } else {
?>                  <label>
                    <input type="radio" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                    <?php echo @$custom_field_value["name"] ?></label>
                  <?php
                        }
?>                </div>
                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save85261 ?>              </div>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "checkbox")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <div>
                <?php
                    @$save60383 = $custom_field_value                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                    foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                <div class="checkbox">
                  <?php
                        if ((@$affiliate_custom_field[@$custom_field["custom_field_id"]] && twix_in_filter(@$custom_field_value["custom_field_value_id"], @$affiliate_custom_field[@$custom_field["custom_field_id"]]))) {
?>                  <label>
                    <input type="checkbox" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" checked="checked" />
                    <?php echo @$custom_field_value["name"] ?></label>
                  <?php
                        } else {
?>                  <label>
                    <input type="checkbox" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>][]" value="<?php echo @$custom_field_value["custom_field_value_id"] ?>" />
                    <?php echo @$custom_field_value["name"] ?></label>
                  <?php
                        }
?>                </div>
                <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field_value                     = $save60383 ?>              </div>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "text")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php
                    if (@$affiliate_custom_field[@$custom_field["custom_field_id"]]) {
echo @$affiliate_custom_field[@$custom_field["custom_field_id"]];
                    } else {
echo @$custom_field["value"];
                    }
?>" placeholder="<?php echo @$custom_field["name"] ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "textarea")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <textarea name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" rows="5" placeholder="<?php echo @$custom_field["name"] ?>" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control"><?php
                    if (@$affiliate_custom_field[@$custom_field["custom_field_id"]]) {
echo @$affiliate_custom_field[@$custom_field["custom_field_id"]];
                    } else {
echo @$custom_field["value"];
                    }
?></textarea>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "file")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <button type="button" id="button-custom-field<?php echo @$custom_field["custom_field_id"] ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-default"><i class="fa fa-upload"></i> <?php echo @$button_upload ?></button>
              <input type="hidden" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php
                    if (@$affiliate_custom_field[@$custom_field["custom_field_id"]]) {
echo @$affiliate_custom_field[@$custom_field["custom_field_id"]] ?> <?php
                    }
?>" />
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "date")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <div class="input-group date">
                <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php
                    if (@$affiliate_custom_field[@$custom_field["custom_field_id"]]) {
echo @$affiliate_custom_field[@$custom_field["custom_field_id"]];
                    } else {
echo @$custom_field["value"];
                    }
?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "time")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <div class="input-group time">
                <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php
                    if (@$affiliate_custom_field[@$custom_field["custom_field_id"]]) {
echo @$affiliate_custom_field[@$custom_field["custom_field_id"]];
                    } else {
echo @$custom_field["value"];
                    }
?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="HH:mm" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
                if ((@$custom_field["type"] == "datetime")) {
?>          <div class="form-group<?php
                    if (@$custom_field["required"]) {
?> required <?php
                    }
?> custom-field" data-sort="<?php echo @$custom_field["sort_order"] ?>">
            <label class="col-sm-2 control-label" for="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>"><?php echo @$custom_field["name"] ?></label>
            <div class="col-sm-10">
              <div class="input-group datetime">
                <input type="text" name="custom_field[<?php echo @$custom_field["location"] ?>][<?php echo @$custom_field["custom_field_id"] ?>]" value="<?php
                    if (@$affiliate_custom_field[@$custom_field["custom_field_id"]]) {
echo @$affiliate_custom_field[@$custom_field["custom_field_id"]];
                    } else {
echo @$custom_field["value"];
                    }
?>" placeholder="<?php echo @$custom_field["name"] ?>" data-date-format="YYYY-MM-DD HH:mm" id="input-custom-field<?php echo @$custom_field["custom_field_id"] ?>" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span></div>
              <?php
                    if (@$error_custom_field[@$custom_field["custom_field_id"]]) {
?>              <div class="text-danger"><?php echo @$error_custom_field[@$custom_field["custom_field_id"]] ?></div>
              <?php
                    }
?>            </div>
          </div>
          <?php
                }
?>          <?php
            }
?>          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field         = $save31411 ?>    
        </fieldset>
        <?php
        if (@$text_agree) {
?>        <div class="buttons clearfix">
          <div class="pull-right"><?php echo @$text_agree ?>
            <?php
            if (@$agree) {
?>            <input type="checkbox" name="agree" value="1" checked="checked" />
            <?php
            } else {
?>            <input type="checkbox" name="agree" value="1" />
            <?php
            }
?>            &nbsp;
            <input type="submit" value="<?php echo @$button_continue ?>" class="btn btn-primary" />
          </div>
        </div>
        <?php
        } else {
?>        <div class="buttons clearfix">
          <div class="pull-right">
            <input type="submit" value="<?php echo @$button_continue ?>" class="btn btn-primary" />
          </div>
        </div>
        <?php
        }
?>      </form>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<script type="text/javascript"><!--
$('input[name=\'payment\']').on('change', function() {
    $('.payment').hide();

    $('#payment-' + this.value).show();
});

$('input[name=\'payment\']:checked').trigger('change');
//--></script>
<script type="text/javascript"><!--
// Sort the custom fields
$('.form-group[data-sort]').detach().each(function() {
	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('.form-group').length) {
		$('.form-group').eq($(this).attr('data-sort')).before(this);
	}

	if ($(this).attr('data-sort') > $('.form-group').length) {
		$('.form-group:last').after(this);
	}

	if ($(this).attr('data-sort') == $('.form-group').length) {
		$('.form-group:last').after(this);
	}

	if ($(this).attr('data-sort') < -$('.form-group').length) {
		$('.form-group:first').before(this);
	}
});
//--></script>
<script type="text/javascript"><!--
$('button[id^=\'button-custom-field\']').on('click', function() {
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
				url: 'index.php?route=tool/upload',
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
						$(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input').val(json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
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
//--></script>
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/account/affiliate.twig";
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
