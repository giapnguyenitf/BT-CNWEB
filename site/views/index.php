<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hệ thống quản lý đồ án môn học | Trường Đại học Bách khoa Đà Nẵng</title>

  <link rel="stylesheet" href="../../public/css/index.css">
  <link href="../../public/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../public/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<body>
  <div class="container header">
    <div class="row _header_">
      <div class="col-md-4">
        <div class="logo">
          <a href="#"><img src="../../public/images/logo.png" alt="Project DUT" /></a>
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

          <a href="#" data-toggle="modal" data-target="#myModal">Đăng nhập</a>

        </div>
      </div>
    </div>


  </div>
  <div class="_modal_">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h5 class="modal-title" text-align="center" style="color: #ffffff">ĐĂNG NHẬP</h5>
          </div>
          <div class="modal-body">
            <form action="/login" method="post">
              <div class="form-group">
                <label class="sr-only" for="exampleInputEmail3">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="username">
              </div>

              <div class="form-group">
                <label class="sr-only" for="exampleInputPassword3">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password" name="password">
              </div>

              <div class="checkbox">
                <label>
                  <input type="checkbox"> Duy trì đăng nhập?
                </label>
              </div>
              <button type="submit" class="btn btn-info">ĐĂNG NHẬP</button>
            </form>
          </div>
          <!-- <div class="modal-footer">
          <p>Bạn chưa có tài khoản? Mời đăng ký <a href="#">TẠI ĐÂY</a> </p>
        </div> -->
      </div>

    </div>
  </div>


  <div class="container menu-nav">
    <ul class="topnav" id="myTopnav">
      <li><a href="/">Trang chủ</a></li>
      <li><a href="/exlist">Giảng viên</a></li>
      <li><a href="/ebook">Sinh viên</a></li>
      <li><a href="/newslist">Tin tức</a></li>
      <li><a href="/contact">Liên hệ</a></li>

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

  <div class="container">
    <div class="marquee">
      <marquee width="100%" style="color:#14928e;"> Chào mừng bạn đến với hệ thống quản lý đồ án trường Đại học Bách khoa Đà Nẵng!</marquee>
    </div>
  </div>


  <div class="container">
    <div class="col-md-7 Carousel">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>

        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="max-height: 300px;">
          <div class="item active">
            <img src="../../public/images/slide1.png">
          </div>
          <div class="item">
            <img src="../../public/images/slide2.png">
          </div>
          <div class="item">
            <img src="../../public/images/slide3.png">
          </div>
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row newsfeed">
        <div class="col-md-6 newsfeed-left">
          <div class="newsfeed-left img-news img-newsfeed">
            <a href="/readnews/ngu-vkl.58332a6b17485704d830269d"><img src="../../public/images/intro1.png"></a>
          </div>
        </div>
        <div class="col-md-6 newsfeed-right">
          <a href="#"><p>Trường Đại học Bách khoa Đà Nẵng</p></a>
          <small>Trường Đại học Bách khoa Đà Nẵng (tên tiếng Anh: University of Science and Technology - The University of Da Nang) - tiền thân là ...<a href="#"> Xem thêm>></a></small>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row newsfeed">
        <div class="col-md-6 newsfeed-left">
          <div class="newsfeed-left img-news img-newsfeed">
            <a href="/readnews/ngu-vkl.58332a6b17485704d830269d"><img src="../../public/images/intro2.png"></a>
          </div>
        </div>
        <div class="col-md-6 newsfeed-right">
          <a href="#"><p>Nghiên cứu khoa học</p></a>
          <small>Trường Đại học Bách khoa Đà Nẵng là một trong những trung tâm nghiên cứu khoa học lớn và có năng lực trong ...<a href="#"> Xem thêm>></a></small>
        </div>
      </div>
    </div>
  </div>


  <div class="container news-content">
    <div class="row">
      <div class="col-md-12">
        <h4><a href="#" style="text-decoration: none;color: #14928e;"><img src="../../public/images/newspaper.png">  TIN TỨC</a></h4>
        <hr>
      </div>
    </div>

    <div class="col-md-7" style="max-height: 300px;">
      <div class="img-news">
        <a href="#"><img src="http://img.tintuc.vietgiaitri.com/2013/10/13/hot-girl-model-queen-korea-lee-ga-na-ben-xe-hop-ebf912.jpg" alt="Đáng suy ngẫm"></a>
      </div>
      <div class="ipnews">
        <p><a href="#">Đáng suy ngẫm</a></p>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row newsfeed">
        <div class="newsfeed-left">
          <div class="newsfeed-left img-news img-newsfeed">
            <a href="/readnews/ngu-vkl.58332a6b17485704d830269d"><img src="http://media.tintuc.vn/uploads/medias/2015/04/29/550x500/ngay-ngat-ve-dep-sieu-de-thuong-cua-hot-girl-thai-lan-tren-instagram-bb-baaac0yQRQ.jpg"></a>
          </div>
        </div>
        <div class="newsfeed-right">
          <a href="#"><p>ngu vkl</p></a>
          <small>nguvkl</small>
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="row newsfeed">
        <div class="newsfeed-left">
          <div class="newsfeed-left img-news img-newsfeed">
            <a href="/readnews/ngu-vkl.58332a6b17485704d830269d"><img src="http://media.tintuc.vn/uploads/medias/2015/04/29/550x500/ngay-ngat-ve-dep-sieu-de-thuong-cua-hot-girl-thai-lan-tren-instagram-bb-baaac0yQRQ.jpg"></a>
          </div>
        </div>
        <div class="newsfeed-right">
          <a href="#"><p>ngu vkl</p></a>
          <small>nguvkl</small>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h4><a href="/ebook" style="color: #14928e;text-decoration: none;"><img src="../../public/images/open-book.png"> MẪU BÁO CÁO ĐỒ ÁN</a></h4>
      <hr>
    </div>
  </div>
  <div class="row">
  </div><div class="row">
    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án P.Tích & T.Kế H.Thống thông tin</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án Giải thuật & Lập trình</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án Lập trình HT & Vi điều khiển</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án Cơ sở ngành mạng</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án TK Hệ thống điện tử ô tô</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án Thiết kế ôtô</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án Thiết kế Động cơ đốt trong</a></p></div>
    </div>

    <div class="col-md-3">
      <div class="item1"><a href="#"><img class="img-responsive" src="../../public/images/doc.png"></a></div>
      <div class="item1-title doc-title"><p><a href="#">Đồ án Truyền động thuỷ khí động lực</a></p></div>
    </div>
  </div>

