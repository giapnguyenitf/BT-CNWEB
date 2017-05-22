<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../public/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">

  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-primary" id="register-box">
            <div class="panel-heading">
              <h4 style="text-align:center">Register</h4>
            </div>
            <div class="panel-body">
              <form class="form-group" name="register_form" action="../controllers/register.php" method="post">
                <input class="form-control" type="text" name="username" value="" placeholder="Username..">
                <input class="form-control" type="password" name="password" value="" placeholder="Password..">
                <input class="form-control" type="password" name="confirm_password" value="" placeholder="Confirm Password..">
                <input class="form-control btn btn-primary" type="submit" name="bt_submit" value="Register">
              </form>
            </div>
            <div class="panel-footer">
              <p>Bạn đã có tài khoản? <a href="login.php">Login now</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../../public/js/jquery-3.2.1.min.js"></script>
    <script src="../../public/js/bootstrap.min.js"></script>
  </body>
</html>
