<?php

/* FreelancerMainBundle:Projet:ListProjetDepose.html.twig */
class __TwigTemplate_0b0d26b6774f20cce6bed6866e0d1696c96fac0f92de03ee09ad1d860b3abb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base2.html.twig");
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
        return "base2.html.twig";
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
        <br/><br/><br/>
        <form method=\"POST\" action=\"\">
            <div style=\"margin-left: 50px\">          
                <input class=\"search\" type=\"text\" name=\"projets\" placeholder=\"chercher projet\"/>
                <div class=\"glyphicon glyphicon-search\"></div>
                <input type=\"submit\"value=\"recherche\"/>
            </div>
        </form>
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <h1 class=\"title1\">Liste des projets</h1>
                        <div class=\"box-body\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th class=\"bronze\" scope=\"col\">nom</th>
                                        <th class=\"gold\" scope=\"col\">budget</th>
                                        <th class=\"silver\" scope=\"col\">checkin</th>
                                        <th class=\"gold\" scope=\"col\">checkout</th>
                                        <th class=\"bronze\" scope=\"col\">description</th>
                                        <th class=\"bronze\" scope=\"col\">retirer candidature</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 32
            echo "                                        <tr>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "budget", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkIn", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkOut", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_main_retirercandidature_projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"   >
                                                    retirer candidature
                                                </a>
                                            </td> 


                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    ";
        // line 57
        echo "    ";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:ListProjetDepose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 57,  111 => 47,  97 => 39,  92 => 37,  88 => 36,  84 => 35,  80 => 34,  76 => 33,  73 => 32,  69 => 31,  39 => 3,  36 => 2,  11 => 1,);
    }
}
