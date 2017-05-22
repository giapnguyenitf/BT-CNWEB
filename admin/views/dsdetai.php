<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách đề tài</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách đề tài</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover my-table">
          <tr>
            <th>
              <p>ID đề tài</p>
            </th>
            <th>
              <p>Tên đề tài</p>
            </th>
            <th>
              <p>Đồ án</p>
            </th>
            <th>
              <div class="checkbox">
                <input type="checkbox">
              </div>
            </th>
          </tr>

          <tr>
            <td>
              1
            </td>
            <td>
              Xây dựng ứng dụng gõ tắt
            </td>
            <td>
              Cơ sở ngành mạng
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
        <button type="button" class="btn btn-success my-button" onclick="window.location='themdetai.php'">Thêm</button>
        <form action="suadetai.php" data-ajax="true" data-ajax-mode="replace" data-ajax-update="#divInterestDeatils" id="form0" method="post" style="display: inline-block">                <div id="divInterestDeatils"></div>
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
              <p>Đề tài đã được chọn sẽ bị xoá. Bạn có muốn tiếp tục?</p>
            </div>
            <div class="modal-footer">
              <form action="#" data-ajax="true" data-ajax-mode="replace" data-ajax-update="#divInterestDeatils" id="form1" method="post" style="display: inline-block">                            <div id="divInterestDeatils"></div>
                <input type="hidden" name="ma-phim" />
                <button type="submit" class="btn btn-danger my-button">Xoá đề tài</button>
              </form>
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
