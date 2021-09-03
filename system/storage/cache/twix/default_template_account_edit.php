<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\edit.twig */
class default_template_account_edit extends Twix_Template
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
<div id="account-edit" class="container">
  <ul class="breadcrumb">
    <?php
        @$save46808 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save46808 ?>  </ul>
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
          <legend><?php echo @$text_your_details ?></legend>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname"><?php echo @$entry_firstname ?> </label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="<?php echo @$firstname ?>" placeholder="<?php echo @$entry_firstname ?>" id="input-firstname" class="form-control" />
              <?php
        if (@$error_firstname) {
?>              <div class="text-danger"><?php echo @$error_firstname ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname"><?php echo @$entry_lastname ?></label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="<?php echo @$lastname ?>" placeholder="<?php echo @$entry_lastname ?>" id="input-lastname" class="form-control" />
              <?php
        if (@$error_lastname) {
?>              <div class="text-danger"><?php echo @$error_lastname ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email"><?php echo @$entry_email ?></label>
            <div class="col-sm-10">
              <input type="email" name="email" value="<?php echo @$email ?>" placeholder="<?php echo @$entry_email ?>" id="input-email" class="form-control" />
              <?php
        if (@$error_email) {
?>              <div class="text-danger"><?php echo @$error_email ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-telephone"><?php echo @$entry_telephone ?></label>
            <div class="col-sm-10">
              <input type="tel" name="telephone" value="<?php echo @$telephone ?>" placeholder="<?php echo @$entry_telephone ?>" id="input-telephone" class="form-control" />
              <?php
        if (@$error_telephone) {
?>              <div class="text-danger"><?php echo @$error_telephone ?></div>
              <?php
        }
?>            </div>
          </div>
          <?php
        @$save49894 = $custom_field        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$custom_fields);
        foreach ($context['_seq'] as $_key => $custom_field) {
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
                @$save43258 = $custom_field_value                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                <?php
                    if ((@$account_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$account_custom_field[@$custom_field["custom_field_id"]]))) {
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
$custom_field_value                 = $save43258 ?>              </select>
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
                @$save81880 = $custom_field_value                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                <div class="radio">
                  <?php
                    if ((@$account_custom_field[@$custom_field["custom_field_id"]] && (@$custom_field_value["custom_field_value_id"] == @$account_custom_field[@$custom_field["custom_field_id"]]))) {
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
$custom_field_value                 = $save81880 ?>              </div>
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
                @$save49532 = $custom_field_value                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$custom_field["custom_field_value"]);
                foreach ($context['_seq'] as $_key => $custom_field_value) {
?>                <div class="checkbox">
                  <?php
                    if ((@$account_custom_field[@$custom_field["custom_field_id"]] && twix_in_filter(@$custom_field_value["custom_field_value_id"], @$account_custom_field[@$custom_field["custom_field_id"]]))) {
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
$custom_field_value                 = $save49532 ?>              </div>
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
                if (@$account_custom_field[@$custom_field["custom_field_id"]]) {
echo @$account_custom_field[@$custom_field["custom_field_id"]];
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
                if (@$account_custom_field[@$custom_field["custom_field_id"]]) {
echo @$account_custom_field[@$custom_field["custom_field_id"]];
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
                if (@$account_custom_field[@$custom_field["custom_field_id"]]) {
echo @$account_custom_field[@$custom_field["custom_field_id"]] ?> <?php
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
                if (@$account_custom_field[@$custom_field["custom_field_id"]]) {
echo @$account_custom_field[@$custom_field["custom_field_id"]];
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
                if (@$account_custom_field[@$custom_field["custom_field_id"]]) {
echo @$account_custom_field[@$custom_field["custom_field_id"]];
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
                if (@$account_custom_field[@$custom_field["custom_field_id"]]) {
echo @$account_custom_field[@$custom_field["custom_field_id"]];
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
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field         = $save49894 ?>        </fieldset>
        <div class="buttons clearfix">
          <div class="pull-left"><a href="<?php echo @$back ?>" class="btn btn-default"><?php echo @$button_back ?></a></div>
          <div class="pull-right">
            <input type="submit" value="<?php echo @$button_continue ?>" class="btn btn-primary" />
          </div>
        </div>
      </form>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
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
	var element = this;

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
					$(element).button('loading');
				},
				complete: function() {
					$(element).button('reset');
				},
				success: function(json) {
					$(element).parent().find('.text-danger').remove();

					if (json['error']) {
						$(element).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(element).parent().find('input').val(json['code']);
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
        return "default/template/account/edit.twig";
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
