<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->get('/', 'Home::index');

//login before acess admin board
$routes->group("auth", function($routes){
    //home in get == home in as

    // $routes->get('/',"Admin\Auth::index",['as'=>'auth']);

    $routes->get('login',"Admin\Auth::login",['as'=>'auth.login']);

    $routes->get('check',"Admin\Auth::checkLogin",['as'=>'auth.check']);
    $routes->post('check',"Admin\Auth::checkLogin",['as'=>'auth.check']);


});

$routes->group('', ['filter'=>'AlreadyLoggedIn'], function($routes){
    

    $routes->group("admin", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\Auth::index",['as'=>'auth']);
        
        // $routes->get('register',"Admin\Auth::register",['as'=>'auth.register']);

    });
});


// filter Auth to access Admin Page

$routes->group("admin", ['filter'=>'AuthCheck'], function($routes){
    

    $routes->group("auth", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\Auth::index",['as'=>'auth']);
        
        $routes->get('register',"Admin\Auth::register",['as'=>'auth.register']);
        $routes->get('save',"Admin\Auth::save",['as'=>'auth.save']);
        $routes->post('save',"Admin\Auth::save",['as'=>'auth.save']);

        $routes->get('logout',"Admin\Auth::logout",['as'=>'auth.logout']);

    });
    $routes->get('dashboard',"Admin\DashboardController::index",['as'=>'dashboard']);

    
});



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
