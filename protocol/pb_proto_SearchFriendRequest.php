<?php
/**
 * Auto generated from SearchFriendRequest.proto at 2015-03-04 07:39:45
 */

/**
 * SearchFriendReq message
 */
class SearchFriendReq extends \ProtobufMessage
{
    /* Field index constants */
    const KEYWORD = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEYWORD => array(
            'name' => 'keyWord',
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
        $this->values[self::KEYWORD] = null;
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
     * Sets value of 'keyWord' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKeyWord($value)
    {
        return $this->set(self::KEYWORD, $value);
    }

    /**
     * Returns value of 'keyWord' property
     *
     * @return string
     */
    public function getKeyWord()
    {
        return $this->get(self::KEYWORD);
    }
}

/**
 * SearchFriendResp message
 */
class SearchFriendResp extends \ProtobufMessage
{
    /* Field index constants */
    const USERLIST = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERLIST => array(
            'name' => 'userList',
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
        $this->values[self::USERLIST] = array();
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
     * Appends value to 'userList' list
     *
     * @param UserInfo $value Value to append
     *
     * @return null
     */
    public function appendUserList(UserInfo $value)
    {
        return $this->append(self::USERLIST, $value);
    }

    /**
     * Clears 'userList' list
     *
     * @return null
     */
    public function clearUserList()
    {
        return $this->clear(self::USERLIST);
    }

    /**
     * Returns 'userList' list
     *
     * @return UserInfo[]
     */
    public function getUserList()
    {
        return $this->get(self::USERLIST);
    }

    /**
     * Returns 'userList' iterator
     *
     * @return ArrayIterator
     */
    public function getUserListIterator()
    {
        return new \ArrayIterator($this->get(self::USERLIST));
    }

    /**
     * Returns element from 'userList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return UserInfo
     */
    public function getUserListAt($offset)
    {
        return $this->get(self::USERLIST, $offset);
    }

    /**
     * Returns count of 'userList' list
     *
     * @return int
     */
    public function getUserListCount()
    {
        return $this->count(self::USERLIST);
    }
}
require_once 'pb_proto_UserInfo.php';