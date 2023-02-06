 <!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
<h1>Edit User Details</h1>
  <form action='Info.php' method="POST" name="select">
     <div >
      <button type = "submit" name="select" id="select">Select Hotel</button>
    </div>
</form>

<form action='Bookings.php' method='POST' name='booking3'>
    <button name='booking3' type = 'submit' id='booking3' >View Bookings</button>
   </form>

  <form action='Info.php' method="GET" name="refresh" id="refresh">
     <div >
      <button name="refresh" id="refresh" action='Info.php' method="GET">Refresh</button>
    </div>
   
  </form>

    <form action='Info.php' method="POST" name="update" id="update">
    <label>Usser Name</label>
    <input name="name" id="name" type="text"  />
    <label>Full Name</label>
    <input name="fullname" type="text"  />
    <label>Email</label>
    <input name="email" type="text"  />
    <label>Password</label>
    <input name="password" type="text"  />
    <div >
      <button type = "submit" name="update" id="update">Register</button>
    </div>
    </form>
</body>
</html>


<?php
session_start();
if(!$_SESSION['uid'])
{
    header("location:/Login.php");
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['select']))
 {
    header("location:/Select.php");
 }

 if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['refresh']))
 {

  
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
   
    // $name = $_POST['name'];
    // $fullname = $_POST['fullname'];
    // $email = $_POST['email'];
    // $password = $_POST['password'];
   // $id = "<script>localstorage.getItem('id');</script>";
    $id = $_SESSION['uid'];
  
    //$sql = "INSERT INTO `users`(`Username`, `Fullname`, `password`, `email`) VALUES ('$name','$fullname','$password','$email')";
    $sql = "SELECT * FROM users WHERE id = $id";
    $result = $conn->query($sql);
    if($result){

   if($result->num_rows > 0){
     echo "success";
    //echo "<script>document.getElementById("'name'").setAttribute('$id');</script>";


       // echo "success";

      //Create an HTML table
      echo "<p>Please enter knew values in relevent columns above</p>";
        echo "<table border=1>";
       //$response = array();
        echo "<tr>";
            echo "<td>Username</td>";
            echo "<td>Fullname</td>";
            echo "<td>password</td>";
            echo "<td>email</td>";
            echo "</tr>";
       while($row = $result->fetch_assoc()) {// Loop through the columns array
            echo "<tr>";
            // Dispay the column names, using the array
           
            echo "<td>" . $row["Username"]. "</td>";
            echo "<td>" . $row["Fullname"]. "</td>";
            echo "<td>" . $row["password"]. "</td>";
            echo "<td>" . $row["email"]. "</td>";
            echo "</tr>";
           //$response[] = $row; 
          }
       echo "</table>";
         // echo json_encode($response);
   }
  //  echo"success";
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update']))

 {

  
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
        $id = $_SESSION['id'];
         echo "hello ";
  if(isset($_POST['name']) && $_POST['name'] != "")
   {
   
     $name = $_POST['name'];
     $sql = "UPDATE users set Username = '$name' where id = $id";
       $result = $conn->query($sql);
      if($result){

        echo"success";
    
      } else {
          echo "Error selecting table 2" . $conn->error;
      }
   }

   if(isset($_POST['fullname']) && $_POST['fullname'] != "")
   {
   
     $name = $_POST['fullname'];
     $sql = "UPDATE users set Fullname = '$name' where id = $id";
       $result = $conn->query($sql);
      if($result){

        echo"success";
    
      } else {
          echo "Error selecting table 2" . $conn->error;
      }
   }

    if(isset($_POST['email']) && $_POST['email'] != "")
   {
   
     $email = $_POST['email'];
     $sql = "UPDATE users set email = '$email' where id = $id";
       $result = $conn->query($sql);
      if($result){

        echo"success";
    
      } else {
          echo "Error selecting table 2" . $conn->error;
      }
   }

    if(isset($_POST['password']) && $_POST['password'] != "")
   {
   
     $password = $_POST['password'];
     $sql = "UPDATE users set password = '$password' where id = $id";
       $result = $conn->query($sql);
      if($result){

        echo"success";
    
      } else {
          echo "Error selecting table 2" . $conn->error;
      }
   }

 }


