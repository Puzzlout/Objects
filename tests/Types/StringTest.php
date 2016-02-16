<?php

/**
 * @locked
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
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', new String());
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', String::Init());
        $this->assertInstanceOf('Puzzlout\Objects\Types\String', String::InitWith("test"));
    }

    //Write the next tests below...
    public function testIsValidMethodGivenNullImplicitReturnsException() {
        try {
            $obj = new String();
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenNullExplicitReturnsException() {
        try {
            $result = String::InitWith(null)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenArrayReturnsException() {
        try {
            $result = String::InitWith([])->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenIntegerReturnsException() {
        try {
            $result = String::InitWith(0)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenFloatReturnsException() {
        try {
            $result = String::InitWith(0.0)->IsValid();
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
        $value = String::InitWith("test")->ToString();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testGetMethodWithNoInput() {
        $value = String::Init()->Get();
        $this->assertEmpty($value);
    }

    public function testGetMethodWithInput() {
        $value = String::InitWith("test")->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodWithNoInput() {
        $result = new String();
        $result->Set("test");
        $value = $result->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodOverwriteValue() {
        $result = new String();
        $result->Set("test");
        $this->assertNotEmpty($result->Get());
        $this->assertEquals("test", $result->Get());
        $result->Set("test2");
        $this->assertNotEquals("", $result->Get());
        $this->assertEquals("test2", $result->Get());
    }

}
