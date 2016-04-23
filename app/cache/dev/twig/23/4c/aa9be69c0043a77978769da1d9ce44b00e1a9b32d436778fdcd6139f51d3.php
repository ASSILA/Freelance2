<?php

/* FreelancerMainBundle:Registration:Admin.html.twig */
class __TwigTemplate_234caa9be69c0043a77978769da1d9ce44b00e1a9b32d436778fdcd6139f51d3 extends Twig_Template
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
            'user' => array($this, 'block_user'),
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
    public function block_user($context, array $blocks = array())
    {
        echo "Admin";
    }

    // line 4
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 5
        echo "
    <div class=\"register-page\">
        <div class=\"register-box\">
            <div class=\"register-logo\">
                <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("admin_registration");
        echo "\"><b>Admin</b> Inscription</a>
            </div>

            <div class=\"register-box-body\">
                <p class=\"login-box-msg\">Créer une nouvelle adhésion</p>
                <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("admin_registration");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\">
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
                    <div class=\"form-group has-feedback\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("Nom", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("Prenom", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("email:", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
        echo "
                    </div>
                    <div class=\"form-group has-feedback\">
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>   
                    <div class=\"form-group has-feedback\">
                        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => $this->env->getExtension('translator')->trans("adresse", array(), "FOSUserBundle"))));
        echo "
                        <span class=\"glyphicon glyphicon-home form-control-feedback\"></span>
                    </div>   
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                    <div>
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                    </div>
                </form>
            </div>
        </div>
        <br />
    </div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Registration:Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 51,  139 => 49,  133 => 46,  126 => 42,  120 => 39,  115 => 37,  109 => 34,  104 => 32,  98 => 29,  93 => 27,  87 => 24,  82 => 22,  76 => 19,  71 => 17,  66 => 15,  60 => 14,  52 => 9,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }
}
