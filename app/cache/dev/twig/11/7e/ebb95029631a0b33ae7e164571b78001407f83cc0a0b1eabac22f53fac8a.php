<?php

/* FreelancerMainBundle:Jobowner:edit.html.twig */
class __TwigTemplate_117eebb95029631a0b33ae7e164571b78001407f83cc0a0b1eabac22f53fac8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'username' => array($this, 'block_username'),
            'username2' => array($this, 'block_username2'),
            'email' => array($this, 'block_email'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "  
<div class=\"wrapper\">
 <!-- Content Wrapper. Contains page content -->
";
        // line 6
        $this->env->loadTemplate("::page_header.html.twig")->display($context);
        // line 7
        $this->displayBlock('username', $context, $blocks);
        // line 8
        $this->displayBlock('username2', $context, $blocks);
        // line 9
        $this->displayBlock('email', $context, $blocks);
        // line 10
        echo "
    <h1>Jobowner edit</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("jobowner");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
</div>
";
    }

    // line 7
    public function block_username($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 8
    public function block_username2($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 9
    public function block_email($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Jobowner:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 9,  87 => 8,  81 => 7,  73 => 21,  66 => 17,  59 => 13,  54 => 10,  52 => 9,  50 => 8,  48 => 7,  46 => 6,  39 => 3,  11 => 1,);
    }
}
