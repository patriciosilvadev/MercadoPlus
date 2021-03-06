<!-- NAVIGATION LEFT
================================================== -->
<nav class="navbar navbar-vertical fixed-left fixed-top navbar-expand-md navbar-light" id="sidebar">
  <div class="container-fluid">
    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">
      <img src="assets/img/logo.png" class="navbar-brand-img mx-auto" alt="...">
    </a>
    <!-- User (xs) -->
    <div class="navbar-user d-md-none">
      <?php include 'navbar/menu.php'; ?>
    </div>
    <!-- Collapse -->
    <div class="collapse navbar-collapse" id="sidebarCollapse">
      <!-- Navigation -->
      <ul class="navbar-nav mb-md-4">
        <!-- INICIO -->
        <li class="nav-item">
          <a class="nav-link" href="#sidebarInicio" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInicio">
            <i class="fe fe-home"></i> Inicio
          </a>
          <div class="collapse" id="sidebarInicio">
            <nav id="principal" >
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="index.php#datosotc">
                    Datos OTC
                    <span class="badge badge-soft-success ml-auto">New</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="index.php#datosoficiales">
                    Datos Oficiales
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </li>
        <li class="nav-item">
        <?php if (isset($_SESSION['id']) && $_SESSION['id'] != "") { ?>
          <a class="nav-link " href="login.php"> <i class="fe fe-log-out"></i> Cerrar Sesión </a>
        <?php }else{ ?>
          <a class="nav-link " href="login.php"> <i class="fe fe-log-in"></i> Iniciar Sesión </a>
        <?php } ?>
        </li>
      </ul>
      <!-- Push content down -->
      <div class="mt-auto">
        <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 2) { ?>
          <div class="custom-control custom-switch my-4">
            <input type="checkbox" class="custom-control-input" id="customSwitch1" onchange="formatoCajaInstagram();">
            <label class="custom-control-label" for="customSwitch1">1080px</label>
          </div>
        <?php } if (!isset($_SESSION['id'])) { ?>
          <ul class="navbar-nav">
            <li class="nav-item my-3">
              <a class="nav-link " href="registro.php"> <i class="fe fe-user-plus"></i>Registrarse </a>
            </li>
          </ul>
        <?php } ?>
      </div>
      <!-- Customize -->
      <!-- <a href="#modalDemo" class="btn btn-block btn-primary mb-4" data-toggle="modal">
        <i class="fe fe-sliders mr-2"></i> Customize
      </a> -->
      <!-- User (md) -->
    </div> <!-- / .navbar-collapse -->
  </div>
</nav>

<!-- NAVIGATION TOP
================================================== -->
<div class="main-content fixed-top ">
  <nav class="navbar navbar-expand-md navbar-light d-none d-md-flex" id="topbar">
    <div class="container-fluid">
      <!-- Form -->
      <div class="d-flex"></div>
      <!-- User -->

      <div class="navbar-user">
        <?php include 'navbar/menu.php'; ?>
      </div>
    </div>
  </nav>
</div>
