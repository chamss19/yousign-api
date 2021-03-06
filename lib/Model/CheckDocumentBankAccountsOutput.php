<?php
/**
 * CheckDocumentBankAccountsOutput
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
 * CheckDocumentBankAccountsOutput Class Doc Comment
 *
 * @category Class
 * @package  YouSign\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckDocumentBankAccountsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CheckDocumentBankAccountsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'created_at' => '\DateTime',
'updated_at' => '\DateTime',
'first_name' => 'string',
'birth_name' => 'string',
'last_name' => 'string',
'iban' => 'string',
'company_name' => 'string',
'document_type' => 'string',
'company' => 'string',
'creator' => 'string',
'extracted_iban' => 'string',
'first_name_valid' => 'bool',
'birth_name_valid' => 'bool',
'last_name_valid' => 'bool',
'company_name_valid' => 'bool',
'iban_valid' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'created_at' => 'date-time',
'updated_at' => 'date-time',
'first_name' => null,
'birth_name' => null,
'last_name' => null,
'iban' => null,
'company_name' => null,
'document_type' => null,
'company' => null,
'creator' => null,
'extracted_iban' => null,
'first_name_valid' => null,
'birth_name_valid' => null,
'last_name_valid' => null,
'company_name_valid' => null,
'iban_valid' => null    ];

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
'created_at' => 'createdAt',
'updated_at' => 'updatedAt',
'first_name' => 'firstName',
'birth_name' => 'birthName',
'last_name' => 'lastName',
'iban' => 'iban',
'company_name' => 'companyName',
'document_type' => 'documentType',
'company' => 'company',
'creator' => 'creator',
'extracted_iban' => 'extractedIban',
'first_name_valid' => 'firstNameValid',
'birth_name_valid' => 'birthNameValid',
'last_name_valid' => 'lastNameValid',
'company_name_valid' => 'companyNameValid',
'iban_valid' => 'ibanValid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'created_at' => 'setCreatedAt',
'updated_at' => 'setUpdatedAt',
'first_name' => 'setFirstName',
'birth_name' => 'setBirthName',
'last_name' => 'setLastName',
'iban' => 'setIban',
'company_name' => 'setCompanyName',
'document_type' => 'setDocumentType',
'company' => 'setCompany',
'creator' => 'setCreator',
'extracted_iban' => 'setExtractedIban',
'first_name_valid' => 'setFirstNameValid',
'birth_name_valid' => 'setBirthNameValid',
'last_name_valid' => 'setLastNameValid',
'company_name_valid' => 'setCompanyNameValid',
'iban_valid' => 'setIbanValid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'created_at' => 'getCreatedAt',
'updated_at' => 'getUpdatedAt',
'first_name' => 'getFirstName',
'birth_name' => 'getBirthName',
'last_name' => 'getLastName',
'iban' => 'getIban',
'company_name' => 'getCompanyName',
'document_type' => 'getDocumentType',
'company' => 'getCompany',
'creator' => 'getCreator',
'extracted_iban' => 'getExtractedIban',
'first_name_valid' => 'getFirstNameValid',
'birth_name_valid' => 'getBirthNameValid',
'last_name_valid' => 'getLastNameValid',
'company_name_valid' => 'getCompanyNameValid',
'iban_valid' => 'getIbanValid'    ];

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

    const DOCUMENT_TYPE_RIB = 'RIB';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentTypeAllowableValues()
    {
        return [
            self::DOCUMENT_TYPE_RIB,        ];
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
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['birth_name'] = isset($data['birth_name']) ? $data['birth_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['iban'] = isset($data['iban']) ? $data['iban'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['document_type'] = isset($data['document_type']) ? $data['document_type'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['extracted_iban'] = isset($data['extracted_iban']) ? $data['extracted_iban'] : null;
        $this->container['first_name_valid'] = isset($data['first_name_valid']) ? $data['first_name_valid'] : null;
        $this->container['birth_name_valid'] = isset($data['birth_name_valid']) ? $data['birth_name_valid'] : null;
        $this->container['last_name_valid'] = isset($data['last_name_valid']) ? $data['last_name_valid'] : null;
        $this->container['company_name_valid'] = isset($data['company_name_valid']) ? $data['company_name_valid'] : null;
        $this->container['iban_valid'] = isset($data['iban_valid']) ? $data['iban_valid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($this->container['document_type']) && !in_array($this->container['document_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'document_type', must be one of '%s'",
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
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name Firstname to check on document
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets birth_name
     *
     * @return string
     */
    public function getBirthName()
    {
        return $this->container['birth_name'];
    }

    /**
     * Sets birth_name
     *
     * @param string $birth_name Birth name to check on document
     *
     * @return $this
     */
    public function setBirthName($birth_name)
    {
        $this->container['birth_name'] = $birth_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Lastname to check on document
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

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
     * @param string $iban Iban to check on document
     *
     * @return $this
     */
    public function setIban($iban)
    {
        $this->container['iban'] = $iban;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name Company name to check on document
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets document_type
     *
     * @return string
     */
    public function getDocumentType()
    {
        return $this->container['document_type'];
    }

    /**
     * Sets document_type
     *
     * @param string $document_type Type of document
     *
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowedValues = $this->getDocumentTypeAllowableValues();
        if (!is_null($document_type) && !in_array($document_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'document_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_type'] = $document_type;

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
     * @param string $company Company creator of the object
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param string $creator Creator of the object
     *
     * @return $this
     */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets extracted_iban
     *
     * @return string
     */
    public function getExtractedIban()
    {
        return $this->container['extracted_iban'];
    }

    /**
     * Sets extracted_iban
     *
     * @param string $extracted_iban Extracted iban on the document
     *
     * @return $this
     */
    public function setExtractedIban($extracted_iban)
    {
        $this->container['extracted_iban'] = $extracted_iban;

        return $this;
    }

    /**
     * Gets first_name_valid
     *
     * @return bool
     */
    public function getFirstNameValid()
    {
        return $this->container['first_name_valid'];
    }

    /**
     * Sets first_name_valid
     *
     * @param bool $first_name_valid Defines if one firstname sent in the input is valid
     *
     * @return $this
     */
    public function setFirstNameValid($first_name_valid)
    {
        $this->container['first_name_valid'] = $first_name_valid;

        return $this;
    }

    /**
     * Gets birth_name_valid
     *
     * @return bool
     */
    public function getBirthNameValid()
    {
        return $this->container['birth_name_valid'];
    }

    /**
     * Sets birth_name_valid
     *
     * @param bool $birth_name_valid Defines if birth name sent in the input is valid
     *
     * @return $this
     */
    public function setBirthNameValid($birth_name_valid)
    {
        $this->container['birth_name_valid'] = $birth_name_valid;

        return $this;
    }

    /**
     * Gets last_name_valid
     *
     * @return bool
     */
    public function getLastNameValid()
    {
        return $this->container['last_name_valid'];
    }

    /**
     * Sets last_name_valid
     *
     * @param bool $last_name_valid Defines if lastname sent in the input is valid
     *
     * @return $this
     */
    public function setLastNameValid($last_name_valid)
    {
        $this->container['last_name_valid'] = $last_name_valid;

        return $this;
    }

    /**
     * Gets company_name_valid
     *
     * @return bool
     */
    public function getCompanyNameValid()
    {
        return $this->container['company_name_valid'];
    }

    /**
     * Sets company_name_valid
     *
     * @param bool $company_name_valid Defines if company name sent in the input is valid
     *
     * @return $this
     */
    public function setCompanyNameValid($company_name_valid)
    {
        $this->container['company_name_valid'] = $company_name_valid;

        return $this;
    }

    /**
     * Gets iban_valid
     *
     * @return bool
     */
    public function getIbanValid()
    {
        return $this->container['iban_valid'];
    }

    /**
     * Sets iban_valid
     *
     * @param bool $iban_valid Defines if iban sent in the input is valid
     *
     * @return $this
     */
    public function setIbanValid($iban_valid)
    {
        $this->container['iban_valid'] = $iban_valid;

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
