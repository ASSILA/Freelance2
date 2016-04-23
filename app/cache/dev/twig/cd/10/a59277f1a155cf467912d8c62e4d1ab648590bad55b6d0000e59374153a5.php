<?php

/* FreelancerMainBundle:Projet:telecharger.html.twig */
class __TwigTemplate_cd10a59277f1a155cf467912d8c62e4d1ab648590bad55b6d0000e59374153a5 extends Twig_Template
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
        echo "
        <table class=\"pricingtable\">

            
                <tr>
                    <th class=\"bronze\" scope=\"col\">nom</th>
                    <th class=\"gold\" scope=\"col\">budget</th>
                    <th class=\"silver\" scope=\"col\">checkin</th>
                    <th class=\"gold\" scope=\"col\">checkout</th>
                    <th class=\"bronze\" scope=\"col\">description</th>

                </tr>
            

             
                <tr>
                    <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "nom", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "budget", array()), "html", null, true);
        echo "</td>
                    <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "checkIn", array()), "D/M/Y"), "html", null, true);
        echo "</td>
                    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "checkOut", array()), "D/M/Y"), "html", null, true);
        echo "</td>
                    <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["projet"]) ? $context["projet"] : $this->getContext($context, "projet")), "description", array()), "html", null, true);
        echo "</td>



                </tr>
           

        </table>
  ";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Projet:telecharger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 23,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  39 => 3,  36 => 2,  11 => 1,);
    }
}
