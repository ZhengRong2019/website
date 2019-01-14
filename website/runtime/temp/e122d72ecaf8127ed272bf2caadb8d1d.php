<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:34:"./template/default/exhibition.html";i:1543991426;s:63:"E:\phpStudy\PHPTutorial\WWW\zhengrong\template\default\head.htm";i:1544762416;s:63:"E:\phpStudy\PHPTutorial\WWW\zhengrong\template\default\left.htm";i:1543743318;s:63:"E:\phpStudy\PHPTutorial\WWW\zhengrong\template\default\foot.htm";i:1544762750;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title><?php echo $cateEes['title']; ?></title>
    <meta name="keywords" content="<?php echo $cateEes['keywords']; ?>">
    <meta name="description" content="<?php echo $cateEes['description']; ?>">

    <!-- Bootstrap -->
    <link href="http://www.red-model.cn/template/default/css/bootstrap.css" rel="stylesheet">
    <link href="http://www.red-model.cn/template/default/css/dealer.css" rel="stylesheet">
    <link href="http://www.red-model.cn/template/default/css/about.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://www.red-model.cn/template/default/js/html5shiv.min.js"></script>
      <script src="http://www.red-model.cn/template/default/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
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
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner">
    <?php if(is_array($bannerRes) || $bannerRes instanceof \think\Collection || $bannerRes instanceof \think\Paginator): $i = 0; $__LIST__ = $bannerRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ban): $mod = ($i % 2 );++$i;?>
    <img src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $ban['banner_img']; ?>" class="img-responsive"/>
    <?php endforeach; endif; else: echo "" ;endif; ?>
  </div>
</div><!-- 头部结束 -->
<div class="container"><!-- 中间内容 -->
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 position"><!-- 当前位置 -->
      <a href="/" style="font-size:15px; padding-right: 5px;"><li class="iconfont icon-home"></li></a>
      <?php if(is_array($pos) || $pos instanceof \think\Collection || $pos instanceof \think\Paginator): $i = 0; $__LIST__ = $pos;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$po): $mod = ($i % 2 );++$i;?>
      <li><a href="
            <?php if($po['cate_attr'] == 1): ?><?php echo url('index/Cate/index',array('cid'=>$po['id'])); endif; if($po['cate_attr'] == 2): ?><?php echo url('index/Page/index',array('cid'=>$po['id'])); endif; if($po['cate_attr'] == 3): ?><?php echo $po['link']; endif; ?>
        "><?php echo $po['cate_name']; ?></a><i><?php if($i != count($pos)): ?> > <?php endif; ?></i></li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </div><!-- end_当前位置 -->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 Mid_hx"></div>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-left Mid_text">
      <img src="http://www.red-model.cn/template/default/images/tuoy.jpg" class="img-responsive">
      <li><?php echo $cateResa['cate_name']; ?></li>
    </div>
  </div>
  <div class="row nr_top">
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><!-- left -->
          <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <aside class="left_a">
        <nav>
          <ul class="left_b">
            <?php if(is_array($sonCateRes) || $sonCateRes instanceof \think\Collection || $sonCateRes instanceof \think\Paginator): $i = 0; $__LIST__ = $sonCateRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$soncate): $mod = ($i % 2 );++$i;?>
           
              <li <?php if($soncate['id'] == $cid): ?> class="active1" <?php endif; ?>><a href="
                <?php if($soncate['cate_attr'] == 1): ?><?php echo url('index/Cate/index',array('cid'=>$soncate['id'])); endif; if($soncate['cate_attr'] == 2): ?><?php echo url('index/Page/index',array('cid'=>$soncate['id'])); endif; if($soncate['cate_attr'] == 3): ?><?php echo $soncate['link']; endif; ?>
                "><?php echo $soncate['cate_name']; ?></a></li>
          
            <?php endforeach; endif; else: echo "" ;endif; ?>
          </ul> 
        </nav>
      </aside>
  </div>
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
     <img src="http://www.red-model.cn/template/default/images/dealer_tu.jpg" class="img-responsive center-block">
  </div>
</div>
      </div><!-- end_left -->
      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12"><!-- right -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
              <div class="right_text">
               OPVISION is a USA registered company that highly 
               specializes in developing, manufacturing and igitalized video/audio/data transmi<br/>
               OPVISION Technology Company hammers at developing and producing digitalized optic fiber transmission products with high standards and quality
              </div>
              <!-- <div class="right_text1">
                <dt>Selecte Your Locality</dt>
                <dd>
                    <select name="cars">
                    <option value="America">America</option>
                    <option value="America">America</option>
                    <option value="America">America</option>
                    <option value="America">America</option>
                    </select>
                </dd>
              </div> -->
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <img src="http://www.red-model.cn/template/default/images/map.jpg" class="img-responsive center-block">
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right_text2">
               <?php echo $cateResa['cate_name']; ?>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 right_hx"></div>
        </div>
        <div class="row  De_top">

            <?php if(is_array($zhanRes) || $zhanRes instanceof \think\Collection || $zhanRes instanceof \think\Paginator): $i = 0; $__LIST__ = $zhanRes;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$zhan): $mod = ($i % 2 );++$i;?>
            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12 exhi_text"><!-- 第1组 -->
                <img src="http://www.red-model.cn/public/static/admin/uploads/<?php echo $zhan['litpic']; ?>" class="img-responsive center-block">
            </div>
            <div class="col-lg-8 col-md-9 col-sm-9 col-xs-12 exhi_text">
                <dt><?php echo $zha['title']; ?></dt>
                <!-- <dd>OPVISION is a USA registered company that highly specializes in developing, manufacturing and igitalized video/audio/data transmi
                </dd> -->
                <dd>Address：<i><?php echo $zhan['address']; ?></i></dd>
                <dd>Booth Number：<i><?php echo $zhan['boot_number']; ?></i></dd>
                <dd>Date:<i><?php echo $zhan['date']; ?></i></dd>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 exhi_hx"></div><!-- end_第1组 -->
           <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
      </div><!-- end_right -->
  </div>


</div><!-- end_中间内容结束 -->











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
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tiao.js"></script>
  </body>
</html>