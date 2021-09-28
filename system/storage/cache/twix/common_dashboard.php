<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\common\dashboard.twig */
class common_dashboard extends Twix_Template
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
        <button type="button" id="button-developer" title="<?php echo @$button_developer ?>" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-info"><i class="fa fa-cog"></i></button>
      </div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save65007 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save65007 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"><?php
        if (@$error_install) {
?>    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close pull-right" data-dismiss="alert">&times;</button>
      <i class="fa fa-exclamation-circle"></i> <?php echo @$error_install ?></div>
    <?php
        }
?>    <?php
        @$save27456 = $row        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$rows);
        foreach ($context['_seq'] as $_key => $row) {
?>    <div class="row"><?php
            @$save78782 = $dashboard_1            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$row);
            foreach ($context['_seq'] as $_key => $dashboard_1) {
?>      <?php
                $class = sprintf("col-lg-%s %s", @$dashboard_1["width"], "col-md-3 col-sm-6") ?>      <?php
                @$save31346 = $dashboard_2                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$row);
                foreach ($context['_seq'] as $_key => $dashboard_2) {
?>      <?php
                    if ((@$dashboard_2["width"] > 3)) {
?>      <?php
                        $class = sprintf("col-lg-%s %s", @$dashboard_1["width"], "col-md-12 col-sm-12") ?>      <?php
                    }
?>      <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_2'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$dashboard_2                 = $save31346 ?>      <div class="<?php echo @$class ?>"><?php echo @$dashboard_1["output"] ?></div>
      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dashboard_1'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$dashboard_1             = $save78782 ?></div>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$row         = $save27456 ?></div>
    <?php echo @$security ?>
  <script type="text/javascript"><!--
$('#button-developer').on('click', function() {
	$.ajax({
		url: 'index.php?route=common/developer&user_token=<?php echo @$user_token ?>',
		dataType: 'html',
		beforeSend: function() {
			$('#button-developer').button('loading');
		},
		complete: function() {
			$('#button-developer').button('reset');
		},
		success: function(html) {
			$('#modal-developer').remove();
			
			$('body').prepend('<div id="modal-developer" class="modal">' + html + '</div>');
			
			$('#modal-developer').modal('show');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});	
//--></script> 
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "common/dashboard.twig";
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
