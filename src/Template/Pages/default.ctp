<?php use Cake\Core\Configure; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo Configure::read('Theme.title'); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 4.0 -->
    <?php echo $this->Html->css('MaterialDesign./bootstrap/css/bootstrap.min'); ?>
    <!-- Material Design Bootstrap -->
    <?php echo $this->Html->css('MaterialDesign./css/mdb.min'); ?>
    <!-- Icons -->
    <?php echo $this->Html->css('MaterialDesign./css/font-awesome.min'); ?>
    <?php echo $this->Html->css('MaterialDesign./css/material-icons.min'); ?>

    <!-- Theme customization -->
    <?php echo $this->Html->css('MaterialDesign./css/material-design'); ?>
    <?php echo $this->fetch('css'); ?>
    
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body style="background-image:url(&quot;assets/img/cream_dust.png&quot;);">
    <!-- Site wrapper -->
    <div id="app">
      <?php echo $this->element('nav-top') ?>
      <?php echo $this->Flash->render(); ?>
      <?php echo $this->Flash->render('auth'); ?>
      <!-- Content Wrapper. Contains page content -->
      <div id="body" class="container mt-4">
        
        <?php echo $this->fetch('content'); ?>

      </div>
    </div>

    <!-- jQuery 2.2.3 -->
    <?php echo $this->Html->script('MaterialDesign./plugins/jQuery/jquery.min'); ?>
    <!-- Bootstrap 3.3.5 -->
    <?php echo $this->Html->script('MaterialDesign./bootstrap/js/bootstrap.min'); ?>
    <!-- SlimScroll -->
    <?php echo $this->Html->script('MaterialDesign./plugins/mdb/popper.min'); ?>
    <!-- FastClick -->
    <?php echo $this->Html->script('MaterialDesign./plugins/mdb/mdb'); ?>

    <?php echo $this->fetch('script'); ?>
    <?php echo $this->fetch('scriptBottom'); ?>
  </body>
</html>