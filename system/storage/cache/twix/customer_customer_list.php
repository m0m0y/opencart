<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\customer\customer_list.twig */
class customer_customer_list extends Twix_Template
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
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_filter ?>" onclick="$('#filter-customer').toggleClass('hidden-sm hidden-xs');" class="btn btn-default hidden-md hidden-lg"><i class="fa fa-filter"></i></button>
        <a href="<?php echo @$add ?>" data-toggle="tooltip" title="<?php echo @$button_add ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-customer').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save40098 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save40098 ?>      </ul>
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
        @$save56679 = $customer_group        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$customer_groups);
        foreach ($context['_seq'] as $_key => $customer_group) {
?>                <?php
            if ((@$customer_group["customer_group_id"] == @$filter_customer_group_id)) {
?>                <option value="<?php echo @$customer_group["customer_group_id"] ?>" selected="selected"><?php echo @$customer_group["name"] ?></option>
                <?php
            } else {
?>                <option value="<?php echo @$customer_group["customer_group_id"] ?>"><?php echo @$customer_group["name"] ?></option>
                <?php
            }
?>                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$customer_group         = $save56679 ?>              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="input-status"><?php echo @$entry_status ?></label>
              <select name="filter_status" id="input-status" class="form-control">
                <option value=""></option>
                <?php
        if ((@$filter_status == "1")) {
?>                <option value="1" selected="selected"><?php echo @$text_enabled ?></option>
                <?php
        } else {
?>                <option value="1"><?php echo @$text_enabled ?></option>
                <?php
        }
?>                <?php
        if ((@$filter_status == "0")) {
?>                <option value="0" selected="selected"><?php echo @$text_disabled ?></option>
                <?php
        } else {
?>                <option value="0"><?php echo @$text_disabled ?></option>
                <?php
        }
?>              </select>
            </div>
            <div class="form-group">
              <label class="control-label" for="input-ip"><?php echo @$entry_ip ?></label>
              <input type="text" name="filter_ip" value="<?php echo @$filter_ip ?>" placeholder="<?php echo @$entry_ip ?>" id="input-ip" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-date-added"><?php echo @$entry_date_added ?></label>
              <div class="input-group date">
                <input type="text" name="filter_date_added" value="<?php echo @$filter_date_added ?>" placeholder="<?php echo @$entry_date_added ?>" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control" />
                <span class="input-group-btn">
                <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>
                </span>
              </div>
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
            <div class="table-responsive">
              <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-customer">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                      <td class="text-left"><?php
        if ((@$sort == "name")) {
?><a href="<?php echo @$sort_name ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_name ?></a><?php
        } else {
?><a href="<?php echo @$sort_name ?>"><?php echo @$column_name ?></a><?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "c.email")) {
?><a href="<?php echo @$sort_email ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_email ?></a><?php
        } else {
?><a href="<?php echo @$sort_email ?>"><?php echo @$column_email ?></a><?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "customer_group")) {
?><a href="<?php echo @$sort_customer_group ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_customer_group ?></a> <?php
        } else {
?> <a href="<?php echo @$sort_customer_group ?>"><?php echo @$column_customer_group ?></a><?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "c.status")) {
?><a href="<?php echo @$sort_status ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_status ?></a><?php
        } else {
?><a href="<?php echo @$sort_status ?>"><?php echo @$column_status ?></a><?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "c.ip")) {
?><a href="<?php echo @$sort_ip ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_ip ?></a><?php
        } else {
?><a href="<?php echo @$sort_ip ?>"><?php echo @$column_ip ?></a><?php
        }
?></td>
                      <td class="text-left"><?php
        if ((@$sort == "c.date_added")) {
?><a href="<?php echo @$sort_date_added ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_added ?></a><?php
        } else {
?><a href="<?php echo @$sort_date_added ?>"><?php echo @$column_date_added ?></a><?php
        }
