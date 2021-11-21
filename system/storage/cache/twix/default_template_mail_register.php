<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\mail\register.twig */
class default_template_mail_register extends Twix_Template
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
    extract($context); echo @$text_welcome ?>

<?php
        if ( !@$approval) {
echo @$text_login ?>

<?php echo @$login ?>

<?php echo @$text_service ?>

<?php echo @$text_thanks ?>
<?php echo @$store ?>
<?php
        } else {
echo @$text_approval ?>

<?php echo @$login ?>

<?php echo @$text_thanks ?>
<?php echo @$store ?>
<?php
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/register.twig";
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
