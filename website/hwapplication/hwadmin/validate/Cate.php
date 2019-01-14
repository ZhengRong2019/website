<?php
namespace app\hwadmin\validate;
use think\validate;

class Cate extends validate
{
	protected $rule=[
		'pid'=>'require|number',
		'cate_name'=>'require',
		'cate_attr'=>'require|number',
	];

	protected $message=[
		'cate_name.require'=>'栏目名称不得为空！',
		'cate_attr.require'=>'栏目属性不能为空！',
		'cate_attr.number'=>'栏目属性必须是数字！',
		'pid.number'=>'上级栏目id必须是数字！',
		'pid.require'=>'上级栏目不得为空！',

	];

	protected $scene=[
		'add'=>['model_id','pid','cate_name','cate_attr'],
		'edit'=>['model_id','pid','cate_name','cate_attr'],
	];
}