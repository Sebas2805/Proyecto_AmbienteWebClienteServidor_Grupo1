<?php

class HomeController
{
    public function index(): void
    {
        // Podrías cargar datos de BD aquí si quisieras:
        // require __DIR__ . '/../config/database.php';
        // $conn ...

        $page = 'home';                     // views/home.php
        require __DIR__ . '/../views/layout.php';
    }
}