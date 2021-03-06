<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\sale\voucher_list.twig */
class sale_voucher_list extends Twix_Template
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
        <button type="button" id="button-send" data-toggle="tooltip" title="<?php echo @$button_send ?>" class="btn btn-warning"><i class="fa fa-envelope"></i></button>
        <a href="<?php echo @$add ?>" data-toggle="tooltip" title="<?php echo @$button_add ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-voucher').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save90377 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save90377 ?>      </ul>
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
?>    <?php
        if (@$success) {
?>    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo @$text_list ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-voucher">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php
        if ((@$sort == "v.code")) {
?>                    <a href="<?php echo @$sort_code ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_code ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_code ?>"><?php echo @$column_code ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "v.from_name")) {
?>                    <a href="<?php echo @$sort_from ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_from ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_from ?>"><?php echo @$column_from ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "v.to_name")) {
?>                    <a href="<?php echo @$sort_to ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_to ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_to ?>"><?php echo @$column_to ?></a>
                    <?php
        }
?></td>
                  <td class="text-right"><?php
        if ((@$sort == "v.amount")) {
?>                    <a href="<?php echo @$sort_amount ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_amount ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_amount ?>"><?php echo @$column_amount ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "theme")) {
?>                    <a href="<?php echo @$sort_theme ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_theme ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_theme ?>"><?php echo @$column_theme ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "v.status")) {
?>                    <a href="<?php echo @$sort_status ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_status ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_status ?>"><?php echo @$column_status ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "v.date_added")) {
?>                    <a href="<?php echo @$sort_date_added ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_added ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_date_added ?>"><?php echo @$column_date_added ?></a>
                    <?php
        }
?></td>
                  <td class="text-right"><?php echo @$column_action ?></td>
                </tr>
              </thead>
              <tbody>
                <?php
        if (@$vouchers) {
?>                <?php
            @$save37765 = $voucher            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$vouchers);
            foreach ($context['_seq'] as $_key => $voucher) {
?>                <tr>
                  <td class="text-center"><?php
                if (twix_in_filter(@$voucher["voucher_id"], @$selected)) {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$voucher["voucher_id"] ?>" checked="checked" />
                    <?php
                } else {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$voucher["voucher_id"] ?>" />
                    <?php
                }
?></td>
                  <td class="text-left"><?php echo @$voucher["code"] ?></td>
                  <td class="text-left"><?php echo @$voucher["from"] ?></td>
                  <td class="text-left"><?php echo @$voucher["to"] ?></td>
                  <td class="text-right"><?php echo @$voucher["amount"] ?></td>
                  <td class="text-left"><?php echo @$voucher["theme"] ?></td>
                  <td class="text-left"><?php echo @$voucher["status"] ?></td>
                  <td class="text-left"><?php echo @$voucher["date_added"] ?></td>
                  <td class="text-right">
                  <?php
                if (@$voucher["order"]) {
?>                  <a href="<?php echo @$voucher["order"] ?>" data-toggle="tooltip" title="<?php echo @$button_order ?>" class="btn btn-info"><i class="fa fa fa-eye"></i></a>
                  <?php
                }
?>                  <a href="<?php echo @$voucher["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$voucher             = $save37765 ?>                <?php
        } else {
?>                <tr>
                  <td class="text-center" colspan="9"><?php echo @$text_no_results ?></td>
                </tr>
                <?php
        }
?>              </tbody>
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
  <script type="text/javascript"><!--
$('#button-send').on('click', function() {
	$.ajax({
		url: 'index.php?route=sale/voucher/send&user_token=<?php echo @$user_token ?>',
		type: 'post',
		dataType: 'json',
		data: $('input[name^=\'selected\']:checked'),
		beforeSend: function() {
			$('#button-send i').replaceWith('<i class="fa fa-circle-o-notch fa-spin"></i>');
			$('#button-send').prop('disabled', true);
		},	
		complete: function() {
			$('#button-send i').replaceWith('<i class="fa fa-envelope"></i>');
			$('#button-send').prop('disabled', false);
		},
		success: function(json) {
			$('.alert-dismissible').remove();
			
			if (json['error']) {
				$('#content > .container-fluid').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
			}
			
			if (json['success']) {
				$('#content > .container-fluid').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
			}		
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
})
//--></script></div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "sale/voucher_list.twig";
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
