<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\module\banner.twig */
class default_template_extension_module_banner extends Twix_Template
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
    extract($context); ?><div class="swiper-viewport">
  <div id="banner<?php echo @$module ?>" class="swiper-container">
    <div class="swiper-wrapper"><?php
        @$save10198 = $banner        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$banners);
        foreach ($context['_seq'] as $_key => $banner) {
?>      <div class="swiper-slide"><?php
            if (@$banner["link"]) {
?><a href="<?php echo @$banner["link"] ?>"><img src="<?php echo @$banner["image"] ?>" alt="<?php echo @$banner["title"] ?>" class="img-responsive" /></a><?php
            } else {
?><img src="<?php echo @$banner["image"] ?>" alt="<?php echo @$banner["title"] ?>" class="img-responsive" /><?php
            }
?></div>
      <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$banner         = $save10198 ?></div>
  </div>
</div>
<script type="text/javascript"><!--
$('#banner<?php echo @$module ?>').swiper({
	effect: 'fade',
	autoplay: 2500,
    autoplayDisableOnInteraction: false
});
--></script> <?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/banner.twig";
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
