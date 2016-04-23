<?php

/* messages.html.twig */
class __TwigTemplate_cfa04871e4c0bdcb4b84ae581c14c51c6412781d7a7f53fc348a6e24cca2df82 extends Twig_Template
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
        echo "<!-- Messages: style can be found in dropdown.less-->
                            <li class=\"dropdown messages-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-envelope-o\"></i>
                                    <span class=\"label label-success\">4</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 4 messages</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- start message -->
                                                <a href=\"#\">
                                                    <div class=\"pull-left\">
                                                        <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\"/>
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li><!-- end message -->

                                           
                                        </ul>
                                    </li>
                                    <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                                </ul>
                            </li>
";
    }

    public function getTemplateName()
    {
        return "messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
