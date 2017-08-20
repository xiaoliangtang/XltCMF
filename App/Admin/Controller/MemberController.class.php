<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
class MemberController extends BaseController {

	/**
	 * 会员列表
	 */
    public function index(){
        $this->display('index');
    }

    //添加会员界面
    public function member_add(){

    }

    //添加会员操作
    public function membe_runadd(){

    }

    //会议组列表
    public function member_group_list(){
        $this->display('member_group_list');
    }

    //添加会议组操作
    public function member_group_runadd(){

    }
}