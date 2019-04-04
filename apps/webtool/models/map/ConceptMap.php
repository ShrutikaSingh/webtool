<?php

/**
 * @category   Maestro
 * @package    UFJF
 *  @subpackage fnbr
 * @copyright  Copyright (c) 2003-2013 UFJF (http://www.ufjf.br)
 * @license    http://siga.ufjf.br/license
 * @version
 * @since
 */
// wizard - code section created by Wizard Module

namespace fnbr\models\map;

class ConceptMap extends \MBusinessModel
{

    public static function ORMMap()
    {

        return array(
            'class' => \get_called_class(),
            'database' => \Manager::getConf('fnbr.db'),
            'table' => 'concept',
            'attributes' => array(
                'idConcept' => array('column' => 'idConcept', 'key' => 'primary', 'idgenerator' => 'identity', 'type' => 'integer'),
                'entry' => array('column' => 'entry', 'type' => 'string'),
                'idEntity' => array('column' => 'idEntity', 'type' => 'integer'),
            ),
            'associations' => array(
                'entity' => array('toClass' => 'fnbr\models\Entity', 'cardinality' => 'oneToOne', 'keys' => 'idEntity:idEntity'),
                'entries' => array('toClass' => 'fnbr\models\Entry', 'cardinality' => 'oneToMany', 'keys' => 'entry:entry'),
            )
        );
    }

    /**
     * 
     * @var integer 
     */
    protected $idConcept;

    /**
     * 
     * @var string 
     */
    protected $entry;

    /**
     * 
     * @var integer 
     */
    protected $idEntity;

    /**
     * Associations
     */
    protected $entity;
    protected $entries;

    /**
     * Getters/Setters
     */
    public function getIdConcept()
    {
        return $this->idConcept;
    }

    public function setIdConcept($value)
    {
        $this->idConcept = $value;
    }

    public function getEntry()
    {
        return $this->entry;
    }

    public function setEntry($value)
    {
        $this->entry = $value;
    }

    public function getIdEntity()
    {
        return $this->idEntity;
    }

    public function setIdEntity($value)
    {
        $this->idEntity = $value;
    }

    /**
     *
     * @return Association
     */
    public function getEntity()
    {
        if (is_null($this->entity)) {
            $this->retrieveAssociation("entity");
        }
        return $this->entity;
    }

    /**
     *
     * @param Association $value
     */
    public function setEntity($value)
    {
        $this->entity = $value;
    }

    /**
     *
     * @return Association
     */
    public function getAssociationEntity()
    {
        $this->retrieveAssociation("entity");
    }

    /**
     *
     * @return Association
     */
    public function getEntries()
    {
        if (is_null($this->entries)) {
            $this->retrieveAssociation("entries");
        }
        return $this->entries;
    }

    /**
     *
     * @param Association $value
     */
    public function setEntries($value)
    {
        $this->entries = $value;
    }

    /**
     *
     * @return Association
     */
    public function getAssociationEntries()
    {
        $this->retrieveAssociation("entries");
    }

}

// end - wizard
