<?php
namespace app\hwadmin\controller;
class Link extends Common
{
	

public function lst()
    {   
       $_cateRes=db('cate')->order('sort desc')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $linkRes=db('link')->order('sort DESC')->paginate(15);
       $this->assign([
       	'linkRes'=>$linkRes,
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
            if(!$validate->scene('add')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
            $file = request()->file('link_img') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['link_img']=$imgSrc;
               }

    		$add=db('link')->insert($data);
    		if($add){
    			$this->success('添加链接成功！',url('lst'));
    		}else{
    			$this->error('添加链接失败！');
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
            if(!$validate->scene('edit')->check($data)){
                $this->error($validate->getError());
            }

            //栏目图片上传
           if($_FILES['link_img']['tmp_name'] != ''){
             $file = request()->file('link_img');
             $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
             $imgSrc=$info->getSaveName();
             $data['link_img']=$imgSrc;
            }

    		$add=db('link')->update($data);
    		if($add){
    			$this->success('修改文章成功！',url('lst'));
    		}else{
    			$this->error('修改文章失败！');
    		}
    		return;
    	}

       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $linkRe=db('link')->find($id);
       $this->assign([
       	'cateRes'=>$cateRes,
       	'linkRe'=>$linkRe,
       ]);
       
        return view();
    }




public function del($id)
    {
        $del=db('link')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }
 
 
 
 

  

   
}
