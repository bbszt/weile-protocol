<?php
/**
 * Auto generated from Location.proto at 2015-03-04 07:39:45
 */

/**
 * Location message
 */
class Location extends \ProtobufMessage
{
    /* Field index constants */
    const LATITUDE = 1;
    const LONGITUDE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LATITUDE => array(
            'name' => 'latitude',
            'required' => false,
            'type' => 1,
        ),
        self::LONGITUDE => array(
            'name' => 'longitude',
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
        $this->values[self::LATITUDE] = null;
        $this->values[self::LONGITUDE] = null;
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
     * Sets value of 'latitude' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLatitude($value)
    {
        return $this->set(self::LATITUDE, $value);
    }

    /**
     * Returns value of 'latitude' property
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->get(self::LATITUDE);
    }

    /**
     * Sets value of 'longitude' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setLongitude($value)
    {
        return $this->set(self::LONGITUDE, $value);
    }

    /**
     * Returns value of 'longitude' property
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->get(self::LONGITUDE);
    }
}
