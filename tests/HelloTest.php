<?php
class HelloTest extends PHPUnit_Framework_TestCase {
    public $hello;

    public function __construct() {
        $this->hello = new Hello();
    }

    public function testInstantiation() {
        $this->assertInstanceOf('Hello', $this->hello);
    }

    public function testGreet() {
        $this->assertEquals('Hello world!', $this->hello->greet());
    }
}
?>
