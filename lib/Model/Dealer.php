<?php
/**
 * Dealer
 *
 * PHP version 5
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketcheck Cars API
 *
 * <b>Access the New, Used and Certified cars inventories for all Car Dealers in US.</b> <br/>The data is sourced from online listings by over 44,000 Car dealers in US. At any time, there are about 6.2M searchable listings (about 1.9M unique VINs) for Used & Certified cars and about 6.6M (about 3.9M unique VINs) New Car listings from all over US. We use this API at the back for our website <a href='https://www.marketcheck.com' target='_blank'>www.marketcheck.com</a> and our Android and iOS mobile apps too.<br/><h5> Few useful links : </h5><ul><li>A quick view of the API and the use cases is depicated <a href='https://portals.marketcheck.com/mcapi/' target='_blank'>here</a></li><li>The Postman collection with various usages of the API is shared here https://www.getpostman.com/collections/2752684ff636cdd7bac2</li></ul>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace marketcheck\api\sdk\Model;

use \ArrayAccess;
use \marketcheck\api\sdk\ObjectSerializer;

/**
 * Dealer Class Doc Comment
 *
 * @category Class
 * @package  marketcheck\api\sdk
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Dealer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dealer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'franchise_id' => 'string',
        'name' => 'string',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'phone' => 'string',
        'car_type' => 'string',
        'target_url_new' => 'string',
        'target_url_used' => 'string',
        'target_url_certified' => 'string',
        'dealer_type' => 'string',
        'rating' => 'float',
        'distance' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'franchise_id' => null,
        'name' => null,
        'street' => null,
        'city' => null,
        'state' => null,
        'zip' => null,
        'latitude' => null,
        'longitude' => null,
        'phone' => null,
        'car_type' => null,
        'target_url_new' => null,
        'target_url_used' => null,
        'target_url_certified' => null,
        'dealer_type' => null,
        'rating' => null,
        'distance' => null
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
        'id' => 'id',
        'franchise_id' => 'franchise_id',
        'name' => 'name',
        'street' => 'street',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'phone' => 'phone',
        'car_type' => 'car_type',
        'target_url_new' => 'target_url_new',
        'target_url_used' => 'target_url_used',
        'target_url_certified' => 'target_url_certified',
        'dealer_type' => 'dealer_type',
        'rating' => 'rating',
        'distance' => 'distance'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'franchise_id' => 'setFranchiseId',
        'name' => 'setName',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'phone' => 'setPhone',
        'car_type' => 'setCarType',
        'target_url_new' => 'setTargetUrlNew',
        'target_url_used' => 'setTargetUrlUsed',
        'target_url_certified' => 'setTargetUrlCertified',
        'dealer_type' => 'setDealerType',
        'rating' => 'setRating',
        'distance' => 'setDistance'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'franchise_id' => 'getFranchiseId',
        'name' => 'getName',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'phone' => 'getPhone',
        'car_type' => 'getCarType',
        'target_url_new' => 'getTargetUrlNew',
        'target_url_used' => 'getTargetUrlUsed',
        'target_url_certified' => 'getTargetUrlCertified',
        'dealer_type' => 'getDealerType',
        'rating' => 'getRating',
        'distance' => 'getDistance'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['franchise_id'] = isset($data['franchise_id']) ? $data['franchise_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip'] = isset($data['zip']) ? $data['zip'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['car_type'] = isset($data['car_type']) ? $data['car_type'] : null;
        $this->container['target_url_new'] = isset($data['target_url_new']) ? $data['target_url_new'] : null;
        $this->container['target_url_used'] = isset($data['target_url_used']) ? $data['target_url_used'] : null;
        $this->container['target_url_certified'] = isset($data['target_url_certified']) ? $data['target_url_certified'] : null;
        $this->container['dealer_type'] = isset($data['dealer_type']) ? $data['dealer_type'] : 'independent';
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['distance'] = isset($data['distance']) ? $data['distance'] : null;
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
     * @param string $id The unique id associated with the dealer in the Marketcheck database
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets franchise_id
     *
     * @return string
     */
    public function getFranchiseId()
    {
        return $this->container['franchise_id'];
    }

    /**
     * Sets franchise_id
     *
     * @param string $franchise_id Dealer franchise id
     *
     * @return $this
     */
    public function setFranchiseId($franchise_id)
    {
        $this->container['franchise_id'] = $franchise_id;

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
     * @param string $name Name of the dealer
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street Street of the dealer
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City of the dealer
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state State of the dealer
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string $zip Zip of the dealer
     *
     * @return $this
     */
    public function setZip($zip)
    {
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string $latitude Latutide for the dealer location
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string $longitude Longitude for the dealer location
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

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
     * @param string $phone Contact no of the dealer
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets car_type
     *
     * @return string
     */
    public function getCarType()
    {
        return $this->container['car_type'];
    }

    /**
     * Sets car_type
     *
     * @param string $car_type Car type new|used|certified
     *
     * @return $this
     */
    public function setCarType($car_type)
    {
        $this->container['car_type'] = $car_type;

        return $this;
    }

    /**
     * Gets target_url_new
     *
     * @return string
     */
    public function getTargetUrlNew()
    {
        return $this->container['target_url_new'];
    }

    /**
     * Sets target_url_new
     *
     * @param string $target_url_new Target url for the new cars listing
     *
     * @return $this
     */
    public function setTargetUrlNew($target_url_new)
    {
        $this->container['target_url_new'] = $target_url_new;

        return $this;
    }

    /**
     * Gets target_url_used
     *
     * @return string
     */
    public function getTargetUrlUsed()
    {
        return $this->container['target_url_used'];
    }

    /**
     * Sets target_url_used
     *
     * @param string $target_url_used Target url for the used cars listing
     *
     * @return $this
     */
    public function setTargetUrlUsed($target_url_used)
    {
        $this->container['target_url_used'] = $target_url_used;

        return $this;
    }

    /**
     * Gets target_url_certified
     *
     * @return string
     */
    public function getTargetUrlCertified()
    {
        return $this->container['target_url_certified'];
    }

    /**
     * Sets target_url_certified
     *
     * @param string $target_url_certified Target url for the certified cars listing
     *
     * @return $this
     */
    public function setTargetUrlCertified($target_url_certified)
    {
        $this->container['target_url_certified'] = $target_url_certified;

        return $this;
    }

    /**
     * Gets dealer_type
     *
     * @return string
     */
    public function getDealerType()
    {
        return $this->container['dealer_type'];
    }

    /**
     * Sets dealer_type
     *
     * @param string $dealer_type Dealer type - independent, franchise, multi-brand, authorized
     *
     * @return $this
     */
    public function setDealerType($dealer_type)
    {
        $this->container['dealer_type'] = $dealer_type;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return float
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param float $rating Overall rating of the dealership on scale 1-5
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets distance
     *
     * @return float
     */
    public function getDistance()
    {
        return $this->container['distance'];
    }

    /**
     * Sets distance
     *
     * @param float $distance 
     *
     * @return $this
     */
    public function setDistance($distance)
    {
        $this->container['distance'] = $distance;

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


