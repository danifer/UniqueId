<?php

/**
 * UniqueId form base class.
 *
 * @method UniqueId getObject() Returns the current form's model object
 *
 * @package    uniqueid
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUniqueIdForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'stub'         => new sfWidgetFormInputText(),
      'project_name' => new sfWidgetFormInputText(),
      'access_key'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'stub'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'project_name' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'access_key'   => new sfValidatorString(array('max_length' => 36, 'required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'UniqueId', 'column' => array('stub')))
    );

    $this->widgetSchema->setNameFormat('unique_id[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'UniqueId';
  }

}
