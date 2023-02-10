<html>
    <head>
        <title>PHP SERVER</title>
        <link rel="stylesheet" href="restaurant.css"> 
        
    </head>
    
    <body class="res">
        <pre class="php">
<?php
$server="localhost";
$username = "root";
$password = "";
$dbname = "register";

$con= mysqli_connect($server, $username, $password, $dbname);

if(!$con) {
   // die("Connection failed: " .mysqli_connect_error());
         echo "not connected ";
}
else{
    echo "connected successfully";
}
$firstname ="";
$lastname ="";
$email ="";
$contact ="";
$gender ="";
$address="";

if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $ques2 = $_POST['ques2'];
    $ques3 = $_POST['ques3'];
    $ques4 = $_POST['ques4'];
    $ques5 = $_POST['ques5'];
    $ques6 = $_POST['ques6'];
    $ques7 = $_POST['ques7'];
    $ques8 = $_POST['ques8'];
    $ques9 = $_POST['ques9'];
    $ques10 = $_POST['ques10'];
    $ques11 = $_POST['ques11'];

    // if (empty($firstname && $lastname && $email && $contact && $gender && $address)) {
    //     echo ' <script> alert("All fields are required")</script>';

    // } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
    //     echo ' <script> alert("Only letters and white space allowed in name")</script>';

    // } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $lastname)) {
    //     echo ' <script> alert("Only letters and white space allowed in name")</script>';

    // } elseif (!preg_match("/^[0-9]*$/", $contact)) {
    //     echo ' <script> alert("Enter correct Phone Number \n [0-9]")</script>';
    // } else {
    //     $query = "insert into restaurant (firstname, lastname, email,contact,gender,address,ques2,ques3,ques4,ques5,ques6,ques7,ques8,ques9,ques10,ques11) 

    // VALUES ('$firstname', '$lastname', '$email','$contact','$gender','$address','$ques2','$ques3','$ques4','$ques5','$ques6','$ques7','$ques8','$ques9','$ques10','$ques11')";

    //     $runquery = mysqli_query($con, $query);

    //     if ($runquery) {
    //         echo '<script>alert("New record inserted successfully!")</script>';
    //     } else {
    //         echo '<script>alert("Insertion Failed !!")</script>';

    //     }
    // }
}

mysqli_close($con);
echo "<br>";
echo " Thank you for your Valuable feedback ";
echo "<BR>";
echo " Name is :$firstname $lastname ";
echo "<br>";
echo " email: $email";
echo "<br>";
echo " GENDER :$gender";
echo "<br>";
echo " contact :$contact";
echo "<br>";
echo " Address:$address ";
echo "<br>";
echo $ques2;
echo "<br>";
echo $ques3;
echo "<br>";
echo $ques4;
echo "<br>";
echo $ques5;
echo "<br>";
echo $ques6;
echo "<br>";
echo $ques7;
echo "<br>";
echo $ques8;
echo "<br>";
echo $ques9;
echo "<br>";
echo $ques10;
echo "<br>";
echo $ques11;
echo "<br>";

?>
</pre>
    </body>
</html>