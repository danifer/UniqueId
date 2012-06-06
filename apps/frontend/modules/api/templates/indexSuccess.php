<?php slot('title', sprintf('API')) ?>
<p>
  I suppose we could put some API documentation here.  That would make sense...
  <br /><br />
  In the meantime, try these:
  <ul>
    <li><?php echo link_to('ping/check service availability','api/ping?') ?></li>
    <li><?php echo link_to('get an ID for a stub','api_v1_0/getId?stub=project_1') ?></li>
  </ul>
</p>