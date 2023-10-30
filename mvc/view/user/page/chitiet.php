
<div class="container">
    <!--------------------------- Chi tiết sản phẩm ------------------------------>
    <div class="row">
        <div class="col-12 col-lg-12 col-md-12 col-xl-12 thongtin-chitiet">
            <?php 
                while ($detail = mysqli_fetch_array($data["detail"])) {?>
                               <div class="row">
                    <div class="name-chitiet col-12 col-lg-12 col-xl-12 thongtin-chitiet-2">
                        <h2><?php echo $detail["Ten_hang_hoa"]; ?></h2>
                    </div>
                    <div class="col-12 col-lg-4  col-xl-4 col-md-6">
                        <div class="img-chitiet">

                            <img src="<?php echo $detail["hinh"]; ?>" data-zoom-image="<?php echo $detail["hinh"]; ?>" id="zoom_01">
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 col-md-6">
                        <div class="price-chitiet">
                            <h5>
                                <?php echo number_format($detail["gia"]); ?>
                                <?php echo "VNĐ"; ?>
                            </h5>
                        </div>
                        <div class="chitiet-sanpham">
                            <h5>Khuyến mãi</h5>
                            <div class="list-item">
                                <ul>
                                <li>Nước rửa tay mini</li>
                            <li>Xà phòng khô</li>
                            <li> Mua kèm Áo len ưu đãi giảm 60.000đ</li>
                                </ul>
                            </div>
                        </div>
                        <div class="button-buy">
                            <form action="home/add_cart2/<?php echo $detail["name_search"]; ?>" method="POST">
                                <div class="form-group">
                                    <label>Số lượng</label>
                                <input type="number" name="so_luong" class="form-control" style="width: 20%;" value="1" min="1">
                                </div>
                                <button type="submit" name="submit" class="btn btn-warning">
                                    Mua Ngay
                                </button>
                            </form>
                           
                        </div>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-4 chi-tiet-don-hang">
                        <div class="chi-tiet">
                                <h5><i class="fa fa-check-circle"></i> Kiểm tra hàng </h5>
                        </div>
                        <div class="check-hang">
                            <div class="list-check">
                               <p>Bộ sản phẩm bao gồm:<a href="#">Hộp giấy đựng đồ & sản phẩm chính hãng</a></p>
                                <p>Bảo hành chính hãng 15 ngày</p>
                            </div>
                        </div>
                    </div>
                </div>
             
    
            <div class="row">
                <div class="col-12 col-lg-12 col-xl-12">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-xl-12 img-chitiet2">
                            <h3>Mô tả về sản phẩm</h3>
                            <?php echo $detail["mo_ta"]; ?>
                            <div class="description-uploads">
                                    <uploads src="../public/uploads/chitiet.jpg"/>
                            </div>
                        </div>
<!--                         <div class="col-12 col-lg-6 col-xl-6 thongso-kythuat">
                            <h3>Thông số kỹ thuật</h3>
                            <div class="list-ts">
                                <ul>
                                    <li><span>CPU:</span><div><a href="#">Intel Core i7 Coffee Lake,</a>8565U, 1.80 GHz</div></li>
                                    <li><span>RAM:</span><div><a href="#">8 GB, DDR4 (On board),</a>2400 MHz</div></li>
                                    <li><span>Ổ cứng:</span><div><a href="#">SSD 256GB NVMe PCIe</a></div></li>
                                    <li><span>Màn hình:</span><div><a href="#">Full HD (1920 x 1080),</a>13.3 inch</div></li>
                                    <li><span>Card màn hình:</span><div><a href="#">Card đồ họa tích hợp, Intel® UHD Graphics 620</a></div></li>
                                    <li><span>Cổng kết nối:</span><div><a href="#">2 x USB 3.1, USB Type-C</a></div></li>
                                    <li><span>Hệ điều hành:</span><div><a href="#">Windows 10 Home SL</a>8565U, 1.80 GHz</div></li>
                                    <li><span>Thiết kế:</span><div><a href="#"></a>Vỏ kim loại nguyên khối, PIN liền</div></li>
                                    <li><span>Kích thước:</span><div><a href="#"></a>Dày 14.9 mm, 1.26 kg</div></li>
                                    <li><span>Ngày xuất bản:</span><div><a href="#"></a>2019</div></li>
                                </ul>
                            </div>
                        </div>
 -->                    </div>
                </div>
            </div>
              <?php
                }
             ?>
        </div>
    </div>
    <!----------------------------- End chi tiết ----------------------->
    <!------------------------------ sản phẩm liên quan ------------------>
    <div class="row show-product">
        <div class="col-12">
            <div class="row row-prodct-2">
                <div class="col-12">
                    <div class="row product-2">
                        <div class="col-12 col-lg-4 col-md-6 title-product-2">
                            <h5>Sản phẩm liên quan</h5>
                        </div>
                        <div class="col-12 col-lg-8 menu-laptop">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!------------------------------------------------------------------------->
        <?php 
             while ($api = mysqli_fetch_array($data["product_api"])) {?>
        <div class="col-12 col-lg-3 col-md-3 padding-laptop col-2th">
            <div class="row">
                <div class="col-12 content-laptop">
                    <div class="laptop-sell">
                        <div class="laptop-uploads">
                            <a href="home/detail/<?php echo $api["name_search"] ?>"><img src="<?php echo $api["hinh"] ?>" alt="không hổ trợ trình duyệt này" /></a>
                        </div>
                        <div class="laptop-price">
                            <div class="name-laptop"><a href="home/detail/<?php echo $api["id"] ?>"><?php echo $api["Ten_hang_hoa"]; ?></a></div>
                            <div class="price-laptop">
                                <a href="home/detail/<?php echo $api["name_search"] ?>">
                                    <span class="price-sell"><?php number_format($api["gia"]); ?></span>
                                    <!--                                        <span class="price-dis"><s>60.000.000đ</s></span>-->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                <?php 
            }
        ?>

    </div>
    <div class="row comment" style="margin-bottom: 20px;">
        <div class="col-12" style="padding: 0;">
                    
                   <form action="home/thongtin" id="comment" onsubmit="return false;" method="POST">

                       <textarea class="form-control" cols="20" rows="5" placeholder="Nhập nội dung đánh giá" id="content"></textarea>
                       <?php while ($detail = mysqli_fetch_array($data["detail2"])) {$id = $detail["id"] ?>
                       <input type="hidden" name="id_san_pham" id="id_san_pham" value="<?php echo $detail["id"]; ?>">
                       <input type="hidden" name="name_search" id="name_search" value="<?php echo $detail["name_search"]; ?>">
                           
                       <?php } ?>
                        <div class="row" style="margin-top: 10px;">
                            <div class="col-4 form-group">
                               <input type="text" name="ten_khach_hang" id="ten_khach_hang" class="form-control" placeholder="Nhập họ tên"> 
                            </div>
                            <div class="col-4 form-group">
                               <input type="email" name="email" id="email" class="form-control" placeholder="Nhập email"> 
                            </div>
                            <div class="col-4 form-group">
                               <input type="number" name="sdt" id="sdt" class="form-control" placeholder="Số điện thoại liên hệ"> 
                            </div>
                        </div>
                        <input type="submit" name="submit" value="Gửi" id="submit" class="form-control btn-warning">
                        <div class="alert">
                            
                        </div>

                   </form>
            </div>
            <div class="col-12" id="danhgia">
                <div class="col-12"><h4 class="text text-warning" style="border-bottom: 2px solid #fff;">Đánh giá về sản phẩm</h4></div>

                <?php 
                    $num = mysqli_num_rows($data["comment"]);
                        
                        if ($num > 0) {
                        while ($cmt = mysqli_fetch_array($data["comment"])) {?>        
                        <table class="table">
                          <thead>
                            <tr>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td style="width: 20%;"><?php echo $cmt["ten_khach_hang"] ?></td>
                              <td><textarea class="form-control" readonly="true" rows="5"><?php echo $cmt["noi_dung"]; ?></textarea></td>
                            </tr>

                          </tbody>
                      </table>

                        <?php
                        }
                                                   #
                    }
                    else {

                        echo "Chưa có nội dung đánh giá";
                    }                       

                ?>

            </div>
            
        </div>
    </div>
    <!-------------------------------------- end sản phẩm liên quan --------------------------------------->
</div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->



