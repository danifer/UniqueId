<?php

function isLocal()
{
  if (isset($_SERVER['REMOTE_ADDR']) && strpos($_SERVER['REMOTE_ADDR'],'192.168.1') !== false)
  {
    return true;
  }
  
  if (isset($_SERVER['REMOTE_ADDR']) && strpos($_SERVER['REMOTE_ADDR'],'127.0.1.1') !== false)
  {
    return true;
  }

  if (isset($_SERVER['REMOTE_ADDR']) && strpos($_SERVER['REMOTE_ADDR'],'127.0.0.1') !== false)
  {
    return true;
  }
  
  if (gethostname() == 'ganymede.danifer.com')
  {
    return true;
  }
  
  return false;
}
