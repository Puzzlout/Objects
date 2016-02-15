<?php

/**
 * Class Object is the base of all classes.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package Object
 * @see http://php.net/manual/en/language.types.intro.php
 */

namespace Puzzlout\Objects\Types;

use Puzzlout\Objects\Interfaces\IObjectInitialization;
use Puzzlout\Objects\Interfaces\IObject;
use Puzzlout\Objects\Interfaces\IString;

class Object implements IObject, IString {

    protected $value;

    /**
     * Create an instance of the class and returns the object.
     * @return \Puzzlout\Objects\Types\Object
     */
    public static function Init() {
        $instance = new Object();
        return $instance;
    }

    /**
     * Create an instance of the class, sets the value property and returns the object.
     * @param mixed $value Can be all the types found here: http://php.net/manual/en/language.types.intro.php
     * @return \Puzzlout\Objects\Types\Object
     */
    public static function InitWith($value) {
        $instance = $this->Init();
        $instance->value = value;
        return $instance;
    }

    /**
     * 
     * @param type $value
     * @return boolean The result
     */
    public function IsValid() {
        return true;
    }

    /**
     * 
     * @return string The type of the instance.
     * @see http://php.net/manual/en/function.gettype.php
     */
    public function GetType() {
        return gettype($this);
    }

    /**
     * 
     * @return string The class name of the instance
     * @see http://php.net/manual/en/function.get-class.php (go to Example #2)
     */
    public function GetClass() {
        return get_class();
    }

    /**
     * 
     * @return string The string cast of $value field of the instance.
     */
    public function ToString() {
        return (string) $this->value;
    }

}
