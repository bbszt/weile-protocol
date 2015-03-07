<?php
/**
 * Auto generated from NearByUserBody.proto at 2015-03-04 07:39:45
 */

/**
 * NearByUser message
 */
class NearByUser extends \ProtobufMessage
{
    /* Field index constants */
    const USERINFO = 1;
    const LOCATION = 2;
    const DISTANCE = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERINFO => array(
            'name' => 'userInfo',
            'required' => true,
            'type' => 'UserInfo'
        ),
        self::LOCATION => array(
            'name' => 'location',
            'required' => false,
            'type' => 'Location'
        ),
        self::DISTANCE => array(
            'name' => 'distance',
            'required' => false,
            'type' => 1,
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
        $this->values[self::USERINFO] = null;
        $this->values[self::LOCATION] = null;
        $this->values[self::DISTANCE] = null;
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
     * Sets value of 'userInfo' property
     *
     * @param UserInfo $value Property value
     *
     * @return null
     */
    public function setUserInfo(UserInfo $value)
    {
        return $this->set(self::USERINFO, $value);
    }

    /**
     * Returns value of 'userInfo' property
     *
     * @return UserInfo
     */
    public function getUserInfo()
    {
        return $this->get(self::USERINFO);
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
     * Sets value of 'distance' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setDistance($value)
    {
        return $this->set(self::DISTANCE, $value);
    }

    /**
     * Returns value of 'distance' property
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->get(self::DISTANCE);
    }
}
require_once 'pb_proto_UserInfo.php';require_once 'pb_proto_Location.php';