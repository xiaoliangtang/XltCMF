<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
use Org\Util\String;
class UserController extends BaseController {

    protected function _initialize() {
        parent::_initialize();
    }

	/**
	 * 用户首页
	 */
    public function index(){

        $DB_PREFIX = C('DB_PREFIX');
        $admin_list = M('Admin')->alias('a')->join($DB_PREFIX.'auth_group_access aga ON a.id=aga.uid')->join($DB_PREFIX.'auth_group ag ON aga.group_id=ag.id')->order('a.id ASC')->select();
        // p($admin_list);die;
        $this->assign('admin_list',$admin_list);
        $this->display('index');
    }

    /**
     * 添加用户
     */
    public function user_add(){

        $roles = M('Auth_group')->field('id,title')->order('id ASC')->select();
        $this->assign('roles',$roles);
        $this->display('user_add');

    }

    /**
     * 添加用户操作
     */
    public function user_runadd(){

        if (IS_AJAX) {
            
            $admin_encryption = String::randString(6,0);// 随机加密串
            $data = array(
                'admin_name'        => I('post.admin_name'),
                'admin_pass'        => md5($admin_encryption.I('post.admin_pass')),// md5加密
                'admin_encryption'  => $admin_encryption,
                'admin_email'       => I('post.admin_email'),
                'admin_mobile'      => I('post.admin_mobile'),
                'admin_nickname'    => I('post.admin_nickname'),
                'admin_status'      => I('post.admin_status'),
                'admin_create_time' => date('Y-m-d H:i:s',time()),
                );

            // 验证用户名是否已经存在
            if (M('Admin')->where(array('admin_name'=>I('post.admin_name')))->getField('id')) {
                $this->error('该管理员已经存在！');
            }

            // 添加用户表
            if ($user_id = M('Admin')->add($data)) {

                $auth_group_access = array(
                    'uid' => $user_id,
                    'group_id' => I('post.admin_group_id')
                    );
                // 添加用户-角色表
                if (M('auth_group_access')->add($auth_group_access)) {
                    $this->success('管理员添加成功！',U('User/index'));
                } else {
                    $this->success('添加异常！');
                }

            } else {
                $this->error('管理员添加失败！');
            }

        } else {
            $this->error('提交方式不正确！');
        }

    }

    /**
     * 编辑用户
     */
    public function user_edit(){
        $id = I('get.id');
        $id ? : $this->error('参数出错！');

        // 当前用户用户组id
        $current_group_id = M('auth_group_access')->where(array('uid'=>$id))->getField('group_id');
        $roles = M('Auth_group')->field('id,title')->order('id ASC')->select();
        $admin = M('Admin')->find($id);

        $this->assign('current_group_id', $current_group_id);
        $this->assign('roles', $roles);
        $this->assign('admin', $admin);
        $this->display('user_edit');
    }

    /**
     * 编辑用户操作
     */
    public function user_runedit(){

        $edit_id = I('post.id');
        if (IS_AJAX) {
            $admin_encryption = String::randString(6,0);// 随机加密串
            $data = array(
                'admin_name'        => I('post.admin_name'),
                'admin_pass'        => md5($admin_encryption.I('post.admin_pass')),// md5加密
                'admin_encryption'  => $admin_encryption,
                'admin_email'       => I('post.admin_email'),
                'admin_mobile'      => I('post.admin_mobile'),
                'admin_nickname'    => I('post.admin_nickname'),
                'admin_status'      => I('post.admin_status'),
                'admin_create_time' => date('Y-m-d H:i:s',time()),
                );

            // 验证用户名是否已经存在
            $where['admin_name'] = I('post.admin_name');
            $where['id'] = array('neq',$edit_id);
            if (M('Admin')->where($where)->getField('id')) {
                $this->error('该管理员已经存在！');
            }

            // 编辑用户表
            if (M('Admin')->where(array('id'=>$edit_id))->save($data)) {

                $auth_group_access = array(
                    'uid' => $edit_id,
                    'group_id' => I('post.admin_group_id'),
                    );
                // 编辑用户-角色表
                M('auth_group_access')->where(array('uid'=>$edit_id))->save($auth_group_access);
                
                $this->success('管理员编辑成功！',U('User/index'));

            } else {
                $this->error('编辑失败！');
            }
        } else {
            $this->error('提交方式不正确！');
        }

    }

