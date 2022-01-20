<?php

namespace PHPAPI\Routes;

use PHPAPI\API\API;

/**
 * Class Route.
 * 
 * @since 1.0.0
 */
abstract class Route {
    /**
     * API
     * 
     * @var API
     * 
     * @since 1.0.0
     */
    protected API $api;

    /**
     * Endpoint
     * 
     * @var string
     * 
     * @since 1.0.0
     */
    protected string $endpoint;

    /**
     * Route methods
     * 
     * @var RouteMethod[]
     * 
     * @since 1.0.0
     */
    protected array $methods;

    /**
     * Constructor
     * 
     * @since 1.0.0
     */
    public function __construct( API $api, string $endpoint ) {
        $this->api      = $api;
        $this->endpoint = $endpoint;

        $this->initRoute();
    }

    /**
     * Initialize Route.
     * 
     * @since 1.0.0
     */
    private function initRoute() {
        $this->methods = $this->methods();
    }

    /**
     * Child class method initializiation.
     * 
     * Put in the methods with fields here.
     * 
     * @return RouteMethod[] An array of all methods in endpoint.
     */
    abstract protected function methods() : array;
}