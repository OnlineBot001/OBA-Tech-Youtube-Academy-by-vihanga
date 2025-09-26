<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $gmail = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "select * from form where email = '$gmail' limit 1";
            $result = mysqli_query($con, $query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data = mysqli_fetch_assoc($result);

                    if($user_data['password'] == $password)
                    {
                        header("location: index.php");
                        die;
                    }
                } 
            }
            echo "<script type= 'text/javascript'>alert('Wrong username or password')</script>";
        }
        else
        {
            echo "<script type= 'text/javascript'>alert('Wrong username or password')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OBA Tech youtube acdemy login or singup</title>
    <link rel="stylesheet" href="singup.css">
</head>
<body>
    <nav class="navbar">
     <div class="navbar-container">
        <a href="index.html" class="navbar-logo">OBA Tech youtube Academy</a>
        <button class="navbar-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </button>
        <ul class="navbar-menu">
            <li><a href="http://localhost/form/index.html ">Home</a></li>
            <li><a href="http://localhost/form/about.html">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="http://localhost/form/login.php" class="active">Login</a></li>
            <li><a href="http://localhost/form/singup.php">Singup</a></li>
        </ul>
     </div>
    </nav><br/>
    <div class="login">
        <h1>Login</h1>
        <form method="POST">
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="" value="Submit">
        </form>  
        <p>Not have an account? <a href="singup.php">Sing up here</a></p> 
    </div>
</body>
   <script src="script.js"></script>
</html>