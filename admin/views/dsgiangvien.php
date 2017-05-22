<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách giảng viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách giảng viên</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover my-table">
          <tr>
            <th>
              <p>ID giảng viên</p>
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
              <p>Khoa</p>
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
              Nguyễn Thế Xuân Ly
            </td>
            <td>
              Không xác định
            </td>
            <td>
              01/01/1969
            </td>
            <td>
              Công nghệ thông tin
            </td>
            <td>
              <div class="checkbox">
                <input type="checkbox">
              </div>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </body>
</html>
