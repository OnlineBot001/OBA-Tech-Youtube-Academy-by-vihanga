<?php
    session_start();

    include("db.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $Gender = $_POST['gender'];
        $num = $_POST['contact'];
        $birthday = $_POST['birthday'];
        $gmail = $_POST['email'];
        $password = $_POST['password'];

        if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
        {
            $query = "insert into form (fname, lname, gender,contact, birthday, email, password) values ('$firstname', '$lastname', '$Gender', '$num', '$birthday', '$gmail', '$password')";

            mysqli_query($con, $query);

            echo "<script type= 'text/javascript'>alert('Succesfuly register')</script>";
        }
        else
        {
            echo "<script type= 'text/javascript'>alert('Please enter some valid information')</script>";
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
            <li><a href="http://localhost/form/index.html" >Home</a></li>
            <li><a href="http://localhost/form/about.html">About</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="http://localhost/form/login.php">Login</a></li>
            <li><a href="http://localhost/form/singup.php"class="active">Singup</a></li>
        </ul>
     </div>
    </nav><br/>
    <div class="singup">
        <h1>Sing up</h1>
        <h2>It's free only takes a minutes.</h2>
        <form method="POST">
            <label>First Name</label>
            <input type="text" name="fname" required>
            <label>Last Name</label>
            <input type="text" name="lname" required>
            <label>Gender</label>
            <input type="text" name="gender" required>
            <label>Contact Number</label>
            <input type="tel" name="contact" required>
            <label>Birth Day</label>
            <input type="text" name="birthday" required>
            <label>Email</label>
            <input type="email" name="email" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="submit" name="" value="Submit">
        </form>  
        <p>By clicking the singup button,you agree to our<br>
        <a href="">Terms and conditions </a> and <a href="#">policy privacy</a></p> 
        <p>Already have an account? <a href="login.php">Login here</a></p> 
    </div>
</body>
  <script src="script.js"></script>
</html>