<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\common\footer.twig */
class common_footer extends Twix_Template
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
    extract($context); ?><footer id="footer"><?php echo @$text_footer ?><br /><?php echo @$text_version ?></footer></div>
</body>
<script> // Show button captions
    $('.btn[data-toggle=tooltip]').each(function () {
        var title = $(this).attr('title');
        if (!title) return;
        $(this).attr('data-toggle', '').attr('title', '').append('&nbsp; ' + title);
    });
</script>
</html>
<?php
    }

    public function getTemplateName()
    {
        return "common/footer.twig";
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
