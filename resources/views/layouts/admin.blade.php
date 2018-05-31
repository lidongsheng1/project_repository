<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="admin/img/favicon_1.ico">

        <title>Velonic - Responsive Admin Dashboard Template</title>

        <!-- Bootstrap core CSS -->
        <link href="admin/css/bootstrap.min.css" rel="stylesheet">
        <link href="admin/css/bootstrap-reset.css" rel="stylesheet">

        <!--Animation css-->
        <link href="admin/css/animate.css" rel="stylesheet">

        <!--Icon-fonts css-->
        <link href="admin/css/font-awesome.css" rel="stylesheet" />
        <link href="admin/css/ionicons.min.css" rel="stylesheet" />
        <link href="admin/css/material-design-iconic-font.min.css" rel="stylesheet" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="admin/css/morris.css">

        <!-- sweet alerts -->
        <link href="admin/css/sweet-alert.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="admin/css/style.css" rel="stylesheet">
        <link href="admin/css/helper.css" rel="stylesheet">
        


        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
          <script src="admin/js/html5shiv.js"></script>
          <script src="admin/js/respond.min.js"></script>
        <![endif]-->

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-62751496-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>


    <body>

        <!-- Aside Start-->
        <aside class="left-panel">

            <!-- brand -->
            <div class="logo">
                <a href="admin/index.html" class="logo-expanded">
                    <i class="ion-social-buffer"></i>
                    <span class="nav-label">CtoBlog</span>
                </a>
            </div>
            <!-- / brand -->
        
            <!-- Navbar Start -->
            <nav class="navigation">
                <ul class="list-unstyled">
                    <li class="active"><a href="admin/index.html"><i class="zmdi zmdi-view-dashboard"></i> <span class="nav-label">Dashboard</span></a></li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-format-underlined"></i> <span class="nav-label">Users</span><span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin/ui-typography.html">List</a></li>
                            <li><a href="admin/ui-buttons.html">Create</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-help-outline"></i> <span class="nav-label">Questions</span><span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin/ui-typography.html">List</a></li>
                            <li><a href="admin/ui-buttons.html">Create</a></li>
                            <li><a href="admin/ui-buttons.html">recycle</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-label"></i> <span class="nav-label">Topics</span><span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin/ui-typography.html">List</a></li>
                            <li><a href="admin/ui-buttons.html">Create</a></li>
                            <li><a href="admin/ui-buttons.html">recycle</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-assignment"></i> <span class="nav-label">Articles</span><span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin/ui-typography.html">List</a></li>
                            <li><a href="admin/ui-buttons.html">Create</a></li>
                            <li><a href="admin/ui-buttons.html">recycle</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi ion-settings"></i> <span class="nav-label">Config</span><span class="menu-arrow"></span></a>
                        <ul class="list-unstyled">
                            <li><a href="admin/ui-typography.html">List</a></li>
                            <li><a href="admin/ui-buttons.html">Create</a></li>
                            <li><a href="admin/ui-buttons.html">recycle</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
                
        </aside>
        <!-- Aside Ends-->


        <!--Main Content Start -->
        <section class="content">
            
            <!-- Header -->
            <header class="top-head container-fluid">
                <button type="button" class="navbar-toggle pull-left">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <!-- Search -->
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                  <input type="text" placeholder="Search..." class="form-control">
                  <a href="admin/"><i class="fa fa-search"></i></a>
                </form>
                
                <!-- Left navbar -->
                <nav class=" navbar-default" role="navigation">
                    <ul class="nav navbar-nav hidden-xs">
                        <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="admin/#">English <span class="caret"></span></a>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="admin/#">German</a></li>
                                <li><a href="admin/#">French</a></li>
                                <li><a href="admin/#">Italian</a></li>
                                <li><a href="admin/#">Spanish</a></li>
                            </ul>
                        </li>
                        <li><a href="admin/#">Files</a></li>
                    </ul>

                    <!-- Right navbar -->
                    <ul class="nav navbar-nav navbar-right top-menu top-right-menu">  
                        <!-- mesages -->  
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="admin/#">
                                <i class="zmdi zmdi-email-open"></i>
                                <span class="badge badge-sm up bg-purple count">4</span>
                            </a>
                            <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5001">
                                <li>
                                    <p>Messages</p>
                                </li>
                                <li>
                                    <a href="admin/#">
                                        <span class="pull-left"><img src="admin/picture/avatar-2.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 seconds ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/#">
                                        <span class="pull-left"><img src="admin/picture/avatar-3.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">3 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/#">
                                        <span class="pull-left"><img src="admin/picture/avatar-4.jpg" class="img-circle thumb-sm m-r-15" alt="img"></span>
                                        <span class="block"><strong>John smith</strong></span>
                                        <span class="media-body block">New tasks needs to be done<br><small class="text-muted">10 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <p><a href="admin/inbox.html" class="text-right">See all Messages</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- /messages -->
                        <!-- Notification -->
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="admin/#">
                                <i class="zmdi zmdi-notifications-none"></i>
                                <span class="badge badge-sm up bg-pink count">3</span>
                            </a>
                            <ul class="dropdown-menu extended fadeInUp animated nicescroll" tabindex="5002">
                                <li class="noti-header">
                                    <p>Notifications</p>
                                </li>
                                <li>
                                    <a href="admin/#">
                                        <span class="pull-left"><i class="fa fa-user-plus fa-2x text-info"></i></span>
                                        <span>New user registered<br><small class="text-muted">5 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/#">
                                        <span class="pull-left"><i class="fa fa-diamond fa-2x text-primary"></i></span>
                                        <span>Use animate.css<br><small class="text-muted">5 minutes ago</small></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="admin/#">
                                        <span class="pull-left"><i class="fa fa-bell-o fa-2x text-danger"></i></span>
                                        <span>Send project demo files to client<br><small class="text-muted">1 hour ago</small></span>
                                    </a>
                                </li>
                                
                                <li>
                                    <p><a href="admin/#" class="text-right">See all notifications</a></p>
                                </li>
                            </ul>
                        </li>
                        <!-- /Notification -->

                        <!-- user login dropdown start-->
                        <li class="dropdown text-center">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="admin/#">
                                <img alt="" src="admin/picture/avatar-2.jpg" class="img-circle profile-img thumb-sm">
                                <span class="username">John Deo </span> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu pro-menu fadeInUp animated" tabindex="5003" style="overflow: hidden; outline: none;">
                                <li><a href="admin/profile.html"><i class="fa fa-briefcase"></i>Profile</a></li>
                                <li><a href="admin/#"><i class="fa fa-cog"></i> Settings</a></li>
                                <li><a href="admin/#"><i class="fa fa-bell"></i> Friends <span class="label label-info pull-right mail-info">5</span></a></li>
                                <li><a href="admin/#"><i class="fa fa-sign-out"></i> Log Out</a></li>
                            </ul>
                        </li>
                        <!-- user login dropdown end -->       
                    </ul>
                    <!-- End right navbar -->
                </nav>
                
            </header>
            <!-- Header Ends -->


            <!-- Page Content Start -->
            <!-- ================== -->

            <div class="wraper container-fluid">
                <div class="page-title"> 
                    <h3 class="title">Welcome !</h3> 
                </div>
            </div>
            <!-- Page Content Ends -->
            <!-- ================== -->

            <!-- Footer Start -->
            <footer class="footer">
                2016 © Velonic.
            </footer>
            <!-- Footer Ends -->



        </section>
        <!-- Main Content Ends -->
        


        <!-- js placed at the end of the document so the pages load faster -->
        <script src="admin/js/jquery.js"></script>
        <script src="admin/js/bootstrap.min.js"></script>
        <script src="admin/js/modernizr.min.js"></script>
        <script src="admin/js/pace.min.js"></script>
        <script src="admin/js/wow.min.js"></script>
        <script src="admin/js/jquery.scrollto.min.js"></script>
        <script src="admin/js/jquery.nicescroll.js" type="text/javascript"></script>

        <!-- Counter-up -->
        <script src="admin/js/waypoints.min.js" type="text/javascript"></script>
        <script src="admin/js/jquery.counterup.min.js" type="text/javascript"></script>

         <!-- sparkline --> 
        <script src="admin/js/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="admin/js/chart-sparkline.js" type="text/javascript"></script> 

        <!-- skycons -->
        <script src="admin/js/skycons.min.js" type="text/javascript"></script>
    
        <!--Morris Chart-->
        <script src="admin/js/morris.min.js"></script>
        <script src="admin/js/raphael.min.js"></script>


        <script src="admin/js/jquery.app.js"></script>
        
        <!-- Dashboard -->
        <script src="admin/js/jquery.dashboard.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                /* Counter Up */
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
            /* BEGIN SVG WEATHER ICON */
            if (typeof Skycons !== 'undefined'){
            var icons = new Skycons(
                {"color": "#fff"},
                {"resizeClear": true}
                ),
                    list  = [
                        "clear-day", "clear-night", "partly-cloudy-day",
                        "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                        "fog"
                    ],
                    i;

                for(i = list.length; i--; )
                icons.set(list[i], list[i]);
                icons.play();
            };
        </script>

    

    </body>
</html>
