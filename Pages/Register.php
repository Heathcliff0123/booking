 <!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<h1>Register</h1>
  <form action='Register.php' method="POST" name="register" id="register">
    <label>Usser Name</label>
    <input name="name" type="text" required />
    <label>Full Name</label>
    <input name="fullname" type="text" required />
    <label>Email</label>
    <input name="email" type="text" required />
    <label>Password</label>
    <input name="password" type="text" required />
    <div >
      <button type = "submit" name="register" id="register">Register</button>
    </div>
  </form>

    </form>

  <form action='Register.php' method="POST" name="login">
     <div >
      <button type = "submit" name="login" id="login">Login</button>
    </div>
</form>
</body>
</html>


<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
 {
    header("location:/Pages/Login.php");
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register']))
 {
  
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    if(isset($_POST['name'])&&isset($_POST['fullname'])&&isset($_POST['email'])&&isset($_POST['password']))
    $name = $_POST['name'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM users where Username = '$name'";
    $result = $conn->query($sql);
    if($result){
    if($result->num_rows == 0){
      $sql = "INSERT INTO `users`(`Username`, `Fullname`, `password`, `email`) VALUES ('$name','$fullname','$password','$email')";
      $result = $conn->query($sql);
      if($result){
         $_SESSION['uid'] = $row;
          header("location:/Pages/Select.php");
      } else{
        echo "registration failed please try again later";
      }
    } else{
      echo "ussername already exsists";
    }
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 }

?>