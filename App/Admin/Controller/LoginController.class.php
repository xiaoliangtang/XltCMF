<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {

	private $verify;
	private $admin_model;
	private $member_model;

	public function _initialize(){
		// 实例化验证码
		$this->verify = new \Think\Verify();
		// 实例化Admin表
		$this->admin_model = M('Admin');
		// 实例化Member表
		$this->member_model = M('Member');
	}

	/**
	 * 后台管理员登录视图
	 */
    public function index() {

    	if (session('aid')) {
    		$this->redirect('Index/index');
    	} else {
    		$this->display('index');
    	}

    }

    /**
	 * 后台管理员登录操作
	 */
    public function admin_runlogin() {

        $DB_PREFIX = C('DB_PREFIX');// 表前缀

    	if (IS_AJAX) {
    		$admin_name = I('post.username');
    		$admin_pass = I('post.password');
    		$verify = I('post.verify');

    		// 验证码验证
    		if (!$this->check_verify($verify)) {
    			$this->error('验证码错误！');
    		}
    		// 验证用户名
    		$login_admin = $this->admin_model->alias('a')->join($DB_PREFIX.'auth_group_access aga ON a.id=aga.uid')->join($DB_PREFIX.'auth_group ag ON aga.group_id=ag.id')->order('a.id ASC')->where(array('admin_name'=>$admin_name))->find();

            if (!$login_admin['admin_status']) {
                $this->error('该管理已被禁用，请联系超级管理员！');
            }
    		if ($login_admin['id']) {

    			if ($this->check_password($login_admin['admin_pass'], $login_admin['admin_encryption'], $admin_pass)) {

    				// 登录成功更新登录信息
    				$update_data['admin_last_login_ip'] = get_client_ip();
    				$update_data['admin_last_login_time'] = date('Y-m-d H:i:s',time());
    				$this->admin_model->where(array('id'=>$login_admin['id']))->setInc('admin_hits',1);
    				$this->admin_model->where(array('id'=>$login_admin['id']))->save($update_data);

    				// 登录成功保存用户信息
    				session('aid',$login_admin['id']);
    				session('admin_info',json_encode($login_admin));

    				// 记录关联的会员
    				$member = $this->member_model->where(array('member_id'=>$login_admin['member_id']))->find();
    				session('mid',$login_admin['member_id']);
    				session('member_info',json_encode($member));

    				// 记录登录日志

    				// 登录成功跳转后台首页
    				$this->success('登录成功！',U('Index/index'));
    			} else {
    				$this->error('密码错误！');
    			}
    			
    			
    		} else {
    			$this->error('管理员不存在！');
    		}
    	} else {
    		$this->error('提交方式不正确！');
    	}

    }

    /**
     * 验证码
     */
    public function verify() {
    	$this->verify->entry();
    }

    /**
     * 退出登录
     */
    public function admin_runloginout() {
    	session('aid',null);
    	session('mid',null);
    	session('admin_info',null);
    	session('member_info',null);
    	session_destroy();
    	$this->redirect('Login/index');
    }

    /**
     * 验证验证码
     */
    private function check_verify($verify) {
    	return $this->verify->check($verify);
    }

    /**
     * 验证密码
     */
    private function check_password($admin_pass, $admin_encryption, $password){
    	if ($admin_pass === md5($admin_encryption.$password)) {
    		return true;
    	} else {
    		return false;
    	}
    }

}