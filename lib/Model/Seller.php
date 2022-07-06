<?php
/**
 * Seller
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
 * Seller Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Seller implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Seller';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'uuid' => 'string',
        'external_ref' => 'string',
        'href' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'marketplace' => 'string',
        'reference' => 'string',
        'description' => 'string',
        'bic' => 'string',
        'iban' => 'string',
        'status' => 'string',
        'cashout_delay' => 'int',
        'is_marketplace_seller' => 'bool',
        'links' => '\Swagger\Client\Model\SellerLinks',
        'vouchers' => '\Swagger\Client\Model\SellerVoucher[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'uuid' => null,
        'external_ref' => null,
        'href' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'marketplace' => null,
        'reference' => null,
        'description' => null,
        'bic' => null,
        'iban' => null,
        'status' => null,
        'cashout_delay' => null,
        'is_marketplace_seller' => null,
        'links' => null,
        'vouchers' => null
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
        'external_ref' => 'external_ref',
        'href' => 'href',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'marketplace' => 'marketplace',
        'reference' => 'reference',
        'description' => 'description',
        'bic' => 'bic',
        'iban' => 'iban',
        'status' => 'status',
        'cashout_delay' => 'cashout_delay',
        'is_marketplace_seller' => 'is_marketplace_seller',
        'links' => 'links',
        'vouchers' => 'vouchers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'external_ref' => 'setExternalRef',
        'href' => 'setHref',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'marketplace' => 'setMarketplace',
        'reference' => 'setReference',
        'description' => 'setDescription',
        'bic' => 'setBic',
        'iban' => 'setIban',
        'status' => 'setStatus',
        'cashout_delay' => 'setCashoutDelay',
        'is_marketplace_seller' => 'setIsMarketplaceSeller',
        'links' => 'setLinks',
        'vouchers' => 'setVouchers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'external_ref' => 'getExternalRef',
        'href' => 'getHref',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'marketplace' => 'getMarketplace',
        'reference' => 'getReference',
        'description' => 'getDescription',
        'bic' => 'getBic',
        'iban' => 'getIban',
        'status' => 'getStatus',
        'cashout_delay' => 'getCashoutDelay',
        'is_marketplace_seller' => 'getIsMarketplaceSeller',
        'links' => 'getLinks',
        'vouchers' => 'getVouchers'
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

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_INACTIVE = 'INACTIVE';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_INACTIVE,
        ];
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
        $this->container['external_ref'] = isset($data['external_ref']) ? $data['external_ref'] : null;
        $this->container['href'] = isset($data['href']) ? $data['href'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['marketplace'] = isset($data['marketplace']) ? $data['marketplace'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['cashout_delay'] = isset($data['cashout_delay']) ? $data['cashout_delay'] : null;
        $this->container['is_marketplace_seller'] = isset($data['is_marketplace_seller']) ? $data['is_marketplace_seller'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['vouchers'] = isset($data['vouchers']) ? $data['vouchers'] : null;
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

        if (!is_null($this->container['external_ref']) && (mb_strlen($this->container['external_ref']) > 50)) {
            $invalidProperties[] = "invalid value for 'external_ref', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['external_ref']) && (mb_strlen($this->container['external_ref']) < 1)) {
            $invalidProperties[] = "invalid value for 'external_ref', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['marketplace'] === null) {
            $invalidProperties[] = "'marketplace' can't be null";
        }
        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) < 1)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['bic']) && (mb_strlen($this->container['bic']) > 11)) {
            $invalidProperties[] = "invalid value for 'bic', the character length must be smaller than or equal to 11.";
        }

        if (!is_null($this->container['iban']) && (mb_strlen($this->container['iban']) > 34)) {
            $invalidProperties[] = "invalid value for 'iban', the character length must be smaller than or equal to 34.";
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['cashout_delay']) && ($this->container['cashout_delay'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'cashout_delay', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['cashout_delay']) && ($this->container['cashout_delay'] < 0)) {
            $invalidProperties[] = "invalid value for 'cashout_delay', must be bigger than or equal to 0.";
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
            throw new \InvalidArgumentException('invalid length for $uuid when calling Seller., must be bigger than or equal to 1.');
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets external_ref
     *
     * @return string
     */
    public function getExternalRef()
    {
        return $this->container['external_ref'];
    }

    /**
     * Sets external_ref
     *
     * @param string $external_ref external_ref
     *
     * @return $this
     */
    public function setExternalRef($external_ref)
    {
        if (!is_null($external_ref) && (mb_strlen($external_ref) > 50)) {
            throw new \InvalidArgumentException('invalid length for $external_ref when calling Seller., must be smaller than or equal to 50.');
        }
        if (!is_null($external_ref) && (mb_strlen($external_ref) < 1)) {
            throw new \InvalidArgumentException('invalid length for $external_ref when calling Seller., must be bigger than or equal to 1.');
        }

        $this->container['external_ref'] = $external_ref;

        return $this;
    }

    /**
     * Gets href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->container['href'];
    }

    /**
     * Sets href
     *
     * @param string $href href
     *
     * @return $this
     */
    public function setHref($href)
    {
        $this->container['href'] = $href;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at Creation date. This field is automatically generated.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at Date of the last modification. This field is automatically generated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets marketplace
     *
     * @return string
     */
    public function getMarketplace()
    {
        return $this->container['marketplace'];
    }

    /**
     * Sets marketplace
     *
     * @param string $marketplace marketplace
     *
     * @return $this
     */
    public function setMarketplace($marketplace)
    {
        $this->container['marketplace'] = $marketplace;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Seller., must be smaller than or equal to 255.');
        }
        if (!is_null($reference) && (mb_strlen($reference) < 1)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling Seller., must be bigger than or equal to 1.');
        }

        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        if (!is_null($description) && (mb_strlen($description) > 255)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Seller., must be smaller than or equal to 255.');
        }
        if (!is_null($description) && (mb_strlen($description) < 1)) {
            throw new \InvalidArgumentException('invalid length for $description when calling Seller., must be bigger than or equal to 1.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        if (!is_null($bic) && (mb_strlen($bic) > 11)) {
            throw new \InvalidArgumentException('invalid length for $bic when calling Seller., must be smaller than or equal to 11.');
        }

        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets iban
     *
     * @return string
     */
    public function getIban()
    {
        return $this->container['iban'];
    }

    /**
     * Sets iban
     *
     * @param string $iban iban
     *
     * @return $this
     */
    public function setIban($iban)
    {
        if (!is_null($iban) && (mb_strlen($iban) > 34)) {
            throw new \InvalidArgumentException('invalid length for $iban when calling Seller., must be smaller than or equal to 34.');
        }

        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets cashout_delay
     *
     * @return int
     */
    public function getCashoutDelay()
    {
        return $this->container['cashout_delay'];
    }

    /**
     * Sets cashout_delay
     *
     * @param int $cashout_delay cashout_delay
     *
     * @return $this
     */
    public function setCashoutDelay($cashout_delay)
    {

        if (!is_null($cashout_delay) && ($cashout_delay > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $cashout_delay when calling Seller., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($cashout_delay) && ($cashout_delay < 0)) {
            throw new \InvalidArgumentException('invalid value for $cashout_delay when calling Seller., must be bigger than or equal to 0.');
        }

        $this->container['cashout_delay'] = $cashout_delay;

        return $this;
    }

    /**
     * Gets is_marketplace_seller
     *
     * @return bool
     */
    public function getIsMarketplaceSeller()
    {
        return $this->container['is_marketplace_seller'];
    }

    /**
     * Sets is_marketplace_seller
     *
     * @param bool $is_marketplace_seller is_marketplace_seller
     *
     * @return $this
     */
    public function setIsMarketplaceSeller($is_marketplace_seller)
    {
        $this->container['is_marketplace_seller'] = $is_marketplace_seller;

        return $this;
    }

    /**
     * Gets links
     *
     * @return \Swagger\Client\Model\SellerLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\SellerLinks $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets vouchers
     *
     * @return \Swagger\Client\Model\SellerVoucher[]
     */
    public function getVouchers()
    {
        return $this->container['vouchers'];
    }

    /**
     * Sets vouchers
     *
     * @param \Swagger\Client\Model\SellerVoucher[] $vouchers vouchers
     *
     * @return $this
     */
    public function setVouchers($vouchers)
    {
        $this->container['vouchers'] = $vouchers;

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


