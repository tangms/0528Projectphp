<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>金融借贷</title>
  <!-- 引入bootstrp样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <!-- 引入自己的样式 -->
  <link rel="stylesheet" href="./dist/css/minCss/index.min.css">
</head>

<body>
  <!-- 头部 -->
  <?php
    require_once('./header.php')
  ?>
  <!-- banner图 -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- 圆点 -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./images/banner01.jpg" alt="第一张图">
      </div>
      <div class="item">
        <img src="./images/banner02.jpg" alt="第二张图">
      </div>
    </div>

    <!-- 左右按钮 -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- 投资 -->
  <div class="filer container">
    <div class="row">
      <div class="col-md-4">
        <h3>投资理财</h3>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益</p>
      </div>
      <div class="col-md-4">
        <h3>投资理财</h3>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
      </div>
      <div class="col-md-4">
        <h3>投资理财</h3>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
      </div>

    </div>
  </div>

  <!-- 咨询列表 -->
  <div class="panel panel-default container">
    <!-- 标题 -->
    <div class="panel-heading clearfix">
      <h2 class="pull-left">进行中借款</h2>
      <a href="#" class="pull-right"> 进入投资列表 </a>
    </div>

    <!-- Table -->
    <table class="table table-hover">
      <thead>

        <tr>
          <th>借款人</th>
          <th class="give">借款标题</th>
          <th>年利率</th>
          <th>金额</th>
          <th class="give">还款方式</th>
          <th>进度</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td> 张三</td>
          <td class="give">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2,000.00</td>
          <td class="give">按月分期还款</td>
          <td> 78.00%</td>
          <td><button type="button" class=" btn-sm btn btn-danger">查看</button></td>
        </tr>
        <tr>
          <td> 王五</td>
          <td class="give">江湖救急，借100吃饭 </td>
          <td> 12.00%</td>
          <td> 100.00</td>
          <td class="give"> 按月到期还款 </td>
          <td>100.00%/td>
          <td><button type="button" class=" btn-sm btn btn-danger">查看</button></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- 咨询具体列表 -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <!-- 标题 -->
          <div class="panel-heading clearfix">
            <h2 class="pull-left">企业最新资讯</h2>
            <a href="#" class="pull-right"> 更多资讯 </a>
          </div>

          <!-- Table -->
          <ul>
            <li>
              <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
            </li>
            <li>
              <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
            </li>
            <li>
              <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
          <div class="panel panel-default">
            <!-- 标题 -->
            <div class="panel-heading clearfix">
              <h2 class="pull-left">用户反馈</h2>
              <a href="#" class="pull-right"> 更多资讯 </a>
            </div>
  
            <!-- Table -->
            <ul>
              <li>
                <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right ">发表日期：2015-03-23</span></a></p>
              </li>
              <li>
                <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
              </li>
              <li>
                <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </div>
<!-- 第二个列表 -->
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="panel panel-default">
          <!-- 标题 -->
          <div class="panel-heading clearfix">
            <h2 class="pull-left">理财经验</h2>
            <a href="#" class="pull-right"> 更多资讯 </a>
          </div>

          <!-- Table -->
          <ul>
            <li>
              <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
            </li>
            <li>
              <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
            </li>
            <li>
              <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-6">
          <div class="panel panel-default">
            <!-- 标题 -->
            <div class="panel-heading clearfix">
              <h2 class="pull-left">活动分享</h2>
              <a href="#" class="pull-right"> 更多资讯 </a>
            </div>
  
            <!-- Table -->
            <ul>
              <li>
                <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right ">发表日期：2015-03-23</span></a></p>
              </li>
              <li>
                <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
              </li>
              <li>
                <p class="clearfix"><a class="shea">央视力挺互联网金融 <span class="pull-right">发表日期：2015-03-23</span></a></p>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </div>
  <?php 
  require_once('./footer.php');
  ?>

 


  <!-- 引入jquery -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- 引入bootstrap样式 -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- 引入自己的js -->
  <script src="./dist/js/php.min.js"></script>
</body>

</html>