<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
use Think\Controller;
use Org\Util\String;
class MemberController extends BaseController {

    private $member_model;
    private $member_group_model;
    private $region_model;

    /**
     * 初始化
     */
    public function _initialize() {
        parent::_initialize();
        $this->member_model = M('Member');
        $this->member_group_model = M('Member_group');
        $this->region_model = M('Region');
        // p($this->member_group_model);die;
    }


	/**
	 * 会员列表
	 */
    public function index(){

        $DB_PREFIX = C('DB_PREFIX');
        $member_list = $this->member_model->alias('m')->join($DB_PREFIX.'member_group m_g ON m.member_group_id=m_g.member_group_id')->select();

        foreach ($member_list as $k => $v) {
            // 性别
            switch ($v['member_sex']) {
                case '1':
                    $member_list[$k]['member_sex'] = '男';
                    break;
                case '2':
                    $member_list[$k]['member_sex'] = '女';
                    break;
                default:
                    $member_list[$k]['member_sex'] = '保密';
                    break;
            }
            // 地址
            $province = $this->getAddress($v['member_province']);
            $city = $this->getAddress($v['member_city']);
            $town = $this->getAddress($v['member_town']);
            $member_list[$k]['member_address'] = $province.$city.$town;
        }

        $this->assign('member_list',$member_list);
        $this->display('index');
    }


    /**
     * 添加会员界面
     */
    public function member_add(){

        $member_group_list = $this->member_group_model->select();
        $province = $this->region_model->where(array('type'=>1))->select();

        $this->assign('member_group_list', $member_group_list);
        $this->assign('province',$province);
        $this->display('member_add');

    }


    /**
     * 添加会员操作
     */
    public function member_runadd(){

        $member_salt = String::randString(6,0);// 随机加密串
        if (IS_AJAX) {
            $data = array(
                'member_username'   => I('post.member_username'),
                'member_pwd'        => md5($member_salt.I('post.member_pwd')),// md5加密
                'member_salt'       => $member_salt,
                'member_group_id'   => I('post.member_group_id'),
                'member_nickname'   => I('post.member_nickname'),
                'member_score'      => I('post.member_score'),
                'member_coin'       => I('post.member_coin'),
                'member_province'   => I('post.member_province'),
                'member_city'       => I('post.member_city'),
                'member_town'       => I('post.member_town'),
                'member_sex'        => I('post.member_sex'),
                'member_tel'        => I('post.member_tel'),
                'member_homepage'   => I('post.member_homepage'),
                'member_signature'  => I('post.member_signature'),
                'member_email'      => I('post.member_email'),
                'member_status'     => I('post.member_status'),
                'member_active'     => I('post.member_active'),
                'member_addtime'    => time()
                );

            // 判断是否已经存在
            if ($this->member_model->where(array('member_username'=>I('post.member_username')))->getField('member_id')) {
                $this->error('该会员已经存在！');
            }
            if ($this->member_model->add($data)) {
                $this->success('会员添加成功！',U('Member/index'));
            } else {
                $this->error('会员添加失败！');
            }
        } else {
            $this->error('提交方式不正确！');
        }

    }


    /**
     * 会员编辑
     */
    public function member_edit(){

        $id = I('get.id');
        $id ? : $this->error('参数出错！');
        $DB_PREFIX = C('DB_PREFIX');
        $member = $this->member_model->alias('m')->join($DB_PREFIX.'member_group m_g ON m.member_group_id=m_g.member_group_id')->find($id);
        $member_group_list = $this->member_group_model->select();

        // 省
        $province = $this->region_model->where(array('type'=>1))->select();
        // 市
        $city = $this->region_model->where(array('pid'=>$member['member_province'],'type'=>2))->select();
        // 县、区
        $town = $this->region_model->where(array('pid'=>$member['member_city'],'type'=>3))->select();
        $this->assign('member',$member);
        $this->assign('member_group_list', $member_group_list);
        $this->assign('province',$province);
        $this->assign('city',$city);
        $this->assign('town',$town);
        $this->display('member_edit');

    }


    /**
     * 会员编辑操作
     */
    public function member_runedit(){

        $id = I('post.member_id');
        $id ? : $this->error('参数出错！');

        $member_salt = String::randString(6,0);// 随机加密串

       if (IS_AJAX) {

            // 验证会员名是否已经存在
            $where['member_username'] = I('post.member_username');
            $where['member_id'] = array('neq',$id);
            if ($this->member_model->where($where)->getField('member_id')) {
                $this->error('该会员已经存在！');
            }

            $data = array(
                'member_username'   => I('post.member_username'),
                'member_pwd'        => md5($member_salt.I('post.member_pwd')),// md5加密
                'member_salt'       => $member_salt,
                'member_group_id'   => I('post.member_group_id'),
                'member_nickname'   => I('post.member_nickname'),
                'member_score'      => I('post.member_score'),
                'member_coin'       => I('post.member_coin'),
                'member_province'   => I('post.member_province'),
                'member_city'       => I('post.member_city'),
                'member_town'       => I('post.member_town'),
                'member_sex'        => I('post.member_sex'),
                'member_tel'        => I('post.member_tel'),
                'member_homepage'   => I('post.member_homepage'),
                'member_signature'  => I('post.member_signature'),
                'member_email'      => I('post.member_email'),
                'member_status'     => I('post.member_status'),
                'member_active'     => I('post.member_active'),
                'member_addtime'    => time()
                );

            if ($this->member_model->where(array('member_id'=>$id))->save($data)) {
                $this->success('会员编辑成功！', U('Member/index'));
            } else {
                $this->error('会员编辑失败！');
            }
        } else {
            $this->error('提交方式不正确！');
        }
        
        
    }


