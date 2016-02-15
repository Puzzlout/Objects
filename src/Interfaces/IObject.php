<?php

/**
 * Interface IObject provides the most needed methods.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package IObject
 */

namespace Puzzlout\Objects\Interfaces;

interface IObject {
  /**
   * Method that retrieve the instance type.
   */
  public function GetType();
  /**
   * Method that retrieve the instance class value.
   */
  public function GetClass();

  /**
   * Method that validates the value is correct before assigning it to the Object 
   * value field.
   */
  public function IsValid();
}
