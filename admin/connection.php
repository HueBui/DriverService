<?php
	class DB{
		private static $con = null;
		public static function getConnection(){
			if(self::$con==NULL){
				require_once("config.php");
				self::$con = new PDO("mysql:host=$url;port=$port;dbname=$dbname",$username,$password);
				self::$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			}
			return self::$con;
		}
	}
?>