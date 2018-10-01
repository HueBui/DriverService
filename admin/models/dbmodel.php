<?php 
	/**
	* 
	*/
	class DbModel 
	{
		public function connect(){
			$con = mysqli_connect('localhost', 'root', '', 'daotaolaixe');
			if (mysqli_connect_errno()) {
				echo " ket noi that bai " ;
			}
			return $con ;
		}
		
	}
 ?>