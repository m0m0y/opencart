<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\total\referral.twig */
class default_template_extension_total_referral extends Twix_Template
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
    extract($context); ?><div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title"><a href="#collapse-referral" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion">Refferal Code <i class="fa fa-caret-down"></i></a></h4>
  </div>
  <div id="collapse-referral" class="panel-collapse collapse">
    <div class="panel-body">
      <label class="col-sm-2 control-label" for="input-referral">Referral Code</label>
      <div class="input-group">
        <input type="text" name="referral" value="<?php echo @$referral ?>" placeholder="Referral Code" id="input-referral" class="form-control" />
        <span class="input-group-btn">
        <input type="button" value="Apply Referral" id="button-referral" data-loading-text=""  class="btn btn-primary" />
        </span></div>
      <script type="text/javascript">
        $('#button-referral').on('click', function() {
           $.ajax({
               url:  'index.php?route=extension/total/referral/referral',
               type: 'post',
                data: 'referral=' + encodeURIComponent($('input[name=\'referral\']').val()),
		        dataType: 'json',
                beforeSend: function() {
                    $('#button-referral').button('loading');
                },
                complete: function() {
                    $('#button-referral').button('reset');
                },
                success: function(json) {
                    $('.alert-dismissible').remove();

                    if (json['error']) {
                        $('.breadcrumb').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');

                        $('html, body').animate({ scrollTop: 0 }, 'slow');
                    }

                    if (json['redirect']) {
                        location = json['redirect'];
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
           });
        });
      </script>
    </div>
  </div>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/referral.twig";
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
