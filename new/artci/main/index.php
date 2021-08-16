<?php session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>Ingetelcom - Espace ARTCI</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/morrisjs/morris.css" />
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
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

    <div class="overlay"></div>
    <!-- Overlay For Sidebars -->

    <!-- Left Sidebar -->
    <?php include('minileftbar.php'); ?>

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



        <?php include('leftsidebar.php') ?>
    </aside>

    <!-- Main Content -->
    <section class="content home">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Espace ARTCI</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                    <!-- <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group m-b-0">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div> -->
                </div>
            </div>
            <?php require('config.php'); ?>



            <?php
            $result = $link->query("SELECT COUNT(id) FROM `attente_marquage` WHERE demande_status=1 AND marked=0");
            $row1 = $result->fetch_row();

            $query2 = $link->query("SELECT COUNT(id) FROM `attente_marquage` WHERE demande_status=0 AND marked=0");
            $row2 = $query2->fetch_row();



            $query3 = $link->query("SELECT COUNT(id) FROM `modeles_homologues`");
            $row3 = $query3->fetch_row();

            $query4 = $link->query("SELECT COUNT(id) FROM `attente_marquage` WHERE marked=1");
            $row4 = $query4->fetch_row();
            //  echo '#: ', $row[0];
            // echo "there are {$count} rows in the table";

            ?>


            <div class="row clearfix">
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="material-icons zmdi-hc-3x  col-amber">phone_iphone</i></p>
                            <span>Impression de labels en attente</span>
                            <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="<?= $row1[0]  ?>" data-speed="2000" data-fresh-interval="700"><?= $row1[0]  ?></span></h3>
                            <!-- <small class="text-muted">27% lower growth</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x col-blue"></i></p>
                            <span>Demandes de marquage en attente</span>
                            <h3 class="m-b-10 number count-to" data-from="0" data-to="<?= $row2[0]  ?>" data-speed="2000" data-fresh-interval="700"><?= $row2[0]  ?></h3>
                            <!-- <small class="text-muted">88% lower growth</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="material-icons zmdi-hc-3x">store</i></p>
                            <span>Modeles homologues</span>
                            <h3 class="m-b-10 number count-to" data-from="0" data-to="<?= $row3[0]  ?>" data-speed="2000" data-fresh-interval="700"><?= $row3[0]  ?></h3>
                            <!-- <small class="text-muted">38% lower growth</small> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card text-center">
                        <div class="body">
                            <p class="m-b-20"><i class="material-icons zmdi-hc-3x col-green">loyalty</i></p>
                            <span>Terminaux marques</span>
                            <h3 class="m-b-10 number count-to" data-from="0" data-to="<?= $row4[0]  ?>" data-speed="2000" data-fresh-interval="700"><?= $row4[0]  ?></h3>
                            <!-- <small class="text-muted">78% lower growth</small> -->
                        </div>
                    </div>
                </div>
            </div>


            <?php // $row["demande_status"] == 0 ? 'N.A (En attente)' : '' 
            ?>



            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Demande de marquage en attente de validation</strong> </h2>
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
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 302.391px;">Demandeur</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 137.953px;">Ref certificat homologation</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 62.875px;">Pays d'origine</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 129.344px;">nombre labels</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Liste des IMEI</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Liste de No de serie</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Date commercialisation</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Statut demande</th>
                                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 110.859px;">Action</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th rowspan="1" colspan="1">#</th>
                                                        <th rowspan="1" colspan="1">Demandeur</th>
                                                        <th rowspan="1" colspan="1">Ref certificat homologation</th>
                                                        <th rowspan="1" colspan="1">Pays d'origine</th>
                                                        <th rowspan="1" colspan="1">nombre labels</th>
                                                        <th rowspan="1" colspan="1">Liste des IMEI</th>
                                                        <th rowspan="1" colspan="1">Liste de No de serie</th>
                                                        <th rowspan="1" colspan="1">Date commercialisation</th>
                                                        <th rowspan="1" colspan="1">Statut demande</th>
                                                        <th rowspan="1" colspan="1">Action</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>

                                                    <?php
                                                    // Insert the metadata of the order into the database



                                                    $query = "SELECT * FROM attente_marquage WHERE demande_status=0 AND marked=0";
                                                    $result = $link->query($query);


                                                    if ($result->num_rows > 0) {
                                                        // output data of each row
                                                        while ($row = $result->fetch_assoc()) {
                                                    ?>



                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"><?= $row["id"] ?></td>
                                                                <td><?= $row["demandeur"] ?></td>
                                                                <td><?= $row["ref_certificat"] ?></td>
                                                                <td><?= $row["pays_origine"] ?></td>
                                                                <td><?= $row["nbr_terminaux"] ?></td>
                                                                <td><?= $row["start_imei"] ?> - <?= $row["end_imei"] ?></td>
                                                                <td><?= $row["start_serial"] ?> - <?= $row["end_serial"] ?></td>
                                                                <td><?= $row["date_corm"] ?></td>
                                                                <td>N.A (En attente)</td>
                                                                <td><a href="accept_request.php?id='1'"> <button class="btn btn-raised btn-success waves-effect btn-round" data-type="basic">Accepter</button></a>
                                                                   <a href=""><button class="btn btn-raised btn-danger waves-effect btn-round" data-type="basic">Refuser</button></a> 
                                                                </td>
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