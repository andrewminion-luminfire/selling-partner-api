<?php
/**
 * RejectedOrder
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Easy Ship
 *
 * The Selling Partner API for Easy Ship helps you build applications that help sellers manage and ship Amazon Easy Ship orders. Your Easy Ship applications can: * Get available time slots for packages to be scheduled for delivery. * Schedule, reschedule, and cancel Easy Ship orders. * Print labels, invoices, and warranties. See the [Marketplace Support Table](https://developer-docs.amazon.com/sp-api/docs/easyship-api-v2022-03-23-use-case-guide#marketplace-support-table) for the differences in Easy Ship operations by marketplace.
 *
 * The version of the OpenAPI document: 2022-03-23
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\EasyShipV20220323;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * RejectedOrder Class Doc Comment
 *
 * @category Class
 * @description A order which we couldn't schedule on your behalf. It contains its id, and information on the error.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class RejectedOrder extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RejectedOrder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amazon_order_id' => 'string',
        'error' => '\SellingPartnerApi\Model\EasyShipV20220323\Error'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amazon_order_id' => null,
        'error' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amazon_order_id' => 'amazonOrderId',
        'error' => 'error'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
        'error' => 'setError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
        'error' => 'getError'
    ];


    
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
        $this->container['amazon_order_id'] = $data['amazon_order_id'] ?? null;
        $this->container['error'] = $data['error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['amazon_order_id'] === null) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets amazon_order_id
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id
     *
     * @param string $amazon_order_id An Amazon-defined order identifier. Identifies the order that the seller wants to deliver using Amazon Easy Ship.
     *
     * @return self
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }
    /**
     * Gets error
     *
     * @return \SellingPartnerApi\Model\EasyShipV20220323\Error|null
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     *
     * @param \SellingPartnerApi\Model\EasyShipV20220323\Error|null $error error
     *
     * @return self
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }
}


