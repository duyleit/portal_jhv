<?php

class PortalPost extends \Phalcon\Mvc\Model
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
     * @Column(column="user_dept", type="string", length=5, nullable=true)
     */
    public $user_dept;

    /**
     *
     * @var integer
     * @Column(column="post_group", type="integer", length=5, nullable=true)
     */
    public $post_group;

    /**
     *
     * @var string
     * @Column(column="title", type="string", length=256, nullable=false)
     */
    public $title;

    /**
     *
     * @var string
     * @Column(column="description", type="string", length=250, nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(column="picture", type="string", length=512, nullable=true)
     */
    public $picture;

    /**
     *
     * @var string
     * @Column(column="content", type="string", nullable=true)
     */
    public $content;

    /**
     *
     * @var string
     * @Column(column="date_start", type="string", nullable=true)
     */
    public $date_start;

    /**
     *
     * @var string
     * @Column(column="date_end", type="string", nullable=true)
     */
    public $date_end;

    /**
     *
     * @var integer
     * @Column(column="news", type="integer", length=5, nullable=false)
     */
    public $news;

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
     *
     * @var string
     * @Column(column="deleted", type="string", nullable=true)
     */
    public $deleted;

    /**
     *
     * @var integer
     * @Column(column="deleted_user_id", type="integer", length=11, nullable=true)
     */
    public $deleted_user_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("appjhv_new");
        $this->setSource("portal_post");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'portal_post';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return PortalPost[]|PortalPost|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return PortalPost|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
