<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\marketplace\marketplace_comment.twig */
class marketplace_marketplace_comment extends Twix_Template
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
    extract($context);         if (@$comments) {
            @$save42446 = $comment            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$comments);
            foreach ($context['_seq'] as $_key => $comment) {
?><div id="comment<?php echo @$comment["extension_comment_id"] ?>" class="media">
  <div class="media-left"><img src="<?php echo @$comment["image"] ?>" alt="<?php echo @$comment["member"] ?>" title="<?php echo @$comment["member"] ?>" class="media-object" /></div>
  <div class="media-body">
    <p class="media-heading"><?php echo @$comment["member"] ?> <span><?php echo @$comment["date_added"] ?></span></p>
    <p><?php echo @$comment["comment"] ?></p>
    <div class="reply">
      <div> <?php
                if (@$comment["reply"]) {
?>        
        <?php
                    @$save42502 = $reply                    ;
                    $context['_parent'] = $context;
                    $context['_seq'] = twix_ensure_traversable(@$comment["reply"]);
                    foreach ($context['_seq'] as $_key => $reply) {
?>        <div class="media">
          <div class="media-left"><img src="<?php echo @$reply["image"] ?>" alt="<?php echo @$reply["member"] ?>" title="<?php echo @$reply["member"] ?>" class="media-object" /></div>
          <div class="media-body">
            <p class="media-heading"><?php echo @$reply["member"] ?> <span><?php echo @$reply["date_added"] ?></span></p>
            <p><?php echo @$reply["comment"] ?></p>
          </div>
        </div>
        <?php
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
$reply                     = $save42502 ?>        
        <?php
                    if (@$comment["next"]) {
?>        <div class="text-center"><a href="<?php echo @$comment["next"] ?>" class="btn btn-block"><?php echo @$text_see_more ?></a></div>
        <?php
                    }
?>        
        <?php
                }
?> <a href="<?php echo @$comment["refresh"] ?>" class="reply-refresh hide"><?php echo @$button_refresh ?></a> </div>
    </div>
    <p class="text-right">
      <button type="button" class="btn btn-link btn-xs"><?php echo @$button_reply ?></button>
    </p>
    <div class="reply-input-box" style="display: none;">
      <div class="media">
        <div class="media-body">
          <div class="form-group">
            <label for="input-comment<?php echo @$comment["extension_comment_id"] ?>"><?php echo @$text_comment_add ?></label>
            <textarea name="comment" placeholder="Write your comment here..." id="input-comment<?php echo @$comment["extension_comment_id"] ?>" class="form-control"></textarea>
          </div>
          <div class="text-right"><a href="<?php echo @$comment["add"] ?>" class="btn btn-primary btn-sm"><?php echo @$button_comment ?></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$comment             = $save42446 ?> <br />
<div class="text-center"><?php echo @$pagination ?></div>
<?php
        }
?> <?php
    }

    public function getTemplateName()
    {
        return "marketplace/marketplace_comment.twig";
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
