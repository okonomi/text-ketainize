<?php


class Text_Ketainize
{
    function __construct()
    {
    }

    public function lineEcho($str)
    {
        return preg_replace(
            array('/（/', '/）/', '/、/', '/。/', '/！/'),
            array('('   , ')'  , '､'   , '｡',     '!'),
            mb_convert_kana($str, 'k', 'utf-8')
        );
    }
}







