<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;

class NavController extends BaseController {

    private $nav,$navCat,$DB_PREFIX;

    /**
     * 初始化
     */
    protected function _initialize() {
        parent::_initialize();
        $this->nav = M('Nav');
        $this->navCat = M('NavCat');
        $this->DB_PREFIX = C('DB_PREFIX');
    }

    /**
     * 首页视图
     */
    public function index() {

    	$pid = I('pid',0);
        $level = I('level',1);
        $id_str = I('id','pid');

    	$navs = $this->nav->alias('n')->where(array('parentid'=>$pid))->join($this->DB_PREFIX.'nav_cat nc ON n.cid = nc.navcid')->order('listorder')->select();
    	$navs_layer = menu_layer($navs,'id','parentid','─',$pid,$level,$level*20);

    	$this->assign('navs', $navs_layer);
    	$this->assign('pid',$id_str);

    	if (IS_AJAX) {
    		$this->success($this->fetch('ajax_nav_index'));
    	} else {
    		$this->display('index');
    	}

    }

    /**
     * 添加菜单
     */
    public function nav_add() {

    	// 菜单分类
    	$navCats = $this->navCat->select();
    	
    	// 菜单层级
    	$pid = I('pid', 0);
        $nav = $this->nav->order('listorder')->select();
        $nav_layer = menu_layer($nav, $id_field='id', $pid_field='parentid');

        $this->assign('navCats',$navCats);
        $this->assign('pid', $pid);
        $this->assign('nav_layer', $nav_layer);
    	$this->display('nav_add');
    }


    /**
     * 添加菜单操作
     */
    public function nav_runadd() {

    	$pid = I('post.parentid');
    	$ex = explode('-', $pid);
    	$parentid = $ex[count($ex) - 1];

    	$data = [];
    	$data_update = [];
    	$data['parentid'] 	= $parentid;
    	$data['cid'] 		= I('post.cid');
    	$data['label'] 		= I('post.label');
    	$data['href'] 		= I('post.href');
    	$data['icon'] 		= I('post.icon');
    	$data['target'] 	= I('post.target');
    	$data['status']		= I('post.status');
    	$data['listorder'] 	= I('post.listorder');

    	if ($id = $this->nav->add($data)) {

    		// 更新path和level
    		$path = $pid.'-'.$id;
    		$level = count(explode('-', $path)) - 1;
    		$data_update['path'] = $path;
    		$data_update['level'] = $level;
    		if ($this->nav->where(array('id'=>$id))->save($data_update)) {
    			$this->success('菜单添加成功', U('Nav/index'));
    		} else {
    			$this->error('菜单添加失败');
    		}
    	} else {
    		$this->error('菜单添加失败');
    	}

    }

    /**
     * 编辑菜单
     */
    public function nav_edit() {

    	$edit_id = I('id');
    	$edit_id ? : $this->error('参数出错！');

    	// 菜单分类
    	$navCats = $this->navCat->select();
    	// 菜单层级
        $nav = $this->nav->order('listorder')->select();
        $nav_layer = menu_layer($nav, $id_field='id', $pid_field='parentid');

    	// 菜单数据
    	$nav = $this->nav->find($edit_id);

    	// p($nav);die;

    	$this->assign('navCats', $navCats);
    	$this->assign('nav_layer', $nav_layer);
    	$this->assign('nav', $nav);
    	$this->display('nav_edit');

    }

    /**
     * 编辑菜单操作
     */
    public function nav_runedit() {

    	$edit_id = I('post.id');
    	$pid = I('post.parentid');
    	$ex = explode('-', $pid);
    	$parentid = $ex[count($ex) - 1];
    	$path = $pid . '-' . $edit_id;
    	$level = count($ex) - 1;

    	$data = array(
    		'parentid'  => $parentid,
    		'cid' 		=> I('post.cid'),
	    	'label'		=> I('post.label'),
	    	'href' 		=> I('post.href'),
	    	'icon' 		=> I('post.icon'),
	    	'target' 	=> I('post.target'),
	    	'status'	=> I('post.status'),
	    	'listorder' => I('post.listorder'),
	    	'path'		=> $path,
	    	'level' 	=> $level,
    		);

    	if ($this->nav->where(['id' => $edit_id])->save($data)) {
    		$this->success('菜单编辑成功！', U('Nav/index'));
    	} else {
    		$this->error('菜单编辑失败！');
    	}

    }

    /**
     * 删除菜单
     */
    public function nav_delete() {

    	$del_id = I('id');
    	$del_id ? : $this->error('参数出错！');

    	$child = $this->nav->where(['parentid' => $del_id])->find();
    	if ($child) {
    		$data['status'] = 2;
            $data['info'] = "该菜单下存在子菜单，请先删除子菜单！";
            $data['url'] = U('Nav/index');
            $this->ajaxReturn($data,'json');
    	} else {
    		if( $this->nav->where(array('id'=>$del_id))->delete() ) {
                $this->success('菜单删除成功!');
            } else {
                $this->error('菜单删除失败！');
            }
    	}

    }

    /**
     * 菜单状态
     */
    public function nav_status() {
    	$id = I('post.id');
        $id ? : $this->error('参数出错！');
        $status = $this->nav->where(array('id'=>$id))->getField('status');
        if ($status == 1) {
            if ($this->nav->where(array('id'=>$id))->setField('status', 0)) {
                $this->success('菜单隐藏成功');
            } else {
                $this->error('菜单隐藏失败');
            }
        } else {
            if ($this->nav->where(array('id'=>$id))->setField('status', 1)) {
                $this->success('菜单显示成功');
            } else {
                $this->error('菜单显示失败');
            }
        }
    }

    /**
     * 菜单排序
     */
    public function nav_sort() {
    	if (IS_AJAX) {
            foreach ($_POST as $id => $listorder) {
                $this->nav->where(array('id'=>$id))->setField('listorder',$listorder);
            }
            $this->success('排序更新成功！');
        } else {
            $this->error('提交方式不正确！');
        }
    }

}