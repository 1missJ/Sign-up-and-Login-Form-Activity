<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        body {
             background: linear-gradient(to bottom, #cc33ff 0%, #66ccff 100%);
              font-family: 'Roboto', sans-serif; 
        }
        .form-container {
            background-color: #FFFAFA; 
            padding: 20px; 
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
        }
        .form-container h5 {
            color: #343a40;
            margin-bottom: 20px;
            
        }
        .form-container .alert {
            margin-bottom: 20px; 
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            margin-bottom: 10px; 
        }
        .form-container button[type="submit"] {
            margin-top: 10px; 
        }
        .form-container .link-secondary {
            margin-top: 10px; 
            display: block; 
            text-align: center; 
            color: #6c757d; 
            margin-bottom: 10px; 
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="form-container shadow w-450" action="php/signup.php" method="post">
            <h5 class="display-4 text-center fs-1">Create an Account</h5>

            <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

            <?php if(isset($_GET['success'])){ ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $_GET['success']; ?>
                </div>
            <?php } ?>

            <div class="mb-3">
                <label class="form-label">First Name</label>
                <input type="text" 
                       class="form-control"
                       name="fname"
                       value="<?php echo (isset($_GET['fname']))?$_GET['fname']:"" ?>"> 
            </div> 

            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" 
                       class="form-control"
                       name="lname"
                       value="<?php echo (isset($_GET['lname']))?$_GET['lname']:"" ?>"> 
            </div> 

            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" 
                       class="form-control"
                       name="uname"> 
            </div> 

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="text" 
                       class="form-control"
                       name="pass"> 
            </div> 

            <button type="submit" class="btn btn-primary">Sign up</button>
            <a href="login_page.php" class="link-secondary">Login</a>
        </form>
    </div>
</body>
</html>
