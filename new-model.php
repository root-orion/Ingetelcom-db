
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
        <h1 class="h2">Homologation - Demande de marquage</h1>
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
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
    <div class="card-body">
        <div class="account-settings">
            <div class="user-profile">
                <div class="user-avatar">
                    <img src="img/smartphone.png" alt="nouveau modele">
                </div>
                <h5 class="user-name">Nouveau model</h5>
                <h6 class="user-email">info@ingetelcom.ci</h6>
            </div>
            <div class="about">
                <h5>Avertissement</h5>
                <p>L'enregistrement des terminaux sera validé après vérification sur le terrain.</p>
            </div>
        </div>
    </div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
    <div class="card-body">
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mb-2 text-primary">Details du Modèle</h6>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="fullName">Marque</label>
                    <input type="text" class="form-control" id="fullName" placeholder="ex: Samsung">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="eMail">Modèle</label>
                    <input type="email" class="form-control" id="eMail" placeholder="ex: Samsung S8">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="phone">Tel</label>
                    <input type="text" class="form-control" id="phone" placeholder="Enter phone number">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="website">Site web</label>
                    <input type="url" class="form-control" id="website" placeholder="Website url">
                </div>
            </div>
        </div>
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h6 class="mt-3 mb-2 text-primary">Demandeur</h6>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="Street">Nom</label>
                    <input type="name" class="form-control" id="Street" placeholder="nom">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="ciTy">Prénoms</label>
                    <input type="name" class="form-control" id="ciTy" placeholder="Prénoms">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="sTate">Ville</label>
                    <input type="text" class="form-control" id="sTate" placeholder="Enter State">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                <div class="form-group">
                    <label for="zIp">Zip Code</label>
                    <input type="text" class="form-control" id="zIp" placeholder="Zip Code">
                </div>
            </div>
        </div><br>
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="text-right">
                    <button type="button" id="submit" name="submit" class="btn btn-secondary">Annuler</button>
                    <button type="button" id="submit" name="submit" class="btn btn-primary">Ajouter a la liste d'attente</button>
                </div>
            </div>
        </div>
    </div>
    

</div>
</div>
</div>











    </main>

  </div>

</div>
<style type="text/css">
 body {
    margin: 0;
    /*padding-top: 40px;*/
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


</style>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
