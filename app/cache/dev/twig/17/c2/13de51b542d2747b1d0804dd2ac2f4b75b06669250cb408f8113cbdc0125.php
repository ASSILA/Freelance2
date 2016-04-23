<?php

/* FreelancerMainBundle:Registration:choiceRegistration.html.twig */
class __TwigTemplate_17c213de51b542d2747b1d0804dd2ac2f4b75b06669250cb408f8113cbdc0125 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"home\">
        <div class=\"register-logo  animated-item-1  bg-blue-gradient\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("freelancer_main_acceuil");
        echo "\"><b>Acceuil</b></a>
        </div>
    </div>
    <div class=\"register-page \">
        <div class=\"register-box\">
            <div class=\"register-logo  animated-item-1  bg-blue-gradient\">
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("freelancer_registration");
        echo "\"><b>Freelancer</b> Inscription</a>
            </div>
        </div>
    </div>
    <div class=\"register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo bg-black\">
                <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("jobowner_registration");
        echo "\"><b>Jobowner</b> Inscription</a>
            </div>
        </div>
    </div>
    <div class=\"register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo bg-red-gradient\">
                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_registration");
        echo "\"><b>Admin</b> Inscription</a>
            </div>
        </div>
    </div>
    <div class=\"register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo bg-green-gradient\">
                <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><b>Connexion</b>...</a>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Registration:choiceRegistration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 33,  72 => 26,  62 => 19,  52 => 12,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
