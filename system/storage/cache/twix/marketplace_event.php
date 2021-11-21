<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\event.twig */
class marketplace_event extends Twix_Template
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
        <button type="button" data-toggle="tooltip" title="<?php echo @$button_delete ?>" class="btn btn-danger" onclick="confirm('<?php echo @$text_confirm ?>') ? $('#form-event').submit() : false;"><i class="fa fa-trash-o"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save25858 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save25858 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"> <?php
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
?>    <div class="alert alert-info"><i class="fa fa-info-circle"></i> <?php echo @$text_event ?></div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-list"></i> <?php echo @$text_list ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$delete ?>" method="post" enctype="multipart/form-data" id="form-event">
          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td style="width: 1px;" class="text-center"><input type="checkbox" onclick="$('input[name*=\'selected\']').prop('checked', this.checked);" /></td>
                  <td class="text-left"><?php
        if ((@$sort == "code")) {
?><a href="<?php echo @$sort_code ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_code ?></a><?php
        } else {
?><a href="<?php echo @$sort_code ?>"><?php echo @$column_code ?></a><?php
        }
?></td>
                  <td class="text-left"><?php
        if ((@$sort == "status")) {
?><a href="<?php echo @$sort_status ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_status ?></a><?php
        } else {
?><a href="<?php echo @$sort_status ?>"><?php echo @$column_status ?></a><?php
        }
?></td>
                  <td class="text-right"><?php
        if ((@$sort == "sort_order")) {
?><a href="<?php echo @$sort_sort_order ?>" class="<?php echo strtolower(@$order) ?>"><?php echo @$column_sort_order ?></a><?php
        } else {
?><a href="<?php echo @$sort_sort_order ?>"><?php echo @$column_sort_order ?></a><?php
        }
?></td>
                  <td class="text-right"><?php echo @$column_action ?></td>
                </tr>
              </thead>
              <tbody>
              
              <?php
        if (@$events) {
?>              <?php
            @$save45648 = $event            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$events);
            foreach ($context['_seq'] as $_key => $event) {
?>              <tr>
                <td class="text-center"><?php
                if (twix_in_filter(@$event["event_id"], @$selected)) {
?>                  <input type="checkbox" name="selected[]" value="<?php echo @$event["event_id"] ?>" checked="checked" />
                  <?php
                } else {
?>                  <input type="checkbox" name="selected[]" value="<?php echo @$event["event_id"] ?>" />
                  <?php
                }
?></td>
                <td class="text-left"><?php echo @$event["code"] ?></td>
                <td class="text-left"><?php echo @$event["status"] ?></td>
                <td class="text-right"><?php echo @$event["sort_order"] ?></td>
                <td class="text-right"><button type="button" data-toggle="modal" data-target="#modal-event<?php echo @$event["event_id"] ?>" class="btn btn-info"><i class="fa fa-info-circle"></i></button>
                  <?php
                if ( !@$event["enabled"]) {
?><a href="<?php echo @$event["enable"] ?>" data-toggle="tooltip" title="<?php echo @$button_enable ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i></a><?php
                } else {
?><a href="<?php echo @$event["disable"] ?>" data-toggle="tooltip" title="<?php echo @$button_disable ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></a><?php
                }
?>                  <div id="modal-event<?php echo @$event["event_id"] ?>" class="modal text-left">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title"><?php echo @$text_info ?></h4>
                        </div>
                        <div class="modal-body">
                          <p><strong><?php echo @$text_trigger ?></strong></p>
                          <p><?php echo @$event["trigger"] ?></p>
                          <p><strong><?php echo @$text_action ?></strong></p>
                          <p><?php echo @$event["action"] ?></p>
                        </div>
                      </div>
                    </div>
                  </div></td>
              </tr>
              <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$event             = $save45648 ?>              <?php
        } else {
?>              <tr>
                <td class="text-center" colspan="5"><?php echo @$text_no_results ?></td>
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
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "marketplace/event.twig";
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
