<?php

/* FreelancerMainBundle:Projet:ListCandidature.html.twig */
class __TwigTemplate_5d60f0029218076e93d395635d5a5866a5e8cd69d20ac169f08d5dfe993a60bf extends Twig_Template
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
        echo "  <div class=\"content-wrapper\">
        <section class=\"content-header\">
            <h1>
                Liste Candidatures 
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Profile</a></li>
                <li><a href=\"#\">Gestion des Projet</a></li>
                <li class=\"active\">Liste Candidatures</li>
            </ol>
        </section>
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Liste Candidatures</h3>
                        </div><!-- /.box-header -->
                        <div class=\"box-body\">
                            <table id=\"example2\" class=\"table table-bordered table-hover\">
                                <thead>
                                    <tr>
                                        <th>nom</th>
                                        <th>budget</th>
                                        <th>checkin</th>
                                        <th>checkout</th>
                                        <th>freelancer</th>
                                        <th>valider candidature</th>
                                        
                                    </tr>
                                </thead>
                                    <tbody>
                                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
            if (($this->getAttribute($context["projet"], "emailfreelancer", array()) != null)) {
                // line 36
                echo "                                            <tr>
                                                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "nom", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "budget", array()), "html", null, true);
                echo "</td>
                                                <td>";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkIn", array()), "D/M/Y"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["projet"], "checkOut", array()), "D/M/Y"), "html", null, true);
                echo "</td>
                                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "emailfreelancer", array()), "html", null, true);
                echo "</td>
                                              
 <td>
<a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("freelancer_main_confirmer_projet", array("id" => $this->getAttribute($context["projet"], "id", array()))), "html", null, true);
                echo "\"   >
     <button class=\"btn btn-primary btn-block btn-flat\">valider candidature</button>
        </a>
</td> 
                                            </tr>
                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "                                        </div> </div></div></div></div>
                                    ";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:ListCandidature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 50,  103 => 44,  97 => 41,  93 => 40,  89 => 39,  85 => 38,  81 => 37,  78 => 36,  73 => 35,  39 => 3,  36 => 2,  11 => 1,);
    }
}
