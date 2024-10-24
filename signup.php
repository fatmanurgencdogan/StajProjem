<?php

include("connection.php");

if(isset($_POST["save"])){

    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    
    $insert = "INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$password')";
    $runInsert = mysqli_query($connection, $insert);

    // if($runInsert){
    //     echo '<div class = "alert alert-success" role = "alert">
    //     The record has been added successfully.    
    //     <\div>';
    // }
    // else{
    //     echo '<div class = "alert alert-danger" role = "alert">
    //     There was a problem adding a record.    
    //     <\div>';
    // }
    mysqli_close($connection);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/login_signup.css">


    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(to right, #ff5404b1, #2388dab4);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
            position: relative;
        }

        h2 {
            margin-bottom: 20px;
        }

        input[type="email"],
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 15px -25px;
            border: 2px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 50%;
            padding: 10px;
            background-color: #E88D67;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #c96c43;
        }

        p {
            margin-top: 10px;
        }

        a {
            color: #E88D67;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .back-home {
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 16px;
            color: #E88D67;
            text-decoration: none;
        }

        .back-home:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <div class="container">
        <a href="index.php" class="back-home">← Home</a>
        <h2>Sign Up</h2>
        <form action="signup.php" method="POST">
            <label for="username">Name:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="save">Sign Up</button>
        </form>
        <p>Do you already have an account? <a href="login.php">Log In</a></p>
    </div>
</body>

</html>