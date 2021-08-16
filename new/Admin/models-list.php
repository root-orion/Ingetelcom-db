<?php include('head.php'); ?>

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
                                <h4 class="pull-left page-title">Base de donnees </h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Tableau de bord</a></li>
                                    <li><a href="#">Listes</a></li>
                                    <li class="active">Liste des modeles homologues</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>





                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Liste des modeles homologues par l'ARTCI</h3>
                                </div>
                                <div class="panel-body">

                                    <table id="datatable-buttons" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>Marque</th>
                                                <th>Modele</th>
                                                <th>Fabricant</th>
                                                <th>Type</th>
                                                <th>Categorie</th>
                                                <th>Date d'homologation</th>
                                                <th>Date d'expiration</th>
                                                <th>demandeur</th>
                                            </tr>
                                        </thead>


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

    <!-- Datatables-->
    <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/datatables/buttons.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/jszip.min.js"></script>
    <script src="assets/plugins/datatables/pdfmake.min.js"></script>
    <script src="assets/plugins/datatables/vfs_fonts.js"></script>
    <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
    <script src="assets/plugins/datatables/buttons.print.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.fixedHeader.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="assets/plugins/datatables/responsive.bootstrap.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.scroller.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/pages/datatables.init.js"></script>

    <script src="assets/js/app.js"></script>

</body>

</html>