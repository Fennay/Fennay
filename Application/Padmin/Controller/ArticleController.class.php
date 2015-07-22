<?php
/**
 * 后台管理首页控制
 */
namespace Padmin\Controller;
use Think\Controller;
class ArticleController extends AdminController {
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
        $map['status'] = array('lt',2);
        $count = D('Article')->where($map)->count();
        $page = new \Think\Page($count,10);
        $article = D('Article')->where($map)->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
        // p($article);
        $this->list = $article;
        $this->page = $page->show();
        $this->display();
    }
    /**
     * [add 添加文章页面]
     * @date   2015-07-20
     * @author Fennay [<feng@fennay.com>]
     */
    public function add(){
        $this->display();
    }
    /**
     * [eidt 编辑文章页面]
     * @date   2015-07-20
     * @author Fennay [<feng@fennay.com>]
     * @return [type]     [description]
     */
    public function edit(){
        $aid = I('get.aid');
        $map['id'] = $aid;  //文章ID
        // $article = D('Article')->where($map)->relation(true)->find();
        $article = M('Article')->where($map)->find();
        $cate = M('Article_cate')->where($map)->getField('cid',true);
        $tag = M('Article_tag')->where($map)->getField('tid',true);
        $content = M('Article_content')->where($map)->getField('content');

        //将分类，标签合并到Article中
        $article['cates'] = implode($cate, ',');
        $article['tags'] = implode($tag, ',');
        $article['content'] = $content;
        //分配到前端页面
        $this->vo = $article;
        $this->display('add');
    }

    /**
     * [saveData 保存数据]
     * @date   2015-07-20
     * @author Fennay [<feng@fennay.com>]
     * @return [type]     [description]
     */
    public function save(){

        $adminUser = session('p_admin_user');
        //接收数据
        $seoData = I('post.seo');    //SEO数据信息
        $articleData = I('post.article');    //文章内容信息
        $content = I('post.content');  //文章内容
        //如果文章ID存在
        $aid = I('post.aid');

        //存储文章信息
        $articleModel = M('Article');
        $articleData['addtime'] = time();
        //如果作者信息为空，则填写管理员信息
        $articleData['author'] = empty($articleData['author']) ? $adminUser['username'] : $articleData['author'];
        //如果文章ID存在，则表示修改，不存在就是添加
        if(empty($aid)){
            $aid = $articleModel->add($articleData);

            //文章SEO信息
            $seoModel = M('Article_seo');
            $seoData['aid'] = $aid;
            $seoModel->add($seoData);

            //存储文章内容
            $contentData['aid'] = $aid;
            $contentData['content'] = $content;
            M('Article_content')->add($contentData);

        }else{
            $articleModel->aid = $aid;
            $articleModel->save($articleData);

            //文章SEO信息
            $seoModel = M('Article_seo');
            $seoData['aid'] = $aid;
            $seoModel->where(array('aid'=>$aid))->save($seoData);

            //存储文章内容
            $contentData['content'] = $content;
            M('Article_content')->where(array('aid'=>$aid))->save($contentData);

        }

        //存储分类信息
        //删除该文章存在的分类
        M('Article_tag')->where(array('aid'=>$aid))->delete();
        //循环入库分类
        foreach ($articleData['cate'] as $cate) {
            $cateData['aid'] = $aid;
            $cateData['cid'] = $cate;
            M('Article_cate')->add($cateData);
            p($cateData);
        }
        //存储标签信息
        //删除该文章存在的标签
        M('Article_tag')->where(array('aid'=>$aid))->delete();
        //循环入库标签
        foreach ($articleData['tag'] as $tag) {
            $tagData['aid'] = $aid;
            $tagData['cid'] = $tag;
            M('Article_tag')->add($tagData);
            p($tagData);
        }

        //返回值
        $result['status'] = 1;
        $result['msg'] = '数据修改成功';
        $result['url'] = '';
        echo json_encode($result,true);
    }

    /**
     * [delete 删除文章]
     * @date   2015-07-22
     * @author Fennay [<feng@fennay.com>]
     * @return [type]     [description]
     */
    public function delete(){
        $aid = I('post.aid');
        //删除文章，设置状态为2
        $rs = M('Article')->where(array('id'=>$aid))->setField('status',2);
        if($rs == false){
            $result['status'] = -1;
            $result['msg'] = '数据删除失败';
            $result['url'] = '';
        }else{
            $result['status'] = 1;
            $result['msg'] = '数据删除成功';
            $result['url'] = '';
        }
        echo json_encode($result,true);
        exit();
    }
}