<?php
	class User {
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		public function register($request){
			$this->db->query("INSERT INTO user (first_name, email, password)
			VALUES (:first_name, :email, :password)");
			// Bind Data
			$this->db->bind(':first_name', $request['first_name']);
			$this->db->bind(':email', $request['email']);
			$this->db->bind(':password', $request['password']);

			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}

		}
		
		public function login($email, $password){

			$this->db->query("SELECT * FROM user WHERE email = :email AND password= :password");

			$this->db->bind(':email', $email);
			$this->db->bind(':password', $password);

			// Assign Row
			$row = $this->db->single();
			return $row;
			


		}

}

?>