<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:29:"./template/default/index.html";i:1544543878;s:63:"E:\phpStudy\PHPTutorial\WWW\zhengrong\template\default\head.htm";i:1544762416;s:63:"E:\phpStudy\PHPTutorial\WWW\zhengrong\template\default\foot.htm";i:1544762750;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>正荣网际</title>

    <!-- Bootstrap -->
    <link href="http://www.red-model.cn/template/default/css/bootstrap.css" rel="stylesheet">
    <link href="http://www.red-model.cn/template/default/css/public.css" rel="stylesheet">
    <link href="http://www.red-model.cn/template/default/css/about.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://www.red-model.cn/template/default/js/html5shiv.min.js"></script>
      <script src="http://www.red-model.cn/template/default/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body oncontextmenu=self.event.returnValue=false onselectstart="return false">
 <!-- pc头部 -->
   <div class="container-fluid bc hidden-xs">
     <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 top_bc"></div>
     </div>
     <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <img src="http://www.red-model.cn/template/default/images/anniu1.png" class="pull-right">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 top_bca_text">
                <li><a href="">Français</a></li><!-- 法语 -->
                <li><a href="">Español</a></li><!-- 西班牙 -->
                <li><a href="">русский</a></li><!-- 俄语 -->
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 top_logo">
               <a href="/"> <img src="http://www.red-model.cn/template/default/images/logo.png" class="img-responsive"></a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 sousuo">
               <a href="http://www.twitter.com" target="_blank"><li class="iconfont icon-tuite_twitter fe"></li></a>
               <a href="http://www.linkedin.com" target="_blank"><li class="iconfont icon-linkedin in"></li></a>
               <a href="http://www.facebook.com" target="_blank"><li class="iconfont icon-facebook f"></li></a>
               <div class="border_s">
                  <form>
                  <input type="text" name="">
                  <button><i class="iconfont icon-vertical_line"></i><em class="iconfont icon-sousuo"></em></em></button>
                  </form>
                </div>
            </div>
        </div>
     </div>
     <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 nav_bc">
       
       <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 nav_text">
              <li <?php if($topcid == 0): ?> id="arvice" <?php endif; ?>><a href="<?php echo url('index/Index/index'); ?>">Home</a></li>
              <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
               <li <?php if($cate['id'] == $topcid): ?> id="arvice" <?php endif; ?>><img src="http://www.red-model.cn/template/default/images/hx.jpg"><a href="
                <?php if($cate['cate_attr'] == 1): ?><?php echo url('index/Cate/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 2): ?><?php echo url('index/Page/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 3): ?><?php echo $cate['link']; endif; ?>
                "><?php echo $cate['cate_name']; ?></a></li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
          </div>
        </div>

      </div>
     </div>
   </div>
   <!-- 灰色横条 -->
   <div class="container-fluid hidden-xs">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 hx_bc"></div>
      </div>
   </div>
<!-- end_pc头部 -->
<!-- 手机头部 -->
<nav class="navbar navbar-default visible-xs">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="http://www.red-model.cn/template/default/images/logo.png"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php if($topcid == 0): ?> class="active" <?php endif; ?>><a href="index.html">Home<span class="sr-only">(current)</span></a></li>
        <?php if(is_array($cateRes) || $cateRes instanceof \think\Collection || $cateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $cateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate): $mod = ($i % 2 );++$i;?>
        <li <?php if($cate['id'] == $topcid): ?> class="active" <?php endif; ?> ><a href="
                <?php if($cate['cate_attr'] == 1): ?><?php echo url('index/Cate/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 2): ?><?php echo url('index/Page/index',array('cid'=>$cate['id'])); endif; if($cate['cate_attr'] == 3): ?><?php echo $cate['link']; endif; ?>
          "><?php echo $cate['cate_name']; ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- end_手机头部 -->

<div id="carousel-example-generic" class="carousel slide banner1" data-ride="carousel"><!-- banner -->
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <?php if(is_array($bannerRes) || $bannerRes instanceof \think\Collection || $bannerRes instanceof \think\Paginator): $i = 0; $__LIST__ = $bannerRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ban): $mod = ($i % 2 );++$i;?>
    <li data-target="#carousel-example-generic" data-slide-to="<?php echo $ban['sort']; ?>" <?php if($ban['sort'] == 0): ?> class="active" <?php endif; ?>></li>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php if(is_array($bannerRes) || $bannerRes instanceof \think\Collection || $bannerRes instanceof \think\Paginator): $i = 0; $__LIST__ = $bannerRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ban): $mod = ($i % 2 );++$i;?>
    <div  <?php if($ban['sort'] == 0): ?> class="item active" <?php else: ?>  class="item" <?php endif; ?>>
      <img src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $ban['banner_img']; ?>" alt="banner">
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>

  </div>
    <div class="">
    <img class="img-responsive" src="http://www.red-model.cn/template/default/images/banner_di.jpg" class="img-responsive">
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!-- end_banner -->


