<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location:../../site/views/login.php");
}
 ?>
<html>
  <head>
    <title>Thêm báo cáo</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Thêm báo cáo</h1>
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
                    <input autofocus="autofocus" class="form-control"  name="tenbaocao" placeholder="Tên báo cáo" type="text"/>
                  </div>
                  <div class="form-group">
                    <input autofocus="autofocus" class="form-control"  name="link" placeholder="Link báo cáo" type="text"/>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" name="bt_submit" class="btn btn-lg btn-success my-button" value="Thêm báo cáo">
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
