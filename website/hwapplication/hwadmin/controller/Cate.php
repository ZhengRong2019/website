<?php
namespace app\hwadmin\controller;
class Cate extends Common
{
	
    // 英文版
    public function lst()
    {   

        $_cateRes=db('cate')->order('sort desc')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        $this->assign('cateRes',$cateRes);
        return view();
    }
 

    public function add()
    {
    	if(request()->isPost()){
    		$data=input('post.');

            //验证 
            $validate=validate('cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
            $file = request()->file('cate_img') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['cate_img']=$imgSrc;
               }

            $data['cate_time']=time();
    		$add=db('cate')->insert($data);
    		if($add){
    			$this->success('添加栏目成功！',url('lst'));
    		}else{
    			$this->error('添加栏目失败！');
    		}
    		return;
    	}
        //获取栏目
        $_cateRes=db('cate')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        //接受栏目id
        $cateid=input('cateid');
        //模型信息
    
        $this->assign(array(
            'cateRes'=>$cateRes,
            'cateid'=>$cateid,
            ));
        return view();
    }

     
      public function edit($id)
       {
        if(request()->isPost()){
            $data=input('post.');

      

            //栏目图片上传
            //栏目图片
            if($_FILES['cate_img']['tmp_name'] != ''){
             $file = request()->file('cate_img');
             $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
             $imgSrc=$info->getSaveName();
             $data['cate_img']=$imgSrc;
            }
           $data['cate_time']=time();
            $save=db('cate')->update($data);
            if($save){
                $this->success('修改栏目成功！',url('hwadmin/Cate/lst'));
            }else{
                $this->error('修改栏目失败！');
            }
            return;
        }
        $cates=db('cate')->find($id);
        //获取栏目
        $_cateRes=db('cate')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        
        
        $this->assign(array(
            'cateRes'=>$cateRes,
            'cates'=>$cates,
            ));
        return view();
    }


     public function del($id)
    {
        $del=db('cate')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }


  // 法语版
    public function lsta()
    {   

        $_cateRes=db('cate')->order('sort desc')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        $this->assign('cateRes',$cateRes);
        return view();
    }

     public function adda()
    {
        if(request()->isPost()){
            $data=input('post.');

            //验证 
            $validate=validate('cate');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
            $file = request()->file('cate_img') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['cate_img']=$imgSrc;
               }

            $data['cate_time']=time();
            $add=db('cate')->insert($data);
            if($add){
                $this->success('添加栏目成功！',url('lsta'));
            }else{
                $this->error('添加栏目失败！');
            }
            return;
        }
        //获取栏目
        $_cateRes=db('cate')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        //接受栏目id
        $cateid=input('cateid');
        //模型信息
    
        $this->assign(array(
            'cateRes'=>$cateRes,
            'cateid'=>$cateid,
            ));
        return view();
    }






   
}
