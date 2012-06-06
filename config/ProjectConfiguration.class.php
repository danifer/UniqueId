<?php

require_once dirname(__FILE__).'/../lib/vendor/symfony-1.4.18/lib/autoload/sfCoreAutoload.class.php';

sfCoreAutoload::register();

class ProjectConfiguration extends sfProjectConfiguration
{
  public function setup()
  {
    $this->enableAllPluginsExcept(array('sfPropelPlugin'));
  }

  public function configureDoctrine(Doctrine_Manager $manager)
  {
    $manager->setCollate('utf8_unicode_ci');
    $manager->setCharset('utf8');
    
    $memCacheDriver = new Doctrine_Cache_Memcache(array (
                                                      'compression' => false,
                                                      'prefix' => 'lt-',
                                                      'servers' => array (
                                                        'host' => 'localhost',
                                                        'port' => 11211,
                                                        'persistent' => true
                                                        )             
                                                      ));
    
    $manager->setAttribute(Doctrine_Core::ATTR_RESULT_CACHE, $memCacheDriver);
    $manager->setAttribute(Doctrine_Core::ATTR_RESULT_CACHE_LIFESPAN, 3600);
                                                                                                
    $manager->setAttribute(Doctrine_Core::ATTR_QUERY_CACHE, $memCacheDriver);
    $manager->setAttribute(Doctrine_Core::ATTR_QUERY_CACHE_LIFESPAN, 3600);
  }
}