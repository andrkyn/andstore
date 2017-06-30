<?php


namespace andframe\src\Core;

class View
{
	
	
	/*
	$content_file - виды отображающие контент страниц;
	$template_file - общий для всех страниц шаблон;
	$data - массив, содержащий элементы контента страницы.
	*/
	function generate($content_view, $template_view, $data = null)
	{
		
		/*
		if(is_array($data)) {
			
			// element array to variable
			extract($data);
		}
		*/
		
		/*
		динамически подключаю общий шаблон (вид),
		внутри которого будет встраиваться вид
		для отображения контента конкретной страницы.
		*/
		include '../src/views/'.$template_view;
	}
}
