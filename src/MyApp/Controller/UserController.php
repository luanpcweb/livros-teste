<?php
namespace MyApp\Controller;
/**
* 
*/
class UserController
{
	
	function index($app)
	{	
		// $user = new \MyApp\Model\User();
		// return $user->listar();
		return $app['twig']->render('home.twig');
	}

	function edit($id)
	{
		# code...
	}

	function show($id)
	{
		# code...
	}

	function store()
	{
		# code...
	}

	function update($id)
	{
		# code...
	}

	function destroy($id)
	{
		# code...
	}
}