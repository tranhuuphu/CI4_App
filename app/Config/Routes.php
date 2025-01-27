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
// $routes->setDefaultController('DaiLongController');
$routes->setDefaultController('MayMocController');
// $routes->setDefaultController('VaVoController');
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

        $routes->get('product',"Admin\PostController::getProduct");
        $routes->get('product/edit/(:num)',"Admin\PostController::getProductEdit/$1");
        $routes->post('product/edit/(:num)',"Admin\PostController::saveProductEdit/$1");

        $routes->get('edit/(:num)',"Admin\PostController::getEdit/$1");
        $routes->post('edit/(:num)',"Admin\PostController::SaveEdit/$1");

        $routes->get('show/(:num)',"Admin\PostController::show/$1");
        $routes->post('show/(:num)',"Admin\PostController::show/$1");

        $routes->get('hidden/(:num)',"Admin\PostController::hidden/$1");
        $routes->post('hidden/(:num)',"Admin\PostController::hidden/$1");

        $routes->get('del/(:num)',"Admin\PostController::getDelete/$1");


    });

    $routes->group("don-hang", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\DonHangController::index");
        $routes->get('edit/(:num)/(:num)',"Admin\DonHangController::getEdit/$1/$2");
        $routes->post('edit/(:num)/(:num)',"Admin\DonHangController::SaveEdit/$1/$2");
        $routes->get('del/(:num)',"Admin\DonHangController::getDelete/$1");

        

    });

     $routes->group("type_gallery", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\GalleryTypeController::index");

        $routes->get('create_type',"Admin\GalleryTypeController::getType");
        $routes->post('store',"Admin\GalleryTypeController::store");
        $routes->get('edit/(:num)',"Admin\GalleryTypeController::getEditType/$1");
        $routes->post('save/(:num)',"Admin\GalleryTypeController::postEditType/$1");

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

        $routes->get('compress',"Admin\GalleryController::compressGallerryImage");

        


    });

    $routes->group("carousel", function($routes){
        //home in get == home in as
        $routes->get('/',"Admin\CarouselController::index");

        $routes->get('create',"Admin\CarouselController::getCarousel");
        $routes->post('save',"Admin\CarouselController::saveCarousel");

        $routes->get('edit/(:num)',"Admin\CarouselController::getEdit/$1");
        $routes->post('edit/(:num)',"Admin\CarouselController::SaveEdit/$1");

        $routes->get('show/(:num)',"Admin\CarouselController::show/$1");
        $routes->post('show/(:num)',"Admin\CarouselController::show/$1");

        $routes->get('hidden/(:num)',"Admin\CarouselController::hidden/$1");
        $routes->post('hidden/(:num)',"Admin\CarouselController::hidden/$1");


        


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
        $routes->get('/',"Admin\CompressController::index");

        $routes->get('imageTiny',"Admin\CompressController::imageTiny");

        $routes->get('compress',"Admin\CompressController::compress");
        $routes->post('compress',"Admin\CompressController::compress");

        $routes->get('again',"Admin\CompressController::compressAgain");
        $routes->post('again',"Admin\CompressController::compressAgain");

        $routes->get('check_again',"Admin\CompressController::check_image");

        $routes->get('single_compress/(:num)',"Admin\CompressController::single_compress/$1");

        $routes->get('compress_one/(:any)/(:any)',"Admin\CompressController::compress_one/$1/$2");

    });


    $routes->add('filemanager/(:any)', '\Filemanager\Controllers\Filemanager::run');
    
    

    
});


// DaiLong Site

// $routes->get('/', 'DaiLongController::index');

// $routes->get('(:any)/(:any)-(:num).html', 'DaiLongController::post/$1/$2/$3', ['as' => 'post_blog_gallery']);


// $routes->get('sitemap.xml', 'DaiLongController::siteMap');
// $routes->get('table_image', 'DaiLongController::table_image');

