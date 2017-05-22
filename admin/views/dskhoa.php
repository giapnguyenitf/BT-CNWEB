<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách khoa</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách khoa</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-hover my-table">
          <tr>
            <th>
              <p>ID khoa</p>
            </th>
            <th>
              <p>Tên khoa</p>
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
