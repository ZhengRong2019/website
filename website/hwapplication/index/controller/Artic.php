<?php
namespace app\index\controller;
class Artic extends Common
{
    public function index($aid)
    {
        $arts=db('product')->find($aid);
        $cid=$arts['cate_id'];
        $cates=db('cate')->find($cid);

        $arts=db('product')->find($aid);
        $artTmp=$cates['article_tmp'];
        $tempSrc=$this->confTemp.'/'.$artTmp;
        // echo $tempSrc; die;
        //顶级栏目id获取
        $topcid=model('cate')->getTopId($cid);
        $topCates=db('cate')->find($topcid);//顶级栏目信息
        //查询二级栏目
        $sonCateRes=db('cate')->where(array('pid'=>$topcid))->where(array('status'=>1))->select();//根据主栏目id获取当前主栏目下所有二级栏目
        //面包屑
        $pos=model('cate')->position($cid);
        //获取banner
        $bannerRes=db('banner')->where(array('banner_cate'=>$topcid))->select();
        $artRes=db('product')->where(array('cate_id'=>$cid))->order('sort desc')->select();
         //获取友情链接
        $linkRes=db('link')->where(array('link_cate'=>$cid,'status'=>1))->order('sort asc')->select();
        
        $cateEes=db('archives')->field('id,keywords,description,title')->where(array('cate_id'=>$topcid))->find($aid);//获取相应的栏目信息

         //获取上一篇下一篇
        $catep=db('cate')->field('id,cate_ename')->find($aid);
        $prev=db('archives')->where('id','<',$aid)->where('cate_id','=',$arts['cate_id'])->order('id desc')->limit(1)->value('id,title');
        $next=db('archives')->where('id','>',$aid)->where('cate_id','=',$arts['cate_id'])->order('id asc')->limit(1)->value('id');
        $nameRes=db('archives')->field('title')->where(array('id'=>$prev))->limit(1)->select();
        $nameRess=db('archives')->field('title')->where(array('id'=>$next))->limit(1)->select();

        $this->assign([
            'arts'=>$arts,
            'topcid'=>$topcid,
            'cid'=>$cid,
            'topCates'=>$topCates,
            'sonCateRes'=>$sonCateRes,
            'curCates'=>$cates,
            'pos'=>$pos,
            'bannerRes'=>$bannerRes,
            'artRes'=>$artRes,
            'aid'=>$aid,
            'linkRes'=>$linkRes,
            'cateEes'=>$cateEes,
         

            'prev'=>$prev,
            'next'=>$next,
            'nameRes'=>$nameRes,
             'nameRess'=>$nameRess,
             'catep'=>$catep,
            ]);
        return $this->fetch($tempSrc);
    }
}
