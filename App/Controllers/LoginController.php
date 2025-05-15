<?php

namespace App\Controllers;

class LoginController {

    public function index() {
        return require_once __DIR__ . '/../Views/login.php';
    }
    
}