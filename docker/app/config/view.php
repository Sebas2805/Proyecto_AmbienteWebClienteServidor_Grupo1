<?php
// config/view.php

function renderView(string $view, array $data = []): void {
    $viewPath = __DIR__ . '/../views/' . $view . '.php';

    if (!file_exists($viewPath)) {
        echo "Vista no encontrada: $view";
        return;
    }

    extract($data); // convierte ['title'=>'x'] en $title
    ob_start();
    require $viewPath;
    $content = ob_get_clean();

    require __DIR__ . '/../views/layout.php';
}