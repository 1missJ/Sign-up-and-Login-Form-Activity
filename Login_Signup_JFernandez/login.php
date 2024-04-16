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
            background-color: #D8BFD8; /* Light lavender background */
        }
        .form-container {
            background-color: #fff; /* White background for the form */
            padding: 20px; /* Add some padding */
            border-radius: 10px; /* Rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow */
        }
        .form-container h4 {
            color: #343a40; /* Dark text color */
        }
        .form-container .alert {
            margin-bottom: 10px; /* Add some space below alerts */
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            margin-bottom: 10px; /* Add some space below inputs */
        }
        .form-container button[type="submit"] {
            margin-top: 10px; /* Add some space above the submit button */
            width: 100%; /* Set button width to 100% */
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <form class="form-container shadow w-450 p-3" action="php/login.php" method="post">
            <h4 class="display-4 text-center fs-1">Login to Your Account</h4>

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
