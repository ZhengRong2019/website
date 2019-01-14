<?php
namespace app\hwadmin\controller;
class Xilie extends Common
{
	

    public function lst()
    {   
       
       $cateRes=db('cate')->select();
       $xilieRes=db('xilie')->select();
       $this->assign([
       	'cateRes'=>$cateRes,
        'xilieRes'=>$xilieRes,
       ]);
        return view();
    }

   

     public function add()
    {  

    	if(request()->isPost()){
    		$data=input('post.');
    		$add=db('xilie')->insert($data);
    		if($add){
    			$this->success('产品系列成功！',url('lst'));
    		}else{
    			$this->error('添加产品系列失败！');
    		}
    		return;
    	}
       $cateRes=db('cate')->select();
       $this->assign([
       	'cateRes'=>$cateRes,
       ]);
       
        return view();
    }



     public function edit($id)
    {  

       if(request()->isPost()){
        $data=input('post.');
        $save=db('xilie')->update($data);
        if($save){
          $this->success('产品系列修改成功！',url('lst'));
        }else{
          $this->error('添加产品系列修改失败！');
        }
    	}

      
       $xilieRe=db('xilie')->find($id);
       $_cateRes=db('cate')->select();
       $cateRes=model('cate')->catetree($_cateRes);
       $this->assign([
       	'cateRes'=>$cateRes,
        'xilieRe'=>$xilieRe,
       ]);
       
        return view();
    }




     public function del($id)
    {
        $del=db('xilie')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }
 
 
 
 

  

   
}
