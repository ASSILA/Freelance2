<?php

/* FreelancerMainBundle:pages/examples:login.html.twig */
class __TwigTemplate_dc2bb3b852c3e03efaa382644d4d7b37565b7d297d10655c5ffbb0fee95295a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"../../bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=\"../../dist/css/AdminLTE.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- iCheck -->
    <link href=\"../../plugins/iCheck/square/blue.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"login-page\">
      <div class=\"login-page\">
    <div class=\"login-box\">
      <div class=\"login-logo\">
        <a href=\"../../index2.html\"><b>Admin</b>LTE</a>
      </div><!-- /.login-logo -->
      <div class=\"login-box-body\">
        <p class=\"login-box-msg\">Sign in to start your session</p>
        <form action=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
          <div class=\"form-group has-feedback\">
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "\"/>
            <span class=\"glyphicon glyphicon-envelope form-control-feedback\"></span>
          </div>
          <div class=\"form-group has-feedback\">
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "\"/>
            <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
          </div>
          <div class=\"row\">
            <div class=\"col-xs-8\">    
              <div class=\"checkbox icheck\">
                <label>
                  <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"> ";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class=\"col-xs-4\">
              <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary btn-block btn-flat\" >";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class=\"social-auth-links text-center\">
          <p>- OR -</p>
          <a href=\"#\" class=\"btn btn-block btn-social btn-facebook btn-flat\"><i class=\"fa fa-facebook\"></i> Sign in using Facebook</a>
          <a href=\"#\" class=\"btn btn-block btn-social btn-google-plus btn-flat\"><i class=\"fa fa-google-plus\"></i> Sign in using Google+</a>
        </div><!-- /.social-auth-links -->

        <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
        echo "\">Changer Mot De Passe</a><br>
        <a href=\"register.html\" class=\"text-center\">Register a new membership</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src=\"../../plugins/jQuery/jQuery-2.1.3.min.js\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"../../bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <!-- iCheck -->
    <script src=\"../../plugins/iCheck/icheck.min.js\" type=\"text/javascript\"></script>
    <script>
      \$(function () {
        \$('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </div>
  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:pages/examples:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 61,  87 => 50,  79 => 45,  69 => 38,  60 => 34,  55 => 32,  51 => 31,  19 => 1,);
    }
}
