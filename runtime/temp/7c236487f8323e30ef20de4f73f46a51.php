<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:85:"C:\Users\admin\Desktop\tp5funtrue\public/../application/index\view\article\index.html";i:1582641825;s:68:"C:\Users\admin\Desktop\tp5funtrue\application\index\view\layout.html";i:1582534198;s:75:"C:\Users\admin\Desktop\tp5funtrue\application\index\view\common\header.html";i:1582642600;s:75:"C:\Users\admin\Desktop\tp5funtrue\application\index\view\common\footer.html";i:1582532910;}*/ ?>
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
 
<link href="/static/home/css/common.css" rel="stylesheet">
<link href="/static/home/css/article.css" rel="stylesheet">
<div class="warp">
    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title"><?php echo $find['title']; ?></h1>
        <p class="blog-post-meta"><?php echo date('m',$find['pubtime']); ?>月<?php echo date('d',$find['pubtime']); ?>日 <?php echo date('H:i',$find['pubtime']); ?> by <a href="#"><?php echo $find['author']; ?></a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm-8 blog-main">
          <div class="blog-post">
           <?php echo htmlspecialchars_decode($find['content']); ?>

          </div>



          <nav>
            <ul class="pager">
              <?php if($prev != ''): ?>
              <li><a href="http://www.tpfuntrue.com/index.php/index/Article/index/category/<?php echo $id; ?>/cate/<?php echo $cate; ?>/article/<?php echo $prev; ?>">上一篇</a></li>
              <?php endif; if($next != ''): ?>
              <li><a href="http://www.tpfuntrue.com/index.php/index/Article/index/category/<?php echo $id; ?>/cate/<?php echo $cate; ?>/article/<?php echo $next; ?>">下一篇</a></li>
                <?php endif; ?>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module">
            <h4>推荐文章</h4>
            <ol class="list-unstyled">
              <li><a href="#">网络专车能这么管吗？</a></li>
              <li><a href="#">有些事情，罗永浩没有在发布会上告诉你</a></li>
              <li><a href="#">离开索尼的 VAIO 要用什么产品走出日本</a></li>
            </ol>
          </div>

        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

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
