<?php
/**
 * Recipient
 *
 * PHP version 5
 *
 * @category Class
 * @package  PaymentRails\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Payment Rails API
 *
 * No descripton provided (generated by PaymentRails Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.31.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace PaymentRails\Client\Model;

use \ArrayAccess;

/**
 * Recipient Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     PaymentRails\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Recipient implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Recipient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'name' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'compliance_status' => '\PaymentRails\Client\Model\RecipientComplianceStatus',
        'type' => 'string',
        'address' => '\PaymentRails\Client\Model\RecipientAddress',
        'time_zone' => 'string',
        'language' => 'string',
        'dob' => 'string',
        'ssn' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'payout' => '\PaymentRails\Client\Model\RecipientPayoutMethods',
        'primary_currency' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'id' => 'id',
        'name' => 'name',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'email' => 'email',
        'compliance_status' => 'complianceStatus',
        'type' => 'type',
        'address' => 'address',
        'time_zone' => 'timeZone',
        'language' => 'language',
        'dob' => 'dob',
        'ssn' => 'ssn',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'payout' => 'payout',
        'primary_currency' => 'primaryCurrency'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'id' => 'setId',
        'name' => 'setName',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'compliance_status' => 'setComplianceStatus',
        'type' => 'setType',
        'address' => 'setAddress',
        'time_zone' => 'setTimeZone',
        'language' => 'setLanguage',
        'dob' => 'setDob',
        'ssn' => 'setSsn',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'payout' => 'setPayout',
        'primary_currency' => 'setPrimaryCurrency'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'id' => 'getId',
        'name' => 'getName',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'compliance_status' => 'getComplianceStatus',
        'type' => 'getType',
        'address' => 'getAddress',
        'time_zone' => 'getTimeZone',
        'language' => 'getLanguage',
        'dob' => 'getDob',
        'ssn' => 'getSsn',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'payout' => 'getPayout',
        'primary_currency' => 'getPrimaryCurrency'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['compliance_status'] = isset($data['compliance_status']) ? $data['compliance_status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['time_zone'] = isset($data['time_zone']) ? $data['time_zone'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['dob'] = isset($data['dob']) ? $data['dob'] : null;
        $this->container['ssn'] = isset($data['ssn']) ? $data['ssn'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['payout'] = isset($data['payout']) ? $data['payout'] : null;
        $this->container['primary_currency'] = isset($data['primary_currency']) ? $data['primary_currency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['type']) && !preg_match("/individual|business/", $this->container['type'])) {
            $invalid_properties[] = "invalid value for 'type', must be conform to the pattern /individual|business/.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if (!preg_match("/individual|business/", $this->container['type'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Recipient identifier   R-XXXXXXXXXXXXXXXX
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name Recipient full name, required for business
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name Recipient first name, required for individual
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name Recipient last name, required for individual
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Recipient email address
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets compliance_status
     * @return \PaymentRails\Client\Model\RecipientComplianceStatus
     */
    public function getComplianceStatus()
    {
        return $this->container['compliance_status'];
    }

    /**
     * Sets compliance_status
     * @param \PaymentRails\Client\Model\RecipientComplianceStatus $compliance_status
     * @return $this
     */
    public function setComplianceStatus($compliance_status)
    {
        $this->container['compliance_status'] = $compliance_status;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {

        if (!preg_match("/individual|business/", $type)) {
            throw new \InvalidArgumentException('invalid value for $type when calling Recipient., must be conform to the pattern /individual|business/.');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets address
     * @return \PaymentRails\Client\Model\RecipientAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     * @param \PaymentRails\Client\Model\RecipientAddress $address
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets time_zone
     * @return string
     */
    public function getTimeZone()
    {
        return $this->container['time_zone'];
    }

    /**
     * Sets time_zone
     * @param string $time_zone
     * @return $this
     */
    public function setTimeZone($time_zone)
    {
        $this->container['time_zone'] = $time_zone;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets dob
     * @return string
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     * @param string $dob
     * @return $this
     */
    public function setDob($dob)
    {
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets ssn
     * @return string
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     * @param string $ssn
     * @return $this
     */
    public function setSsn($ssn)
    {
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets created_at
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param string $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param string $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets payout
     * @return \PaymentRails\Client\Model\RecipientPayoutMethods
     */
    public function getPayout()
    {
        return $this->container['payout'];
    }

    /**
     * Sets payout
     * @param \PaymentRails\Client\Model\RecipientPayoutMethods $payout
     * @return $this
     */
    public function setPayout($payout)
    {
        $this->container['payout'] = $payout;

        return $this;
    }

    /**
     * Gets primary_currency
     * @return string
     */
    public function getPrimaryCurrency()
    {
        return $this->container['primary_currency'];
    }

    /**
     * Sets primary_currency
     * @param string $primary_currency currency code
     * @return $this
     */
    public function setPrimaryCurrency($primary_currency)
    {
        $this->container['primary_currency'] = $primary_currency;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\PaymentRails\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\PaymentRails\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


