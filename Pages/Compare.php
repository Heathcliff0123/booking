<?php
session_start();
if(!$_SESSION['uid'])
{
    header("location:/Pages/Login.php");
}
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['compare']))
 {
         
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    $id = $_SESSION['hid1'];
    $sql = "SELECT * FROM hotels WHERE id <> $id";
    $result1 = $conn->query($sql);
    $sql = "SELECT * FROM hotels WHERE id = $id";
    $current = $conn->query($sql);
    
    $sql = "SELECT * FROM hotels";

    $result2 = $conn->query($sql);
if($result1 || $current){
   if($result1->num_rows > 0||$current->num_rows > 0){
    $current = $current->fetch_assoc();
      echo "<form name='cHotel' action='Compare.php' method='Get'> ";
    echo "<div class='grid-container'>";
    echo "<div class='grid-item'>";
    
        echo "<label for='hotel1'>Choose a hotel 1:</label>";
        echo "<select name='hotel1' >";
        echo "<option value=".$current['id'].">Current Hotel</option>";
        while($row = $result1->fetch_assoc()) 
        {
            
           echo "<option value=".$row['id'].">".$row['name']."</option>";
           
        }
        echo "</select>";
        echo "<div>";
  
   } 
    
} else {
    echo "Error selecting table 21" . $conn->error;
}



if($result2){
   if($result2->num_rows > 0){
   
    echo "<div class='grid-item'>";
    
        echo "<label for='hotel2'>Choose a hotel 2:</label>";
        echo "<select name='hotel2' >";
        while($row = $result2->fetch_assoc()) 
        {
            
           echo "<option value=".$row['id'].">".$row['name']."</option>";
           
        }
        echo "</select>";
        
        echo "</div>";
        echo "</div>";
         echo " <div>";
       
        echo " <button type = 'submit' name='cHotel' id='cHotel'>Choose Hotel</button>";
        
        echo "</div>";
        echo "</form> ";
  
   } else{
    echo "incorrect ussername";
   }
    
} else {
    echo "Error selecting table 22" . $conn->error;
}





  if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['cHotel']))
 {
    
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    $id1 = $_GET['hotel1'];
    $_SESSION['hid1'] = $id1;
    $sql = "SELECT * FROM hotels where id = $id1";
   
    $result1 = $conn->query($sql);
    
    $id2 = $_GET['hotel2'];
    $_SESSION['hid2'] = $id2;
    $sql = "SELECT * FROM hotels where id = $id2";
  
    $result2 = $conn->query($sql);

    if($result1){
   if($result1->num_rows > 0){
       
      
         echo "<div class='grid-container'>";
        echo "<div class='grid-item'>";
        echo "<table border=1>";
   
       while($row = $result1->fetch_assoc()) {
            require_once('./Objects/HotelObject.php');
            $hotel = new Hotel($row["name"],$row["price"],$row["rating"],$row["beds"],$row["bar"],$row["pool"],$row["sea"],$row["activity"],$row["address"]);
            echo "<tr>";
            echo "<td>name</td>";
            echo "<td>" . $hotel->getName(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>price</td>";
            echo "<td>" . $hotel->getPrice(). "</td>";
            echo "</tr>";
            echo "<tr>";
             echo "<td>rating</td>";
            echo "<td>" . $hotel->getRating(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>beds</td>";
            echo "<td>" . $hotel->getBeds(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>bar</td>";
            echo "<td>" . $hotel->getBar(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>pool</td>";
            echo "<td>" . $hotel->getPool(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>sea</td>";
            echo "<td>" . $hotel->getSea(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>activity</td>";
            echo "<td>" . $hotel->getActivity(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>address</td>";
            echo "<td>" . $hotel->getAddress(). "</td>";
            echo "</tr>";
          }
       echo "</table>";
       echo "<form action='Book1.php' method='POST' name='book1'>";
        echo "<button name='book1' type = 'submit' id='book1'>Book</button>";
        echo "</form>";
        echo "</div>";
  
   } else{
    echo "incorrect ussername";
   }
    
} else {
    echo "Error selecting table 2" . $conn->error;
}


    if($result2){
   if($result2->num_rows > 0){
       

         echo "<div class='grid-container'>";
        echo "<div class='grid-item'>";
        echo "<table border=1>";
  
      while($row = $result2->fetch_assoc()) {
            require_once('./Objects/HotelObject.php');
            $hotel2 = new Hotel($row["name"],$row["price"],$row["rating"],$row["beds"],$row["bar"],$row["pool"],$row["sea"],$row["activity"],$row["address"]);
            echo "<tr>";
            echo "<td>name</td>";
            echo "<td>" . $hotel2->getName(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>price</td>";
            echo "<td>" . $hotel2->getPrice(). "</td>";
            echo "</tr>";
            echo "<tr>";
             echo "<td>rating</td>";
            echo "<td>" . $hotel2->getRating(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>beds</td>";
            echo "<td>" . $hotel2->getBeds(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>bar</td>";
            echo "<td>" . $hotel2->getBar(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>pool</td>";
            echo "<td>" . $hotel2->getPool(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>sea</td>";
            echo "<td>" . $hotel2->getSea(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>activity</td>";
            echo "<td>" . $hotel2->getActivity(). "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>address</td>";
            echo "<td>" . $hotel2->getAddress(). "</td>";
            echo "</tr>";
          }
       echo "</table>";
       echo "<form action='Book2.php' method='POST' name='book2'>";
        echo "<button name='book2' type = 'submit' id='book2'>Book</button>";
        echo "</form>";
        echo "</div>";
        echo "</div>";
  
   } else{
    echo "incorrect ussername";
   }
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
}


?>