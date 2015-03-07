<?php
/**
 * Auto generated from SetFriendNoteNameRequest.proto at 2015-03-04 07:39:46
 */

/**
 * SetFriendNoteNameReq message
 */
class SetFriendNoteNameReq extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const FRIENDID = 2;
    const NOTENAME = 3;

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
        self::NOTENAME => array(
            'name' => 'noteName',
            'required' => false,
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
        $this->values[self::UID] = null;
        $this->values[self::FRIENDID] = null;
        $this->values[self::NOTENAME] = null;
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

    /**
     * Sets value of 'noteName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNoteName($value)
    {
        return $this->set(self::NOTENAME, $value);
    }

    /**
     * Returns value of 'noteName' property
     *
     * @return string
     */
    public function getNoteName()
    {
        return $this->get(self::NOTENAME);
    }
}
