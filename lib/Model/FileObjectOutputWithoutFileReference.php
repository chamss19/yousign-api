<?php
/**
 * FileObjectOutputWithoutFileReference
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
 * FileObjectOutputWithoutFileReference Class Doc Comment
 *
 * @category Class
 * @package  YouSignClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FileObjectOutputWithoutFileReference implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FileObjectOutputWithoutFileReference';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'page' => 'int',
'position' => 'string',
'field_name' => 'string',
'mention' => 'string',
'mention2__internal' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'executed_at' => '\DateTime',
'reason' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'page' => 'int32',
'position' => null,
'field_name' => null,
'mention' => null,
'mention2__internal' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'executed_at' => 'date-time',
'reason' => null    ];

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
        'id' => 'id',
'page' => 'page',
'position' => 'position',
'field_name' => 'fieldName',
'mention' => 'mention',
'mention2__internal' => 'mention2 (internal)',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'executed_at' => 'executedAt',
'reason' => 'reason'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'page' => 'setPage',
'position' => 'setPosition',
'field_name' => 'setFieldName',
'mention' => 'setMention',
'mention2__internal' => 'setMention2Internal',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'executed_at' => 'setExecutedAt',
'reason' => 'setReason'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'page' => 'getPage',
'position' => 'getPosition',
'field_name' => 'getFieldName',
'mention' => 'getMention',
'mention2__internal' => 'getMention2Internal',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'executed_at' => 'getExecutedAt',
'reason' => 'getReason'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['field_name'] = isset($data['field_name']) ? $data['field_name'] : null;
        $this->container['mention'] = isset($data['mention']) ? $data['mention'] : null;
        $this->container['mention2__internal'] = isset($data['mention2__internal']) ? $data['mention2__internal'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['executed_at'] = isset($data['executed_at']) ? $data['executed_at'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : 'Signed by Yousign';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id of the object
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page Page of the visible signature. This property is ignored if fieldName is set. If you want a visible signature, you must set page, position and fieldName.
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param string $position Coordinates of the signature image to set. Format is : “llx,lly,urx,ury”. llx=left lower x coordinate, lly=left lower y coordinate, urx=upper right x coordinate, ury = upper right y coordinate. To get easily coordinates, you could use this tool : http://placeit.yousign.fr
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets field_name
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->container['field_name'];
    }

    /**
     * Sets field_name
     *
     * @param string $field_name Name of the signature field existing in the document
     *
     * @return $this
     */
    public function setFieldName($field_name)
    {
        $this->container['field_name'] = $field_name;

        return $this;
    }

    /**
     * Gets mention
     *
     * @return string
     */
    public function getMention()
    {
        return $this->container['mention'];
    }

    /**
     * Sets mention
     *
     * @param string $mention Text associated above the signature image.  You can use some variable inside : {{date.en}} {{date.fr}} {{time.en}} {{time.fr}} that it will be parsed to show the date of the signature.
     *
     * @return $this
     */
    public function setMention($mention)
    {
        $this->container['mention'] = $mention;

        return $this;
    }

    /**
     * Gets mention2__internal
     *
     * @return string
     */
    public function getMention2Internal()
    {
        return $this->container['mention2__internal'];
    }

    /**
     * Sets mention2__internal
     *
     * @param string $mention2__internal Text associated below the signature image.  You can use some variable inside : {{date.en}} {{date.fr}} {{time.en}} {{time.fr}} that it will be parsed to show the date of the signature.
     *
     * @return $this
     */
    public function setMention2Internal($mention2__internal)
    {
        $this->container['mention2__internal'] = $mention2__internal;

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
     * @param \DateTime $created_at Created date of the object
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
     * @param \DateTime $updated_at Updated date of the object
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets executed_at
     *
     * @return \DateTime
     */
    public function getExecutedAt()
    {
        return $this->container['executed_at'];
    }

    /**
     * Sets executed_at
     *
     * @param \DateTime $executed_at Date of signature or validation
     *
     * @return $this
     */
    public function setExecutedAt($executed_at)
    {
        $this->container['executed_at'] = $executed_at;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason The reason they are signing the agreement
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

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
