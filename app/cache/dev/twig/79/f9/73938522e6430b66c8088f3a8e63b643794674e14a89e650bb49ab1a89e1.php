<?php

/* base.html.twig */
class __TwigTemplate_79f973938522e6430b66c8088f3a8e63b643794674e14a89e650bb49ab1a89e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'user_account' => array($this, 'block_user_account'),
            'Left_side_column' => array($this, 'block_Left_side_column'),
            'x' => array($this, 'block_x'),
            'c' => array($this, 'block_c'),
            'cn' => array($this, 'block_cn'),
            'a' => array($this, 'block_a'),
            'an' => array($this, 'block_an'),
            'b' => array($this, 'block_b'),
            'bn' => array($this, 'block_bn'),
            'd' => array($this, 'block_d'),
            'dn' => array($this, 'block_dn'),
            'e' => array($this, 'block_e'),
            'en' => array($this, 'block_en'),
            'f' => array($this, 'block_f'),
            'fn' => array($this, 'block_fn'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - Freelancer Web Site</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 23
        echo "        <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/respond.js"), "html", null, true);
        echo "/1.3.0/respond.min.js') }}\"></script>
        <![endif]-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"skin-blue fixed\">
        ";
        // line 32
        $this->displayBlock('header', $context, $blocks);
        // line 92
        echo "        ";
        $this->displayBlock('Left_side_column', $context, $blocks);
        // line 154
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 212
        echo "</body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "            <!-- Bootstrap 3.3.2 -->
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />    
            <!-- FontAwesome 4.3.0 -->
            <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Ionicons 2.0.0 -->
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />    
            <!-- Theme style -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- AdminLTE Skins. Choose a skin from the css/skins 
                 folder instead of downloading all of them to reduce the load. -->
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/skins/_all-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- iCheck -->
            <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/flat/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 32
    public function block_header($context, array $blocks = array())
    {
        // line 33
        echo "            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("freelancer_main_profile");
        echo "\" class=\"logo\"><b>Jobowner</b>Profile</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 44
        $this->env->loadTemplate("messages.html.twig")->display($context);
        // line 45
        echo "                            ";
        $this->env->loadTemplate("notifications_jobowner.html.twig")->display($context);
        // line 46
        echo "                            ";
        $this->env->loadTemplate("tasks.html.twig")->display($context);
        // line 47
        echo "                            ";
        $this->displayBlock('user_account', $context, $blocks);
        // line 87
        echo "                        </ul>
                    </div>
                </nav>
            </header>
        ";
    }

    // line 47
    public function block_user_account($context, array $blocks = array())
    {
        echo " 
                                <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                                    <span class=\"hidden-xs\">";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                                        <p>
                                            ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                            <small>";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
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
                                            <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit2");
        echo "\" class=\"btn btn-default btn-flat\">Edit Profile</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Déconnxion</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            ";
    }

    // line 92
    public function block_Left_side_column($context, array $blocks = array())
    {
        // line 93
        echo "            <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
        echo "</p>

              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='search' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
         ";
        // line 118
        $this->displayBlock('x', $context, $blocks);
        // line 148
        echo "                
        </section>
        <!-- /.sidebar -->
      </aside>

        ";
    }

    // line 118
    public function block_x($context, array $blocks = array())
    {
        // line 119
        echo "          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
           <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-book\"></i>
                <span>Gestion des projets</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu \">
                <li><a href=\"";
        // line 128
        $this->displayBlock('c', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('cn', $context, $blocks);
        echo "</a></li>
                <li><a href=\"";
        // line 129
        $this->displayBlock('a', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('an', $context, $blocks);
        echo "</a></li>
                <li><a href=\"";
        // line 130
        $this->displayBlock('b', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i>";
        $this->displayBlock('bn', $context, $blocks);
        echo "</a></li>
                <li><a href=\"";
        // line 131
        $this->displayBlock('d', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('dn', $context, $blocks);
        echo "</a></li>
                <li><a href=\"";
        // line 132
        $this->displayBlock('e', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('en', $context, $blocks);
        echo "</a></li>
              </ul>
            </li>
           <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-send\"></i>
                <span>Gestion des candidatures</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 142
        $this->displayBlock('f', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('fn', $context, $blocks);
        echo "</a></li>
                
              </ul>
            </li>
          </ul>
                ";
    }

    // line 128
    public function block_c($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_recherche_projet");
    }

    public function block_cn($context, array $blocks = array())
    {
        echo "Liste des Projets";
    }

    // line 129
    public function block_a($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_list_projet");
    }

    public function block_an($context, array $blocks = array())
    {
        echo "Liste des  Projets non traités";
    }

    // line 130
    public function block_b($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_addprojet");
    }

    public function block_bn($context, array $blocks = array())
    {
        echo "ajouter un Projet";
    }

    // line 131
    public function block_d($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listencours_projet");
    }

    public function block_dn($context, array $blocks = array())
    {
        echo "liste de projet en cours";
    }

    // line 132
    public function block_e($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listtraite_projet");
    }

    public function block_en($context, array $blocks = array())
    {
        echo "liste de projet traite";
    }

    // line 142
    public function block_f($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listconfirmer_projet");
    }

    public function block_fn($context, array $blocks = array())
    {
        echo "valider un freelancer";
    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
    }

    // line 155
    public function block_javascripts($context, array $blocks = array())
    {
        // line 156
        echo "        <!-- jQuery 2.1.3 -->
        <script src=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/ui/1.11.2/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
        <!-- Morris.js') }} charts -->
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Slimscroll -->
        <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- FastClick -->
        <script src='";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
         <script type=\"text/javascript\">
        \$(function () {
            \$(\"#example1\").dataTable();
            \$('#example2').dataTable({
                \"bPaginate\": true,
                \"bLengthChange\": false,
                \"bFilter\": false,
                \"bSort\": true,
                \"bInfo\": true,
                \"bAutoWidth\": false
            });
        });
    </script>
    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  527 => 197,  521 => 194,  515 => 191,  510 => 189,  505 => 187,  500 => 185,  495 => 183,  490 => 181,  485 => 179,  480 => 177,  475 => 175,  471 => 174,  466 => 172,  461 => 170,  457 => 169,  452 => 167,  448 => 166,  444 => 165,  435 => 159,  430 => 157,  427 => 156,  424 => 155,  419 => 154,  408 => 142,  397 => 132,  386 => 131,  375 => 130,  364 => 129,  353 => 128,  341 => 142,  326 => 132,  320 => 131,  314 => 130,  308 => 129,  302 => 128,  291 => 119,  288 => 118,  279 => 148,  277 => 118,  256 => 102,  250 => 99,  242 => 93,  239 => 92,  229 => 81,  223 => 78,  202 => 60,  198 => 59,  193 => 57,  185 => 52,  181 => 51,  173 => 47,  165 => 87,  162 => 47,  159 => 46,  156 => 45,  154 => 44,  142 => 35,  138 => 33,  135 => 32,  129 => 21,  125 => 20,  120 => 18,  114 => 15,  109 => 13,  104 => 11,  99 => 9,  96 => 8,  93 => 7,  88 => 6,  83 => 212,  80 => 155,  77 => 154,  74 => 92,  72 => 32,  66 => 29,  61 => 27,  57 => 26,  52 => 23,  50 => 7,  46 => 6,  39 => 1,);
    }
}
