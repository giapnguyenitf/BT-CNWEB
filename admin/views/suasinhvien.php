<!DOCTYPE html>
<html>
  <head>
    <title>Sửa sinh viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Sửa sinh viên</h1>
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
                    <input autofocus="autofocus" class="form-control" id="mssv" name="mssv" placeholder="MSSV" type="text"/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="hoTen" name="ho-ten" placeholder="Họ tên" type="text"/>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="TheLoai" name="TheLoai">
                      <option value="">---Giới tính---</option>
                      <option>Nam</option>
                      <option>Nữ</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                  <script type="text/javascript">
                  $(function () {
                    $('#datetimepicker1').datetimepicker();
                  });
                  </script>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="email" name="email" placeholder="Email" type="text"/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="sdt" name="sdt" placeholder="Số điện thoại" type="text"/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="lop" name="lop" placeholder="Lớp" type="text"/>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" value="Sửa sinh viên">
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
