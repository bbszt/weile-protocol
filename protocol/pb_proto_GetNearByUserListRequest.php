<?php
/**
 * Auto generated from GetNearByUserListRequest.proto at 2015-03-04 07:39:45
 */

/**
 * GetNearByUserListReq message
 */
class GetNearByUserListReq extends \ProtobufMessage
{
    /* Field index constants */
    const PAGE = 1;
    const PAGENUM = 2;
    const LOCATION = 3;
    const UID = 5;
    const PHONE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PAGE => array(
            'name' => 'page',
            'required' => true,
            'type' => 5,
        ),
        self::PAGENUM => array(
            'default' => 50, 
            'name' => 'pageNum',
            'required' => false,
            'type' => 5,
        ),
        self::LOCATION => array(
            'name' => 'location',
            'required' => false,
            'type' => 'Location'
        ),
        self::UID => array(
            'default' => 0, 
            'name' => 'uid',
            'required' => false,
            'type' => 5,
        ),
        self::PHONE => array(
            'name' => 'phone',
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
        $this->values[self::PAGE] = null;
        $this->values[self::PAGENUM] = 50;
        $this->values[self::LOCATION] = null;
        $this->values[self::UID] = 0;
        $this->values[self::PHONE] = null;
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
     * Sets value of 'page' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPage($value)
    {
        return $this->set(self::PAGE, $value);
    }

    /**
     * Returns value of 'page' property
     *
     * @return int
     */
    public function getPage()
    {
        return $this->get(self::PAGE);
    }

    /**
     * Sets value of 'pageNum' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setPageNum($value)
    {
        return $this->set(self::PAGENUM, $value);
    }

    /**
     * Returns value of 'pageNum' property
     *
     * @return int
     */
    public function getPageNum()
    {
        return $this->get(self::PAGENUM);
    }

    /**
     * Sets value of 'location' property
     *
     * @param Location $value Property value
     *
     * @return null
     */
    public function setLocation(Location $value)
    {
        return $this->set(self::LOCATION, $value);
    }

    /**
     * Returns value of 'location' property
     *
     * @return Location
     */
    public function getLocation()
    {
        return $this->get(self::LOCATION);
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
     * Sets value of 'phone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPhone($value)
    {
        return $this->set(self::PHONE, $value);
    }

    /**
     * Returns value of 'phone' property
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->get(self::PHONE);
    }
}

/**
 * GetNearbyUserListResp message
 */
class GetNearbyUserListResp extends \ProtobufMessage
{
    /* Field index constants */
    const NEXTPAGE = 1;
    const USERLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEXTPAGE => array(
            'name' => 'nextPage',
            'required' => false,
            'type' => 5,
        ),
        self::USERLIST => array(
            'name' => 'userList',
            'repeated' => true,
            'type' => 'NearByUser'
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
        $this->values[self::NEXTPAGE] = null;
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
     * Sets value of 'nextPage' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setNextPage($value)
    {
        return $this->set(self::NEXTPAGE, $value);
    }

    /**
     * Returns value of 'nextPage' property
     *
     * @return int
     */
    public function getNextPage()
    {
        return $this->get(self::NEXTPAGE);
    }

    /**
     * Appends value to 'userList' list
     *
     * @param NearByUser $value Value to append
     *
     * @return null
     */
    public function appendUserList(NearByUser $value)
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
     * @return NearByUser[]
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
     * @return NearByUser
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
require_once 'pb_proto_NearByUserBody.php';require_once 'pb_proto_Location.php';