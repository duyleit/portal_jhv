<?php

class PortalFile extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=22, nullable=false)
     */
    public $id;

    /**
     *
     * @var integer
     * @Column(column="post_id", type="integer", length=22, nullable=true)
     */
    public $post_id;

    /**
     *
     * @var integer
     * @Column(column="user_id", type="integer", length=11, nullable=false)
     */
    public $user_id;

    /**
     *
     * @var string
     * @Column(column="user_fullname", type="string", length=64, nullable=true)
     */
    public $user_fullname;

    /**
     *
     * @var string
     * @Column(column="file", type="string", length=1024, nullable=true)
     */
    public $file;

    /**
     *
     * @var string
     * @Column(column="filename", type="string", length=256, nullable=true)
     */
    public $filename;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=5, nullable=true)
     */
    public $status;

    /**
     *
     * @var string
     * @Column(column="created", type="string", nullable=false)
     */
    public $created;

    /**
     *
     * @var string
     * @Column(column="modified", type="string", nullable=true)
     */
    public $modified;

    /**
     *
     * @var integer
     * @Column(column="edited_user_id", type="integer", length=11, nullable=true)
     */
    public $edited_user_id;

    /**
     *
     * @var string
     * @Column(column="edited_user_fullname", type="string", length=64, nullable=true)
     */
    public $edited_user_fullname;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("appjhv_new");
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
