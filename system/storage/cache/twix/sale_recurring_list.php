<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\sale\recurring_list.twig */
class sale_recurring_list extends Twix_Template
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
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_filter ?>" onclick="$('#filter-recurring').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save58077 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save58077 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"><?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <?php
        if (@$success) {
?>    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="row">
      <div id="filter-recurring" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label" for="input-order-recurring-id"><?php echo @$entry_order_recurring_id ?></label>
              <input type="text" name="filter_order_recurring_id" value="<?php echo @$filter_order_recurring_id ?>" placeholder="<?php echo @$entry_order_recurring_id ?>" id="input-order-recurring-id" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-customer"><?php echo @$entry_customer ?></label>
              <input type="text" name="filter_customer" value="<?php echo @$filter_customer ?>" placeholder="<?php echo @$entry_customer ?>" id="input-customer" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-order-id"><?php echo @$entry_order_id ?></label>
              <input type="text" name="filter_order_id" value="<?php echo @$filter_order_id ?>" placeholder="<?php echo @$entry_order_id ?>" id="input-order-id" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-status"><?php echo @$entry_status ?></label>
              <select name="filter_status" id="input-status" class="form-control">
                
                <?php
        @$save33611 = $recurring_status        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$recurring_statuses);
        foreach ($context['_seq'] as $_key => $recurring_status) {
?>                  <?php
            if ((@$filter_status == @$recurring_status["value"])) {
?>                <option value="<?php echo @$recurring_status["value"] ?>" selected="selected"><?php echo @$recurring_status["text"] ?></option>
                  <?php
            } else {
?>                <option value="<?php echo @$recurring_status["value"] ?>"><?php echo @$recurring_status["text"] ?></option>
                  <?php
            }
?>                  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring_status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$recurring_status         = $save33611 ?> 
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="input-reference"><?php echo @$entry_reference ?></label>
              <input type="text" name="filter_reference" value="<?php echo @$filter_reference ?>" placeholder="<?php echo @$entry_reference ?>" id="input-reference" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-date-date_added"><?php echo @$entry_date_added ?></label>
              <div class="input-group date">
                <input type="text" name="filter_date_added" value="<?php echo @$filter_date_added ?>" placeholder="<?php echo @$entry_date_added ?>" data-date-format="YYYY-MM-DD" id="input-date-date_added" class="form-control" />
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
            <form action="" method="post" enctype="multipart/form-data" id="form-recurring">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td class="text-right"><?php
        if ((@$sort == "or.order_recurring_id")) {
?> <a href="<?php echo @$sort_order_recurring ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_order_recurring_id ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_order_recurring ?>"><?php echo @$column_order_recurring_id ?></a> <?php
        }
?></td>
                      <td class="text-right"><?php
        if ((@$sort == "or.order_id")) {
?> <a href="<?php echo @$sort_order ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_order_id ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_order ?>"><?php echo @$column_order_id ?></a> <?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "or.reference")) {
?> <a href="<?php echo @$sort_reference ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_reference ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_reference ?>"><?php echo @$column_reference ?></a> <?php
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
        if ((@$sort == "or.status")) {
?> <a href="<?php echo @$sort_status ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_status ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_status ?>"><?php echo @$column_status ?></a> <?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "or.date_added")) {
?> <a href="<?php echo @$sort_date_added ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_added ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_date_added ?>"><?php echo @$column_date_added ?></a> <?php
        }
?></td>
                      <td class="text-right"><?php echo @$column_action ?></td>
                    </tr>
                  </thead>
                  <tbody>
                  
                  <?php
        if (@$recurrings) {
?>                  <?php
            @$save36591 = $recurring            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$recurrings);
            foreach ($context['_seq'] as $_key => $recurring) {
?>                  <tr>
                    <td class="text-right"><?php echo @$recurring["order_recurring_id"] ?></td>
                    <td class="text-right"><?php echo @$recurring["order_id"] ?></td>
                    <td class="text-left"><?php echo @$recurring["reference"] ?></td>
                    <td class="text-left"><?php echo @$recurring["customer"] ?></td>
                    <td class="text-left"><?php echo @$recurring["status"] ?></td>
                    <td class="text-left"><?php echo @$recurring["date_added"] ?></td>
                    <td class="text-right"><a href="<?php echo @$recurring["view"] ?>" data-toggle="tooltip" title="<?php echo @$button_order_recurring ?>" class="btn btn-info"><i class="fa fa-eye"></i></a> <a href="<?php echo @$recurring["order"] ?>" data-toggle="tooltip" title="<?php echo @$button_order ?>" class="btn btn-info"><i class="fa fa-shopping-cart"></i></a></td>
                  </tr>
                  <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$recurring             = $save36591 ?>                  <?php
        } else {
?>                  <tr>
                    <td class="text-center" colspan="7"><?php echo @$text_no_results ?></td>
                  </tr>
                  <?php
        }
?>                    </tbody>
                  
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
  </div>
  <script type="text/javascript"><!--
$('#button-filter').on('click', function() {
	url = 'index.php?route=sale/recurring&user_token=<?php echo @$user_token ?>';

	var filter_order_recurring_id = $('input[name=\'filter_order_recurring_id\']').val();

	if (filter_order_recurring_id) {
		url += '&filter_order_recurring_id=' + encodeURIComponent(filter_order_recurring_id);
	}

	var filter_order_id = $('input[name=\'filter_order_id\']').val();

	if (filter_order_id) {
		url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
	}

	var filter_reference = $('input[name=\'filter_reference\']').val();
	
	if (filter_reference) {
		url += '&filter_reference=' + encodeURIComponent(filter_reference);
	}

	var filter_customer = $('input[name=\'filter_customer\']').val();
	
	if (filter_customer) {
		url += '&filter_customer=' + encodeURIComponent(filter_customer);
	}

	var filter_status = $('select[name=\'filter_status\']').val();
	
	if (filter_status != 0) {
		url += '&filter_status=' + encodeURIComponent(filter_status);
	}
	
	var filter_date_added = $('input[name=\'filter_date_added\']').val();
	
	if (filter_date_added != '') {
		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
	}
		
	location = url;
});

$('#form input').keydown(function(e) {
	if (e.keyCode == 13) {
		filter();
	}
});

$('.date').datetimepicker({ 
	language: '<?php echo @$datepicker ?>',
	pickTime: false 
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
//--></script></div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "sale/recurring_list.twig";
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
