<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo sfConfig::get('app_site_title') ?></title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!--HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--styles -->
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    <style>
      <?php include_once('css/bootstrap.min.css') ?>
      
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      
      <?php include_once('css/main.css') ?>
    </style>
    
    <?php include_slot('css') ?>

    <!--fav and touch icons -->
    <link rel="shortcut icon" href="/favicon.ico">
  </head>

  <body>
    <?php echo include_partial('global/navigation', array()); ?>
    <div class="container">
      <?php if (has_slot('title')): ?>
        <h1 style="border-bottom:1px solid #c0c0c0; margin:0 0 15px 0"><?php include_slot('title') ?></h1>
      <?php endif; ?>
            
      <?php if ($sf_user->hasFlash('notice')): ?>
        <div class="flash_notice"><?php echo html_entity_decode($sf_user->getFlash('notice')) ?></div>
      <?php endif; ?>
      
      <?php if ($sf_user->hasFlash('error')): ?>
        <div class="flash_error"><?php echo html_entity_decode($sf_user->getFlash('error')) ?></div>
      <?php endif; ?>
      
      <?php echo $sf_content ?>
      
      <?php echo include_partial('global/footer', array()); ?>
    </div> <!-- /container -->
  </body>
</html>
