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

namespace ScalarType;

use Puzzlout\Objects\Interfaces;

class String extends Object implements IObjectInitialization, IObject, IString {

  public $value;

  /**
   * Create a String object with an empty scarlar string
   * 
   * @return \Puzzlout\Objects\String
   */
  public static function Init() {
    $instance = new String();
    $instance->value = "";
    return $instance;
  }

  /**
   * Create a String object and assign the $value parameter to the instance scarlar string
   * 
   * @param string $value
   * @return \Puzzlout\Objects\String
   * @throws \Exception
   */
  public static function InitWith($value) {
    if (!$this->IsValid($value)) {
      throw new \InvalidArgumentException('$value is not a String. See var_dump above' . var_dump($value), 0, NULL);
    }

    $instance = new String();
    $instance->value = $value;
    return $instance;
  }

  public function IsValid($value) {
    if (is_string($value)) {
      return TRUE;
    }
    throw new \InvalidArgumentException('$value is not a string', 0, NULL);
  }

  /**
   * 
   * @return The value of the object as a string.
   */
  public function ToString() {
    return $this->value;
  }

}
