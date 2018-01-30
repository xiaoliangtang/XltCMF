<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;

class NavCatController extends BaseController {

    private $navCat;

    /**
     * 初始化
     */
    protected function _initialize() {
        parent::_initialize();
        $this->navCat = M('NavCat');
    }

    /**
     * 首页视图
     */
    public function index() {
        $navCats = $this->navCat->select();
        $this->assign('navCats', $navCats);
    	$this->display('index');
    }


    /**
     * 添加菜单分类
     */
    public function navcat_add() {
    	$this->display('navcat_add');
    }

    /**
     * 添加菜单分类操作
     */
    public function navcat_runadd() {

        if (IS_AJAX) {
            if ($this->navCat->add($_POST)) {
                $this->success('菜单分类添加成功', U('NavCat/index'));
            } else {
                $this->error('菜单分类添加失败');
            }
        } else {
            $this->error("非法操作");
        }
    }

    /**
     * 编辑菜单分类
     */
    public function navcat_edit() {
        $edit_id = I('get.id');
        $edit_id ? : $this->error('参数出错');
        $navCat = $this->navCat->find($edit_id);
        $this->assign('navCat',$navCat);
    	$this->display('navcat_edit');
    }

    /**
     * 编辑菜单分类操作
     */
    public function navcat_runedit() {

        if (IS_AJAX) {
            if ($this->navCat->save($_POST)) {
                $this->success('菜单分类编辑成功', U('NavCat/index'));
            } else {
                $this->error('菜单分类编辑失败');
            }
        } else {
            $this->error('非法操作');
        }

    }

    /**
     * 删除菜单分类
     */
    public function navcat_delete() {

        $del_id = I('get.id');
        $del_id ? : $this->error('参数出错');

        if (IS_AJAX) {
            if ($this->navCat->delete($del_id)) {
                $this->success('菜单分类删除成功');
            } else {
                $this->error('菜单分类删除失败');
            }
        } else {
            $this->error('非法操作');
        }

    }

}