<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Tables</h1>
<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>
<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php 
          if (isset($data["result"])) {
              if ($data["result"]=="true") {?>
                <h5 class="alert alert-success"><?php echo "Sửa Thành Công"; ?></h5>
              <?php
            }
            else{?>
                <h5 class="alert alert-warning"><?php echo "Sửa thất bại"; ?></h5>
            <?php
            }
          }
       ?>
       <div class="form-group">
         <a href="slider" class="btn btn-warning">Danh sách slider</a>
       </div>
       <?php 
          while ($slider = mysqli_fetch_array($data["slider"])) {?>
            <form method="POST" action="slider/update/<?php echo $slider["id"]; ?>">
          <div class="form-group">
          <label>Tên slider</label>
          <input type="text" name="tenSlider" class="form-control" placeholder="Nhập tên slider" value="<?php echo $slider["tenSlider"]; ?>">
          </div>               
          <!-- <div class="form-group">
           <label>Đơn giá</label>
          <input type="number" name="gia" class="form-control" value="<?php echo $hanghoa["gia"]; ?>">
          </div>
          <div class="form-group">
          <label>Số lượng</label>
          <input type="number" name="so_luong_hang" class="form-control" min="1" value="<?php echo $hanghoa["so_luong_hang"]; ?>">
          </div>
          <div class="form-group">
          <label>Mô tả</label>
          <textarea class="form-control ckeditor" name="mo_ta" id="editor" cols="20" rows="20">
              <?php echo $hanghoa["mo_ta"]; ?>
          </textarea>
          </div> -->
          <div class="form-group">
          <button name="submit" type="submit" class="form-control btn btn-info">
            Sửa Thông Tin Slider
          </button>
          </div>
       
        </form>
          <?php
          }
        ?>
       
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>