<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:83:"C:\Users\admin\Desktop\tp5funtrue\public/../application/index\view\index\index.html";i:1582639884;s:68:"C:\Users\admin\Desktop\tp5funtrue\application\index\view\layout.html";i:1582534198;s:75:"C:\Users\admin\Desktop\tp5funtrue\application\index\view\common\header.html";i:1582642600;s:75:"C:\Users\admin\Desktop\tp5funtrue\application\index\view\common\footer.html";i:1582532910;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>未来资讯</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/home/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="/static/home/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/static/home/css/common.css" rel="stylesheet">
    <link href="/static/home/css/article.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets//static/home/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- <script src="../../assets//static/home/js/ie-emulation-modes-warning.js"></script> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">未来资讯</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
           <!--  <li class="active"><a href="">科技</a></li>
            <li><a href="#">文化</a></li>
            <li><a href="#">生活</a></li> -->

            <?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <li class="<?php if($id == $vo['cid']): ?>active<?php endif; ?>"><a href="http://www.tpfuntrue.com<?php echo $name; ?>/index/index/index/category/<?php echo $vo['cid']; ?>"><?php echo $vo['cname']; ?></a></li>

            <?php endforeach; endif; else: echo "" ;endif; ?>
             
            }
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">关于我们 <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about.html">平台简介</a></li>
                <li><a href="#">联系方式</a></li>
              </ul>
            </li>
          </ul>

          <form class="header-search pull-right hidden-sm hidden-xs" action="<?php echo url('Index/Search/index'); ?>" method="post">
            <button class="btn btn-link" type="submit"><span class="sr-only">搜索</span><span class="glyphicon glyphicon-search"></span></button>
            <input type="text" value="" class="form-control" placeholder="输入关键字搜索" name="keywork" id="searchBox" style="width: 180px;">
          </form>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
 

    <div class="container theme-showcase" role="main">

      <p>
        <a href="http://www.tpfuntrue.com/index.php/index/Index/index/category/<?php echo $id; ?>/cate/0"><button class="btn btn-sm btn-default <?php if($cate == 0): ?>active<?php endif; ?>" type="button">全部</button></a>
        <!-- <button class="btn btn-sm btn-default" type="button">互联网</button>
        <button class="btn btn-sm btn-default" type="button">数码</button>
        <button class="btn btn-sm btn-default" type="button">IT</button>
        <button class="btn btn-sm btn-default" type="button">电信</button> -->
        <?php if(is_array($meu) || $meu instanceof \think\Collection || $meu instanceof \think\Paginator): $i = 0; $__LIST__ = $meu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>


        <a href="http://www.tpfuntrue.com/index.php/index/Index/index/category/<?php echo $id; ?>/cate/<?php echo $vo['cid']; ?>"><button class="btn btn-sm btn-default <?php if($cate == $vo['cid']): ?>active<?php endif; ?>" type="button"><?php echo $vo['cname']; ?></button></a>
        <?php endforeach; endif; else: echo "" ;endif; ?>
      </p>

      <div class="row all-event-list mt20">
      <?php if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="http://www.tpfuntrue.com/index.php/index/Article/index/category/<?php echo $id; ?>/cate/<?php echo $cate; ?>/article/<?php echo $vo['aid']; ?>"><img class="widget-event__banner lazy" src="/static/home/images/article_06.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="http://www.tpfuntrue.com/index.php/index/Article/index/category/<?php echo $id; ?>/cate/<?php echo $cate; ?>/article/<?php echo $vo['aid']; ?>"><?php echo $vo['title']; ?></a></h2>
              <ul class="widget-event__meta">
                <li>时间：<?php echo date('Y-m-d h:i:s',$vo['pubtime']); ?></li>
              </ul>
              <a class="btn btn-default btn-sm" href="http://www.tpfuntrue.com/index.php/index/Article/index/category/<?php echo $id; ?>/cate/<?php echo $cate; ?>/article/<?php echo $vo['aid']; ?>">查看</a>
            </div>
          </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
       <!--  <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_02.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">2015中国旅游极客开发大赛</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_03.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高升云道—云时代的智能硬件和物联网创业</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_04.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">数据重构未来 - 七牛·数据时代峰会</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_01.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高速+智能→未来</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_02.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">2015中国旅游极客开发大赛</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_03.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高升云道—云时代的智能硬件和物联网创业</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_04.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">数据重构未来 - 七牛·数据时代峰会</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_01.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高速+智能→未来</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_02.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">2015中国旅游极客开发大赛</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_03.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高升云道—云时代的智能硬件和物联网创业</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_04.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">数据重构未来 - 七牛·数据时代峰会</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_01.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高速+智能→未来</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_02.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">2015中国旅游极客开发大赛</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_03.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">高升云道—云时代的智能硬件和物联网创业</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-12">
          <div class="widget-event">
            <a href="#"><img class="widget-event__banner lazy" src="/static/home/images/article_04.png"></a>
            <div class="widget-event__info">
              <h2 class="h4 title"><a href="#">数据重构未来 - 七牛·数据时代峰会</a></h2>
              <ul class="widget-event__meta">
                <li>时间：2015-09-19</li>
              </ul>
              <a class="btn btn-default btn-sm" href="#">查看</a>
            </div>
          </div>
        </div> -->



      </div>


      <div class="text-center">

        <?php echo $page; ?>
       <!--  <ul class="pagination">
          <li class="active"><a href="javascript:void(0);">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="next"><a href="#" rel="next">下一页</a></li>
        </ul> -->
      </div>


    </div>


 
<footer id="footer">
      <div class="container">
        <div class="row hidden-xs">
          <dl class="col-sm-2 site-link">
            <dt>关于我们</dt>
            <dd><a href="#">平台简介</a></dd>
            <dd><a href="#">联系方式</a></dd>
          </dl>
          <dl class="col-sm-2 site-link">
            <dt>帮助中心</dt>
            <dd><a href="#">常见问题</a></dd>
            <dd><a href="#">服务条款</a></dd>
          </dl>
          <dl class="col-sm-2 site-link">
            <dt>友情链接</dt>
            <dd><a href="#">腾讯网</a></dd>
            <dd><a href="#">网易新闻</a></dd>
            <dd><a href="#">凤凰网</a></dd>
          </dl>
          <dl class="col-sm-2 site-link">
            <dt>关注我们</dt>
            <dd><a href="#"><img src="/static/home/images/qrcode_weixin.png" alt=""/></a></dd>
          </dl>

        </div>
        <div class="copyright">
          Copyright &copy; 2015. <a rel="nofollow" href="http://www.miibeian.gov.cn/">粤ICP备15000000号-2</a>
        </div>
      </div>
    </footer>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.js"></script>
    <script src="/static/home/js/bootstrap.min.js"></script>
    <!-- <script src="/static/home/js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="../../assets//static/home/js/ie10-viewport-bug-workaround.js"></script> -->
  </body>
</html>
