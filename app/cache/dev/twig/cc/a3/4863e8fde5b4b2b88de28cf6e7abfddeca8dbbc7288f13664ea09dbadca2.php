<?php

/* ::tasks.html.twig */
class __TwigTemplate_cca34863e8fde5b4b2b88de28cf6e7abfddeca8dbbc7288f13664ea09dbadca2 extends Twig_Template
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
        echo " <!-- Tasks: style can be found in dropdown.less -->
                            <li class=\"dropdown tasks-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-flag-o\"></i>
                                    <span class=\"label label-danger\">9</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li class=\"header\">You have 9 tasks</li>
                                    <li>
                                        <!-- inner menu: contains the actual data -->
                                        <ul class=\"menu\">
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <h3>
                                                        Design some buttons
                                                        <small class=\"pull-right\">20%</small>
                                                    </h3>
                                                    <div class=\"progress xs\">
                                                        <div class=\"progress-bar progress-bar-aqua\" style=\"width: 20%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class=\"pull-right\">40%</small>
                                                    </h3>
                                                    <div class=\"progress xs\">
                                                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class=\"pull-right\">60%</small>
                                                    </h3>
                                                    <div class=\"progress xs\">
                                                        <div class=\"progress-bar progress-bar-red\" style=\"width: 60%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                            <li><!-- Task item -->
                                                <a href=\"#\">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class=\"pull-right\">80%</small>
                                                    </h3>
                                                    <div class=\"progress xs\">
                                                        <div class=\"progress-bar progress-bar-yellow\" style=\"width: 80%\" role=\"progressbar\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                            <span class=\"sr-only\">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li><!-- end task item -->
                                        </ul>
                                    </li>
                                    <li class=\"footer\">
                                        <a href=\"#\">View all tasks</a>
                                    </li>
                                </ul>
                            </li>";
    }

    public function getTemplateName()
    {
        return "::tasks.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
