<?php include ('body/head.php');?>

  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Ingetelcom</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">

    <?php include ('body/sidebar.php');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
          <!--   <button type="button" class="btn btn-sm btn-outline-secondary">Share</button> -->
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <!-- <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button> -->
        </div>
      </div>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>
 -->
      <h2>Liste des terminaux</h2> 
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Reference fournisseur</th>
              <th scope="col">Reference </th>
              <th scope="col">Modele</th>
              <th scope="col">ref certificat</th>
              <th scope="col">IMEI</th>
              <th scope="col">No serie</th>
              <th scope="col">Code de reference Label</th>
              <th scope="col">Usage</th>
              <th scope="col">Marque</th>


            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>FA000001</td>
              <td>Ingetelcom</td>
              <td>Iphone 6 </td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>

            </tr>
            <tr>
              <td>2</td>
              <td>FA000002</td>
              <td>Ingetelcom</td>
              <td>Sony xperia</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>3</td>
              <td>FA000003</td>
              <td>Ingetelcom</td>
              <td>TECHNO F1</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>4</td>
              <td>FA000004</td>
              <td>Ingetelcom</td>
              <td>iphone X</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>5</td>
              <td>FA000005</td>
              <td>Ingetelcom</td>
              <td>HUAWEI P20</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>6</td>
              <td>FA000006</td>
              <td>Ingetelcom</td>
              <td>Nokia Lumia 630</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>7</td>
              <td>FA000007</td>
              <td>Ingetelcom</td>
              <td>Samsung A5</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>8</td>
              <td>FA000008</td>
              <td>Ingetelcom</td>
              <td>ipad pro</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>9</td>
              <td>FA000009</td>
              <td>Ingetelcom</td>
              <td>infinix hot 3</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
            <tr>
              <td>10</td>
              <td>FA000010</td>
              <td>Ingetelcom</td>
              <td>Samsung s8</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
              <td>xxxxx</td>
            </tr>
           

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
