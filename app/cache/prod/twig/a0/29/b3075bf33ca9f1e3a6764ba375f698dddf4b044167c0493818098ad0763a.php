<?php

/* ::base_1.html.twig */
class __TwigTemplate_a029b3075bf33ca9f1e3a6764ba375f698dddf4b044167c0493818098ad0763a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'home' => array($this, 'block_home'),
            'profile' => array($this, 'block_profile'),
            'projets' => array($this, 'block_projets'),
            'about' => array($this, 'block_about'),
            'freelancer' => array($this, 'block_freelancer'),
            'aaaaa' => array($this, 'block_aaaaa'),
            'contact' => array($this, 'block_contact'),
            'break' => array($this, 'block_break'),
            'container' => array($this, 'block_container'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div class=\"body-inner-wrapper\">
            <div id=\"menu-wrapper\" class=\"navbar-wrapper\">
                <div class=\"inner-container\">
                    <div id=\"navigation-bar\" class=\"navbar navbar-inverse navbar-static-top\" role=\"navigation\">
                        <div class=\"container\">
                            <div class=\"navbar-header\">
                                <div>
                                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                                        <span class=\"sr-only\">Toggle navigation</span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                        <span class=\"icon-bar\"></span>
                                    </button>
                                    <a id=\"logo\" class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("freelancer_main_homepage");
        echo "\"><img class=\"click\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
                                </div>
                            </div>
                            <div id=\"menu\" class=\"navbar-collapse collapse\">
                                <ul class=\"nav navbar-nav navbar-left\">
                                    ";
        // line 51
        $this->displayBlock('home', $context, $blocks);
        // line 52
        echo "                                    ";
        $this->displayBlock('profile', $context, $blocks);
        // line 53
        echo "                                    ";
        $this->displayBlock('projets', $context, $blocks);
        // line 54
        echo "                                    ";
        $this->displayBlock('about', $context, $blocks);
        // line 55
        echo "                                    ";
        $this->displayBlock('freelancer', $context, $blocks);
        // line 56
        echo "                                    ";
        $this->displayBlock('aaaaa', $context, $blocks);
        // line 57
        echo "                                    ";
        $this->displayBlock('contact', $context, $blocks);
        // line 58
        echo "                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    ";
        // line 64
        $this->displayBlock('break', $context, $blocks);
        // line 65
        echo "    ";
        $this->displayBlock('container', $context, $blocks);
        // line 66
        echo "</div>
";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "
<script>\$(\".click\").click(function () {
        window.location = \$(this).find(\"a\").attr(\"href\");
        return false;
    });</script>
</body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_javascripts($context, array $blocks = array())
    {
        // line 7
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/jquery.bxslider.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/themehippo.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://maps.googleapis.com/maps/api/js?sensor=false"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/js/script.js"), "html", null, true);
        echo "\"></script>

        ";
    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 19
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/reset.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato:100,300,400,700"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/fontello/css/fontello.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
            <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/freelancermain/css/media-query.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        ";
    }

    // line 51
    public function block_home($context, array $blocks = array())
    {
        echo "    <li class=\"active home click\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("freelancer_main_homepage");
        echo "\"> Home</a></li> ";
    }

    // line 52
    public function block_profile($context, array $blocks = array())
    {
        echo "  <li class=\"service click \"><a href=\"#services-wrapper\">Profil</a></li>";
    }

    // line 53
    public function block_projets($context, array $blocks = array())
    {
        echo "  <li class=\"portfolio click\" ><a href=\"#portfolio-wrapper\">Projets</a></li>";
    }

    // line 54
    public function block_about($context, array $blocks = array())
    {
        echo " <li class=\"about click\"><a href=\"\">About</a></li>";
    }

    // line 55
    public function block_freelancer($context, array $blocks = array())
    {
        echo " <li class=\"client click\"><a href=\"#client-wrapper\">Freelancer</a></li>";
    }

    // line 56
    public function block_aaaaa($context, array $blocks = array())
    {
    }

    // line 57
    public function block_contact($context, array $blocks = array())
    {
        echo " <li class=\"contact click\"><a href=\"#contact-wrapper\">Contact</a></li>";
    }

    // line 64
    public function block_break($context, array $blocks = array())
    {
    }

    // line 65
    public function block_container($context, array $blocks = array())
    {
    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 67,  266 => 65,  261 => 64,  255 => 57,  250 => 56,  244 => 55,  238 => 54,  232 => 53,  226 => 52,  218 => 51,  211 => 27,  207 => 26,  203 => 25,  199 => 24,  195 => 23,  191 => 22,  187 => 21,  183 => 20,  178 => 19,  175 => 18,  168 => 15,  164 => 14,  160 => 13,  156 => 12,  152 => 11,  148 => 10,  144 => 9,  140 => 8,  135 => 7,  132 => 6,  126 => 5,  115 => 68,  113 => 67,  110 => 66,  107 => 65,  105 => 64,  97 => 58,  94 => 57,  91 => 56,  88 => 55,  85 => 54,  82 => 53,  79 => 52,  77 => 51,  67 => 46,  47 => 30,  44 => 18,  42 => 6,  38 => 5,  32 => 1,);
    }
}
