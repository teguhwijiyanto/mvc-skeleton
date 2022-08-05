<?php
session_start();

$currentURL = "".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";

if (preg_match("/.php/i", $currentURL)) {
	echo("Page not found");
	exit;
} 

$currentURL_expl = explode("/",$currentURL);
$action = $currentURL_expl[2];

require("routing.php");

function call($routes, $action){

include("PageController.php");

	 $controller=new Page();

		if(trim($action)=="") {
			 $controller->homepage();
		} // if(trim($v1)=="") {
		elseif(trim($action)=="/") {
			 $controller->homepage();
		} // if(trim($v1)=="") {
		else {
			$action_backslashed = "/".$action;
			if (in_array($action_backslashed, $routes))
			  {
				  $controller->$action();
			  }
			else
			  {
				  echo "URL not found";
			  }
		} // else {

} // function call($routes, $action){

call($routes, $action);

?> 

