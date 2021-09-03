<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\sale\order_info.twig */
class sale_order_info extends Twix_Template
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
      <div class="pull-right"><a href="<?php echo @$invoice ?>" target="_blank" data-toggle="tooltip" title="<?php echo @$button_invoice_print ?>" class="btn btn-info"><i class="fa fa-print"></i></a> <a href="<?php echo @$shipping ?>" target="_blank" data-toggle="tooltip" title="<?php echo @$button_shipping_print ?>" class="btn btn-info"><i class="fa fa-truck"></i></a> <a href="<?php echo @$edit ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a> <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save61063 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>          <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save61063 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-shopping-cart"></i> <?php echo @$text_order_detail ?></h3>
          </div>
          <table class="table">
            <tbody>
              <tr>
                <td style="width: 1%;"><button data-toggle="tooltip" title="<?php echo @$text_store ?>" class="btn btn-info btn-xs"><i class="fa fa-shopping-cart fa-fw"></i></button></td>
                <td><a href="<?php echo @$store_url ?>" target="_blank"><?php echo @$store_name ?></a></td>
              </tr>
              <tr>
                <td><button data-toggle="tooltip" title="<?php echo @$text_date_added ?>" class="btn btn-info btn-xs"><i class="fa fa-calendar fa-fw"></i></button></td>
                <td><?php echo @$date_added ?></td>
              </tr>
              <tr>
                <td><button data-toggle="tooltip" title="<?php echo @$text_payment_method ?>" class="btn btn-info btn-xs"><i class="fa fa-credit-card fa-fw"></i></button></td>
                <td><?php echo @$payment_method ?></td>
              </tr>
              <?php
        if (@$shipping_method) {
?>                <tr>
                  <td><button data-toggle="tooltip" title="<?php echo @$text_shipping_method ?>" class="btn btn-info btn-xs"><i class="fa fa-truck fa-fw"></i></button></td>
                  <td><?php echo @$shipping_method ?></td>
                </tr>
              <?php
        }
?>            </tbody>

          </table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-user"></i> <?php echo @$text_customer_detail ?></h3>
          </div>
          <table class="table">
            <tr>
              <td style="width: 1%;"><button data-toggle="tooltip" title="<?php echo @$text_customer ?>" class="btn btn-info btn-xs"><i class="fa fa-user fa-fw"></i></button></td>
              <td><?php
        if (@$customer) {
?> <a href="<?php echo @$customer ?>" target="_blank"><?php echo @$firstname ?> <?php echo @$lastname ?></a> <?php
        } else {
?>                  <?php echo @$firstname ?> <?php echo @$lastname ?>
                <?php
        }
?></td>
            </tr>
            <tr>
              <td><button data-toggle="tooltip" title="<?php echo @$text_customer_group ?>" class="btn btn-info btn-xs"><i class="fa fa-group fa-fw"></i></button></td>
              <td><?php echo @$customer_group ?></td>
            </tr>
            <tr>
              <td><button data-toggle="tooltip" title="<?php echo @$text_email ?>" class="btn btn-info btn-xs"><i class="fa fa-envelope-o fa-fw"></i></button></td>
              <td><a href="mailto:<?php echo @$email ?>"><?php echo @$email ?></a></td>
            </tr>
            <tr>
              <td><button data-toggle="tooltip" title="<?php echo @$text_telephone ?>" class="btn btn-info btn-xs"><i class="fa fa-phone fa-fw"></i></button></td>
              <td><?php echo @$telephone ?></td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-cog"></i> <?php echo @$text_option ?></h3>
          </div>
          <table class="table">
            <tbody>
              <tr>
                <td><?php echo @$text_invoice ?></td>
                <td id="invoice" class="text-right"><?php echo @$invoice_no ?></td>
                <td style="width: 1%;" class="text-center"><?php
        if ( !@$invoice_no) {
?>                    <button id="button-invoice" data-loading-text="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_generate ?>" class="btn btn-success btn-xs"><i class="fa fa-cog"></i></button>
                  <?php
        } else {
?>                    <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-refresh"></i></button>
                  <?php
        }
