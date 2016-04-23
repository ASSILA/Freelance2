<?php

/* FreelancerMainBundle:pages/tables:data1.html.twig */
class __TwigTemplate_987bb92f0406da0ee9f0e1edd13e2d62f1db8eca8876b1a8dbc95aac299b36c5 extends Twig_Template
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
        echo "<!-- Content Wrapper. Contains page content -->
<div class=\"content-wrapper\">
    <!-- Content Header (Page header) -->
    <section class=\"content-header\">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li><a href=\"#\">Tables</a></li>
            <li class=\"active\">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class=\"content\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"box\">
                    <div class=\"box-header\">
                        <h3 class=\"box-title\">Liste Freelancer</h3>
                    </div><!-- /.box-header -->
                    <div class=\"box-body\">
                        <table id=\"example2\" class=\"table table-bordered table-hover\">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>email</th>
                                    <th>Adresse</th>
                                    <th>Note</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["freelancers"]) ? $context["freelancers"] : $this->getContext($context, "freelancers")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 37
            echo "                                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["u"]) {
                if (($this->getAttribute($context["u"], "email", array()) == $this->getAttribute($context["f"], "email", array()))) {
                    // line 38
                    echo "                                <tr>
                                    <td>u.nom</td>
                                    <td>u.prenom</td>
                                    <td>u.email</td>
                                    <td>u.adresse</td>
                                    <td>f.note</td>
                                </tr>
                                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['u'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>email</th>
                                    <th>Adresse</th>
                                    <th>Note</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:pages/tables:data1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 47,  80 => 46,  66 => 38,  60 => 37,  56 => 36,  19 => 1,);
    }
}
