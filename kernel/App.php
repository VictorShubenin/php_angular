<?php

namespace app\Kernel;

use app\Kernel\http\Request;
use app\Kernel\Router\Router;
use app\Kernel\Container\Container;
class App
{
		private Container $container;



		public function __construct()
		{
			$this->container = new Container();
		}
    public function run(): void
    {
        

        $this->container
				->router
				->Dispatch(
					$this->container->request->uri(), $this->container->request->method());

    }
}
