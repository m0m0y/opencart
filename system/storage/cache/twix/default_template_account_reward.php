<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\catalog\view\theme\default\template\account\reward.twig */
class default_template_account_reward extends Twix_Template
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
    extract($context); echo @$header ?>
<div id="account-reward" class="container">
  <ul class="breadcrumb">
    <?php
        @$save23492 = $breadcrumb        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$breadcrumbs);
        foreach ($context['_seq'] as $_key => $breadcrumb) {
?>    <li><a href="<?php echo @$breadcrumb["href"] ?>"><?php echo @$breadcrumb["text"] ?></a></li>
    <?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$breadcrumb         = $save23492 ?>  </ul>
  <div class="row"><?php echo @$column_left ?>
    <?php
        if ((@$column_left && @$column_right)) {
?>    <?php
            $class = "col-sm-6" ?>    <?php
        } elseif ((@$column_left || @$column_right)) {
?>    <?php
            $class = "col-sm-9" ?>    <?php
        } else {
?>    <?php
            $class = "col-sm-12" ?>    <?php
        }
?>    <div id="content" class="<?php echo @$class ?>"><?php echo @$content_top ?>
      <h1><?php echo @$heading_title ?></h1>
      <p><?php echo @$text_total ?> <b><?php echo @$total ?></b>.</p>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr>
              <td class="text-left"><?php echo @$column_date_added ?></td>
              <td class="text-left"><?php echo @$column_description ?></td>
              <td class="text-right"><?php echo @$column_points ?></td>
            </tr>
          </thead>
          <tbody>
          
          <?php
        if (@$rewards) {
?>          <?php
            @$save19363 = $reward            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$rewards);
            foreach ($context['_seq'] as $_key => $reward) {
?>          <tr>
            <td class="text-left"><?php echo @$reward["date_added"] ?></td>
            <td class="text-left"><?php
                if (@$reward["order_id"]) {
?> <a href="<?php echo @$reward["href"] ?>"><?php echo @$reward["description"] ?></a> <?php
                } else {
?>              <?php echo @$reward["description"] ?>
              <?php
                }
?></td>
            <td class="text-right"><?php echo @$reward["points"] ?></td>
          </tr>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reward'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$reward             = $save19363 ?>          <?php
        } else {
?>          <tr>
            <td class="text-center" colspan="3"><?php echo @$text_empty ?></td>
          </tr>
          <?php
        }
?>            </tbody>
          
        </table>
      </div>
      <div class="row">
        <div class="col-sm-6 text-left"><?php echo @$pagination ?></div>
        <div class="col-sm-6 text-right"><?php echo @$results ?></div>
      </div>
      <div class="buttons clearfix">
        <div class="pull-right"><a href="<?php echo @$continue ?>" class="btn btn-primary"><?php echo @$button_continue ?></a></div>
      </div>
      <?php echo @$content_bottom ?></div>
    <?php echo @$column_right ?></div>
</div>
<?php echo @$footer;
    }

    public function getTemplateName()
    {
        return "default/template/account/reward.twig";
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
