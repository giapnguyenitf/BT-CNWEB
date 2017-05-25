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
              <form action="../controllers/update_sv.php" method="post">
                <fieldset>
                  <div class="form-group">
                    <?php echo "<input class='form-control' id='mssv' name='mssv' value='".$arr['mssv']."'"." placeholder='MSSV' type='text' readonly/>"; ?>
                  </div>
                  <div class="form-group">
                    <?php echo "<input autofocus='autofocus' class='form-control' id='hoten' name='hoten' value='".$arr['hoten']."'"."type='text'/>"; ?>
                  </div>
                  <div class="form-group">

                  <label class="radio-inline">
                    <input  type="radio" id="male" name="male" onclick="checked_male()" <?php echo($arr['gioitinh']?'checked="checked"':''); ?> >Nam
                  </label>
                  <label class="radio-inline">
                    <input  type="radio" id="female" name="female" onclick="checked_female()" <?php echo(!$arr['gioitinh']?'checked="checked"':''); ?> >Nữ
                  </label>
                  <input type="hidden" id="gioitinh" name="gioitinh" <?php echo "value='".$arr['gioitinh']."'" ?>>
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

                  </div>
                  <div class="form-group">
                    <div class='input-group date' id='datetimepicker1'>
                    <?php echo "<input class='form-control' id='ngaysinh' name='ngaysinh' value='".$arr['ngaysinh']."'"."type='text'/>";?>
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    </div>
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
                    <input type="submit" name="bt_submit" class="btn btn-lg btn-success my-button" value="Save">
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
