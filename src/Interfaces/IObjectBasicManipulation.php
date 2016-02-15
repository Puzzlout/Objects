<?php

/**
 * Interface IObjectBasicManipulation provides the two basic methods to set and get the $value property of a class.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package IBasicAccessor
 */

namespace Puzzlout\Objects\Interfaces;

interface IObjectBasicManipulation {

    /**
     * Get the value of the instance of a class.
     */
    public function Get();

    /**
     * Set the value of the instance of a class.
     */
    public function Set($value);
}
