<?php

use andframe\src\Core\Controller;
use andframe\src\Core\Route;

class Controller_Admin extends Controller
{
	
	function action_index()
	{
		session_start();
		
		/*
		Здесь проверяется равенство сессионной переменной admin прописанному
		в коде значению — паролю. Сделно просто, но не безопасно.
		Пароль должен храниться в базе данных в захешированном виде.
		*/
		if ( $_SESSION['admin'] == "12345" )
		{
			$this->view->generate('admin_view.php', 'template_view.php');
		}
		else
		{
			session_destroy();
			Route::ErrorPage404();
		}

	}
	
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

}
