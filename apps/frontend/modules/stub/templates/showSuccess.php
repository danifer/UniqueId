<?php slot('title', sprintf('Your Project')) ?>
<p>
  Thanks for registering a project with us!
</p>

<h2>Access the API</h2>
<p>
  You can request the URL below to get a unique ID for your project anytime.  You might want to bookmark this page for future reference.
  <br /><br />
  <?php echo link_to(url_for('api_v1_0/getId?stub='.$stub->getStub().'&access_key='.$stub->getAccessKey(),true),url_for('api_v1_0/getId?stub='.$stub->getStub().'&access_key='.$stub->getAccessKey())) ?>
</p>

<p>
  Read the full <?php echo link_to('api documentation','api/index?') ?>
</p>
