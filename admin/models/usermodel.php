<?php 
	/**
	* 
	*/
	require_once('connection.php');
	class UserModel extends DB
	{
		
		public function login($username , $password )
		{
			$con = $this->getConnection();
			$sql = 'SELECT * FROM `user` WHERE username = "'.$username.'" and password = "'.$password.'" ' ;
			 $result = $con-> query($sql);
			return $user = mysqli_fetch_assoc($result);
		}
	}

 ?>