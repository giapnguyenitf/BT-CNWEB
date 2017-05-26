<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <script language="javascript" src="../../public/js/jquery-3.2.1.min.js"></script>
    <script language="javascript" src="../../public/js/bootstrap.min.js"></script>

    </script>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary" id="login-box">
            <div class="panel-heading">
              <h4 style="text-align:center">LOGIN</h4>
            </div>
            <div class="panel-body">
              <form class="form-group" action="../controllers/login.php" method="post">
                <input class="form-control" id="username" type="text" name="username" value="" placeholder="Username.." required="Username is required">
                <input class="form-control" id="password" type="password" name="password" value="" placeholder="Password.." required="Password is required!">
                <input type="checkbox" name="remember_pass" id="remember_pass" value="1"> Nhớ mật khẩu?<br>
                <input class="form-control btn btn-primary" type="submit" name="bt_submit" value="Login">
              </form>
            </div>
            <div class="panel-footer">
              <p>Bạn chưa có tài khoản? <a href="register.php">Register</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </body>
</html>
