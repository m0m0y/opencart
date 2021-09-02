<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\mail\order_edit.twig */
class default_template_mail_order_edit extends Twix_Template
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
    extract($context); echo @$text_order_id ?> <?php echo @$order_id ?>
<?php echo @$text_date_added ?> <?php echo @$date_added ?>

<?php echo @$text_order_status ?>

<?php echo @$order_status ?>

<?php
        if (@$link) {
echo @$text_link ?>

<?php echo @$link ?>
<?php
        }
        if (@$comment) {
?>
<?php echo @$text_comment ?>

<?php echo @$comment ?>
<?php echo @$text_footer ?>
<?php
        } else {
?> 
<?php echo @$text_footer ?>
<?php
        }
    }

    public function getTemplateName()
    {
        return "default/template/mail/order_edit.twig";
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
