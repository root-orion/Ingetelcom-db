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
      <h2>Modèles homologués</h2> 
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Certificat no</th>
              <th scope="col">Date d'homologation</th>
              <th scope="col">Modèle homologué</th>
              <th scope="col">Marque</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>CA000001</td>
              <td>05/08/2015</td>
              <td>Iphone 6 </td>
              <td>Iphone</td>
            </tr>
            <tr>
              <td>2</td>
              <td>CA000002</td>
              <td>03/07/2021</td>
              <td>Sony xperia</td>
              <td>Sony</td>
            </tr>
            <tr>
              <td>3</td>
              <td>CA000003</td>
              <td>03/02/2017</td>
              <td>TECHNO F1</td>
              <td>Techno</td>
            </tr>
            <tr>
              <td>4</td>
              <td>FA000004</td>
              <td>05/07/2019</td>
              <td>iphone X</td>
              <td>Apple</td>
            </tr>
            <tr>
              <td>5</td>
              <td>CA000005</td>
              <td>05/07/2019</td>
              <td>HUAWEI P20</td>
              <td>Huawei</td>
            </tr>
            <tr>
              <td>6</td>
              <td>CA000006</td>
              <td>05/07/2014</td>
              <td>Nokia Lumia 630</td>
              <td>Nokia</td>
            </tr>
            <tr>
              <td>7</td>
              <td>CA000007</td>
              <td>25/07/2020</td>
              <td>Samsung A5</td>
              <td>Samsung</td>
            </tr>
            <tr>
              <td>8</td>
              <td>CA000008</td>
              <td>05/11/2017</td>
              <td>ipad pro</td>
              <td>Apple</td>
            </tr>
            <tr>
              <td>9</td>
              <td>CA000009</td>
              <td>05/07/2019</td>
              <td>infinix hot 3</td>
              <td>infinix</td>
            </tr>
            <tr>
              <td>10</td>
              <td>CA000010</td>
              <td>05/07/2019</td>
              <td>Samsung s8</td>
              <td>Samsung</td>
            </tr>
           

          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
