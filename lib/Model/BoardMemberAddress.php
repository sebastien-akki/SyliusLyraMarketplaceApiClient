<?php
/**
 * BoardMemberAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketplace API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.10.8
 * Contact: support@lyra-network.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * BoardMemberAddress Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BoardMemberAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'BoardMemberAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'street_number' => 'string',
        'street' => 'string',
        'district' => 'string',
        'zipcode' => 'string',
        'city' => 'string',
        'state' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'street_number' => null,
        'street' => null,
        'district' => null,
        'zipcode' => null,
        'city' => null,
        'state' => null,
        'country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'street_number' => 'street_number',
        'street' => 'street',
        'district' => 'district',
        'zipcode' => 'zipcode',
        'city' => 'city',
        'state' => 'state',
        'country' => 'country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'street_number' => 'setStreetNumber',
        'street' => 'setStreet',
        'district' => 'setDistrict',
        'zipcode' => 'setZipcode',
        'city' => 'setCity',
        'state' => 'setState',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'street_number' => 'getStreetNumber',
        'street' => 'getStreet',
        'district' => 'getDistrict',
        'zipcode' => 'getZipcode',
        'city' => 'getCity',
        'state' => 'getState',
        'country' => 'getCountry'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['street_number'] = isset($data['street_number']) ? $data['street_number'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['zipcode'] = isset($data['zipcode']) ? $data['zipcode'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['street_number']) && (mb_strlen($this->container['street_number']) > 5)) {
            $invalidProperties[] = "invalid value for 'street_number', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['street']) && (mb_strlen($this->container['street']) > 255)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['district']) && (mb_strlen($this->container['district']) > 127)) {
            $invalidProperties[] = "invalid value for 'district', the character length must be smaller than or equal to 127.";
        }

        if (!is_null($this->container['zipcode']) && (mb_strlen($this->container['zipcode']) > 64)) {
            $invalidProperties[] = "invalid value for 'zipcode', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['city']) && (mb_strlen($this->container['city']) > 128)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['state']) && (mb_strlen($this->container['state']) > 127)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 127.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country']) < 1)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/[A-Z]{2}/", $this->container['country'])) {
            $invalidProperties[] = "invalid value for 'country', must be conform to the pattern /[A-Z]{2}/.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets street_number
     *
     * @return string
     */
    public function getStreetNumber()
    {
        return $this->container['street_number'];
    }

    /**
     * Sets street_number
     *
     * @param string $street_number street_number
     *
     * @return $this
     */
    public function setStreetNumber($street_number)
    {
        if (!is_null($street_number) && (mb_strlen($street_number) > 5)) {
            throw new \InvalidArgumentException('invalid length for $street_number when calling BoardMemberAddress., must be smaller than or equal to 5.');
        }

        $this->container['street_number'] = $street_number;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        if (!is_null($street) && (mb_strlen($street) > 255)) {
            throw new \InvalidArgumentException('invalid length for $street when calling BoardMemberAddress., must be smaller than or equal to 255.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
     * Sets district
     *
     * @param string $district district
     *
     * @return $this
     */
    public function setDistrict($district)
    {
        if (!is_null($district) && (mb_strlen($district) > 127)) {
            throw new \InvalidArgumentException('invalid length for $district when calling BoardMemberAddress., must be smaller than or equal to 127.');
        }

        $this->container['district'] = $district;

        return $this;
    }

    /**
     * Gets zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->container['zipcode'];
    }

    /**
     * Sets zipcode
     *
     * @param string $zipcode zipcode
     *
     * @return $this
     */
    public function setZipcode($zipcode)
    {
        if (!is_null($zipcode) && (mb_strlen($zipcode) > 64)) {
            throw new \InvalidArgumentException('invalid length for $zipcode when calling BoardMemberAddress., must be smaller than or equal to 64.');
        }

        $this->container['zipcode'] = $zipcode;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (mb_strlen($city) > 128)) {
            throw new \InvalidArgumentException('invalid length for $city when calling BoardMemberAddress., must be smaller than or equal to 128.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        if (!is_null($state) && (mb_strlen($state) > 127)) {
            throw new \InvalidArgumentException('invalid length for $state when calling BoardMemberAddress., must be smaller than or equal to 127.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling BoardMemberAddress., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country when calling BoardMemberAddress., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/[A-Z]{2}/", $country))) {
            throw new \InvalidArgumentException("invalid value for $country when calling BoardMemberAddress., must conform to the pattern /[A-Z]{2}/.");
        }

        $this->container['country'] = $country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


