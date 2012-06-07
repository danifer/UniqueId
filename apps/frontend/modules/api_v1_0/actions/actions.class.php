<?php

/**
 * api_v1_0 actions.
 *
 * @package    uniqueid
 * @subpackage api_v1_0
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class api_v1_0Actions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->redirect('api/index');
  }

  public function executeGetId(sfWebRequest $request)
  {
    sfConfig::set('sf_web_debug', false);

    $this->forward404Unless($request->getParameter('stub',null));
    $this->forward404Unless($request->getParameter('access_key',null));
    $this->forward404Unless($stub = Doctrine::getTable('UniqueId')->findOneByStub(urlencode($request->getParameter('stub'))));
    $this->forward404Unless($stub->getAccessKey() == $request->getParameter('access_key'));

    $result = new UniqueId();
    $result->setStub($stub->getStub());
    $result->setProjectName($stub->getProjectName());
    $result->setAccessKey($stub->getAccessKey());
    $result->replace();

    $markup = $request->getParameter('markup','json');

    if ($markup == 'json') {
      return $this->renderText(json_encode($result->toArray()));
    }
  }
}
