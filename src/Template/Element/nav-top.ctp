<?php
use Cake\Core\Configure;
$file = Configure::read('Theme.folder') . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';
if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
?>

<nav class="navbar navbar-light navbar-expand-md" style="background-image:url(&quot;/material_design_theme/img/dust_scratches.png&quot;);font-family:'Open Sans', sans-serif;">
  <div class="container-fluid"><a class="navbar-brand text-success" href="#"><img src="/material_design_theme/img/maxservice-icon.jpg" class="mr-2" style="width:35px;height:35px;"><strong>MAX</strong> Service</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div
      class="collapse navbar-collapse" id="navcol-1">
      <ul class="nav navbar-nav">
        <li class="nav-item" role="presentation"><a class="nav-link active text-success" href="#">Home </a></li>
        <li class="dropdown text-success nav-item"><a class="dropdown-toggle nav-link dropdown-toggle text-success" data-toggle="dropdown" aria-expanded="false" href="#">Prova </a>
          <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#" style="/*background-color:#4285F4;*//*border-radius:2px;*//*box-shadow:0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);*//*transition:all .1s linear;*/">Pippo </a>
            <a
              class="dropdown-item" role="presentation" href="#">Pluto </a><a class="dropdown-item" role="presentation" href="#">Paperino </a></div>
        </li>
      </ul>
      <form class="form-inline mx-auto" target="_self">
        <div class="form-group"><label for="search-field"><i class="fa fa-search text-success"></i></label><input class="form-control form-control-lg search-field" type="search" name="search" placeholder="Ricerca Veloce" id="search-field" style="/*width:250px;*/"></div>
      </form>
      <ul class="nav navbar-nav">
        <li class="dropdown nav-item"><a class="dropdown-toggle nav-link dropdown-toggle text-success" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-user mr-2"></i>Salvo </a>
          <div class="dropdown-menu dropdown-menu-right" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fa fa-sign-out mr-2"></i>Esci </a></div>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php } ?>