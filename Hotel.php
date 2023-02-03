<?php
session_start();

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
    $sql = "INSERT INTO `users`(`Username`, `Fullname`, `password`, `email`) VALUES ('$name','$fullname','$password','$email')";
    //$sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if($result){
//    if($result->num_rows > 0){
//         //Create an HTML table
//         echo "<table border=1>";
//        //$response = array();
//        while($row = $result->fetch_assoc()) {// Loop through the columns array
//             echo "<tr>";
//             // Dispay the column names, using the array
//             echo "<td>" . $row["id"]. "</td>";
//             echo "<td>" . $row["Username"]. "</td>";
//             echo "<td>" . $row["Fullname"]. "</td>";
//             echo "<td>" . $row["password"]. "</td>";
//             echo "<td>" . $row["email"]. "</td>";
//             echo "</tr>";
//            //$response[] = $row; 
//           }
//        echo "</table>";
//          // echo json_encode($response);
//    }
    echo"success";
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 } else {
    echo "failed1";
 }
 

?>