// $routes->get('tag/(:any)', 'DaiLongController::tag/$1');
// $routes->get('cart/remove/(:num)', 'DaiLongController::remove/$1');
// $routes->get('buy/(:num)', 'DaiLongController::buy/$1');
// $routes->post('buy/(:num)', 'DaiLongController::buy/$1');
// $routes->get('gio-hang/cap-nhat', 'DaiLongController::update');
// $routes->post('gio-hang/cap-nhat', 'DaiLongController::update');
// $routes->get('gio-hang', 'DaiLongController::cart');
// $routes->get('dat-hang', 'DaiLongController::order');
// $routes->get('hoan-thanh-dat-hang', 'DaiLongController::finishOrder');
// $routes->post('hoan-thanh-dat-hang', 'DaiLongController::finishOrder');
// $routes->get('page/download/(:any)', 'DaiLongController::download/$1');

// $routes->get('(:any)/(:any)', 'DaiLongController::class_gallery/$2', ['as' => 'class_topic']);
// $routes->get('(:any)-(:num).html', 'DaiLongController::getPage/$1/$2');

// $routes->get('search', 'DaiLongController::getSearch');

// $routes->get('san-pham', 'DaiLongController::getProd');




// $routes->get('(:any)-(:num)', 'DaiLongController::postCate/$1/$2');


// Vá Vỏ Site

$routes->get('/', 'VaVoController::index');

$routes->get('(:any)/(:any)-(:num).html', 'VaVoController::post/$1/$2/$3', ['as' => 'post_blog_gallery']);


$routes->get('sitemap.xml', 'VaVoController::siteMap');
$routes->get('table_image', 'VaVoController::table_image');

$routes->get('tag/(:any)', 'VaVoController::tag/$1');
$routes->get('cart/remove/(:num)', 'VaVoController::remove/$1');
$routes->get('buy/(:num)', 'VaVoController::buy/$1');
$routes->post('buy/(:num)', 'VaVoController::buy/$1');
$routes->get('gio-hang/cap-nhat', 'VaVoController::update');
$routes->post('gio-hang/cap-nhat', 'VaVoController::update');
$routes->get('gio-hang', 'VaVoController::cart');
$routes->get('dat-hang', 'VaVoController::order');
$routes->get('hoan-thanh-dat-hang', 'VaVoController::finishOrder');
$routes->post('hoan-thanh-dat-hang', 'VaVoController::finishOrder');
$routes->get('page/download/(:any)', 'VaVoController::download/$1');

$routes->get('(:any)/(:any)', 'VaVoController::class_gallery/$2', ['as' => 'class_topic']);
$routes->get('(:any)-(:num).html', 'VaVoController::getPage/$1/$2');

$routes->get('search', 'VaVoController::getSearch');

$routes->get('san-pham', 'VaVoController::getProd');




$routes->get('(:any)-(:num)', 'VaVoController::postCate/$1/$2');





// MayMoc
// $routes->get('/', 'MayMocController::index');

// $routes->get('(:any)/(:any)-(:num).html', 'MayMocController::post/$1/$2/$3', ['as' => 'post_blog_gallery']);


// $routes->get('sitemap.xml', 'MayMocController::siteMap');
// $routes->get('table_image', 'MayMocController::table_image');

// $routes->get('tag/(:any)-(:num)', 'MayMocController::tag/$1/$2');
// $routes->get('cart/remove/(:num)', 'MayMocController::remove/$1');
// $routes->get('buy/(:num)', 'MayMocController::buy/$1');
// $routes->post('buy/(:num)', 'MayMocController::buy/$1');
// $routes->get('gio-hang/cap-nhat', 'MayMocController::update');
// $routes->post('gio-hang/cap-nhat', 'MayMocController::update');
// $routes->get('gio-hang', 'MayMocController::cart');
// $routes->get('dat-hang', 'MayMocController::order');
// $routes->get('hoan-thanh-dat-hang', 'MayMocController::finishOrder');
// $routes->post('hoan-thanh-dat-hang', 'MayMocController::finishOrder');
// $routes->get('page/download/(:any)', 'MayMocController::download/$1');

// $routes->get('(:any)/(:any)', 'MayMocController::class_gallery/$2', ['as' => 'class_topic']);
// $routes->get('(:any)-(:num).html', 'MayMocController::getPage/$1/$2');

// $routes->get('search', 'MayMocController::getSearch');

// $routes->get('san-pham', 'MayMocController::getProd');




// $routes->get('(:any)-(:num)', 'MayMocController::postCate/$1/$2');


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
