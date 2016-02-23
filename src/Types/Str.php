<?php

/**
 * Class Str or String. Named "Str" because String is reserved by PHP Platform.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package Str
 * @see http://php.net/manual/en/language.types.intro.php
 */

namespace Puzzlout\Objects\Types;

use Puzzlout\Objects\Interfaces\IObjectInitialization;
use Puzzlout\Objects\Interfaces\IObjectBasicManipulation;
use Puzzlout\Objects\Interfaces\IObject;
use Puzzlout\Objects\Interfaces\IString;

class Str extends Object implements IObject, IObjectInitialization, IObjectBasicManipulation, IString {

    protected $value;

    /**
     * Create an instance of the class and returns the object. 
     * @return \Puzzlout\Objects\Str
     */
    public static function Init() {
        $instance = new Str();
        $instance->value = "";
        return $instance;
    }

    /**
     * Create an instance of the class, sets the value property and returns the object.
     * @param string $value
     * @return \Puzzlout\Objects\Str
     * @throws \Exception
     */
    public static function InitWith($value) {
        $instance = new Str();
        $instance->value = $value;
        if (!$instance->IsValid()) {
            throw new \InvalidArgumentException('$value is not a String. See var_dump.' . var_dump($value), 0, null);
        }

        return $instance;
    }

    public function IsValid() {
        if (is_string($this->value)) {
            return true;
        }
        throw new \InvalidArgumentException('Property $value is not a string', 0, null);
    }

    /**
     * 
     * @return string The value of the object as a string.
     */
    public function ToString() {
        return $this->value;
    }

    /**
     * Gets the value of the instance of String class.
     * @return string The value of the object
     */
    public function Get() {
        return $this->ToString();
    }

    /**
     * Sets the value of the instance of String class and verifies the input is valid. 
     * @param string $value
     */
    public function Set($value) {
        $this->value = $value;
        $this->IsValid();
    }

}
