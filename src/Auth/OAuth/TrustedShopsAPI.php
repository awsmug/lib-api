<?php

namespace PHPAPI\Auth\OAuth;

class TrustedShopsAPI extends API {
    public function getUrl(): string {
        return 'https://api.etrusted.com';
    }
}