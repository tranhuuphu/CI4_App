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
$routes->setDefaultController('CanvasController');
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
// $routes->get('/', 'Home::index');


// login before acess admin board, and direct to admin page if already login
$routes->group("auth", ['filter'=>'AlreadyLoggedIn'], function($routes){
    //home in get == home in as
    $routes->get('/',"Admin\Auth::login",['as'=>'auth']);

    $routes->get('check',"Admin\Auth::checkLogin",['as'=>'auth.check']);
    $routes->post('check',"Admin\Auth::checkLogin",['as'=>'auth.check']);

    $routes->get('forgot',"Admin\Auth::save",['as'=>'auth.forgot']);
    $routes->post('resend',"Admin\Auth::save",['as'=>'auth.resend']);

    




});
$routes->get('forgotpw',"Admin\Auth::Forgot",['as'=>'forgotpw']);
$routes->post('forgotpw',"Admin\Auth::Resend",['as'=>'forgotpw']);

// filter Auth to access Admin Page

$routes->group("admin", ['filter'=>'AuthCheck'], function($routes){
    
    $routes->get('/',"Admin\AdminController::index");
    $routes->get('dashboard',"Admin\DashboardController::index",['as'=>'dashboard']);

    $routes->group("auth", function($routes){
        //home in get == home in as
        $routes->get('register',"Admin\Auth::register",['as'=>'auth.register']);
        $routes->get('save',"Admin\Auth::save",['as'=>'auth.save']);
        $routes->post('save',"Admin\Auth::save",['as'=>'auth.save']);
        $routes->get('logout',"Admin\Auth::logout",['as'=>'auth.logout']);

        $routes->get('detail',"Admin\Auth::getEdit",['as'=>'auth.detail']);
        $routes->post('edit/(:num)',"Admin\Auth::postEdit/$1");


        



    });

    $routes->group("post", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\PostController::index");

        $routes->get('create',"Admin\PostController::getPost");
        $routes->post('save',"Admin\PostController::savePost");

        $routes->get('edit/(:num)',"Admin\PostController::getEdit/$1");
        $routes->post('edit/(:num)',"Admin\PostController::SaveEdit/$1");

        $routes->get('show/(:num)',"Admin\PostController::show/$1");
        $routes->post('show/(:num)',"Admin\PostController::show/$1");

        $routes->get('hidden/(:num)',"Admin\PostController::hidden/$1");
        $routes->post('hidden/(:num)',"Admin\PostController::hidden/$1");

    });

    $routes->group("gallery", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\GalleryController::index");

        $routes->get('create',"Admin\GalleryController::getGallery");
        $routes->post('save',"Admin\GalleryController::saveGallery");

        $routes->get('edit/(:num)',"Admin\GalleryController::getEdit/$1");
        $routes->post('edit/(:num)',"Admin\GalleryController::SaveEdit/$1");

        $routes->get('show/(:num)',"Admin\GalleryController::show/$1");
        $routes->post('show/(:num)',"Admin\GalleryController::show/$1");

        $routes->get('hidden/(:num)',"Admin\GalleryController::hidden/$1");
        $routes->post('hidden/(:num)',"Admin\GalleryController::hidden/$1");

    });

    $routes->group("page", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\PageController::index");

        $routes->get('create',"Admin\PageController::getPage");
        $routes->post('save',"Admin\PageController::savePage");

        $routes->get('edit/(:num)',"Admin\PageController::getEdit/$1");
        $routes->post('edit/(:num)',"Admin\PageController::SaveEdit/$1");

        $routes->get('show/(:num)',"Admin\PageController::show/$1");
        $routes->post('show/(:num)',"Admin\PageController::show/$1");

        $routes->get('hidden/(:num)',"Admin\PageController::hidden/$1");
        $routes->post('hidden/(:num)',"Admin\PageController::hidden/$1");

        $routes->get('add/(:num)',"Admin\PageController::add/$1");
        $routes->post('addThis/(:num)',"Admin\PageController::addThis/$1");

    });

    $routes->group("cate", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\CateController::index");

        $routes->get('create',"Admin\CateController::getCate");
        $routes->post('store',"Admin\CateController::store");
        $routes->get('edit/(:num)',"Admin\CateController::getEditCate/$1");
        $routes->post('save/(:num)',"Admin\CateController::postEditCate/$1");

    });

    $routes->group("image", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\ImageController::index");

        $routes->get('imageTiny',"Admin\ImageController::imageTiny");

        $routes->get('compress',"Admin\ImageController::compress");
        $routes->post('compress',"Admin\ImageController::compress");

        $routes->get('again',"Admin\ImageController::compressAgain");
        $routes->post('again',"Admin\ImageController::compressAgain");

    });


    $routes->add('filemanager/(:any)', '\Filemanager\Controllers\Filemanager::run');
    
    

    
});


// Canvas Site
$routes->get('/', 'CanvasController::index');

$routes->get('(:any)/(:any)-(:num).html', 'CanvasController::post/$1/$2/$3');



$routes->get('tag/(:any)-(:num)', 'CanvasController::tag/$1/$2');
$routes->get('cart/remove/(:num)', 'CanvasController::remove/$1');
$routes->get('buy/(:num)', 'CanvasController::buy/$1');
$routes->get('gio-hang/cap-nhat', 'CanvasController::update');
$routes->post('gio-hang/cap-nhat', 'CanvasController::update');
$routes->get('gio-hang', 'CanvasController::cart');
$routes->get('dat-hang', 'CanvasController::order');



// $routes->get('/', 'HomeController::index');


// $routes->get('(:any)/(:any).html', 'HomeController::getDetailPost/$1/$2');

$routes->get('(:any)-(:num).html', 'CanvasController::getPage/$1/$2');




$routes->get('search', 'CanvasController::getSearch');

$routes->get('san-pham', 'CanvasController::getProd');


// $routes->get('site-map.xml', 'HomeController::siteMap');

$routes->get('site-map.xml', 'CanvasController::siteMap');

$routes->get('(:any)-(:num)', 'CanvasController::postCate/$1/$2');

$routes->get('page/download/(:any)', 'CanvasController::download/$1');

// $routes->get('(:any)', 'HomeController::catePost/$1');

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
