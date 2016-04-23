<?php

/* FreelancerMainBundle:Form:form_freelancer_type.html.twig */
class __TwigTemplate_ab39db7fe4c9b80d748baddc91654351c2140b1d56e7c9ab2e1fa83e07268fa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'datePicker_widget' => array($this, 'block_datePicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('datePicker_widget', $context, $blocks);
    }

    public function block_datePicker_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
        ";
        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " freelancerDatePicker"))));
        // line 5
        echo "        ";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_datepicker");
        // line 6
        echo "        ";
        $context["full_name"] = ("datepicker_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 7
        echo "        <input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo "/>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:Form:form_freelancer_type.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  45 => 6,  42 => 5,  40 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
