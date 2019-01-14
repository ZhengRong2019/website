<?php
namespace app\index\controller;
class Cate extends Common
{
    public function index($cid)
    {
        $cates=db('cate')->find($cid);//查询当前栏目信息
        //判断指定栏目的跳转
        if(!$cates['jump_id']==0){
            $cid=$cates['jump_id'];
            $cates=db('cate')->find($cid);//查询跳转栏目信息
        }
        $cateTmp=$cates['list_tmp'];
        $tempSrc=$this->confTemp.'/'.$cateTmp;
        //顶级栏目id获取
        $topcid=model('cate')->getTopId($cid);
        $topCates=db('cate')->find($topcid);//顶级栏目信息
        //查询二级栏目
        $sonCateRes=db('cate')->where(array('pid'=>$topcid))->where(array('status'=>1))->select();//根据主栏目id获取当前主栏目下所有二级栏目

        //获取三级栏目
        $cateResb=db('cate')->field('id,cate_name,cate_attr,link,pid')->where(array('pid'=>11))->select();
        //获取banner
        $bannerRes=db('banner')->where(array('banner_cate'=>$topcid))->select();
        //获取友情链接
        $linkRes=db('link')->where(array('link_cate'=>$cid,'status'=>1))->order('sort asc')->select();
        //面包屑
        $pos=model('cate')->position($cid);
        $cateEes=db('cate')->field('id,cate_name,keywords,description,title')->find($cid);//获取相应的栏目信息
        $cateResa=db('cate')->find($cid);
        //自定义
        $newList=db('archives')->where(array('cate_id'=>$cid,'status'=>1))->order('sort asc')->paginate(16);//合作伙伴
        $xilieRes=db('xilie')->where(array('xilie_cate'=>$cid))->select();
        $zhanRes=db('archives')->where(array('cate_id'=>$cid,'status'=>1))->order('sort desc')->paginate(6);//展会+经销商+销售业绩+案例
         $cateR=db('cate')->select();
         $caterEs=db('xilie')->where(array('xilie_cate'=>$cid))->select();
         // dump($caterEs);die;
         $porRes=db('product')->paginate(10);
         $cid=input('cid');

         // dump($porRes);die;
        $this->assign([
            'topcid'=>$topcid,
            'cid'=>$cid,
            'topCates'=>$topCates,
            'sonCateRes'=>$sonCateRes,
            'pos'=>$pos,
            'bannerRes'=>$bannerRes,
            'linkRes'=>$linkRes,
            'cateEes'=>$cateEes,
            'cateResa'=>$cateResa,//栏目单独标题
            
             //自定义
            'newList'=>$newList,//合作伙伴
            'xilieRes'=>$xilieRes,
            'zhanRes'=>$zhanRes,//展会+经销商+销售业绩+案例
            'cateR'=>$cateR,
            'caterEs'=>$caterEs,
            'porRes'=>$porRes,
             

            ]);
        return $this->fetch($tempSrc);
    }
}

