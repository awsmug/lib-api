<?php

namespace PHPAPI\Auth;

/**
 * Parent Class for basic auth.
 * 
 * @since 1.0.0
 */
abstract class Bearer implements AuthInterface {
    /**
     * Token string.
     * 
     * @var string
     * 
     * @since 1.0.0
     */
    protected $token;

    /**
     * Constructur.
     * 
     * @since 1.0.0 
     */
    public function __construct( string $token ) {
        $this->token = $token;
    }

    /**
     * Auth headers for API requests.
     * 
     * @return array Auth headers.
     * 
     * @since 1.0.0
     */
    public function getAuthHeaders() : array {
        return [
            'Authorization' => 'Bearer ' . $this->token,
        ];
    }
}