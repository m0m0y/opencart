<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\common\profile.twig */
class common_profile extends Twix_Template
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
        <button type="submit" form="form-user" data-toggle="tooltip" title="<?php echo @$button_save ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
        <a href="<?php echo @$cancel ?>" data-toggle="tooltip" title="<?php echo @$button_cancel ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
      <h1><?php echo @$heading_title ?></h1>
      <ul class="breadcrumb">
        <?php
        @$save60130 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>        <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
        <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save60130 ?>      </ul>
    </div>
  </div>
  <div class="container-fluid">
    <?php
        if (@$success) {
?>    <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    
    <?php
        if (@$error_warning) {
?>    <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?>
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
    <?php
        }
?>    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-pencil"></i> <?php echo @$text_edit ?></h3>
      </div>
      <div class="panel-body">
        <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-user" class="form-horizontal">
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-username"><?php echo @$entry_username ?></label>
            <div class="col-sm-10">
              <input type="text" name="username" value="<?php echo @$username ?>" placeholder="<?php echo @$entry_username ?>" id="input-username" class="form-control" />
              <?php
        if (@$error_username) {
?>              <div class="text-danger"><?php echo @$error_username ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-firstname"><?php echo @$entry_firstname ?></label>
            <div class="col-sm-10">
              <input type="text" name="firstname" value="<?php echo @$firstname ?>" placeholder="<?php echo @$entry_firstname ?>" id="input-firstname" class="form-control" />
              <?php
        if (@$error_firstname) {
?>              <div class="text-danger"><?php echo @$error_firstname ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-lastname"><?php echo @$entry_lastname ?></label>
            <div class="col-sm-10">
              <input type="text" name="lastname" value="<?php echo @$lastname ?>" placeholder="<?php echo @$entry_lastname ?>" id="input-lastname" class="form-control" />
              <?php
        if (@$error_lastname) {
?>              <div class="text-danger"><?php echo @$error_lastname ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-email"><?php echo @$entry_email ?></label>
            <div class="col-sm-10">
              <input type="text" name="email" value="<?php echo @$email ?>" placeholder="<?php echo @$entry_email ?>" id="input-email" class="form-control" />
              <?php
        if (@$error_email) {
?>              <div class="text-danger"><?php echo @$error_email ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-2 control-label" for="input-image"><?php echo @$entry_image ?></label>
            <div class="col-sm-10"><a href="" id="thumb-image" data-toggle="image" class="img-thumbnail"><img src="<?php echo @$thumb ?>" alt="" title="" data-placeholder="<?php echo @$placeholder ?>" /></a>
              <input type="hidden" name="image" value="<?php echo @$image ?>" id="input-image" />
            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-password"><?php echo @$entry_password ?></label>
            <div class="col-sm-10">
              <input type="password" name="password" value="<?php echo @$password ?>" placeholder="<?php echo @$entry_password ?>" id="input-password" class="form-control" autocomplete="off" />
              <?php
        if (@$error_password) {
?>              <div class="text-danger"><?php echo @$error_password ?></div>
              <?php
        }
?>            </div>
          </div>
          <div class="form-group required">
            <label class="col-sm-2 control-label" for="input-confirm"><?php echo @$entry_confirm ?></label>
            <div class="col-sm-10">
              <input type="password" name="confirm" value="<?php echo @$confirm ?>" placeholder="<?php echo @$entry_confirm ?>" id="input-confirm" class="form-control" />
              <?php
        if (@$error_confirm) {
?>              <div class="text-danger"><?php echo @$error_confirm ?></div>
              <?php
        }
?>            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php echo @$footer ?> <?php
    }

    public function getTemplateName()
    {
        return "common/profile.twig";
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
