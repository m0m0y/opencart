<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\menu.twig */
class default_template_common_menu extends Twix_Template
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
    extract($context);         if (@$categories) {
?><div class="container">
  <nav id="menu" class="navbar">
    <div class="navbar-header"><span id="category" class="visible-xs"><?php echo @$text_category ?></span>
      <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
    </div>
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav">
        <?php
            @$save64427 = $category            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$categories);
            foreach ($context['_seq'] as $_key => $category) {
?>        <?php
                if (@$category["children"]) {
?>        <li class="dropdown"><a href="<?php echo @$category["href"] ?>" class="dropdown-toggle" data-toggle="dropdown"><?php echo @$category["name"] ?></a>
          <div class="dropdown-menu">
            <div class="dropdown-inner"> <?php
                    @$save21078 = $children                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(twix_array_batch(@$category["children"], (twix_length_filter($this->env, @$category["children"]) / twix_round(@$category["column"], 1, "ceil"))));
                    foreach ($context['_seq'] as $_key => $children) {
?>              <ul class="list-unstyled">
                <?php
                        @$save99068 = $child                        ;
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$children);
                        foreach ($context['_seq'] as $_key => $child) {
?>                <li><a href="<?php echo @$child["href"] ?>"><?php echo @$child["name"] ?></a></li>
                <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
$child                         = $save99068 ?>              </ul>
              <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$children                     = $save21078 ?></div>
            <a href="<?php echo @$category["href"] ?>" class="see-all"><?php echo @$text_all ?> <?php echo @$category["name"] ?></a> </div>
        </li>
        <?php
                } else {
?>        <li><a href="<?php echo @$category["href"] ?>"><?php echo @$category["name"] ?></a></li>
        <?php
                }
?>        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$category             = $save64427 ?>      </ul>
    </div>
  </nav>
</div>
<?php
        }
?> <?php
    }

    public function getTemplateName()
    {
        return "default/template/common/menu.twig";
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
