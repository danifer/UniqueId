<?php slot('title', sprintf('API')) ?>
<p>
  If you already have a <?php echo link_to('project','stub/new?') ?> on file with us, you can start requesting unique IDs with the methods below:
</p>

<h2>Versioning</h2>
<p>
  Please note the API version number in the endpoint url.
</p>

<h3>Get a new unique ID for your project</h3>
<ul>
  <li>Purpose: This is the core of the service - ask for a unique ID and get one.</li>
  <li>Endpoint: <?php echo url_for('api_v1_0/getId?stub=your_project_stub&access_key=your_access_key',true) ?>
  <li>Method: GET</li>
  <li>
    Parameters:
    <ul>
      <li>Accepts: [stub], [access_key]</li>
      <li>Required: [stub], [access_key]</li>
    </ul>
  </li>
  <li>Returns: A JSON string that includes a new unique ID.</li>
</ul>

<h3>Ping/Check Availability</h3>
<ul>
  <li>Purpose: You can use this to confirm that the service is reachable.</li>
  <li>Endpoint: <?php echo link_to(url_for('api/ping',true),'api/ping',true) ?>
  <li>Method: GET</li>
  <li>
    Parameters:
    <ul>
      <li>Accepts: none</li>
      <li>Required: none</li>
    </ul>
  </li>
  <li>Returns: Local date/time for the host in ISO 8601 date format.</li>
</ul>
