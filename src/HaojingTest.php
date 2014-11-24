<?php
namespace RouterBench;

use Athletic\AthleticEvent;
use Haojing\RequestData;

class HaojingTest extends AthleticEvent
{
	public $_puxRoute;
	public static $map;

	public function classSetUp() {
		self::$map = [
			'/a/' => '',
			'/b/' => '',
			'/c/' => '',
			'/d/' => '',
			'/e/' => '',
			'/f/' => '',
			'/g/' => '',
			'/h/' => '',
			'/i/' => '',
			'/j/' => '',
			'/k/' => '',
			'/l/' => '',
			'/a1/' => '',
			'/b1/' => '',
			'/c1/' => '',
			'/d1/' => '',
			'/e1/' => '',
			'/f1/' => '',
			'/g1/' => '',
			'/h1/' => '',
			'/i1/' => '',
			'/j1/' => '',
			'/k1/' => '',
			'/l1/' => '',
			'/a2/' => '',
			'/b2/' => '',
			'/c2/' => '',
			'/d2/' => '',
			'/e2/' => '',
			'/f2/' => '',
			'/g2/' => '',
			'/h2/' => '',
			'/i2/' => '',
			'/j2/' => '',
			'/k2/' => '',
			'/l2/' => '',
			'/a3/' => '',
			'/b3/' => '',
			'/c3/' => '',
			'/d3/' => '',
			'/e3/' => '',
			'/f3/' => '',
			'/g3/' => '',
			'/h3/' => '',
			'/i3/' => '',
			'/j3/' => '',
			'/k3/' => '',
			'/l3/' => '',
			'/a4/' => '',
			'/b4/' => '',
			'/c4/' => '',
			'/d4/' => '',
			'/e4/' => '',
			'/f4/' => '',
			'/g4/' => '',
			'/h4/' => '',
			'/i4/' => '',
			'/j4/' => '',
			'/k4/' => '',
			'/l4/' => '',
			'/a5/' => '',
			'/b5/' => '',
			'/c5/' => '',
			'/d5/' => '',
			'/e5/' => '',
			'/f5/' => '',
			'/g5/' => '',
			'/h5/' => '',
			'/i5/' => '',
			'/j5/' => '',
			'/k5/' => '',
			'/l5/' => '',

			'/api/' => '\Api\Dispatcher',
			'/m/{categoryId}/a{adId}.html' => 'Viewad_WAP_CONTROLLER',
			'/m/'   => 'Home_WAP_Controller',
			'/viewad/' => 'Viewad_Controller',
			'/w/'   => 'Wo_Controller',
			'/{categoryId}' => 'Listing_Controller',
			'/' => 'HomeController',
		];
	}

	public function setUp()
	{
		$_SERVER['REQUEST_METHOD'] = 'GET';
	}

	/**
	 * @iterations 1000
	 */
	public function haojingRoute() {
		$path = '/';
		foreach (self::$map as $rule => $ctl_name) {
			$m = RequestData::getUrlMatches($rule, $path);
			if ($m) {
				return;
			}
		}
	}

}