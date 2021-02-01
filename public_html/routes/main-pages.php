<?php
namespace Systems;

$app->redirect('/', '/home');
$DB = new DBPDO();
$app->get('/home', function ($request, $response, $args){
	
	$data = [];
    return $this->get('view')->render($response, 'home.twig', $data);
})->setName('home');
