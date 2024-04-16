<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['pass'])) {
    include "../db_conn.php";

    $uname = $_POST['uname']; 
    $pass = $_POST['pass'];

    if (empty($uname) || empty($pass)) {
        $em = "Username and password are required";
        header("Location: ../login.php?error=$em");
        exit;
    } else {
        $sql = "SELECT * FROM users WHERE username = ?";
        $stmt = $db->prepare($sql);
        $stmt->execute([$uname]);

        if($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            $username = $user['username'];
            $password_hash = $user['password'];

            if(password_verify($pass, $password_hash)) {
                
                $_SESSION['username'] = $username;
                $_SESSION['fname'] = $user['fname']; // First name
                $_SESSION['lname'] = $user['lname']; // Last name
                
               
                header("Location: ../home.php");
                exit;
            } else {
                $em = "Incorrect password";
                header("Location: ../login.php?error=$em");
                exit;
            }
        } else {
            $em = "User not found";
            header("Location: ../login.php?error=$em");
            exit;
        }
    }
} else {
    $em = "Username and password are required";
    header("Location: ../login.php?error=$em");
    exit;
}
?>
