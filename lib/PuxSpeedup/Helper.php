<?php
namespace PuxSpeedup;

class Helper {
	public static function compliedData() {
		return require "mux.php";
	}

	public static function withoutRequire() {
		return \Pux\Mux::__set_state(array(
			'id' => NULL,
			'routes' =>
				array (
					0 =>
						array (
							0 => true,
							1 => '#^    /m
    /(?P<categoryId>[^/]+?)
    /(?P<adId>[^/\\.]+?)
    \\.html
$#xs',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
									'variables' =>
										array (
											0 => 'categoryId',
											1 => 'adId',
										),
									'regex' => '    /m
    /(?P<categoryId>[^/]+?)
    /(?P<adId>[^/\\.]+?)
    \\.html
',
									'tokens' =>
										array (
											0 =>
												array (
													0 => 3,
													1 => '/m',
												),
											1 =>
												array (
													0 => 2,
													1 => '/',
													2 => '[^/]+?',
													3 => 'categoryId',
												),
											2 =>
												array (
													0 => 2,
													1 => '/',
													2 => '[^/\\.]+?',
													3 => 'adId',
												),
											3 =>
												array (
													0 => 3,
													1 => '.html',
												),
										),
									'compiled' => '#^    /m
    /(?P<categoryId>[^/]+?)
    /(?P<adId>[^/\\.]+?)
    \\.html
$#xs',
									'pattern' => '/m/:categoryId/:adId.html',
								),
						),
					1 =>
						array (
							0 => true,
							1 => '#^    /(?P<categoryId>[^/]+?)
$#xs',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
									'variables' =>
										array (
											0 => 'categoryId',
										),
									'regex' => '    /(?P<categoryId>[^/]+?)
',
									'tokens' =>
										array (
											0 =>
												array (
													0 => 2,
													1 => '/',
													2 => '[^/]+?',
													3 => 'categoryId',
												),
										),
									'compiled' => '#^    /(?P<categoryId>[^/]+?)
$#xs',
									'pattern' => '/:categoryId',
								),
						),
					2 =>
						array (
							0 => false,
							1 => '/viewad/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					3 =>
						array (
							0 => false,
							1 => '/api/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					4 =>
						array (
							0 => false,
							1 => '/c4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					5 =>
						array (
							0 => false,
							1 => '/b4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					6 =>
						array (
							0 => false,
							1 => '/a4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					7 =>
						array (
							0 => false,
							1 => '/d4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					8 =>
						array (
							0 => false,
							1 => '/g4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					9 =>
						array (
							0 => false,
							1 => '/l3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					10 =>
						array (
							0 => false,
							1 => '/f4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					11 =>
						array (
							0 => false,
							1 => '/e4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					12 =>
						array (
							0 => false,
							1 => '/i3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					13 =>
						array (
							0 => false,
							1 => '/f3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					14 =>
						array (
							0 => false,
							1 => '/e3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					15 =>
						array (
							0 => false,
							1 => '/g3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					16 =>
						array (
							0 => false,
							1 => '/h3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					17 =>
						array (
							0 => false,
							1 => '/j3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					18 =>
						array (
							0 => false,
							1 => '/h4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					19 =>
						array (
							0 => false,
							1 => '/k3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					20 =>
						array (
							0 => false,
							1 => '/k4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					21 =>
						array (
							0 => false,
							1 => '/h5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					22 =>
						array (
							0 => false,
							1 => '/g5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					23 =>
						array (
							0 => false,
							1 => '/f5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					24 =>
						array (
							0 => false,
							1 => '/i5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					25 =>
						array (
							0 => false,
							1 => '/j5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					26 =>
						array (
							0 => false,
							1 => '/l5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					27 =>
						array (
							0 => false,
							1 => '/k5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					28 =>
						array (
							0 => false,
							1 => '/e5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					29 =>
						array (
							0 => false,
							1 => '/d5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					30 =>
						array (
							0 => false,
							1 => '/c3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					31 =>
						array (
							0 => false,
							1 => '/j4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					32 =>
						array (
							0 => false,
							1 => '/l4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					33 =>
						array (
							0 => false,
							1 => '/a5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					34 =>
						array (
							0 => false,
							1 => '/c5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					35 =>
						array (
							0 => false,
							1 => '/b5/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					36 =>
						array (
							0 => false,
							1 => '/i4/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					37 =>
						array (
							0 => false,
							1 => '/d3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					38 =>
						array (
							0 => false,
							1 => '/i1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					39 =>
						array (
							0 => false,
							1 => '/h1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					40 =>
						array (
							0 => false,
							1 => '/j1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					41 =>
						array (
							0 => false,
							1 => '/k1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					42 =>
						array (
							0 => false,
							1 => '/l1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					43 =>
						array (
							0 => false,
							1 => '/b3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					44 =>
						array (
							0 => false,
							1 => '/f1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					45 =>
						array (
							0 => false,
							1 => '/b1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					46 =>
						array (
							0 => false,
							1 => '/a1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					47 =>
						array (
							0 => false,
							1 => '/c1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					48 =>
						array (
							0 => false,
							1 => '/d1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					49 =>
						array (
							0 => false,
							1 => '/e1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					50 =>
						array (
							0 => false,
							1 => '/a2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					51 =>
						array (
							0 => false,
							1 => '/g1/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					52 =>
						array (
							0 => false,
							1 => '/j2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					53 =>
						array (
							0 => false,
							1 => '/i2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					54 =>
						array (
							0 => false,
							1 => '/l2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					55 =>
						array (
							0 => false,
							1 => '/a3/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					56 =>
						array (
							0 => false,
							1 => '/b2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					57 =>
						array (
							0 => false,
							1 => '/h2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					58 =>
						array (
							0 => false,
							1 => '/k2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					59 =>
						array (
							0 => false,
							1 => '/g2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					60 =>
						array (
							0 => false,
							1 => '/c2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					61 =>
						array (
							0 => false,
							1 => '/d2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					62 =>
						array (
							0 => false,
							1 => '/e2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					63 =>
						array (
							0 => false,
							1 => '/f2/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					64 =>
						array (
							0 => false,
							1 => '/d/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					65 =>
						array (
							0 => false,
							1 => '/e/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					66 =>
						array (
							0 => false,
							1 => '/m/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					67 =>
						array (
							0 => false,
							1 => '/b/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					68 =>
						array (
							0 => false,
							1 => '/f/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					69 =>
						array (
							0 => false,
							1 => '/w/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					70 =>
						array (
							0 => false,
							1 => '/c/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					71 =>
						array (
							0 => false,
							1 => '/l/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					72 =>
						array (
							0 => false,
							1 => '/k/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					73 =>
						array (
							0 => false,
							1 => '/a/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					74 =>
						array (
							0 => false,
							1 => '/g/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					75 =>
						array (
							0 => false,
							1 => '/j/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					76 =>
						array (
							0 => false,
							1 => '/i/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					77 =>
						array (
							0 => false,
							1 => '/h/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
					78 =>
						array (
							0 => false,
							1 => '/',
							2 =>
								array (
								),
							3 =>
								array (
									'method' => 1,
								),
						),
				),
			'routesById' =>
				array (
				),
			'staticRoutes' =>
				array (
				),
			'submux' =>
				array (
				),
			'expand' => true,
		)); /* version */

	}
}