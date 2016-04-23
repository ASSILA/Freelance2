<?php

/* FOSUserBundle:Profile:show2.html.twig */
class __TwigTemplate_eef31ee6f311496f8fd5a983c929bb6a5a0c90389f3f60a797bac89dcec42d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base2.html.twig");
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
        return "::base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        if ($this->env->isDebug()) {
            // line 2
            \Symfony\Component\VarDumper\VarDumper::dump((isset($context["r"]) ? $context["r"] : $this->getContext($context, "r")));
}
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Profile:show_content2.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  41 => 3,  37 => 1,  34 => 2,  11 => 1,);
    }
}
