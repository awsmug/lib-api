<?php

namespace PHPAPI\Auth\OAuth;

use GuzzleHttp\Client;

abstract class API {
    protected AuthInterface $auth;

    protected string $url;

    public function __construct( AuthInterface $auth ) {
        $this->auth = $auth;
    }

    abstract public function getUrl() : string;

    public function request( string $endpoint, string $method, array $params = [] ) {
        $client = new Client();

        $url = $this->getUrl() . $endpoint;

        $options = [
            'headers' => $this->headers(),
        ];

        switch( $method ) {
            case 'GET':
                $options['query'] = $params;
                break;
            case 'POST':
                $options['form_params'] = $params;
                break;
        }

        $response = $client->request( $method, $url, $options )->getBody()->getContents();
        $response = json_decode( $response );

        $response = $response;
    }

    /**
     * Fields to send.
     * 
     * Can be overwritten and extended by child class.
     * 
     * @return array Fields which will be sent on authorization.
     * 
     * @since 1.0.0
     */
    protected function headers() : array {
        $headers = [
            'Content-Type' => 'application/json',
            'Authorization' => 'Bearer ' . $this->auth->getAccessToken()->getToken(),
        ];

        return $headers;
    }
}