<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
class MenuController extends BaseController {

	/**
	 * 菜单列表
	 */
    public function index(){

        $pid = I('pid',0);
        $level = I('level',1);

        $id_str=I('id','pid');

        $menu = M('Menu')->where(array('pid'=>$pid))->order('sort')->select();

        $menu_layer = menu_layer($menu,'id','pid','─',$pid,$level,$level*20);

        $this->assign('menus',$menu_layer);
        $this->assign('pid',$id_str);

        if (IS_AJAX) {
            $this->success($this->fetch('ajax_menu_index'));
        } else {
            $this->display('index');
        }
    }

    /***
     * 添加菜单
     */
    public function menu_add(){

        $pid = I('pid', 0);

        // 菜单层级
        $menu = M('Menu')->order('sort')->select();
        $menu_layer = menu_layer($menu);

        $this->assign('pid', $pid);
        $this->assign('menu_layer', $menu_layer);
    	$this->display('menu_add');
    }

    /**
     * 添加菜单操作
     */
    public function menu_runadd(){
    	if (!IS_AJAX) {
    		$this->error('提交方式不正确！');
    	} else {

            //提前pid和level
            $pid_level = I('post.pid_level','0-1');
            $pid_level_arr = explode('-', $pid_level);
            if ($pid_level === '0-1') {
                $level = $pid_level_arr[1];
            } else {
                $level = $pid_level_arr[1] + 1;
            }
            $pid = $pid_level_arr[0];

    		$data = array(
    			'pid' 		=> $pid,
                'level'     => $level,
    			'title' 	=> I('post.title'),
    			'name' 		=> I('post.name'),
    			'css' 		=> I('post.css'),
    			'status' 	=> I('post.status'),
    			'sort' 		=> I('post.sort'),
    			'addtime' 	=> time(),
    			);

    		if (M('Menu')->add($data)) {
    		 	$this->success('菜单添加成功！');
    		} else {
    			$this->error('菜单添加失败！');
    		}
    		
    	}
    }

    /**
     * 编辑菜单
     */
    public function menu_edit(){

        $id = I('get.id');
        $id ? : $this->error('参数出错！');

        // 菜单层级
        $menu = M('Menu')->order('sort')->select();
        $menu_layer = menu_layer($menu);

        // 当前菜单
        $menu = M('Menu')->find($id);

        // p($menu);die;
        $this->assign('current_id', $id);
        $this->assign('menu_layer', $menu_layer);
        $this->assign('menu', $menu);
    	$this->display("menu_edit");
    }


    /**
     * 编辑菜单操作
     */
    public function menu_runedit() {

    	if (!IS_AJAX) {
            $this->error('提交方式不正确！');
        } else {

            $id = I('post.id');
            $id ? : $this->error('参数出错！');
            //提前pid和level
            $pid_level = I('post.pid_level','0-1');
            $pid_level_arr = explode('-', $pid_level);
            if ($pid_level === '0-1') {
                $level = $pid_level_arr[1];
            } else {
                $level = $pid_level_arr[1] + 1;
            }
            $pid = $pid_level_arr[0];

            $data = array(
                'pid'       => $pid,
                'level'     => $level,
                'title'     => I('post.title'),
                'name'      => I('post.name'),
                'css'       => I('post.css'),
                'status'    => I('post.status'),
                'sort'      => I('post.sort'),
                'addtime'   => time(),
                );

            if (M('Menu')->where(array('id'=>$id))->save($data)) {
                $this->success('菜单编辑成功！', U('Menu/index'));
            } else {
                $this->error('菜单编辑失败！');
            }
            
        }
    }


    /**
     * 菜单状态
     */
    public function menu_status() {

        $id = I('post.id');
        $id ? : $this->error('参数出错！');
        $status = M('Menu')->where(array('id'=>$id))->getField('status');
        if ($status == 1) {
            if (M('Menu')->where(array('id'=>$id))->setField('status', 0)) {
                $this->success('菜单隐藏成功');
            } else {
                $this->error('菜单隐藏失败');
            }
        } else {
            if (M('Menu')->where(array('id'=>$id))->setField('status', 1)) {
                $this->success('菜单显示成功');
            } else {
                $this->error('菜单显示失败');
            }
        }
         

    }


    /**
     * 菜单排序
     */
    public function menu_sort() {

        if (IS_AJAX) {
            foreach ($_POST as $id => $sort) {
                M('Menu')->where(array('id'=>$id))->setField('sort',$sort);
            }
            $this->success('排序更新成功！');
        } else {
            $this->error('提交方式不正确！');
        }

    }


    /**
     * 菜单删除
     */
    public function menu_delete(){
        $del_id = I('get.id');


        if (M('Menu')->field('id')->where(array('pid'=>$del_id))->find()) {

            $data['status'] = 2;
            $data['info'] = "该菜单下存在子菜单，请先删除子菜单！";
            $data['url'] = U('Menu/index');
            $this->ajaxReturn($data,'json');

        } else {
            if( M('Menu')->where(array('id'=>$del_id))->delete() ) {
                $this->success('菜单删除成功!');
            } else {
                $this->error('菜单删除失败！');
            }
        }
    }
}