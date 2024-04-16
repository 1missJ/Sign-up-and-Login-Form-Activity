<?php
session_start(); 

$fname = isset($_SESSION['fname']) ? $_SESSION['fname'] : '';
$lname = isset($_SESSION['lname']) ? $_SESSION['lname'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="shadow w-450 p-3">
            <h3 class="display-4 text-center fs-1"> Hello <?php echo $fname ? $fname . ' ' . $lname : 'User'; ?></h3>
            
        </div>
    </div>
</body>
</html>
