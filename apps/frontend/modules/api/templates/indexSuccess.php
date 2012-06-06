<?php slot('title', sprintf('API')) ?>
<p>
  If you already have a <?php echo link_to('project','stub/new?') ?> on file with us, you can start requesting unique IDs with the methods below:
</p>

<h2>Versioning</h2>
<p>
  Please note the API version number in the endpoint url.
</p>

<h3>Ping/Check Availability</h3>
<ul>
  <li>Purpose:  You can use this to confirm that the service is reachable.</li>
  <li>Endpoint: <?php echo link_to(url_for('api/ping',true),'api/ping',true) ?>
  <li>Method: GET</li>
  <li>
    Parameters:
    <ul>
      <li>Accepts: [stub], [markdown]</li>
      <li>Required: [stub]</li>
    </ul>
  </li>
  <li>Returns: Local date/time for the host in ISO 8601 date format.</li>
</ul>
