<?php
namespace app\index\controller;
class Index extends Common
{
    public function index()
    {
    	$topcid=0;
    	 $bannerRes=db('banner')->where(array('banner_cate'=>$topcid))->select();
         $productRes=db('product')->where(array('sort'=>1,'cate_id'=>9))->limit(6)->select();
         $newRes=db('archives')->where(array('cate_id'=>19,'status'=>1,'attr'=>"文章推荐"))->limit(1)->select();
         $newRe=db('archives')->where(array('cate_id'=>19,'status'=>1))->order('sort desc')->limit(3)->select();
    	$this->assign([
    		'topcid'=>$topcid,
    		'bannerRes'=>$bannerRes,
            'productRes'=>$productRes,
            'newRes'=>$newRes,
            'newRe'=>$newRe,
    	]);
    	$tempSrc=$this->confTemp.'/index.html';
    	return $this->fetch($tempSrc);
    }
}
