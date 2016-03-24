<?php
namespace MyApp\Controller;
/**
* 
*/
class UserController
{
	
	function index(\Silex\Application $app)
	{	
		$user = new \MyApp\Model\User();
		$result = $user->listar();
		return $app['twig']->render("home.twig", array(
				"nome" => $result
			));
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