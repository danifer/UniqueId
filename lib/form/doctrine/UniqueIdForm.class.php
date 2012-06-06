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
    $this->object->setStub(urlencode($this->getValue('stub')));
    $this->object->save();

    return $this->object;
  }
}
