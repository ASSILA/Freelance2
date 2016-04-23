<?php

/* ::notifications_freelancer.html.twig */
class __TwigTemplate_502da04032ad830c81a62c9dabfbc650a0417f9f3c77a76b3071babdd6f5cb01 extends Twig_Template
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
        echo "<li class=\"dropdown notifications-menu fixed\">
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
            if (($this->getAttribute($context["p"], "satus", array()) == 1)) {
                // line 12
                echo "                    ";
                if (($this->getAttribute($context["p"], "satus", array()) == 1)) {
                    // line 13
                    echo "                        <li>
                            <a href=\"";
                    // line 14
                    echo $this->env->getExtension('routing')->getPath("freelancer_main_listencoursf_projet");
                    echo "\">
                                <small>
                                    <small class=\"label pull-left bg-aqua-active\">";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
                    echo "</small>
                                    <small class=\"label pull-left bg-black-active\">vous confirme pour</small>
                                    <small class=\"label pull-left bg-yellow-active\">";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
                    echo "</small> 
                                </small>
                            </a>
                        </li>
                    ";
                }
                // line 23
                echo "                    ";
                if (($this->getAttribute($context["p"], "satus", array()) == 2)) {
                    // line 24
                    echo "                        <li>
                            <a href=\"";
                    // line 25
                    echo $this->env->getExtension('routing')->getPath("freelancer_main_listencoursf_projet");
                    echo "\">
                            <small>
                                    <small class=\"label pull-left bg-black-active\">vous vous êtes payés par</small>
                                    <small class=\"label pull-left bg-gray-active\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "email", array()), "html", null, true);
                    echo "</small>
                                    <small class=\"label pull-left bg-black-active\">au projet</small>
                                    <small class=\"label pull-left bg-yellow-active\">";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "nom", array()), "html", null, true);
                    echo "</small> 
                            </small>
                            </a>
                        </li>
                    ";
                }
                // line 35
                echo "                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listencoursf_projet");
        echo "\">Voir tout</a></li>
    </ul>
</li>";
    }

    public function getTemplateName()
    {
        return "::notifications_freelancer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 38,  98 => 36,  91 => 35,  83 => 30,  78 => 28,  72 => 25,  69 => 24,  66 => 23,  58 => 18,  53 => 16,  48 => 14,  45 => 13,  42 => 12,  37 => 11,  30 => 7,  24 => 4,  19 => 1,);
    }
}
