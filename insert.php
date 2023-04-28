<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => registration
        $conn = mysqli_connect("localhost", "root", "", "registration");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all the values from the form data(input)
        $firstname =  $_REQUEST['firstname'];
        $middlename = $_REQUEST['middlename'];
        $lastname = $_REQUEST['lastname'];
        $dob = $_REQUEST['dob'];
        $email = $_REQUEST['email'];
        $gender =  $_REQUEST['gender'];
        $course = $_REQUEST['course'];
        $phone = $_REQUEST['phone'];
        $city = $_REQUEST['city'];
        $pincode = $_REQUEST['pincode'];
        $state = $_REQUEST['state'];
        $address = $_REQUEST['address'];
        
         
        // Performing insert query execution
        // here our table name is student
        $sql = "INSERT INTO student  VALUES ('$firstname','$middlename',
            '$lastname','$dob','$email','$gender','$course','$phone','$city','$pincode','$state','$address')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$firstname\n $lastname\n "
                . "$dob\n $email\n $gender\n $course\n $phone\n $city\n $pincode\n $state\n $address ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>