<?php 
include 'dashboard1.php' ?>



 
     <!-- Topbar Start -->
     <!-- <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block" >
        <div class="row gx-0">
             <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Time:10:30am to 3:00pm -5:00pm to 8:30pm </small>
                </div>
            </div> -->
            <!-- <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>toshersc@gmail.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+91-9928370538</p>
                    </div>
                </div>
            </div> -->
        <!-- </div> -->
    <!-- </div>  -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"><img src="img/logos.png" height="60px" alt=""></i>Sanjeevani Hospital</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="service.html" class="nav-item nav-link">Service</a>
                <a href="Gallery.html" class="nav-item nav-link">Gallery</a>
                <a href="Doctors.html" class="nav-item nav-link active" >Doctors</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
                <a href="login.php" class="nav-item nav-link">Log-Out</a>
            </div>  
            <div id="but">
                
                <button class="animated slideInLeft" id="btn"><a  id="dev"href="dashboard.php">pateint Details</a></button>
             </div> -->
    <!-- Navbar End -->
   



    <?php
                    require "db.php";
                    $sr=1;


                    if(isset($_POST['submit']))
                    {
                        $name=$_POST['name'];
                        echo "<script>alert('$name')</script>";
                        $query="SELECT * from appointment where Doctors like '%$name%'"; 

                        // $query1="SELECT * from appointment where Date='$date'"; 
                         $result=mysqli_query($con,$query); 

                    }
                    else{
                        $query="select * from appointment"; 
                    $result=mysqli_query($con,$query); 
                    echo "no data";
                    }

                    if(isset($_POST['filter_date']))
                    {
                        $date=$_POST['date'];
                        $query="SELECT * from appointment where date='$date'"; 
                         $result=mysqli_query($con,$query); 
                         
                    }
                    else{
                    echo "no appointment on this date";
                    }

                    
                   
                
            ?>

<!-- <div style="text-align: center;">
<form method="POST" action="#"> -->
                <!-- <input type="type" name="name" placeholder=" Doctor name"> -->
                <!-- <select name="name">
                    <option value="">----select---</option>
                    <option value="Dr. Toshar">Dr Toshar</option>
                    <option value="Dr.parmar">Dr. Parmar</option>
                </select>
                <input type="submit" VALUE="submit" name="submit" id="submit">
</form>
            </div>  -->
            
            <div style="text-align:center;">
            <form method="POST" action="#">
                <input type="date"name="date" placeholder="select date">
                <input type="submit"name="filter_date">
            </form>
            </div>
                
    <table class="table table-bordered table-success w-50" style="margin-left:auto;">
    
    
    <tr>
        <th>ID</th>
        <th scope="col">SERVICE</th>
        <th scope="col"> DOCTOR</th>
        <th scope="col"> NAME</th>
        <th scope="col"> E-MAIL</th>
        <th scope="col"> Address</th>
        <th scope="col">DATE</th>
        <th scope="col">NUMBER</th> 
        <th scope="col">FINAL</th>
        <th scope="col">VIEWED</th>
   </tr>   
   


<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
        <td><?php echo $sr++ ?></td>
        <td><?php echo $rows['Service']; ?></td>
       
        <td><?php echo $rows['Doctors']; ?></td>
        <td><?php echo $rows['Name']; ?></td>
        <td><?php echo $rows['Email']; ?></td>
        <td><?php echo $rows['Address']; ?></td>
        <td><?php echo $rows['Date']; ?></td>
        <td><?php echo $rows['mobile']; ?></td>
       
        <?php
        echo "<td><a href='delete.php?mobile=".$rows['mobile']."'>CHECKED</a></td>";
        echo "<td><a href='viewappointment.php?mobile=".$rows['mobile']."'>VIEW</a></td>";
        ?> 
		</tr> 
	<?php 
               } 
          ?>

</table>


    

<!-- Footer Start -->

<!-- Footer End -->

