<?php

/* SonataAdminBundle:Core:user_block.html.twig */
class __TwigTemplate_8e5f9354ee02c6dfea8e7e2d33493f07eb4022f7e5d3c5c0654b6b324dbaf2be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 3
            echo "        ";
            $context["_bg_class"] = "bg-light-blue";
            // line 4
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl("fos_user_security_logout");
            // line 5
            echo "        ";
            $context["_home_uri"] = $this->env->getExtension('routing')->getUrl("freelancer_main_acceuil");
            // line 6
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 7
            echo "        ";
            $context["_user_image"] = $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg");
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            // line 10
            echo "
        ";
            // line 11
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 12
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 13
                echo "            ";
                $context["_home_text"] = "(home)";
                // line 14
                echo "            ";
                $context["_logout_text"] = "(exit)";
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        <li class=\"user-header ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) ? $context["_bg_class"] : $this->getContext($context, "_bg_class")), "html", null, true);
            echo "\">
            ";
            // line 18
            if ((isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image"))) {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 21
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "html", null, true);
            echo "</p>
        </li>

";
            // line 29
            echo "
        <li class=\"user-footer\">
            <div class=\"pull-left\">
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["_home_uri"]) ? $context["_home_uri"] : $this->getContext($context, "_home_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-home\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_home_text"]) ? $context["_home_text"] : $this->getContext($context, "_home_text")), "html", null, true);
            echo "</a>
            </div>
            <div class=\"pull-right\">
                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) ? $context["_logout_uri"] : $this->getContext($context, "_logout_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) ? $context["_logout_text"] : $this->getContext($context, "_logout_text")), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  100 => 35,  92 => 32,  87 => 29,  80 => 21,  74 => 19,  72 => 18,  68 => 17,  65 => 16,  62 => 15,  59 => 14,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  44 => 8,  41 => 7,  38 => 6,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
