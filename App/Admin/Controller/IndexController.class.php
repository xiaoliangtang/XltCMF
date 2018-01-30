<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
class IndexController extends BaseController {

	/**
	 * 后台框架首页
	 */
    public function index(){
    	// p($_SESSION);die;
        $this->display('index');
    }
}