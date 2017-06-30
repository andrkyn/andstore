<?php

namespace andframe\src\Core;

class Route
{

    /**
     *
     */
    static function start()
	{
		// controller and event of default
		$controller_name = 'Main';
		$action_name = 'index';
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		// GET name of controller
		if ( !empty($routes[1]) )
		{	
			$controller_name = $routes[1];
		}
		
		// Get name ekshen
		if ( !empty($routes[2]) )
		{
			$action_name = $routes[2];
		}

		// Add prefix
		$model_name = 'Model_'.$controller_name;
		$controller_name = 'Controller_'.$controller_name;
		$action_name = 'action_'.$action_name;

		/*
		echo "Model: $model_name <br>";
		echo "Controller: $controller_name <br>";
		echo "Action: $action_name <br>";
		*/

        // take file with class model
		$model_file = strtolower($model_name).'.php';
		$model_path = "../src/models/".$model_file;
		if(file_exists($model_path))
		{
			include "../src/models/".$model_file;
		}

		// take file with class controller
		$controller_file = strtolower($controller_name).'.php';
		$controller_path = "../src/controllers/".$controller_file;
		if(file_exists($controller_path))
		{
			include "../src/controllers/".$controller_file;
		}
		else
		{
			/*
			Exception
			но для упрощения сразу сделаю редирект на страницу 404
			*/
			Route::ErrorPage404();
		}
		
		// create controller
		$controller = new $controller_name;
		$action = $action_name;
		
		if(method_exists($controller, $action))
		{
			// call action controller
			$controller->$action();
		}
		else
		{
			// exception
			Route::ErrorPage404();
		}
	
	}

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
