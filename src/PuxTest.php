<?php
namespace RouterBench;

use Athletic\AthleticEvent;

class PuxTest extends AthleticEvent
{
	public $_puxRoute;

	public function setUp()
	{
		$_SERVER['REQUEST_METHOD'] = 'GET';
	}

	/**
	 * @iterations 100
	 */
	public function puxRoute() {
		$mux = new \Pux\Mux;
		$mux->get('/a/', []);
		$mux->get('/b/', []);
		$mux->get('/c/', []);
		$mux->get('/d/', []);
		$mux->get('/e/', []);
		$mux->get('/f/', []);
		$mux->get('/g/', []);
		$mux->get('/h/', []);
		$mux->get('/i/', []);
		$mux->get('/j/', []);
		$mux->get('/k/', []);
		$mux->get('/l/', []);

		$mux->get('/a1/', []);
		$mux->get('/b1/', []);
		$mux->get('/c1/', []);
		$mux->get('/d1/', []);
		$mux->get('/e1/', []);
		$mux->get('/f1/', []);
		$mux->get('/g1/', []);
		$mux->get('/h1/', []);
		$mux->get('/i1/', []);
		$mux->get('/j1/', []);
		$mux->get('/k1/', []);
		$mux->get('/l1/', []);

		$mux->get('/a2/', []);
		$mux->get('/b2/', []);
		$mux->get('/c2/', []);
		$mux->get('/d2/', []);
		$mux->get('/e2/', []);
		$mux->get('/f2/', []);
		$mux->get('/g2/', []);
		$mux->get('/h2/', []);
		$mux->get('/i2/', []);
		$mux->get('/j2/', []);
		$mux->get('/k2/', []);
		$mux->get('/l2/', []);

		$mux->get('/a3/', []);
		$mux->get('/b3/', []);
		$mux->get('/c3/', []);
		$mux->get('/d3/', []);
		$mux->get('/e3/', []);
		$mux->get('/f3/', []);
		$mux->get('/g3/', []);
		$mux->get('/h3/', []);
		$mux->get('/i3/', []);
		$mux->get('/j3/', []);
		$mux->get('/k3/', []);
		$mux->get('/l3/', []);

		$mux->get('/a4/', []);
		$mux->get('/b4/', []);
		$mux->get('/c4/', []);
		$mux->get('/d4/', []);
		$mux->get('/e4/', []);
		$mux->get('/f4/', []);
		$mux->get('/g4/', []);
		$mux->get('/h4/', []);
		$mux->get('/i4/', []);
		$mux->get('/j4/', []);
		$mux->get('/k4/', []);
		$mux->get('/l4/', []);

		$mux->get('/a5/', []);
		$mux->get('/b5/', []);
		$mux->get('/c5/', []);
		$mux->get('/d5/', []);
		$mux->get('/e5/', []);
		$mux->get('/f5/', []);
		$mux->get('/g5/', []);
		$mux->get('/h5/', []);
		$mux->get('/i5/', []);
		$mux->get('/j5/', []);
		$mux->get('/k5/', []);
		$mux->get('/l5/', []);

		$mux->get('/api/', []);
		$mux->get('/m/:categoryId/:adId.html', []);
		$mux->get('/m/', []);
		$mux->get('/viewad/', []);
		$mux->get('/w/', []);
		$mux->get('/:categoryId', []);
		$mux->get('/', []);
		$routeInfo = $mux->dispatch('/');
	}

}