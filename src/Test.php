<?php
namespace RouterBench;

use Athletic\AthleticEvent;

class Test extends AthleticEvent
{
	public $_fastRoute;

	public function setUp()
	{
		$this->_fastRoute = \FastRoute\simpleDispatcher(function(\FastRoute\RouteCollector $r) {
			$r->addRoute('GET', '/user/{name}/{id:[0-9]+}', 'handler0');
			$r->addRoute('GET', '/user/{id:[0-9]+}', 'handler1');
			$r->addRoute('GET', '/user/{name}', 'handler2');
		});
		
	}

	/**
     * @iterations 10000
     */
	public function fastRoute()
	{
		$routeInfo = $this->_fastRoute->dispatch('GET', '/user/john');
	}
}