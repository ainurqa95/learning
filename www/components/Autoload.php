<?php
 	function __autoload ($className)
 	{
 		$pathes =  array('/models/','/components/');
 		foreach ($pathes as $path) {
 			$path = ROOT.$path.$className.'.php';
 			if (is_file($path))
 				include_once($path);
 		}



 	}


?>