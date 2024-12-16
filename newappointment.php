<?php
include 'db.php';
include 'dashboard1.php';
?>
<html>
    <body>
    <h1 style="margin-top: 10%; margin-left: 30%; margin-bottom: 2%; color:#707070;">New Appointments:</h1>


<!-- <table class="table table-bordered" style="margin-left: 30%; width: 70%;" class="d-md-flex"> -->
<table class="table table-bordered table-success w-50" style="margin-left:auto;"
   
<?php
    $ret=mysqli_query($con,"select *from  appointment where status=''");
    
 
?>


    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Service</th>
            <th scope="col">Doctors</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Address</th>
            <th scope="col"> Date</th>
            <th scope="col">time</th>
            <th scope="col">mobile</th>
            <th scope="col">Action</th>
            
      </tr>
    </thead>
    <tbody>
    <?php $cnt=1;
       while($row=mysqli_fetch_assoc($ret))  {  ?>
      <tr>
        <td ><?php echo $cnt ?></td>
        <td><?php echo $row['Service'] ?></td>
            <td><?php echo $row['Doctors'] ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Address'] ?></td>
            <td><?php echo $row['Date'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
        <td><a href="viewappointment.php?mobile=<?php echo $row['mobile'] ?>" style="text-decoration:none;">View</a></td>
      </tr>
      <?php $cnt=$cnt+1;
     } ?>
      
      </tbody>
      </table>
</body>
    </html>

    