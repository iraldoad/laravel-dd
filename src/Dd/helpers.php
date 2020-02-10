<?php

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    function dd($vars)
    {
        $vars = func_get_args();
        
        foreach ($vars as $v) {
            VarDumper::dump($v);
        }

        die(1);
    }
}
