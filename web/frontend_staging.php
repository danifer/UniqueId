<?php

require_once(dirname(__FILE__).'/../lib/system.php');
require_once(dirname(__FILE__).'/../lib/debug.php');
require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

// this check prevents access to debug front controllers that are deployed by accident to production servers.
if (!isLocal())
{
  die('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'staging', true);
sfContext::createInstance($configuration)->dispatch();
