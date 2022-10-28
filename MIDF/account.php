<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Dashboard</title>


    <style>
        .line {
            width: 5px;
            background-color: black;
            height: 435px;
            position: absolute;
            left: 20%;
            bottom: 40%;



        }
    </style>
</head>

<body>
    <?php
    include 'Header.php';
    ?>


    <div class="line"></div>

    <font color="black">




            <h1>Account </h1>
            <font color= "Green" >
 <h1 style="text-align:center;">WELCOME TO YOUR PROFILE </h1>
 </font>
            <hr color="black" size="5">
            <h4 style="text-align:left;"> <a href="">Dashboard </h4>
            <h4 style="text-align:left;"> <a href="http://localhost/MIDF/viewprofile.php">view profile  </h4>
            <h4 style="text-align:left;"> <a href="http://localhost/MIDF/editprofile.php">Edit profile </h4>
            <h4 style="text-align:left;"> <a href="http://localhost/MIDF/editprofile.php">Change Profile Picture</h4>
            <h4 style="text-align:left;"> <a href="http://localhost/MIDF/changepass.php">Change password </h4>
            <h4 style="text-align:left;"> <a href="http://localhost/MIDF/logout.php">log out </h4> <br>


    </font>



    <?php
    include 'Footer.php'

    ?>




</body>

</html>