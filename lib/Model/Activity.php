<?php
/**
 * Activity
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
 * Activity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Activity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Activity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'registration' => 'string',
        'name' => 'string',
        'url' => 'string',
        'registration_date' => '\DateTime',
        'siret' => 'string',
        'legal_identifier' => 'string',
        'mcc' => 'int',
        'naf' => 'string',
        'is_principal' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'registration' => null,
        'name' => null,
        'url' => 'uri',
        'registration_date' => 'date',
        'siret' => null,
        'legal_identifier' => null,
        'mcc' => null,
        'naf' => null,
        'is_principal' => null
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
        'uuid' => 'uuid',
        'registration' => 'registration',
        'name' => 'name',
        'url' => 'url',
        'registration_date' => 'registration_date',
        'siret' => 'siret',
        'legal_identifier' => 'legal_identifier',
        'mcc' => 'mcc',
        'naf' => 'naf',
        'is_principal' => 'is_principal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'registration' => 'setRegistration',
        'name' => 'setName',
        'url' => 'setUrl',
        'registration_date' => 'setRegistrationDate',
        'siret' => 'setSiret',
        'legal_identifier' => 'setLegalIdentifier',
        'mcc' => 'setMcc',
        'naf' => 'setNaf',
        'is_principal' => 'setIsPrincipal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'registration' => 'getRegistration',
        'name' => 'getName',
        'url' => 'getUrl',
        'registration_date' => 'getRegistrationDate',
        'siret' => 'getSiret',
        'legal_identifier' => 'getLegalIdentifier',
        'mcc' => 'getMcc',
        'naf' => 'getNaf',
        'is_principal' => 'getIsPrincipal'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['registration'] = isset($data['registration']) ? $data['registration'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['siret'] = isset($data['siret']) ? $data['siret'] : null;
        $this->container['legal_identifier'] = isset($data['legal_identifier']) ? $data['legal_identifier'] : null;
        $this->container['mcc'] = isset($data['mcc']) ? $data['mcc'] : null;
        $this->container['naf'] = isset($data['naf']) ? $data['naf'] : null;
        $this->container['is_principal'] = isset($data['is_principal']) ? $data['is_principal'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['uuid']) && (mb_strlen($this->container['uuid']) < 1)) {
            $invalidProperties[] = "invalid value for 'uuid', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['url']) && (mb_strlen($this->container['url']) > 200)) {
            $invalidProperties[] = "invalid value for 'url', the character length must be smaller than or equal to 200.";
        }

        if (!is_null($this->container['siret']) && (mb_strlen($this->container['siret']) > 14)) {
            $invalidProperties[] = "invalid value for 'siret', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['legal_identifier']) && (mb_strlen($this->container['legal_identifier']) > 20)) {
            $invalidProperties[] = "invalid value for 'legal_identifier', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['mcc']) && ($this->container['mcc'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'mcc', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['mcc']) && ($this->container['mcc'] < 0)) {
            $invalidProperties[] = "invalid value for 'mcc', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['naf']) && (mb_strlen($this->container['naf']) > 5)) {
            $invalidProperties[] = "invalid value for 'naf', the character length must be smaller than or equal to 5.";
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid Unique identifier. This field is automatically generated.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {

        if (!is_null($uuid) && (mb_strlen($uuid) < 1)) {
            throw new \InvalidArgumentException('invalid length for $uuid when calling Activity., must be bigger than or equal to 1.');
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets registration
     *
     * @return string
     */
    public function getRegistration()
    {
        return $this->container['registration'];
    }

    /**
     * Sets registration
     *
     * @param string $registration registration
     *
     * @return $this
     */
    public function setRegistration($registration)
    {
        $this->container['registration'] = $registration;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Activity., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        if (!is_null($url) && (mb_strlen($url) > 200)) {
            throw new \InvalidArgumentException('invalid length for $url when calling Activity., must be smaller than or equal to 200.');
        }

        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets registration_date
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date
     *
     * @param \DateTime $registration_date registration_date
     *
     * @return $this
     */
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->container['siret'];
    }

    /**
     * Sets siret
     *
     * @param string $siret Siret number. Must be set if legal_identifier is not set.
     *
     * @return $this
     */
    public function setSiret($siret)
    {
        if (!is_null($siret) && (mb_strlen($siret) > 14)) {
            throw new \InvalidArgumentException('invalid length for $siret when calling Activity., must be smaller than or equal to 14.');
        }

        $this->container['siret'] = $siret;

        return $this;
    }

    /**
     * Gets legal_identifier
     *
     * @return string
     */
    public function getLegalIdentifier()
    {
        return $this->container['legal_identifier'];
    }

    /**
     * Sets legal_identifier
     *
     * @param string $legal_identifier Legal identifier. Must be set if siret is not set.
     *
     * @return $this
     */
    public function setLegalIdentifier($legal_identifier)
    {
        if (!is_null($legal_identifier) && (mb_strlen($legal_identifier) > 20)) {
            throw new \InvalidArgumentException('invalid length for $legal_identifier when calling Activity., must be smaller than or equal to 20.');
        }

        $this->container['legal_identifier'] = $legal_identifier;

        return $this;
    }

    /**
     * Gets mcc
     *
     * @return int
     */
    public function getMcc()
    {
        return $this->container['mcc'];
    }

    /**
     * Sets mcc
     *
     * @param int $mcc mcc
     *
     * @return $this
     */
    public function setMcc($mcc)
    {

        if (!is_null($mcc) && ($mcc > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $mcc when calling Activity., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($mcc) && ($mcc < 0)) {
            throw new \InvalidArgumentException('invalid value for $mcc when calling Activity., must be bigger than or equal to 0.');
        }

        $this->container['mcc'] = $mcc;

        return $this;
    }

    /**
     * Gets naf
     *
     * @return string
     */
    public function getNaf()
    {
        return $this->container['naf'];
    }

    /**
     * Sets naf
     *
     * @param string $naf naf
     *
     * @return $this
     */
    public function setNaf($naf)
    {
        if (!is_null($naf) && (mb_strlen($naf) > 5)) {
            throw new \InvalidArgumentException('invalid length for $naf when calling Activity., must be smaller than or equal to 5.');
        }

        $this->container['naf'] = $naf;

        return $this;
    }

    /**
     * Gets is_principal
     *
     * @return bool
     */
    public function getIsPrincipal()
    {
        return $this->container['is_principal'];
    }

    /**
     * Sets is_principal
     *
     * @param bool $is_principal is_principal
     *
     * @return $this
     */
    public function setIsPrincipal($is_principal)
    {
        $this->container['is_principal'] = $is_principal;

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


