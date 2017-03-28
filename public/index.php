<?php

require_once __DIR__ . "/../vendor/autoload.php";

ToroHook::add("404",function(){
	echo "404";
	http_response_code(404);
});

Toro::serve([
	'/'=>link\Controllers\HomeController::class,
	'/login'=>link\Controllers\LoginController::class,
	'/signup'=>link\Controllers\SignupController::class,
	'/login/input'=>link\Controllers\PostLoginController::class,
	'/signup/input'=>link\Controllers\PostSignupController::class,
	'/submit'=>link\Controllers\PostInputController::class,
	'/signout'=>link\Controllers\SignoutController::class,
	
	]);
//Uncaught exception 'PDOException' with message 'SQLSTATE[23000]: Integrity constraint violation: