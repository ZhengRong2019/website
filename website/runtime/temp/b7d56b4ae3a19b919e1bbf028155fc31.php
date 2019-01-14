<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong/hwapplication/hwadmin\view\banner\edit.htm";i:1537789319;s:81:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\title.htm";i:1543720843;s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\head.htm";i:1512975644;s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\left.htm";i:1544581223;}*/ ?>
<!DOCTYPE html>
<html><head>
	    <meta charset="utf-8">
    <title>正荣网站后台管理系统</title>

    <meta name="description" content="Dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!--Basic Styles-->
    <link href="http://www.red-model.cn/public/static/admin/style/bootstrap.css" rel="stylesheet">
    <link href="http://www.red-model.cn/public/static/admin/style/font-awesome.css" rel="stylesheet">
    <link href="http://www.red-model.cn/public/static/admin/style/weather-icons.css" rel="stylesheet">

    <!--Beyond styles-->
    <link id="beyond-link" href="http://www.red-model.cn/public/static/admin/style/beyond.css" rel="stylesheet" type="text/css">
    <link href="http://www.red-model.cn/public/static/admin/style/demo.css" rel="stylesheet">
    <link href="http://www.red-model.cn/public/static/admin/style/typicons.css" rel="stylesheet">
    <link href="http://www.red-model.cn/public/static/admin/style/animate.css" rel="stylesheet"> 
    <script src="http://www.red-model.cn/public/static/admin/style/jquery_002.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/plus/layer/layer.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/plus/uploadify/jquery.uploadify.min.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/plus/ueditor/ueditor.config.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/plus/ueditor/ueditor.all.min.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/plus/ueditor/lang/zh-cn/zh-cn.js"></script>
</head>
<body>
	<!-- 头部 -->
	<div class="navbar">
    <div class="navbar-inner">
        <div class="navbar-container">
            <!-- Navbar Barnd -->
            <div class="navbar-header pull-left">
                <a href="#" class="navbar-brand">
                    <small>
                            <img src="http://www.red-model.cn/public/static/admin/images/logo.png" alt="">
                        </small>
                </a>
            </div>
            <!-- /Navbar Barnd -->
            <!-- Sidebar Collapse -->
            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="collapse-icon fa fa-bars"></i>
            </div>
            <!-- /Sidebar Collapse -->
            <!-- Account Area and Settings -->
            <div class="navbar-header pull-right">
                <div class="navbar-account">
                    <ul class="account-area">
                        <li>
                            <a class="login-area dropdown-toggle" data-toggle="dropdown">
                                <div class="avatar" title="View your public profile">
                                    <img src="http://www.red-model.cn/public/static/admin/images/adam-jansen.jpg">
                                </div>
                                <section>
                                    <h2><span class="profile"><span><?php echo \think\Session::get('uname'); ?></span></span></h2>
                                </section>
                            </a>
                            <!--Login Area Dropdown-->
                            <ul class="pull-right dropdown-menu dropdown-arrow dropdown-login-area">
                                <li class="username"><a>David Stevenson</a></li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/logout'); ?>">
                                            退出登录
                                        </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a href="<?php echo url('Admin/edit',array('id'=>\think\Session::get('id'))); ?>">
                                            修改密码
                                        </a>
                                </li>
                            </ul>
                            <!--/Login Area Dropdown-->
                        </li>
                        <!-- /Account Area -->
                        <!--Note: notice that setting div must start right after account area list.
                            no space must be between these elements-->
                        <!-- Settings -->
                    </ul>
                </div>
            </div>
            <!-- /Account Area and Settings -->
        </div>
    </div>
