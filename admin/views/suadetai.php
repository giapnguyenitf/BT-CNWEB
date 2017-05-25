<!DOCTYPE html>
<html>
  <head>
    <title>Sửa đề tài</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_edited_detai.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Sửa đề tài</h1>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-8 col-md-offset-2 my-input-form">
          <div class="login-panel panel panel-default">
            <div class="panel-body">
              <form action="../controllers/update_detai.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <?php echo "<input class='form-control' id='iddetai' name='iddetai' value='".$arr['iddetai']."'"."  type='text' readonly/>"; ?>
                  </div>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='tendetai' name='tendetai' value='".$arr['tendetai']."'"."  type='text' required/>"; ?>
                  </div>
                  <div class="form-group">
                    <?php echo "<input class='form-control' id='tendoan' name='tendoan' value='".$arr['tendoan']."'"."  type='text' readonly/>"; ?>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" name="bt_submit" value="Save">
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
