<?php

require( dirname( __FILE__ ) . '/Bootstrap.php' );

use PHPAPI\Examples\TrustedShopsAPI;
use PHPAPI\Examples\TrustedShopsAuth;
use PHPUnit\Framework\TestCase;

class OAuthTest extends TestCase {
    public function testAPIAPIFunction() {
		$auth  = new TrustedShopsAuth( TS_CLIENT_ID, TS_CLIENT_SECRET );
		$api   = new TrustedShopsAPI( $auth );

		$params = [
			'count' => 100,
			'rating' => '1',
			'status' => 'APPROVED'
		];

		$api->request( '/reviews', 'GET', $params );
		// $api->reviews->get( $params );
	}
}