?></td>
              </tr>
              <tr>
                <td><?php echo @$text_reward ?></td>
                <td class="text-right"><?php echo @$reward ?></td>
                <td class="text-center"><?php
        if ((@$customer && @$reward)) {
?>                    <?php
            if ( !@$reward_total) {
?>                      <button id="button-reward-add" data-loading-text="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_reward_add ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
                    <?php
            } else {
?>                      <button id="button-reward-remove" data-loading-text="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_reward_remove ?>" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>
                    <?php
            }
?>                  <?php
        } else {
?>                    <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
                  <?php
        }
?></td>
              </tr>
              <tr>
                <td><?php echo @$text_affiliate ?>
                  <?php
        if (@$affiliate) {
?>                    (<a href="<?php echo @$affiliate ?>"><?php echo @$affiliate_firstname ?> <?php echo @$affiliate_lastname ?></a>)
                  <?php
        }
?></td>
                <td class="text-right"><?php echo @$commission ?></td>
                <td class="text-center"><?php
        if (@$affiliate) {
?>                    <?php
            if ( !@$commission_total) {
?>                      <button id="button-commission-add" data-loading-text="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_commission_add ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
                    <?php
            } else {
?>                      <button id="button-commission-remove" data-loading-text="<?php echo @$text_loading ?>" data-toggle="tooltip" title="<?php echo @$button_commission_remove ?>" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>
                    <?php
            }
?>                  <?php
        } else {
?>                    <button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>
                  <?php
        }
?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-info-circle"></i> <?php echo @$text_order ?></h3>
      </div>
      <div class="panel-body">
        <table class="table table-bordered">
          <thead>
            <tr>
              <td style="width: 50%;" class="text-left"><?php echo @$text_payment_address ?></td>
              <?php
        if (@$shipping_method) {
?>                <td style="width: 50%;" class="text-left"><?php echo @$text_shipping_address ?></td>
              <?php
        }
?> </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left"><?php echo @$payment_address ?></td>
              <?php
        if (@$shipping_method) {
?>                <td class="text-left"><?php echo @$shipping_address ?></td>
              <?php
        }
