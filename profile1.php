<?php 
 
       require 'databaseconnection1.php';



if(isset ($_SESSION['id'])){

       $sql = "select * from users";
       $res = mysqli_query($con,$sql);   
       $data = mysqli_fetch_assoc($res);
      
    


?>




<!DOCTYPE HTML>
<html>

<head>
    <title>data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>

<body>

    <div class="container">

        <div class="page-header">

        <center style="margin-top: 40px;">
            <h2 style="color:red">welcome <?php echo $_SESSION['name']   ?></a></h2>
            </center>
        </div>






        <table class='table table-hover table-bordered table-dark'>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>




<?php 
            

              
                echo '<tr>';
            
                echo '<td>'.$_SESSION['id'].'</td>';
                echo '<td>'.$_SESSION['name'].'</td>';
                echo '<td>'.$_SESSION['phone'].'</td>';
                echo '<td>'.$_SESSION['email'].'</td>';


                echo '</tr>';

       
 



?>







        </table>
       




    </div>



</body>

</html>
<?php


}
else{
    header("location:login.php");

}








?>

<div class="container">
        <form action="logout.php" method="post" >

        <button type="submit"  name= "Submit1" class="btn btn-danger"  >Log out</button>

        </form>
</div>