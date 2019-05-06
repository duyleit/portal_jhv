<?php

class BookmealDept extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="bd_id", type="integer", length=11, nullable=false)
     */
    protected $bd_id;

    /**
     *
     * @var string
     * @Column(column="name", type="string", length=160, nullable=true)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(column="bd_code", type="string", length=10, nullable=true)
     */
    protected $bd_code;

    /**
     * Method to set the value of field bd_id
     *
     * @param integer $bd_id
     * @return $this
     */
    public function setBdId($bd_id)
    {
        $this->bd_id = $bd_id;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Method to set the value of field bd_code
     *
     * @param string $bd_code
     * @return $this
     */
    public function setBdCode($bd_code)
    {
        $this->bd_code = $bd_code;

        return $this;
    }

    /**
     * Returns the value of field bd_id
     *
     * @return integer
     */
    public function getBdId()
    {
        return $this->bd_id;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Returns the value of field bd_code
     *
     * @return string
     */
    public function getBdCode()
    {
        return $this->bd_code;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("appjhv");
        $this->setSource("bookmeal_dept");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bookmeal_dept';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return BookmealDept[]|BookmealDept|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return BookmealDept|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'bd_id' => 'bd_id',
            'name' => 'name',
            'bd_code' => 'bd_code'
        ];
    }

}
