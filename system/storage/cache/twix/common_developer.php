<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\common\developer.twig */
class common_developer extends Twix_Template
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
    extract($context); ?><div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title"><i class="fa fa-cog"></i> <?php echo @$heading_title ?></h4>
    </div>
    <div class="modal-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td><?php echo @$column_component ?></td>
            <td style="width: 150px;"><?php echo @$entry_cache ?></td>
            <td class="text-right" style="width: 1px;"><?php echo @$column_action ?></td>
          </tr>
        </thead>
        <tr>
          <td><?php echo @$entry_theme ?></td>
          <td ><div class="btn-group" data-toggle="buttons"><?php
        if (@$developer_theme) {
?>              <label class="btn btn-success active" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?>>
              <input type="radio" name="developer_theme" value="1" autocomplete="off" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?> checked/>
              <?php echo @$button_on ?>
              </label>
              <?php
        } else {
?>              <label class="btn btn-success" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?>>
              <input type="radio" name="developer_theme" value="1" autocomplete="off" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?>/>
              <?php echo @$button_on ?>
              </label>
              <?php
        }
?>              
              <?php
        if ( !@$developer_theme) {
?>              <label class="btn btn-danger active" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?>>
              <input type="radio" name="developer_theme" value="0" autocomplete="off" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?> checked/>
              <?php echo @$button_off ?>
              </label>
              <?php
        } else {
?>              <label class="btn btn-danger" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?>>
              <input type="radio" name="developer_theme" value="0" autocomplete="off" <?php
            if ( !@$eval) {
?>disabled="disabled"<?php
            }
?>/>
              <?php echo @$button_off ?>
              </label>
              <?php
        }
?></div></td>
          <td class="text-right"><button type="button" value="theme" data-toggle="tooltip" title="<?php echo @$button_refresh ?>" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>
        </tr>
        <tr>
          <td><?php echo @$entry_sass ?></td>
          <td><div class="btn-group" data-toggle="buttons"><?php
        if (@$developer_sass) {
?>              <label class="btn btn-success active">
                <input type="radio" name="developer_sass" value="1" autocomplete="off" checked>
                <?php echo @$button_on ?></label>
              <?php
        } else {
?>              <label class="btn btn-success">
                <input type="radio" name="developer_sass" value="1" autocomplete="off">
                <?php echo @$button_on ?></label>
              <?php
        }
?>              <?php
        if ( !@$developer_sass) {
?>              <label class="btn btn-danger active">
                <input type="radio" name="developer_sass" value="0" autocomplete="off" checked>
                <?php echo @$button_off ?></label>
              <?php
        } else {
?>              <label class="btn btn-danger">
                <input type="radio" name="developer_sass" value="0" autocomplete="off">
                <?php echo @$button_off ?></label>
              <?php
        }
?></div></td>
          <td class="text-right"><button type="button" value="sass" data-toggle="tooltip" title="<?php echo @$button_refresh ?>" class="btn btn-warning"><i class="fa fa-refresh"></i></button></td>
        </tr>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript"><!--
$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').on('change', function() {
	$.ajax({
		url: 'index.php?route=common/developer/edit&user_token=<?php echo @$user_token ?>',		
		type: 'post',
        data: $('input[name=\'developer_theme\']:checked, input[name=\'developer_sass\']:checked'),
		dataType: 'json',
		beforeSend: function() {
			$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', true);
		},
		complete: function() {
			$('input[name=\'developer_theme\'], input[name=\'developer_sass\']').prop('disabled', false);
		},
		success: function(json) {
            $('.alert-dismissible').remove();

            if (json['error']) {
                $('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            }

            if (json['success']) {
				$('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}			
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});	
});	

$('#modal-developer table button').on('click', function() {
	var element = this;
	
	$.ajax({
		url: 'index.php?route=common/developer/' + $(element).attr('value') + '&user_token=<?php echo @$user_token ?>',		
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
                $('#modal-developer .modal-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
            }

            if (json['success']) {
				$('#modal-developer .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');
			}			
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script>
<?php
    }

    public function getTemplateName()
    {
        return "common/developer.twig";
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
