<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách sinh viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_list_sv.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-10">
          <h1 class="page-header">Danh sách sinh viên</h1>
        </div>
        <div class="col-md-2">
          <button type="button" style="margin-top:20px;" class="btn btn-success my-button" onclick="window.location='themsinhvien.php'">Thêm</button>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped my-table">
          <thead>
            <tr>
              <th>STT</th>
              <th>MSSV</th>
              <th>Họ tên</th>
              <th>Giới tính</th>
              <th>Ngày sinh</th>
              <th>Email</th>
              <th>SĐT</th>
              <th>Lớp</th>
              <th>Options</th>
            </tr>
          </thead>

          <tbody>
            <?php $i=1; foreach ($arr as $item) {?>
            <form <?php echo "id="."form_".$i;?> method="get">
              <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo "<input readonly type='text' style='border:none;background:none;' name='mssv' value='".$item['mssv']."'>"; ?></td>
                <td><?php echo $item['hoten']; ?></td>
                <td><?php
                  if($item['gioitinh']){
                    echo 'Nam';
                  }else{
                    echo 'Nữ';
                  }
                ?></td>
                <td><?php echo $item['ngaysinh']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td><?php echo $item['sdt']; ?></td>
                <td><?php echo $item['lop'];$i++; ?></td>
                <?php  echo "<td><a href=\"suasinhvien.php?mssv=$item[mssv]\"><i style='margin-left:10px;' class='fa fa-pencil' aria-hidden='true'></i></a><a href=\"../controllers/delete_sv.php?mssv=$item[mssv]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i style='margin-left:10px;color:red;' class='fa fa-trash' aria-hidden='true'></i></a></td>"; ?>
              </tr>
            </form>
          <?php } ?>
          </tbody>
        </table>
      </div>

      <div class="modal fade" id="xoaModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Cảnh báo!</h4>
            </div>
            <div class="modal-body">
              <p>Sinh viên đã được chọn sẽ bị xoá. Bạn có muốn tiếp tục?</p>
            </div>
            <div class="modal-footer">
              <form action="#" data-ajax="true" data-ajax-mode="replace" data-ajax-update="#divInterestDeatils" id="form1" method="post" style="display: inline-block">                            <div id="divInterestDeatils"></div>
                <input type="hidden" name="ma-phim" />
                <button type="submit" class="btn btn-danger my-button">Xoá sinh viên</button>
              </form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
