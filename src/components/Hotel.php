<?php
//session_start();
//$_SERVER['REQUEST_METHOD'] == 'POST' && 
 if(isset($_GET['submit']))
 {
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    //$sql = "INSERT INTO users ('id','Username','Fullname','password','email') VALUES ('K','K','K','K','K')";
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    if($result){
   // if($result->num_rows > 0){
        // Create an HTML table
        //echo "<table border=1>";
        $response = array();
        while($row = mysqli_fetch_assoc($result)) {// Loop through the columns array
            // echo "<tr>";
            // // Dispay the column names, using the array
            // echo "<td>" . $row["id"]. "</td>";
            // echo "<td>" . $row["Username"]. "</td>";
            // echo "<td>" . $row["Fullname"]. "</td>";
            // echo "<td>" . $row["password"]. "</td>";
            // echo "<td>" . $row["email"]. "</td>";
            // echo "</tr>";
            $response[] = $row; 
          }
       // echo "</table>";
          echo json_encode($response);
   // }
    //echo"success";
} else {
    echo "Error selecting table " . $conn->error;
}
 }

?>