<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_approval.twig */
class customer_customer_approval extends Twix_Template
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
      <div class="pull-right"><button type="button" data-toggle="tooltip" title="<?php echo @$button_filter ?>" onclick="$('#filter-customer').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save40215 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save40215 ?>      </ul>
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
      <div id="filter-customer" class="col-md-3 col-md-push-9 col-sm-12 hidden-sm hidden-xs">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-filter"></i> <?php echo @$text_filter ?></h3>
          </div>
          <div class="panel-body">
            <div class="form-group">
              <label class="control-label" for="input-name"><?php echo @$entry_name ?></label>
              <input type="text" name="filter_name" value="<?php echo @$filter_name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-email"><?php echo @$entry_email ?></label>
              <input type="text" name="filter_email" value="<?php echo @$filter_email ?>" placeholder="<?php echo @$entry_email ?>" id="input-email" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-customer-group"><?php echo @$entry_customer_group ?></label>
              <select name="filter_customer_group_id" id="input-customer-group" class="form-control">
                <option value=""></option>
                
                  
                <?php
        @$save37042 = $customer_group        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$customer_groups);
        foreach ($context['_seq'] as $_key => $customer_group) {
?>                <?php
            if ((@$customer_group["customer_group_id"] == @$filter_customer_group_id)) {
?>                
                  
                <option value="<?php echo @$customer_group["customer_group_id"] ?>" selected="selected"><?php echo @$customer_group["name"] ?></option>
                
                  
                <?php
            } else {
?>                
                  
                <option value="<?php echo @$customer_group["customer_group_id"] ?>"><?php echo @$customer_group["name"] ?></option>
                
                  
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$customer_group         = $save37042 ?>              
                
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="input-type"><?php echo @$entry_type ?></label>
              <select name="filter_type" id="input-type" class="form-control">
                <option value=""></option>
                
                  
                <?php
        if ((@$filter_type == "customer")) {
?>                
                  
                <option value="customer" selected="selected"><?php echo @$text_customer ?></option>
                
                  
                <?php
        } else {
?>                
                  
                <option value="customer"><?php echo @$text_customer ?></option>
                
                  
                <?php
        }
?>              
                <?php
        if ((@$filter_type == "affiliate")) {
?>                
                  
                <option value="affiliate" selected="selected"><?php echo @$text_affiliate ?></option>
                
                  
                <?php
        } else {
?>                
                  
                <option value="affiliate"><?php echo @$text_affiliate ?></option>
                
                  
                <?php
        }
?>              
                
              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="input-date-added"><?php echo @$entry_date_added ?></label>
              <div class="input-group date">
                <input type="text" name="filter_date_added" value="<?php echo @$filter_date_added ?>" placeholder="<?php echo @$entry_date_added ?>" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />
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
            <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo @$text_list ?></h3>
          </div>
          <div class="panel-body">
            <div id="customer-approval"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
$('#customer-approval').delegate('.pagination a', 'click', function(e) {
	e.preventDefault();

	$('#customer-approval').load(this.href);
});
  
$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=<?php echo @$user_token ?>');

$('#customer-approval').on('click', '.btn-success, .btn-danger', function(e) {
	e.preventDefault();
	
	var element = this;
	
	$.ajax({
		url: $(element).attr('href'),
		dataType: 'json',
		beforeSend: function() {
			$(element).button('loading');
		},
		complete: function() {
			$(element).button('reset');
		},
		success: function(json) {
			$('.alert-dismissible').remove();

			if (json['error']) {
				$('#customer-approval').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}

			if (json['success']) {
				$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=<?php echo @$user_token ?>');

				$('#customer-approval').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#button-filter').on('click', function() {
	url = '';
	
	var filter_name = $('input[name=\'filter_name\']').val();
	
	if (filter_name) {
		url += '&filter_name=' + encodeURIComponent(filter_name);
	}
	
	var filter_email = $('input[name=\'filter_email\']').val();
	
	if (filter_email) {
		url += '&filter_email=' + encodeURIComponent(filter_email);
	}	
		
	var filter_customer_group_id = $('select[name=\'filter_customer_group_id\']').val();
	
	if (filter_customer_group_id !== '') {
		url += '&filter_customer_group_id=' + encodeURIComponent(filter_customer_group_id);
	}	
	
	var filter_type = $('select[name=\'filter_type\']').val();
	
	if (filter_type !== '') {
		url += '&filter_type=' + filter_type;
	}
			
	var filter_date_added = $('input[name=\'filter_date_added\']').val();
	
	if (filter_date_added) {
		url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
	}
	
	$('#customer-approval').load('index.php?route=customer/customer_approval/customer_approval&user_token=<?php echo @$user_token ?>' + url);
});
//--></script> 
  <script type="text/javascript"><!--
$('input[name=\'filter_name\']').autocomplete({
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
		$('input[name=\'filter_name\']').val(item['label']);
	}	
});

$('input[name=\'filter_email\']').autocomplete({
	'source': function(request, response) {
		$.ajax({
			url: 'index.php?route=customer/customer/autocomplete&user_token=<?php echo @$user_token ?>&filter_email=' +  encodeURIComponent(request),
			dataType: 'json',			
			success: function(json) {
				response($.map(json, function(item) {
					return {
						label: item['email'],
						value: item['customer_id']
					}
				}));
			}
		});
	},
	'select': function(item) {
		$('input[name=\'filter_email\']').val(item['label']);
	}	
});
//--></script> 
  <script type="text/javascript"><!--
$('.date').datetimepicker({
	language: '<?php echo @$datepicker ?>',
	pickTime: false
});
//--></script></div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "customer/customer_approval.twig";
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
