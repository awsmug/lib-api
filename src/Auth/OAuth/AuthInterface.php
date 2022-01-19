<?php

namespace PHPAPI\Auth\OAuth;

interface AuthInterface {
    public function getAccessToken() : Token;
    public function getAuthHeaders() : array;
}