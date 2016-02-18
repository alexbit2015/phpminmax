<?php

function __autoload($class) 
{
	
	if (file_exists(__DIR__.'/classes/'.$class.'.php')) {
		//var_dump($class);die;
		require __DIR__.'/classes/'.$class.'.php';
			} else {
					echo "file isn't exists!   ";
					echo __DIR__.'/classes/'.$class.'php';
			}
}