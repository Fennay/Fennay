<?php
/**
 * 文章关联模型
 */
namespace Padmin\Model;
use Think\Model\RelationModel;
class ArticleModel extends RelationModel{

    protected $_link = array(
        // 分类关联
        'Cate' => array(
            'mapping_type'      =>  self::MANY_TO_MANY,
            'class_name'        =>  'Cate',
            'mapping_name'      =>  'cates',
            'foreign_key'       =>  'aid',
            'relation_foreign_key'  =>  'cid',
            'relation_table'    =>  'fny_article_cate' //此处应显式定义中间表名称，且不能使用C函数读取表前缀
        ),
        // 标签关联
        'Tag' => array(
            'mapping_type'      =>  self::MANY_TO_MANY,
            'class_name'        =>  'Tag',
            'mapping_name'      =>  'tags',
            'foreign_key'       =>  'aid',
            'relation_foreign_key'  =>  'tid',
            'relation_table'    =>  'fny_article_tag' //此处应显式定义中间表名称，且不能使用C函数读取表前缀
        )
    );
}