?> </tr>
          </tbody>
        </table>
        <table class="table table-bordered">
          <thead>
            <tr>
              <td class="text-left"><?php echo @$column_product ?></td>
              <td class="text-left"><?php echo @$column_model ?></td>
              <td class="text-right"><?php echo @$column_quantity ?></td>
              <td class="text-right"><?php echo @$column_price ?></td>
              <td class="text-right"><?php echo @$column_total ?></td>
            </tr>
          </thead>
          <tbody>

            <?php
        @$save24601 = $product        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$products);
        foreach ($context['_seq'] as $_key => $product) {
?>              <tr>
                <td class="text-left"><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a> <?php
            @$save59669 = $option            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$product["option"]);
            foreach ($context['_seq'] as $_key => $option) {
?>                    <br/>
                    <?php
                if ((@$option["type"] != "file")) {
?>                      &nbsp;
                      <small> - <?php echo @$option["name"] ?>: <?php echo @$option["value"] ?></small> <?php
                } else {
?>                      &nbsp;
                      <small> - <?php echo @$option["name"] ?>: <a href="<?php echo @$option["href"] ?>"><?php echo @$option["value"] ?></a></small> <?php
                }
?>                  <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$option             = $save59669 ?></td>
                <td class="text-left"><?php echo @$product["model"] ?></td>
                <td class="text-right"><?php echo @$product["quantity"] ?></td>
                <td class="text-right"><?php echo @$product["price"] ?></td>
                <td class="text-right"><?php echo @$product["total"] ?></td>
              </tr>
            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$product         = $save24601 ?>            <?php
        @$save46221 = $voucher        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$vouchers);
        foreach ($context['_seq'] as $_key => $voucher) {
?>              <tr>
                <td class="text-left"><a href="<?php echo @$voucher["href"] ?>"><?php echo @$voucher["description"] ?></a></td>
                <td class="text-left"></td>
                <td class="text-right">1</td>
                <td class="text-right"><?php echo @$voucher["amount"] ?></td>
                <td class="text-right"><?php echo @$voucher["amount"] ?></td>
              </tr>
            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$voucher         = $save46221 ?>            <?php
        @$save71207 = $total        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$totals);
        foreach ($context['_seq'] as $_key => $total) {
?>              <tr>
                <td colspan="4" class="text-right"><?php echo @$total["title"] ?></td>
                <td class="text-right"><?php echo @$total["text"] ?></td>
              </tr>
            <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$total         = $save71207 ?>          </tbody>

        </table>
        <?php
        if (@$comment) {
?>          <table class="table table-bordered">
            <thead>
              <tr>
                <td><?php echo @$text_comment ?></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo @$comment ?></td>
              </tr>
            </tbody>
          </table>
        <?php
        }
?> </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-comment-o"></i> <?php echo @$text_history ?></h3>
      </div>
      <div class="panel-body">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab-history" data-toggle="tab"><?php echo @$tab_history ?></a></li>
          <li><a href="#tab-additional" data-toggle="tab"><?php echo @$tab_additional ?></a></li>
          <?php
        @$save10883 = $tab        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$tabs);
        foreach ($context['_seq'] as $_key => $tab) {
?>            <li><a href="#tab-<?php echo @$tab["code"] ?>" data-toggle="tab"><?php echo @$tab["title"] ?></a></li>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$tab         = $save10883 ?>        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab-history">
            <div id="history"></div>
            <br/>
            <fieldset>
              <legend><?php echo @$text_history_add ?></legend>
              <form class="form-horizontal">
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-order-status"><?php echo @$entry_order_status ?></label>
                  <div class="col-sm-10">
                    <select name="order_status_id" id="input-order-status" class="form-control">


                      <?php
        @$save84699 = $order_statuses        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$order_statuses);
        foreach ($context['_seq'] as $_key => $order_statuses) {
?>                        <?php
            if ((@$order_statuses["order_status_id"] == @$order_status_id)) {
?>

                          <option value="<?php echo @$order_statuses["order_status_id"] ?>" selected="selected"><?php echo @$order_statuses["name"] ?></option>


                        <?php
            } else {
?>

                          <option value="<?php echo @$order_statuses["order_status_id"] ?>"><?php echo @$order_statuses["name"] ?></option>


                        <?php
            }
?>                      <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order_statuses'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$order_statuses         = $save84699 ?>

                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-override"><span data-toggle="tooltip" title="<?php echo @$help_override ?>"><?php echo @$entry_override ?></span></label>
                  <div class="col-sm-10">
                    <div class="checkbox">
                      <input type="checkbox" name="override" value="1" id="input-override"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-notify"><?php echo @$entry_notify ?></label>
                  <div class="col-sm-10">
                    <div class="checkbox">
                      <input type="checkbox" name="notify" value="1" id="input-notify"/>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="input-comment"><?php echo @$entry_comment ?></label>
                  <div class="col-sm-10">
                    <textarea name="comment" rows="8" id="input-comment" class="form-control"></textarea>
                  </div>
                </div>
              </form>
            </fieldset>
            <div class="text-right">
              <button id="button-history" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <?php echo @$button_history_add ?></button>
            </div>
          </div>
          <div class="tab-pane" id="tab-additional"> <?php
        if (@$account_custom_fields) {
?>              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td colspan="2"><?php echo @$text_account_custom_field ?></td>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
            @$save27537 = $custom_field            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$account_custom_fields);
            foreach ($context['_seq'] as $_key => $custom_field) {
?>                      <tr>
                        <td><?php echo @$custom_field["name"] ?></td>
                        <td><?php echo @$custom_field["value"] ?></td>
                      </tr>
                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field             = $save27537 ?>                  </tbody>

                </table>
              </div>
            <?php
        }
?>            <?php
        if (@$payment_custom_fields) {
?>              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td colspan="2"><?php echo @$text_payment_custom_field ?></td>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
            @$save48693 = $custom_field            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$payment_custom_fields);
            foreach ($context['_seq'] as $_key => $custom_field) {
?>                      <tr>
                        <td><?php echo @$custom_field["name"] ?></td>
                        <td><?php echo @$custom_field["value"] ?></td>
                      </tr>
                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field             = $save48693 ?>                  </tbody>

                </table>
              </div>
            <?php
        }
?>            <?php
        if ((@$shipping_method && @$shipping_custom_fields)) {
?>              <div class="table-responsive">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <td colspan="2"><?php echo @$text_shipping_custom_field ?></td>
                    </tr>
                  </thead>
                  <tbody>

                    <?php
            @$save13955 = $custom_field            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$shipping_custom_fields);
            foreach ($context['_seq'] as $_key => $custom_field) {
?>                      <tr>
                        <td><?php echo @$custom_field["name"] ?></td>
                        <td><?php echo @$custom_field["value"] ?></td>
                      </tr>
                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$custom_field             = $save13955 ?>                  </tbody>

                </table>
              </div>
            <?php
        }
?>            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td colspan="2"><?php echo @$text_browser ?></td>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><?php echo @$text_ip ?></td>
                    <td><?php echo @$ip ?></td>
                  </tr>
                  <?php
        if (@$forwarded_ip) {
?>                    <tr>
                      <td><?php echo @$text_forwarded_ip ?></td>
                      <td><?php echo @$forwarded_ip ?></td>
                    </tr>
                  <?php
        }
?>                  <tr>
                    <td><?php echo @$text_user_agent ?></td>
                    <td><?php echo @$user_agent ?></td>
                  </tr>
                  <tr>
                    <td><?php echo @$text_accept_language ?></td>
                    <td><?php echo @$accept_language ?></td>
                  </tr>
                </tbody>

              </table>
            </div>
          </div>
          <?php
        @$save54489 = $tab        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$tabs);
        foreach ($context['_seq'] as $_key => $tab) {
?>            <div class="tab-pane" id="tab-<?php echo @$tab["code"] ?>"><?php echo @$tab["content"] ?></div>
          <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$tab         = $save54489 ?> </div>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
  $(document).delegate('#button-invoice', 'click', function() {
	  $.ajax({
		  url: 'index.php?route=sale/order/createinvoiceno&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>',
		  dataType: 'json',
		  beforeSend: function() {
			  $('#button-invoice').button('loading');
		  },
		  complete: function() {
			  $('#button-invoice').button('reset');
		  },
		  success: function(json) {
			  $('.alert-dismissible').remove();

			  if (json['error']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			  }

			  if (json['invoice_no']) {
				  $('#invoice').html(json['invoice_no']);

				  $('#button-invoice').replaceWith('<button disabled="disabled" class="btn btn-success btn-xs"><i class="fa fa-cog"></i></button>');
			  }
		  },
		  error: function(xhr, ajaxOptions, thrownError) {
			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		  }
	  });
  });

  $(document).delegate('#button-reward-add', 'click', function() {
	  $.ajax({
		  url: 'index.php?route=sale/order/addreward&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>',
		  type: 'post',
		  dataType: 'json',
		  beforeSend: function() {
			  $('#button-reward-add').button('loading');
		  },
		  complete: function() {
			  $('#button-reward-add').button('reset');
		  },
		  success: function(json) {
			  $('.alert-dismissible').remove();

			  if (json['error']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			  }

			  if (json['success']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				  $('#button-reward-add').replaceWith('<button id="button-reward-remove" data-toggle="tooltip" title="<?php echo @$button_reward_remove ?>" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>');
			  }
		  },
		  error: function(xhr, ajaxOptions, thrownError) {
			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		  }
	  });
  });

  $(document).delegate('#button-reward-remove', 'click', function() {
	  $.ajax({
		  url: 'index.php?route=sale/order/removereward&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>',
		  type: 'post',
		  dataType: 'json',
		  beforeSend: function() {
			  $('#button-reward-remove').button('loading');
		  },
		  complete: function() {
			  $('#button-reward-remove').button('reset');
		  },
		  success: function(json) {
			  $('.alert-dismissible').remove();

			  if (json['error']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			  }

			  if (json['success']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				  $('#button-reward-remove').replaceWith('<button id="button-reward-add" data-toggle="tooltip" title="<?php echo @$button_reward_add ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>');
			  }
		  },
		  error: function(xhr, ajaxOptions, thrownError) {
			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		  }
	  });
  });

  $(document).delegate('#button-commission-add', 'click', function() {
	  $.ajax({
		  url: 'index.php?route=sale/order/addcommission&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>',
		  type: 'post',
		  dataType: 'json',
		  beforeSend: function() {
			  $('#button-commission-add').button('loading');
		  },
		  complete: function() {
			  $('#button-commission-add').button('reset');
		  },
		  success: function(json) {
			  $('.alert-dismissible').remove();

			  if (json['error']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			  }

			  if (json['success']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				  $('#button-commission-add').replaceWith('<button id="button-commission-remove" data-toggle="tooltip" title="<?php echo @$button_commission_remove ?>" class="btn btn-danger btn-xs"><i class="fa fa-minus-circle"></i></button>');
			  }
		  },
		  error: function(xhr, ajaxOptions, thrownError) {
			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		  }
	  });
  });

  $(document).delegate('#button-commission-remove', 'click', function() {
	  $.ajax({
		  url: 'index.php?route=sale/order/removecommission&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>',
		  type: 'post',
		  dataType: 'json',
		  beforeSend: function() {
			  $('#button-commission-remove').button('loading');
		  },
		  complete: function() {
			  $('#button-commission-remove').button('reset');
		  },
		  success: function(json) {
			  $('.alert-dismissible').remove();

			  if (json['error']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			  }

			  if (json['success']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');

				  $('#button-commission-remove').replaceWith('<button id="button-commission-add" data-toggle="tooltip" title="<?php echo @$button_commission_add ?>" class="btn btn-success btn-xs"><i class="fa fa-plus-circle"></i></button>');
			  }
		  },
		  error: function(xhr, ajaxOptions, thrownError) {
			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		  }
	  });
  });

  var api_token = '';

  $.ajax({
	  url: '<?php echo @$catalog ?>index.php?route=api/login',
	  type: 'post',
	  dataType: 'json',
	  data: 'key=<?php echo @$api_key ?>',
	  crossDomain: true,
	  success: function(json) {
		  $('.alert').remove();
		  if (json['error']) {
			  if (json['error']['key']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['key'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			  }
			  if (json['error']['ip']) {
				  $('#content > .container-fluid').prepend('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error']['ip'] + ' <button type="button" id="button-ip-add" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-danger btn-xs pull-right"><i class="fa fa-plus"></i><?php echo @$button_ip_add ?></button></div>');
			  }
		  }
		  if (json['token']) {
			  api_token = json['token'];
		  }
	  },
	  error: function(xhr, ajaxOptions, thrownError) {
		  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
	  }
  });

  $('#history').delegate('.pagination a', 'click', function(e) {
	  e.preventDefault();

	  $('#history').load(this.href);
  });

  $('#history').load('index.php?route=sale/order/history&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>');

  $('#button-history').on('click', function() {
	  $.ajax({
		  url: '<?php echo @$catalog ?>index.php?route=api/order/history&api_token=<?php echo @$api_token ?>&store_id=<?php echo @$store_id ?>&order_id=<?php echo @$order_id ?>',
		  type: 'post',
		  dataType: 'json',
		  data: 'order_status_id=' + encodeURIComponent($('select[name=\'order_status_id\']').val()) + '&notify=' + ($('input[name=\'notify\']').prop('checked') ? 1 : 0) + '&override=' + ($('input[name=\'override\']').prop('checked') ? 1 : 0) + '&append=' + ($('input[name=\'append\']').prop('checked') ? 1 : 0) + '&comment=' + encodeURIComponent($('textarea[name=\'comment\']').val()),
		  beforeSend: function() {
			  $('#button-history').button('loading');
		  },
		  complete: function() {
			  $('#button-history').button('reset');
		  },
		  success: function(json) {
			  $('.alert-dismissible').remove();

			  if (json['error']) {
				  $('#history').before('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			  }

			  if (json['success']) {
				  $('#history').load('index.php?route=sale/order/history&user_token=<?php echo @$user_token ?>&order_id=<?php echo @$order_id ?>');

				  $('#history').before('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');

				  $('textarea[name=\'comment\']').val('');
			  }
		  },
		  error: function(xhr, ajaxOptions, thrownError) {
			  alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		  }
	  });
  });
  //--></script>
</div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "sale/order_info.twig";
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
