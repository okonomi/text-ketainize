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

    /**
     *  @dataProvider lineEchoProvider
     */
    public function testLineEcho($src, $expected)
    {
        $actual = $this->obj->lineEcho($src);
        $this->assertEquals($expected, $actual);
    }

    public function lineEchoProvider()
    {
        return array(
            array('12月20日（月）', '12月20日(月)'),
        );
    }
}
