<?php

namespace PHPAPI\Examples;

use PHPAPI\API\API;

/**
 * Trusted shops API.
 * 
 * @since 1.0.0
 */
class TrustedShopsAPI extends API {
    /**
     * Trusted shops api url.
     * 
     * @return string
     * 
     * @since 1.0.0
     */
    protected function getUrl() : string {
        return 'https://api.etrusted.com';
    }
}