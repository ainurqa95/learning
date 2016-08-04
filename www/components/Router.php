<?php



/**
* 
*/
class Router
{	
	private $routes;
	private $uri;
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);

		if (!empty($_SERVER['REQUEST_URI'])) {
		$this->uri = trim($_SERVER['REQUEST_URI'], '/');
	}
}


	public function run ()
	{

		//echo $this->uri;
		//echo 'hello';
		//print_r($this->routes);
		foreach ($this->routes as $key => $value) {
			

			if(preg_match("~$key~", $this->uri))
			{
			//	echo $value;
				//preg_replace(pattern, replacement, subject)
				// Получаем внутренний путь из внешнего согласно правилу.

				$result = preg_replace("~$key~", $value, $this->uri);
			//	print_r($result);
				$segments = explode('/', $result);
			//	print_r($segments);

				$nameController = array_shift($segments);
				$nameController= ucfirst($nameController).'Controller';
				$nameAction = array_shift($segments);// берет первый элемент массива и уменьшает размер массива 
				$nameAction = 'action'.ucfirst($nameAction);// делает слово большим
				//print_r($segments);
				$params = $segments;
				
				$controleerPath = ROOT.'/controllers/'.$nameController.'.php';
				if(file_exists($controleerPath)){
					include_once($controleerPath);
				}
				//print_r($nameController);
				//print_r($nameAction);
				// узнали метод и контроллер который обрабатывает эту страницу
				//echo $nameAction;
				//echo "$nameController";
				//echo "$nameAction";
				$newController = new $nameController;
				$result = call_user_func_array(array($newController,$nameAction), $params);
				if ($result != null)
				{
					break;
				}
			

			}

			# code...
		}
	}
}
?>