<?php

class PortalFile extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $user_fullname;

    /**
     *
     * @var integer
     */
    public $type;

    /**
     *
     * @var string
     */
    public $title;

    /**
     *
     * @var string
     */
    public $file;

    /**
     *
     * @var string
     */
    public $description;

    /**
     *
     * @var integer
     */
    public $status;

    /**
     *
     * @var string
     */
    public $created;

    /**
     *
     * @var string
     */
    public $modified;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("appjhv");
        $this->setSource("portal_file");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'portal_file';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PortalFile[]|PortalFile|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PortalFile|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
