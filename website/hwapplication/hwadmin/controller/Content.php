<?php
namespace app\hwadmin\controller;
class Content extends Common
{
	

    public function lst()
    {   
       
       $cateRes=db('cate')->field('id,cate_name,pid,language')->where(array('cate_attr'=>1,'status'=>1))->paginate(15);
       $this->assign([
       	'cateRes'=>$cateRes,
       ]);
        return view();
    }

    public function lsta()
    {  
       $cate_id=input('cate_id');
       $topid=input('topid');
       $newRes=db('archives')->where(array('status'=>1,'cate_id'=>$cate_id))->order('id DESC')->paginate(15);
       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $this->assign([
       	'cate_id'=>$cate_id,
       	'topid'=>$topid,
       	'newRes'=>$newRes,
       	'cateRes'=>$cateRes,
       ]);
        return view();
    }


     public function add()
    {  

    	if(request()->isPost()){
    		$data=input('post.');

            //验证 
            $validate=validate('Content');
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
            $file = request()->file('sm_litpic') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['sm_litpic']=$imgSrc;
               }


            //栏目图片上传
            $file = request()->file('litpic') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['litpic']=$imgSrc;
               }

            $data['time']=time();
    		$add=db('archives')->insert($data);
    		if($add){
    			$this->success('添加文章成功！',url('lst'));
    		}else{
    			$this->error('添加文章失败！');
    		}
    		return;
    	}

       $topid=input('topid');
       $cate_id=input('cate_id');
       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $xilieRes=db('xilie')->where(array('xilie_cate'=>$cate_id))->select();

       $xuanzeRes=db('cate')->where(array('id'=>14))->select();
       $this->assign([
       	'cateRes'=>$cateRes,
       	'topid'=>$topid,
       	'cate_id'=>$cate_id,
        'xilieRes'=>$xilieRes,
        'xuanzeRes'=>$xuanzeRes,
       ]);
       
        return view();
    }



     public function edit($id)
    {  

    	if(request()->isPost()){
    		$data=input('post.');

            //验证 
            $validate=validate('Content');
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
           if($_FILES['sm_litpic']['tmp_name'] != ''){
             $file = request()->file('sm_litpic');
             $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
             $imgSrc=$info->getSaveName();
             $data['sm_litpic']=$imgSrc;
            }

            //栏目图片上传
           if($_FILES['litpic']['tmp_name'] != ''){
             $file = request()->file('litpic');
             $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
             $imgSrc=$info->getSaveName();
             $data['litpic']=$imgSrc;
            }

    		$add=db('archives')->update($data);
    		if($add){
    			$this->success('修改文章成功！',url('lst'));
    		}else{
    			$this->error('修改文章失败！');
    		}
    		return;
    	}

       $topid=input('topid');
       $cate_id=input('cate_id');
       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $newRe=db('archives')->find($id);
       $xilieRes=db('xilie')->select();
       $this->assign([
       	'cateRes'=>$cateRes,
       	'topid'=>$topid,
       	'cate_id'=>$cate_id,
       	'newRe'=>$newRe,
        'xilieRes'=>$xilieRes,
       ]);
       
        return view();
    }




     public function del($id)
    {
        $del=db('archives')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }
 
 
 
 

  

   
}
