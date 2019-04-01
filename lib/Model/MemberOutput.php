<?php
/**
 * MemberOutput
 *
 * PHP version 5
 *
 * @category Class
 * @package  YouSign\Client
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

namespace YouSign\Client\Model;

use \ArrayAccess;
use \YouSign\Client\ObjectSerializer;

/**
 * MemberOutput Class Doc Comment
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MemberOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'MemberOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'user' => 'string',
'type' => 'string',
'firstname' => 'string',
'lastname' => 'string',
'email' => 'string',
'phone' => 'string',
'position' => 'int',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'status' => 'string',
'file_objects' => '\YouSign\Client\Model\FileObjectOutput[]',
'comment' => 'string',
'procedure' => 'string',
'operation_level' => 'string',
'operation_custom_modes' => 'string[]',
'mode_sms_configuration' => '\YouSign\Client\Model\ModeSmsConfiguration'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'user' => null,
'type' => null,
'firstname' => null,
'lastname' => null,
'email' => null,
'phone' => null,
'position' => 'int32',
'created_at' => 'date-time',
'updated_at' => 'date-time',
'status' => null,
'file_objects' => null,
'comment' => null,
'procedure' => null,
'operation_level' => null,
'operation_custom_modes' => null,
'mode_sms_configuration' => null    ];

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
'user' => 'user',
'type' => 'type',
'firstname' => 'firstname',
'lastname' => 'lastname',
'email' => 'email',
'phone' => 'phone',
'position' => 'position',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'status' => 'status',
'file_objects' => 'fileObjects',
'comment' => 'comment',
'procedure' => 'procedure',
'operation_level' => 'operationLevel',
'operation_custom_modes' => 'operationCustomModes',
'mode_sms_configuration' => 'modeSmsConfiguration'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'user' => 'setUser',
'type' => 'setType',
'firstname' => 'setFirstname',
'lastname' => 'setLastname',
'email' => 'setEmail',
'phone' => 'setPhone',
'position' => 'setPosition',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'status' => 'setStatus',
'file_objects' => 'setFileObjects',
'comment' => 'setComment',
'procedure' => 'setProcedure',
'operation_level' => 'setOperationLevel',
'operation_custom_modes' => 'setOperationCustomModes',
'mode_sms_configuration' => 'setModeSmsConfiguration'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'user' => 'getUser',
'type' => 'getType',
'firstname' => 'getFirstname',
'lastname' => 'getLastname',
'email' => 'getEmail',
'phone' => 'getPhone',
'position' => 'getPosition',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'status' => 'getStatus',
'file_objects' => 'getFileObjects',
'comment' => 'getComment',
'procedure' => 'getProcedure',
'operation_level' => 'getOperationLevel',
'operation_custom_modes' => 'getOperationCustomModes',
'mode_sms_configuration' => 'getModeSmsConfiguration'    ];

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

    const TYPE_SIGNER = 'signer';
const TYPE_VALIDATOR = 'validator';
const STATUS_PENDING = 'pending';
const STATUS_PROCESSING = 'processing';
const STATUS_DONE = 'done';
const STATUS_REFUSED = 'refused';
const OPERATION_LEVEL_NONE = 'none';
const OPERATION_LEVEL_CUSTOM = 'custom';
const OPERATION_CUSTOM_MODES_SMS = 'sms';
const OPERATION_CUSTOM_MODES_INWEBO = 'inwebo';
const OPERATION_CUSTOM_MODES_EMAIL = 'email';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SIGNER,
self::TYPE_VALIDATOR,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
self::STATUS_PROCESSING,
self::STATUS_DONE,
self::STATUS_REFUSED,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationLevelAllowableValues()
    {
        return [
            self::OPERATION_LEVEL_NONE,
self::OPERATION_LEVEL_CUSTOM,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperationCustomModesAllowableValues()
    {
        return [
            self::OPERATION_CUSTOM_MODES_SMS,
self::OPERATION_CUSTOM_MODES_INWEBO,
self::OPERATION_CUSTOM_MODES_EMAIL,        ];
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
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'signer';
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['file_objects'] = isset($data['file_objects']) ? $data['file_objects'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['procedure'] = isset($data['procedure']) ? $data['procedure'] : null;
        $this->container['operation_level'] = isset($data['operation_level']) ? $data['operation_level'] : null;
        $this->container['operation_custom_modes'] = isset($data['operation_custom_modes']) ? $data['operation_custom_modes'] : null;
        $this->container['mode_sms_configuration'] = isset($data['mode_sms_configuration']) ? $data['mode_sms_configuration'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOperationLevelAllowableValues();
        if (!is_null($this->container['operation_level']) && !in_array($this->container['operation_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operation_level', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param string $user Internal user associated with the member. In this case, informations about the member will be informations of the user (first name, last name, phone number and email).
     *
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Type of a member. \"signer\" to sign documents (legally) and \"validator\" to validate documents.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->container['firstname'];
    }

    /**
     * Sets firstname
     *
     * @param string $firstname Firstname of an external member.
     *
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->container['firstname'] = $firstname;

        return $this;
    }

    /**
     * Gets lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->container['lastname'];
    }

    /**
     * Sets lastname
     *
     * @param string $lastname Lastname of an external member.
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email Email of an external member.
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone Phone of an external member.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param int $position Position of the member if ordered is set to true. Example with two members, the first one could have a position set to 1, the second one set to 2. In this case, when the procedure starts, only the first member will be notified and could validate the documents. The second one could not validate the documents, he will be notified when the first signer is notified.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

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
     * @param \DateTime $created_at created_at
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
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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
     * Gets file_objects
     *
     * @return \YouSign\Client\Model\FileObjectOutput[]
     */
    public function getFileObjects()
    {
        return $this->container['file_objects'];
    }

    /**
     * Sets file_objects
     *
     * @param \YouSign\Client\Model\FileObjectOutput[] $file_objects file_objects
     *
     * @return $this
     */
    public function setFileObjects($file_objects)
    {
        $this->container['file_objects'] = $file_objects;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment Comment of a member when he refuses a signature
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets procedure
     *
     * @return string
     */
    public function getProcedure()
    {
        return $this->container['procedure'];
    }

    /**
     * Sets procedure
     *
     * @param string $procedure Procedure id reference
     *
     * @return $this
     */
    public function setProcedure($procedure)
    {
        $this->container['procedure'] = $procedure;

        return $this;
    }

    /**
     * Gets operation_level
     *
     * @return string
     */
    public function getOperationLevel()
    {
        return $this->container['operation_level'];
    }

    /**
     * Sets operation_level
     *
     * @param string $operation_level operation_level
     *
     * @return $this
     */
    public function setOperationLevel($operation_level)
    {
        $allowedValues = $this->getOperationLevelAllowableValues();
        if (!is_null($operation_level) && !in_array($operation_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation_level', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_level'] = $operation_level;

        return $this;
    }

    /**
     * Gets operation_custom_modes
     *
     * @return string[]
     */
    public function getOperationCustomModes()
    {
        return $this->container['operation_custom_modes'];
    }

    /**
     * Sets operation_custom_modes
     *
     * @param string[] $operation_custom_modes operation_custom_modes
     *
     * @return $this
     */
    public function setOperationCustomModes($operation_custom_modes)
    {
        $allowedValues = $this->getOperationCustomModesAllowableValues();
        if (!is_null($operation_custom_modes) && array_diff($operation_custom_modes, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operation_custom_modes', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operation_custom_modes'] = $operation_custom_modes;

        return $this;
    }

    /**
     * Gets mode_sms_configuration
     *
     * @return \YouSign\Client\Model\ModeSmsConfiguration
     */
    public function getModeSmsConfiguration()
    {
        return $this->container['mode_sms_configuration'];
    }

    /**
     * Sets mode_sms_configuration
     *
     * @param \YouSign\Client\Model\ModeSmsConfiguration $mode_sms_configuration mode_sms_configuration
     *
     * @return $this
     */
    public function setModeSmsConfiguration($mode_sms_configuration)
    {
        $this->container['mode_sms_configuration'] = $mode_sms_configuration;

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
