<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],

// ];

think\Route::rule('about/:cid','index/Page/index','GET',['ext'=>'html']);
think\Route::rule('newslist/:cid','index/Cate/index','GET',['ext'=>'html']);
think\Route::rule('news/:aid','index/Article/index','GET',['ext'=>'html']);
think\Route::rule('/','index/Index/index','GET',['ext'=>'html']);
