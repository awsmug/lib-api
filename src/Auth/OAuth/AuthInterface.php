<?php

namespace PHPAPI\Auth\OAuth;

interface AuthInterface {
    public function getUrl() : string;
    public function getClientId() : string;
    public function getAccessToken() : Token;
}