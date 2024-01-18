<?php


namespace app\Kernel\Container;

use app\Kernel\http\Request;
use app\Kernel\Router\Router;
class Container
{
	public readonly Request $request;
	public readonly Router $router;


	public function __construct()
	{
		$this->registerServices();
	}



	private function registerServices():void
	{
		$this->router = new Router();
    $this->request = Request::createFromGlobals();
	}
}