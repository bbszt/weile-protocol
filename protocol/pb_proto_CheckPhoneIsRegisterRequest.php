<?php
/**
 * Auto generated from CheckPhoneIsRegisterRequest.proto at 2015-03-04 07:39:45
 */

/**
 * CheckPhoneIsRegisterReq message
 */
class CheckPhoneIsRegisterReq extends \ProtobufMessage
{
    /* Field index constants */
    const PHONELIST = 1;
    const UID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONELIST => array(
            'name' => 'phoneList',
            'repeated' => true,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => false,
            'type' => 5,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PHONELIST] = array();
        $this->values[self::UID] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'phoneList' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPhoneList($value)
    {
        return $this->append(self::PHONELIST, $value);
    }

    /**
     * Clears 'phoneList' list
     *
     * @return null
     */
    public function clearPhoneList()
    {
        return $this->clear(self::PHONELIST);
    }

    /**
     * Returns 'phoneList' list
     *
     * @return string[]
     */
    public function getPhoneList()
    {
        return $this->get(self::PHONELIST);
    }

    /**
     * Returns 'phoneList' iterator
     *
     * @return ArrayIterator
     */
    public function getPhoneListIterator()
    {
        return new \ArrayIterator($this->get(self::PHONELIST));
    }

    /**
     * Returns element from 'phoneList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPhoneListAt($offset)
    {
        return $this->get(self::PHONELIST, $offset);
    }

    /**
     * Returns count of 'phoneList' list
     *
     * @return int
     */
    public function getPhoneListCount()
    {
        return $this->count(self::PHONELIST);
    }

    /**
     * Sets value of 'uid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setUid($value)
    {
        return $this->set(self::UID, $value);
    }

    /**
     * Returns value of 'uid' property
     *
     * @return int
     */
    public function getUid()
    {
        return $this->get(self::UID);
    }
}

/**
 * CheckPhoneIsRegisterResp message
 */
class CheckPhoneIsRegisterResp extends \ProtobufMessage
{
    /* Field index constants */
    const PHONELIST = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PHONELIST => array(
            'name' => 'phoneList',
            'repeated' => true,
            'type' => 7,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     *
     * @return null
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::PHONELIST] = array();
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Appends value to 'phoneList' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPhoneList($value)
    {
        return $this->append(self::PHONELIST, $value);
    }

    /**
     * Clears 'phoneList' list
     *
     * @return null
     */
    public function clearPhoneList()
    {
        return $this->clear(self::PHONELIST);
    }

    /**
     * Returns 'phoneList' list
     *
     * @return string[]
     */
    public function getPhoneList()
    {
        return $this->get(self::PHONELIST);
    }

    /**
     * Returns 'phoneList' iterator
     *
     * @return ArrayIterator
     */
    public function getPhoneListIterator()
    {
        return new \ArrayIterator($this->get(self::PHONELIST));
    }

    /**
     * Returns element from 'phoneList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPhoneListAt($offset)
    {
        return $this->get(self::PHONELIST, $offset);
    }

    /**
     * Returns count of 'phoneList' list
     *
     * @return int
     */
    public function getPhoneListCount()
    {
        return $this->count(self::PHONELIST);
    }
}
