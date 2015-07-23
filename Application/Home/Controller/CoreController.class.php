<?php
/**
 * 前端项目核心控制器
 */
namespace Home\Controller;
use Think\Controller;
class CoreController extends Controller {
    public function __construct(){
        parent::__construct();
        import('Common.Common.Core');
    }
}