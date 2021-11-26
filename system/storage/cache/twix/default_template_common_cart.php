<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\common\cart.twig */
class default_template_common_cart extends Twix_Template
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
    extract($context); ?><div id="cart" class="btn-group btn-block">
  <button type="button" data-toggle="dropdown" data-loading-text="<?php echo @$text_loading ?>" class="btn btn-inverse btn-block btn-lg dropdown-toggle"><i class="fa fa-shopping-cart"></i> <span id="cart-total"><?php echo @$text_items ?></span></button>
  <ul class="dropdown-menu pull-right">
    <?php
        if ((@$products || @$vouchers)) {
?>    <li>
      <table class="table table-striped">
        <?php
            @$save25229 = $product            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$products);
            foreach ($context['_seq'] as $_key => $product) {
?>        <tr>
          <td class="text-center"><?php
                if (@$product["thumb"]) {
?> <a href="<?php echo @$product["href"] ?>"><img src="<?php echo @$product["thumb"] ?>" alt="<?php echo @$product["name"] ?>" title="<?php echo @$product["name"] ?>" class="img-thumbnail" /></a> <?php
                }
?></td>
          <td class="text-left"><a href="<?php echo @$product["href"] ?>"><?php echo @$product["name"] ?></a> <?php
                if (@$product["option"]) {
?>            <?php
                    @$save76343 = $option                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$product["option"]);
                    foreach ($context['_seq'] as $_key => $option) {
?> <br />
            - <small><?php echo @$option["name"] ?> <?php echo @$option["value"] ?></small> <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$option                     = $save76343 ?>            <?php
                }
?>            <?php
                if (@$product["recurring"]) {
?> <br />
            - <small><?php echo @$text_recurring ?> <?php echo @$product["recurring"] ?></small> <?php
                }
?></td>
          <td class="text-right">x <?php echo @$product["quantity"] ?></td>
          <td class="text-right"><?php echo @$product["total"] ?></td>
          <td class="text-center"><button type="button" onclick="cart.remove('<?php echo @$product["cart_id"] ?>');" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
        </tr>
        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$product             = $save25229 ?>        <?php
            @$save59471 = $voucher            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$vouchers);
            foreach ($context['_seq'] as $_key => $voucher) {
?>        <tr>
          <td class="text-center"></td>
          <td class="text-left"><?php echo @$voucher["description"] ?></td>
          <td class="text-right">x&nbsp;1</td>
          <td class="text-right"><?php echo @$voucher["amount"] ?></td>
          <td class="text-center text-danger"><button type="button" onclick="voucher.remove('<?php echo @$voucher["key"] ?>');" title="<?php echo @$button_remove ?>" class="btn btn-danger btn-xs"><i class="fa fa-times"></i></button></td>
        </tr>
        <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$voucher             = $save59471 ?>      </table>
    </li>
    <li>
      <div>
        <table class="table table-bordered">
          <?php
            @$save46103 = $total            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$totals);
            foreach ($context['_seq'] as $_key => $total) {
?>          <tr>
            <td class="text-right"><strong><?php echo @$total["title"] ?></strong></td>
            <td class="text-right"><?php echo @$total["text"] ?></td>
          </tr>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$total             = $save46103 ?>        </table>
        <p class="text-right"><a href="<?php echo @$cart ?>"><strong><i class="fa fa-shopping-cart"></i> <?php echo @$text_cart ?></strong></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo @$checkout ?>"><strong><i class="fa fa-share"></i> <?php echo @$text_checkout ?></strong></a></p>
      </div>
    </li>
    <?php
        } else {
?>    <li>
      <p class="text-center"><?php echo @$text_empty ?></p>
    </li>
    <?php
        }
?>  </ul>
</div>
<?php
    }

    public function getTemplateName()
    {
        return "default/template/common/cart.twig";
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
