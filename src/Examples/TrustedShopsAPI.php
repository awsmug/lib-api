<?php

namespace PHPAPI\Examples;

use PHPAPI\API\API;

class TrustedShopsAPI extends API {
    protected function getUrl() : string {
        return 'https://api.etrusted.com';
    }
}