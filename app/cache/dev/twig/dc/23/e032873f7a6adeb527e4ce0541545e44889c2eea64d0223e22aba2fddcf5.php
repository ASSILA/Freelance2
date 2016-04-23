<?php

/* FreelancerMainBundle:Projet:ListProjettraitef.html.twig */
class __TwigTemplate_dc23e032873f7a6adeb527e4ce0541545e44889c2eea64d0223e22aba2fddcf5 extends Twig_Template
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
        <section class=\"content-header\">
            <h1>
                Liste Projets  deja traite
                <small>Liste Projets traite</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Prifile</a></li>
                <li><a href=\"#\">Liste Projets traite</a></li>
                <li class=\"active\">Liste Projets traite</li>
            </ol>
        </section>
        <section class=\"content\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"box\">
                        <div class=\"box-header\">
                            <h3 class=\"box-title\">Data Table With Full Features</h3>
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
                                      
                                    </tr>
                                </thead>
                                    <tbody>
                                        ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projets"]) ? $context["projets"] : $this->getContext($context, "projets")));
        foreach ($context['_seq'] as $context["_key"] => $context["projet"]) {
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["projet"], "description", array()), "html", null, true);
            echo "</td>
                                               

                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['projet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "                                        </div>
                    </div></div></div></section></div>
                                    ";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:ListProjettraitef.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  96 => 41,  92 => 40,  88 => 39,  84 => 38,  80 => 37,  77 => 36,  73 => 35,  39 => 3,  36 => 2,  11 => 1,);
    }
}
