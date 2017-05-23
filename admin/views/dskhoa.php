<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách khoa</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_list_khoa.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách khoa</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped my-table">
        <thead>
          <tr>
            <th>
              <p>ID khoa</p>
            </th>
            <th>
              <p>Tên khoa</p>
            </th>
          </tr>
        </thead>

        <tbody>
          <?php foreach ($arr as $item) {?>
          <tr>
            <td><?php echo $item['idkhoa']; ?></td>
            <td><?php echo $item['tenkhoa']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