</div>
	<!-- /头部 -->
	
	<div class="main-container container-fluid">
		<div class="page-container">
			            <!-- Page Sidebar -->
            <div class="page-sidebar" id="sidebar">
                <!-- Page Sidebar Header-->
                <div class="sidebar-header-wrapper">
                    <input class="searchinput" type="text">
                    <i class="searchicon fa fa-search"></i>
                    <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
                </div>
                <!-- /Page Sidebar Header -->
                <!-- Sidebar Menu -->
                <ul class="nav sidebar-menu">
                    <!--Dashboard-->
                    <li>
                        <a href="#" class="menu-dropdown" >
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">网站信息管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('hwadmin/Conf/conflst'); ?>">
                                    <span class="menu-text">
                                        配置列表                            
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('hwadmin/Conf/lst'); ?>">
                                    <span class="menu-text">
                                        配置管理                           
                                    </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-file-text"></i>
                            <span class="menu-text">英文版</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Xilie/lst'); ?>">
                                    <span class="menu-text">
                                       产品系列列表                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Product/lst'); ?>">
                                    <span class="menu-text">
                                      产品列表                                  
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Content/lst'); ?>">
                                    <span class="menu-text">
                                        列表文章管理                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('About/lst'); ?>">
                                    <span class="menu-text">
                                        单篇文章管理                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Link/lst'); ?>">
                                    <span class="menu-text">
                                        友情链接管理                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Banner/lst'); ?>">
                                    <span class="menu-text">
                                        Banne列表                                  
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <a href="<?php echo url('Banner/add'); ?>">
                                    <span class="menu-text">
                                        Banner添加                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Cate/add'); ?>">
                                    <span class="menu-text">
                                        栏目添加                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-dashboard"></i>
                            <span class="menu-text">法语版</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Content/lst'); ?>">
                                    <span class="menu-text">
                                        列表文章管理                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('About/lst'); ?>">
                                    <span class="menu-text">
                                        单篇文章管理                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Link/lst'); ?>">
                                    <span class="menu-text">
                                        友情链接管理                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Banner/lst'); ?>">
                                    <span class="menu-text">
                                        Banne列表                                  
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <a href="<?php echo url('Banner/add'); ?>">
                                    <span class="menu-text">
                                        Banner添加                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Cate/lsta'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Cate/adda'); ?>">
                                    <span class="menu-text">
                                        栏目添加                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                                    
                    </li>

                     <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-video-camera"></i>
                            <span class="menu-text">扩展管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Banner/lst'); ?>">
                                    <span class="menu-text">
                                        Banne列表                                  
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                                <a href="<?php echo url('Banner/add'); ?>">
                                    <span class="menu-text">
                                        Banner添加                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Message/lst'); ?>">
                                    <span class="menu-text">
                                        留言管理                                  
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Job/lst'); ?>">
                                    <span class="menu-text">
                                      招聘管理                                  
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-folder"></i>
                            <span class="menu-text">栏目管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Cate/lst'); ?>">
                                    <span class="menu-text">
                                        栏目列表                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Cate/add'); ?>">
                                    <span class="menu-text">
                                        栏目添加                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">底部信息管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Bottom/lst'); ?>">
                                    <span class="menu-text">
                                        底部列表                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Bottom/add'); ?>">
                                    <span class="menu-text">
                                        添加底部信息                                   
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li>

                    <li>
                        <a href="#" class="menu-dropdown">
                            <i class="menu-icon fa fa-user"></i>
                            <span class="menu-text">管理员管理</span>
                            <i class="menu-expand"></i>
                        </a>
                        <ul class="submenu">
                            <li>
                                <a href="<?php echo url('Admin/lst'); ?>">
                                    <span class="menu-text">
                                        管理员列表                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo url('Admin/add'); ?>">
                                    <span class="menu-text">
                                        添加管理员                                    
                                   </span>
                                    <i class="menu-expand"></i>
                                </a>
                            </li>
                        </ul>                            
                    </li> 


                                
                </ul>
                <!-- /Sidebar Menu -->
            </div>
            <!-- /Page Sidebar -->
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Breadcrumb -->
                <div class="page-breadcrumbs">
                    <ul class="breadcrumb">
                                        <li>
                        <a href="<?php echo url('Index/index'); ?>">系统</a>
                    </li>
                                        <li>
                        <a href="<?php echo url('Cate/lst'); ?>">栏目管理</a>
                    </li>
                                        <li class="active">添加栏目</li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <div class="widget">
            <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $bannerRe['id']; ?>">
                <div class="widget-body">
                    <div class="widget-main ">
                        <div class="tabbable">
                            <ul class="nav nav-tabs tabs-flat" id="myTab11">
                                <li class="active">
                                    <a data-toggle="tab" href="#home11">
                                        基本信息
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content tabs-flat">
                                <div id="home11" class="tab-pane active">
                                   

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">名称</label>
                                        <div class="col-sm-4">
                                            <input class="form-control"  name="banner_name" value="<?php echo $bannerRe['banner_name']; ?>"  type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">Banner链接</label>
                                        <div class="col-sm-4">
                                            <input class="form-control"  name="banner_url" value="<?php echo $bannerRe['banner_url']; ?>"  type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red">*以http:// 开头</p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">banner图</label>
                                        <div class="col-sm-3">
                                            <input name="banner_img"  type="file">
                                        </div>
                                        <p class="help-block col-sm-6 red"><?php if($bannerRe['banner_img']): ?> <img src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $bannerRe['banner_img']; ?>" width="50"> <?php else: ?>暂无上传<?php endif; ?></p>
                                    </div>

                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">所属栏目</label>
                                        <div class="col-sm-3">
                                            <select name="banner_cate">
                                                <option <?php if($bannerRe['banner_cate'] == 0): ?> selected="selected" <?php endif; ?> value="0">首页</option>
                                                <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
                                                <option <?php if($bannerRe['banner_cate'] == $cate['id']): ?> selected="selected" <?php endif; ?>  value="<?php echo $cate['id']; ?>"><?php echo str_repeat('-', $cate['level']*8);?><?php echo $cate['cate_name']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                

                                     <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">状态</label>
                                        <div class="col-sm-6">

                                             <!-- 单选按钮 -->
                                            <div class="radio" style="float:left; padding-left:10px;">
                                                <label>
                                                    <input name="status" value="1" <?php if($bannerRe['status'] == 1): ?> checked="checked" <?php endif; ?> class="colored-blue" type="radio">
                                                    <span class="text">显示</span>
                                                </label>
                                            </div>
                                             <!-- 单选按钮 -->
                                            <div class="radio" style="float:left; padding-left:10px;">
                                                <label>
                                                    <input name="status" <?php if($bannerRe['status'] == 0): ?> checked="checked" <?php endif; ?> value="0" class="colored-blue" type="radio">
                                                    <span class="text">隐藏</span>
                                                </label>
                                            </div>
                                           
                                        </div>
                                    </div>

                                     <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">SEO描述</label>
                                        <div class="col-sm-4">
                                            <textarea class="form-control" name="desc"><?php echo $bannerRe['desc']; ?></textarea>
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>


                                    <div class="form-group">
                                        <label for="username" class="col-sm-2 control-label no-padding-right">排序</label>
                                        <div class="col-sm-4">
                                            <input class="form-control"  name="sort" value="<?php echo $bannerRe['sort']; ?>"  type="text">
                                        </div>
                                        <p class="help-block col-sm-4 red"></p>
                                    </div>

                                   
                               
                            </div>
                            
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">保存信息</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
		</div>	
	</div>

	    <!--Basic Scripts-->
    
    <script src="http://www.red-model.cn/public/static/admin/style/bootstrap.js"></script>
    <!--Beyond Scripts-->
    <script src="http://www.red-model.cn/public/static/admin/style/beyond.js"></script>
    <script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例

    UE.getEditor('content',{toolbars:[
        [
            'fullscreen', 'source', '|', 'undo', 'redo', '|',
            'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
            'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
            'directionalityltr', 'directionalityrtl', 'indent', '|',
            'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
            'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
            'simpleupload', 'insertimage', 'emotion', 'scrawl', 'insertvideo', 'music', 'attachment'
        ]

        ],initialFrameWidth:1000,initialFrameHeight:400});

</script>


</body></html>