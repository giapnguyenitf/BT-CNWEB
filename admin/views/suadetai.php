<!DOCTYPE html>
<html>
  <head>
    <title>Sửa đề tài</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Sửa đề tài</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 my-input-form">
          <div class="login-panel panel panel-default">
            <div class="panel-body">
              <form action="#" method="post">
                <fieldset>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="tenDeTai" name="ten-de-tai" placeholder="Tên đề tài" type="text"/>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="TheLoai" name="TheLoai"><option value="">---Đồ án---</option>
                      <option>Cơ sở ngành mạng</option>
                      <option>Phân tích thiết kế giải thuật</option>
                      <option>Lập trình hệ thống</option>
                    </select>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" value="Sửa đề tài">
                    <input type="button" class="btn btn-lg my-button" value="Reset">
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
