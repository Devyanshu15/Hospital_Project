<?php
include 'dashboard1.php';
include 'db.php';
if(isset($_POST['submit'])){


$mobile=$_GET['mobile'];
$status=$_POST['status'];
$query=mysqli_query($con, "update  appointment set status='$status' where mobile='$mobile'");
if ($query) {
echo "All remark has been updated.";
}
else
{
  echo "Something Went Wrong. Please try again";
}


}

  
?>

<html>
  <body>
   

<h1 style="margin-top: 10%; margin-left: 30%; margin-bottom: 2%;color:#707070;">View Appointments:</h1>

    <table class="table table-bordered" style="margin-left: 30%; width: 68%;" class="d-md-flex">
       
 
        <tbody>
            <?php
            $mobile=$_GET['mobile'];
$query="select * from appointment where mobile=$mobile";

            $run=mysqli_query($con,$query);
            while($row=mysqli_fetch_array($run)){

            ?>
          <tr>
           
            <th>Service</th>
            <td><?php  echo $row['Service']?></td>
            
          <tr>
            
            <th>Doctors</th>
            <td><?php echo $row['Doctors']?></td>
            
           
          </tr>
         
            
            <th>Name</th>
            <td><?php echo $row['Name'] ?></td>
           
          </tr>
          <tr>
            
            <th>Email</th>
            <td><?php echo $row['Email'] ?></td>
           
          </tr>
          <tr>
           
            <th>Address</th>
            <td><?php echo $row['Address'] ?></td>

          </tr>
          <tr>
           
            <th>Date</th>
            <td><?php echo $row['Date'] ?></td>
           
          </tr>

          <tr>
           
            <th>time</th>
            <td><?php echo $row['time'] ?></td>
           
          </tr>
          <tr>
           
            <th>mobile</th>
            <td><?php echo $row['mobile'] ?></td>
           
          </tr>
          <!-- <tr>
           
            <th>Apply Date</th>
            <td></td>
           
          </tr> -->
         
          <tr>
           
            <th>Status</th>
            <td>
            <?php  
if($row['status']== 'Selected')
{
  echo "Selected";  

}

if($row['status']=="Rejected")
{
  echo "Rejected";
}

     ?>

  
            </td>
           
           
          </tr>
<!-- 
          <tr>
           
            <th>Remark</th>
            <td></td>
           
          </tr> -->
            <?php
            }
            ?>

          </tbody>
          
          </table>
         

          <table class="table table-bordered" style="margin-left: 30%; width: 68%;" class="d-md-flex">
          <form name="submit" method="POST" > 
<h4 style="margin-left: 30%;">Approve Appointment :
</h4>
          <tr>
    <th>Status :</th>
    <td>
   <select name="status" class="form-control wd-450" required="true" >
    
    <option></option>
     <option value="Selected">Selected</option>
     <option value="Rejected">Rejected</option>
   </select></td>
  </tr>

  </table>
          <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 30%; ">Submit</button>
          </form>

        
            </body>
            </html>