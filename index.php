<?php

if(isset($_POST['name'])){

    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_DATABASE", "resume");

    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    if(!$con){
        die('Connection to db failed due to '.mysqli_connect_error());
    }

    //getting post variable
    $name = $_POST["name"] ;
    $rollna = $_POST["rollna"] ;
    $dob = $_POST["dob"] ;
    $address = $_POST["address"] ;
    $mobile = $_POST["mobile"] ;
    $email = $_POST["email"] ;
    $sem1 = $_POST["sem1"] ;
    $sem2 = $_POST["sem2"] ;
    $sem3 = $_POST["sem3"] ;
    $sem4 = $_POST["sem4"] ;
    $sem5 = $_POST["sem5"] ;
    $sem6 = $_POST["sem6"] ;
    $sem7 = $_POST["sem7"] ;
    $sem8 = $_POST["sem8"] ;
    $cgpa = $_POST["cgpa"] ;
    $hobbies = $_POST["hobbies"] ;
    $reference = $_POST["reference"] ;
    $hostelornot = $_POST["hostelornot"] ;


    $sql="INSERT INTO `resume`.`student` ( `name`, `rollna`, `dob`, `address`, `mobile`, `email`, `sem1`, `sem2`, `sem3`, `sem4`, `sem5`, `sem6`, `sem7`, `sem8`, `cgpa`, `hobbies`, `hostelornot`, `reference`) VALUES ( '$name', '$rollna', '$dob', '$address', '$mobile', '$email', '$sem1', '$sem2', '$sem3', '$sem4', '$sem5', '$sem6', '$sem7', '$sem8', '$cgpa', '$hobbies', '$hostelornot', '$reference');";
    if($con->query($sql)==FALSE)
    {
        echo "Error: $sql <br> $con->error";
    }

$con->close();
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CV maker form</title>
</head>

<body>
    <div class="container">
        <h1>Fill this details to get your cv.</h1>
        <form action="index.php" method="post">

            <label>PERSONAL DETAILS</label>
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="rollna" id="rollna" placeholder="Enter Your Roll Number">
            <input type="date" id="dob" name="dob" placeholder="Enter Your Date of Birth">
            <input type="text" id="address" name="address" placeholder="Enter Your Address">
            <input type="number" id="mobile" name="mobile" min="1000000000" max="9999999999" placeholder="Enter Your Mobile Number">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">

            <label>SEMESTER RESULTS</label>
            <input type="number" id="sem1" name="sem1" min="0.00" max="10.00" step="0.01" placeholder="Semester 1 SGPA">
            <input type="number" id="sem2" name="sem2" min="0.00" max="10.00" step="0.01" placeholder="Semester 2 SGPA">
            <input type="number" id="sem3" name="sem3" min="0.00" max="10.00" step="0.01" placeholder="Semester 3 SGPA">
            <input type="number" id="sem4" name="sem4" min="0.00" max="10.00" step="0.01" placeholder="Semester 4 SGPA">
            <input type="number" id="sem5" name="sem5" min="0.00" max="10.00" step="0.01" placeholder="Semester 5 SGPA">
            <input type="number" id="sem6" name="sem6" min="0.00" max="10.00" step="0.01" placeholder="Semester 6 SGPA">
            <input type="number" id="sem7" name="sem7" min="0.00" max="10.00" step="0.01" placeholder="Semester 7 SGPA">
            <input type="number" id="sem8" name="sem8" min="0.00" max="10.00" step="0.01" placeholder="Semester 8 SGPA">
            <input type="number" id="cgpa" name="cgpa" min="0.00" max="10.00" step="0.01" placeholder="Enter Final CGPA">

            <label>EXTRA INFORMATION</label>
            <textarea id="hobbies" name="hobbies" placeholder="Enter your hobbies"></textarea>
            <textarea id="reference" name="reference" placeholder="References"></textarea>
            <br>
            <div class="radio" style="display:flex">
                <input type="radio" id="Hosteller" name="hostelornot" value="Hosteller" style="padding:0;margin-left:30px;display:inline">
                <label for="Hosteller" style="padding:0px; margin:0;display:inline">Hosteller</label>
                <br>
                <input type="radio" id="Day scholar" name="hostelornot" value=" Day scholar " style="margin-left:30px;display:inline">
                <label for="female" style="padding:0; margin:0;display:inline"> Day scholar </label>
            </div>
            <button class="btn">Submit</button>

            <a href="http://localhost/CV%20maker/search.php">Click Here to search by roll number</a>

        </form>
    </div>
</body>

</html>