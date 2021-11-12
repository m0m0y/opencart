<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\marketplace_list.twig */
class marketplace_marketplace_list extends Twix_Template
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
      <div class="pull-right"><?php
        if ( !@$error_signature) {
?>        <button type="button" id="button-opencart" data-toggle="tooltip" title="<?php echo @$button_opencart ?>" class="btn btn-info"><i class="fa fa-cog"></i></button>
        <?php
        } else {
?>        <button type="button" id="button-opencart" data-toggle="tooltip" title="<?php echo @$error_signature ?>"  data-placement="left" class="btn btn-danger"><i class="fa fa-exclamation-triangle"></i></button>
        <?php
        }
?></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save70251 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save70251 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-puzzle-piece"></i> <?php echo @$text_list ?></h3>
      </div>
      <div class="panel-body">
        <div class="well">
          <div class="input-group" id="extension-filter">
            <input type="text" name="filter_search" value="<?php echo @$filter_search ?>" placeholder="<?php echo @$text_search ?>" class="form-control" />
            <div class="input-group-btn"><?php
        @$save82700 = $category        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$categories);
        foreach ($context['_seq'] as $_key => $category) {
?>              <?php
            if ((@$category["value"] == @$filter_category)) {
?>              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><?php echo @$text_category ?> (<?php echo @$category["text"] ?>) <span class="caret"></span></button>
              <?php
            }
?>              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$category         = $save82700 ?>              <ul class="dropdown-menu">
                <?php
        @$save96821 = $category        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$categories);
        foreach ($context['_seq'] as $_key => $category) {
?>                <li><a href="<?php echo @$category["href"] ?>"><?php echo @$category["text"] ?></a></li>
                <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$category         = $save96821 ?>              </ul>
              <input type="hidden" name="filter_category_id" value="<?php echo @$filter_category_id ?>" class="form-control" />
              <input type="hidden" name="filter_download_id" value="<?php echo @$filter_download_id ?>" class="form-control" />
              <input type="hidden" name="filter_rating" value="<?php echo @$filter_rating ?>" class="form-control" />
              <input type="hidden" name="filter_license" value="<?php echo @$filter_license ?>" class="form-control" />
              <input type="hidden" name="filter_partner" value="<?php echo @$filter_partner ?>" class="form-control" />
              <input type="hidden" name="sort" value="<?php echo @$sort ?>" class="form-control" />
              <button type="button" id="button-filter" class="btn btn-primary"><i class="fa fa-filter"></i></button>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-9 col-xs-7">
            <div class="btn-group"><?php
        @$save48599 = $license        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$licenses);
        foreach ($context['_seq'] as $_key => $license) {
?>              <?php
            if ((@$license["value"] == @$filter_license)) {
?><a href="<?php echo @$license["href"] ?>" class="btn btn-default active"><?php echo @$license["text"] ?></a><?php
            } else {
?><a href="<?php echo @$license["href"] ?>" class="btn btn-default"><?php echo @$license["text"] ?></a><?php
            }
?>              <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['license'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$license         = $save48599 ?></div>
          </div>
          <div class="col-sm-3 col-xs-5">
            <div class="input-group pull-right">
              <div class="input-group-addon"><i class="fa fa-sort-amount-asc"></i></div>
              <select onchange="location = this.value;" class="form-control">
                
              
            
              
                  <?php
        @$save60055 = $sorts        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$sorts);
        foreach ($context['_seq'] as $_key => $sorts) {
?>                  <?php
            if ((@$sorts["value"] == @$sort)) {
?>                
              
            
              
                <option value="<?php echo @$sorts["href"] ?>" selected="selected"><?php echo @$sorts["text"] ?></option>
                
              
            
              
                  <?php
            } else {
?>                
              
            
              
                <option value="<?php echo @$sorts["href"] ?>"><?php echo @$sorts["text"] ?></option>
                
              
            
              
                  <?php
            }
?>                  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$sorts         = $save60055 ?>              
            
          
            
              </select>
            </div>
          </div>
        </div>
        <br />
        <div id="extension-list"><?php
        if (@$promotions) {
?>          <h3>Featured</h3>
          <div class="row"><?php
            @$save97972 = $extension            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$promotions);
            foreach ($context['_seq'] as $_key => $extension) {
?>            <?php
                if (@$extension) {
?>            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <section>
                <div class="extension-preview"><a href="<?php echo @$extension["href"] ?>">
                  <div class="extension-description"></div>
                  <img src="<?php echo @$extension["image"] ?>" alt="<?php echo @$extension["name"] ?>" title="<?php echo @$extension["name"] ?>" class="img-responsive" /></a></div>
                <div class="extension-name">
                  <h4><a href="<?php echo @$extension["href"] ?>"><?php echo @$extension["name"] ?></a></h4>
                  <?php echo @$extension["price"] ?></div>
                <div class="extension-rate">
                  <div class="row">
                    <div class="col-xs-6"><?php
                    @$save88450 = $i                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $_key => $i) {
?>                      <?php
                        if ((@$extension["rating"] >= @$i)) {
?><i class="fa fa-star"></i><?php
                        } else {
?><i class="fa fa-star-o"></i><?php
                        }
?>                      <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$i                     = $save88450 ?></div>
                    <div class="col-xs-6">
                      <div class="text-right"><?php echo @$extension["rating_total"] ?> <?php echo @$text_reviews ?></div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <?php
                }
?>            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$extension             = $save97972 ?></div>
          <hr />
          <?php
        }
?>          
          <?php
        if (@$extensions) {
?>          <div class="row"> <?php
            @$save26754 = $extension            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$extensions);
            foreach ($context['_seq'] as $_key => $extension) {
?>            
            <?php
                if (@$extension) {
?>            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
              <section>
                <div class="extension-preview"><a href="<?php echo @$extension["href"] ?>">
                  <div class="extension-description"></div>
                  <img src="<?php echo @$extension["image"] ?>" alt="<?php echo @$extension["name"] ?>" title="<?php echo @$extension["name"] ?>" class="img-responsive" /></a></div>
                <div class="extension-name">
                  <h4><a href="<?php echo @$extension["href"] ?>"><?php echo @$extension["name"] ?></a></h4>
                  <?php echo @$extension["price"] ?></div>
                <div class="extension-rate">
                  <div class="row">
                    <div class="col-xs-6"><?php
                    @$save82578 = $i                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $_key => $i) {
?>                      <?php
                        if ((@$extension["rating"] >= @$i)) {
?><i class="fa fa-star"></i><?php
                        } else {
?><i class="fa fa-star-o"></i><?php
                        }
?>                      <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$i                     = $save82578 ?></div>
                    <div class="col-xs-6">
                      <div class="text-right"><?php echo @$extension["rating_total"] ?> <?php echo @$text_reviews ?></div>
                    </div>
                  </div>
                </div>
              </section>
            </div>
            <?php
                }
?>            <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$extension             = $save26754 ?> </div>
          <?php
        } else {
?>          <p class="text-center"><?php echo @$text_no_results ?></p>
          <?php
        }
?> </div>
        <div class="row">
          <div class="col-sm-12 text-center"><?php echo @$pagination ?></div>
        </div>
      </div>
    </div>
  </div>

<script type="text/javascript"><!--
$('#button-opencart').on('click', function(e) {
	$('#modal-opencart').remove();
	
	$.ajax({
		url: 'index.php?route=marketplace/api&user_token=<?php echo @$user_token ?>',
		dataType: 'html',
		beforeSend: function() {
			$('#button-opencart').button('loading');
		},
		complete: function() {
			$('#button-opencart').button('reset');
		},
		success: function(html) {
			$('body').append('<div id="modal-opencart" class="modal">' + html + '</div>');
			
			$('#modal-opencart').modal('show');
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});
//--></script> 
<script type="text/javascript"><!--
$('#button-filter').on('click', function(e) {
	var url = 'index.php?route=marketplace/marketplace&user_token=<?php echo @$user_token ?>';

	var input = $('#extension-filter :input');

	for (i = 0; i < input.length; i++) {
		if ($(input[i]).val() != '' && $(input[i]).val() != null) {
			url += '&' + $(input[i]).attr('name') + '=' + $(input[i]).val()
		}
	}

	location = url;
});

$('input[name="filter_search"]').keydown(function(e) {
	if (e.keyCode == 13) {
		e.preventDefault();

		$('#button-filter').trigger('click');
	}
});
//--></script></div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_list.twig";
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
