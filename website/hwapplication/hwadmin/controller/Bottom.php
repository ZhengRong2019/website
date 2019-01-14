<?php
namespace app\hwadmin\controller;
class Bottom extends Common
{
	

    public function lst()
    {   
       $bottomRey=db('bottomm')->select();//ying
        // dump($bottomRey);die;
       $this->assign([
        'bottomRey'=>$bottomRey,
      
       ]);
        return view();
    }

   


     public function add()
    {   
      if(request()->isPost()){
        $data=input('post.');
        // dump($data);die;
        $add=db('bottomm')->insert($data);
        if($add){
          $this->success('保存成功！','lst');
        }else{
          $this->error('保存失败!');
        }
      }
        return view();
    }



     public function edit($id)
    {  

    	if(request()->isPost()){
    	 $data=input('post.');
       $save=db('bottomm')->update($data);
       if($save){
        $this->success('修改成功！','lst');
       }else{
        $this->error('修改失败！');
       }
    	}

      $bottomRe=db('bottomm')->find($id);
       $this->assign([
       'bottomRe'=>$bottomRe,
       ]);
       
        return view();
    }




     public function del($id)
    {
        $del=db('bottomm')->delete($id);
        if($del){
            $this->success('删除成功',url('hwadmin/Bottom/lst'));
        }else{
            $this->error('删除失败！');
        }
        
        return view();
    }

     


    public function lsta(){
      $aid=input('id');
      $botRes=db('bottoma')->where(array('bottom_id'=>$aid,'sort'=>1))->paginate(15);
      $bottomRes=db('bottomm')->select();
      $this->assign([
      'aid'=>$aid,
      'botRes'=>$botRes,
      'bottomRes'=>$bottomRes,
      ]);
      return view();
    }

    public function adda(){
      if(request()->isPost()){
        $data=input('post.');


        $add=db('bottoma')->insert($data);
        if($add){
          $this->success('保存成功！','lst');
        }else{
          $this->error('保存失败！');
        }
      }
    
      $aid=input('aid');
      $bottomRes=db('bottomm')->select();
      $this->assign([
        'bottomRes'=>$bottomRes,
        'aid'=>$aid,
      ]);
        
      return view();
    }
 


 public function edita($id){
  if(request()->isPost()){
    $data=input('post.');
    
    $save=db('bottoma')->update($data);
    if($save){
      $this->success('修改成功！','lst');
    }else{
      $this->error('修改失败！');
    }
  }
  
  $botRe=db('bottoma')->find($id);
  $bottomRes=db('bottomm')->select();
      $this->assign([
        'bottomRes'=>$bottomRes,
        'botRe'=>$botRe,
      ]);
  return view();
 }

 public function dela($id){
  $dela=db('bottoma')->del($id);
  if($dela){
            $this->success('删除成功',url('hwadmin/Bottom/lst'));
        }else{
            $this->error('删除失败！');
        }
 }
 
 
 

  

   
}
