<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\module\slideshow.twig */
class default_template_extension_module_slideshow extends Twix_Template
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
    extract($context); ?><div class="slideshow swiper-viewport">
  <div id="slideshow<?php echo @$module ?>" class="swiper-container">
    <div class="swiper-wrapper"> <?php
        @$save22487 = $banner        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$banners);
        foreach ($context['_seq'] as $_key => $banner) {
?>      <div class="swiper-slide text-center"><?php
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
$banner         = $save22487 ?> </div>
  </div>
  <div class="swiper-pagination slideshow<?php echo @$module ?>"></div>
  <div class="swiper-pager">
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
<script type="text/javascript"><!--
$('#slideshow<?php echo @$module ?>').swiper({
	mode: 'horizontal',
	slidesPerView: 1,
	pagination: '.slideshow<?php echo @$module ?>',
	paginationClickable: true,
	nextButton: '.slideshow .swiper-button-next',
    prevButton: '.slideshow .swiper-button-prev',
    spaceBetween: 30,
	autoplay: 2500,
    autoplayDisableOnInteraction: true,
	loop: true
});
//--></script><?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/slideshow.twig";
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
