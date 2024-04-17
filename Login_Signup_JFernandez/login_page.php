<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Form</title>
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
            margin-top: 20px;
        }
        .form-container .alert {
            margin-bottom: 10px;
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            margin-bottom: 10px; 
        }
        .form-container button[type="submit"] {
            margin-top: 15px;
            width: 100%; 
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="form-container shadow w-450 p-3" action="php/login.php" method="post">
            <h5 class="display-4 text-center fs-1">Login to Your Account</h5>

            <?php if(isset($_GET['error'])){ ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $_GET['error']; ?>
                </div>
            <?php } ?>

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

            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>
