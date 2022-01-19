<?php

namespace PHPAPI\Examples;

use PHPAPI\Auth\OAuth;

/**
 * Trusted shops auth.
 * 
 * @since 1.0.0
 */
class TrustedShopsAuth extends OAuth {
    /**
     * Trusted shops auth url.
     * 
     * @return string
     * 
     * @since 1.0.0
     */
    public function getUrl() : string {
        return 'https://login.etrusted.com/oauth/token';
    }

    /**
     * Individualizing Params.
     * 
     * @return array
     * 
     * @since 1.0.0
     */
    public function params() : array {
        $params = parent::params();
        $params['audience']   = 'https://api.etrusted.com';
        return $params;
    }
}