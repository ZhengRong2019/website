<?php
namespace app\index\controller;
class Indexa extends Common
{
    public function index()
    {
    	$topcid=0;
    	$this->assign([
    		'topcid'=>$topcid,
    	]);
    	$tempSrc=$this->confTemp.'/indexa.html';
    	return $this->fetch($tempSrc);
    }
}
