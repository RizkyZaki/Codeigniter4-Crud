<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->post('/login/process', 'Login::process');
// $routes->post('/register/process', 'Register::process');
$routes->get('/logout', 'Login::logout');
$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->get('/', 'Landing::index');
$routes->get('/dashboard', 'News::dashboard', ['filter' => 'usersAuth']);
$routes->get('/list-category', 'Category::index', ['filter' => 'usersAuth']);
$routes->get('/add-category', 'Category::add', ['filter' => 'usersAuth']);
$routes->add('/profile', 'User::profile', ['filter' => 'usersAuth']);
$routes->post('/edit', 'User::edit', ['filter' => 'usersAuth']);
$routes->post('delete/(:segment)', 'User::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/create', 'News::create', ['filter' => 'usersAuth']);
$routes->get('/list', 'News::list', ['filter' => 'usersAuth']);
$routes->get('/news/(:any)', 'News::detail/$1', ['filter' => 'usersAuth']);
$routes->add('delete/(:segment)', 'News::delete/$1', ['filter' => 'usersAuth']);
$routes->add('hapus/(:segment)', 'Category::delete/$1', ['filter' => 'usersAuth']);
$routes->get('/edit/(:segment)', 'News::edit/$1', ['filter' => 'usersAuth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
