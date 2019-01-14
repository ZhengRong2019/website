<?php
namespace app\hwadmin\controller;
class Message extends Common
{
	
    public function lst()
    {   
        $messageRes=db('message')->paginate(15);

        $this->assign([
            'messageRes'=>$messageRes,
        ]);
        return view();
    }
   

   public function edit($id){

     $messageRe=db('message')->find($id);
     $this->assign([
        'messageRe'=>$messageRe,
     ]);

      return view();
   }

   public function del($id){
     $del=db('message')->delete($id);
        if($del){
            $this->success('删除成功',url('lst'));
        }else{
            $this->error('删除失败！');
        }
        
   }

   
}
