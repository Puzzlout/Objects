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

use Puzzlout\Interfaces\IObject;
use Puzzlout\Interfaces\IString;

class Object implements IObject, IString {
  protected $value;

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
