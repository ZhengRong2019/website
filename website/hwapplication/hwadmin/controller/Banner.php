<?php
namespace app\hwadmin\controller;
class Banner extends Common
{
	

public function lst()
    {   
       $_cateRes=db('cate')->order('sort desc')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $bannerRes=db('banner')->order('sort DESC')->paginate(15);
       $this->assign([
       	'bannerRes'=>$bannerRes,
        'cateRes'=>$cateRes,
       ]);
        return view();
    }

public function add()
    {  

    	if(request()->isPost()){
    		$data=input('post.');

            //验证 
            $validate=validate('Link');
            if(!$validate->scene('adda')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
            $file = request()->file('banner_img') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['banner_img']=$imgSrc;
               }

    		$add=db('banner')->insert($data);
    		if($add){
    			$this->success('添加Banner成功！',url('lst'));
    		}else{
    			$this->error('添加Banner失败！');
    		}
    		return;
    	}

       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $this->assign([
       	'cateRes'=>$cateRes,
       ]);
       
        return view();
    }



public function edit($id)
    {  

    	if(request()->isPost()){
    		$data=input('post.');

            //验证 
            $validate=validate('Link');
            if(!$validate->scene('adda')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
           if($_FILES['banner_img']['tmp_name'] != ''){
             $file = request()->file('banner_img');
             $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
             $imgSrc=$info->getSaveName();
             $data['banner_img']=$imgSrc;
            }

    		$add=db('banner')->update($data);
    		if($add){
    			$this->success('修改Banner成功！',url('lst'));
    		}else{
    			$this->error('修改Banner失败！');
    		}
    		return;
    	}

       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $bannerRe=db('banner')->find($id);
       $this->assign([
       	'cateRes'=>$cateRes,
       	'bannerRe'=>$bannerRe,
       ]);
       
        return view();
    }




public function del($id)
    {
        $del=db('banner')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }
 
 
 
 

  

   
}
