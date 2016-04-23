<?php

/* FreelancerMainBundle:Projet:add.html.twig */
class __TwigTemplate_aa8194c46a60657c0f9686866079e02d40995fe4fff939f153a5562c3c46b395 extends Twig_Template
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
        // line 3
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "FreelancerMainBundle:Form:form_freelancer_type.html.twig"));
        // line 4
        echo "    <div class=\"content-wrapper\">
        <div class=\"bg-olive\">

            <div class=\"login-logo\">
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("freelancer_main_addprojet");
        echo "\"><b>Ajout </b>d'un projet</a>
            </div><!-- /.login-logo -->
            <div class=\"login-box-body\">
                <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("freelancer_main_addprojet");
        echo "\" method=\"POST\" class=\"login-box\">
                  ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"form-group has-feedback\">
                        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nom")));
        echo "
                        <span class=\"glyphicon glyphicon-bookmark form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "budget", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Budget")));
        echo "
                        <span class=\"glyphicon glyphicon-euro form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "checkIn", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Date de début")));
        echo "
                        <span class=\"glyphicon glyphicon-time form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                       ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "checkOut", array()), 'row', array("attr" => array("class" => "form-control", "placeholder" => "Date de fin")));
        echo "
                        <span class=\"glyphicon glyphicon-time form-control-feedback\"></span>
                    </div>
                    <div class=\"form-group has-feedback\">
                       ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "description")));
        echo "
                        <span class=\"glyphicon glyphicon-book form-control-feedback\"></span>
                    </div>
                <div class=\"row\">
            <div class=\"col-xs-4\">
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valider", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-block btn-flat")));
        echo "
             
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "annuler", array()), 'row', array("attr" => array("class" => "btn btn-primary btn-block btn-flat")));
        echo "
               
            </div><!-- /.col -->
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
          </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  106 => 39,  99 => 35,  91 => 30,  84 => 26,  77 => 22,  70 => 18,  63 => 14,  58 => 12,  54 => 11,  48 => 8,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
