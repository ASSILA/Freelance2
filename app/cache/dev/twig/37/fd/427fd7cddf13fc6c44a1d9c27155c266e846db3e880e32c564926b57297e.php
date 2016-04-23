<?php

/* ::base2.html.twig */
class __TwigTemplate_37fd427fd7cddf13fc6c44a1d9c27155c266e846db3e880e32c564926b57297e extends Twig_Template
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
            'h' => array($this, 'block_h'),
            'han' => array($this, 'block_han'),
            'g' => array($this, 'block_g'),
            'gbn' => array($this, 'block_gbn'),
            'fg' => array($this, 'block_fg'),
            'fng' => array($this, 'block_fng'),
            'fd' => array($this, 'block_fd'),
            'fda' => array($this, 'block_fda'),
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
        // line 34
        echo "        <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://oss.maxcdn.com/libs/respond.js"), "html", null, true);
        echo "/1.3.0/respond.min.js') }}\"></script>
        <![endif]-->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body class=\"skin-blue fixed\">
        ";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 103
        echo "        ";
        $this->displayBlock('Left_side_column', $context, $blocks);
        // line 165
        echo "    ";
        $this->displayBlock('body', $context, $blocks);
        // line 166
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 211
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
            <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Morris chart -->
            <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- jvectormap -->
            <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Date Picker -->
            <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/datepicker3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Daterange picker -->
            <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker-bs3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- bootstrap wysihtml5 - text editor -->
            <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        ";
    }

    // line 43
    public function block_header($context, array $blocks = array())
    {
        // line 44
        echo "            <header class=\"main-header\">
                <!-- Logo -->
                <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("freelancer_main_profile");
        echo "\" class=\"logo\"><b>Freelancer</b>Profile</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                    <!-- Sidebar toggle button-->
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">Toggle navigation</span>
                    </a>
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 55
        $this->env->loadTemplate("messages.html.twig")->display($context);
        // line 56
        echo "                            ";
        $this->env->loadTemplate("notifications_freelancer.html.twig")->display($context);
        // line 57
        echo "                            ";
        $this->env->loadTemplate("tasks.html.twig")->display($context);
        // line 58
        echo "                            ";
        $this->displayBlock('user_account', $context, $blocks);
        // line 98
        echo "                        </ul>
                    </div>
                </nav>
            </header>
        ";
    }

    // line 58
    public function block_user_account($context, array $blocks = array())
    {
        echo " 
                                <!-- User Account: style can be found in dropdown.less -->
                            <li class=\"dropdown user user-menu\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"user-image\" alt=\"User Image\"/>
                                    <span class=\"hidden-xs\">";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</span>
                                </a>
                                <ul class=\"dropdown-menu\">
                                    <!-- User image -->
                                    <li class=\"user-header\">
                                        <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
                                        <p>
                                            ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
                                            <small>";
        // line 71
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
        // line 89
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" class=\"btn btn-default btn-flat\">Edit Profile</a>
                                        </div>
                                        <div class=\"pull-right\">
                                            <a href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\" class=\"btn btn-default btn-flat\">Déconnxion</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            ";
    }

    // line 103
    public function block_Left_side_column($context, array $blocks = array())
    {
        // line 104
        echo "            <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/img/user2-160x160.jpg"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        // line 129
        $this->displayBlock('x', $context, $blocks);
        // line 159
        echo "                
        </section>
        <!-- /.sidebar -->
      </aside>

        ";
    }

    // line 129
    public function block_x($context, array $blocks = array())
    {
        // line 130
        echo "          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
           <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Gestion Candidature</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 139
        $this->displayBlock('h', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('han', $context, $blocks);
        echo "</a></li>
                <li><a href=\"";
        // line 140
        $this->displayBlock('g', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i>";
        $this->displayBlock('gbn', $context, $blocks);
        echo "</a></li>               
              </ul>
            </li>
          </ul>
                    <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
           <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Listes candidatures</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"";
        // line 153
        $this->displayBlock('fg', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('fng', $context, $blocks);
        echo "</a></li>
                <li><a href=\"";
        // line 154
        $this->displayBlock('fd', $context, $blocks);
        echo "\"><i class=\"fa fa-circle-o\"></i> ";
        $this->displayBlock('fda', $context, $blocks);
        echo "</a></li>
              </ul>
            </li>
          </ul>
                ";
    }

    // line 139
    public function block_h($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listdepose_projet");
    }

    public function block_han($context, array $blocks = array())
    {
        echo "Retirer Candidature";
    }

    // line 140
    public function block_g($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listdispo_projet");
    }

    public function block_gbn($context, array $blocks = array())
    {
        echo "Projets disponibles";
    }

    // line 153
    public function block_fg($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listencoursf_projet");
    }

    public function block_fng($context, array $blocks = array())
    {
        echo "Mes projets en cours";
    }

    // line 154
    public function block_fd($context, array $blocks = array())
    {
        echo $this->env->getExtension('routing')->getPath("freelancer_main_listtraitef_projet");
    }

    public function block_fda($context, array $blocks = array())
    {
        echo "Mes projets terminé";
    }

    // line 165
    public function block_body($context, array $blocks = array())
    {
    }

    // line 166
    public function block_javascripts($context, array $blocks = array())
    {
        // line 167
        echo "        <!-- jQuery 2.1.3 -->
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jQuery/jQuery-2.1.3.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery UI 1.11.2 -->
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://code.jquery.com/ui/1.11.2/jquery-ui.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            \$.widget.bridge('uibutton', \$.ui.button);
        </script>
        <!-- Bootstrap 3.3.2 JS -->
        <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>    
        <!-- Morris.js') }} charts -->
        <script src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/morris/morris.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Sparkline -->
        <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/sparkline/jquery.sparkline.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jvectormap -->
        <script src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/jvectormap/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- jQuery Knob Chart -->
        <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/knob/jquery.knob.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- daterangepicker -->
        <script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- datepicker -->
        <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/datepicker/bootstrap-datepicker.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- iCheck -->
        <script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/iCheck/icheck.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- Slimscroll -->
        <script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/slimScroll/jquery.slimscroll.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <!-- FastClick -->
        <script src='";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("plugins/fastclick/fastclick.min.js"), "html", null, true);
        echo "'></script>
        <!-- AdminLTE App -->
        <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/pages/dashboard.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        <!-- AdminLTE for demo purposes -->
        <script src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/demo.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

    ";
    }

    public function getTemplateName()
    {
        return "::base2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  518 => 208,  512 => 205,  506 => 202,  501 => 200,  496 => 198,  491 => 196,  486 => 194,  481 => 192,  476 => 190,  471 => 188,  466 => 186,  462 => 185,  457 => 183,  452 => 181,  448 => 180,  443 => 178,  439 => 177,  435 => 176,  426 => 170,  421 => 168,  418 => 167,  415 => 166,  410 => 165,  399 => 154,  388 => 153,  377 => 140,  366 => 139,  355 => 154,  349 => 153,  331 => 140,  325 => 139,  314 => 130,  311 => 129,  302 => 159,  300 => 129,  281 => 113,  275 => 110,  267 => 104,  264 => 103,  254 => 92,  248 => 89,  227 => 71,  223 => 70,  218 => 68,  210 => 63,  206 => 62,  198 => 58,  190 => 98,  187 => 58,  184 => 57,  181 => 56,  179 => 55,  167 => 46,  163 => 44,  160 => 43,  154 => 32,  149 => 30,  144 => 28,  139 => 26,  134 => 24,  129 => 22,  125 => 21,  121 => 20,  116 => 18,  110 => 15,  105 => 13,  100 => 11,  95 => 9,  92 => 8,  89 => 7,  84 => 6,  79 => 211,  76 => 166,  73 => 165,  70 => 103,  68 => 43,  62 => 40,  57 => 38,  53 => 37,  48 => 34,  46 => 7,  42 => 6,  35 => 1,);
    }
}
