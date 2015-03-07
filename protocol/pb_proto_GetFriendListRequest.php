<?php
/**
 * Auto generated from GetFriendListRequest.proto at 2015-03-04 07:39:45
 */

/**
 * GetFriendListReq message
 */
class GetFriendListReq extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const FRIENDIDS = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => true,
            'type' => 5,
        ),
        self::FRIENDIDS => array(
            'name' => 'friendIds',
            'repeated' => true,
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
        $this->values[self::FRIENDIDS] = array();
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
     * Appends value to 'friendIds' list
     *
     * @param int $value Value to append
     *
     * @return null
     */
    public function appendFriendIds($value)
    {
        return $this->append(self::FRIENDIDS, $value);
    }

    /**
     * Clears 'friendIds' list
     *
     * @return null
     */
    public function clearFriendIds()
    {
        return $this->clear(self::FRIENDIDS);
    }

    /**
     * Returns 'friendIds' list
     *
     * @return int[]
     */
    public function getFriendIds()
    {
        return $this->get(self::FRIENDIDS);
    }

    /**
     * Returns 'friendIds' iterator
     *
     * @return ArrayIterator
     */
    public function getFriendIdsIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDIDS));
    }

    /**
     * Returns element from 'friendIds' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return int
     */
    public function getFriendIdsAt($offset)
    {
        return $this->get(self::FRIENDIDS, $offset);
    }

    /**
     * Returns count of 'friendIds' list
     *
     * @return int
     */
    public function getFriendIdsCount()
    {
        return $this->count(self::FRIENDIDS);
    }
}

/**
 * GetFriendListResp message
 */
class GetFriendListResp extends \ProtobufMessage
{
    /* Field index constants */
    const FRIENDLIST = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FRIENDLIST => array(
            'name' => 'friendList',
            'repeated' => true,
            'type' => 'UserInfo'
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
        $this->values[self::FRIENDLIST] = array();
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
     * Appends value to 'friendList' list
     *
     * @param UserInfo $value Value to append
     *
     * @return null
     */
    public function appendFriendList(UserInfo $value)
    {
        return $this->append(self::FRIENDLIST, $value);
    }

    /**
     * Clears 'friendList' list
     *
     * @return null
     */
    public function clearFriendList()
    {
        return $this->clear(self::FRIENDLIST);
    }

    /**
     * Returns 'friendList' list
     *
     * @return UserInfo[]
     */
    public function getFriendList()
    {
        return $this->get(self::FRIENDLIST);
    }

    /**
     * Returns 'friendList' iterator
     *
     * @return ArrayIterator
     */
    public function getFriendListIterator()
    {
        return new \ArrayIterator($this->get(self::FRIENDLIST));
    }

    /**
     * Returns element from 'friendList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return UserInfo
     */
    public function getFriendListAt($offset)
    {
        return $this->get(self::FRIENDLIST, $offset);
    }

    /**
     * Returns count of 'friendList' list
     *
     * @return int
     */
    public function getFriendListCount()
    {
        return $this->count(self::FRIENDLIST);
    }
}
require_once 'pb_proto_UserInfo.php';