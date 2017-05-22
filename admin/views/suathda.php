<!DOCTYPE html>
<html>
  <head>
    <title>Sửa thực hiện đồ án</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Sửa thực hiện đồ án</h1>
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
                    <select class="form-control" id="TheLoai" name="TheLoai">
                      <option value="">---Sinh viên---</option>
                      <option>Huỳnh Hoàng Phúc</option>
                      <option>Nguyễn Văn Giáp</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="TheLoai" name="TheLoai">
                      <option value="">---Đề tài---</option>
                      <option>Xây dựng ứng dụng gõ tắt</option>
                      <option>Làm xe điều khiển từ xa</option>
                    </select>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" value="Sửa thực hiện đồ án">
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
