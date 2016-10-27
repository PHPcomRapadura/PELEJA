<?php
use Phalcon\Mvc\Router\Annotations as RouterAnnotations;

// Use the annotations router. We're passing false as we don't want the router to add its default patterns
$router = new RouterAnnotations(false);

// Read the annotations from ProductsController if the URI starts with /api/products
$router->addResource("Index", "/api");
$router->addResource("Teste", "/api/teste");

return $router;