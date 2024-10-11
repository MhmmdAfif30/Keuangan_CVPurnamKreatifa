<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/regis', 'Regis::index');
$routes->post('regis/store', 'Regis::store');
$routes->post('login/loginAuth', 'Login::loginAuth');
$routes->get('/login', 'Login::index');

// $routes->get('/', 'Dashboard::index', ['filter' => 'authGuard']);
$routes->get('/', 'Dashboard::index');
$routes->get('/logout', 'Dashboard::logout');

$routes->get('/project', 'Project::index');
$routes->get('/project/tambah', 'Project::create');
$routes->post('/project/tambah_proses', 'Project::store');
$routes->get('/project/ubah/(:num)', 'Project::edit/$1');
$routes->post('/project/ubah_proses/(:num)', 'Project::update/$1');
$routes->get('/project/hapus/(:num)', 'Project::delete/$1');

$routes->get('/bank', 'Bank::index');
$routes->get('/bank/tambah', 'Bank::create');
$routes->post('/bank/tambah_proses', 'Bank::store');
$routes->get('/bank/ubah/(:num)', 'Bank::edit/$1');
$routes->post('/bank/ubah_proses/(:num)', 'Bank::update/$1');
$routes->get('/bank/hapus/(:num)', 'Bank::delete/$1');

$routes->get('/sub_klasifikasi', 'SubKlasifikasi::index');
$routes->get('/sub_klasifikasi/tambah', 'SubKlasifikasi::create');
$routes->post('/sub_klasifikasi/tambah_proses', 'SubKlasifikasi::store');
$routes->get('/sub_klasifikasi/ubah/(:num)', 'SubKlasifikasi::edit/$1');
$routes->post('/sub_klasifikasi/ubah_proses/(:num)', 'SubKlasifikasi::update/$1');
$routes->get('/sub_klasifikasi/hapus/(:num)', 'SubKlasifikasi::delete/$1');

$routes->get('/klasifikasi', 'Klasifikasi::index');
$routes->get('/klasifikasi/tambah', 'Klasifikasi::create');
$routes->post('/klasifikasi/tambah_proses', 'Klasifikasi::store');
$routes->get('/klasifikasi/ubah/(:num)', 'Klasifikasi::edit/$1');
$routes->post('/klasifikasi/ubah_proses/(:num)', 'Klasifikasi::update/$1');
$routes->get('/klasifikasi/hapus/(:num)', 'Klasifikasi::delete/$1');

$routes->get('/admin', 'Admin::index');
$routes->get('/admin/tambah', 'Admin::create');
$routes->post('/admin/tambah_proses', 'Admin::store');
$routes->get('/admin/ubah/(:num)', 'Admin::edit/$1');
$routes->post('/admin/ubah_proses/(:num)', 'Admin::update/$1');
$routes->get('/admin/hapus/(:num)', 'Admin::delete/$1');
$routes->get('/admin/ubah_status/(:num)', 'Admin::status/$1');

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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
