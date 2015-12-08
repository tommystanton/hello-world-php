<?php
class HelloTest extends PHPUnit_Framework_TestCase {
    public $hello;

    public function __construct() {
        $this->hello = new Hello();
    }

    public function testInstantiation() {
        $this->assertInstanceOf('Hello', $this->hello);
    }
}
?>
