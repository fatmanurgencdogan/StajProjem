<?php

include("connection.php");

if(isset($_POST["enter"])){

    $username_or_email = mysqli_real_escape_string($connection, $_POST['username_or_email']); // mysqli_real_escape_string = güvenliği arttırma amaçlı sql enjeksiyonlarına karşı
    $password = $_POST['password'];

    // SQL sorgusunu hazırlayıp parametreleri kullanarak çalıştırın
    $query = "SELECT * FROM users WHERE (username = ? OR email = ?)";
    $stmt = mysqli_prepare($connection, $query); // performans kazancı sağlamak için 
    mysqli_stmt_bind_param($stmt, "ss", $username_or_email, $username_or_email); // sorguda hem kullanıcı adı hem e-posta alanına bakılır.Girdi ikisiyle de karşılaştırılır.

    mysqli_stmt_execute($stmt); // hazırlanan sorguyu çalıştırır.
    $result = mysqli_stmt_get_result($stmt); //sorgudan dönen sonuçları alır.
    $regNum = mysqli_num_rows($result); // sonuç kümesindeki satırların sayısını döndürür.Kullanıcı eşleşmesi var mı diye kontrol için.

    if($regNum > 0){
        $thisReg = mysqli_fetch_assoc($result);
        $hashPassword = $thisReg["password"];
        
        if(password_verify($password, $hashPassword)){
            session_start();
            $_SESSION["username"]= $thisReg["username"]; 
            $_SESSION["email"]= $thisReg["email"];   
            header("location:profile.php");     // giriş yapıldıktan sonra nereye yönlendireceğini belirler.
            exit();
        }
        else{
            echo '<div class="alert alert-danger" role="alert"> Password is wrong! </div>';
        }
    }
    else{
        echo '<div class="alert alert-danger" role="alert"> Username or Email is wrong! </div>';
    }
   
    mysqli_close($connection);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
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
        <h2>Log In</h2>
        <form action="login.php" method="POST">
            <label for="username_or_email" > Email or Username:</label>
            <input type="text" id="username_or_email" name="username_or_email" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit" name="enter">Log In</button>
        </form>
        <p>Don't have an account yet? <a href="signup.php">Register now</a></p>
    </div>
</body>

</html>