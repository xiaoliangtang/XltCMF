<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
class UserController extends BaseController {

	/**
	 * 用户首页
	 */
    public function index(){
        $this->display('index');
    }

    //添加用户界面
    public function user_add(){

    }

    //添加用户操作
    public function user_runadd(){

    }

    //角色列表
    public function role(){
        $this->display('role');
    }
}