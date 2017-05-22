<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách sinh viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách sinh viên</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover my-table">
          <tr>
            <th>
              <p>MSSV</p>
            </th>
            <th>
              <p>Họ tên</p>
            </th>
            <th>
              <p>Giới tính</p>
            </th>
            <th>
              <p>Ngày sinh</p>
            </th>
            <th>
              <p>Email</p>
            </th>
            <th>
              <p>SĐT</p>
            </th>
            <th>
              <p>Lớp</p>
            </th>
            <th>
              <div class="checkbox">
                <input type="checkbox">
              </div>
            </th>
          </tr>

          <tr>
            <td>
              102130033
            </td>
            <td>
              Huỳnh Hoàng Phúc
            </td>
            <td>
              Nam (thẳng)
            </td>
            <td>
              12/03/1995
            </td>
            <td>
              tichuotuglyboy@gmail.com
            </td>
            <td>
              0985756430
            </td>
            <td>
              13T1
            </td>
            <td>
              <div class="checkbox">
                <input type="checkbox">
              </div>
            </td>
          </tr>
        </table>
      </div>
      <div class="row" style="text-align: center;">
        <button type="button" class="btn btn-success my-button" onclick="window.location='themsinhvien.php'">Thêm</button>
        <form action="suasinhvien.php" data-ajax="true" data-ajax-mode="replace" data-ajax-update="#divInterestDeatils" id="form0" method="post" style="display: inline-block">
          <div id="divInterestDeatils"></div>
          <input type="hidden" name="ma-phim" />
          <button type="submit" class="btn btn-warning my-button">Sửa</button>
        </form>
        <button type="button" class="btn btn-danger my-button" data-toggle="modal" data-target="#xoaModal">Xoá</button>
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
              <p>sinh viên đã được chọn sẽ bị xoá. Bạn có muốn tiếp tục?</p>
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
