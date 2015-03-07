<?php
/**
 * Auto generated from UserInfo.proto at 2015-03-04 07:39:46
 */

/**
 * Gender enum
 */
final class Gender
{
    const Male = 1;
    const Female = 2;

    /**
     * Returns defined enum values
     *
     * @return int[]
     */
    public function getEnumValues()
    {
        return array(
            'Male' => self::Male,
            'Female' => self::Female,
        );
    }
}

/**
 * UserInfo message
 */
class UserInfo extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const PHONE = 2;
    const NICKNAME = 3;
    const FACEURL = 4;
    const AGE = 5;
    const GENDER = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => true,
            'type' => 5,
        ),
        self::PHONE => array(
            'name' => 'phone',
            'required' => false,
            'type' => 7,
        ),
        self::NICKNAME => array(
            'name' => 'nickname',
            'required' => false,
            'type' => 7,
        ),
        self::FACEURL => array(
            'name' => 'faceUrl',
            'required' => false,
            'type' => 7,
        ),
        self::AGE => array(
            'name' => 'age',
            'required' => false,
            'type' => 5,
        ),
        self::GENDER => array(
            'name' => 'gender',
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
        $this->values[self::UID] = null;
        $this->values[self::PHONE] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::FACEURL] = null;
        $this->values[self::AGE] = null;
        $this->values[self::GENDER] = null;
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

    /**
     * Sets value of 'nickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickname($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickname' property
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->get(self::NICKNAME);
    }

    /**
     * Sets value of 'faceUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFaceUrl($value)
    {
        return $this->set(self::FACEURL, $value);
    }

    /**
     * Returns value of 'faceUrl' property
     *
     * @return string
     */
    public function getFaceUrl()
    {
        return $this->get(self::FACEURL);
    }

    /**
     * Sets value of 'age' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setAge($value)
    {
        return $this->set(self::AGE, $value);
    }

    /**
     * Returns value of 'age' property
     *
     * @return int
     */
    public function getAge()
    {
        return $this->get(self::AGE);
    }

    /**
     * Sets value of 'gender' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return int
     */
    public function getGender()
    {
        return $this->get(self::GENDER);
    }
}

/**
 * UserDetailInfo message
 */
class UserDetailInfo extends \ProtobufMessage
{
    /* Field index constants */
    const UID = 1;
    const NICKNAME = 2;
    const GEXINGQIANMING = 3;
    const BIRTHDAY = 4;
    const HEIGHT = 5;
    const WEIGHT = 6;
    const PLACEOFRESIDENCE = 7;
    const PLACEOFBIRTH = 8;
    const EDUCATION = 9;
    const GENDER = 10;
    const INDUSTRY = 11;
    const INCOME = 12;
    const JOB = 13;
    const HOUSINGSITUATION = 14;
    const TRAFFIC = 15;
    const MARRIAGECASE = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UID => array(
            'name' => 'uid',
            'required' => true,
            'type' => 5,
        ),
        self::NICKNAME => array(
            'name' => 'nickname',
            'required' => false,
            'type' => 7,
        ),
        self::GEXINGQIANMING => array(
            'name' => 'gexingqianming',
            'required' => false,
            'type' => 7,
        ),
        self::BIRTHDAY => array(
            'name' => 'birthday',
            'required' => false,
            'type' => 5,
        ),
        self::HEIGHT => array(
            'name' => 'height',
            'required' => false,
            'type' => 4,
        ),
        self::WEIGHT => array(
            'name' => 'weight',
            'required' => false,
            'type' => 4,
        ),
        self::PLACEOFRESIDENCE => array(
            'name' => 'placeOfResidence',
            'repeated' => true,
            'type' => 7,
        ),
        self::PLACEOFBIRTH => array(
            'name' => 'placeOfBirth',
            'repeated' => true,
            'type' => 7,
        ),
        self::EDUCATION => array(
            'name' => 'education',
            'required' => false,
            'type' => 7,
        ),
        self::GENDER => array(
            'name' => 'gender',
            'required' => false,
            'type' => 5,
        ),
        self::INDUSTRY => array(
            'name' => 'industry',
            'required' => false,
            'type' => 7,
        ),
        self::INCOME => array(
            'name' => 'income',
            'required' => false,
            'type' => 7,
        ),
        self::JOB => array(
            'name' => 'job',
            'required' => false,
            'type' => 7,
        ),
        self::HOUSINGSITUATION => array(
            'name' => 'housingSituation',
            'required' => false,
            'type' => 7,
        ),
        self::TRAFFIC => array(
            'name' => 'traffic',
            'required' => false,
            'type' => 7,
        ),
        self::MARRIAGECASE => array(
            'name' => 'marriageCase',
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
        $this->values[self::NICKNAME] = null;
        $this->values[self::GEXINGQIANMING] = null;
        $this->values[self::BIRTHDAY] = null;
        $this->values[self::HEIGHT] = null;
        $this->values[self::WEIGHT] = null;
        $this->values[self::PLACEOFRESIDENCE] = array();
        $this->values[self::PLACEOFBIRTH] = array();
        $this->values[self::EDUCATION] = null;
        $this->values[self::GENDER] = null;
        $this->values[self::INDUSTRY] = null;
        $this->values[self::INCOME] = null;
        $this->values[self::JOB] = null;
        $this->values[self::HOUSINGSITUATION] = null;
        $this->values[self::TRAFFIC] = null;
        $this->values[self::MARRIAGECASE] = null;
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
     * Sets value of 'nickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickname($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickname' property
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->get(self::NICKNAME);
    }

    /**
     * Sets value of 'gexingqianming' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setGexingqianming($value)
    {
        return $this->set(self::GEXINGQIANMING, $value);
    }

    /**
     * Returns value of 'gexingqianming' property
     *
     * @return string
     */
    public function getGexingqianming()
    {
        return $this->get(self::GEXINGQIANMING);
    }

