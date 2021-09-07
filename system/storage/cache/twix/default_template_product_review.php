<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\product\review.twig */
class default_template_product_review extends Twix_Template
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
    extract($context);         if (@$reviews) {
            @$save28530 = $review            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$reviews);
            foreach ($context['_seq'] as $_key => $review) {
?><table class="table table-striped table-bordered">
  <tr>
    <td style="width: 50%;"><strong><?php echo @$review["author"] ?></strong></td>
    <td class="text-right"><?php echo @$review["date_added"] ?></td>
  </tr>
  <tr>
    <td colspan="2"><p><?php echo @$review["text"] ?></p>
      <?php
                @$save73805 = $i                ;
                $context['_parent'] = $context;
                $context['_seq'] = twix_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $_key => $i) {
?>      <?php
                    if ((@$review["rating"] < @$i)) {
?> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> <?php
                    } else {
?> <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span> <?php
                    }
?>      <?php
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
$i                 = $save73805 ?></td>
  </tr>
</table>
<?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$review             = $save28530 ?><div class="row">
  <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
  <div class="col-sm-6 text-right"><?php echo @$results ?></div>
</div>
<?php
        } else {
?><p><?php echo @$text_no_reviews ?></p>
<?php
        }
    }

    public function getTemplateName()
    {
        return "default/template/product/review.twig";
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
