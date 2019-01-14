<?php
namespace app\hwadmin\validate;
use think\validate;

class Link extends validate
{
	protected $rule=[
		'link_name'=>'require',
		'link_url'=>'require',
		'banner_name'=>'require',
	];



	protected $message=[
		'link_name.require'=>'链接名称不能为空！',
		'link_url.require'=>'链接地址不能为空',
		'banner_name.require'=>'名称不能为空',
	];


	protected $scene=[
		'add'=>['link_name','link_url'],
		'edit'=>['link_name','link_url'],
		'adda'=>['banner_name'],
	];
}