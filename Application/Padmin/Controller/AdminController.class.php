<?php
/**********************
* @author Fennay <Feng@Fennay.com>
* @date 2015-07-07
* 后台公用控制器
**********************/
namespace Padmin\Controller;
use Common\Controller\BaseController;

class AdminController extends BaseController {
	public function __construct(){
		parent::__construct();
        //导入自己的类库
        import('Common.Common.Core');

        //获取管理员信息
        $this->admin_user = $admin_user = session('p_admin_user');
        //定义常用信息为常量
        define('M_ID', $admin_user['uid']);  // 管理员ID

        //判断是否为空，如果为空，则跳转到登陆页面
        if(empty($admin_user)){
            $this->redirect('/Padmin/Login/index');
            exit();
        }

        //判断信息是否正确
        $check = M('Manager')->where('id='.$admin_user['uid'])->find();
        if($admin_user['pwd'] != sha1($check['password'])){
            $this->redirect('/Padmin/Login/index');
             exit();
        }

        //权限验证
        // $Auth = new \Think\Auth();
        // $name = '/'.MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
        // //获取所有已经存在的权限
        // $access = M('Auth_rule')->where('status=1')->getField('name',true);
        // //总管理员不进行权限验证
        // $group_id = M('Auth_group_access')->where('uid='.$admin_user['uid'])->getField('group_id');

        // if(($admin_user['username'] != C('AUTH_CONFIG')['super_admin']) || $group_id != 1){
        //     //如果当前节点存在规则表中，则进行验证，否则不进行验证
        //     if(in_array($name, $access)){
        //         if(!$Auth->check($name,$admin_user['uid'])){
        //             $this->error('对不起，没有权限!',U('/Padmin/Index/index'));
        //         }
        //     }
        // }
	}
}