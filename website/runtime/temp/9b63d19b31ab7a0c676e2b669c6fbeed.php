<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:81:"E:\phpStudy\PHPTutorial\WWW\zhengrong/hwapplication/hwadmin\view\conf\conflst.htm";i:1530519975;s:81:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\title.htm";i:1543720843;s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\head.htm";i:1512975644;s:80:"E:\phpStudy\PHPTutorial\WWW\zhengrong\hwapplication\hwadmin\view\common\left.htm";i:1544581223;}*/ ?>
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
                    
<div class="row">
    <div class="col-lg-12 col-sm-12 col-xs-12">
        <form class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
            <div class="widget-body">
                <div class="widget-main ">
                    <div class="tabbable">
                        <ul class="nav nav-tabs tabs-flat" id="myTab11">
                            <li class="active">
                                <a data-toggle="tab" href="#home11">
                                    基本信息设置
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile11">
                                   联系方式
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#profile12">
                                   SEO设置
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content tabs-flat">
                            <div id="home11" class="tab-pane active">
                                <?php foreach( $confRes as $k=>$v):if($v['cf_type']==1):?>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $v['cname'];?></label>
                                    <div class="col-sm-6">

                                        <?php if($v['dt_type']==1):?> <!-- 单行文本 -->
                                        <input class="form-control" placeholder="" name="<?php echo $v['ename'];?>"  value="<?php echo $v['value'];?>" type="text">
                                        <?php endif;if($v['dt_type']==2):
                                            $valuesArr=explode(',', $v['values']);
                                            foreach($valuesArr as $k1=>$v1):
                                        ?> <!-- 单选按钮 -->
                                        <div class="radio" style="float:left; padding-left:10px;">
                                            <label>
                                                <input <?php if($v1 == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['ename'];?>" value="<?php echo $v1;?>" class="colored-blue" type="radio">
                                                <span class="text"><?php echo $v1;?></span>
                                            </label>
                                        </div>
                                        <?php endforeach; endif;if($v['dt_type']==3):
                                            $valuesArr=explode(',', $v['values']);
                                            $valueArr=explode(',', $v['value']);
                                            foreach($valuesArr as $k1=>$v1):
                                        ?> <!-- 复选框 -->

                                        <div class="checkbox" style="float:left; padding-left:10px;">
                                            <label>
                                                <input name="<?php echo $v['ename'];?>[]" <?php if(in_array($v1, $valueArr)){echo 'checked="checked"';}?> class="colored-blue" value="<?php echo $v1;?>"  type="checkbox">
                                                <span class="text"><?php echo $v1;?></span>
                                            </label>
                                        </div>

                                        <?php endforeach; endif;if($v['dt_type']==4):?> <!-- 下拉菜单 -->
                                        <select name="<?php echo $v['ename'];?>">
                                        <option value="">请选择</option>
                                            <?php $valuesArr=explode(',', $v['values']);
                                                foreach($valuesArr as $k1=>$v1):
                                            ?>
                                            <option <?php if($v1==$v['value']){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        <?php endif;if($v['dt_type']==5):?> <!-- 文本域 -->
                                        <textarea name="<?php echo $v['ename'];?>" class="form-control"> <?php echo $v['value'];?> </textarea>
                                        <?php endif;if($v['dt_type']==6):?> <!-- 附件类型 -->
                                        <input placeholder="" style="float:left;" value=""  name="<?php echo $v['ename'];?>"  type="file"><?php if($v['value']): ?><img height="30" src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $v['value']; ?>"><?php else: ?>未上传<?php endif; endif;?>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <?php endif;endforeach;?>
                            </div>

                            <div id="profile11" class="tab-pane">
                                <?php foreach( $confRes as $k=>$v):if($v['cf_type']==2):?>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $v['cname'];?></label>
                                    <div class="col-sm-6">

                                        <?php if($v['dt_type']==1):?> <!-- 单行文本 -->
                                        <input class="form-control" placeholder="" name="<?php echo $v['ename'];?>"  value="<?php echo $v['value'];?>" type="text">
                                        <?php endif;if($v['dt_type']==2):
                                            $valuesArr=explode(',', $v['values']);
                                            foreach($valuesArr as $k1=>$v1):
                                        ?> <!-- 单选按钮 -->
                                        <div class="radio" style="float:left; padding-left:10px;">
                                            <label>
                                                <input <?php if($v1 == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['ename'];?>" value="<?php echo $v1;?>" class="colored-blue" type="radio">
                                                <span class="text"><?php echo $v1;?></span>
                                            </label>
                                        </div>
                                        <?php endforeach; endif;if($v['dt_type']==3):
                                            $valuesArr=explode(',', $v['values']);
                                            $valueArr=explode(',', $v['value']);
                                            foreach($valuesArr as $k1=>$v1):
                                        ?> <!-- 复选框 -->

                                        <div class="checkbox" style="float:left; padding-left:10px;">
                                            <label>
                                                <input name="<?php echo $v['ename'];?>[]" <?php if(in_array($v1, $valueArr)){echo 'checked="checked"';}?> class="colored-blue" value="<?php echo $v1;?>"  type="checkbox">
                                                <span class="text"><?php echo $v1;?></span>
                                            </label>
                                        </div>

                                        <?php endforeach; endif;if($v['dt_type']==4):?> <!-- 下拉菜单 -->
                                        <select name="<?php echo $v['ename'];?>">
                                        <option value="">请选择</option>
                                            <?php $valuesArr=explode(',', $v['values']);
                                                foreach($valuesArr as $k1=>$v1):
                                            ?>
                                            <option <?php if($v1==$v['value']){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        <?php endif;if($v['dt_type']==5):?> <!-- 文本域 -->
                                        <textarea name="<?php echo $v['ename'];?>" class="form-control"> <?php echo $v['value'];?> </textarea>
                                        <?php endif;if($v['dt_type']==6):?> <!-- 附件类型 -->
                                        <input placeholder="" style="float:left;" value=""  name="<?php echo $v['ename'];?>"  type="file"><?php if($v['value']): ?><img height="30" src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $v['value']; ?>"><?php else: ?>未上传<?php endif; endif;?>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <?php endif;endforeach;?>
                            </div>
                            <div id="profile12" class="tab-pane">
                                <?php foreach( $confRes as $k=>$v):if($v['cf_type']==3):?>
                                <div class="form-group">
                                    <label for="username" class="col-sm-2 control-label no-padding-right"><?php echo $v['cname'];?></label>
                                    <div class="col-sm-6">

                                        <?php if($v['dt_type']==1):?> <!-- 单行文本 -->
                                        <input class="form-control" placeholder="" name="<?php echo $v['ename'];?>"  value="<?php echo $v['value'];?>" type="text">
                                        <?php endif;if($v['dt_type']==2):
                                            $valuesArr=explode(',', $v['values']);
                                            foreach($valuesArr as $k1=>$v1):
                                        ?> <!-- 单选按钮 -->
                                        <div class="radio" style="float:left; padding-left:10px;">
                                            <label>
                                                <input <?php if($v1 == $v['value']): ?> checked="checked" <?php endif; ?> name="<?php echo $v['ename'];?>" value="<?php echo $v1;?>" class="colored-blue" type="radio">
                                                <span class="text"><?php echo $v1;?></span>
                                            </label>
                                        </div>
                                        <?php endforeach; endif;if($v['dt_type']==3):
                                            $valuesArr=explode(',', $v['values']);
                                            $valueArr=explode(',', $v['value']);
                                            foreach($valuesArr as $k1=>$v1):
                                        ?> <!-- 复选框 -->

                                        <div class="checkbox" style="float:left; padding-left:10px;">
                                            <label>
                                                <input name="<?php echo $v['ename'];?>[]" <?php if(in_array($v1, $valueArr)){echo 'checked="checked"';}?> class="colored-blue" value="<?php echo $v1;?>"  type="checkbox">
                                                <span class="text"><?php echo $v1;?></span>
                                            </label>
                                        </div>

                                        <?php endforeach; endif;if($v['dt_type']==4):?> <!-- 下拉菜单 -->
                                        <select name="<?php echo $v['ename'];?>">
                                        <option value="">请选择</option>
                                            <?php $valuesArr=explode(',', $v['values']);
                                                foreach($valuesArr as $k1=>$v1):
                                            ?>
                                            <option <?php if($v1==$v['value']){echo 'selected="selected"';}?> value="<?php echo $v1;?>"><?php echo $v1;?></option>
                                        <?php endforeach;?>
                                        </select>
                                        <?php endif;if($v['dt_type']==5):?> <!-- 文本域 -->
                                        <textarea name="<?php echo $v['ename'];?>" class="form-control"> <?php echo $v['value'];?> </textarea>
                                        <?php endif;if($v['dt_type']==6):?> <!-- 附件类型 -->
                                        <input placeholder="" style="float:left;" value=""  name="<?php echo $v['ename'];?>"  type="file"><?php if($v['value']): ?><img height="30" src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $v['value']; ?>"><?php else: ?>未上传<?php endif; endif;?>
                                    </div>
                                    <p class="help-block col-sm-4 red">* 必填</p>
                                </div>
                                <?php endif;endforeach;?>
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