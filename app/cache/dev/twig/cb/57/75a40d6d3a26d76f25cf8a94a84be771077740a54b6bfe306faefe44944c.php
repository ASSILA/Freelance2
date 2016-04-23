<?php

/* FreelancerMainBundle:Projet:ListProjetDispo.html.twig */
class __TwigTemplate_cb5775a40d6d3a26d76f25cf8a94a84be771077740a54b6bfe306faefe44944c extends Twig_Template
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content-wrapper\">
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">

                        <h1>
                            &RightArrow;Liste des Projets
                            <small>disponibles</small>
                        </h1>
                        <div class=\"box-body\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th class=\"bronze\" scope=\"col\">nom</th>
                                        <th class=\"gold\" scope=\"col\">budget</th>
                                        <th class=\"silver\" scope=\"col\">checkin</th>
                                        <th class=\"gold\" scope=\"col\">checkout</th>
                                        <th class=\"bronze\" scope=\"col\">description</th>
                                        <th class=\"bronze\" scope=\"col\">deposer</th>
                                        <th class=\"bronze\" scope=\"col\">telecharger</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 29
            echo "                                        <tr>
                                            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "budget", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkIn", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkOut", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>

                                            </td>
                                            <td>
                                                <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_main_deposer_projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"   >
                                                    deposer
                                                </a>
                                            </td> 
                                            <td>
                                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_main_telecharger_projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"   >
                                                    telecharger
                                                </a>
                                            </td> 

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:ListProjetDispo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  103 => 43,  95 => 38,  88 => 34,  84 => 33,  80 => 32,  76 => 31,  72 => 30,  69 => 29,  65 => 28,  39 => 4,  36 => 3,  11 => 1,);
    }
}
