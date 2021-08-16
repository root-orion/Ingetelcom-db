  <!-- ========== Left Sidebar Start ========== -->

  <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">
                <div class="user-details">
                    <div class="text-center">
                        <img src="assets/images/index.jpg" alt="" class="img-circle">
                    </div>
                    <div class="user-info">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo htmlspecialchars($_SESSION["username"]); ?></a>
                            <ul class="dropdown-menu">
                                <!-- <li><a href="javascript:void(0)"> Profile</a></li>
                                <li><a href="javascript:void(0)"> Settings</a></li>
                                <li><a href="javascript:void(0)"> Lock screen</a></li>
                                <li class="divider"></li> -->
                                <li><a href="https://ingetelcom.com/artci/logout.php">Se deconnecter</a></li>
                            </ul>
                        </div>

                        <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
                    </div>
                </div>
                <!--- Divider -->
                <div id="sidebar-menu">
                    <ul>
                        <li>
                            <a href="index.php" class="waves-effect"><i class="ti-home"></i><span> Tableau de bord <span class="badge badge-primary pull-right">ok</span></span></a>
                        </li>
                        <li>
                            <a href="../artci/main/index.php" target="_blank" class="waves-effect"><i class="ti-new-window"></i><span> Espace ARTCI<span class="badge badge-primary pull-right">ok</span</span></a>
                        </li>

                        <!-- <li>
                            <a href="#" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Typography <span class="badge badge-primary pull-right">6</span></span></a>
                        </li> -->

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span>Homologation</span> <span class="pull-right"><span class="badge badge-primary pull-right">ok</span><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="terminaux.php">Liste des models homologues </a></li>
                                <!-- <li><a href="waiting-list.php">Liste d'attente</a></li> -->
                                <!-- <li><a href="#">Panels</a></li>
                                <li><a href="#">Tabs &amp; Accordions</a></li>
                                <li><a href="#">Modals</a></li>
                                <li><a href="#">Components</a></li>
                                <li><a href="#">Progress Bars</a></li>
                                <li><a href="#">Alerts</a></li>
                                <li><a href="#">Sweet-Alert</a></li>
                                <li><a href="#">Grid</a></li> -->
                            </ul>
                        </li>

                        

                        <!-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-write"></i><span> Forms </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#">General Elements</a></li>
                                <li><a href="#">Form Validation</a></li>
                                <li><a href="#">Advanced Form</a></li>
                                <li><a href="#">WYSIWYG Editor</a></li>
                                <li><a href="#">Multiple File Upload</a></li>
                            </ul>
                        </li>-->

                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span>Marquage</span><span class="pull-right"><span class="badge badge-primary pull-right">ok</span><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <!-- <li><a href="supplier-list.php">Liste des fournisseurs</a></li> -->
                                <li><a href="mark-waiting.php">Liste d'attente </a></li>
                                <li><a href="new-mark.php">Enregistrer une demande de marquage</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-menu-alt"></i><span> Listes <span class="badge badge-primary pull-right">ok</span> </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <!-- <li><a href="supplier-list1.php">Fournisseurs</a></li> -->
                                <li><a href="models-list.php">Modeles homologues</a></li>
                                <!-- <li><a href="#">Marques</a></li> -->
                                <li><a href="term_marked.php">Terminaux marques</a></li>
                            </ul>
                        </li>
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-wand"></i> <span> Stickers <span class="badge badge-primary pull-right">ok</span></span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <!-- <li><a href="#">Liste d'impression</a></li> -->
                                <li><a href="impress-waiting.php">Liste d'attente impression</a></li>
                                <!-- <li><a href="#">Ion Icons</a></li>
                                <li><a href="#">Font awesome</a></li>
                                <li><a href="#">Themify Icons</a></li> -->
                            </ul>
                        </li>
<!-- 
                        <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Statistiques </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Morris Chart</a></li>
                                <li><a href="#">Chartjs</a></li>
                                <li><a href="#">Flot Chart</a></li>
                                <li><a href="#">Other Chart</a></li>
                            </ul>
                        </li>  -->

                        <!-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-map-alt"></i><span> Maps </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#"> Google Map</a></li>
                                <li><a href="#"> Vector Map</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="waves-effect"><i class="ti-calendar"></i><span> Calendar <span class="badge badge-primary pull-right">NEW</span></span></a>
                        </li> -->

                        <!-- <li class="has_sub">
                            <a href="javascript:void(0);" class="waves-effect"><i class="ti-files"></i><span> Pages </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="#">Timeline</a></li>
                                <li><a href="#">Invoice</a></li>
                                <li><a href="#">Directory</a></li>
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Recover Password</a></li>
                                <li><a href="#">Lock Screen</a></li>
                                <li><a href="#">Blank Page</a></li>
                                <li><a href="#">Error 404</a></li>
                                <li><a href="#">Error 500</a></li>
                            </ul>
                        </li> -->

                        <!--<li class="has_sub">-->
                        <!--<a href="javascript:void(0);" class="waves-effect"><i class="ti-share"></i><span>Multi Menu </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                        <!--<ul>-->
                        <!--<li class="has_sub">-->
                        <!--<a href="javascript:void(0);" class="waves-effect"><span>Menu Item 1.1</span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>-->
                        <!--<ul style="">-->
                        <!--<li><a href="javascript:void(0);"><span>Menu Item 2.1</span></a></li>-->
                        <!--<li><a href="javascript:void(0);"><span>Menu Item 2.2</span></a></li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--<a href="javascript:void(0);"><span>Menu Item 1.2</span></a>-->
                        <!--</li>-->
                        <!--</ul>-->
                        <!--</li>-->
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->