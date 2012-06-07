<?php

/**
 * stub actions.
 *
 * @package    uniqueid
 * @subpackage stub
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class stubActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->redirect('stub/new');
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->forward404Unless($request->getParameter('stub',null));
    $this->forward404Unless($request->getParameter('access_key',null));
    $this->forward404Unless($this->stub = Doctrine::getTable('UniqueId')->findOneByStub(urlencode($request->getParameter('stub'))));
    $this->forward404Unless($this->stub->getAccessKey() == $request->getParameter('access_key'));
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->stub = new UniqueId();
    $this->form = new UniqueIdForm($this->stub);
    
    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));

      if ($this->form->isValid())
      {
        $this->form->save();

        $this->getUser()->setFlash('notice', sprintf('Success!'));
        $this->redirect('stub/show?stub='.$this->form->getObject()->getStub().'&access_key='.$this->form->getObject()->getAccessKey());
      }
    }
  }
}
