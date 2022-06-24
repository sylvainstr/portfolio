<?php

require_once __DIR__ . '/../vendor/autoload.php';

$router = new AltoRouter();

$router->setBasePath($_SERVER['BASE_URI']);

$router->map('GET', '/', [
  'controller' => 'MainController',
  'method' => 'home',
], 'main-home');

$router->map('POST', '/', [
  'controller' => 'MainController',
  'method' => 'contact',
], 'contact');


// match() va comparer la variable $_SERVER['REQUEST_URI'] avec les routes déclarées
// Si match() trouve un match (correspondance) entre les deux, on obtient un array
// Sinon, on obtient la valeur false
$match = $router->match();
// $match est soit un tableau avec les informations de la route trouvée
// soit la valeur false si la route demandée n'est pas trouvée


// On vérfiie que $match est un tableau, sinon il vaut false
if (is_array($match)) {
  $controllerName = 'Portfolio\\Controllers\\' . $match['target']['controller'];
  $methodName = $match['target']['method'];

  // Grace à AltoRouter, on peut récupérer le paramètre dans l'url pour l'envoyer en argument de la méthode
  $params = $match['params'];

  $controller = new $controllerName();
  $controller->$methodName($params);
} else {
  $controller = new \Portfolio\Controllers\ErrorController();
  $controller->notFound();
}