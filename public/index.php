<?php
require_once __DIR__ . '/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;


include __DIR__ . '/../app/routes.php';
// $app->get('/teste', function(){
// 	return "Hello World";
// });

// $app->get('/', function(){
// 	return new Symfony\Component\HttpFoundation\Response("Hello Word");
// });

// $app->get('/users/{id}', function($id){
// 	return "USER - {$id}";
// })
// 	->value("id", 0)
// 	->assert("id", "\d+");


// $app->get("/users/{user}", function($user){
// 	return "User {$user}";
// })->convert("user", function($id){
// 		$user = 0;
// 		if ($user == 0) {
// 			return new Symfony\Component\HttpFoundation\Response("User #{$id} not found.", 404);
// 		}
// 		return $user;
// 	});

// $app->get("/users/list", function(Silex\Application $app){
// 	return "list of Users";
// })->bind('users');


$app->run();