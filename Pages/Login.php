 <!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<h1>Login</h1>
  <form action='Login.php' method="POST" name="login">
    <label>Usser Name</label>
    <input name="name" type="text" required />
    <label>Password</label>
    <input name="password" type="text" required />
    <div >
      <button type = "submit" name="login" id="login">Login</button>
    </div>

  </form>

  <form action='Login.php' method="POST" name="register">
     <div >
      <button type = "submit" name="register" id="register">Register</button>
    </div>
</form>
</body>
</html>

<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register']))
 {
    header("location:/Pages/Register.php");
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']))
 {
  
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    if(isset($_POST['name'])&&isset($_POST['password']))
    $name = $_POST['name'];
    $password = $_POST['password'];
    $sql = "SELECT password FROM users where Username = '$name'";

    $result = $conn->query($sql);
    if($result){
   if($result->num_rows > 0){
        foreach ($result->fetch_assoc() as $row)
        {
 
           
            if($password == $row){
                echo "Password success";
                 $sql = "SELECT * FROM users where Username = '$name' and Password = '$password' ";
                 $result = $conn->query($sql);
                 
                 if($result){
                     if($result->num_rows > 0 && $result->num_rows<2){
                         while($row = $result->fetch_assoc())
                        {
                            $_SESSION['uid'] = $row["id"];            
                            header("location:/Pages/Select.php");
                        }
                    } else {
                        echo "Password incorrect";
                    }
                }
            }
        }
      
  
   } else{
    echo "incorrect ussername";
   }
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 }

?>