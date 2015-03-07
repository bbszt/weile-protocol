<?php
/**
 * Auto generated from BaseResp.proto at 2015-03-04 07:39:45
 */

/**
 * ResultCode enum
 */
final class ResultCode
{
    const SUCC = 0;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'SUCC' => self::SUCC,
        );
    }
}

/**
 * BaseResp message
 */
class BaseResp extends \ProtobufMessage
{
    /* Field index constants */
    const RESULTCODE = 1;
    const RESULTMSG = 2;
    const RESPDATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RESULTCODE => array(
            'name' => 'resultCode',
            'required' => true,
            'type' => 5,
        ),
        self::RESULTMSG => array(
            'name' => 'resultMsg',
            'required' => false,
            'type' => 7,
        ),
        self::RESPDATA => array(
            'name' => 'respData',
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
        $this->values[self::RESULTCODE] = null;
        $this->values[self::RESULTMSG] = null;
        $this->values[self::RESPDATA] = null;
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
     * Sets value of 'resultCode' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setResultCode($value)
    {
        return $this->set(self::RESULTCODE, $value);
    }

    /**
     * Returns value of 'resultCode' property
     *
     * @return int
     */
    public function getResultCode()
    {
        return $this->get(self::RESULTCODE);
    }

    /**
     * Sets value of 'resultMsg' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setResultMsg($value)
    {
        return $this->set(self::RESULTMSG, $value);
    }

    /**
     * Returns value of 'resultMsg' property
     *
     * @return string
     */
    public function getResultMsg()
    {
        return $this->get(self::RESULTMSG);
    }

    /**
     * Sets value of 'respData' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRespData($value)
    {
        return $this->set(self::RESPDATA, $value);
    }

    /**
     * Returns value of 'respData' property
     *
     * @return string
     */
    public function getRespData()
    {
        return $this->get(self::RESPDATA);
    }
}
