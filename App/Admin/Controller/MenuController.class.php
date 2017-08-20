<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
class MenuController extends BaseController {

	/**
	 * 菜单列表
	 */
    public function index(){
        $this->display('index');
    }
}