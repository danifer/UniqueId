<?php slot('title', sprintf('UniqueId')) ?>
<p>
  This is the homepage.  There's not much here right now, but we'll probably have an interface to make new projects/stubs.
</p>

<h2>Are you new?</h2>
<p>
  This site generates Unique IDs for use with your project, but you have to have a project on file with us first.
  <br /><br />
  If you haven't already, enter a short name for your project below.  We call this a "stub" and you'll use it when you want to request a unique ID from our API.
</p>

<?php include_partial('form', array('form' => $form)) ?>

<h2>Already have a project on file?</h2>
<p>
  Skip straight to the <?php echo link_to('api documentation','api/index?') ?>
</p>
