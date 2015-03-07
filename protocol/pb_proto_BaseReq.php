<?php
/**
 * Auto generated from BaseReq.proto at 2015-03-04 07:39:45
 */

/**
 * Platform enum
 */
final class Platform
{
    const Android = 1;
    const iOS = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Android' => self::Android,
            'iOS' => self::iOS,
        );
    }
}

/**
 * BaseReq message
 */
class BaseReq extends \ProtobufMessage
{
    /* Field index constants */
    const REQCMDID = 1;
    const REQDATA = 2;
    const REQLOGINTOKEN = 3;
    const REQPLATFORM = 4;
    const UID = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::REQCMDID => array(
            'name' => 'reqCmdId',
            'required' => true,
            'type' => 5,
        ),
        self::REQDATA => array(
            'name' => 'reqData',
            'required' => true,
            'type' => 7,
        ),
        self::REQLOGINTOKEN => array(
            'name' => 'reqLoginToken',
            'required' => false,
            'type' => 7,
        ),
        self::REQPLATFORM => array(
            'default' => Platform::iOS, 
            'name' => 'reqPlatform',
            'required' => false,
            'type' => 5,
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
        $this->values[self::REQCMDID] = null;
        $this->values[self::REQDATA] = null;
        $this->values[self::REQLOGINTOKEN] = null;
        $this->values[self::REQPLATFORM] = Platform::iOS;
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
     * Sets value of 'reqCmdId' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReqCmdId($value)
    {
        return $this->set(self::REQCMDID, $value);
    }

    /**
     * Returns value of 'reqCmdId' property
     *
     * @return int
     */
    public function getReqCmdId()
    {
        return $this->get(self::REQCMDID);
    }

    /**
     * Sets value of 'reqData' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReqData($value)
    {
        return $this->set(self::REQDATA, $value);
    }

    /**
     * Returns value of 'reqData' property
     *
     * @return string
     */
    public function getReqData()
    {
        return $this->get(self::REQDATA);
    }

    /**
     * Sets value of 'reqLoginToken' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setReqLoginToken($value)
    {
        return $this->set(self::REQLOGINTOKEN, $value);
    }

    /**
     * Returns value of 'reqLoginToken' property
     *
     * @return string
     */
    public function getReqLoginToken()
    {
        return $this->get(self::REQLOGINTOKEN);
    }

    /**
     * Sets value of 'reqPlatform' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setReqPlatform($value)
    {
        return $this->set(self::REQPLATFORM, $value);
    }

    /**
     * Returns value of 'reqPlatform' property
     *
     * @return int
     */
    public function getReqPlatform()
    {
        return $this->get(self::REQPLATFORM);
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
