<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách đồ án</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách đồ án</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover my-table">
          <tr>
            <th>
              <p>ID đồ án</p>
            </th>
            <th>
              <p>Tên đồ án</p>
            </th>
            <th>
              <p>Học kỳ</p>
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
              Cơ sở ngành mạng
            </td>
            <td>
              8
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
