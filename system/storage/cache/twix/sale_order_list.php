<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\sale\order_list.twig */
class sale_order_list extends Twix_Template
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
      <button type="button" data-toggle="tooltip" title="<?php echo @$button_filter ?>" onclick="$('#filter-order').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>
      <button type="submit" id="button-shipping" form="form-order" formaction="<?php echo @$shipping ?>" formtarget="_blank" data-toggle="tooltip" title="<?php echo @$button_shipping_print ?>" class="btn btn-info"><i class="fa fa-truck"></i></button>
      <button type="submit" id="button-invoice" form="form-order" formaction="<?php echo @$invoice ?>" formtarget="_blank" data-toggle="tooltip" title="<?php echo @$button_invoice_print ?>" class="btn btn-info"><i class="fa fa-print"></i></button>
      <a href="<?php echo @$add ?>" data-toggle="tooltip" title="<?php echo @$button_add ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a> </div>
    <h1><?php echo @$heading_title ?></h1>
    <ul class="breadcrumb">
      <?php
        @$save38286 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>      <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
      <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save38286 ?>    </ul>
  </div>
</div>
<div class="container-fluid"><?php
        if (@$error_warning) {
?>  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <?php
        if (@$success) {
?>  <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
    <button type="button" class="close" data-dismiss="alert">&times;</button>
  </div>
  <?php
        }
?>  <div class="row">
    <div id="filter-order" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></h3>
        </div>
        <div class="panel-body">
          <div class="form-group">
            <label class="control-label" for="input-order-id"><?php echo @$entry_order_id ?></label>
            <input type="text" name="filter_order_id" value="<?php echo @$filter_order_id ?>" placeholder="<?php echo @$entry_order_id ?>" id="input-order-id" class="form-control" />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-customer"><?php echo @$entry_customer ?></label>
            <input type="text" name="filter_customer" value="<?php echo @$filter_customer ?>" placeholder="<?php echo @$entry_customer ?>" id="input-customer" class="form-control" />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-order-status"><?php echo @$entry_order_status ?></label>
            <select name="filter_order_status_id" id="input-order-status" class="form-control">
              <option value=""></option>
              
              <?php
        if ((@$filter_order_status_id == "0")) {
?>              
              <option value="0" selected="selected"><?php echo @$text_missing ?></option>
              
              <?php
        } else {
?>              
              <option value="0"><?php echo @$text_missing ?></option>
              
              <?php
        }
?>              <?php
        @$save99308 = $order_status        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$order_statuses);
        foreach ($context['_seq'] as $_key => $order_status) {
?>              <?php
            if ((@$order_status["order_status_id"] == @$filter_order_status_id)) {
?>              
              <option value="<?php echo @$order_status["order_status_id"] ?>" selected="selected"><?php echo @$order_status["name"] ?></option>
              
              <?php
            } else {
?>              
              <option value="<?php echo @$order_status["order_status_id"] ?>"><?php echo @$order_status["name"] ?></option>
              
              <?php
            }
?>              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$order_status         = $save99308 ?>            
            </select>
          </div>
          <div class="form-group">
            <label class="control-label" for="input-total"><?php echo @$entry_total ?></label>
            <input type="text" name="filter_total" value="<?php echo @$filter_total ?>" placeholder="<?php echo @$entry_total ?>" id="input-total" class="form-control" />
          </div>
          <div class="form-group">
            <label class="control-label" for="input-date-added"><?php echo @$entry_date_added ?></label>
            <div class="input-group date">
              <input type="text" name="filter_date_added" value="<?php echo @$filter_date_added ?>" placeholder="<?php echo @$entry_date_added ?>" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />
              <span class="input-group-btn">
              <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
              </span> </div>
          </div>
          <div class="form-group">
            <label class="control-label" for="input-date-modified"><?php echo @$entry_date_modified ?></label>
            <div class="input-group date">
              <input type="text" name="filter_date_modified" value="<?php echo @$filter_date_modified ?>" placeholder="<?php echo @$entry_date_modified ?>" data-date-format="YYYY-MM-DD" id="input-date-modified" class="form-control" />
              <span class="input-group-btn">
              <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
              </span> </div>
          </div>
          <div class="form-group text-right">
            <button type="button" id="button-filter" class="btn btn-default"><i class="fa fa-filter"></i> <?php echo @$button_filter ?></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-9 col-md-pull-3 col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo @$text_list ?></h3>
        </div>
        <div class="panel-body">
          <form method="post" action="" enctype="multipart/form-data" id="form-order">
            <div class="table-responsive">
              <table class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                    <td class="text-right"><?php
        if ((@$sort == "o.order_id")) {
?> <a href="<?php echo @$sort_order ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_order_id ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_order ?>"><?php echo @$column_order_id ?></a> <?php
        }
?></td>
                    <td class="text-left"><?php
        if ((@$sort == "customer")) {
?> <a href="<?php echo @$sort_customer ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_customer ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_customer ?>"><?php echo @$column_customer ?></a> <?php
        }
?></td>
                    <td class="text-left"><?php
        if ((@$sort == "order_status")) {
?> <a href="<?php echo @$sort_status ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_status ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_status ?>"><?php echo @$column_status ?></a> <?php
        }
?></td>
                    <td class="text-right"><?php
        if ((@$sort == "o.total")) {
?> <a href="<?php echo @$sort_total ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_total ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_total ?>"><?php echo @$column_total ?></a> <?php
        }
?></td>
                    <td class="text-left"><?php
        if ((@$sort == "o.date_added")) {
?> <a href="<?php echo @$sort_date_added ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_added ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_date_added ?>"><?php echo @$column_date_added ?></a> <?php
        }
?></td>
                    <td class="text-left"><?php
        if ((@$sort == "o.date_modified")) {
?> <a href="<?php echo @$sort_date_modified ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_modified ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_date_modified ?>"><?php echo @$column_date_modified ?></a> <?php
        }
?></td>
                    <td class="text-right"><?php echo @$column_action ?></td>
                  </tr>
                </thead>
                <tbody>
                
                <?php
        if (@$orders) {
?>                <?php
            @$save12413 = $order            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$orders);
            foreach ($context['_seq'] as $_key => $order) {
?>                <tr>
                  <td class="text-center"> <?php
                if (twix_in_filter(@$order["order_id"], @$selected)) {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$order["order_id"] ?>" checked="checked" />
                    <?php
                } else {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$order["order_id"] ?>" />
                    <?php
                }
?>                    <input type="hidden" name="shipping_code[]" value="<?php echo @$order["shipping_code"] ?>" /></td>
                  <td class="text-right"><?php echo @$order["order_id"] ?></td>
                  <td class="text-left"><?php echo @$order["customer"] ?></td>
                  <td class="text-left"><?php echo @$order["order_status"] ?></td>
                  <td class="text-right"><?php echo @$order["total"] ?></td>
                  <td class="text-left"><?php echo @$order["date_added"] ?></td>
                  <td class="text-left"><?php echo @$order["date_modified"] ?></td>
                  <td class="text-right"><div style="min-width: 120px;">
                      <div class="btn-group"> <a href="<?php echo @$order["view"] ?>" data-toggle="tooltip" title="<?php echo @$button_view ?>" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="<?php echo @$order["edit"] ?>"><i class="fa fa-pencil"></i> <?php echo @$button_edit ?></a></li>
                          <li><a href="<?php echo @$order["order_id"] ?>"><i class="fa fa-trash-o"></i> <?php echo @$button_delete ?></a></li>
                        </ul>
                      </div>
                    </div></td>
                </tr>
                <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$order             = $save12413 ?>                <?php
        } else {
?>                <tr>
                  <td class="text-center" colspan="8"><?php echo @$text_no_results ?></td>
                </tr>
                <?php
        }
?>                  </tbody>
                
              </table>
            </div>
          </form>
          <div class="row">
            <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
            <div class="col-sm-6 text-right"><?php echo @$results ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	url = '';

	var filter_order_id = $('input[name=\'filter_order_id\']').val();

	if (filter_order_id) {
		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
	}

	var filter_customer = $('input[name=\'filter_customer\']').val();

	if (filter_customer) {
		url += '&filter_customer=' + encodeURIComponent(filter_customer);
	}

	var filter_order_status_id = $('select[name=\'filter_order_status_id\']').val();

	if (filter_order_status_id !== '') {
		url += '&filter_order_status_id=' + encodeURIComponent(filter_order_status_id);
	}

	var filter_total = $('input[name=\'filter_total\']').val();

	if (filter_total) {
		url += '&filter_total=' + encodeURIComponent(filter_total);
	}

	var filter_date_added = $('input[name=\'filter_date_added\']').val();

	if (filter_date_added) {
		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
	}

	var filter_date_modified = $('input[name=\'filter_date_modified\']').val();

	if (filter_date_modified) {
		url += '&filter_date_modified=' + encodeURIComponent(filter_date_modified);
	}

	location = 'index.php?route=sale/order&user_token=<?php echo @$user_token ?>' + url;
});
//--></script> 
  <script type="text/javascript"><!--
