<?php
/**
 * 前端项目首页控制器
 */
namespace Home\Controller;
class IndexController extends CoreController {
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $list = M('Article')->where()->field()->select();
        $this->list = $list;
        $this->display();
    }
}