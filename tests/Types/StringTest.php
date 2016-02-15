<?php

/**
 * 
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Objects\Tests\Types;

use Puzzlout\Objects\Types\String;

class StringTest extends \PHPUnit_Framework_TestCase {
  /**
   * Initialize the app object.
   */
  protected function setUp()
  {
  }
  
  /**
   * This method is generated.
   */
  public function testInstanceIsCorrect()
  {
    $result = new String();
    $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
  }
  
  //Write the next tests below...
    public function testIsValidMethodReturnsException() {
        try {
          $result = new String();
          $result = $result->IsValid();
        } catch (\Exception $ex) {
          $this->assertInstanceOf('\InvalidArgumentException', $ex); 
        }
    }

    public function testGetTypeReturnsObject() {
        $result = new String();
        $type = $result->GetType();
        $this->assertEquals("object", $type);
    }
    public function testGetClassReturn() {
        $result = new String();
        $class = $result->GetClass();
        $this->assertEquals("Puzzlout\Objects\Types\Object", $class);
    }
    
    public function testToStringMethodReturnEmptyValue() {
        $result = new String();
        $type = $result->ToString();
        $this->assertEmpty($value);
    }
}