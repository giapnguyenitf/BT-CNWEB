<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách giảng viên</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_list_gv.php'
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Danh sách giảng viên</h1>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped my-table">
          <thead>
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
                <p>Khoa</p>
              </th>
            </tr>
          </thead>

        <tbody>
          <?php foreach ($arr as $item) {?>
          <tr>
            <td><?php echo $item['idgv']; ?></td>
            <td><?php echo $item['hoten']; ?></td>
            <td><?php if($item['gioitinh']==true){
              echo 'Nam';
            }else{
              echo 'Nữ';
            } ?></td>
            <td><?php echo $item['tenkhoa']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
        </table>
      </div>
    </div>
  </body>
</html>
