<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>Instania</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="AdminDesigns - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
           <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="blank-page">

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
        <header class="navbar navbar-fixed-top">
            <div class="navbar-branding">
                <a class="navbar-brand" href="dashboard.html">
                    <b>Insta</b>Nia
                </a>
                <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
            </div>
            <ul class="nav navbar-nav navbar-right">



                <li class="dropdown">
                    <a href="layout_content-blank.html#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <img src="{{asset('assets/img/avatars/1.jpg')}}" alt="avatar" class="mw30 br64 mr15"> John.Smith
                        <span class="caret caret-tp hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
                        <li class="list-group-item">
                            <a href="{{route('log_out')}}" class="animated animated-short fadeInUp">
                                <span class="fa fa-power-off"></span> Logout </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </header>
        <!-- End: Header -->

        <!-- Start: Sidebar -->
        <aside id="sidebar_left" class="nano nano-primary affix">

            <!-- Start: Sidebar Left Content -->
            <div class="sidebar-left-content nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">

                    <!-- Sidebar Widget - Menu (Slidedown) -->
                    <div class="sidebar-widget menu-widget">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicon glyphicon-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicon glyphicon-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicon glyphicon-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="fa fa-desktop"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="fa fa-gears"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="fa fa-flask"></span>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Author (hidden)  -->
                    <div class="sidebar-widget author-widget hidden">
                        <div class="media">
                            <a class="media-left" href="layout_content-blank.html#">
                                <img src="{{asset('assets/img/avatars/3.jpg')}}" class="img-responsive">
                            </a>
                            <div class="media-body">
                                <div class="media-links">
                                    <a href="layout_content-blank.html#" class="sidebar-menu-toggle">User Menu -</a>
                                    <a href="pages_login(alt).html">Logout</a>
                                </div>
                                <div class="media-author">Michael Richards</div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar Widget - Search (hidden) -->
                    <div class="sidebar-widget search-widget hidden">
                        <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-search"></i>
                            </span>
                            <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
                        </div>
                    </div>

                </header>
                <!-- End: Sidebar Header -->

                <!-- Start: Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">InstaNIA</li>
                    <li class="sidebar-label pt15">Modules</li>

                    <li>
                        <a class="accordion-toggle" href="layout_content-blank.html#">
                            <span class="glyphicon glyphicon-fire"></span>
                            <span class="sidebar-title">User Management</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                          <!-- foradmin -->
                            <li>
                                <a href="{{route('addingstaff')}}">
                                    <span class="glyphicon glyphicon-book"></span>Create Staff </a>
                            </li>
                            <li>
                                <a href="ward">
                                    <span class="glyphicon glyphicon-modal-window"></span>Ward </a>
                            </li>
                            <li>
                                <a href="hospital">
                                    <span class="glyphicon glyphicon-equalizer"></span>Hospital </a>
                            </li>
                            <!-- endadmin -->
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle" href="layout_content-blank.html#">
                            <span class="glyphicon glyphicon-check"></span>
                            <span class="sidebar-title">Patient Management</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                              <!-- reception -->
                                <a href="register">
                                    <span class="glyphicon glyphicon-edit"></span> Register Patient </a>
                            </li>
                            <li>
                                <a href="admit">
                                    <span class="glyphicon glyphicon-calendar"></span>Admit Patient </a>
                            </li>
                            <!-- endreception -->
                            <!-- pharmacy -->
                            <li>
                                <a href="prescribe">
                                    <span class="glyphicon glyphicon-check"></span>Prescribes </a>
                            </li>
                            <!-- endpharmacy -->
                            <!-- patient -->
                            <li>
                                <a href="appointment">
                                    <span class="fa fa-desktop"></span>Appointment </a>
                            </li>
                            <li>
                                <a href="file">
                                    <span class="fa fa-clipboard"></span> File</a>
                            </li>
                            <!-- endpatient -->
                            <!-- nurse -->
                            <li>
                                <a href="check">
                                    <span class="fa fa-clipboard"></span> Patient Vitals</a>
                            </li>
                            <!-- endnurse -->
                            <!-- Labtech -->
                            <li>
                                <a href="lab">
                                    <span class="fa fa-clipboard"></span>Lab</a>
                            </li>
                            <!-- endlabtech -->
                            <!-- doctor -->
                            <li>
                                <a href="diagnosis">
                                    <span class="fa fa-clipboard"></span> Diagnosis</a>
                            </li>
                            <li>
                                <a href="labrequest">
                                    <span class="fa fa-clipboard"></span> LabRequest</a>
                            </li>
                            <li>
                                <a href="patientfile">
                                    <span class="fa fa-clipboard"></span> Patient File</a>
                            </li>
                            <li>
                                <a href="prescription">
                                    <span class="fa fa-clipboard"></span> Prescription</a>
                            </li>
                            <!-- enddoctor -->
                        </ul>
                    </li>






                    <!-- sidebar resources -->



                    <!-- sidebar bullets -->



                </ul>
                <!-- End: Sidebar Menu -->

                <!-- Start: Sidebar Collapse Button -->
                <div class="sidebar-toggle-mini">
                    <a href="layout_content-blank.html#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
                <!-- End: Sidebar Collapse Button -->

            </div>
            <!-- End: Sidebar Left Content -->

        </aside>

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="layout_content-blank.html#" class="metro-tile">
                            <span class="metro-icon glyphicon glyphicon-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="layout_content-blank.html#" class="metro-tile">
                            <span class="metro-icon glyphicon glyphicon-user"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="layout_content-blank.html#" class="metro-tile">
                            <span class="metro-icon glyphicon glyphicon-headphones"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="layout_content-blank.html#" class="metro-tile">
                            <span class="metro-icon fa fa-gears"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="layout_content-blank.html#" class="metro-tile">
                            <span class="metro-icon glyphicon glyphicon-facetime-video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="layout_content-blank.html#" class="metro-tile">
                            <span class="metro-icon glyphicon glyphicon-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar" class="hidden">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                            <a href="dashboard.html">Dashboard</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">
                            <a href="dashboard.html">Home</a>
                        </li>
                        <li class="crumb-trail">Dashboard</li>
                    </ol>
                </div>
                <div class="topbar-right">
                    <div class="ib topbar-dropdown">
                        <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
                        <select id="topbar-multiple" class="hidden">
                            <optgroup label="Filter By:">
                                <option value="1-1">Last 30 Days</option>
                                <option value="1-2" selected="selected">Last 60 Days</option>
                                <option value="1-3">Last Year</option>
                            </optgroup>
                        </select>
                    </div>
                    <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                        <a href="layout_content-blank.html#" class="pl5">
                            <i class="fa fa-sign-in fs22 text-primary"></i>
                            <span class="badge badge-hero badge-danger">3</span>
                        </a>
                    </div>
                </div>
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content" class="animated fadeIn">


                <!-- Demo Text Content -->
              @yield('content')


            </section>
            <!-- End: Content -->

        </section>

        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano affix">

            <!-- Start: Sidebar Right Content -->
            <div class="sidebar-right-content nano-content p15">
                <h5 class="title-divider text-muted mb20"> Server Statistics
                    <span class="pull-right"> 2013
                        <i class="fa fa-caret-down ml5"></i>
                    </span>
                </h5>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                        <span class="fs11">DB Request</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                        <span class="fs11 text-left">Server Load</span>
                    </div>
                </div>
                <div class="progress mh5">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                        <span class="fs11 text-left">Server Connections</span>
                    </div>
                </div>





            </div>

        </aside>
        <!-- End: Right Sidebar -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery_migrate/jquery-migrate-3.0.0.min.js')}}"></script>
    <script src="{{asset('assets/js/demo/demo.js')}}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           <!-- DataTables -->
           <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
           <!-- Bootstrap JavaScript -->

    <!-- Theme Javascript -->
    <script src="{{asset('assets/js/utility/utility.js')}}"></script>
    <script src="{{asset('assets/js/demo/demo.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script type="text/javascript">
    jQuery(document).ready(function() {

        "use strict";

        // Init Theme Core
        Core.init();

    });
    </script>

    @stack('scripts')
    <!-- END: PAGE SCRIPTS -->

</body>

</html>
