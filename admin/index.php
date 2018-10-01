<?php 
	/*include_once("views/layout.php");*/
	$controller = isset($_GET['controller'])? $_GET['controller'].'Controller' : 'UserController' ;
	$action = isset($_GET['action'])?$_GET['action']: 'getUser' ;

	require_once('controllers/usercontroller.php');
	$usercontroller = new $controller();
	$usercontroller-> $action();
	/*include_once("views/layout2.php");*/
 ?>