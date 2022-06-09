<?php

use Electrify\Core\Router;
use Electrify\Core\Eloquent\Authentication as Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Electrify\Core\Request;

/**
 * Instantiate Router
 */
$router = new Router;


// homepage
$router->get('/', [HomeController::class, "index"]);

// show register page
$router->get('/register', [RegisterController::class, "index"]);

// store registration data
$router->post('/store', [RegisterController::class, "store"]);

// show login form
$router->get('/login', [LoginController::class, "index"]);

// log in user
$router->post('/auth', [LoginController::class, "auth"]);

// logout
$router->post('/logout', [Auth::class, "logout"]);

// test
$router->get('/show/{id}/{user:[a-z]+}', function(Request $request) {
    echo ($request->getParam('user'));
});

/**
 * Start routing
 */
$router->run();