<?php
include 'dashboard1.php';
include 'db.php';
$sql="SELECT * FROM `appointment`  where status='Rejected'";
$res=mysqli_query($con,$sql);
echo $sql;
?>
<html>
  <body>
   

<h1 style="margin-top: 10%; margin-left: 30%; margin-bottom: 2%;color:#707070;" class="d-md-flex">Rejected Appointments:</h1>

    <table class="table table-bordered" style="margin-left: 30%; width: 70%;" >
       
 
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
        <?php $i=1;
           while($row=mysqli_fetch_assoc($res))  {  ?>
          <tr>
          <th><?php echo $i ?></th>
            <td><?php echo $row['Service'] ?></td>
            <td><?php echo $row['Doctors'] ?></td>
            <td><?php echo $row['Name'] ?></td>
            <td><?php echo $row['Email'] ?></td>
            <td><?php echo $row['Address'] ?></td>
            <td><?php echo $row['Date'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <?php
            echo "<td><a href='delete.php?mobile=".$row['mobile']."'>DELETE</a></td>";
            
            ?>
          </tr>
          <?php $i++; } ?>
          
          </tbody>
          </table>
          </body>
          </html>