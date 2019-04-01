<?php
/**
 * ServerStampInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  YouSignClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yousign API Swagger
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.1
 * Contact: support@yousign.fr
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.5
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace YouSignClient\Model;

use \ArrayAccess;
use \YouSignClient\ObjectSerializer;

/**
 * ServerStampInput Class Doc Comment
 *
 * @category Class
 * @package  YouSignClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServerStampInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServerStampInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'file' => 'string',
'certificate' => 'string',
'config' => '\YouSignClient\Model\ServerStampConfig[]',
'file_objects' => '\YouSignClient\Model\FileObjectInputWithoutFileReference[]',
'sign_image' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'file' => null,
'certificate' => null,
'config' => null,
'file_objects' => null,
'sign_image' => null    ];

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
        'file' => 'file',
'certificate' => 'certificate',
'config' => 'config',
'file_objects' => 'fileObjects',
'sign_image' => 'signImage'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'file' => 'setFile',
'certificate' => 'setCertificate',
'config' => 'setConfig',
'file_objects' => 'setFileObjects',
'sign_image' => 'setSignImage'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'file' => 'getFile',
'certificate' => 'getCertificate',
'config' => 'getConfig',
'file_objects' => 'getFileObjects',
'sign_image' => 'getSignImage'    ];

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
        $this->container['file'] = isset($data['file']) ? $data['file'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['file_objects'] = isset($data['file_objects']) ? $data['file_objects'] : null;
        $this->container['sign_image'] = isset($data['sign_image']) ? $data['sign_image'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['file'] === null) {
            $invalidProperties[] = "'file' can't be null";
        }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
        if ($this->container['file_objects'] === null) {
            $invalidProperties[] = "'file_objects' can't be null";
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
     * Gets file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->container['file'];
    }

    /**
     * Sets file
     *
     * @param string $file Resource file uri
     *
     * @return $this
     */
    public function setFile($file)
    {
        $this->container['file'] = $file;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string $certificate Resource certificate uri (please contact support for more informations)
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets config
     *
     * @return \YouSignClient\Model\ServerStampConfig[]
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param \YouSignClient\Model\ServerStampConfig[] $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets file_objects
     *
     * @return \YouSignClient\Model\FileObjectInputWithoutFileReference[]
     */
    public function getFileObjects()
    {
        return $this->container['file_objects'];
    }

    /**
     * Sets file_objects
     *
     * @param \YouSignClient\Model\FileObjectInputWithoutFileReference[] $file_objects file_objects
     *
     * @return $this
     */
    public function setFileObjects($file_objects)
    {
        $this->container['file_objects'] = $file_objects;

        return $this;
    }

    /**
     * Gets sign_image
     *
     * @return string
     */
    public function getSignImage()
    {
        return $this->container['sign_image'];
    }

    /**
     * Sets sign_image
     *
     * @param string $sign_image Image signature in base 64
     *
     * @return $this
     */
    public function setSignImage($sign_image)
    {
        $this->container['sign_image'] = $sign_image;

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
