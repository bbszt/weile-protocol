<?php
/**
 * Auto generated from SendValidateRequest.proto at 2015-03-04 07:39:46
 */

/**
 * SendValidateReq message
 */
class SendValidateReq extends \ProtobufMessage
{
    /* Field index constants */
    const MSG = 1;
    const UID = 2;
    const FRIENDUID = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MSG => array(
            'default' => '\'交个朋友吧\'', 
            'name' => 'msg',
            'required' => false,
            'type' => 7,
        ),
        self::UID => array(
            'name' => 'uid',
            'required' => true,
            'type' => 5,
        ),
        self::FRIENDUID => array(
            'name' => 'friendUid',
            'required' => true,
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
        $this->values[self::MSG] = '交个朋友吧';
        $this->values[self::UID] = null;
        $this->values[self::FRIENDUID] = null;
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
     * Sets value of 'msg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsg($value)
    {
        return $this->set(self::MSG, $value);
    }

    /**
     * Returns value of 'msg' property
     *
     * @return string
     */
    public function getMsg()
    {
        return $this->get(self::MSG);
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

    /**
     * Sets value of 'friendUid' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFriendUid($value)
    {
        return $this->set(self::FRIENDUID, $value);
    }

    /**
     * Returns value of 'friendUid' property
     *
     * @return int
     */
    public function getFriendUid()
    {
        return $this->get(self::FRIENDUID);
    }
}
