<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Models\CateModel;
use App\Models\PageModel;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var array
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * Constructor.
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);
        $session = \Config\Services::session();

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        $usersModel = new \App\Models\usersModel();
        $loggerUserID = session()->get('loggedUser');
        $userInfo = $usersModel->find($loggerUserID);
        $dataLogin = ['userinfo'=> $userInfo, 'loggerUserID' => $loggerUserID];
        $cateModel = new \App\Models\CateModel();
        $data2['cate'] = $cateModel->orderBy('cate_type', 'DESC')->findAll();
        $pageModel = new PageModel();
        $data2['page_home'] = $pageModel->where('page_status', 1)->first();
        $data2['link_page'] = $pageModel->where('page_status !=', 1)->where('page_show', 1)->findAll();
        // dd($data['link_page']);
        $data2['items'] = $session->get('cart');
        
        
        

        return view('front_end/canvas_site/layout', $data2).view('admin/admin-layout', $dataLogin);


        
    }
}
