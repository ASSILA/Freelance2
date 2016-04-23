<?php

/* FreelancerMainBundle:Projet:ListProjet.html.twig */
class __TwigTemplate_2dd35c89235a33e48d6f4a72886402a7fd664fd3e0db1809e4f71108c6e22e7d extends Twig_Template
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

        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Liste Projets</h3>
                        </div><!-- /.box-header -->
                        <div class=\"box-body\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>nom</th>
                                        <th>budget</th>
                                        <th>checkin</th>
                                        <th>checkout</th>
                                        <th>description</th>
                                        <th>delete</th>
                                        <th>update</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            // line 27
            echo "                                        <tr>
                                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "budget", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkIn", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkOut", array()), "D/M/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                                            <td>       
                                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_main_delete_projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"   >
                                                    <button class=\"btn btn-circle btn-facebook\">Supprimer</button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_main_update_projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
            echo "\"   >
                                                    <button class=\"btn btn-circle btn-dropbox\">Modifier</button>
                                                </a>
                                            </td> 

                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                </tbody>
                            </table>
                        </div></div></div></div></section></div>
   
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:ListProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 46,  100 => 39,  92 => 34,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  68 => 27,  64 => 26,  39 => 3,  36 => 2,  11 => 1,);
    }
}
