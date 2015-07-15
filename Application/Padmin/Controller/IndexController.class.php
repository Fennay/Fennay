<?php
/**
 * 后台管理首页控制
 */
namespace Padmin\Controller;
use Think\Controller;
class IndexController extends AdminController {
    /**
     * [__construct 构造函数]
     * @date   2015-07-10
     * @author Fennay [<feng@fennay.com>]
     */
    public function __construct(){
        parent::__construct();
    }


    /**
     * [index 首页方法]
     * @date   2015-07-10
     * @author Fennay [<feng@fennay.com>]
     * @return [type]     [description]
     */
    public function index(){
        $this->display();
    }
}