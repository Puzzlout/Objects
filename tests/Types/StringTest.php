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
    protected function setUp() {
        
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $result = new String();
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
        $result2 = String::Init();
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
        $result3 = String::InitWith("test");
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', $result);
    }

    //Write the next tests below...
    public function testIsValidMethodReturnsException() {
        try {
            $obj = new String();
            $result = $obj->IsValid();
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
        $value = $result->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithNoInput() {
        $result = String::Init();
        $value = $result->ToString();
        $this->assertEmpty($value);
    }
    
    public function testInitMethodWithInput() {
        $result = String::InitWith("test");
        $value = $result->ToString();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }
}
