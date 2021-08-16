
<?php session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<?php include ('body/head.php');?>


  <body>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    
<header class="navbar navbar-dark  sticky-top  flex-md-nowrap p-0 shadow" style=" background-color: #ff9f43;">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">ARTCI /  <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav" >
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php" style="color:black">Se déconnecter</a>

    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <?php include ('body/artci-sidebar.php');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button> &nbsp&nbsp
            <a href="dashboard.php"> <button type="button" class="btn btn-sm btn-outline-secondary">Espace Ingetelcom</button> </a>
          </div>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
 -->
      <!-- <h2>Liste des fournisseurs</h2>  -->
      <div class="table-responsive">
   <!--      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Reference</th>
              <th scope="col">Nom</th>
              <th scope="col">Modele homologue</th>
              <th scope="col">Header</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>FA000001</td>
              <td>Ingetelcom</td>
              <td>Iphone 6 </td>
              <td>text</td>
            </tr>
    
           

          </tbody>
        </table> -->
<!-- <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
<!-- <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
<!-- <div class="card text-white bg-success mb-3" style="max-width: 18rem; margin: 10px;">
  <div class="card-header" style="text-align: center;">Terminaux homologués</div>
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">155 000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-danger mb-3" style="max-width: 18rem; margin: 10px;">
  <div class="card-header" style="text-align: center;">Marques</div>
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">160</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-warning mb-3" style="max-width: 18rem; margin: 10px;">
  <div class="card-header" style="text-align: center;">Fournisseurs</div>
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">155</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
<!-- <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
<!-- <div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->
<!-- <div class="card text-white bg-dark mb-3" style="max-width: 18rem; margin: 10px;">
  <div class="card-header" style="text-align: center;">File d'attente</div>
  <div class="card-body">
    <h5 class="card-title" style="text-align: center;">255</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div> -->

<div class="container">
    <div class="row">



      <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="text-align: center;">Sticker imprimés</h6>
                    <h2 class="text-right"><i class="fa fa-qrcode f-left" style="margin: 5px 60px 0px 0px;"></i><span>486</span></h2>
                    <p class="m-b-0">Liste d'attente<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="text-align: center;">Fournisseurs</h6>
                    <h2 class="text-right"><i class="fa fa-users f-left" style="margin: 5px 60px 0px 0px;" ></i><span>486</span></h2>
                    <p class="m-b-0">Liste d'attente<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="text-align: center;">Terminaux homologués</h6>
                    <h2 class="text-right"><i class="fa fa-mobile f-left" style="margin: 5px 60px 0px 0px;"></i><span>486</span></h2>
                    <p class="m-b-0">Liste d'attente<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="text-align: center;">Modeles homologués</h6>
                    <h2 class="text-right"><i class="fa fa-check f-left" style="margin: 5px 60px 0px 0px;"></i><span>486</span></h2>
                    <p class="m-b-0">Liste d'attente<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 col-xl-3">
            <div class="card bg-c-pink order-card">
                <div class="card-block">
                    <h6 class="m-b-20" style="text-align: center;">Marques</h6>
                    <h2 class="text-right"><i class="fa fa-apple f-left" style="margin: 5px 60px 0px 0px;"></i><span>486</span></h2>
                    <p class="m-b-0">Liste d'attente<span class="f-right">351</span></p>
                </div>
            </div>
        </div>
  </div>
</div>










    </main>

  </div>

</div>
<style type="text/css">
  body{
    /*margin-top:20px;*/
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
