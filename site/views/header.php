<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>

  <link rel="stylesheet" href="../../public/css/index.css">
  <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
  <div class="container header">
    <div class="row _header_">
      <div class="col-md-4">
        <div class="logo">
          <a href="http://localhost/BT-CNWEB/site/views/index.php"><img src="../../public/images/logo.png" alt="Project DUT" /></a>
        </div>
      </div>

      <div class="col-md-5 ">
        <div class="row">
          <div class="col-md-9">
            <div id="custom-search-input">
              <div class="input-group col-md-12">
                <form action="/search" method="post" style="display: inherit;">
                  <input type="text" class="form-control input-lg" style="height:40px;font-size:14px;" placeholder="Tìm kiếm..." name="q" />
                  <span class="input-group-btn">
                    <button class="btn btn-default btn-lg" style="height:40px;" type="button">
                      <i class="glyphicon glyphicon-search" ></i>
                    </button>
                  </span>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-right">
        <div id="log-in">
          <a href="login.php" style="float: left">Đăng nhập </a>
          <p style="float: left; margin: auto 5px">|</p>
          <a href="register.php" style="float: left"> Đăng ký</a>
        </div>
      </div>
    </div>
  </div>
    <div class="container menu-nav">
      <ul class="topnav" id="myTopnav">
        <li><a href="http://localhost/BT-CNWEB/site/views/index.php">Trang chủ</a></li>
        <li><a href="http://scv.udn.vn/dhdn/trdhbk">Giảng viên</a></li>
        <li><a href="https://www.facebook.com/groups/itfdut">Sinh viên</a></li>
        <li><a href="http://dut.udn.vn/Tintuc/Tintucds/gid/all">Tin tức</a></li>
        <li><a href="https://www.facebook.com/tichuotuglyboy">Liên hệ</a></li>

        <li class="icon">
          <a href="javascript:void(0);" style="font-size:15px;" onclick="myFunction()">☰</a>
        </li>
      </ul>

      <script>
      function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
          x.className += " responsive";
        } else {
          x.className = "topnav";
        }
      }
      </script>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../../public/vendor/jquery/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../../public/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../public/js/index.js"></script>
  </body>
  </html>
