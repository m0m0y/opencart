<?php

/* Twix ver. 1.18  Source: C:\xampp\htdocs\opencart\admin\view\template\common\header.twig */
class common_header extends Twix_Template
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
    extract($context); ?><!DOCTYPE html>
<html dir="<?php echo @$direction ?>" lang="<?php echo @$lang ?>">
<head>
<meta charset="UTF-8" />
<title><?php echo @$title ?></title>
<base href="<?php echo @$base ?>" />
<?php
        if (@$description) {
?><meta name="description" content="<?php echo @$description ?>" />
<?php
        }
        if (@$keywords) {
?><meta name="keywords" content="<?php echo @$keywords ?>" />
<?php
        }
?><meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<script type="text/javascript" src="view/javascript/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="view/javascript/bootstrap/js/bootstrap.min.js"></script>
<link href="view/stylesheet/bootstrap.css" type="text/css" rel="stylesheet" />
<link href="view/javascript/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<script src="view/javascript/jquery/datetimepicker/moment/moment.min.js" type="text/javascript"></script>
<script src="view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js" type="text/javascript"></script>
<script src="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<link href="view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css" type="text/css" rel="stylesheet" media="screen" />
<link type="text/css" href="view/stylesheet/stylesheet.css" rel="stylesheet" media="screen" />
<?php
        @$save74223 = $style        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$styles);
        foreach ($context['_seq'] as $_key => $style) {
?><link type="text/css" href="<?php echo @$style["href"] ?>" rel="<?php echo @$style["rel"] ?>" media="<?php echo @$style["media"] ?>" />
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$style         = $save74223;
        @$save92522 = $link        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$links);
        foreach ($context['_seq'] as $_key => $link) {
?><link href="<?php echo @$link["href"] ?>" rel="<?php echo @$link["rel"] ?>" />
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$link         = $save92522 ?><script src="view/javascript/common.js" type="text/javascript"></script>
<?php
        @$save57584 = $script        ;
        $context['_parent'] = $context;
        $context['_seq'] = twix_ensure_traversable(@$scripts);
        foreach ($context['_seq'] as $_key => $script) {
?><script type="text/javascript" src="<?php echo @$script ?>"></script>
<?php
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
$script         = $save57584 ?></head>
<body>
<div id="container">
<header id="header" class="navbar navbar-static-top">
  <div class="container-fluid">
    <div id="header-logo" class="navbar-header"><a href="<?php echo @$home ?>" class="navbar-brand"><img src="view/image/logo.png" alt="<?php echo @$heading_title ?>" title="<?php echo @$heading_title ?>" /></a></div>
    <?php
        if (@$logged) {
?><a href="#" id="button-menu" class="hidden-md hidden-lg"><span class="fa fa-bars"></span></a>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo @$image ?>" alt="<?php echo @$firstname ?> <?php echo @$lastname ?>" title="<?php echo @$username ?>" id="user-profile" class="img-circle" /><?php echo @$firstname ?> <?php echo @$lastname ?> <i class="fa fa-caret-down fa-fw"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
          <li><a href="<?php echo @$profile ?>"><i class="fa fa-user-circle-o fa-fw"></i> <?php echo @$text_profile ?></a></li>
          <li role="separator" class="divider"></li>
          <li class="dropdown-header"><?php echo @$text_store ?></li>
          <?php
            @$save81708 = $store            ;
            $context['_parent'] = $context;
            $context['_seq'] = twix_ensure_traversable(@$stores);
            foreach ($context['_seq'] as $_key => $store) {
?>          <li><a href="<?php echo @$store["href"] ?>" target="_blank"><?php echo @$store["name"] ?></a></li>
          <?php
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
$store             = $save81708 ?>          <li role="separator" class="divider"></li>
          <li class="dropdown-header"><?php echo @$text_help ?></li>
          <li><a href="https://www.opencart.com" target="_blank"><i class="fa fa-opencart fa-fw"></i> <?php echo @$text_homepage ?></a></li>
          <li><a href="http://docs.opencart.com" target="_blank"><i class="fa fa-file-text-o fa-fw"></i> <?php echo @$text_documentation ?></a></li>
          <li><a href="https://forum.opencart.com" target="_blank"><i class="fa fa-comments-o fa-fw"></i> <?php echo @$text_support ?></a></li>
        </ul>
      </li>
      <li><a href="<?php echo @$logout ?>"><i class="fa fa-sign-out"></i> <span class="hidden-xs hidden-sm hidden-md"><?php echo @$text_logout ?></span></a></li>
    </ul>
    <?php
        }
?> </div>
</header><?php
    }

    public function getTemplateName()
    {
        return "common/header.twig";
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
