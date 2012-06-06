<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php echo link_to(sfConfig::get('app_site_title'), '@homepage',array('class' => 'brand')) ?>
      <div class="nav-collapse">
        <ul class="nav">
          <li><?php echo link_to('Home', '@homepage') ?></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
</div>