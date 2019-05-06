<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="id", type="integer", length=11, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(column="user", type="string", length=11, nullable=false)
     */
    public $user;

    /**
     *
     * @var string
     * @Column(column="pass", type="string", length=128, nullable=false)
     */
    public $pass;

    /**
     *
     * @var string
     * @Column(column="fullname", type="string", length=64, nullable=false)
     */
    public $fullname;

    /**
     *
     * @var string
     * @Column(column="com_code", type="string", length=5, nullable=true)
     */
    public $com_code;

    /**
     *
     * @var string
     * @Column(column="role_code", type="string", length=5, nullable=false)
     */
    public $role_code;

    /**
     *
     * @var string
     * @Column(column="dept_code", type="string", length=5, nullable=true)
     */
    public $dept_code;

    /**
     *
     * @var string
     * @Column(column="posi_code", type="string", length=5, nullable=true)
     */
    public $posi_code;

    /**
     *
     * @var string
     * @Column(column="email", type="string", length=64, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(column="phone_extend", type="string", length=16, nullable=true)
     */
    public $phone_extend;

    /**
     *
     * @var string
     * @Column(column="about", type="string", nullable=true)
     */
    public $about;

    /**
     *
     * @var integer
     * @Column(column="common_disease", type="integer", length=11, nullable=false)
     */
    public $common_disease;

    /**
     *
     * @var integer
     * @Column(column="occupational_disease", type="integer", length=11, nullable=false)
     */
    public $occupational_disease;

    /**
     *
     * @var integer
     * @Column(column="labor_accident", type="integer", length=11, nullable=false)
     */
    public $labor_accident;

    /**
     *
     * @var integer
     * @Column(column="poison_area", type="integer", length=11, nullable=false)
     */
    public $poison_area;

    /**
     *
     * @var string
     * @Column(column="health_class_code", type="string", length=5, nullable=false)
     */
    public $health_class_code;

    /**
     *
     * @var string
     * @Column(column="expiry_health_check", type="string", nullable=true)
     */
    public $expiry_health_check;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=5, nullable=true)
     */
    public $status;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("appjhv_new");
        $this->setSource("user");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'user';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return User[]|User|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return User|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
