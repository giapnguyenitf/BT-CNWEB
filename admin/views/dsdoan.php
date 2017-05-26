<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách đồ án</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_list_doan.php'
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách đồ án</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped my-table">
          <thead>
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
            </tr>
          </thead>

          <tbody>
            <?php foreach ($arr as $item) {?>
            <tr>
              <td><?php echo $item['iddoan']; ?></td>
              <td><?php echo $item['tendoan']; ?></td>
              <td><?php echo $item['hocky']; ?></td>
              <td><?php echo $item['tenkhoa']; ?></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
