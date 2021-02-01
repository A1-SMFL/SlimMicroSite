<?php
use Systems\DBWrapper;

$app->redirect('/', '/home');

$app->get('/home', function ($request, $response, $args){

	//calling DB:
	//DBWrapper::fetch_all("SELECT * FROM test_table");
	$data = [];
    return $this->get('view')->render($response, 'home.twig', $data);
})->setName('home');
