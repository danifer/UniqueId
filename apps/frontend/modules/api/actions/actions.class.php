<?php

/**
 * api actions.
 *
 * @package    uniqueid
 * @subpackage api
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class apiActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {

  }

  public function executePing(sfWebRequest $request)
  {
    sfConfig::set('sf_web_debug', false);
    
    return $this->renderText( $request->getHost().' local time is '.date('c',strtotime('now')));
  }

  public function executeGetId(sfWebRequest $request)
  {
    $this->forward('api_v1_0','getId');
  }
}
