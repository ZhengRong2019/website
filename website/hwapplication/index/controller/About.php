<?php
namespace app\index\controller;
class About extends Common
{
    public function index($cid)
    {
        $cates=db('cate')->find($cid);//查询当前栏目信息
        //判断指定栏目的跳转
        if(!$cates['jump_id']==0){
            $cid=$cates['jump_id'];
            $cates=db('cate')->find($cid);//查询跳转栏目信息
        }
        $cateTmp=$cates['index_tmp'];//获取当前栏目加载的模板名称
        $tempSrc=$this->confTemp.'/'.'m'.'/'.$cateTmp;//组装模板路径方面下面加载
        // echo $tempSrc; die;
        $topcid=model('cate')->getTopId($cid);
        
        $topCates=db('cate')->find($topcid);//顶级栏目信息
        $sonCateRes=db('cate')->where(array('pid'=>$topcid))->where(array('status'=>1))->select();//根据主栏目id获取当前主栏目下所有二级栏目
        //面包屑
        $pos=model('cate')->position($cid);
        $bannerRes=db('banner')->where(array('banner_cate'=>$topcid))->select();
        $newCate=db('cate')->where(array('id'=>$cid))->select();
        $linkRes=db('link')->where(array('link_cate'=>$cid,'status'=>1))->order('sort asc')->select();
        $cateEes=db('cate')->field('id,cate_name,keywords,description,title')->find($cid);//获取相应的栏目信息
        $this->assign([
            'cates'=>$cates,
            'topcid'=>$topcid,//当前栏目顶级栏目的id，用户顶级栏目的高亮显示
            'cid'=>$cid,//当前栏目的id,用于判断当前左侧子栏目高亮
            'topCates'=>$topCates,
            'sonCateRes'=>$sonCateRes,
            'pos'=>$pos,
            'bannerRes'=>$bannerRes,
            'newCate'=>$newCate,
            'linkRes'=>$linkRes,
            'cateEes'=>$cateEes,
            ]);
        return $this->fetch($tempSrc);
    }



}
