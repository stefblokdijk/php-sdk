<?php
/**
 * RecipientPayoutMethods
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
 * RecipientPayoutMethods Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     PaymentRails\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RecipientPayoutMethods implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecipientPayoutMethods';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'autoswitch' => '\PaymentRails\Client\Model\RecipientPayoutMethodsLimit',
        'holdup' => '\PaymentRails\Client\Model\RecipientPayoutMethodsLimit',
        'primary' => '\PaymentRails\Client\Model\RecipientPayoutMethodsPrimary',
        'accounts' => '\PaymentRails\Client\Model\RecipientPayoutAccounts'
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
        'autoswitch' => 'autoswitch',
        'holdup' => 'holdup',
        'primary' => 'primary',
        'accounts' => 'accounts'
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
        'autoswitch' => 'setAutoswitch',
        'holdup' => 'setHoldup',
        'primary' => 'setPrimary',
        'accounts' => 'setAccounts'
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
        'autoswitch' => 'getAutoswitch',
        'holdup' => 'getHoldup',
        'primary' => 'getPrimary',
        'accounts' => 'getAccounts'
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
        $this->container['autoswitch'] = isset($data['autoswitch']) ? $data['autoswitch'] : null;
        $this->container['holdup'] = isset($data['holdup']) ? $data['holdup'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['accounts'] = isset($data['accounts']) ? $data['accounts'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets autoswitch
     * @return \PaymentRails\Client\Model\RecipientPayoutMethodsLimit
     */
    public function getAutoswitch()
    {
        return $this->container['autoswitch'];
    }

    /**
     * Sets autoswitch
     * @param \PaymentRails\Client\Model\RecipientPayoutMethodsLimit $autoswitch
     * @return $this
     */
    public function setAutoswitch($autoswitch)
    {
        $this->container['autoswitch'] = $autoswitch;

        return $this;
    }

    /**
     * Gets holdup
     * @return \PaymentRails\Client\Model\RecipientPayoutMethodsLimit
     */
    public function getHoldup()
    {
        return $this->container['holdup'];
    }

    /**
     * Sets holdup
     * @param \PaymentRails\Client\Model\RecipientPayoutMethodsLimit $holdup
     * @return $this
     */
    public function setHoldup($holdup)
    {
        $this->container['holdup'] = $holdup;

        return $this;
    }

    /**
     * Gets primary
     * @return \PaymentRails\Client\Model\RecipientPayoutMethodsPrimary
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     * @param \PaymentRails\Client\Model\RecipientPayoutMethodsPrimary $primary
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets accounts
     * @return \PaymentRails\Client\Model\RecipientPayoutAccounts
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     * @param \PaymentRails\Client\Model\RecipientPayoutAccounts $accounts
     * @return $this
     */
    public function setAccounts($accounts)
    {
        $this->container['accounts'] = $accounts;

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


