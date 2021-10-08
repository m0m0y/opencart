<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\localisation\geo_zone_form.twig */
class localisation_geo_zone_form extends Twix_Template
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
        <button type="submit" form="form-geo-zone" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save76909 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save76909 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid"> <?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo @$text_form ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-geo-zone" class="form-horizontal">
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-name"><?php echo @$entry_name ?></label>
            <div class="col-sm-10">
              <input type="text" name="name" value="<?php echo @$name ?>" placeholder="<?php echo @$entry_name ?>" id="input-name" class="form-control" />
              <?php
        if (@$error_name) {
?>              <div class="text-danger"><?php echo @$error_name ?></div>
              <?php
        }
?> </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-description"><?php echo @$entry_description ?></label>
            <div class="col-sm-10">
              <input type="text" name="description" value="<?php echo @$description ?>" placeholder="<?php echo @$entry_description ?>" id="input-description" class="form-control" />
              <?php
        if (@$error_description) {
?>              <div class="text-danger"><?php echo @$error_description ?></div>
              <?php
        }
?> </div>
          </div>
          <fieldset>
            <legend><?php echo @$text_geo_zone ?></legend>
            <table id="zone-to-geo-zone" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <td class="text-left"><?php echo @$entry_country ?></td>
                  <td class="text-left"><?php echo @$entry_zone ?></td>
                  <td></td>
                </tr>
              </thead>
              <tbody>
              
              <?php
        $zone_to_geo_zone_row = 0 ?>              <?php
        @$save52572 = $zone_to_geo_zone        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$zone_to_geo_zones);
        foreach ($context['_seq'] as $_key => $zone_to_geo_zone) {
?>              <tr id="zone-to-geo-zone-row<?php echo @$zone_to_geo_zone_row ?>">
                <td class="text-left"><select name="zone_to_geo_zone[<?php echo @$zone_to_geo_zone_row ?>][country_id]" class="form-control" data-index="<?php echo @$zone_to_geo_zone_row ?>" data-zone-id="<?php echo @$zone_to_geo_zone["zone_id"] ?>" disabled="disabled">
                    
                    <?php
            @$save22181 = $country            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$countries);
            foreach ($context['_seq'] as $_key => $country) {
?>                    <?php
                if ((@$country["country_id"] == @$zone_to_geo_zone["country_id"])) {
?>                    
                    <option value="<?php echo @$country["country_id"] ?>" selected="selected"><?php echo @$country["name"] ?></option>
                    
                    <?php
                } else {
?>                    
                    <option value="<?php echo @$country["country_id"] ?>"><?php echo @$country["name"] ?></option>
                    
                    <?php
                }
?>                    <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$country             = $save22181 ?>                  
                  </select></td>
                <td class="text-left"><select name="zone_to_geo_zone[<?php echo @$zone_to_geo_zone_row ?>][zone_id]" class="form-control" disabled="disabled">
                  </select></td>
                <td class="text-left"><button type="button" onclick="$('#zone-to-geo-zone-row<?php echo @$zone_to_geo_zone_row ?>').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>
              </tr>
              <?php
            $zone_to_geo_zone_row = (@$zone_to_geo_zone_row + 1) ?>              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['zone_to_geo_zone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$zone_to_geo_zone         = $save52572 ?>                </tbody>
              
              <tfoot>
                <tr>
                  <td colspan="2"></td>
                  <td class="text-left"><button type="button" id="button-geo-zone" data-toggle="tooltip" title="<?php echo @$button_geo_zone_add ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i></button></td>
                </tr>
              </tfoot>
            </table>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript"><!--
var zone_to_geo_zone_row = <?php echo @$zone_to_geo_zone_row ?>;

$('#button-geo-zone').on('click', function() {
	html  = '<tr id="zone-to-geo-zone-row' + zone_to_geo_zone_row + '">';
	html += '  <td class="text-left"><select name="zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]" class="form-control" data-index="' + zone_to_geo_zone_row + '">';
	<?php
        @$save82622 = $country        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$countries);
        foreach ($context['_seq'] as $_key => $country) {
?>	html += '    <option value="<?php echo @$country["country_id"] ?>"><?php echo twix_escape_filter($this->env, @$country["name"], "js") ?></option>';
	<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$country         = $save82622 ?>   
	html += '</select></td>';
	html += '  <td class="text-left"><select name="zone_to_geo_zone[' + zone_to_geo_zone_row + '][zone_id]" class="form-control"><option value="0"><?php echo @$text_all_zones ?></option></select></td>';
	html += '  <td class="text-left"><button type="button" onclick="$(\'#zone-to-geo-zone-row' + zone_to_geo_zone_row + '\').remove();" data-toggle="tooltip" title="<?php echo @$button_remove ?>" class="btn btn-danger"><i class="fa fa-minus-circle"></i></button></td>';
	html += '</tr>';
	
	$('#zone-to-geo-zone tbody').append(html);
	
	$('zone_to_geo_zone[' + zone_to_geo_zone_row + '][country_id]').trigger();
			
	zone_to_geo_zone_row++;
});

$('#zone-to-geo-zone').on('change', 'select[name$=\'[country_id]\']', function() {
	var element = this;
	
	if (element.value) { 
		$.ajax({
			url: 'index.php?route=localisation/country/country&user_token=<?php echo @$user_token ?>&country_id=' + element.value,
			dataType: 'json',
			beforeSend: function() {
				$(element).prop('disabled', true);
				$('button[form=\'form-geo-zone\']').prop('disabled', true);
			},
			complete: function() {
				$(element).prop('disabled', false);
				$('button[form=\'form-geo-zone\']').prop('disabled', false);
			},
			success: function(json) {
				html = '<option value="0"><?php echo @$text_all_zones ?></option>';
				
				if (json['zone'] && json['zone'] != '') {	
					for (i = 0; i < json['zone'].length; i++) {
						html += '<option value="' + json['zone'][i]['zone_id'] + '"';
	
						if (json['zone'][i]['zone_id'] == $(element).attr('data-zone-id')) {
							html += ' selected="selected"';
						}
	
						html += '>' + json['zone'][i]['name'] + '</option>';
					}
				}
	
				$('select[name=\'zone_to_geo_zone[' + $(element).attr('data-index') + '][zone_id]\']').html(html);
				
				$('select[name=\'zone_to_geo_zone[' + $(element).attr('data-index') + '][zone_id]\']').prop('disabled', false);
				
				$('select[name$=\'[country_id]\']:disabled:first').trigger('change');
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
			}
		});
	}
});

$('select[name$=\'[country_id]\']:disabled:first').trigger('change');
//--></script></div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "localisation/geo_zone_form.twig";
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
