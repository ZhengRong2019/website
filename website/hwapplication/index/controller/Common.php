<?php
namespace app\index\controller;
use think\Controller;
class Common extends Controller
{
	public $confTemp;
    public $confs;
    public function _initialize(){
    	$tmpFloder=$this->getTemp();
    	$this->confTemp=config('template.view_path').$tmpFloder;//获取当前配置项的自定义模板文件夹名称

        $cateRes=$this->getCate(false);//顶部导航
        $cateRea=$this->getCatea(false);//二级顶部导航
        $botCateRes=$this->getCate(true);//底部导航
        $this->confs=$this->getConf();

        $bottomRes=db('bottomm')->where(array('bottom_language'=>1))->select();//英文底部标题
        $bottomRe=db('bottoma')->select();//英文底部二级标题

        $cateRess=db('cate')->where(array('status'=>1))->select();
    	$this->assign([
    		'temp'=>$this->confTemp,
            'cateRes'=>$cateRes,
            'botCateRes'=>$botCateRes,
            'confs'=>$this->confs,
            'cateRess'=>$cateRess,
            'cateRea'=>$cateRea,
            'bottomRes'=>$bottomRes,
            'bottomRe'=>$bottomRe,
    		]);
    }

   //二级顶级
    public function getCatea($bottom=false){
        if($bottom){//底部导航
          $cateRea=db('cate')->where(array('pid'=>0,'status'=>1,'bottom_nav'=>1))->order('id desc')->select();  
        }else{//顶部导航
          $cateRea=db('cate')->where(array('pid'=>0,'status'=>1,'language'=>1))->order('id desc')->select();  
        }
        foreach ($cateRea as $k => $v) {
            $cateRea[$k]['children']=db('cate')->where(array('pid'=>$v['id'],'status'=>1))->order('id desc')->select();
        }
        return $cateRea;
    }

    //首页顶级
    public function getCate($bottom=false){
        if($bottom){//底部导航
          $cateRes=db('cate')->where(array('pid'=>0,'status'=>1,'bottom_nav'=>1,'language'=>1))->select();  
        }else{//顶部导航
          $cateRes=db('cate')->where(array('pid'=>0,'status'=>1,'language'=>1))->select();  
        }
        foreach ($cateRes as $k => $v) {
            $cateRes[$k]['children']=db('cate')->where(array('pid'=>$v['id'],'status'=>1))->select();
        }
        return $cateRes;
    }

    public function getTemp(){
    	$confTemp=db('conf')->field('value')->where(array('ename'=>'temp'))->find();
    	return $confTemp['value'];
    }
    //获取配置项并重新组装
    public function getConf(){
        $confRes=array();
        $_confRes=db('conf')->field('ename,value')->select();
        foreach ($_confRes as $k => $v) {
            $confRes[$v['ename']]=$v['value'];
        }
        return $confRes;
    }
}