    /**
     * Sets value of 'birthday' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setBirthday($value)
    {
        return $this->set(self::BIRTHDAY, $value);
    }

    /**
     * Returns value of 'birthday' property
     *
     * @return int
     */
    public function getBirthday()
    {
        return $this->get(self::BIRTHDAY);
    }

    /**
     * Sets value of 'height' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setHeight($value)
    {
        return $this->set(self::HEIGHT, $value);
    }

    /**
     * Returns value of 'height' property
     *
     * @return float
     */
    public function getHeight()
    {
        return $this->get(self::HEIGHT);
    }

    /**
     * Sets value of 'weight' property
     *
     * @param float $value Property value
     *
     * @return null
     */
    public function setWeight($value)
    {
        return $this->set(self::WEIGHT, $value);
    }

    /**
     * Returns value of 'weight' property
     *
     * @return float
     */
    public function getWeight()
    {
        return $this->get(self::WEIGHT);
    }

    /**
     * Appends value to 'placeOfResidence' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPlaceOfResidence($value)
    {
        return $this->append(self::PLACEOFRESIDENCE, $value);
    }

    /**
     * Clears 'placeOfResidence' list
     *
     * @return null
     */
    public function clearPlaceOfResidence()
    {
        return $this->clear(self::PLACEOFRESIDENCE);
    }

    /**
     * Returns 'placeOfResidence' list
     *
     * @return string[]
     */
    public function getPlaceOfResidence()
    {
        return $this->get(self::PLACEOFRESIDENCE);
    }

    /**
     * Returns 'placeOfResidence' iterator
     *
     * @return ArrayIterator
     */
    public function getPlaceOfResidenceIterator()
    {
        return new \ArrayIterator($this->get(self::PLACEOFRESIDENCE));
    }

    /**
     * Returns element from 'placeOfResidence' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPlaceOfResidenceAt($offset)
    {
        return $this->get(self::PLACEOFRESIDENCE, $offset);
    }

    /**
     * Returns count of 'placeOfResidence' list
     *
     * @return int
     */
    public function getPlaceOfResidenceCount()
    {
        return $this->count(self::PLACEOFRESIDENCE);
    }

    /**
     * Appends value to 'placeOfBirth' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendPlaceOfBirth($value)
    {
        return $this->append(self::PLACEOFBIRTH, $value);
    }

    /**
     * Clears 'placeOfBirth' list
     *
     * @return null
     */
    public function clearPlaceOfBirth()
    {
        return $this->clear(self::PLACEOFBIRTH);
    }

    /**
     * Returns 'placeOfBirth' list
     *
     * @return string[]
     */
    public function getPlaceOfBirth()
    {
        return $this->get(self::PLACEOFBIRTH);
    }

    /**
     * Returns 'placeOfBirth' iterator
     *
     * @return ArrayIterator
     */
    public function getPlaceOfBirthIterator()
    {
        return new \ArrayIterator($this->get(self::PLACEOFBIRTH));
    }

    /**
     * Returns element from 'placeOfBirth' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getPlaceOfBirthAt($offset)
    {
        return $this->get(self::PLACEOFBIRTH, $offset);
    }

    /**
     * Returns count of 'placeOfBirth' list
     *
     * @return int
     */
    public function getPlaceOfBirthCount()
    {
        return $this->count(self::PLACEOFBIRTH);
    }

    /**
     * Sets value of 'education' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEducation($value)
    {
        return $this->set(self::EDUCATION, $value);
    }

    /**
     * Returns value of 'education' property
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->get(self::EDUCATION);
    }

    /**
     * Sets value of 'gender' property
     *
     * @param int $value Property value
     *
     * @return null
     */
    public function setGender($value)
    {
        return $this->set(self::GENDER, $value);
    }

    /**
     * Returns value of 'gender' property
     *
     * @return int
     */
    public function getGender()
    {
        return $this->get(self::GENDER);
    }

    /**
     * Sets value of 'industry' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIndustry($value)
    {
        return $this->set(self::INDUSTRY, $value);
    }

    /**
     * Returns value of 'industry' property
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->get(self::INDUSTRY);
    }

    /**
     * Sets value of 'income' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIncome($value)
    {
        return $this->set(self::INCOME, $value);
    }

    /**
     * Returns value of 'income' property
     *
     * @return string
     */
    public function getIncome()
    {
        return $this->get(self::INCOME);
    }

    /**
     * Sets value of 'job' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setJob($value)
    {
        return $this->set(self::JOB, $value);
    }

    /**
     * Returns value of 'job' property
     *
     * @return string
     */
    public function getJob()
    {
        return $this->get(self::JOB);
    }

    /**
     * Sets value of 'housingSituation' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHousingSituation($value)
    {
        return $this->set(self::HOUSINGSITUATION, $value);
    }

    /**
     * Returns value of 'housingSituation' property
     *
     * @return string
     */
    public function getHousingSituation()
    {
        return $this->get(self::HOUSINGSITUATION);
    }

    /**
     * Sets value of 'traffic' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTraffic($value)
    {
        return $this->set(self::TRAFFIC, $value);
    }

    /**
     * Returns value of 'traffic' property
     *
     * @return string
     */
    public function getTraffic()
    {
        return $this->get(self::TRAFFIC);
    }

    /**
     * Sets value of 'marriageCase' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMarriageCase($value)
    {
        return $this->set(self::MARRIAGECASE, $value);
    }

    /**
     * Returns value of 'marriageCase' property
     *
     * @return string
     */
    public function getMarriageCase()
    {
        return $this->get(self::MARRIAGECASE);
    }
}
