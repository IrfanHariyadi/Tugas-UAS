 <?php 
 
 $host = "localhost"; 
 $user = "root"; 
 $pass = ""; 
 $db = "login_form"; 
 
 $conn = mysqli_connect($host,$user,$pass,$db); 
 
 if ($conn == false) 
 { 
	 echo "Koneksi ke server gagal."; 
	 die(); 
	 } 
	 
	 ?>