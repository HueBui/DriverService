<?php
	class DB{
		/*private static $con = NULL;
		public static function getConnection(){
			if(self::$con==NULL){
				require_once("config.php");
				self::$con = new PDO("mysql:host=$url;port=$port;dbname=$dbname",$username,$password);
				self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
			}
			return self::$con;
		}*/
		public function connect(){
			$con = mysqli_connect('localhost', 'root', '', 'daotaolaixe');
			if (mysqli_connect_errno()) {
				echo " ket noi that bai " ;
			}
			return $con ;
		}
	}
?>