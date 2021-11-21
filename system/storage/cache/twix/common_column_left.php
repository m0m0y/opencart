<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\common\column_left.twig */
class common_column_left extends Twix_Template
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
    extract($context); ?><nav id="column-left">
  <div id="navigation"><span class="fa fa-bars"></span> <?php echo @$text_navigation ?></div>
  <ul id="menu">
    <?php
        $i = 0 ?>    <?php
<<<<<<< HEAD
        @$save90373 = $menu        ;
=======
        @$save67384 = $menu        ;
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$menus);
        foreach ($context['_seq'] as $_key => $menu) {
?>    <li id="<?php echo @$menu["id"] ?>">
        <?php
            if (@$menu["href"]) {
?><a href="<?php echo @$menu["href"] ?>"><i class="fa <?php echo @$menu["icon"] ?> fw"></i> <?php echo @$menu["name"] ?></a><?php
            } else {
?><a href="#collapse<?php echo @$i ?>" data-toggle="collapse" class="parent collapsed"><i class="fa <?php echo @$menu["icon"] ?> fw"></i> <?php echo @$menu["name"] ?></a><?php
            }
?>        <?php
            if (@$menu["children"]) {
?>          <ul id="collapse<?php echo @$i ?>" class="collapse">
            <?php
                $j = 0 ?>            <?php
<<<<<<< HEAD
                @$save16104 = $children_1                ;
=======
                @$save68548 = $children_1                ;
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(@$menu["children"]);
                foreach ($context['_seq'] as $_key => $children_1) {
?>              <li><?php
                    if (@$children_1["href"]) {
?>                  <a href="<?php echo @$children_1["href"] ?>"><?php echo @$children_1["name"] ?></a>
                <?php
                    } else {
?>                  <a href="#collapse<?php echo @$i ?>-<?php echo @$j ?>" data-toggle="collapse" class="parent collapsed"><?php echo @$children_1["name"] ?></a>
                <?php
                    }
?>
                <?php
                    if (@$children_1["children"]) {
?>                  <ul id="collapse<?php echo @$i ?>-<?php echo @$j ?>" class="collapse">
                    <?php
                        $k = 0 ?>                    <?php
<<<<<<< HEAD
                        @$save17353 = $children_2                        ;
=======
                        @$save69947 = $children_2                        ;
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
                        $context['_parent'] = $context;
                        $context['_seq'] = twix_ensure_traversable(@$children_1["children"]);
                        foreach ($context['_seq'] as $_key => $children_2) {
?>                      <li><?php
                            if (@$children_2["href"]) {
?>                          <a href="<?php echo @$children_2["href"] ?>"><?php echo @$children_2["name"] ?></a>
                        <?php
                            } else {
?>                          <a href="#collapse-<?php echo @$i ?>-<?php echo @$j ?>-<?php echo @$k ?>" data-toggle="collapse" class="parent collapsed"><?php echo @$children_2["name"] ?></a>
                        <?php
                            }
?>                        <?php
                            if (@$children_2["children"]) {
?>                          <ul id="collapse-<?php echo @$i ?>-<?php echo @$j ?>-<?php echo @$k ?>" class="collapse">
                            <?php
<<<<<<< HEAD
                                @$save56101 = $children_3                                ;
=======
                                @$save98676 = $children_3                                ;
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
                                $context['_parent'] = $context;
                                $context['_seq'] = twix_ensure_traversable(@$children_2["children"]);
                                foreach ($context['_seq'] as $_key => $children_3) {
?>                              <li><a href="<?php echo @$children_3["href"] ?>"><?php echo @$children_3["name"] ?></a></li>
                            <?php
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_3'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
$children_3                                 = $save56101 ?>                          </ul>
=======
$children_3                                 = $save98676 ?>                          </ul>
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
                        <?php
                            }
?></li>
                      <?php
                            $k = (@$k + 1) ?>                    <?php
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_2'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
$children_2                         = $save17353 ?>                  </ul>
=======
$children_2                         = $save69947 ?>                  </ul>
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
                <?php
                    }
?> </li>
              <?php
                    $j = (@$j + 1) ?>            <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children_1'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
$children_1                 = $save16104 ?>          </ul>
=======
$children_1                 = $save68548 ?>          </ul>
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
        <?php
            }
?>      </li>
    <?php
            $i = (@$i + 1) ?>    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
<<<<<<< HEAD
$menu         = $save90373 ?>  </ul>
=======
$menu         = $save67384 ?>  </ul>
>>>>>>> 253dc62799793e83d45fae6c8dc403c54d82ebed
  <div id="stats">
    <ul>
      <li>
        <div><?php echo @$text_complete_status ?> <span class="pull-right"><?php echo @$complete_status ?>%</span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo @$complete_status ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo @$complete_status ?>%"> <span class="sr-only"><?php echo @$complete_status ?>%</span></div>
        </div>
      </li>
      <li>
        <div><?php echo @$text_processing_status ?> <span class="pull-right"><?php echo @$processing_status ?>%</span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="<?php echo @$processing_status ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo @$processing_status ?>%"> <span class="sr-only"><?php echo @$processing_status ?>%</span></div>
        </div>
      </li>
      <li>
        <div><?php echo @$text_other_status ?> <span class="pull-right"><?php echo @$other_status ?>%</span></div>
        <div class="progress">
          <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo @$other_status ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo @$other_status ?>%"> <span class="sr-only"><?php echo @$other_status ?>%</span></div>
        </div>
      </li>
    </ul>
  </div>
</nav>
<?php
    }

    public function getTemplateName()
    {
        return "common/column_left.twig";
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
