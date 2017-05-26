<!DOCTYPE html>
<html>
  <head>
    <title>Dash board</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="public/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="public/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="public/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="public/css/style.css">
    <script language="javascript" src="public/js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
  <div class="container">
      <h1 id="title_welcome">CHÀO MỪNG BẠN TỚI HỆ THỐNG QUẢN LÝ ĐỒ ÁN SINH VIÊN</h1>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-primary" id="login-box">
          <div class="panel-heading">
            <h4 style="text-align:center">LOGIN</h4>
          </div>
          <div class="panel-body">
            <form class="form-group" action="site/controllers/login.php" method="post">
              <input class="form-control" id="username" type="text" name="username" value="" placeholder="Username.." required="Username is required">
              <input class="form-control" id="password" type="password" name="password" value="" placeholder="Password.." required="Password is required!">
              <input type="checkbox" name="remember_pass" value=""> Nhớ mật khẩu?<br>
              <input class="form-control btn btn-primary" type="submit" name="bt_submit" value="Login">
            </form>
          </div>
          <div class="panel-footer">
            <p>Bạn chưa có tài khoản? <a href="site/views/register.php">Register</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
</html>
