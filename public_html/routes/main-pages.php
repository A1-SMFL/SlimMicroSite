<?php
namespace Systems;

$app->redirect('/', '/home');

$app->get('/home', function ($request, $response, $args){
	$data = [];
    return $this->get('view')->render($response, 'home.twig', $data);
})->setName('home');
