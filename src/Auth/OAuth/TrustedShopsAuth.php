<?php

namespace PHPAPI\Auth\OAuth;

use PHPAPI\Auth\OAuth\AuthServer;

class TrustedShopsAuth extends Auth {
    public function getUrl() : string {
        return 'https://login.etrusted.com/oauth/token';
    }

    public function params() : array {
        $params = parent::params();
        $params['audience']   = 'https://api.etrusted.com';
        return $params;
    }
}