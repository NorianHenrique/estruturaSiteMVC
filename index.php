<?php

	define('INCLUDE_PATH','/estrutura_mvc/');
	
	$autoload = function ($class){
		if(file_exists($class.'.php')){
			include($class.'.php');
		}else{
			die('Não conseguimos chamar a classe: '.$class);
		}
	};

	spl_autoload_register($autoload);

	$application = new Application();
	$application->run();

?>