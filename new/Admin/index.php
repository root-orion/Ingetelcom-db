<?php include('head.php'); ?>
<?php require('config.php'); ?>
<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include('topbar.php'); ?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <?php include('sidebar.php'); ?>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">

                    <!-- Page-Title -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-header-title">
                                <h4 class="pull-left page-title">Tableau de bord </h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Ingetelcom</a></li>
                                    <li class="active">Tableau de bord</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
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
                    <div class="row">
                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Impressions de labels en attente</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b><?=$row1[0]  ?> </b></h3>
                                    <p class="text-muted"><a href="impress-waiting.php"><b>Afficher</a></b></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Demande de marquage en attente</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b><?=$row2[0]  ?></b></h3>
                                    <p class="text-muted"><a href="mark-waiting.php"><b>Afficher</a></b></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Modeles homologués</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b><?=$row3[0]  ?></b></h3>
                                    <p class="text-muted"><a href="terminaux.php"><b>Afficher</a></b></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="panel panel-primary text-center">
                                <div class="panel-heading">
                                    <h4 class="panel-title">Terminaux marqués</h4>
                                </div>
                                <div class="panel-body">
                                    <h3 class=""><b><?=$row4[0]  ?></b></h3>
                                    <p class="text-muted"><a href="term_marked.php"><b>Afficher</a></b></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                            <div class="col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Revenue</h4>
                                        <ul class="list-inline m-t-30 widget-chart text-center">
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>5248</b></h4>
	                                			<h5 class="text-muted m-b-0">Marketplace</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                                <h4 class=""><b>321</b></h4>
	                                			<h5 class="text-muted m-b-0">Last week</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>964</b></h4>
	                                			<h5 class="text-muted m-b-0">Last Month</h5>
	                                		</li>
	                                	</ul>
                                        <div id="sparkline1" style="margin: 0 -21px -22px -22px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Email Sent</h4>
                                        <ul class="list-inline m-t-30 widget-chart text-center">
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>3654</b></h4>
	                                			<h5 class="text-muted m-b-0">Marketplace</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                                <h4 class=""><b>954</b></h4>
	                                			<h5 class="text-muted m-b-0">Last week</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>8462</b></h4>
	                                			<h5 class="text-muted m-b-0">Last Month</h5>
	                                		</li>
	                                	</ul>
                                        <div id="sparkline2" style="margin: 0 -21px -22px -22px;"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <h4 class="m-t-0">Monthly Subscriptions</h4>
                                        <ul class="list-inline m-t-30 widget-chart text-center">
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>3256</b></h4>
	                                			<h5 class="text-muted m-b-0">Marketplace</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-down-bold-circle text-danger"></i>
                                                <h4 class=""><b>785</b></h4>
	                                			<h5 class="text-muted m-b-0">Last week</h5>
	                                		</li>
	                                		<li>
                                                <i class="mdi mdi-arrow-up-bold-circle text-success"></i>
                                                <h4 class=""><b>1546</b></h4>
	                                			<h5 class="text-muted m-b-0">Last Month</h5>
	                                		</li>
	                                	</ul>
                                        <div id="sparkline3" style="margin: 0 -21px -22px -22px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Demandes de marquage attribues en attente d'impression </h3>
                                </div>
                                <div class="panel-body">
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <!-- <th scope="col">Reference</th> -->
                                                <th scope="col">Demandeur</th>
                                                <th scope="col">Ref certificat homologation</th>
                                                <th scope="col">Pays d'origine</th>
                                                <th scope="col">nombre labels</th>
                                                
                                                <th scope="col">Liste des IMEI</th>
                                                <th scope="col">Liste No de serie</th>
                                                <th scope="col">Date commercialisation</th>

                                                <th scope="col">Statut demande  </th>
                                                <!-- <th scope="col">Action </th> -->
                                                
                                            </tr>
                                        </thead>
                                        


                                        <tbody>

                                            <?php
                                            // Insert the metadata of the order into the database



                                            $query = "SELECT * FROM attente_marquage WHERE demande_status=1";
                                            $result = $link->query($query);


                                            if ($result->num_rows > 0) {
                                                // output data of each row
                                                while ($row = $result->fetch_assoc()) {
                                            ?>




                                                    <tr class="">
                                                        <td><?= $row["id"] ?></td>
                                                        <!-- <td>XXXXX</td> -->
                                                        <td><?= $row["demandeur"] ?></td>
                                                        <td><?= $row["ref_certificat"] ?></td>
                                                        <td><?= $row["pays_origine"] ?></td>  
                                                        <td><?= $row["nbr_terminaux"] ?></td>                                                    
                                                                                            
                                                        <td><?=$row["start_imei"] ?> - <?=$row["end_imei"] ?></td>
                                                        <td><?=$row["start_serial"] ?> - <?=$row["end_serial"] ?></td>
                                                        <td><?= $row["date_corm"] ?></td>


                                                        <td>A (En attente d'impression)</td>
                                                        <!-- <td>XXXXX</td> -->
                                                       

                                                
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

                    </div> <!-- End Row -->


                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                2011 - 2021 © Ingetelcom - powred by Orion soft CIV.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

    <!-- Datatables-->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>

    <script src="assets/pages/dashborad.js"></script>

   

    <!-- Datatables-->
    
   
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>

    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>


</body>

</html>