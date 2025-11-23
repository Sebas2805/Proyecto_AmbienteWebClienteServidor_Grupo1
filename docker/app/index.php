<?php
// index.php
session_start();

require __DIR__ . '/config/database.php';


require __DIR__ . '/models/Usuario.php';
require __DIR__ . '/controllers/HomeController.php';
require __DIR__ . '/controllers/AuthController.php';


$route = $_GET['route'] ?? 'home';

switch ($route) {
  case 'home':
    $controller = new HomeController();
    $controller->index();
    break;

  case 'login':

    if (isset($_SESSION['usuario_id'])) {
      header('Location: index.php?route=home');
      exit;
    }

    $controller = new AuthController($conn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $controller->login();       // procesa el formulario
    } else {
      $controller->showLogin();   // muestra la vista
    }
    break;

  case 'register':
    if (isset($_SESSION['usuario_id'])) {
      header('Location: index.php?route=home');
      exit;
    }

    $controller = new AuthController($conn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $controller->register();
    } else {
      $controller->showRegistro();
    }
    break;

  case 'perfil':
    if (!isset($_SESSION['usuario_id'])) {
        header('Location: index.php?route=login');
        exit;
    }
    require __DIR__ . '/models/Postulacion.php';
    require __DIR__ . '/controllers/PerfilController.php';

    $controller = new PerfilController($conn);
    $controller->index();
    break;
    
  case 'logout':
    session_unset();
    session_destroy();
    header('Location: index.php?route=home');
    exit;

  default:
    http_response_code(404);
    echo "404 - Página no encontrada";
    break;
}