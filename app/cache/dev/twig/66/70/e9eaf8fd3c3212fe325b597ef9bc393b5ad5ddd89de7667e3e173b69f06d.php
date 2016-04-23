<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_6670e9eaf8fd3c3212fe325b597ef9bc393b5ad5ddd89de7667e3e173b69f06d extends Twig_Template
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
            'title' => array($this, 'block_title'),
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Connexion | Freelancer Website";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"login-page\">
    <div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\"><b>Freelancer </b>Connexion</a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Connectez-vous pour commencer votre session</p>
        <form action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
          <div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
          </div>
          <div class=\"form-group has-feedback\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-8\">    
              <div class=\"checkbox icheck\">
                <label>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
              <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" >";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class=\"social-auth-links text-center\">
          <p>- OR -</p>
          <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Connectez-vous en utilisant Facebook</a>
          <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Connectez-vous en utilisant Google+</a>
        </div><!-- /.social-auth-links -->

        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer Mot De Passe</a><br>
        <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("freelancer_main_choiceRegistration");
        echo "\" class=\"text-center\">Créer une nouvelle adhésion</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
       <br />
  </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 48,  117 => 47,  103 => 36,  95 => 31,  85 => 24,  76 => 20,  71 => 18,  67 => 17,  60 => 13,  54 => 9,  48 => 7,  46 => 6,  43 => 5,  37 => 4,  11 => 1,);
    }
}
