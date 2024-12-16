
<?php
 session_start();
     require_once ('db.php');

   

    if (isset($_GET['mobile'])) {
      $mobile=$_GET['mobile'];
      $query="delete from appointment where mobile='$mobile'";
      
      $data=mysqli_query($con,$query);

      if ($data) {
        header('Location:dashboard1.php');
      }
      else{
        echo "Record not deleted";
      }
    }

?>