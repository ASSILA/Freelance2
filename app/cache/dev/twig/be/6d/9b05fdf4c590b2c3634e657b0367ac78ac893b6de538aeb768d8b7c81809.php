<?php

/* ::notifications_jobowner.html.twig */
class __TwigTemplate_be6d9b05fdf4c590b2c3634e657b0367ac78ac893b6de538aeb768d8b7c81809 extends Twig_Template
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
        echo "<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-bell-o\"></i>
        <span class=\"label label-warning\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">You have ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "html", null, true);
        echo " notifications</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projetsNotif"]) ? $context["projetsNotif"] : $this->getContext($context, "projetsNotif")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if (($this->getAttribute($context["p"], "emailfreelancer", array()) != null)) {
                // line 12
                echo "                    <li>
                        <a href=\"";
                // line 13
                echo $this->env->getExtension('routing')->getPath("freelancer_main_listconfirmer_projet");
                echo "\">
                            <small>  <small class=\"label pull-left bg-aqua-active\">";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "emailfreelancer", array()), "html", null, true);
                echo "</small>
                               <small class=\"label pull-left bg-black-active\">dépose sa candidature</small>
                                <small class=\"label pull-left bg-yellow-active\">";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
                echo "</small>
                            </small>
                        </a>
                    </li>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("freelancer_main_recherche_projet");
        echo "\">Voir tout</a></li>
    </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "::notifications_jobowner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  66 => 21,  54 => 16,  49 => 14,  45 => 13,  42 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
