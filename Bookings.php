
<?php

session_start();

if(!$_SESSION['uid'])
{
    header("location:/Login.php");
}

 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {

  echo $_SESSION["cid"];
 
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }
       
        $sql = "UPDATE `bookings` set cancelled = 1 where checkout < CURRENT_DATE()";
        $result = $conn->query($sql);
     

      }


 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['booking1']))
 {
 
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }

    $hid = $_SESSION['hid1'];
    $uid = $_SESSION['uid'];
    $inDate = $_SESSION["dateIn"];
    $outDate = $_SESSION["dateOut"];
    $cancelled = 0;
    $sql = "SELECT name FROM hotels where id = $hid";
    $result = $conn->query($sql);
    if($result){
    if($result->num_rows > 0){
        $name = $result->fetch_assoc()["name"];
      $sql = "INSERT INTO `bookings` (`hid`, `uid`, `checkIn`, `checkout`,`hname`,`cancelled`) VALUES ('$hid','$uid','$inDate','$outDate','$name','$cancelled')";
      //$sql = "INSERT INTO `users`(`Username`, `Fullname`, `password`, `email`) VALUES ('$name','$fullname','$password','$email')";
      $result2 = $conn->query($sql);
      if(!$result2){
        echo "booking not succesfull please refresh page";
      }
    } else{
      echo "ussername already exsists";
    }
     $sql = "SELECT * FROM `bookings`  WHERE `uid` = $uid";
    $result = $conn->query($sql);
    if($result){
   if($result->num_rows > 0){
        //Create an HTML table
        echo "<table border=1>";
         echo "<tr>";
            // Dispay the column names, using the array
            echo "<td>Hotel Name</td>";
            echo "<td>Check In Date</td>";
            echo "<td>Check Out Date</td>";
           
            echo "<td>Cancelled</td>";    
            echo "</tr>";
       while($row = $result->fetch_assoc()) {// Loop through the columns array
            echo "<tr>";
            // Dispay the column names, using the array
            echo "<td>" . $row["hname"]. "</td>";
            echo "<td>" . $row["checkIn"]. "</td>";
            echo "<td>" . $row["checkout"]. "</td>";

            if($row["cancelled"] == 1){
                echo "<td>Yes</td>";
            } else{
                echo "<td>No</td>";
            }
            

           
            echo "</tr>";
          
          }
       echo "</table>";
        echo "<form action='Bookings.php.php' method='POST' name='select'>";
        echo "<button name='select' type = 'submit' id='select'>Choose Hotel</button>";
        echo "</form>";
   }
  
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 
 }



  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['booking2']))
 {
 
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }

    $hid = $_SESSION['hid2'];
    $uid = $_SESSION['uid'];
    $inDate = $_SESSION["dateIn"];
    $outDate = $_SESSION["dateOut"];
    $cancelled = 0;
    $sql = "SELECT name FROM hotels where id = $hid";
    $result = $conn->query($sql);
    if($result){
    if($result->num_rows > 0){
        $name = $result->fetch_assoc()["name"];
      $sql = "INSERT INTO `bookings` (`hid`, `uid`, `checkIn`, `checkout`,`hname`,`cancelled`) VALUES ('$hid','$uid','$inDate','$outDate','$name','$cancelled')";
      //$sql = "INSERT INTO `users`(`Username`, `Fullname`, `password`, `email`) VALUES ('$name','$fullname','$password','$email')";
      $result2 = $conn->query($sql);
       if(!$result2){
        echo "booking not succesfull please refresh page";
      }
   
    } else{
      echo "ussername already exsists";
    }
     $sql = "SELECT * FROM `bookings`  WHERE `uid` = $uid";
    $result = $conn->query($sql);
    if($result){
   if($result->num_rows > 0){
        //Create an HTML table
        echo "<table border=1>";
         echo "<tr>";
            // Dispay the column names, using the array
            echo "<td>Hotel Name</td>";
            echo "<td>Check In Date</td>";
            echo "<td>Check Out Date</td>";
           
            echo "<td>Cancelled</td>";

           
            echo "</tr>";
       while($row = $result->fetch_assoc()) {// Loop through the columns array
            echo "<tr>";
            // Dispay the column names, using the array
            echo "<td>" . $row["hname"]. "</td>";
            echo "<td>" . $row["checkIn"]. "</td>";
            echo "<td>" . $row["checkout"]. "</td>";
            echo "<td>" . $row["bid"]. "</td>";
            if($row["cancelled"] == 1){
                echo "<td>Yes</td>";
            } else{
                echo "<td>No</td>";
            }
            
      
           
            echo "</tr>";
          
          }
       echo "</table>";
         echo "<form action='Bookings.php.php' method='POST' name='select'>";
        echo "<button name='select' type = 'submit' id='select'>Choose Hotel</button>";
        echo "</form>";
     
   }

    
} else {
    echo "Error selecting table 2" . $conn->error;
}
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 
 }


 
  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['booking3']))
 {
 
    $conn = new mysqli('sql8.freesqldatabase.com','sql8594466','XBamJ2kXFC','sql8594466');
        if($conn->connect_error){
            die( $conn->connect_error);
        }

    $hid = $_SESSION['hid2'];
    $uid = $_SESSION['uid'];
    $inDate = $_SESSION["dateIn"];
    $outDate = $_SESSION["dateOut"];
    $cancelled = 0;
    $sql = "SELECT name FROM hotels where id = $hid";
    $result = $conn->query($sql);
    if($result){
    if($result->num_rows > 0){
     
   
    } else{
      echo "ussername already exsists";
    }
     $sql = "SELECT * FROM `bookings`  WHERE `uid` = $uid";
    $result = $conn->query($sql);
    if($result){
   if($result->num_rows > 0){
        //Create an HTML table
        echo "<table border=1>";
         echo "<tr>";
            // Dispay the column names, using the array
            echo "<td>Hotel Name</td>";
            echo "<td>Check In Date</td>";
            echo "<td>Check Out Date</td>";
           
            echo "<td>Cancelled</td>";

           
            echo "</tr>";
       while($row = $result->fetch_assoc()) {// Loop through the columns array
            echo "<tr>";
            // Dispay the column names, using the array
            echo "<td>" . $row["hname"]. "</td>";
            echo "<td>" . $row["checkIn"]. "</td>";
            echo "<td>" . $row["checkout"]. "</td>";
            echo "<td>" . $row["bid"]. "</td>";
            if($row["cancelled"] == 1){
                echo "<td>Yes</td>";
            } else{
                echo "<td>No</td>";
            }
            
      
           
            echo "</tr>";
          
          }
       echo "</table>";

              echo "<form action='Bookings.php.php' method='POST' name='select'>";
        echo "<button name='select' type = 'submit' id='select'>Choose Hotel</button>";
        echo "</form>";
      
   }

    
} else {
    echo "Error selecting table 2" . $conn->error;
}
    
} else {
    echo "Error selecting table 2" . $conn->error;
}
 
 }

 if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['select']))
 {

  header("location:/Select.php");
 
 }

?>