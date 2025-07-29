<html>
    <head>
        <link rel="stylesheet" href="register.css">
<body>
        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close"></ion-icon>
            </span>
        <div class="form-box register">
            <center><h2>Registration</h2></center>
            <form action="register.php" method="POST">
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="person"></ion-icon>
                        </span>
                        <input type="Text" name="username" required>
                        <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon">
                        <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                </div>
                <div class="input-box">
                <span class="icon">
                    <ion-icon name="lock-closed"></ion-icon>
                </span>
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Agree to terms and conditions</label>
            </div>
            <div>
                <input type="submit" name="button" value="save">
            </div>
            <button type="submit" class="btn"><a href="index.html">Register</a></button>
           
            <div class="login-register">
                <p>Already have an account? <a href="sign.html" class="login-link">Login</a></p>
            </div>
            </form>
        </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
    </head>
</html>

<?php
   $db_server="localhost";
   $db_user="root";
   $db_password="";
   $db_name="adp project";

   $conn = "";

   try{
    $conn =mysqli_connect($db_server,$db_user,$db_password,$db_name);
    echo "you are connected";
   }
   catch(mysqli_sql_exception){
    echo "you are not connected to the server";
   }

   $name=$_POST["username"]; echo "$name<br>";
   $email=$_POST["email"]; echo "$email<br>";
   $password=$_POST["password"]; echo "$password<br>";

   $sql = "INSERT INTO user_details(USERNAME,EMAIL,PASSWORD) values('$name','$email','$password')";

  // var_dump($sql);

   $res = mysqli_query($conn,$sql);

   if($res == true){
    echo "the values are fetched to the table";
}
else{
     echo "the values are not fetched to the table";
}

?>
<?php
    mysqli_close($conn);
?>




