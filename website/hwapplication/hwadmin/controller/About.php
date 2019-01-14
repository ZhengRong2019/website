<?php
namespace app\hwadmin\controller;
class About extends Common
{
	
    public function lst()
    {   
        
        $aboutRes=db('cate')->where(array('cate_attr'=>2))->select();
        $this->assign([
            'aboutRes'=>$aboutRes,
        ]);
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
                $this->success('修改栏目成功！',url('hwadmin/About/lst'));
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




   
}
