<?php

require_once 'Text/Ketainize.php';


class TextKetainizeTest extends PHPUnit_Framework_TestCase
{
    private $obj;


    public function setUp()
    {
        $this->obj = new Text_Ketainize();
    }

    public function testInstanciate()
    {
        $this->assertInstanceOf('Text_Ketainize', $this->obj, 'instance is not Text_Ketainize');
    }
}
