<?php
session_start();
if(!$_SESSION['uid'])
{
    header("location:/Pages/Login.php");
}
 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['book2']))
 {
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
    $hid = $_SESSION['hid2'];
    $uid = $_SESSION['uid'];
   
    $sql = "SELECT * FROM users where id = $uid";
    $resultu = $conn->query($sql);
     $sql = "SELECT * FROM hotels where id = $hid";
    $resulth = $conn->query($sql);
    if($resultu){
   if($resultu->num_rows > 0){
    $userd = $resultu->fetch_assoc();
       
     
  
   } else{
    echo "user data fault";
   }

   
} else {
    echo "Error selecting table 2" . $conn->error;
}
 if($resulth){
   if($resulth->num_rows > 0){
    $hoteld = $resulth->fetch_assoc();
       
     
  
     } else{
      echo "hotel data fault";
     }
    }

    $gName = $userd["Fullname"];
    $inDate = strtotime( $_SESSION["dateIn"]);
    $outDate = strtotime($_SESSION["dateOut"]);
    $diff = getdate($outDate - $inDate)["mday"];
    $inDate = date('y/m/d',$inDate);
    $outDate = date('y/m/d',$outDate);
     require_once('./Objects/HotelObject.php');
    $hotel = new Hotel($hotelData["name"],$hotelData["price"],$hotelData["rating"],$hotelData["beds"],$hotelData["bar"],$hotelData["pool"],$hotelData["sea"],$hotelData["activity"],$hotelData["address"]);
    $hName = $hotel->getName();
    $price = $hotel->getPrice();
    $total = $hotel->getTotal($diff);
    $rating = $hotel->getRating();
    $beds = $hotel->getBeds();
    $bar = $hotel->getBar();
    $pool = $hotel->getPool();
    $sea = $hotel->getSea();
    $activity = $hotel->getActivity();
    $address = $hotel->GETaddress();

        echo "<table border=0>";

            echo "<tr>";
            echo "<td>Guest Name</td>";
            echo "<td>" . $gName. "</td>";
            echo "</tr>";
             echo "<tr>";
            echo "<td>Check In Date</td>";
            echo "<td>" . $inDate. "</td>";
            echo "</tr>";
             echo "<tr>";
            echo "<td>Check Out Date</td>";
            echo "<td>" . $outDate. "</td>";
            echo "</tr>";
            echo "<td>Length Of Stay</td>";
            echo "<td>" . $diff. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Hotel Name</td>";
            echo "<td>" . $hName. "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Price</td>";
            echo "<td>" . $price. "</td>";
            echo "</tr>";
             echo "<td>Cost Of Stay</td>";
            echo "<td>" . $total. "</td>";
            echo "</tr>";
            echo "<tr>";
             echo "<td>Rating</td>";
            echo "<td>" . $rating. "/5 </td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Beds in room</td>";
            echo "<td>" . $beds. "</td>";
            echo "</tr>";
            
            if($bar == 1){
                echo "<tr>";
                echo "<td>Bar</td>";
                echo "<td>Yes</td>";
                echo "</tr>";
            } else{
                echo "<tr>";
                echo "<td>Bar</td>";
                echo "<td>No</td>";
                echo "</tr>";
            }

             if($pool == 1){
                echo "<tr>";
                echo "<td>Pool</td>";
                echo "<td>Yes</td>";
                echo "</tr>";
            } else{
                echo "<tr>";
                echo "<td>Pool</td>";
                echo "<td>No</td>";
                echo "</tr>";
            }


            if($sea == 1){
                echo "<tr>";
                echo "<td>Sea</td>";
                echo "<td>Yes</td>";
                echo "</tr>";
            } else{
                echo "<tr>";
                echo "<td>Sea</td>";
                echo "<td>No</td>";
                echo "</tr>";
            }

            if($activity == 1){
                echo "<tr>";
                echo "<td>Activity</td>";
                echo "<td>Yes</td>";
                echo "</tr>";
            } else{
                echo "<tr>";
                echo "<td>Activity</td>";
                echo "<td>No</td>";
                echo "</tr>";
            }
            echo "<tr>";
            echo "<td>address</td>";
            echo "<td>" . $address. "</td>";
            echo "</tr>";
            echo "</table>";
           echo "<form action='Bookings.php' method='POST' name='booking1'>";
            echo "<button name='booking1' type = 'submit' id='booking1' >Confirm</button>";
            echo "</form>";


    


 } else{



    echo 'fail hotel';
 }


  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['confirm']))
 {
    echo "<form action='Info.php' method='POST' name='select'>";
    echo " <div >";
    echo "  <button type = 'submit' name='select' id='select'>Select Hotel</button>";
    echo "  </div>";
    echo "</form>";
    echo "Booking Confirmed";
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['select']))
 {
    header("location:/Pages/Select.php");
 }

?>