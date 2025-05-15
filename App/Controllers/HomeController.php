<?php

namespace App\Controllers;

class HomeController {

    public function index() {
        require __DIR__ . '/../Views/assets/imports/navbar.php';
        require __DIR__ . '/../Views/assets/imports/banner.php';
        require __DIR__ . '/../Views/assets/imports/about.php';
        require __DIR__ . '/../Views/assets/imports/paragraphs.php';
        require __DIR__ . '/../Views/assets/imports/downloadapp.php';



    }
    
}