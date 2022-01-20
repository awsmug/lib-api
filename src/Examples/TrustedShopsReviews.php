<?php

namespace PHPAPI\Examples;

use PHPAPI\Routes\Field;
use PHPAPI\Routes\Route;
use PHPAPI\Tools\Methods;

/**
 * Trusted shops auth.
 * 
 * @since 1.0.0
 */
class TrustedShopsReviews extends Route {

    /**
     * Constructor
     * 
     * @param TrustedShopsAPI
     * 
     * @since 1.0.0
     */
    public function __construct( TrustedShopsAPI $api ) {
        parent::__construct( $api, '/reviews' );
    }

    /**
     * Route methods
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    protected function methods() : array {
        $methods = [
            Methods::$GET => [
                new Field( 'channels', 'string' ),
                new Field( 'after', 'string' ),
                new Field( 'before', 'string' ),
                new Field( 'submittedAfter', 'string' ),
                new Field( 'submittedBefore', 'string' ),
                new Field( 'count', 'int' ),
                new Field( 'rating', 'int' ),
                new Field( 'status', 'string' ),
                new Field( 'type', 'string' ),
                new Field( 'hasReply', 'bool' ),
                new Field( 'additionalInformation', 'string' ),
                new Field( 'ignoreStatements', 'string' ),
                new Field( 'query', 'string' ),
                new Field( 'orderBy', 'string' ),
            ]
        ];

        return $methods;
    }
}