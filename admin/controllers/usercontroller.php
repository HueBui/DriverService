<?php
	/**
	* 
	*/
	require_once('models/usermodel.php');
	class UserController
	{
		
		public function getUser(){
			$username = isset($_POST['username'])? $_POST['username']: '';
			$password = isset($_POST['password'])? $_POST['password']: '';
			if($username!=''&&$password!=''){
				$usermodel = new UserModel();
				$user = $usermodel->login($username,$password);
				if($user){
					header("location:pages/index.php");
				}
				else{
					echo "<script>
					alert('Sai username hoac password');
					window.history.back();
					</script>";
				}
			}
			else{
				require_once('views/login.php');
			}
		}
	}
?>