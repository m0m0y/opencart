<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\module\account.twig */
class default_template_extension_module_account extends Twix_Template
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
    extract($context); ?><div class="list-group">
  <?php
        if ( !@$logged) {
?>  <a href="<?php echo @$login ?>" class="list-group-item"><?php echo @$text_login ?></a> <a href="<?php echo @$register ?>" class="list-group-item"><?php echo @$text_register ?></a> <a href="<?php echo @$forgotten ?>" class="list-group-item"><?php echo @$text_forgotten ?></a>
  <?php
        }
?>  <a href="<?php echo @$account ?>" class="list-group-item"><?php echo @$text_account ?></a>
  <?php
        if (@$logged) {
?>  <a href="<?php echo @$edit ?>" class="list-group-item"><?php echo @$text_edit ?></a> <a href="<?php echo @$password ?>" class="list-group-item"><?php echo @$text_password ?></a>
  <?php
        }
?>  <a href="<?php echo @$address ?>" class="list-group-item"><?php echo @$text_address ?></a> 
  <a href="<?php echo @$wishlist ?>" class="list-group-item"><?php echo @$text_wishlist ?></a> 
  <a href="<?php echo @$order ?>" class="list-group-item"><?php echo @$text_order ?> <span class="badge badge-light">new</span></a> 
  <a href="<?php echo @$download ?>" class="list-group-item"><?php echo @$text_download ?></a>
  <a href="<?php echo @$recurring ?>" class="list-group-item"><?php echo @$text_recurring ?></a> 
  <a href="<?php echo @$reward ?>" class="list-group-item"><?php echo @$text_reward ?></a> 
  <a href="<?php echo @$return ?>" class="list-group-item"><?php echo @$text_return ?></a> 
  <?php
        if (@$logged) {
?>  <a href="<?php echo @$rate ?>" class="list-group-item"> <?php echo @$text_rate ?> </a>
  <?php
        }
?>  <a href="<?php echo @$transaction ?>" class="list-group-item"><?php echo @$text_transaction ?></a> <a href="<?php echo @$newsletter ?>" class="list-group-item"><?php echo @$text_newsletter ?></a> 
  <?php
        if (@$logged) {
?>  <a href="<?php echo @$logout ?>" class="list-group-item"><?php echo @$text_logout ?></a>
  <?php
        }
?></div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/account.twig";
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
