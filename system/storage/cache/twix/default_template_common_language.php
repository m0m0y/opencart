<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\language.twig */
class default_template_common_language extends Twix_Template
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
    extract($context);         if ((twix_length_filter($this->env, @$languages) > 1)) {
?><div class="pull-left">
  <form action="<?php echo @$action ?>" method="post" enctype="multipart/form-data" id="form-language">
    <div class="btn-group">
      <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
      <?php
            @$save77384 = $language            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$languages);
            foreach ($context['_seq'] as $_key => $language) {
?>      <?php
                if ((@$language["code"] == @$code)) {
?> 
      <img src="catalog/language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" alt="<?php echo @$language["name"] ?>" title="<?php echo @$language["name"] ?>">
      <?php
                }
?>      <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$language             = $save77384 ?>      <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_language ?></span>&nbsp;<i class="fa fa-caret-down"></i></button>
      <ul class="dropdown-menu">
        <?php
            @$save78404 = $language            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$languages);
            foreach ($context['_seq'] as $_key => $language) {
?>        <li>
          <button class="btn btn-link btn-block language-select" type="button" name="<?php echo @$language["code"] ?>"><img src="catalog/language/<?php echo @$language["code"] ?>/<?php echo @$language["code"] ?>.png" alt="<?php echo @$language["name"] ?>" title="<?php echo @$language["name"] ?>" /> <?php echo @$language["name"] ?></button>
        </li>
        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$language             = $save78404 ?>      </ul>
    </div>
    <input type="hidden" name="code" value="" />
    <input type="hidden" name="redirect" value="<?php echo @$redirect ?>" />
  </form>
</div>
<?php
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/language.twig";
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
