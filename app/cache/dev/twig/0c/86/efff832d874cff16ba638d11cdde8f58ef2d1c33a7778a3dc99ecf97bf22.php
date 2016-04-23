<?php

/* FreelancerMainBundle:Freelancer:edit.html.twig */
class __TwigTemplate_0c86efff832d874cff16ba638d11cdde8f58ef2d1c33a7778a3dc99ecf97bf22 extends Twig_Template
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo "  
<div class=\"wrapper\">
 <!-- Content Wrapper. Contains page content -->
";
        // line 5
        $this->env->loadTemplate("::page_header.html.twig")->display($context);
        // line 6
        $this->displayBlock('username', $context, $blocks);
        // line 7
        $this->displayBlock('username2', $context, $blocks);
        // line 8
        $this->displayBlock('email', $context, $blocks);
        // line 9
        echo "    <h1>Freelancer edit</h1>

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("freelancer");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
</div>
";
    }

    // line 6
    public function block_username($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 7
    public function block_username2($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
    }

    // line 8
    public function block_email($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Freelancer:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 8,  82 => 7,  76 => 6,  65 => 15,  58 => 11,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  39 => 2,  11 => 1,);
    }
}
