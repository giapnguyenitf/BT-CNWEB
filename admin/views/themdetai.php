<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location:../../site/views/login.php");
}
 ?>
<html>
  <head>
    <title>Thêm đề tài</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Thêm đề tài</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-4 col-md-offset-4 my-input-form">
          <div class="login-panel panel panel-default">
            <div class="panel-body">
              <form action="../controllers/add_detai.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control"  name="tendetai" placeholder="Tên đề tài" type="text"/>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="iddoan">
                      <option value="2">Đồ án Giải thuật &#38; Lập trình</option>
                      <option value="3">Đồ án Lập trình HT &#38; Vi điều khiển</option>
                      <option value="4">Đồ án P.Tích &#38; T.Kế H.Thống thông tin</option>
                      <option value="5">Đồ án Cơ sở ngành mạng</option>
                      <option value="6">Đồ án chuyên ngành CNPM</option>
                    </select>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" name="bt_submit" class="btn btn-lg btn-success my-button" value="Thêm đề tài">
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
