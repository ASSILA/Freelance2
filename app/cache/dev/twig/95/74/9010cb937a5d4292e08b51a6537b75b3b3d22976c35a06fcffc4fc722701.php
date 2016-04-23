<?php

/* FreelancerMainBundle:Projet:recherche.html.twig */
class __TwigTemplate_95749010cb937a5d4292e08b51a6537b75b3b3d22976c35a06fcffc4fc722701 extends Twig_Template
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
        echo "    <div class=\"content-wrapper\">
        <br />
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <div class=\"box-header\" style=\"float: left\">
                            <h3 class=\"box-title\">Liste des projets</h3>
                        </div><!-- /.box-header -->
                        <div class=\"margin\" style=\"float: right\">
                            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("freelancer_main_recherche_projet");
        echo "\" method=\"POST\">
                                <input type=\"text\" name=\"search\" class=\"input-append\"/>
                                <input type=\"submit\" value=\"Recherche\" class=\"btn btn-success\">
                                <button class=\"btn btn-facebook\" value=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("freelancer_main_recherche_projet");
        echo "\">Reset</button>
                            </form>
                        </div>
                        <div class=\"box-body\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Budget</th>
                                        <th>Date de debut</th>
                                        <th>Date de fin</th>
                                        <th>Description</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            if ( !(($this->getAttribute($context["projet"], "emailfreelancer", array()) == null) && ($this->getAttribute($context["projet"], "nbrc", array()) != null))) {
                // line 33
                echo "                                        <tr>
                                            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "budget", array()), "html", null, true);
                echo "</td>
                                            <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkIn", array()), "D/M/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkOut", array()), "D/M/Y"), "html", null, true);
                echo "</td>
                                            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
                echo "</td>
                                            ";
                // line 39
                if ((($this->getAttribute($context["projet"], "satus", array()) == 0) && ($this->getAttribute($context["projet"], "emailfreelancer", array()) == null))) {
                    // line 40
                    echo "                                                <td><div class=\"label pull-left bg-red\">ne possède pas des condidatures</div></td>
                                            ";
                } elseif ((($this->getAttribute(                // line 41
$context["projet"], "satus", array()) == 0) && ($this->getAttribute($context["projet"], "emailfreelancer", array()) != null))) {
                    // line 42
                    echo "                                                <td><div class=\"label pull-left bg-green\">possède des condidature</div></td>
                                            ";
                } elseif (($this->getAttribute(                // line 43
$context["projet"], "satus", array()) == 1)) {
                    // line 44
                    echo "                                                <td><div class=\"label pull-left bg-aqua-active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "emailfreelancer", array()), "html", null, true);
                    echo "</div><smal class=\"label pull-left bg-black-gradient\">en cours</smal></td>
                                            ";
                } elseif (($this->getAttribute(                // line 45
$context["projet"], "satus", array()) == 2)) {
                    // line 46
                    echo "                                        <td><div class=\"label pull-left bg-gray-active\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "emailfreelancer", array()), "html", null, true);
                    echo "</div><smal class=\"label pull-left bg-success\">terminé</smal></td>
                                        ";
                }
                // line 48
                echo "                                    </tr>
                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                </tbody>
                            </table>";
        // line 52
        echo "                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  137 => 50,  129 => 48,  123 => 46,  121 => 45,  116 => 44,  114 => 43,  111 => 42,  109 => 41,  106 => 40,  104 => 39,  100 => 38,  96 => 37,  92 => 36,  88 => 35,  84 => 34,  81 => 33,  76 => 32,  57 => 16,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}
