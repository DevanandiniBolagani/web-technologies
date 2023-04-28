<!DOCTYPE html>
<html>
    <head>
        <title> hello World program</title>
    </head>
    <body>
        Welcome <?php echo $_POST["firstname"]; ?><br>

        <h2>Thank You <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'] ; ?> </h2>
        <h2> please check your details:</h2>
        <?php
        echo $_POST["firstname"];
        echo $_POST["middlename"];
        echo $_POST["lastname"];
        echo $_POST["dob"];
        echo $_POST["email"];
        echo $_POST["gender"];
        echo $_POST["course"];
        echo $_POST["phone"];
        echo $_POST["city"];
        echo $_POST["pincode"];
        echo $_POST["state"];
        echo $_POST["address"];
        
        ?>
</body> 
</html>
