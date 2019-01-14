<?php
namespace app\hwadmin\controller;
class Product extends Common
{
	
    // 英文版
    public function lst()
    {   

        $_cateRes=db('cate')->order('sort desc')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        $xilieRes=db('xilie')->select();
        $productRes=db('product')->paginate(15);
        $this->assign([
            'xilieRes'=>$xilieRes,
            'cateRes'=>$cateRes,
            'productRes'=>$productRes,
        ]);
        return view();
    }
 

    public function add()
    {   
    	if(request()->isPost()){
    		$data=input('post.');

            //栏目图片上传
            $file = request()->file('img') ;
               if($file){
               $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
               $imgSrc=$info->getSaveName();
               $data['img']=$imgSrc;
               }

            $data['time']=time();
    		$add=db('product')->insert($data);
    		if($add){
    			$this->success('添加成功！',url('lst'));
    		}else{
    			$this->error('添加失败！');
    		}
    		return;
    	}
        //获取栏目
        $_cateRes=db('cate')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        //接受栏目id
        $cateid=input('cateid');
        //模型信息

         $xilieRes=db('xilie')->select();
    
        $this->assign(array(
            'cateRes'=>$cateRes,
            'cateid'=>$cateid,
             'xilieRes'=>$xilieRes,
            ));
        return view();
    }

     
      public function edit($id)
       {
        if(request()->isPost()){
            $data=input('post.');

            //栏目图片上传
            //栏目图片
            if($_FILES['img']['tmp_name'] != ''){
             $file = request()->file('img');
             $info = $file->move(ROOT_PATH . 'public/static/admin/uploads');
             $imgSrc=$info->getSaveName();
             $data['img']=$imgSrc;
            }
           $data['time']=time();
            $save=db('product')->update($data);
            if($save){
                $this->success('修改成功！',url('lst'));
            }else{
                $this->error('修改失败！');
            }
            return;
        }
        $productRe=db('product')->find($id);
        //获取栏目
        $_cateRes=db('cate')->select();
        $cateRes=model('cate')->catetree($_cateRes);
        $xilieRes=db('xilie')->select();
        
        $this->assign(array(
            'cateRes'=>$cateRes,
            'productRe'=>$productRe,
            'xilieRes'=>$xilieRes,
            ));
        return view();
    }


     public function del($id)
    {
        $del=db('product')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }


  






   
}
