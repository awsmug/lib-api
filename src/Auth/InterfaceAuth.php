<?php

namespace PHPAPI\Auth;

interface InterfaceAuth {
    public function setParams( array $params );
    public function setEndpoint();
    public function authenticate();
    public function isAuthenticated();
}