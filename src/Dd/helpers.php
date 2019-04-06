<?php

use Symfony\Component\VarDumper\VarDumper;

if (! function_exists('dd')) {
	function dd ()
	{
        foreach (func_get_args() as $v) {
            VarDumper::dump($v);
        }

        if (1 < func_num_args()) {
            return func_get_args();
        }

        die(1);
	}
}
