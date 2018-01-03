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
  <div class="container-fluid">
    <a class="navbar-brand text-success" href="<?php echo $this->Url->build('/'); ?>">
      <img src="<?= Configure::read('Theme.image')?>" class="mr-2" style="width:35px;height:35px;">
      <?php echo Configure::read('Theme.logo.large'); ?>
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navcol-1">
      <?= $this->element('nav-left-menu'); ?>
      <form class="form-inline mx-auto" target="_self">
        <div class="form-group"><label for="search-field"><i class="fa fa-search text-success"></i></label><input class="form-control form-control-lg search-field" type="search" name="search" placeholder="Ricerca Veloce" id="search-field" style="/*width:250px;*/"></div>
      </form>
      <?= $this->element('nav-right-menu'); ?>
    </div>
  </div>
</nav>

<?php } ?>