    /**
     * 删除用户
     */
    public function user_delete(){

        $del_id = I('get.id');

        if (M('Admin')->where(array('id'=>$del_id))->delete()) {
            $this->success('删除成功！');
         } else {
            $this->error('删除失败！');
         }
        
    }

    /**
     * 用户状态
     */
    public function user_status(){
        $id = I('post.id');
        $id ? : $this->error('参数出错！');
        $status = M('Admin')->where(array('id'=>$id))->getField('admin_status');
        if ($status == 1) {
            if (M('Admin')->where(array('id'=>$id))->setField('admin_status', 0)) {
                $this->success('管理员禁用成功');
            } else {
                $this->error('管理员禁用失败');
            }
        } else {
            if (M('Admin')->where(array('id'=>$id))->setField('admin_status', 1)) {
                $this->success('管理员开启成功');
            } else {
                $this->error('管理员开启失败');
            }
        }
    }

    /**
     * 角色列表
     */
    public function role(){

        $roles = M('Auth_group')->select();

        $this->assign('roles',$roles);
        $this->display('role');
    }

    /**
     * 添加角色
     */
    public function role_add(){
        $this->display('role_add');
    }

    /**
     * 添加角色操作
     */
    public function role_runadd(){

        if (IS_AJAX) {

            $data = array(
                'title'     => I('post.title'),
                'des'       => I('post.des'),
                'status'    => I('post.status'),
                'rules'     => ''
                );
            // 判断是否已存在
            if (M('Auth_group')->where(array('title'=>$data['title']))->getField('title')) {
                $this->error('该角色名称已经存在！');
            }

            if (M('Auth_group')->add($data)) {
                $this->success('添加成功！',U('User/role'));
            } else {
                $this->error('添加失败！');
            }

        } else {
            $this->error('提交方式不正确！');
        }

    }

    /**
     * 编辑角色
     */
    public function role_edit(){

        $id = I('get.id');
        $id ? : $this->error('参数出错！');

        $role = M('Auth_group')->where(array('id'=>$id))->find();
        $this->assign('role',$role);
        $this->display('role_edit');
    }

    /**
     * 编辑角色操作
     */
    public function role_runedit(){

        $edit_id = I('post.id');

        if (IS_AJAX) {
            $data = array(
                'title'     => I('post.title'),
                'des'       => I('post.des'),
                'status'    => I('post.status'),
                'rules'     => ''
                );
            // 判断是否已存在
            if (M('Auth_group')->where(array('title'=>$data['title'],'id'=>array('neq',$edit_id)))->getField('title')) {
                $this->error('该角色名称已经存在！');
            }

            if (M('Auth_group')->where(array('id'=>$edit_id))->save($data)) {
                $this->success('编辑成功！',U('User/role'));
            } else {
                $this->error('编辑失败！');
            }

        } else {
            $this->error('提交方式不正确！');
        }
    }

    /**
     * 删除角色
     */
    public function role_delete(){

        $delete_id = I('get.id');
        $delete_id ? : $this->error('参数出错！');

        if (M('Auth_group')->where(array('id'=>$delete_id))->delete()) {
            $this->success('删除成功！');
        } else {
            $this->error('删除失败！');
        }
    }

