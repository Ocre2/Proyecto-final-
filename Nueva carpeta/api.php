<?php

use App\BookRepository;
use App\PoemRepository;

require_once 'vendor/autoload.php';


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Permite solicitudes desde cualquier origen
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');
$path_parts = explode('/', $path);

// Enrutamiento básico
switch ($path_parts[2]) {
    case 'books':
        $obj = new BookRepository();
        echo json_encode($obj->getBooks());
        break;
    case 'poems':
        $obj = new PoemRepository();
        echo json_encode($obj->getPoems());
        break;

    default:
        http_response_code(404);
        echo json_encode(['message' => 'Endpoint no encontrado']);
        break;
}
