<?php

/**
 * @locked
 * @since Test Suite v1.2.0
 */

namespace Puzzlout\Objects\Tests\Types;

use Puzzlout\Objects\Types\Object;

class ObjectTest extends \PHPUnit_Framework_TestCase {

    protected $instance;

    /**
     * Initialize the app object.
     */
    protected function setUp() {
        $this->instance = new Object();
    }

    /**
     * This method is generated.
     */
    public function testInstanceIsCorrect() {
        $this->assertInstanceOf('Puzzlout\Objects\Types\Object', $this->instance);
    }

    //Write the next tests below...
    public function testIsValidMethod() {
        $this->assertTrue($this->instance->IsValid());
    }

    public function testGetTypeReturnsObject() {
        $type = $this->instance->GetType();
        $this->assertEquals("object", $type);
    }
    public function testGetClassReturn() {
        $class = $this->instance->GetClass();
        $this->assertEquals("Puzzlout\Objects\Types\Object", $class);
    }
    
    public function testToStringMethodReturnValue() {
        $value = $this->instance->ToString();
        $this->assertEmpty($value);
        
    }
}
