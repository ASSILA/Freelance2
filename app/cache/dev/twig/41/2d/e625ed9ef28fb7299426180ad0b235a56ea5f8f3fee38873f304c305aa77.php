<?php

/* FreelancerMainBundle::index.html.twig */
class __TwigTemplate_412de625ed9ef28fb7299426180ad0b235a56ea5f8f3fee38873f304c305aa77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        echo "  

 <!-- Content Wrapper. Contains page content -->
";
        // line 5
        $this->env->loadTemplate("::page_header.html.twig")->display($context);
        // line 6
        $this->env->loadTemplate("FreelancerMainBundle:pages/tables:data.html.twig")->display($context);
        // line 7
        echo "<!-- ./wrapper -->
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  45 => 6,  43 => 5,  36 => 2,  11 => 1,);
    }
}