    /**
     * 权限
     */
    public function role_access(){

        $role_id = I('get.id');
        $role_id ? : $this->error('参数出错！');
        // 节点
        $menus = M('Menu')->field('id,pid '.strtoupper('pid').',title name')->order('sort ASC')->select();
        // 管理员组权限
        $auth_group = M('Auth_group')->field('rules')->find($role_id);
        $rules = explode(',', $auth_group['rules']);

        // 组合节点
        $nodes = array();
        foreach ($menus as $v) {
            if (in_array($v['id'], $rules)) {
                $v['checked'] = true;
            }
            $v['pId'] = $v['pid'];
            $v['open'] = true;
            unset($v['pid']);
            
            $nodes[] = $v;
        }

        // 中文不转义
        $json_menus = json_encode($nodes, JSON_UNESCAPED_UNICODE);
        // p($json_menus);die;
        $this->assign('id',$role_id);
        $this->assign('json_menus',$json_menus);
        $this->display('role_access');
    }

    /**
     * 权限操作
     */
    public function role_runaccess(){

        $id = I('get.id');
        $id ? : $this->error('参数出错！');

        if (IS_AJAX) {
            $data = array(
                'rules' => I('post.rules') 
                );
            if (M('Auth_group')->where(array('id'=>$id))->save($data)) {
                $this->success('权限配置成功！', U('User/role'));
            } else {
                $this->error('权限配置失败！');
            }
        } else {
            $this->error('提交方式不正确！');
        }
    }

    /**
     * 角色状态
     */
    public function role_status(){
        $id = I('post.id');
        $id ? : $this->error('参数出错！');

        if (IS_AJAX) {
            $status = M('Auth_group')->where(array('id'=>$id))->getField('status');
            if ($status) {
                if (M('Auth_group')->where(array('id'=>$id))->setField('status',0)) {
                    $this->success('角色禁用成功');
                } else {
                    $this->error('角色禁用失败');
                }
            } else {
                if (M('Auth_group')->where(array('id'=>$id))->setField('status',1)) {
                    $this->success('角色开启成功');
                } else {
                    $this->error('角色开启失败');
                }
            }
        } else {
            $this->error('提交方式不正确！');
        }
    }

    /**
     * 用户中心
     */
    public function user_profile() {

        $admin_info = json_decode(session('admin_info'),true);// 第二个参数为true解析为数组
        // p($admin_info);die;
        $this->assign('admin_info',$admin_info);
        $this->display('user_profile');
    }

    /**
     * 用户设置
     */
    public function user_setting() {

        $edit_id = I('post.id');
        if (IS_AJAX) {
            $admin_encryption = String::randString(6,0);// 随机加密串
            $data = array(
                'admin_pass'        => md5($admin_encryption.I('post.admin_pass')),// md5加密
                'admin_encryption'  => $admin_encryption,
                'admin_email'       => I('post.admin_email'),
                'admin_mobile'      => I('post.admin_mobile'),
                'admin_nickname'    => I('post.admin_nickname'),
                'admin_status'      => I('post.admin_status'),
                );

            // 编辑用户表
            if (M('Admin')->where(array('id'=>$edit_id))->save($data)) {
                
                $this->success('管理员编辑成功！',U('User/user_profile'));

            } else {
                $this->error('编辑失败！');
            }
        } else {
            $this->error('提交方式不正确！');
        }


    }

    /**
     * 用户头像
     */
    public function user_avatar() {
        // 获取头像路径
        $imgurl = I('imgurl');
        $imgurl = str_replace('/', '', $imgurl);
        $url = '/data/upload/avatar/'.$imgurl;

        // 用户信息
        $admin_info = json_decode(session('admin_info'),true);// 第二个参数为true解析为数组

        $state = M('Admin')->where(array('id'=>$admin_info['id']))->setField('admin_avatar',$url);
        if ($state) {
            // 更新SESSION
            $admin_info['admin_avatar'] = $url;
            session('admin_info',json_encode($admin_info));
            $this->success('头像更新成功');
        } else {
            $this->error('头像更新失败');
        }

    }

}