<div class="container e_text"><!-- Events -->
  <div class="row "><!--横线开始 -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 e_text1">
      <img src="http://www.red-model.cn/template/default/images/e_text.jpg">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right e_text1 em">
       <a href="/newslist/19.html">
          <img src="http://www.red-model.cn/template/default/images/e_text2.jpg" ><span>more>></span>
       </a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 e_text_hx"></div>
  </div> <!--横线结束 -->
   <div class="row em"> <!--内容开始 -->
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 e_text_left"><!-- left -->
          <div class="row">
            <?php if(is_array($newRes) || $newRes instanceof \think\Collection || $newRes instanceof \think\Paginator): $i = 0; $__LIST__ = $newRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$nw): $mod = ($i % 2 );++$i;?>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 shouji_img">
                  <div class="e_d">
                      <li class="day">
                       <?php echo date("d",$nw['time']); ?>
                      </li>
                      <li class="date">
                        <?php echo date("Y-m",$nw['time']); ?>
                      </li>
                  </div>
                    <img src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $nw['litpic']; ?>" class="img-responsive" />
                  <dl class="e_nr">
                      <dt>
                        <?php echo $nw['title']; ?>
                      </dt>
                      <dd>
                        <?php echo cut_str($nw['description'],70);?>
                      </dd>
                      <dd style="margin-top: 15px;">
                        <a href="/newslist/19.html" >
                           <img src="http://www.red-model.cn/template/default/images/even_more.jpg" class="img-responsive" >
                        </a>
                      </dd>
                  </dl>
              </div>
              <?php endforeach; endif; else: echo "" ;endif; ?>
          </div>
      </div><!-- end_left -->

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 sj_left"><!-- right -->
          <div class="row sj_m">
              <?php if(is_array($newRe) || $newRe instanceof \think\Collection || $newRe instanceof \think\Paginator): $i = 0; $__LIST__ = $newRe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?>
              <div class="col-lg-3 col-md-4 col-sm-3 col-xs-4 "><!--右边第1行开始 -->
                <a href="<?php echo url('index/Article/index',array('aid'=>$new['id'])); ?>">
                  <img src="http://www.red-model.cn/template/default/images/date.jpg" class="img-responsive" />
                  <div class="e_d1">
                    <li class="e_day">
                      <?php echo date("d",$new['time']); ?>
                    </li>
                    <li class="e_date">
                      <?php echo date("Y-m",$new['time']); ?>
                    </li>
                  </div>
                </a>
              </div>

              <div class="col-lg-9 col-md-8 col-sm-9 col-xs-8">
                <a href="<?php echo url('index/Article/index',array('aid'=>$new['id'])); ?>">
                  <dl class="e_dt">
                    <dt> <?php echo $new['title']; ?></dt>
                      <dd> <?php echo cut_str($new['description'],70);?></dd>
                  </dl>
                  </a>
              </div>
              <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 e_hx"></div>
              <div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12 e_kong"></div><!--右边第1行结束 -->
              <?php endforeach; endif; else: echo "" ;endif; ?>

          </div><!--end_row -->
        </div><!-- end_right -->
   </div> <!-- 内容结束 -->
