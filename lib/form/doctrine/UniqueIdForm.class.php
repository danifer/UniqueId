<?php

/**
 * UniqueId form.
 *
 * @package    uniqueid
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UniqueIdForm extends BaseUniqueIdForm
{
  public function configure()
  {
    $this->setDefault('stub', false);
    $this->widgetSchema->setLabel('stub', 'Your project name: ');
    //$this->widgetSchema->setHelp('stub', 'help text here');

    $use_fields[] = 'stub';

    $this->useFields($use_fields);
  }

  public function save($con = null)
  {
    $this->object->setStub(strtolower(urlencode($this->getValue('stub'))));
    $this->object->setProjectName($this->getValue('stub'));
    $this->object->setAccessKey(md5($this->getValue('stub').rand()));
    $this->object->save();

    return $this->object;
  }
}
