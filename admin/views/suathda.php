<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location:../../site/views/login.php");
}
 ?>
<html>
  <head>
    <title>Sửa thực hiện đồ án</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_tendetai.php';
    include '../controllers/get_info_sv_thda.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Sửa thực hiện đồ án</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-8 col-md-offset-2 my-input-form">
          <div class="login-panel panel panel-default">
            <div class="panel-body">
              <form action="../controllers/update_thda.php" method="post">
                <fieldset>
                  <input class="form-control" type="text" name="idthda" <?php echo "value='".$_GET['idthda']."'"; ?> readonly>
                  <input class="form-control" type="text" name="mssv" <?php echo "value='".$_GET['mssv']."'"; ?> readonly>
                  <input class="form-control" type="text" name="hoten" <?php echo "value='".$arr_sv['hoten']."'"; ?> readonly>
                  <input class="form-control" type="text" name="lop" <?php echo "value='".$arr_sv['lop']."'"; ?> readonly>
                  <div class="form-group">
                    <select class="form-control" id="iddetai" name="iddetai">
                      <?php foreach ($arr_dt as $item) {?>
                        <option <?php echo "value='".$item['iddetai']."'"; ?>><?php echo $item['tendetai']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" name="bt_submit"  value="Save">
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
