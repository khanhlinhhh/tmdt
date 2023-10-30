				<div class="row slider">
				<div class="col-12 col-lg-9">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	
	<div class="carousel-inner">
	<?php 
        while ($slider = mysqli_fetch_array($data["slider"])) {?> 
    <div class="carousel-item active">
      <img src="<?php echo $slider["image"]; ?>" class="d-block w-100" alt="..."> 
    </div>
	<?php
    }
    ?>
    <!-- <div class="carousel-item">
      <img src="public/uploads/banner2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="public/uploads/banner.jpg" class="d-block w-100" alt="...">
    </div> -->
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
				</div>
				<div class="col-12 col-lg-3">
					<div class="row">
						<div class="col-12 title-news">
							<h3><i class="fa fa-star"></i> 
								Tin nổi bật
							</h3>
				<!-- 			<div class="row">
								<div class="col-12 product">
									<div class="product-sale">
										<div class="uploads-produdct">
											<div class="thumbnail-container">
												<a href="#" class="thumbnail-product">
													<uploads src="uploads/ipxs.jpg"/>
												</a>
											</div>
										</div>
										<div class="price-product">
											<h1>iPhone XS 64GB</h1>
											<span class="old">Đã qua sử dụng</span>
											<a href="#">
												<div class="price-product-cart">
													<span class="price-cart">11.490.000VNĐ</span>
													<span class="price-sale"><s>12.900.000VNĐ</s></span>
												</div>

											</a>
										</div>
										<div class="add-to-cart text-center">
											<a href="#">Mua hàng</a>
										</div>
									</div>
								</div>
										<div class="col-12 product">
									<div class="product-sale">
										<div class="uploads-produdct">
											<div class="thumbnail-container">
												<a href="#" class="thumbnail-product">
													<uploads src="uploads/ipxs.jpg"/>
												</a>
											</div>
										</div>
										<div class="price-product">
											<h1>iPhone XS 64GB</h1>
											<span class="old">Đã qua sử dụng</span>
											<a href="#">
												<div class="price-product-cart">
													<span class="price-cart">11.490.000VNĐ</span>
													<span class="price-sale"><s>12.900.000VNĐ</s></span>
												</div>

											</a>
										</div>
										<div class="add-to-cart text-center">
											<a href="#">Mua hàng</a>
										</div>
									</div>
								</div>
							</div>
 -->						</div>
 								<div class="col-12 col-md-8 col-lg-12">
 									<div class="icon-box">
 										<!-- <div class="icon">
 											<uploads src="public/uploads/icon.png"/>
 										</div> -->
 										<div class="icon-text">
 											<h5>
 												Giao hàng tận nơi 60 phút trong nội ô thành phố Đà Nẵng
 											</h5>
 										</div>
 									</div>
 								</div>
 								<div class="col-12 col-md-4 col-lg-12">
 									
 									<div class="uploads-box">
 										<a href="#">
 										<div class="box-img">
 											<img src="public/uploads/abc.jfif"/>
 										</div>
 									</a>
 									</div>
 								</div>
					</div>
				</div>
			</div>
		</div>
		<!-------------------- show product ---------Dùng plugin owl-Carousel để thực hiện, số item được thể hiện riêng cho từng kích thước màn hình------------------------>
		<div class="container">
			<div class="row row-slide-news-phone desktop ">
				<div class="col-4">
				<div class="list-group">
					<h3>Giá</h3>
					<input type="hidden" id="hidden_minimum_price" value="0" />
                    <input type="hidden" id="hidden_maximum_price" value="65000000" />
                    <p id="price_show"> 0đ - 65.000.000đ</p>
                    <div id="slider" style="margin-bottom: 20px;"></div>
                </div>			
				</div>
				<div class="col-12 title-hot">
					<h5>
					 Sản Phẩm
					</h5>
				</div>
			</div>
			<div class=" row filter_data row-slide-news-phone desktop">
	             	
	        </div>
	              	<div class="col-12" style="text-align: center;">
						<nav aria-label="Page navigation example">
								<ul class="pagination" style="text-align: center;display: flex;justify-content: center; margin-top: 20px">
								<?php 
									$page = mysqli_num_rows($data["page_product"]);
									$button_page = ceil($page/20);
									$i = 0;
									for ($i=1; $i <= $button_page ; $i++) {
										echo '<li class="numberpage page-item page-link" id="'.$i.'" data-id ="'.$i.'" onclick="pageclick('.$i.')">'.$i.'</li>';
								}
									
								?>
								</ul>
						</nav>
					</div>

		<!------------------------------------------------------- start footer ----------------------------->
</div>