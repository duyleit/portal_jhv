<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class User extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var string
     */
    public $user;

    /**
     *
     * @var string
     */
    public $pass;

    /**
     *
     * @var string
     */
    public $fullname;

    /**
     *
     * @var string
     */
    public $com_code;

    /**
     *
     * @var string
     */
    public $role_code;

    /**
     *
     * @var string
     */
    public $dept_code;

    /**
     *
     * @var string
     */
    public $posi_code;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $phone_extend;

    /**
     *
     * @var string
     */
    public $about;

    /**
     *
     * @var integer
     */
    public $common_disease;

    /**
     *
     * @var integer
     */
    public $occupational_disease;

    /**
     *
     * @var integer
     */
    public $labor_accident;

    /**
     *
     * @var integer
     */
    public $poison_area;

    /**
     *
     * @var string
     */
    public $health_class_code;

    /**
     *
     * @var string
     */
    public $expiry_health_check;

    /**
     *
     * @var integer
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
        $this->setSchema("appjhv");
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
