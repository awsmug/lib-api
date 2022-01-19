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
			'rating' => '5',
			'status' => 'APPROVED'
		];

		$response = $api->request( '/reviews', 'GET', $params );

		$this->assertEquals( 5, $response->items[0]->rating );
		
		// $api->reviews->get( $params );
	}
}