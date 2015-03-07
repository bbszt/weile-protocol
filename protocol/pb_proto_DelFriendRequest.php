<?php
/**
 * Auto generated from DelFriendRequest.proto at 2015-03-04 07:39:45
 */

/**
 * DeleteFriendReq message
 */
class DeleteFriendReq extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const FRIENDID = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => true,
            'type' => 5,
        ),
        self::FRIENDID => array(
            'name' => 'friendId',
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
        $this->values[self::UID] = null;
        $this->values[self::FRIENDID] = null;
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
     * Sets value of 'friendId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setFriendId($value)
    {
        return $this->set(self::FRIENDID, $value);
    }

    /**
     * Returns value of 'friendId' property
     *
     * @return int
     */
    public function getFriendId()
    {
        return $this->get(self::FRIENDID);
    }
}
