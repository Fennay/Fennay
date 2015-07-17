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
        $article = D('Article')->relation(true)->select();
        // p($article);
        $this->display();
    }

    public function add(){
        if(!IS_POST){
            $this->display();
        }else{
            //接收数据
            $seoData = I('post.seo');    //SEO数据信息
            $articleData = I('post.article');    //文章内容信息
            $content = I('post.content');  //文章内容
            //如果文章ID存在
            $aid = I('post.aid');

            //存储文章信息
            $articleModel = M('Article');
            $articleModel->create();
            $articleModel->addtime = time();
            //如果文章ID存在，则表示修改，不存在就是添加
            if(empty($aid)){
                $aid = $articleModel->add($articleData);
                $action = 'add';
            }else{
                $articleModel->aid = $aid;
                $articleModel->save($articleData);
                $action = 'save';
            }

            //文章SEO信息
            $seoModel->M('Article_seo');
            $seoModel->create();
            $seoModel->aid = $aid;
            $seoModel->add($seoData);

            //存储文章内容
            $contentData['aid'] = $aid;
            $contentData['content'] = $content;
            M('Article_content')->add($contentData);

            //存储分类信息
            //删除该文章存在的分类
            M('Article_tag')->where(array('aid'=>$aid))->delete();
            //循环入库分类
            foreach ($articleDate['cate'] as $cate) {
                $cateData['aid'] = $aid;
                $cateData['cid'] = $cate;
                M('Article_cate')->add($cateData);
            }
            //存储标签信息
            //删除该文章存在的标签
            M('Article_tag')->where(array('aid'=>$aid))->delete();
            //循环入库标签
            foreach ($articleDate['tag'] as $tag) {
                $tagData['aid'] = $aid;
                $tagData['cid'] = $tag;
                M('Article_tag')->add($tagData);
            }
            p($model);
        }
    }
}