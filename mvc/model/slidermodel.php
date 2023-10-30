<?php 

	class slidermodel extends DB {

		public function get(){

			$sql ="SELECT * FROM slider";

			return mysqli_query($this->con,$sql);
		}
		// public function detail($name_search){
				
		// 	$sql ="SELECT * FROM hang_hoas where name_search='$name_search' ORDER BY id DESC";
		// 	$result =mysqli_query($this->con,$sql);
		// 	return $result;

		// }
		public function typeslider($id){

			$sql ="SELECT * FROM slider where id = $id ORDER BY id DESC";
			return mysqli_query($this->con,$sql);
		}
		// public function update_hang($id,$so_luomg){
		// 	$sql ="UPDATE `hang_hoas` SET so_luong_hang = so_luong_hang - $so_luomg WHERE id =$id";
		// 	$result = false;
		// 	if (mysqli_query($this->con,$sql)) {
				
		// 		$result = true;
		// 	}
		// 	return json_encode($result);
		// }
		// public function get_hang(){
		// 	$sql="SELECT hang_hoas.id as 'id',hang_hoas.Ten_hang_hoa as 'Ten_hang_hoa',hang_hoas.gia as 'gia',hang_hoas.so_luong_hang as'so_luong_hang',hang_hoas.hinh as'hinh',hang_hoas.mo_ta as'mo_ta',loai_hang_hoas.Ten_loai as'id_loai' FROM `hang_hoas`,loai_hang_hoas WHERE hang_hoas.id_loai=loai_hang_hoas.id";
		// 	return mysqli_query($this->con,$sql);
		// }
		public function delete($id){

			$sql ="DELETE FROM slider where id =$id";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				
				$result = true;
			}
			return json_encode($result);
		}
		public function insert($tenSlider,$fileName_up){

			$sql ="INSERT INTO `slider`(`tenSlider`,`image`) VALUES ('$tenSlider','$fileName_up')";

			$result = false;
			if (mysqli_query($this->con,$sql)) {
				
				$result = true;
			}
			return json_encode($result);
		}
		public function edit($id){

			$sql ="SELECT * FROM slider where id = $id";
			return mysqli_query($this->con,$sql);
		}
		public function update($id,$tenSlider){

			$sql ="UPDATE `slider` SET `tenSlider`='$tenSlider' WHERE id = $id";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				
				$result = true;
			}
			return json_encode($result);
		}
		// public function sum(){

		// 	$sql ="SELECT SUM(so_luong_hang) as 'so_luong_hang' FROM `hang_hoas` ";
		// 	return mysqli_query($this->con,$sql);
			
		// }
		// public function search_product($min_price,$max_price,$page){
		// 	$product_one_page = 20;
		// 	$number_product = ($page -1)*$product_one_page;
		// 	$sql ="SELECT * FROM `hang_hoas` WHERE gia BETWEEN $min_price and $max_price order by id DESC LIMIT $number_product,$product_one_page ";
		// 	return mysqli_query($this->con,$sql);

		// }
		public function pagination($page){
			$product_one_page = 20;
			$number_product = ($page -1)*$product_one_page;
			$sql ="SELECT * FROM slider order by id DESC LIMIT $number_product,$product_one_page";
			return mysqli_query($this->con,$sql);

		}
		public function search_name($search_slider){
			$sql ="SELECT * FROM `slider` WHERE tenSlider  LIKE '%$search_slider%' order by id DESC Limit 3";
			return mysqli_query($this->con,$sql);

		}
		public function nameSlider(){

			$sql ="SELECT tenSlider FROM slider";
			return mysqli_query($this->con,$sql);
		}
		public function lv_product($id,$in_percent){
			$sql ="UPDATE `hang_hoas` SET `lvproduct`='$in_percent' WHERE id = $id";
			$result = false;
			if (mysqli_query($this->con,$sql)) {
				
				$result = true;
			}
			return json_encode($result);
		}
		public function replace(){

			
		}
		// public function apiori(){

		// 	$sql ="SELECT * FROM `hang_hoas` WHERE lvproduct BETWEEN 0.7 and 0.9";
		// 	return mysqli_query($this->con,$sql);

		// }
	}

 ?>