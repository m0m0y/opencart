<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\extension\report\customer_transaction_info.twig */
class extension_report_customer_transaction_info extends Twix_Template
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
    extract($context); ?><div class="row">
  <div id="filter-report" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></h3>
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label class="control-label" for="input-date-start"><?php echo @$entry_date_start ?></label>
          <div class="input-group date">
            <input type="text" name="filter_date_start" value="<?php echo @$filter_date_start ?>" placeholder="<?php echo @$entry_date_start ?>" data-date-format="YYYY-MM-DD" id="input-date-start" class="form-control" />
            <span class="input-group-btn">
            <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
            </span></div>
        </div>
        <div class="form-group">
          <label class="control-label" for="input-customer"><?php echo @$entry_customer ?></label>
          <input type="text" name="filter_customer" value="<?php echo @$filter_customer ?>" placeholder="<?php echo @$entry_customer ?>" id="input-customer" class="form-control" />
        </div>
        <div class="form-group">
          <label class="control-label" for="input-date-end"><?php echo @$entry_date_end ?></label>
          <div class="input-group date">
            <input type="text" name="filter_date_end" value="<?php echo @$filter_date_end ?>" placeholder="<?php echo @$entry_date_end ?>" data-date-format="YYYY-MM-DD" id="input-date-end" class="form-control" />
            <span class="input-group-btn">
            <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
            </span></div>
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
        <h3 class="panel-title"><i class="fa fa-bar-chart"></i> <?php echo @$heading_title ?></h3>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <td class="text-left"><?php echo @$column_customer ?></td>
                <td class="text-left"><?php echo @$column_email ?></td>
                <td class="text-left"><?php echo @$column_customer_group ?></td>
                <td class="text-left"><?php echo @$column_status ?></td>
                <td class="text-right"><?php echo @$column_total ?></td>
                <td class="text-right"><?php echo @$column_action ?></td>
              </tr>
            </thead>
            <tbody>
            
            <?php
        if (@$customers) {
?>            <?php
            @$save11268 = $customer            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$customers);
            foreach ($context['_seq'] as $_key => $customer) {
?>            <tr>
              <td class="text-left"><?php echo @$customer["customer"] ?></td>
              <td class="text-left"><?php echo @$customer["email"] ?></td>
              <td class="text-left"><?php echo @$customer["customer_group"] ?></td>
              <td class="text-left"><?php echo @$customer["status"] ?></td>
              <td class="text-right"><?php echo @$customer["total"] ?></td>
              <td class="text-right"><a href="<?php echo @$customer["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
            </tr>
            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$customer             = $save11268 ?>            <?php
        } else {
?>            <tr>
              <td class="text-center" colspan="6"><?php echo @$text_no_results ?></td>
            </tr>
            <?php
        }
?>            </tbody>
            
          </table>
        </div>
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
	var url = '';
	
	var filter_customer = $('input[name=\'filter_customer\']').val();
	
	if (filter_customer) {
		url += '&filter_customer=' + encodeURIComponent(filter_customer);
	}
	
	var filter_date_start = $('input[name=\'filter_date_start\']').val();
	
	if (filter_date_start) {
		url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
	}
	
	var filter_date_end = $('input[name=\'filter_date_end\']').val();
	
	if (filter_date_end) {
		url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
	}
	
	location = 'index.php?route=report/report&code=customer_transaction&user_token=<?php echo @$user_token ?>' + url;
});
//--></script> 
<script type="text/javascript"><!--
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
//--></script><?php
    }

    public function getTemplateName()
    {
        return "extension/report/customer_transaction_info.twig";
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
