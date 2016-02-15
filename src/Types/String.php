<?php

/**
 * Class String.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package String
 * @see http://php.net/manual/en/language.types.intro.php
 */

namespace Puzzlout\Objects\Types;

use Puzzlout\Objects\Interfaces\IObjectInitialization;
use Puzzlout\Objects\Interfaces\IObject;
use Puzzlout\Objects\Interfaces\IString;

class String extends Object implements IObjectInitialization, IObject, IString {

    protected $value;

    /**
     * Create an instance of the class and returns the object. 
     * @return \Puzzlout\Objects\String
     */
    public static function Init() {
        $instance = new String();
        $instance->value = "";
        return $instance;
    }

    /**
     * Create an instance of the class, sets the value property and returns the object.
     * @param string $value
     * @return \Puzzlout\Objects\String
     * @throws \Exception
     */
    public static function InitWith($value) {
        $instance = new String();
        $instance->value = $value;
        if (!$instance->IsValid()) {
            throw new \InvalidArgumentException('$value is not a String. See var_dump.' . var_dump($value), 0, null);
        }

        return $instance;
    }

    public function IsValid() {
        if (is_string($this->value)) {
            return TRUE;
        }
        throw new \InvalidArgumentException('Property $value is not a string', 0, null);
    }

    /**
     * 
     * @return The value of the object as a string.
     */
    public function ToString() {
        return $this->value;
    }

}
