<!DOCTYPE html>
<html>
  <head>
    <title>Sửa sinh viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_edited_sv.php';
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
              <form action="../controllers/get_editted_sv.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='mssv' name='mssv' value='".$arr['mssv']."'"." placeholder='MSSV' type='text' readonly/>"; ?>
                  </div>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='hoten' name='hoten' value='".$arr['hoten']."'"."type='text'/>"; ?>
                  </div>
                  <div class="form-group">

                  <form>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" <?php echo($arr['gioitinh']?'checked="checked"':''); ?> >Nam
                    </label>
                    <label class="radio-inline">
                      <input type="radio" name="optradio" <?php echo(!$arr['gioitinh']?'checked="checked"':''); ?> >Nữ
                    </label>
                  </form>
                  </div>
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
                    <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker();
                            });
                    </script>
                  </div>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='email' name='email' value='".$arr['email']."'"."type='email'/>"; ?>
                  </div>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='sdt' name='sdt' value='".$arr['sdt']."'"."type='text'/>"; ?>
                  </div>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='lop' name='lop' value='".$arr['lop']."'"."type='text'/>"; ?>
                  </div>
                  <div class="form-group" style="text-align: center; margin-bottom: 0px !important;">
                    <input type="submit" class="btn btn-lg btn-success my-button" value="Save">
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
