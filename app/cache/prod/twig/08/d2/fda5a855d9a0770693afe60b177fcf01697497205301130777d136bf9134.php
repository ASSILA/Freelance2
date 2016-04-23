<?php

/* ::page_header.html.twig */
class __TwigTemplate_08d2fda5a855d9a0770693afe60b177fcf01697497205301130777d136bf9134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_header_title' => array($this, 'block_page_header_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- Content Header (Page header) -->
<section class=\"content-header\">
    <h1>
        Dashboard
        <small>";
        // line 5
        $this->displayBlock('page_header_title', $context, $blocks);
        echo "</small>
    </h1>
    <ol class=\"breadcrumb\">
        <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
        <li class=\"active\">Dashboard</li>
    </ol>
</section>
";
    }

    public function block_page_header_title($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::page_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 5,  20 => 1,);
    }
}
