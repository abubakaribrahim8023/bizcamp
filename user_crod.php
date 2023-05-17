<?php

	class bizcamp{

		public function __construct(){

			$this->conn = new PDO ('mysql:host=localhost; dbname=bizcamp', 'root', '12345678');
		}

		// select user if already exist
		
		public function validate($id,$email){

			$select 	= "SELECT * FROM user_table WHERE b_id = ? OR email = ?";
			$check		= $this->conn->prepare($select);
			$check		->execute([md5($id),$email]);
			return $check;
		}

		public function store_user($b_id,$fullName, $b_name, $pnumber,$y_address,$email,$pass,$image){

			$insert		= "INSERT INTO user_table (b_id,full_name,b_name,p_number,address,email,password,b_profile, date) VALUES(?,?,?,?,?,?,?,?,?)";
			$add		= $this->conn->prepare($insert);
			$add->execute([md5($b_id),$fullName, $b_name, $pnumber,$y_address,$email,md5($pass),$image, date('d-m-y')]);
		}

		public function log_user($a,$b){

			$select		= "SELECT * FROM user_table WHERE p_number = ? AND password = ?";
			$conn		= $this->conn->prepare($select);
			$conn		->execute([$a,md5($b)]);
			return $conn;
		}

		// update record

		public function show($id){

			$select		= "SELECT * FROM user_table WHERE b_id = ?";
			$add		= $this->conn->prepare($select);
			$add		->execute([$id]);

			return $add;
		}

		public function update($fullName, $b_name, $pnumber,$y_address,$email, $id){
			$update		= "UPDATE user_table SET full_name = ?, b_name = ?, p_number = ?, address = ?, email = ? WHERE b_id = ?";
			$change		= $this->conn->prepare($update);
			$change		->execute([$fullName, $b_name, $pnumber,$y_address,$email, $id]);
		}

		// post

		public function posting_data($fullName, $b_name, $pnumber,$y_address,$email,$b_profile,$pass,$cpass,$image){

			$insert		= "INSERT INTO post_data (full_name,b_name,p_number,address,email,b_profile,discription,price,image, date) VALUES(?,?,?,?,?,?,?,?,?,?)";
			$add		= $this->conn->prepare($insert);
			$add->execute([$fullName, $b_name, $pnumber,$y_address,$email,$b_profile,$pass,$cpass,$image, date('d-m-y h:i:s')]);
		}

		// Fetch posting from database

		public function fetch_post_data(){

			$select		= "SELECT * FROM post_data WHERE status = '1' ORDER BY id DESC";
			$add		= $this->conn->prepare($select);
			$add		->execute();
			return $add;
		}

		// change password with validate

		public function check_old_password($id, $oldp){

			$select		= "SELECT * FROM user_table WHERE b_id = ? AND password = ?";
			$add		= $this->conn->prepare($select);
			$add		->execute([$id,md5($oldp)]);
			return $add;
		}

		// change method 

		public function update_password($oldp, $id){
			
			$update		= "UPDATE user_table SET password = ? WHERE b_id = ?";
			$change		= $this->conn->prepare($update);
			$change		->execute([md5($oldp), $id]);

		}

		// contact us or message 

		public function contact_us($uname, $email, $mess){

			$insert		= "INSERT INTO contact_us (user_name,email,message,date) VALUES(?,?,?,?)";
			$messages	= $this->conn->prepare($insert);
			$messages	->execute([$uname, $email, $mess, date('d/m/y h:i:s')]);

		}




		// ID before message

		public function user_chart(){
			
			$select = "SELECT * FROM user_table";
			$change		= $this->conn->prepare($select);
			$change		->execute();
			return $change;
		}

		public function chart_fetch($id){
			
			$select = "SELECT * FROM user_table WHERE user_id = ?";
			$change		= $this->conn->prepare($select);
			$change		->execute([$id]);
			return $change;

		}


		// insert message in to table message of bizcamp 

		// public function message_chart($incoming,$outcoming,$message){

		// 	$insert  	= "INSERT INTO  message(incoming_ig, outcoming_id, message, timess) VALUES(?,?,?,?)";
		// 	$push		= $this->conn->prepare($insert);
		// 	$push		->execute([{$incoming},{$outcoming},'{$message}', date('h:i')]);
		// }


		// select he 0r her message from a table message 

		// public function message_select($mess_id, $unique_id){

		// 	$select		= "SELECT * FROM message LEFT JOIN user_table ON user_table.b_id = message.userId WHERE userId = ? AND unique_id = ? ORDER BY messgae_id DESC";
		// 	$action 	= $this->conn->prepare($select);
		// 	$action		->execute([$mess_id,$unique_id]);
		// 	return 	$action;
		// }

		

	}



?>