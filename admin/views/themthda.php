<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['username'])){
  header("Location:../../site/views/login.php");
}
 ?>
<html>
  <head>
    <title>Thêm thực hiện đồ án</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_namesv.php';
    include '../controllers/get_tendetai.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Thêm thực hiện đồ án</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-8 col-md-offset-2 my-input-form">
          <div class="login-panel panel panel-default">
            <div class="panel-body">
              <form action="../controllers/add_thda.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <select class="form-control" id="idsv" name="idsv">
                      <?php foreach ($arr as $item) {?>
                        <option <?php echo "value='".$item['idsv']."'"; ?>><?php echo $item['hoten']; ?></option>
                      <?php } ?>
                    </select>
                   </div>
                  <div class="form-group">
                    <select class="form-control" id="iddetai" name="iddetai">
                      <?php foreach ($arr_dt as $item) {?>
                        <option <?php echo "value='".$item['iddetai']."'"; ?>><?php echo $item['tendetai']; ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" name="bt_submit" class="btn btn-lg btn-success my-button" value="Thêm thực hiện đồ án">
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
