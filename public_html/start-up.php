<?php
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Twig\TwigFunction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


require __DIR__ . '/../vendor/autoload.php';

$container = new Container();

$container->set('view', function ($container) {
  $twig = Twig::create( TEMPLATES_PATH,
    ['cache' => false ] //ROOT . '/cache']
  );
  return $twig;
});

$app = AppFactory::createFromContainer($container);

$app->addBodyParsingMiddleware(); 

$app->addRoutingMiddleware();
$app->add(TwigMiddleware::createFromContainer($app));

$errorMiddleware = $app->addErrorMiddleware(true, true, true);
$errorMiddleware->setErrorHandler(HttpNotFoundException::class, function (Request $request, Throwable $exception, bool $displayErrorDetails) {
  $response = new Response();
  return $response->withStatus(404)->withHeader('Location', SITE_URL . '/Home');
});