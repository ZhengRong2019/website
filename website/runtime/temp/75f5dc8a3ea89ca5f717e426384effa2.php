<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"E:\phpStudy\PHPTutorial\WWW\zhengrong/hwapplication/hwadmin\view\bottom\lst.htm";i:1544595914;s:81:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\title.htm";i:1543720843;s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\head.htm";i:1512975644;s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\left.htm";i:1544581223;}*/ ?>
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
                        <a href="#">系统设置</a>
                    </li>
                                        <li>
                        <a href="#">配置列表</a>
                    </li>
                                        </ul>
                </div>
                <!-- /Page Breadcrumb -->

                <!-- Page Body -->
                <div class="page-body">
    <button type="button" tooltip="添加底部列表" class="btn btn-sm btn-azure btn-addon" onClick="javascript:window.location.href = '<?php echo url('Bottom/add'); ?>'"> <i class="fa fa-plus"></i> Add
</button>                
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
            <div class="widget-body">
                <div class="widget-main ">
                    <div class="tabbable">
                        <ul class="nav nav-tabs tabs-flat" id="myTab11">
                            <li class="active">
                                <a data-toggle="tab" href="#home11">
                                    英语底部
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile11">
                                    法语底部
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile12">
                                   俄语底部
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile13">
                                   西班牙语底部
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tabs-flat">
                            <div id="home11" class="tab-pane active">
                                <div class="widget">
                                    <div class="widget-body">
                                        <div class="flip-scroll">
                                            <table class="table table-bordered table-hover">
                                                <thead class="">
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">栏目名称</th>
                                                        <th class="text-center">排序</th>
                                                        <th class="text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 <?php if(is_array($bottomRey) || $bottomRey instanceof \think\Collection || $bottomRey instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bo): $mod = ($i % 2 );++$i;if($bo['bottom_language'] == 1): ?>
                                                <tr>
                                                   <td align="center"><?php echo $bo['id']; ?></td>
                                                   <td align="center"><?php echo $bo['bottom_name']; ?></td>
                                                    <td align="center"><?php echo $bo['sort']; ?></td>
                                                   <td align="center">
                                                        <a href="<?php echo url('Bottom/lsta',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 查看列表
                                                        </a>
                                                        <a href="<?php echo url('edit',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$bo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="profile11" class="tab-pane">
                               <div class="widget">
                                    <div class="widget-body">
                                        <div class="flip-scroll">
                                            <table class="table table-bordered table-hover">
                                                <thead class="">
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">栏目名称</th>
                                                         <th class="text-center">排序</th>
                                                        <th class="text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 <?php if(is_array($bottomRey) || $bottomRey instanceof \think\Collection || $bottomRey instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bo): $mod = ($i % 2 );++$i;if($bo['bottom_language'] == 2): ?>
                                                <tr>
                                                   <td align="center"><?php echo $bo['id']; ?></td>
                                                   <td align="center"><?php echo $bo['bottom_name']; ?></td>
                                                   <td align="center"><?php echo $bo['sort']; ?></td>
                                                   <td align="center">
                                                        <a href="<?php echo url('Bottom/lsta',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 查看列表
                                                        </a>
                                                        <a href="<?php echo url('edit',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$bo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="profile12" class="tab-pane">
                              <div class="widget">
                                    <div class="widget-body">
                                        <div class="flip-scroll">
                                            <table class="table table-bordered table-hover">
                                                <thead class="">
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">栏目名称</th>
                                                         <th class="text-center">排序</th>
                                                        <th class="text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 <?php if(is_array($bottomRey) || $bottomRey instanceof \think\Collection || $bottomRey instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bo): $mod = ($i % 2 );++$i;if($bo['bottom_language'] == 3): ?>
                                                <tr>
                                                   <td align="center"><?php echo $bo['id']; ?></td>
                                                   <td align="center"><?php echo $bo['bottom_name']; ?></td>
                                                   <td align="center"><?php echo $bo['sort']; ?></td>
                                                   <td align="center">
                                                        <a href="<?php echo url('Bottom/lsta',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 查看列表
                                                        </a>
                                                        <a href="<?php echo url('edit',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$bo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="profile13" class="tab-pane">
                              <div class="widget">
                                    <div class="widget-body">
                                        <div class="flip-scroll">
                                            <table class="table table-bordered table-hover">
                                                <thead class="">
                                                    <tr>
                                                        <th class="text-center">ID</th>
                                                        <th class="text-center">栏目名称</th>
                                                         <th class="text-center">排序</th>
                                                        <th class="text-center">操作</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                 <?php if(is_array($bottomRey) || $bottomRey instanceof \think\Collection || $bottomRey instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRey;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bo): $mod = ($i % 2 );++$i;if($bo['bottom_language'] == 4): ?>
                                                <tr>
                                                   <td align="center"><?php echo $bo['id']; ?></td>
                                                   <td align="center"><?php echo $bo['bottom_name']; ?></td>
                                                   <td align="center"><?php echo $bo['sort']; ?></td>
                                                   <td align="center">
                                                        <a href="<?php echo url('Bottom/lsta',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 查看列表
                                                        </a>
                                                        <a href="<?php echo url('edit',array('id'=>$bo['id'])); ?>" class="btn btn-primary btn-sm shiny">
                                                            <i class="fa fa-edit"></i> 编辑
                                                        </a>
                                                        <a href="#" onClick="warning('确实要删除吗', '<?php echo url('del',array('id'=>$bo['id'])); ?>')" class="btn btn-danger btn-sm shiny">
                                                            <i class="fa fa-trash-o"></i> 删除
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endif; endforeach; endif; else: echo "" ;endif; ?>     
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>  
    </div>

        <!--Basic Scripts-->
    <script src="http://www.red-model.cn/public/static/admin/style/jquery_002.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/style/bootstrap.js"></script>
    <script src="http://www.red-model.cn/public/static/admin/style/jquery.js"></script>
    <!--Beyond Scripts-->
    <script src="http://www.red-model.cn/public/static/admin/style/beyond.js"></script>

</body></html>