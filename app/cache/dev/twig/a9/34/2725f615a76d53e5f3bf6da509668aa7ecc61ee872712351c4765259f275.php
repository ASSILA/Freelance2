<?php

/* FreelancerMainBundle:pages:calendar.html.twig */
class __TwigTemplate_a9342725f615a76d53e5f3bf6da509668aa7ecc61ee872712351c4765259f275 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>AdminLTE 2 | Calendar</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href=\"../bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- fullCalendar 2.2.5-->
    <link href=\"../plugins/fullcalendar/fullcalendar.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"../plugins/fullcalendar/fullcalendar.print.css\" rel=\"stylesheet\" type=\"text/css\" media='print' />
    <!-- Theme style -->
    <link href=\"../dist/css/AdminLTE.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href=\"../dist/css/skins/_all-skins.min.css\" rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body class=\"skin-blue\">
    <div class=\"wrapper\">
      
      <header class=\"main-header\">
        <a href=\"../index2.html\" class=\"logo\"><b>Admin</b>LTE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
          <!-- Sidebar toggle button-->
          <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </a>
          <div class=\"navbar-custom-menu\">
            <ul class=\"nav navbar-nav\">
              <!-- Messages: style can be found in dropdown.less-->
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
                            <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class=\"fa fa-clock-o\"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"../dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class=\"fa fa-clock-o\"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"../dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class=\"fa fa-clock-o\"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"../dist/img/user3-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class=\"fa fa-clock-o\"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <div class=\"pull-left\">
                            <img src=\"../dist/img/user4-128x128.jpg\" class=\"img-circle\" alt=\"user image\"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class=\"fa fa-clock-o\"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class=\"dropdown notifications-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <i class=\"fa fa-bell-o\"></i>
                  <span class=\"label label-warning\">10</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <li class=\"header\">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class=\"menu\">
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-aqua\"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-users text-red\"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href=\"#\">
                          <i class=\"fa fa-user text-red\"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class=\"footer\"><a href=\"#\">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
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
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class=\"dropdown user user-menu\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                  <img src=\"../dist/img/user2-160x160.jpg\" class=\"user-image\" alt=\"User Image\"/>
                  <span class=\"hidden-xs\">Alexander Pierce</span>
                </a>
                <ul class=\"dropdown-menu\">
                  <!-- User image -->
                  <li class=\"user-header\">
                    <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
                    <p>
                      Alexander Pierce - Web Developer
                      <small>Member since Nov. 2012</small>
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
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class=\"main-sidebar\">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class=\"sidebar\">
          <!-- Sidebar user panel -->
          <div class=\"user-panel\">
            <div class=\"pull-left image\">
              <img src=\"../dist/img/user2-160x160.jpg\" class=\"img-circle\" alt=\"User Image\" />
            </div>
            <div class=\"pull-left info\">
              <p>Alexander Pierce</p>

              <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action=\"#\" method=\"get\" class=\"sidebar-form\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\"/>
              <span class=\"input-group-btn\">
                <button type='submit' name='seach' id='search-btn' class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class=\"sidebar-menu\">
            <li class=\"header\">MAIN NAVIGATION</li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-dashboard\"></i> <span>Dashboard</span> <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"../index.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v1</a></li>
                <li><a href=\"../index2.html\"><i class=\"fa fa-circle-o\"></i> Dashboard v2</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-files-o\"></i>
                <span>Layout Options</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"layout/top-nav.html\"><i class=\"fa fa-circle-o\"></i> Top Navigation</a></li>
                <li><a href=\"layout/boxed.html\"><i class=\"fa fa-circle-o\"></i> Boxed</a></li>
                <li><a href=\"layout/fixed.html\"><i class=\"fa fa-circle-o\"></i> Fixed</a></li>
                <li><a href=\"layout/collapsed-sidebar.html\"><i class=\"fa fa-circle-o\"></i> Collapsed Sidebar</a></li>
              </ul>
            </li>
            <li>
              <a href=\"widgets.html\">
                <i class=\"fa fa-th\"></i> <span>Widgets</span> <small class=\"label pull-right bg-green\">new</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>Charts</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"charts/morris.html\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                <li><a href=\"charts/flot.html\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                <li><a href=\"charts/inline.html\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-laptop\"></i>
                <span>UI Elements</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"UI/general.html\"><i class=\"fa fa-circle-o\"></i> General</a></li>
                <li><a href=\"UI/icons.html\"><i class=\"fa fa-circle-o\"></i> Icons</a></li>
                <li><a href=\"UI/buttons.html\"><i class=\"fa fa-circle-o\"></i> Buttons</a></li>
                <li><a href=\"UI/sliders.html\"><i class=\"fa fa-circle-o\"></i> Sliders</a></li>
                <li><a href=\"UI/timeline.html\"><i class=\"fa fa-circle-o\"></i> Timeline</a></li>
                <li><a href=\"UI/modals.html\"><i class=\"fa fa-circle-o\"></i> Modals</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-edit\"></i> <span>Forms</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"forms/general.html\"><i class=\"fa fa-circle-o\"></i> General Elements</a></li>
                <li><a href=\"forms/advanced.html\"><i class=\"fa fa-circle-o\"></i> Advanced Elements</a></li>
                <li><a href=\"forms/editors.html\"><i class=\"fa fa-circle-o\"></i> Editors</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-table\"></i> <span>Tables</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"tables/simple.html\"><i class=\"fa fa-circle-o\"></i> Simple tables</a></li>
                <li><a href=\"tables/data.html\"><i class=\"fa fa-circle-o\"></i> Data tables</a></li>
              </ul>
            </li>
            <li class=\"active\">
              <a href=\"calendar.html\">
                <i class=\"fa fa-calendar\"></i> <span>Calendar</span>
                <small class=\"label pull-right bg-red\">3</small>
              </a>
            </li>
            <li>
              <a href=\"mailbox/mailbox.html\">
                <i class=\"fa fa-envelope\"></i> <span>Mailbox</span>
                <small class=\"label pull-right bg-yellow\">12</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-folder\"></i> <span>Examples</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"examples/invoice.html\"><i class=\"fa fa-circle-o\"></i> Invoice</a></li>
                <li><a href=\"examples/login.html\"><i class=\"fa fa-circle-o\"></i> Login</a></li>
                <li><a href=\"examples/register.html\"><i class=\"fa fa-circle-o\"></i> Register</a></li>
                <li><a href=\"examples/lockscreen.html\"><i class=\"fa fa-circle-o\"></i> Lockscreen</a></li>
                <li><a href=\"examples/404.html\"><i class=\"fa fa-circle-o\"></i> 404 Error</a></li>
                <li><a href=\"examples/500.html\"><i class=\"fa fa-circle-o\"></i> 500 Error</a></li>
                <li><a href=\"examples/blank.html\"><i class=\"fa fa-circle-o\"></i> Blank Page</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#\">
                <i class=\"fa fa-share\"></i> <span>Multilevel</span>
                <i class=\"fa fa-angle-left pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
                <li>
                  <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One <i class=\"fa fa-angle-left pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two</a></li>
                    <li>
                      <a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Two <i class=\"fa fa-angle-left pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level Three</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-circle-o\"></i> Level One</a></li>
              </ul>
            </li>
            <li><a href=\"../documentation/index.html\"><i class=\"fa fa-book\"></i> Documentation</a></li>
            <li class=\"header\">LABELS</li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-danger\"></i> Important</a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-warning\"></i> Warning</a></li>
            <li><a href=\"#\"><i class=\"fa fa-circle-o text-info\"></i> Information</a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
          <h1>
            Calendar
            <small>Control panel</small>
          </h1>
          <ol class=\"breadcrumb\">
            <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
            <li class=\"active\">Calendar</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class=\"content\">
          <div class=\"row\">
            <div class=\"col-md-3\">
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h4 class=\"box-title\">Draggable Events</h4>
                </div>
                <div class=\"box-body\">
                  <!-- the events -->
                  <div id='external-events'>
                    <div class='external-event bg-green'>Lunch</div>
                    <div class='external-event bg-yellow'>Go home</div>
                    <div class='external-event bg-aqua'>Do homework</div>
                    <div class='external-event bg-light-blue'>Work on UI design</div>
                    <div class='external-event bg-red'>Sleep tight</div>
                    <div class=\"checkbox\">
                      <label for='drop-remove'>
                        <input type='checkbox' id='drop-remove' />
                        remove after drop
                      </label>
                    </div>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Create Event</h3>
                </div>
                <div class=\"box-body\">
                  <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                    <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                    <ul class=\"fc-color-picker\" id=\"color-chooser\">
                      <li><a class=\"text-aqua\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-teal\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
                      <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-lime\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-fuchsia\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                      <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                    </ul>
                  </div><!-- /btn-group -->
                  <div class=\"input-group\">
                    <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"Event Title\">
                    <div class=\"input-group-btn\">
                      <button id=\"add-new-event\" type=\"button\" class=\"btn btn-primary btn-flat\">Add</button>
                    </div><!-- /btn-group -->
                  </div><!-- /input-group -->
                </div>
              </div>
            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-body no-padding\">
                  <!-- THE CALENDAR -->
                  <div id=\"calendar\"></div>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src=\"../plugins/jQuery/jQuery-2.1.3.min.js\"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src=\"../bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
    <!-- jQuery UI 1.11.1 -->
    <script src=\"https://code.jquery.com/ui/1.11.1/jquery-ui.min.js\" type=\"text/javascript\"></script>
    <!-- Slimscroll -->
    <script src=\"../plugins/slimScroll/jquery.slimscroll.min.js\" type=\"text/javascript\"></script>
    <!-- FastClick -->
    <script src='../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src=\"../dist/js/app.min.js\" type=\"text/javascript\"></script>
    <!-- AdminLTE for demo purposes -->
    <script src=\"../dist/js/demo.js\" type=\"text/javascript\"></script>
    <!-- fullCalendar 2.2.5 -->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js\" type=\"text/javascript\"></script>
    <script src=\"../plugins/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>
    <!-- Page specific script -->
    <script type=\"text/javascript\">
      \$(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
          ele.each(function () {

            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
              title: \$.trim(\$(this).text()) // use the element's text as the event title
            };

            // store the Event Object in the DOM element so we can get to it later
            \$(this).data('eventObject', eventObject);

            // make the event draggable using jQuery UI
            \$(this).draggable({
              zIndex: 1070,
              revert: true, // will cause the event to go back to its
              revertDuration: 0  //  original position after the drag
            });

          });
        }
        ini_events(\$('#external-events div.external-event'));

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
                m = date.getMonth(),
                y = date.getFullYear();
        \$('#calendar').fullCalendar({
          header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay'
          },
          buttonText: {
            today: 'today',
            month: 'month',
            week: 'week',
            day: 'day'
          },
          //Random default events
          events: [
            {
              title: 'All Day Event',
              start: new Date(y, m, 1),
              backgroundColor: \"#f56954\", //red
              borderColor: \"#f56954\" //red
            },
            {
              title: 'Long Event',
              start: new Date(y, m, d - 5),
              end: new Date(y, m, d - 2),
              backgroundColor: \"#f39c12\", //yellow
              borderColor: \"#f39c12\" //yellow
            },
            {
              title: 'Meeting',
              start: new Date(y, m, d, 10, 30),
              allDay: false,
              backgroundColor: \"#0073b7\", //Blue
              borderColor: \"#0073b7\" //Blue
            },
            {
              title: 'Lunch',
              start: new Date(y, m, d, 12, 0),
              end: new Date(y, m, d, 14, 0),
              allDay: false,
              backgroundColor: \"#00c0ef\", //Info (aqua)
              borderColor: \"#00c0ef\" //Info (aqua)
            },
            {
              title: 'Birthday Party',
              start: new Date(y, m, d + 1, 19, 0),
              end: new Date(y, m, d + 1, 22, 30),
              allDay: false,
              backgroundColor: \"#00a65a\", //Success (green)
              borderColor: \"#00a65a\" //Success (green)
            },
            {
              title: 'Click for Google',
              start: new Date(y, m, 28),
              end: new Date(y, m, 29),
              url: 'http://google.com/',
              backgroundColor: \"#3c8dbc\", //Primary (light-blue)
              borderColor: \"#3c8dbc\" //Primary (light-blue)
            }
          ],
          editable: true,
          droppable: true, // this allows things to be dropped onto the calendar !!!
          drop: function (date, allDay) { // this function is called when something is dropped

            // retrieve the dropped element's stored Event Object
            var originalEventObject = \$(this).data('eventObject');

            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = \$.extend({}, originalEventObject);

            // assign it the date that was reported
            copiedEventObject.start = date;
            copiedEventObject.allDay = allDay;
            copiedEventObject.backgroundColor = \$(this).css(\"background-color\");
            copiedEventObject.borderColor = \$(this).css(\"border-color\");

            // render the event on the calendar
            // the last `true` argument determines if the event \"sticks\" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
            \$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

            // is the \"remove after drop\" checkbox checked?
            if (\$('#drop-remove').is(':checked')) {
              // if so, remove the element from the \"Draggable Events\" list
              \$(this).remove();
            }

          }
        });

        /* ADDING EVENTS */
        var currColor = \"#3c8dbc\"; //Red by default
        //Color chooser button
        var colorChooser = \$(\"#color-chooser-btn\");
        \$(\"#color-chooser > li > a\").click(function (e) {
          e.preventDefault();
          //Save color
          currColor = \$(this).css(\"color\");
          //Add color effect to button
          \$('#add-new-event').css({\"background-color\": currColor, \"border-color\": currColor});
        });
        \$(\"#add-new-event\").click(function (e) {
          e.preventDefault();
          //Get value and make sure it is not null
          var val = \$(\"#new-event\").val();
          if (val.length == 0) {
            return;
          }

          //Create events
          var event = \$(\"<div />\");
          event.css({\"background-color\": currColor, \"border-color\": currColor, \"color\": \"#fff\"}).addClass(\"external-event\");
          event.html(val);
          \$('#external-events').prepend(event);

          //Add draggable funtionality
          ini_events(event);

          //Remove event from text input
          \$(\"#new-event\").val(\"\");
        });
      });
    </script>

  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "FreelancerMainBundle:pages:calendar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