</div><!-- End_Events -->

<div class="container"> <!-- Products -->

  <div class="row r_hright"><!--横线开始 -->
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 e_text1">
      <img src="http://www.red-model.cn/template/default/images/r_tu.jpg">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right e_text1 em">
       <a href="/newslist/1.html">
          <img src="http://www.red-model.cn/template/default/images/e_text2.jpg" ><span>more>></span>
       </a>
    </div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 e_text_hx"></div>
  </div> <!--横线结束 -->
  <div class="row r_top_g">
    <?php if(is_array($productRes) || $productRes instanceof \think\Collection || $productRes instanceof \think\Paginator): $i = 0; $__LIST__ = $productRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$pro): $mod = ($i % 2 );++$i;?>
    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
        <div class="r_tb">  
          <img src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $pro['img']; ?>" class="img-responsive center-block"  />
        </div>
    </div>
   <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>

</div><!-- End_Products -->

<!-- bottom -->
<div class="container-fluid bottom_bc" style="padding-left:0px; padding-right:0px;">
    <div class="container">
        <div class="row"><!-- 大屏显示开始 -->

          <?php if(is_array($bottomRes) || $bottomRes instanceof \think\Collection || $bottomRes instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bott): $mod = ($i % 2 );++$i;if($bott['sort'] == 1): ?>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 bt_text ">
                <dl class="row bt_zhx">
                  <dt class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><a href="<?php echo $bott['bottom_url']; ?>"><?php echo $bott['bottom_name']; ?></a></dt>
                  <?php if(is_array($bottomRe) || $bottomRe instanceof \think\Collection || $bottomRe instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$botto): $mod = ($i % 2 );++$i;if($botto['bottom_id'] == $bott['id']): ?>
                  <dd class="col-lg-6 col-md-6 col-sm-6 col-xs-6"><a href="<?php echo $botto['bo_url']; ?>"><?php echo $botto['bo_name']; ?></a></dd>
                  <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </div>
           <?php else: ?>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bt_text">
                 <dl class="bt_zhx">
                  <dt><a href="<?php echo $bott['bottom_url']; ?>"><?php echo $bott['bottom_name']; ?></a></dt>
                  <?php if(is_array($bottomRe) || $bottomRe instanceof \think\Collection || $bottomRe instanceof \think\Paginator): $i = 0; $__LIST__ = $bottomRe;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$botto): $mod = ($i % 2 );++$i;if($botto['bottom_id'] == $bott['id']): ?>
                  <dd><a href="<?php echo $botto['bo_url']; ?>"><?php echo $botto['bo_name']; ?></a></dd>
                  <?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </dl>
            </div>
            <?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div><!-- 大屏显示结束 -->
    </div>
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bt_sjm">
                <img src="http://www.red-model.cn/template/default/images/bottom.png" class="img-responsive">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  bottom_text">
                <?php echo $confs['address']; ?><br/><?php echo $confs['c_mail']; ?><?php echo $confs['web_address']; ?>
            </div>
        </div>
    </div>   
    <div class="bottom_hx hidden-xs" style="padding-left:0px;"></div> 
    <!-- 手机版底部 -->
    <div class="container visible-xs">
      <div class="row bo_bc">
        <div class="col-xs-12">
          Opvision Technology Co.,Ltd 16192 Coastal Hwy Lewes,DE 19958, USA<br/>
           Website:www.opvisioncom.com
        </div>
      </div>
      <div class="row bo_bca">
        <div class="col-xs-3 language"><a href="#">русский</a></div>
        <div class="col-xs-3 language"><a href="#">Español</a></div>
        <div class="col-xs-3 language"><a href="#">Français</a></div>
        <div class="col-xs-3 language"><a href="#">中文</a></div>
      </div>
    </div>
</div>
<!-- End_bottom -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://www.red-model.cn/template/default/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://www.red-model.cn/template/default/js/bootstrap.min.js"></script>
    <script src="http://www.red-model.cn/template/default/js/tiao.js"></script>
  </body>
</html>