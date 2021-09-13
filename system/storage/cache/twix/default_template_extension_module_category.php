<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\extension\module\category.twig */
class default_template_extension_module_category extends Twix_Template
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
        @$save60770 = $category        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$categories);
        foreach ($context['_seq'] as $_key => $category) {
?>  <?php
            if ((@$category["category_id"] == @$category_id)) {
?> 
  <a href="<?php echo @$category["href"] ?>" class="list-group-item active"><?php echo @$category["name"] ?></a> 
  <?php
                if (@$category["children"]) {
?>  <?php
                    @$save32336 = $child                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$category["children"]);
                    foreach ($context['_seq'] as $_key => $child) {
?>  <?php
                        if ((@$child["category_id"] == @$child_id)) {
?>  <a href="<?php echo @$child["href"] ?>" class="list-group-item active">&nbsp;&nbsp;&nbsp;- <?php echo @$child["name"] ?></a> 
  <?php
                        } else {
?> 
  <a href="<?php echo @$child["href"] ?>" class="list-group-item">&nbsp;&nbsp;&nbsp;- <?php echo @$child["name"] ?></a>
  <?php
                        }
?>  <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$child                     = $save32336 ?>  <?php
                }
?>  <?php
            } else {
?> <a href="<?php echo @$category["href"] ?>" class="list-group-item"><?php echo @$category["name"] ?></a>
  <?php
            }
?>  <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$category         = $save60770 ?></div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/category.twig";
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
