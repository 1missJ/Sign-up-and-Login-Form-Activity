<?php 

if(isset($_POST['fname']) && 
   isset($_POST['lname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

  include "../database_connection.php";

   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $uname = $_POST['uname']; 
   $pass = $_POST['pass'];

   $data = "fname".$fname."&uname".$uname;
   
   if (empty($fname)){
   	$em = "First Name is required";
   	header("Location: ../index.php?error=$em&$data");
	exit;
   }else if(empty($lname)){
   	$em = "Last Name is required";
   	header("Location: ../index.php?error=$em&$data");
	exit;
   }else if(empty($uname)){
   	$em = "Username is required";
   	header("Location: ../index.php?error=$em&$data");
	exit;
   }else if(empty($pass)){
   	$em = "Password is required";
   	header("Location: ../index.php?error=$em&$data");
	exit;

   }else{

      $pass = password_hash($pass, PASSWORD_DEFAULT);
      
      $sql = "INSERT INTO users(fname, lname, username, password)
      VALUES(?,?,?,?)";
      $stmt = $db->prepare($sql);
      $stmt->execute([$fname, $lname, $uname, $pass]);
      header("Location: ../index.php?success=Your account has been created succesfully");
      exit;

   }


}else {
	header("Location: ../index.php?error=error");
	exit;
}