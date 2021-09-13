<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\login.twig */
class default_template_account_login extends Twix_Template
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
    extract($context); echo @$header ?>
<div id="account-login" class="container">
  <ul class="breadcrumb">
    <?php
        @$save90423 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save90423 ?>  </ul>
  <?php
        if (@$success) {
?>  <div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> <?php echo @$success ?></div>
  <?php
        }
?>  <?php
        if (@$error_warning) {
?>  <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> <?php echo @$error_warning ?></div>
  <?php
        }
?>  <div class="row"><?php echo @$column_left ?>
    <?php
        if ((@$column_left && @$column_right)) {
?>    <?php
            $class = "col-sm-6" ?>    <?php
        } elseif ((@$column_left || @$column_right)) {
?>    <?php
            $class = "col-sm-9" ?>    <?php
        } else {
?>    <?php
            $class = "col-sm-12" ?>    <?php
        }
?>    <div id="content" class="<?php echo @$class ?>"><?php echo @$content_top ?>
        <div class="well">
          <h2><?php echo @$text_returning_customer ?></h2>
          <p><strong><?php echo @$text_i_am_returning_customer ?></strong></p>
          <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label" for="input-email"><?php echo @$entry_email ?></label>
              <input type="text" name="email" value="<?php echo @$email ?>" placeholder="<?php echo @$entry_email ?>" id="input-email" class="form-control" />
            </div>
            <div class="form-group">
              <label class="control-label" for="input-password"><?php echo @$entry_password ?></label>
              <input type="password" name="password" value="<?php echo @$password ?>" placeholder="<?php echo @$entry_password ?>" id="input-password" class="form-control" />
              <a href="<?php echo @$forgotten ?>"><?php echo @$text_forgotten ?></a></div>
            <input type="submit" value="<?php echo @$button_login ?>" class="btn btn-primary" />
            <?php
        if (@$redirect) {
?>            <input type="hidden" name="redirect" value="<?php echo @$redirect ?>" />
            <?php
        }
?>          </form>
        </div>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/account/login.twig";
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