$('input[name=\'filter_customer\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=customer/customer/autocomplete&user_token=<?php echo @$user_token ?>&filter_name=' +  encodeURIComponent(request),
			dataType: 'json',
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['name'],
						value: item['customer_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter_customer\']').val(item['label']);
	}
});
//--></script> 
  <script type="text/javascript"><!--
$('input[name^=\'selected\']').on('change', function() {
	$('#button-shipping, #button-invoice').prop('disabled', true);

	var selected = $('input[name^=\'selected\']:checked');

	if (selected.length) {
		$('#button-invoice').prop('disabled', false);
	}

	for (i = 0; i < selected.length; i++) {
		if ($(selected[i]).parent().find('input[name^=\'shipping_code\']').val()) {
			$('#button-shipping').prop('disabled', false);

			break;
		}
	}
});

$('#button-shipping, #button-invoice').prop('disabled', true);

$('input[name^=\'selected\']:first').trigger('change');

// IE and Edge fix!
$('#button-shipping, #button-invoice').on('click', function(e) {
	$('#form-order').attr('action', this.getAttribute('formAction'));
});

$('#form-order li:last-child a').on('click', function(e) {
	e.preventDefault();
	
	var element = this;
	
	if (confirm('<?php echo @$text_confirm ?>')) {
		$.ajax({
			url: '<?php echo @$catalog ?>index.php?route=api/order/delete&api_token=<?php echo @$api_token ?>&store_id=<?php echo @$store_id ?>&order_id=' + $(element).attr('href'),
			dataType: 'json',
			beforeSend: function() {
				$(element).parent().parent().parent().find('button').button('loading');
			},
			complete: function() {
				$(element).parent().parent().parent().find('button').button('reset');
			},
			success: function(json) {
				$('.alert-dismissible').remove();
	
				if (json['error']) {
					$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
				}
	
				if (json['success']) {
					location = '<?php echo @$delete ?>';
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
});
//--></script> 
  <script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
  <script type="text/javascript"><!--
$('.date').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickTime: false
});
//--></script></div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "sale/order_list.twig";
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
