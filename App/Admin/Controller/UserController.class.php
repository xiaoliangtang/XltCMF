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

    /**
     * 添加用户
     */
    public function user_add(){

        $this->display('user_add');

    }

    /**
     * 添加用户操作
     */
    public function user_runadd(){

    }

    /**
     * 编辑用户
     */
    public function user_edit(){
        $this->display('user_edit');
    }

    /**
     * 编辑用户操作
     */
    public function user_runedit(){

    }

    /**
     * 删除用户
     */
    public function user_delete(){
        
    }

    //角色列表
    public function role(){
        $this->display('role');
    }
}