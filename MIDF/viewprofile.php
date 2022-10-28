<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Dashboard</title>


    
</head>

<body>
    <?php
    include 'Header.php';
    ?>



    <font color="black">




            <h1>Account </h1>
            <font color= "Green" >
 <h1 style="text-align:center;">WELCOME TO YOUR PROFILE </h1>
 </font>
            <hr color="black" size="5">
            <h4>Dashboard </h4>
            <h4>View profile </h4>

            <div>              
                <div> 
                     <table>  
                          <tr>  
                               <th>Name</th> 
                               <th>E-mail</th>  
                               <th>User name</th>   
                               <th>Gender</th>   
                               <th>Date of birth</th>   
                          </tr>  
                          <?php   
                          $data = file_get_contents("data.json");  
                          $data = json_decode($data, true);
                          if (isset($data)) {
                              foreach($data as $row)  
                          {  
                              if (count($row)!=0) {
                                   echo '<tr>
                               <td>'.$row["name"].'</td>
                               <td>'.$row["e-mail"].'</td>
                               <td>'.$row["username"].'</td>
                               <td>'.$row["gender"].'</td>
                               <td>'.$row["dob"].'</td>
                               </tr>'; 
                              }
                              
                                
                          } 
                          }
                           
                          ?>  
                     </table>  
                   </div>
                 </div>
            <h4>Edit profile </h4>
            <h4>Change Profile Picture</h4>
            <h4>Change Password </h4>
            <h4>Logout </h4> <br>


    </font>
    



    <?php
    include 'Footer.php'

    ?>




</body>

</html>