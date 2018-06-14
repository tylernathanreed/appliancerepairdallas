<?php

namespace App\Support\Contacts;

use ArrayAccess;
use Illuminate\Support\Arr;
use InvalidArgumentException;
use Illuminate\Contracts\Support\Arrayable;

class Address extends Contact
{
	//////////////////
	//* Constrants *//
	//////////////////
	/**
	 * The component constants.
	 *
	 * @var string
	 */
	const COMPONENT_LINE_1 = 'line_1';
	const COMPONENT_LINE_2 = 'line_2';
	const COMPONENT_CITY = 'city';
	const COMPONENT_STATE = 'state';
	const COMPONENT_ZIP = 'zip';
	const COMPONENT_COUNTRY = 'country';

	//////////////////
	//* Attributes *//
	//////////////////
	/**
	 * The address components.
	 *
	 * @var array
	 */
	protected $components;

	/**
	 * The domestic country for all addresses.
	 *
	 * @var string
	 */
	protected static $domesticCountry = 'US';

	///////////////////
	//* Constructor *//
	///////////////////
	/**
	 * Creates a new address instance.
	 *
	 * @param  array  $attributes
	 *
	 * @return $this
	 */
	public function __construct($attributes = [])
	{
		// Populate the attributes from the attributes array
		$this->fillComponents($attributes);
	}

	//////////////////
	//* Components *//
	//////////////////
	/**
	 * Fills the components from the specified array.
	 *
	 * @param  array  $components
	 *
	 * @return void
	 */
	public function fillComponents($components)
	{
		// Iterate through the components
		foreach((array) $components as $key => $value) {

			// Set each component
			$this->setComponent($key, $value);

		}
	}

	/**
	 * Returns the specified component.
	 *
	 * @param  string  $key
	 *
	 * @return mixed
	 */
	public function getComponent($key)
	{
		return $this->components[$key];
	}

	/**
	 * Variants of {@see $this->getComponent()}.
	 *
	 * @return mixed
	 */
	public function getLine1()   { return $this->getComponent(static::COMPONENT_LINE_1); }
	public function getLine2()   { return $this->getComponent(static::COMPONENT_LINE_2); }
	public function getCity()    { return $this->getComponent(static::COMPONENT_CITY); }
	public function getState()   { return $this->getComponent(static::COMPONENT_STATE); }
	public function getZip()     { return $this->getComponent(static::COMPONENT_ZIP); }
	public function getCountry() { return $this->getComponent(static::COMPONENT_COUNTRY); }

	/**
	 * Sets the specified component to the given value.
	 *
	 * @param  string  $key
	 * @param  mixed   $value
	 *
	 * @return void
	 */
	public function setComponent($key, $value)
	{
		$this->components[$key] = $value;
	}

	/**
	 * Returns the components of this address.
	 *
	 * @return array
	 */
	public function getComponents()
	{
		return $this->components;
	}

	/**
	 * Sets the components of this address.
	 *
	 * @param  array  $components
	 *
	 * @return void
	 */
	public function setComponents($components)
	{
		$this->components = $components;
	}

	/**
	 * Returns the types of components.
	 *
	 * @return array
	 */
	public static function getComponentTypes()
	{
		return [
			static::COMPONENT_LINE_1,
			static::COMPONENT_LINE_2,
			static::COMPONENT_CITY,
			static::COMPONENT_STATE,
			static::COMPONENT_ZIP,
			static::COMPONENT_COUNTRY
		];
	}

	/**
	 * Returns whether or not the specified component type is valid.
	 *
	 * @param  string  $type
	 *
	 * @return boolean
	 */
	public static function isValidComponentType($type)
	{
		return in_array($type, static::getComponentTypes());
	}

	//////////////
	//* Export *//
	//////////////
	/**
	 * Returns the array representation of this address.
	 *
	 * @return array
	 */
	public function toArray()
	{
		return $this->getComponents();
	}

	/**
	 * Returns a string representation of the first address line.
	 *
	 * @return string
	 */
	public function toLine1()
	{
		// Determine the first address line
		$line1 = $this->getLine1();

		// Check for a second address line
		if(!is_null($line2 = $this->getLine2())) {

			// Return the two address lines
			return $line1 . ', ' . $line2;

		}

		// Return the first address line
		return $line1;
	}

	/**
	 * Returns a string representation of the second address line.
	 *
	 * @return string
	 */
	public function toLine2()
	{
		// Determine the city, state, and zip
		$components = array_filter([
			$this->getCity(),
			$this->getState(),
			$this->getZip()
		]);

		// Format the second address line
		return implode(', ', $components);
	}

	////////////////////
	//* Array Access *//
	////////////////////
    /**
     * Returns whether or not the specified offset exists.
     *
     * @param  mixed  $key
     *
     * @return boolean
     */
    public function offsetExists($key)
    {
        return array_key_exists($key, $this->components);
    }

    /**
     * Returns the item at the specified offset.
     *
     * @param  mixed  $key
     *
     * @return mixed
     */
    public function offsetGet($key)
    {
        return $this->getComponent($key);
    }

    /**
     * Sets the item at the specified offset.
     *
     * @param  mixed  $key
     * @param  mixed  $value
     *
     * @return void
     */
    public function offsetSet($key, $value)
    {
    	$this->setComponent($key, $value);
    }

    /**
     * Unsets the item at the specified offset.
     *
     * @param  string  $key
     *
     * @return void
     */
    public function offsetUnset($key)
    {
        unset($this->components[$key]);
    }

    //////////////////////
    //* Dynamic Access *//
    //////////////////////
    /**
     * Returns the specified component.
     *
     * @param  string  $key
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException
     */
    public function __get($key)
    {
    	// Make sure the key is a valid component type
        if(!static::isValidComponentType($type)) {
            throw new InvalidArgumentException("Property [{$key}] is not a valid address component type.");
        }

        // Return the component
        return $this->getComponent($key);
    }

    /**
     * Sets the specified component to the given value.
     *
     * @param  string  $key
     * @param  mixed   $value
     *
     * @return void
     *
     * @throws \InvalidArgumentException
     */
    public function __set($key, $value)
    {
    	// Make sure the key is a valid component type
        if(!static::isValidComponentType($type)) {
            throw new InvalidArgumentException("Property [{$key}] is not a valid address component type.");
        }

        // Set the component
        return $this->setComponent($key, $value);
    }
}