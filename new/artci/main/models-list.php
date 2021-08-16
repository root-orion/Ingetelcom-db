<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>Ingetelcom - Espace ARTCI</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>

<body class="theme-black">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="assets/images/logo.svg" width="48" height="48" alt="Alpino"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay_menu">
        <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
        <div class="container">
            <div class="row clearfix">
                <div class="card">
                    <div class="body">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card links">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>App</h6>
                                <ul class="list-unstyled">
                                    <li><a href="mail-inbox.html">Inbox</a></li>
                                    <li><a href="chat.html">Chat</a></li>
                                    <li><a href="events.html">Calendar</a></li>
                                    <li><a href="file-dashboard.html">File Manager</a></li>
                                    <li><a href="contact.html">Contact list</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>User Interface (UI)</h6>
                                <ul class="list-unstyled">
                                    <li><a href="ui_kit.html">UI KIT</a></li>
                                    <li><a href="tabs.html">Tabs</a></li>
                                    <li><a href="range-sliders.html">Range Sliders</a></li>
                                    <li><a href="modals.html">Modals</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="dialogs.html">Dialogs</a></li>
                                    <li><a href="collapse.html">Collapse</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>Sample Pages</h6>
                                <ul class="list-unstyled">
                                    <li><a href="image-gallery.html">Image Gallery</a> </li>
                                    <li><a href="profile.html">Profile</a></li>
                                    <li><a href="timeline.html">Timeline</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="invoices.html">Invoices</a></li>
                                    <li><a href="faqs.html">FAQs</a></li>
                                    <li><a href="search-results.html">Search Results</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12">
                                <h6>About</h6>
                                <ul class="list-unstyled">
                                    <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                    <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                    <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                    <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                    <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="social">
                        <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                        <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                        <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                        <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>
                        <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
    <!-- Overlay For Sidebars -->

    <!-- Left Sidebar -->
    <?php include('minileftbar.php') ?>

    <aside class="right_menu">
        <div class="menu-app">
            <div class="slim_scroll">
                <div class="card">
                    <div class="header">
                        <h2><strong>App</strong> Menu</h2>
                    </div>
                    <div class="body">
                        <ul class="list-unstyled menu">
                            <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                            <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File Manager</span></a></li>
                            <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                            <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="notif-menu">
            <div class="slim_scroll">
                <div class="card">
                    <div class="header">
                        <h2><strong>Messages</strong></h2>
                    </div>
                    <div class="body">
                        <ul class="messages list-unstyled">
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Alexander <small class="time">35min ago</small></span>
                                            <p class="message">New tasks needs to be done</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Grayson <small class="time">1hr ago</small></span>
                                            <p class="message">New tasks needs to be done</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">Sophia <small class="time">31min ago</small></span>
                                            <p class="message">New tasks needs to be done</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Notifications</strong></h2>
                    </div>
                    <div class="body">
                        <ul class="notification list-unstyled">
                            <li>
                                <i class="zmdi zmdi-balance-wallet text-success"></i>
                                <strong>+$30 New sale</strong>
                                <p><a href="javascript:void(0)">Admin Template</a></p>
                                <small class="text-muted">7 min ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-edit text-info"></i>
                                <strong>You Edited file</strong>
                                <p><a href="javascript:void(0)">Docs.doc</a></p>
                                <small class="text-muted">15 min ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-delete text-danger"></i>
                                <strong>Project removed</strong>
                                <p><a href="javascript:void(0)">AdminX BS4</a></p>
                                <small class="text-muted">1 hours ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-account text-success"></i>
                                <strong>New user</strong>
                                <p><a href="javascript:void(0)">UI Designer</a></p>
                                <small class="text-muted">1 hours ago</small>
                            </li>
                            <li>
                                <i class="zmdi zmdi-flag text-warning"></i>
                                <strong>Alpino v1.0.0 is available</strong>
                                <p><a href="javascript:void(0)">Update now</a></p>
                                <small class="text-muted">5 hours ago</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="task-menu">
            <div class="slim_scroll">
                <div class="card tasks">
                    <div class="header">
                        <h2><strong>Project</strong> Status</h2>
                    </div>
                    <div class="body m-b-10">
                        <a href="javascript:void(0);">
                            <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                            <div class="progress">
                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                            </div>
                            <ul class="list-unstyled team-info">
                                <li class="m-r-15"><small class="text-muted">Team</small></li>
                                <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                            </ul>
                        </a>
                    </div>
                    <div class="body m-b-10">
                        <a href="javascript:void(0);">
                            <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                            <div class="progress">
                                <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                            </div>
                            <ul class="list-unstyled team-info">
                                <li class="m-r-15"><small class="text-muted">Team</small></li>
                                <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                            </ul>
                        </a>
                    </div>
                    <div class="body">
                        <a href="javascript:void(0);">
                            <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                            <div class="progress">
                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                            </div>
                            <ul class="list-unstyled team-info">
                                <li class="m-r-15"><small class="text-muted">Team</small></li>
                                <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                <li><img src="assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                            </ul>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
            </ul>
            <div class="tab-content slim_scroll">
                <div class="tab-pane slideRight active" id="setting">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Colors</strong> Skins</h2>
                        </div>
                        <div class="body">
                            <ul class="choose-skin list-unstyled m-b-0">
                                <li data-theme="black" class="active">
                                    <div class="black"></div>
                                </li>
                                <li data-theme="purple">
                                    <div class="purple"></div>
                                </li>
                                <li data-theme="blue">
                                    <div class="blue"></div>
                                </li>
                                <li data-theme="cyan">
                                    <div class="cyan"></div>
                                </li>
                                <li data-theme="green">
                                    <div class="green"></div>
                                </li>
                                <li data-theme="orange">
                                    <div class="orange"></div>
                                </li>
                                <li data-theme="blush">
                                    <div class="blush"></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>General</strong> Settings</h2>
                        </div>
                        <div class="body">
                            <ul class="setting-list list-unstyled m-b-0">
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">Report Panel Usage</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox2" type="checkbox" checked="">
                                        <label for="checkbox2">Email Redirect</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3">Notifications</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4">Auto Updates</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox">
                                        <input id="checkbox5" type="checkbox" checked="">
                                        <label for="checkbox5">Offline</label>
                                    </div>
                                </li>
                                <li>
                                    <div class="checkbox m-b-0">
                                        <input id="checkbox6" type="checkbox">
                                        <label for="checkbox6">Location Permission</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2><strong>Left</strong> Menu</h2>
                        </div>
                        <div class="body theme-light-dark">
                            <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane slideLeft" id="activity">
                    <div class="card activities">
                        <div class="header">
                            <h2><strong>Recent</strong> Activity Feed</h2>
                        </div>
                        <div class="body">
                            <div class="streamline b-accent">
                                <div class="sl-item">
                                    <div class="sl-content">
                                        <div class="text-muted">Just now</div>
                                        <p>Finished task <a href="" class="text-info">#features 4</a>.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-info">
                                    <div class="sl-content">
                                        <div class="text-muted">10:30</div>
                                        <p><a href="">@Jessi</a> retwit your post</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">12:30</div>
                                        <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">1 days ago</div>
                                        <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">2 days ago</div>
                                        <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">3 days ago</div>
                                        <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">4 Week ago</div>
                                        <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">5 days ago</div>
                                        <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">5 Week ago</div>
                                        <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-primary">
                                    <div class="sl-content">
                                        <div class="text-muted">3 Week ago</div>
                                        <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the detail.</p>
                                    </div>
                                </div>
                                <div class="sl-item b-warning">
                                    <div class="sl-content">
                                        <div class="text-muted">1 Month ago</div>
                                        <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include('leftsidebar.php') ?>
    </aside>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Espace ARTCI</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Homologation</a></li>
                            <li class="breadcrumb-item active">Liste des modeles homologues</li>
                        </ul>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <!-- <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Basic Examples -->


            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Liste des modeles homologues par l'ARTCI</strong> </h2>
                            <!-- <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <!-- <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select> entries</label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 192.234px;">#</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 302.391px;">Nom</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.953px;">Marque</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 62.875px;">Modele</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 129.344px;">Fabricant</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Type</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Categorie</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Date d'homologation</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Date d'expiration</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Demandeur</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Nom</th>
                                                        <th>Marque </th>
                                                        <th>Modele</th>
                                                        <th>Fabricant</th>
                                                        <th>Type</th>
                                                        <th>Categorie</th>
                                                        <th>Date d'homologation</th>
                                                        <th>Date d'expiration</th>
                                                        <th>Demandeur</th>
                                                    </tr>
                                                </tfoot>
                                                <?php require('config.php'); ?>
                                                <tbody>

                                                    <?php
                                                    // Insert the metadata of the order into the database



                                                    $query = "SELECT * FROM modeles_homologues";
                                                    $result = $link->query($query);


                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>




                                                            <tr class="">
                                                                <td><?= $row["id"] ?></td>
                                                                <!-- <td>XXXXX</td> -->
                                                                <td><?= $row["t_nom_corm"] ?></td>
                                                                <td><?= $row["t_marque"] ?></td>
                                                                <td><?= $row["t_Model"] ?></td>
                                                                <td><?= $row["t_fabricant"] ?></td>
                                                                <td><?= $row["t_type"] ?></td>
                                                                <td><?= $row["t_categorie"] ?></td>
                                                                <td><?= $row["t_date_homologation"] ?></td>
                                                                <td><?= $row["t_date_exp"] ?></td>
                                                                <td><?= $row["t_demandeur"] ?></td>
                                                            </tr>




                                                    <?php



                                                            // echo "id: " . $row["id"]. " - Name: " . $row["nom"]. " " . $row["lastname"]. "<br>";
                                                        }
                                                    } else {
                                                        echo "0 results";
                                                    }
                                                    // while($row = mysql_fetch_assoc($result))
                                                    // {
                                                    //    echo $row['nom']." ";
                                                    //    echo $row['email']." ";
                                                    // }

                                                    // $preparedStatement->execute([
                                                    //     'name' => $name,
                                                    //     'address' => $address,
                                                    //     'telephone' => $telephone,
                                                    //     'created_at' => time(),
                                                    // ]);

                                                    ?>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Jquery Core Js -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->
    <script src="assets/bundles/vendorscripts.bundle.js"></script>
    <!-- Lib Scripts Plugin Js -->

    <!-- Jquery DataTable Plugin Js -->
    <script src="assets/bundles/datatablescripts.bundle.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="assets/plugins/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/pages/tables/jquery-datatable.js"></script>
</body>

</html>