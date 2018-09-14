<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>金融借贷</title>
  <!-- 引入bootstrp样式 -->
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrapValidator/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="./dist/css/minCss/template.min.css">
  <!-- 引入自己的样式 -->
  <link rel="stylesheet" href="./dist/css/minCss/reglogin.min.css">
</head>

<body>
  <!-- 头部 -->
  <?php
    require_once('./topnav.php')
  ?>
  <!-- 内容开始 -->
  <!-- 第二个导航栏 -->
  <nav class="navbar navbar-default">
    <div class="container navbox">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><img src="./images/logo.png" alt=""></a>
      </div>
      <span class="usereg">用户注册</span>
      <!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <!-- 内容结束 -->

  <div class="container">
    <div class="panel panel-default">
      <div class="panel-heading">用户注册</div>
      <div class="panel-body">
        <!-- 表单验证 -->
        <form class="form-horizontal" id="formregin">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="username" placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">密码</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name="password" placeholder="请输入密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">确认密码</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" name="checkpassword" placeholder="请确认密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">手机号码</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="phone" placeholder="请输入手机号">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-3 control-label">邮箱</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" name="email" placeholder="请输入邮箱">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
              <button type="submit" class="btn btn-success">同意协议并注册</button>
            </div>
          </div>
        </form>

      </div>
    </div>
  </div>
  <!-- 尾部 -->
  <?php 
  require_once('./footer.php');
  ?>

  <!-- 引入jquery -->
  <script src="./lib/jquery/jquery.min.js"></script>
  <!-- 引入bootstrap样式 -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./lib/bootstrapValidator/js/bootstrapValidator.min.js"></script>
  <!-- 引入自己的js -->
  <script src="./dist/js/php.min.js"></script>
  <script src="./dist/js/login.min.js"></script>
</body>

</html>