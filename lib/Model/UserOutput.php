<?php
/**
 * UserOutput
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * UserOutput Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'firstname' => 'string',
'lastname' => 'string',
'full_name' => 'string',
'title' => 'string',
'email' => 'string',
'phone' => 'string',
'status' => 'string',
'company' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'config' => 'object',
'saml_name_id' => 'string',
'default_sign_image' => 'string',
'fast_sign' => 'bool',
'group' => '\Swagger\Client\Model\UserGroup',
'notifications' => 'object',
'deleted' => 'bool',
'deleted_at' => '\DateTime',
'inwebo_user_request__internal' => '\Swagger\Client\Model\InweboUserRequest'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'firstname' => null,
'lastname' => null,
'full_name' => null,
'title' => null,
'email' => null,
'phone' => null,
'status' => null,
'company' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'config' => null,
'saml_name_id' => null,
'default_sign_image' => null,
'fast_sign' => null,
'group' => null,
'notifications' => null,
'deleted' => null,
'deleted_at' => 'date-time',
'inwebo_user_request__internal' => null    ];

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
'firstname' => 'firstname',
'lastname' => 'lastname',
'full_name' => 'fullName',
'title' => 'title',
'email' => 'email',
'phone' => 'phone',
'status' => 'status',
'company' => 'company',
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'config' => 'config',
'saml_name_id' => 'samlNameId',
'default_sign_image' => 'defaultSignImage',
'fast_sign' => 'fastSign',
'group' => 'group',
'notifications' => 'notifications',
'deleted' => 'deleted',
'deleted_at' => 'deletedAt',
'inwebo_user_request__internal' => 'inweboUserRequest (internal)'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'firstname' => 'setFirstname',
'lastname' => 'setLastname',
'full_name' => 'setFullName',
'title' => 'setTitle',
'email' => 'setEmail',
'phone' => 'setPhone',
'status' => 'setStatus',
'company' => 'setCompany',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'config' => 'setConfig',
'saml_name_id' => 'setSamlNameId',
'default_sign_image' => 'setDefaultSignImage',
'fast_sign' => 'setFastSign',
'group' => 'setGroup',
'notifications' => 'setNotifications',
'deleted' => 'setDeleted',
'deleted_at' => 'setDeletedAt',
'inwebo_user_request__internal' => 'setInweboUserRequestInternal'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'firstname' => 'getFirstname',
'lastname' => 'getLastname',
'full_name' => 'getFullName',
'title' => 'getTitle',
'email' => 'getEmail',
'phone' => 'getPhone',
'status' => 'getStatus',
'company' => 'getCompany',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'config' => 'getConfig',
'saml_name_id' => 'getSamlNameId',
'default_sign_image' => 'getDefaultSignImage',
'fast_sign' => 'getFastSign',
'group' => 'getGroup',
'notifications' => 'getNotifications',
'deleted' => 'getDeleted',
'deleted_at' => 'getDeletedAt',
'inwebo_user_request__internal' => 'getInweboUserRequestInternal'    ];

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

    const STATUS_NOT_ACTIVATED = 'not_activated';
const STATUS_ACTIVATED = 'activated';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_NOT_ACTIVATED,
self::STATUS_ACTIVATED,        ];
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
        $this->container['firstname'] = isset($data['firstname']) ? $data['firstname'] : null;
        $this->container['lastname'] = isset($data['lastname']) ? $data['lastname'] : null;
        $this->container['full_name'] = isset($data['full_name']) ? $data['full_name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['config'] = isset($data['config']) ? $data['config'] : null;
        $this->container['saml_name_id'] = isset($data['saml_name_id']) ? $data['saml_name_id'] : null;
        $this->container['default_sign_image'] = isset($data['default_sign_image']) ? $data['default_sign_image'] : null;
        $this->container['fast_sign'] = isset($data['fast_sign']) ? $data['fast_sign'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['notifications'] = isset($data['notifications']) ? $data['notifications'] : null;
        $this->container['deleted'] = isset($data['deleted']) ? $data['deleted'] : null;
        $this->container['deleted_at'] = isset($data['deleted_at']) ? $data['deleted_at'] : null;
        $this->container['inwebo_user_request__internal'] = isset($data['inwebo_user_request__internal']) ? $data['inwebo_user_request__internal'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['firstname'] === null) {
            $invalidProperties[] = "'firstname' can't be null";
        }
        if ($this->container['lastname'] === null) {
            $invalidProperties[] = "'lastname' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $id Object's ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $firstname User's firstname
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
     * @param string $lastname User's lastname
     *
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->container['lastname'] = $lastname;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name User's full name
     *
     * @return $this
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title User's title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $email User's email address
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
     * @param string $phone User's phone number (mobiles and landline telephones are supported). Phone number must be formatted to E164 (https://en.wikipedia.org/wiki/E.164) which includes the symbol '+' and the country code. For example : +33612131315. All countries are supported.
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
     * @param string $status User's status
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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company Company's ID
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

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
     * Gets config
     *
     * @return object
     */
    public function getConfig()
    {
        return $this->container['config'];
    }

    /**
     * Sets config
     *
     * @param object $config config
     *
     * @return $this
     */
    public function setConfig($config)
    {
        $this->container['config'] = $config;

        return $this;
    }

    /**
     * Gets saml_name_id
     *
     * @return string
     */
    public function getSamlNameId()
    {
        return $this->container['saml_name_id'];
    }

    /**
     * Sets saml_name_id
     *
     * @param string $saml_name_id ID of SAML
     *
     * @return $this
     */
    public function setSamlNameId($saml_name_id)
    {
        $this->container['saml_name_id'] = $saml_name_id;

        return $this;
    }

    /**
     * Gets default_sign_image
     *
     * @return string
     */
    public function getDefaultSignImage()
    {
        return $this->container['default_sign_image'];
    }

    /**
     * Sets default_sign_image
     *
     * @param string $default_sign_image ID of the default sign image.
     *
     * @return $this
     */
    public function setDefaultSignImage($default_sign_image)
    {
        $this->container['default_sign_image'] = $default_sign_image;

        return $this;
    }

    /**
     * Gets fast_sign
     *
     * @return bool
     */
    public function getFastSign()
    {
        return $this->container['fast_sign'];
    }

    /**
     * Sets fast_sign
     *
     * @param bool $fast_sign Defines if the fast signature is available for the user on the Yousign application
     *
     * @return $this
     */
    public function setFastSign($fast_sign)
    {
        $this->container['fast_sign'] = $fast_sign;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Swagger\Client\Model\UserGroup
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Swagger\Client\Model\UserGroup $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets notifications
     *
     * @return object
     */
    public function getNotifications()
    {
        return $this->container['notifications'];
    }

    /**
     * Sets notifications
     *
     * @param object $notifications Defines if the notifications are enable ou disable for entities
     *
     * @return $this
     */
    public function setNotifications($notifications)
    {
        $this->container['notifications'] = $notifications;

        return $this;
    }

    /**
     * Gets deleted
     *
     * @return bool
     */
    public function getDeleted()
    {
        return $this->container['deleted'];
    }

    /**
     * Sets deleted
     *
     * @param bool $deleted Defines if the User is deleted or not
     *
     * @return $this
     */
    public function setDeleted($deleted)
    {
        $this->container['deleted'] = $deleted;

        return $this;
    }

    /**
     * Gets deleted_at
     *
     * @return \DateTime
     */
    public function getDeletedAt()
    {
        return $this->container['deleted_at'];
    }

    /**
     * Sets deleted_at
     *
     * @param \DateTime $deleted_at Defines the date where the user has been deleted
     *
     * @return $this
     */
    public function setDeletedAt($deleted_at)
    {
        $this->container['deleted_at'] = $deleted_at;

        return $this;
    }

    /**
     * Gets inwebo_user_request__internal
     *
     * @return \Swagger\Client\Model\InweboUserRequest
     */
    public function getInweboUserRequestInternal()
    {
        return $this->container['inwebo_user_request__internal'];
    }

    /**
     * Sets inwebo_user_request__internal
     *
     * @param \Swagger\Client\Model\InweboUserRequest $inwebo_user_request__internal inwebo_user_request__internal
     *
     * @return $this
     */
    public function setInweboUserRequestInternal($inwebo_user_request__internal)
    {
        $this->container['inwebo_user_request__internal'] = $inwebo_user_request__internal;

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
