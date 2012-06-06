<?php

/**
 * BaseUniqueId
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $stub
 * 
 * @method string   getStub() Returns the current record's "stub" value
 * @method UniqueId setStub() Sets the current record's "stub" value
 * 
 * @package    uniqueid
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUniqueId extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('unique_id');
        $this->hasColumn('stub', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}