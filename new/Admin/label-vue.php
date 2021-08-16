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
                                <h4 class="pull-left page-title">Details impression de labels. Commande au nom de : <?= $_GET['supplier'] ?> , Nombre de marqueurs : <?= $_GET['nbr'] ?> </h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Tableau de bord</a></li>
                                    <li><a href="#">Stickers</a></li>
                                    <li class="active">Details</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>



                    <!-- end row -->

                    <div class="row">
                        <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>


                        <?php
                        // Insert the metadata of the order into the database



                        $query = "SELECT * FROM attente_marquage WHERE demande_status=1 AND marked=0 AND id={$_GET['id']}";
                        $result = $link->query($query);


                        if ($result->num_rows > 0) {
                            $counter = 0;
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                while ($counter < $_GET['nbr']) {
                                    $string_id=  (String)$row["id"] ;


                        ?>


                                    <div class="col-lg-3">
                                        <div class="panel panel-color panel-info" style="text-align:center">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">Label </h3>
                                            </div>
                                            <div class="panel-body">

                                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
                                                <div id="qrcode-<?= $counter ?>" class="qr" style="text-align:center;"></div>
                                                <script type="text/javascript">
                                                    var qrcode = new QRCode(document.getElementById("qrcode-<?= $counter ?>"), {
                                                        text: "Conforme,demande no: <?= $string_id?>,<?= $row["demandeur"] ?>,<?= $row["ref_certificat"] ?>,<?= $row["pays_origine"] ?>",
                                                        width: 128,
                                                        height: 128,
                                                        colorDark: "#5868bf",
                                                        colorLight: "#ffffff",
                                                        correctLevel: QRCode.CorrectLevel.H
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>

                        <?php
                                    $counter++;
                                }

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


                    </div>





                </div> <!-- container -->

            </div> <!-- content -->

            <footer class="footer">
                2011 - 2021 © Ingetelcom - powred by Orion soft CIV.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <style type="text/css">
        .qr {
            margin: 15px;
        }
    </style>
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

    <script src="assets/js/app.js"></script>

</body>

</html>