<?php

/**
 * @locked
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Objects\Tests\Types;

use Puzzlout\Objects\Types\StringExtended;

class StringExtendedTest extends \PHPUnit_Framework_TestCase {

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $this->assertInstanceOf('Puzzlout\Objects\Types\StringExtended', new StringExtended());
        $this->assertInstanceOf('Puzzlout\Objects\Types\StringExtended', StringExtended::Init());
        $this->assertInstanceOf('Puzzlout\Objects\Types\StringExtended', StringExtended::InitWith("test"));
    }

    //Write the next tests below...
    public function testIsValidMethodGivenNullImplicitReturnsException() {
        try {
            $obj = new StringExtended();
            $result = $obj->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenNullExplicitReturnsException() {
        try {
            $result = StringExtended::InitWith(null)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenArrayReturnsException() {
        try {
            $result = StringExtended::InitWith([])->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenIntegerReturnsException() {
        try {
            $result = StringExtended::InitWith(0)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testIsValidMethodGivenFloatReturnsException() {
        try {
            $result = StringExtended::InitWith(0.0)->IsValid();
        } catch (\Exception $ex) {
            $this->assertInstanceOf('\InvalidArgumentException', $ex);
        }
    }

    public function testGetTypeReturnsObject() {
        $result = new StringExtended();
        $type = $result->GetType();
        $this->assertEquals("object", $type);
    }

    public function testGetClassReturn() {
        $result = new StringExtended();
        $class = $result->GetClass();
        $this->assertEquals("Puzzlout\Objects\Types\Object", $class);
    }

    public function testToStringMethodReturnEmptyValue() {
        $result = new StringExtended();
        $value = $result->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithNoInput() {
        $value = StringExtended::Init()->ToString();
        $this->assertEmpty($value);
    }

    public function testInitMethodWithInput() {
        $value = StringExtended::InitWith("test")->ToString();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testGetMethodWithNoInput() {
        $value = StringExtended::Init()->Get();
        $this->assertEmpty($value);
    }

    public function testGetMethodWithInput() {
        $value = StringExtended::InitWith("test")->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodWithNoInput() {
        $result = new StringExtended();
        $result->Set("test");
        $value = $result->Get();
        $this->assertNotEmpty($value);
        $this->assertEquals("test", $value);
    }

    public function testSetMethodOverwriteValue() {
        $result = new StringExtended();
        $result->Set("test");
        $this->assertNotEmpty($result->Get());
        $this->assertEquals("test", $result->Get());
        $result->Set("test2");
        $this->assertNotEquals("", $result->Get());
        $this->assertEquals("test2", $result->Get());
    }

}