</div>
<div class="container">
  <div class="category-header">
    <h4 style="color: #14928e;"><img src="../../public/images/list.png"> DANH MỤC</h4>
  </div>
  <div class="category">
    <div class="row">
      <div class="exam">
        <div class="col-md-3">
          <div class="menu-full-item">
            <h4 class="menu-item-title">
              <span>GIẢNG VIÊN TIÊU BIỂU</span>
            </h4>
            <ul class="menu-item-ul">
              <li><a href="/exlist?subject=1&level=2" title="Phan Thanh Bình">Phan Thanh Bình</a></li>
              <li><a href="/exlist?subject=2&level=2" title="Phan Huy Khánh">Phan Huy Khánh</a></li>
              <li><a href="/exlist?subject=0&level=2" title="Mai Văn Hà">Mai Văn Hà</a></li>
              <li><a href="/exlist?subject=3&level=2" title="Ninh Khánh Duy">Ninh Khánh Duy</a></li>
              <li><a href="/exlist?subject=4&level=2" title="Phạm Minh Tuấn">Phạm Minh Tuấn</a></li>
              <li><a href="/exlist?subject=5&level=2" title="Phan Thị Mỹ Hạnh">Phan Thị Mỹ Hạnh</a></li>
              <li><a href="/exlist?subject=6&level=2" title="Trần Hồ Thuỷ Tiên">Trần Hồ Thuỷ Tiên</a></li>
              <li><a href="/exlist?subject=7&level=2" title="Nguyễn Thế Xuân Ly">Nguyễn Thế Xuân Ly</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3">
          <div class="menu-full-item">
            <h4 class="menu-item-title">
              <span>SINH VIÊN TIÊU BIỂU</span>
            </h4>
            <ul class="menu-item-ul">
              <li><a href="/exlist?subject=0&level=1" title="Huỳnh Hoàng Phúc">Huỳnh Hoàng Phúc</a></li>
              <li><a href="/exlist?subject=1&level=1" title="Nguyễn Văn Giáp">Nguyễn Văn Giáp</a></li>
              <li><a href="/exlist?subject=2&level=1" title="Phan Thanh An">Phan Thanh An</a></li>
              <li><a href="/exlist?subject=3&level=1" title="Trương Trường Đạt">Trương Trường Đạt</a></li>
              <li><a href="/exlist?subject=4&level=1" title="Đỗ Đức Huy">Đỗ Đức Huy</a></li>
              <li><a href="/exlist?subject=5&level=1" title="Nguyễn Quốc Anh">Nguyễn Quốc Anh</a></li>
              <li><a href="/exlist?subject=6&level=1" title="Lê Quang Biên">Lê Quang Biên</a></li>
              <li><a href="/exlist?subject=7&level=1" title="Lê Quang Tam">Lê Quang Tam</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-6">
          <div class="menu-full-item">
            <h4 class="menu-item-title">
              <span>ĐỀ TÀI TIÊU BIỂU</span>
            </h4>
            <ul class="menu-item-ul">
              <li><a href="/exlist?subject=0&level=0" title="Ứng dụng Socket trong Java xây dựng chương trình mô phỏng dịch vụ Telnet.">Ứng dụng Socket trong Java xây dựng chương trình mô phỏng dịch vụ Telnet.</a></li>
              <li><a href="/exlist?subject=1&level=0" title="Phát triển tiện ích lọc gói tin dựa trên IP header">Phát triển tiện ích lọc gói tin dựa trên IP header</a></li>
              <li><a href="/exlist?subject=2&level=0" title="Tìm hiểu giao thức SMTP và POP3. Xây dựng Mail Server">Tìm hiểu giao thức SMTP và POP3. Xây dựng Mail Server</a></li>
              <li><a href="/exlist?subject=3&level=0" title="Mô phỏng thuật toán nhà băng của Dijsktra để tránh Deadlock">Mô phỏng thuật toán nhà băng của Dijsktra để tránh Deadlock</a></li>
              <li><a href="/exlist?subject=4&level=0" title="Xây dựng chƣơng trình mô phỏng các giải thuật lập lịch cho CPU">Xây dựng chƣơng trình mô phỏng các giải thuật lập lịch cho CPU</a></li>
              <li><a href="/exlist?subject=5&level=0" title="Bài toán năm triết gia ăn tối">Bài toán năm triết gia ăn tối</a></li>
              <li><a href="/exlist?subject=6&level=0" title="Xây dựng chương trình đọc thông tin đĩa cứng">Xây dựng chương trình đọc thông tin đĩa cứng</a></li>
              <li><a href="/exlist?subject=7&level=0" title="Tìm hiểu hệ thống File trong các hệ điều hành hiện đại">Tìm hiểu hệ thống File trong các hệ điều hành hiện đại</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">

  <footer>
    <div class="container">
      <div class="row">
        <div class=" col-md-4 Copyright">
          <div class="col_bot_left">
            <h4>THÔNG TIN</h4>
            <p style="color:#ffffff">&copy Copyright: GT Corp.</p>
            <a href="#">RSS</a> |
            <a href="#">HOME</a> |
            <a href="#">CONTACT</a>
          </div>
        </div>

        <div class="col-md-4 contacts">
          <div class="col-bot-mid">
            <h4>CONTACT</h4>
            <ul class="social-network social-circle">
              <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
              <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-4 freeacademy">
          <div class="col_bot_right">
            <h4>FREE ACADEMY</h4>
            <a href="/">Trang chủ</a><br>
            <a href="#">Giảng viên</a><br>
            <a href="#">Sinh viên</a><br>
            <a href="#">Tin tức</a><br>
            <a href="#">Liên hệ</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 info-webpage">
          <h5 style="text-align:center;">CƠ QUAN CHỦ QUẢN</h5>
          <p style="text-align:center;">Trường đại học BÁCH KHOA-Đại học ĐÀ NẴNG<br>Địa chỉ: 54 Nguyễn Lương Bằng-Quận Liên Chiểu-Thành phố Đà Nẵng</p>
        </div>
      </div>
    </footer>

  </div>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="../../public/vendor/jquery/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="../../public/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../../public/js/index.js"></script>
</body>
</html>
