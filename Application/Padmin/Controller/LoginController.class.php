<?php
/**********************
* @author Fennay <Feng@Fennay.com>
* @date 2015-07-07
* 登陆控制器
**********************/
namespace Padmin\Controller;
use Think\Controller;

class LoginController extends Controller {
	public function __construct(){
		parent::__construct();
	}

    /**
     * [index 登陆首页]
     * @date   2015-07-07
     * @author Fennay [<feng@fennay.com>]
     * @return [type]     [显示页面]
     */
    public function index(){
        //网站title
        $this->title = '登陆'.' | '.C('web_title');
        layout(false);
        $this->display();
    }

    /**
     * [login_handle 登陆表单处理]
     * @date   2015-07-07
     * @author Fennay [<feng@fennay.com>]
     * @return [type]     [description]
     */
    public function login_handle(){
        //用户名密码
        $username = trim(I('post.username'));
        $password = trim(I('post.password'));

        //检测用户名是否存在
        $check_whe['username'] = $username;
        $check = M('Manager')->where($check_whe)->find();
        if(empty($check)){
            $error['status'] = -1;
            $error['msg'] = '该帐号不存在';
            echo json_encode($error,true);
            exit();
        }

        // 判断该管理员帐号是否正常
        if($check['status'] != 1){
            $error['status'] = -2;
            $error['msg'] = '该帐号已被冻结';
            echo json_encode($error,true);
            exit();
        }

        //判断帐号密码是否正确
        if($check['password'] != md5($password)){
            $error['status'] = -3;
            $error['msg'] = '账号或密码不正确';
            echo json_encode($error,true);
            exit();
        }else{
            //判断是否拥有任何权限
            // $access_uid = get_access($check['id']);
            // if(empty($access_uid)){
            //     $error['status'] = -4;
            //     $error['msg'] = '您还没有任何权限，请联系上级管理员分配权限！';
            //     echo json_encode($error,true);
            //     exit();
            // }

            //设置session
            $s_data['uid'] = $check['id'];
            $s_data['username'] = $check['username'];
            $s_data['pwd'] = sha1($check['password']);
            $s_data['nickname'] = $check['nickname'];
            $s_data['mobile'] = $check['mobile'];
            $s_data['qq'] = $check['qq'];
            $s_data['email'] = $check['email'];
            $s_data['login_num'] = $check['login_num'];
            //设置session,清空所有的session
            cookie(null);
            session(null);
            session('p_admin_user',$s_data);
            //设置最后登陆信息
            $l_data['last_ip'] = get_client_ip();
            $l_data['last_time'] = time();
            M('Manager')->where('id='.$check['id'])->save($l_data);
            M('Manager')->where('id='.$check['id'])->setInc('login_num',1);
            //登陆成功
            $error['status'] = 1;
            $error['msg'] = '登陆成功！';
            echo json_encode($error,true);
            exit();
        }
    }
}