?></td>
                      <td class="text-right"><?php echo @$column_action ?></td>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
        if (@$customers) {
?>                  <?php
            @$save93666 = $customer            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$customers);
            foreach ($context['_seq'] as $_key => $customer) {
?>                  <tr>
                    <td class="text-center"><?php
                if (twix_in_filter(@$customer["customer_id"], @$selected)) {
?>                      <input type="checkbox" name="selected[]" value="<?php echo @$customer["customer_id"] ?>" checked="checked" />
                      <?php
                } else {
?>                      <input type="checkbox" name="selected[]" value="<?php echo @$customer["customer_id"] ?>" />
                      <?php
                }
?>                    </td>
                      <td class="text-left"><?php echo @$customer["name"] ?></td>
                    <td class="text-left"><?php echo @$customer["email"] ?></td>
                    <td class="text-left"><?php echo @$customer["customer_group"] ?></td>
                    <td class="text-left"><?php echo @$customer["status"] ?></td>
                    <td class="text-left"><?php echo @$customer["ip"] ?></td>
                    <td class="text-left"><?php echo @$customer["date_added"] ?></td>
                    <td class="text-right">
                      <div class="btn-group" style="min-width: 65px;">
                        <a href="<?php echo @$customer["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                        <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li class="dropdown-header"><?php echo @$text_option ?></li>
                          <?php
                if (@$customer["unlock"]) {
?>                          <li><a href="<?php echo @$customer["unlock"] ?>"><i class="fa fa-unlock"></i> <?php echo @$text_unlock ?></a></li>
                          <?php
                } else {
?>                          <li class="disabled"><a><i class="fa fa-unlock"></i> <?php echo @$text_unlock ?></a></li>
                          <?php
                }
?>                          <li role="separator" class="divider"></li>
                          <li class="dropdown-header"><?php echo @$text_login ?></li>
                          <?php
                @$save41803 = $store                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$customer["store"]);
                foreach ($context['_seq'] as $_key => $store) {
?>                          <li><a href="<?php echo @$store["href"] ?>" target="_blank"><i class="fa fa-lock"></i> <?php echo @$store["name"] ?></a></li>
                          <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$store                 = $save41803 ?>                        </ul>
                      </div>
                    </td>
                  </tr>
                  <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$customer             = $save93666 ?>                  <?php
        } else {
?>                  <tr>
                    <td class="text-center" colspan="8"><?php echo @$text_no_results ?></td>
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
  $('.table-responsive').on('shown.bs.dropdown', function (e) {
    var t = $(this),
      m = $(e.target).find('.dropdown-menu'),
      tb = t.offset().top + t.height(),
      mb = m.offset().top + m.outerHeight(true),
      d = 20;
    if (t[0].scrollWidth > t.innerWidth()) {
      if (mb + d > tb) {
        t.css('padding-bottom', ((mb + d) - tb));
      }
    } else {
      t.css('overflow', 'visible');
    }
  }).on('hidden.bs.dropdown', function () {
    $(this).css({'padding-bottom': '', 'overflow': ''});
  });
  //--></script>
  <script type="text/javascript"><!--
  $('#button-filter').on('click', function() {
    url = 'index.php?route=customer/customer&user_token=<?php echo @$user_token ?>';
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
    var filter_status = $('select[name=\'filter_status\']').val();
    if (filter_status !== '') {
      url += '&filter_status=' + encodeURIComponent(filter_status); 
    }
    var filter_ip = $('input[name=\'filter_ip\']').val();
    if (filter_ip) {
      url += '&filter_ip=' + encodeURIComponent(filter_ip);
    }
    var filter_date_added = $('input[name=\'filter_date_added\']').val();
    if (filter_date_added) {
      url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
    }
    location = url;
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
  //--></script>
</div>
<?php echo @$footer ?>
<?php
    }

    public function getTemplateName()
    {
        return "customer/customer_list.twig";
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
