<?php

/**
 * Class Boolean.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/Objects
 * @since Version 1.0.0
 * @package Boolean
 * @see http://php.net/manual/en/language.types.intro.php
 */

namespace Puzzlout\Objects\Types;

use Puzzlout\Exceptions\Classes\Core\InvalidArgumentException;
use Puzzlout\Exceptions\Codes\GeneralErrors;
use Puzzlout\Objects\Interfaces\IObject;
use Puzzlout\Objects\Interfaces\IBoolean;

class Boolean extends Object implements IObject, IBoolean {

    public function GetClass() {
        parent::GetClass();
    }

    public function GetType() {
        parent::GetType();
    }

    /**
     * Validates the property value.
     * 
     * @return boolean The result
     * @throws InvalidArgumentException 
     */
    public function IsValid() {
        if (!is_bool($this->value)) {
            $errorMsg = 'The $value property of the instance of ' . __CLASS__ . ' is not a boolean.';
            throw new InvalidArgumentException($errorMsg, Codes\GeneralErrors::VALUE_IS_NOT_OF_EXPECTED_TYPE, null);
        }

        return true;
    }

    /**
     * Compares if the current instance of Boolean class to another instance.
     * @param \Puzzlout\Objects\Types\Boolean $value
     * @return bool The result of the comparaison
     */
    public function Equals(Boolean $value) {
        return $this->value == $value;
    }

}
