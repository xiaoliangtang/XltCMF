<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Auth;
class BaseController extends Controller {

    protected function _initialize(){

    	$aid = session('aid');
    	$auth = new Auth();
    	// 判断是否已经登录
    	if (!$aid) {
    		$this->redirect('Login/index');
    	}

    	// 无需验证的操作
    	$not_check = array('Index/index');
    	// 无需验证的管理员id
    	$not_check_id = array(1);;
    	// 验证需要验证的操作
    	if (!in_array(CONTROLLER_NAME.'/'.ACTION_NAME, $not_check) && !in_array($aid, $not_check_id) ) {
    		if (!$auth->check(CONTROLLER_NAME.'/'.ACTION_NAME, $aid)) {
    			$this->error('您没有权限！', U('Index/index'));
    		}
    	}

    	// 根据当前管理员id获取其权限节点
    	$access = M('Auth_group_access')->alias('aga')->field('aga.group_id,ag.rules')->where(array('uid'=>$aid))->join(C('DB_PREFIX').'auth_group ag on aga.group_id=ag.id')->find();

    	// 获取节点菜单并转化为Tree
    	$wh_menu = array();
    	if (!in_array($aid, $not_check_id)) {
    		$wh_menu['id'] = array('in',$access['rules']);
    	}
    	$wh_menu['status'] = 1;
    	$menus = M('Menu')->where($wh_menu)->order('sort')->select();

    	// 组合菜单url
    	foreach ($menus as $k => $v) {
    		$menus[$k]['url'] = U($v['name']);
    	}
    	$menus_tree = menu_tree($menus);

    	// 分配菜单树
    	$this->assign('menus_tree',$menus_tree);

    	// 当前菜单id
    	$cur_id = M('Menu')->where(array('name'=>CONTROLLER_NAME.'/'.ACTION_NAME))->getField('id');

    	// 包括隐藏status=0的菜单，添加菜单属性
    	unset($wh_menu['status']);
    	$menus = M('Menu')->where($wh_menu)->order('sort')->select();
    	$menu_parents = get_parents($menus, $cur_id);

    	$this->assign('menu_parents', $menu_parents);
        $this->assign('cur_id',$cur_id);// 当前菜单id

        // 用户信息
        $admin_info = json_decode(session('admin_info'),true);// 第二个参数为true解析为数组
        $this->assign('admin_info', $admin_info);

    }
}