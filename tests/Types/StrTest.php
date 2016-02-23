<?php

/**
 * @locked
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Objects\Tests\Types;

use Puzzlout\Objects\Types\Str;

class StrTest extends \PHPUnit_Framework_TestCase {

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $this->assertInstanceOf('Puzzlout\Objects\Types\Str', new Str());
        $this->assertInstanceOf('Puzzlout\Objects\Types\Str', Str::Init());
        $this->assertInstanceOf('Puzzlout\Objects\Types\Str', Str::InitWith("test"));
    }

    //Write the next tests below...
    public function testIsValidMethodGivenNullImplicitReturnsException() {
        try {
            $obj = new Str();
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenNullExplicitReturnsException() {
        try {
            $result = Str::InitWith(null)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenArrayReturnsException() {
        try {
            $result = Str::InitWith([])->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenIntegerReturnsException() {
        try {
            $result = Str::InitWith(0)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenFloatReturnsException() {
        try {
            $result = Str::InitWith(0.0)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testGetTypeReturnsObject() {
        $result = new Str();
        $type = $result->GetType();
        $this->assertEquals("object", $type);
    }

    public function testGetClassReturn() {
        $result = new Str();
        $class = $result->GetClass();
        $this->assertEquals("Puzzlout\Objects\Types\Object", $class);
    }

    public function testToStringMethodReturnEmptyValue() {
        $result = new Str();
        $value = $result->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithNoInput() {
        $value = Str::Init()->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithInput() {
        $value = Str::InitWith("test")->ToString();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testGetMethodWithNoInput() {
        $value = Str::Init()->Get();
        $this->assertEmpty($value);
    }

    public function testGetMethodWithInput() {
        $value = Str::InitWith("test")->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodWithNoInput() {
        $result = new Str();
        $result->Set("test");
        $value = $result->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodOverwriteValue() {
        $result = new Str();
        $result->Set("test");
        $this->assertNotEmpty($result->Get());
        $this->assertEquals("test", $result->Get());
        $result->Set("test2");
        $this->assertNotEquals("", $result->Get());
        $this->assertEquals("test2", $result->Get());
    }

}
