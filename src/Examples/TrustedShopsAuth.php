<?php

namespace PHPAPI\Examples;

use PHPAPI\Auth\OAuth;

class TrustedShopsAuth extends OAuth {
    public function getUrl() : string {
        return 'https://login.etrusted.com/oauth/token';
    }

    public function params() : array {
        $params = parent::params();
        $params['audience']   = 'https://api.etrusted.com';
        return $params;
    }
}