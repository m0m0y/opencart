<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\footer.twig */
class default_template_common_footer extends Twix_Template
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
    extract($context); ?><footer>
  <div class="container">
    <div class="row">
      <?php
        if (@$informations) {
?>      <div class="col-sm-3">
        <h5><?php echo @$text_information ?></h5>
        <ul class="list-unstyled">
         <?php
            @$save49625 = $information            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$informations);
            foreach ($context['_seq'] as $_key => $information) {
?>          <li><a href="<?php echo @$information["href"] ?>"><?php echo @$information["title"] ?></a></li>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$information             = $save49625 ?>        </ul>
      </div>
      <?php
        }
?>      <div class="col-sm-3">
        <h5><?php echo @$text_service ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo @$contact ?>"><?php echo @$text_contact ?></a></li>
          <li><a href="<?php echo @$return ?>"><?php echo @$text_return ?></a></li>
          <li><a href="<?php echo @$sitemap ?>"><?php echo @$text_sitemap ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo @$text_extra ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo @$manufacturer ?>"><?php echo @$text_manufacturer ?></a></li>
          <li><a href="<?php echo @$voucher ?>"><?php echo @$text_voucher ?></a></li>
          <li><a href="<?php echo @$affiliate ?>"><?php echo @$text_affiliate ?></a></li>
          <li><a href="<?php echo @$special ?>"><?php echo @$text_special ?></a></li>
        </ul>
      </div>
      <div class="col-sm-3">
        <h5><?php echo @$text_account ?></h5>
        <ul class="list-unstyled">
          <li><a href="<?php echo @$account ?>"><?php echo @$text_account ?></a></li>
          <li><a href="<?php echo @$order ?>"><?php echo @$text_order ?></a></li>
          <li><a href="<?php echo @$wishlist ?>"><?php echo @$text_wishlist ?></a></li>
          <li><a href="<?php echo @$newsletter ?>"><?php echo @$text_newsletter ?></a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p><?php echo @$powered ?></p>
  </div>
</footer>
<?php
        @$save77987 = $style        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$styles);
        foreach ($context['_seq'] as $_key => $style) {
?><link href="<?php echo @$style["href"] ?>" type="text/css" rel="<?php echo @$style["rel"] ?>" media="<?php echo @$style["media"] ?>" />
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$style         = $save77987;
        @$save37555 = $script        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$scripts);
        foreach ($context['_seq'] as $_key => $script) {
?><script src="<?php echo @$script ?>" type="text/javascript"></script>
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$script         = $save37555 ?><!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html><?php
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
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
