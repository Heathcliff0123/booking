 <!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
 
<h1>Choose Hotel</h1>
 <form action='Select.php' method="POST" name="details">
     <div >
      <button type = "submit" name="details" id="details">Edit User Details</button>
    </div>
</form>
  <form action='Select.php' method="POST" name="cDates">
    <label>CHeck in Date</label>
    <input name="dateIn" type="datetime-local" required />
    <label>Check out Date</label>
    <input name="dateOut" type="datetime-local" required />
    <div >
      <button name="cDates" type = "submit" id="cDates">Choose Dates</button>
    </div>
  </form>
</body>
</html>
<?php

session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['details']))
 {
    header("location:/Info.php");
 }
 
 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['cDates']))
 {
    $_SESSION["dateIn"] = $_POST['dateIn'];
    $_SESSION["dateOut"] = $_POST['dateOut'];
     
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
   
    $sql = "SELECT * FROM hotels";
    //where Username = '$name'
    $result = $conn->query($sql);
    if($result){
   if($result->num_rows > 0){
    echo "<form name='cHotel' action='Select.php' method='Get'> ";
        echo "<label for='hotel'>Choose a hotel:</label>";
        echo "<select name='hotel' >";
        while($row = $result->fetch_assoc()) // Loop through the columns array
        {
            
           echo "<option value=".$row['id'].">".$row['name']."</option>";
           
        }
        echo "</select>";
        echo " <div>";
        echo " <button type = 'submit' id='cDates'>Choose Hotel</button>";
        echo "</div>";
        echo "</form>";
    
  
   } else{
    echo "incorrect ussername";
   }
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 } 


 if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['hotel']))
 {
    
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    $id = $_GET['hotel'];
    $_SESSION['hid1'] = $id;
    $sql = "SELECT * FROM hotels where id = $id";
    //where Username = '$name'
    $result = $conn->query($sql);
    if($result){
   if($result->num_rows > 0){
       
        //Create an HTML table
        echo "<table border=1>";
       //$response = array();
       while($row = $result->fetch_assoc()) {// Loop through the columns array
          
            // Dispay the column names, using the array
           
            echo "<tr>";
            echo "<td>name</td>";
            echo "<td>" . $row["name"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>price</td>";
            echo "<td>" . $row["price"]. "</td>";
            echo "</tr>";
            echo "<tr>";
             echo "<td>rating</td>";
            echo "<td>" . $row["rating"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>beds</td>";
            echo "<td>" . $row["beds"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>bar</td>";
            echo "<td>" . $row["bar"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>pool</td>";
            echo "<td>" . $row["pool"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>sea</td>";
            echo "<td>" . $row["sea"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>activity</td>";
            echo "<td>" . $row["activity"]. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>address</td>";
            echo "<td>" . $row["address"]. "</td>";
            echo "</tr>";
          }
       echo "</table>";
       echo "<form action='Book1.php' method='POST' name='book1'>";
        echo "<button name='book1' type = 'submit' id='book1'>Book</button>";
        echo "</form>";
         echo "<form action='Compare.php' method='POST' name='compare'>";
        echo "<button name='compare' type = 'submit' id='compare'>Compare</button>";
        echo "</form>";
   
      
  
   } else{
    echo "incorrect ussername";
   }
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 }



?>
