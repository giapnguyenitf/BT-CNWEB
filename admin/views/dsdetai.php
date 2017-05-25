<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Danh sách đề tài</title>
  </head>
  <body>
    <?php
    include 'share-layout.php';
    include '../controllers/get_list_detai.php';
    ?>
    <div id="page-wrapper">
      <div class="row">
        <div class="col-lg-10">
          <h1 class="page-header">Danh sách đề tài</h1>
        </div>
        <div class="col-md-2">
          <button type="button" style="margin-top:20px;" class="btn btn-success my-button" onclick="window.location='themdetai.php'">Thêm</button>
        </div>
      </div>
      <div class="row">
        <table class="table table-bordered table-striped my-table">
          <thead>
            <tr>
              <th>ID đề tài</th>
              <th>Tên đề tài</th>
              <th>Đồ án</th>
              <th>Options</th>
            </tr>
          </thead>
          <tbody>
            <?php $i=1; foreach ($arr as $item) {?>
            <form <?php echo "id="."form_".$i;?> action= "#"  method="get">
              <tr>
                <td><?php echo "<input readonly type='text' style='border:none;background:none;' name='iddetai' value='".$item['iddetai']."'>"; ?></td>
                <td><?php echo $item['tendetai']; ?></td>
                <td><?php echo $item['tendoan']; ?></td>
                <?php  echo "<td><a href=\"suadetai.php?iddetai=$item[iddetai]\"><i style='margin-left:10px;' class='fa fa-pencil' aria-hidden='true'></i></a><a href=\"../controllers/delete_detai.php?iddetai=$item[iddetai]\" onClick=\"return confirm('Are you sure you want to delete?')\"><i style='margin-left:10px;color:red;' class='fa fa-trash' aria-hidden='true'></i></a></td>"; ?>
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
