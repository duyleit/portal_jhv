<?php

class Bookmeal extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(column="bm_id", type="integer", length=21, nullable=false)
     */
    protected $bm_id;

    /**
     *
     * @var string
     * @Column(column="date", type="string", nullable=true)
     */
    protected $date;

    /**
     *
     * @var string
     * @Column(column="user_code", type="string", length=11, nullable=true)
     */
    protected $user_code;

    /**
     *
     * @var integer
     * @Column(column="dept_code", type="integer", length=5, nullable=true)
     */
    protected $dept_code;

    /**
     *
     * @var integer
     * @Column(column="lunch", type="integer", length=3, nullable=true)
     */
    protected $lunch;

    /**
     *
     * @var integer
     * @Column(column="lunch_add", type="integer", length=3, nullable=true)
     */
    protected $lunch_add;

    /**
     *
     * @var integer
     * @Column(column="lunch_veg", type="integer", length=3, nullable=true)
     */
    protected $lunch_veg;

    /**
     *
     * @var integer
     * @Column(column="lunch_soup", type="integer", length=3, nullable=true)
     */
    protected $lunch_soup;

    /**
     *
     * @var integer
     * @Column(column="lunch_veg_add", type="integer", length=3, nullable=true)
     */
    protected $lunch_veg_add;

    /**
     *
     * @var integer
     * @Column(column="dinner", type="integer", length=3, nullable=true)
     */
    protected $dinner;

    /**
     *
     * @var integer
     * @Column(column="dinner_add", type="integer", length=3, nullable=true)
     */
    protected $dinner_add;

    /**
     *
     * @var integer
     * @Column(column="dinner_veg_add", type="integer", length=3, nullable=true)
     */
    protected $dinner_veg_add;

    /**
     *
     * @var integer
     * @Column(column="supper", type="integer", length=3, nullable=true)
     */
    protected $supper;

    /**
     *
     * @var integer
     * @Column(column="supper_veg", type="integer", length=3, nullable=true)
     */
    protected $supper_veg;

    /**
     *
     * @var integer
     * @Column(column="separate_table", type="integer", length=3, nullable=true)
     */
    protected $separate_table;

    /**
     *
     * @var integer
     * @Column(column="buffet", type="integer", length=3, nullable=true)
     */
    protected $buffet;

    /**
     *
     * @var string
     * @Column(column="note", type="string", length=255, nullable=true)
     */
    protected $note;

    /**
     *
     * @var string
     * @Column(column="date_create", type="string", nullable=false)
     */
    protected $date_create;

    /**
     *
     * @var string
     * @Column(column="date_modify", type="string", nullable=false)
     */
    protected $date_modify;

    /**
     *
     * @var string
     * @Column(column="user_code_modify", type="string", length=11, nullable=true)
     */
    protected $user_code_modify;

    /**
     *
     * @var integer
     * @Column(column="status", type="integer", length=5, nullable=true)
     */
    protected $status;

    /**
     * Method to set the value of field bm_id
     *
     * @param integer $bm_id
     * @return $this
     */
    public function setBmId($bm_id)
    {
        $this->bm_id = $bm_id;

        return $this;
    }

    /**
     * Method to set the value of field date
     *
     * @param string $date
     * @return $this
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Method to set the value of field user_code
     *
     * @param string $user_code
     * @return $this
     */
    public function setUserCode($user_code)
    {
        $this->user_code = $user_code;

        return $this;
    }

    /**
     * Method to set the value of field dept_code
     *
     * @param integer $dept_code
     * @return $this
     */
    public function setDeptCode($dept_code)
    {
        $this->dept_code = $dept_code;

        return $this;
    }

    /**
     * Method to set the value of field lunch
     *
     * @param integer $lunch
     * @return $this
     */
    public function setLunch($lunch)
    {
        $this->lunch = $lunch;

        return $this;
    }

    /**
     * Method to set the value of field lunch_add
     *
     * @param integer $lunch_add
     * @return $this
     */
    public function setLunchAdd($lunch_add)
    {
        $this->lunch_add = $lunch_add;

        return $this;
    }

    /**
     * Method to set the value of field lunch_veg
     *
     * @param integer $lunch_veg
     * @return $this
     */
    public function setLunchVeg($lunch_veg)
    {
        $this->lunch_veg = $lunch_veg;

        return $this;
    }

    /**
     * Method to set the value of field lunch_soup
     *
     * @param integer $lunch_soup
     * @return $this
     */
    public function setLunchSoup($lunch_soup)
    {
        $this->lunch_soup = $lunch_soup;

        return $this;
    }

    /**
     * Method to set the value of field lunch_veg_add
     *
     * @param integer $lunch_veg_add
     * @return $this
     */
    public function setLunchVegAdd($lunch_veg_add)
    {
        $this->lunch_veg_add = $lunch_veg_add;

        return $this;
    }

    /**
     * Method to set the value of field dinner
     *
     * @param integer $dinner
     * @return $this
     */
    public function setDinner($dinner)
    {
        $this->dinner = $dinner;

        return $this;
    }

    /**
     * Method to set the value of field dinner_add
     *
     * @param integer $dinner_add
     * @return $this
     */
    public function setDinnerAdd($dinner_add)
    {
        $this->dinner_add = $dinner_add;

        return $this;
    }

    /**
     * Method to set the value of field dinner_veg_add
     *
     * @param integer $dinner_veg_add
     * @return $this
     */
    public function setDinnerVegAdd($dinner_veg_add)
    {
        $this->dinner_veg_add = $dinner_veg_add;

        return $this;
    }

    /**
     * Method to set the value of field supper
     *
     * @param integer $supper
     * @return $this
     */
    public function setSupper($supper)
    {
        $this->supper = $supper;

        return $this;
    }

    /**
     * Method to set the value of field supper_veg
     *
     * @param integer $supper_veg
     * @return $this
     */
    public function setSupperVeg($supper_veg)
    {
        $this->supper_veg = $supper_veg;

        return $this;
    }

    /**
     * Method to set the value of field separate_table
     *
     * @param integer $separate_table
     * @return $this
     */
    public function setSeparateTable($separate_table)
    {
        $this->separate_table = $separate_table;

        return $this;
    }

    /**
     * Method to set the value of field buffet
     *
     * @param integer $buffet
     * @return $this
     */
    public function setBuffet($buffet)
    {
        $this->buffet = $buffet;

        return $this;
    }

    /**
     * Method to set the value of field note
     *
     * @param string $note
     * @return $this
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Method to set the value of field date_create
     *
     * @param string $date_create
     * @return $this
     */
    public function setDateCreate($date_create)
    {
        $this->date_create = $date_create;

        return $this;
    }

    /**
     * Method to set the value of field date_modify
     *
     * @param string $date_modify
     * @return $this
     */
    public function setDateModify($date_modify)
    {
        $this->date_modify = $date_modify;

        return $this;
    }

    /**
     * Method to set the value of field user_code_modify
     *
     * @param string $user_code_modify
     * @return $this
     */
    public function setUserCodeModify($user_code_modify)
    {
        $this->user_code_modify = $user_code_modify;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param integer $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Returns the value of field bm_id
     *
     * @return integer
     */
    public function getBmId()
    {
        return $this->bm_id;
    }

    /**
     * Returns the value of field date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Returns the value of field user_code
     *
     * @return string
     */
    public function getUserCode()
    {
        return $this->user_code;
    }

    /**
     * Returns the value of field dept_code
     *
     * @return integer
     */
    public function getDeptCode()
    {
        return $this->dept_code;
    }

    /**
     * Returns the value of field lunch
     *
     * @return integer
     */
    public function getLunch()
    {
        return $this->lunch;
    }

    /**
     * Returns the value of field lunch_add
     *
     * @return integer
     */
    public function getLunchAdd()
    {
        return $this->lunch_add;
    }

    /**
     * Returns the value of field lunch_veg
     *
     * @return integer
     */
    public function getLunchVeg()
    {
        return $this->lunch_veg;
    }

    /**
     * Returns the value of field lunch_soup
     *
     * @return integer
     */
    public function getLunchSoup()
    {
        return $this->lunch_soup;
    }

    /**
     * Returns the value of field lunch_veg_add
     *
     * @return integer
     */
    public function getLunchVegAdd()
    {
        return $this->lunch_veg_add;
    }

    /**
     * Returns the value of field dinner
     *
     * @return integer
     */
    public function getDinner()
    {
        return $this->dinner;
    }

    /**
     * Returns the value of field dinner_add
     *
     * @return integer
     */
    public function getDinnerAdd()
    {
        return $this->dinner_add;
    }

    /**
     * Returns the value of field dinner_veg_add
     *
     * @return integer
     */
    public function getDinnerVegAdd()
    {
        return $this->dinner_veg_add;
    }

    /**
     * Returns the value of field supper
     *
     * @return integer
     */
    public function getSupper()
    {
        return $this->supper;
    }

    /**
     * Returns the value of field supper_veg
     *
     * @return integer
     */
    public function getSupperVeg()
    {
        return $this->supper_veg;
    }

    /**
     * Returns the value of field separate_table
     *
     * @return integer
     */
    public function getSeparateTable()
    {
        return $this->separate_table;
    }

    /**
     * Returns the value of field buffet
     *
     * @return integer
     */
    public function getBuffet()
    {
        return $this->buffet;
    }

    /**
     * Returns the value of field note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Returns the value of field date_create
     *
     * @return string
     */
    public function getDateCreate()
    {
        return $this->date_create;
    }

    /**
     * Returns the value of field date_modify
     *
     * @return string
     */
    public function getDateModify()
    {
        return $this->date_modify;
    }

    /**
     * Returns the value of field user_code_modify
     *
     * @return string
     */
    public function getUserCodeModify()
    {
        return $this->user_code_modify;
    }

    /**
     * Returns the value of field status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("appjhv");
        $this->setSource("meal");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'bookmeal';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bookmeal[]|Bookmeal|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Bookmeal|\Phalcon\Mvc\Model\ResultInterface
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
            'bm_id' => 'bm_id',
            'date' => 'date',
            'user_code' => 'user_code',
            'dept_code' => 'dept_code',
            'lunch' => 'lunch',
            'lunch_add' => 'lunch_add',
            'lunch_veg' => 'lunch_veg',
            'lunch_soup' => 'lunch_soup',
            'lunch_veg_add' => 'lunch_veg_add',
            'dinner' => 'dinner',
            'dinner_add' => 'dinner_add',
            'dinner_veg_add' => 'dinner_veg_add',
            'supper' => 'supper',
            'supper_veg' => 'supper_veg',
            'separate_table' => 'separate_table',
            'buffet' => 'buffet',
            'note' => 'note',
            'date_create' => 'date_create',
            'date_modify' => 'date_modify',
            'user_code_modify' => 'user_code_modify',
            'status' => 'status'
        ];
    }

}
