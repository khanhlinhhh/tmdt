<?php 
	class login_customermodel extends DB {

		public function loginCus($phoneNumber){
			$sql ="SELECT *FROM user_customer where phoneNumber ='{$phoneNumber}' ";
			// Session::set('customer_login',true);
			// Session::set('customer_id',$value['id']);
			return mysqli_query($this->con,$sql);
		}
	}
 ?>