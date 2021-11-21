<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketing\coupon_list.twig */
class marketing_coupon_list extends Twix_Template
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
      <div class="pull-right"><a href="<?php echo @$add ?>" data-toggle="tooltip" title="<?php echo @$button_add ?>" class="btn btn-primary"><i class="fa fa-plus"></i></a>
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-coupon').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save51727 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save51727 ?>      </ul>
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
        <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-coupon">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php
        if ((@$sort == "name")) {
?>                    <a href="<?php echo @$sort_name ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_name ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_name ?>"><?php echo @$column_name ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "code")) {
?>                    <a href="<?php echo @$sort_code ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_code ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_code ?>"><?php echo @$column_code ?></a>
                    <?php
        }
?></td>
                  <td class="text-right"><?php
        if ((@$sort == "discount")) {
?>                    <a href="<?php echo @$sort_discount ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_discount ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_discount ?>"><?php echo @$column_discount ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "date_start")) {
?>                    <a href="<?php echo @$sort_date_start ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_start ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_date_start ?>"><?php echo @$column_date_start ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "date_end")) {
?>                    <a href="<?php echo @$sort_date_end ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_date_end ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_date_end ?>"><?php echo @$column_date_end ?></a>
                    <?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "status")) {
?>                    <a href="<?php echo @$sort_status ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_status ?></a>
                    <?php
        } else {
?>                    <a href="<?php echo @$sort_status ?>"><?php echo @$column_status ?></a>
                    <?php
        }
?></td>
                  <td class="text-right"><?php echo @$column_action ?></td>
                </tr>
              </thead>
              <tbody>
                <?php
        if (@$coupons) {
?>                <?php
            @$save48852 = $coupon            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$coupons);
            foreach ($context['_seq'] as $_key => $coupon) {
?>                <tr>
                  <td class="text-center"><?php
                if (twix_in_filter(@$coupon["coupon_id"], @$selected)) {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$coupon["coupon_id"] ?>" checked="checked" />
                    <?php
                } else {
?>                    <input type="checkbox" name="selected[]" value="<?php echo @$coupon["coupon_id"] ?>" />
                    <?php
                }
?></td>
                  <td class="text-left"><?php echo @$coupon["name"] ?></td>
                  <td class="text-left"><?php echo @$coupon["code"] ?></td>
                  <td class="text-right"><?php echo @$coupon["discount"] ?></td>
                  <td class="text-left"><?php echo @$coupon["date_start"] ?></td>
                  <td class="text-left"><?php echo @$coupon["date_end"] ?></td>
                  <td class="text-left"><?php echo @$coupon["status"] ?></td>
                  <td class="text-right"><a href="<?php echo @$coupon["edit"] ?>" data-toggle="tooltip" title="<?php echo @$button_edit ?>" class="btn btn-primary"><i class="fa fa-pencil"></i></a></td>
                </tr>
                <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['coupon'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$coupon             = $save48852 ?>                <?php
        } else {
?>                <tr>
                  <td class="text-center" colspan="8"><?php echo @$text_no_results ?></td>
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
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "marketing/coupon_list.twig";
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
