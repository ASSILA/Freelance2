<?php

/* ::user_account.html.twig */
class __TwigTemplate_6057bea0d1d4e591087da824f0b9780e09ece65fb6aaad3516b712085251a212 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'username' => array($this, 'block_username'),
            'username2' => array($this, 'block_username2'),
            'email' => array($this, 'block_email'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                                    <span class=\"hidden-xs\">";
        // line 5
        $this->displayBlock('username', $context, $blocks);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                                        <p>
                                            ";
        // line 12
        $this->displayBlock('username2', $context, $blocks);
        // line 13
        echo "                                            <small>";
        $this->displayBlock('email', $context, $blocks);
        echo "</small>
                                        </p>
                                    </li>
                                    <!-- Menu Body -->
                                    <li class=\"user-body\">
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Followers</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Sales</a>
                                        </div>
                                        <div class=\"col-xs-4 text-center\">
                                            <a href=\"#\">Friends</a>
                                        </div>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class=\"user-footer\">
                                        <div class=\"pull-left\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">Profile</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"#\" class=\"btn btn-default btn-flat\">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>";
    }

    // line 5
    public function block_username($context, array $blocks = array())
    {
    }

    // line 12
    public function block_username2($context, array $blocks = array())
    {
    }

    // line 13
    public function block_email($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::user_account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 13,  82 => 12,  77 => 5,  46 => 13,  44 => 12,  39 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
