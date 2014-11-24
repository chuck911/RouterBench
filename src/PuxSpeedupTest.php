<?php
namespace RouterBench;

use Athletic\AthleticEvent;
use PuxSpeedup\Helper;

class PuxSpeedupTest extends AthleticEvent {

	public $mux;

	public function setUp() {
		$_SERVER['REQUEST_METHOD'] = 'GET';
//		$this->mux = Helper::compliedData();
	}

	/**
	 * @iterations 1000
	 */
	public function puxSpeedupRoute() {
		$path = '/';
		$this->mux = Helper::withoutRequire();
		$this->mux->dispatch($path);
	}
}