

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search By Roll Number</title>
</head>
<body>
    <form action="search.php" method="post">
    <label>Roll Number</label>
    <input type="text" name="rollna" id="rollna">
    <input type="submit" class="btn"></button>
    </form>
    <br>
</body>
</html>

<?php
if(isset($_POST['rollna'])){

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "resume");

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if(!$con){
        die('Connection to db failed due to '.mysqli_connect_error());
    }

    $rollna=$_POST['rollna'];
    $sql="SELECT * FROM `resume`.`student` WHERE `rollna`  LIKE  '$rollna'";

    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);            #fetch as assocative array

   echo "Name         :".$row['name']."<br><br>";
   echo "Roll Number  :".$row['rollna']."<br><br>";
   echo "Date of Birth:".$row['dob']."<br><br>";
   echo "Address      :".$row['address']."<br><br>";
   echo "Mobile Number:".$row['mobile']."<br><br>";
   echo "Email id     :".$row['email']."<br><br>";
   echo "Sem1 SGPA    :".$row['sem1']."<br><br>";
   echo "Sem2 SGPA    :".$row['sem2']."<br><br>";
   echo "Sem3 SGPA    :".$row['sem3']."<br><br>";
   echo "Sem4 SGPA    :".$row['sem4']."<br><br>";
   echo "Sem5 SGPA    :".$row['sem5']."<br><br>";
   echo "Sem6 SGPA    :".$row['sem6']."<br><br>";
   echo "Sem7 SGPA    :".$row['sem7']."<br><br>";
   echo "Sem8 SGPA    :".$row['sem8']."<br><br>";
   echo "CGPA         :".$row['cgpa']."<br><br>";
   echo "HOBBIES      :".$row['hobbies']."<br><br>";
   echo "Student is   :".$row['hostelornot']."<br><br>";
   echo "Refernece    :".$row['reference']."<br><br>";

$con->close();
}

?>
