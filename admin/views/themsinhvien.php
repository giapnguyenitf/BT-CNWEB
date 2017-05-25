<!DOCTYPE html>
<html>
  <head>
    <title>Thêm sinh viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Thêm sinh viên</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 my-input-form">
          <div class="login-panel panel panel-default">
            <div class="panel-body">
              <form action="../controllers/add_sv.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="mssv" name="mssv" placeholder="MSSV" type="text" required/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="hoTen" name="hoten" placeholder="Họ tên" type="text"/>
                  </div>

                  <label class="radio-inline">
                    <input  type="radio" id="male" name="male" checked="checked" onclick="checked_male()">Nam
                  </label>
                  <label class="radio-inline">
                    <input  type="radio" id="female" name="female" onclick="checked_female()" >Nữ
                  </label>
                  <input type="hidden" id="gioitinh" name="gioitinh" value="true">
                  <script type="text/javascript">
                    function checked_male(){
                      document.getElementById('male').checked = true;
                      document.getElementById('female').checked=false;
                      document.getElementById('gioitinh').value=true;
                    }

                    function checked_female(){
                      document.getElementById('male').checked = false;
                      document.getElementById('female').checked=true;
                      document.getElementById('gioitinh').value=false;
                    }
                  </script>

                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                      <input type='text' name="ngaysinh" class="form-control" />
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="email" name="email" placeholder="Email" type="email"/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="sdt" name="sdt" placeholder="Số điện thoại" type="text"/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control" id="lop" name="lop" placeholder="Lớp" type="text"/>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" name="bt_submit" value="Thêm sinh viên">
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