    /**
     * 会员状态
     */
    public function member_status(){
        $id = I('post.id');
        $id ? : $this->error('参数出错！');
        $status = $this->member_model->where(array('member_id'=>$id))->getField('member_status');
        if ($status == 1) {
            if ($this->member_model->where(array('member_id'=>$id))->setField('member_status', 0)) {
                $this->success('会员禁用成功');
            } else {
                $this->error('会员禁用失败');
            }
        } else {
            if ($this->member_model->where(array('member_id'=>$id))->setField('member_status', 1)) {
                $this->success('会员开启成功');
            } else {
                $this->error('会员开启失败');
            }
        }
    }


    /**
     * 会员激活
     */
    public function member_active(){

        $id = I('post.id');
        $id ? : $this->error('参数出错！');
        $active = $this->member_model->where(array('member_id'=>$id))->getField('member_active');
        if ($active == 1) {
            if ($this->member_model->where(array('member_id'=>$id))->setField('member_active',0)) {
                $this->success('会员取消激活成功');
            } else {
                $this->error('会员取消激活失败');
            }
        } else {
            if ($this->member_model->where(array('member_id'=>$id))->setField('member_active',1)) {
                $this->success('会员激活成功');
            } else {
                $this->error('会员激活失败');
            }
        }

    }


    /**
     * 删除会员
     */
    public function member_delete(){

        $del_id = I('get.id');
        $del_id ? : $this->error('参数出错！');

        if ($this->member_model->where(array('member_id'=>$del_id))->delete()) {
            $this->success('删除成功！');
         } else {
            $this->error('删除失败！');
         }
    }


    /**
     * 会员组列表
     */
    public function member_group_list(){

        $member_group_list = $this->member_group_model->select();
        $this->assign('member_group_list', $member_group_list);
        $this->display('member_group_list');
    }


    /**
     * 添加会会员组操作
     */
    public function member_group_runadd(){

        if (IS_AJAX) {
            
            $data = array(
                'member_group_name'     => I('post.member_group_name'),
                'member_group_toplimit' => I('post.member_group_toplimit'),
                'member_group_bomlimit' => I('post.member_group_bomlimit'),
                'member_group_open'     => I('post.member_group_open'),
                );

            // 验证会员组名是否已经存在
            if ($this->member_group_model->where(array('member_group_name'=>I('post.member_group_name')))->getField('member_group_id')) {
                $this->error('该管理员已经存在！');
            }
            // 添加操作
            if ($this->member_group_model->add($data)) {
                $this->success('会员组添加成功！',U('Member/member_group_list'));
            } else {
                $this->error('会员组添加失败！');
            }

        } else {
            $this->error('提交方式不正确！');
        }
    }


    /**
     * 修改会员组视图
     */
    public function member_group_edit() {

        $id = I('get.id');
        $id ? : $this->error('参数出错！');

        // 当前会员组
        $member = $this->member_group_model->find($id);

        $this->assign('member', $member);
        $this->display('member_group_edit');
    }
    /**
     * 修改会员组操作
     */
    public function member_group_runedit() {

        $edit_id = I('post.id');
        $edit_id ? : $this->error('参数出错！');
        if (IS_AJAX) {
            
            $data = array(
                'member_group_name'     => I('post.member_group_name'),
                'member_group_toplimit' => I('post.member_group_toplimit'),
                'member_group_bomlimit' => I('post.member_group_bomlimit'),
                'member_group_open'     => I('post.member_group_open'),
                );

            // 验证会员组名是否已经存在
            $where['member_group_id'] = array('neq',$edit_id);
            $where['member_group_name'] = I('post.member_group_name');
            if ($this->member_group_model->where($where)->getField('member_group_id')) {
                $this->error('该管理员已经存在！');
            }
            // 添加操作
            if ($this->member_group_model->where(array('member_group_id'=>$edit_id))->save($data)) {
                $this->success('会员组编辑成功！',U('Member/member_group_list'));
            } else {
                $this->error('会员组编辑失败！');
            }

        } else {
            $this->error('提交方式不正确！');
        }
    }

    /**
     * 会员组状态
     */
    public function member_group_status() {
        $id = I('post.id');
        $id ? : $this->error('参数出错！');
        $status = $this->member_group_model->where(array('member_group_id'=>$id))->getField('member_group_open');
        if ($status == 1) {
            if ($this->member_group_model->where(array('member_group_id'=>$id))->setField('member_group_open', 0)) {
                $this->success('会员组禁用成功');
            } else {
                $this->error('会员组禁用失败');
            }
        } else {
            if ($this->member_group_model->where(array('member_group_id'=>$id))->setField('member_group_open', 1)) {
                $this->success('会员组开启成功');
            } else {
                $this->error('会员组开启失败');
            }
        }
    }


    /**
     * 删除会员组
     */
    public function member_group_delete(){
        $del_id = I('get.id');

        if ($this->member_group_model->where(array('member_group_id'=>$del_id))->delete()) {
            $this->success('删除成功！');
         } else {
            $this->error('删除失败！');
         }
    }

    /*
     * 返回行政区域json字符串
     */
    public function getRegion(){
        $map['pid'] =   I('pid');
        $map['type']=   I('type');
        $list = $this->region_model->where($map)->select();
        echo json_encode($list);
    }

    /**
     * 获取地址
     */
    private function getAddress($id) {
        return $this->region_model->where(array('id'=>$id))->getField('name');
    }
}