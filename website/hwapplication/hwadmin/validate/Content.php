<?php
namespace app\hwadmin\validate;
use think\validate;

class Content extends validate
{
	protected $rule=[
		'title'=>'require',
		'keywords'=>'require',
		'description'=>'require',
		'writer'=>'require',
		'source'=>'require',
		'sort'=>'number',
		'click'=>'number',
	];



	protected $message=[
		'title.require'=>'标题称不得为空！',
		'keywords.require'=>'关键词不能为空',
		'description.require'=>'文章描述不能为空',
		'writer.require'=>'文章作者不能为空',
		'source.require'=>'文章来源不能为空',
		'sort.number'=>'排序必须是数字',
		'click.number'=>'点击量必须是数字',

	];


	protected $scene=[
		'add'=>['title','keywords','description','writer','source','sort','click'],
		'edit'=>['title','sort','click','keywords','description'],
	];
}