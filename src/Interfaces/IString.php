<?php

/**
 * Interface IString provides the most needed methods for classes inheriting the String class.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package IString
 */

namespace Puzzlout\Objects\Interfaces;

interface IString {
  /**
   * Method that retrieve the string value of the instance.
   */
  public function ToString();
}
