


<!DOCTYPE html>
  <!-- Coding by Adnan -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="dashboard css.css">
    <script src="dashboard1.js"></script>
    
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    
    <title>Admin Panel</title> 
    

   


 

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   
<style>
    .sidebar{
        width:280px;
    }
</style>
  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</head>

<body>
    <nav class="sidebar">
        <header>
            <div class="image-text">
                <span class="image">
                    <!--<img src="logo.png" alt="">-->
                </span>

                <div class="text logo-text">
                    <span class="name">Admin Panel</span>
                    <!-- <span class="profession">Web developer</span> -->
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu" style="margin-top:10px">

                <ul class="menu-links" style="padding:0rem; margin:-14px;">
                    <li class="nav-link">
                        <a href="dashboard3.php">
                            <i class='bx bx-home-alt icon' ></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="addservices.php">
                        <i class='bx bx-edit-alt icon' ></i>
                            <span class="text nav-text">Add services</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="addservices2.php">
                        <i class='bx bx-edit-alt icon' ></i>
                            <span class="text nav-text">Add services 2</span>
                        </a>
                    </li> -->
<!-- 
                    <li class="nav-link">
                        <a href="manageservices.php">
                        <i class='bx bx-cog icon'></i>
                            <span class="text nav-text">Manage services</span>
                           
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="manageservices2.php">
                        <i class='bx bx-cog icon'></i>
                            <span class="text nav-text">Manage services 2</span>
                           
                        </a>
                    </li> -->
                    <li class="nav-link">
                        <a href="newappointment.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">NEW Appointment</span>
                        </a>
                    </li>


                    <li class="nav-link">
                        <a href="viewdata.php">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">All Appointment</span>
                        </a>
                    </li>

                    

                    <li class="nav-link">
                        <a href="acceptedappointment.php">
                        <i class='bx bx-check-square icon' ></i>
                            <span class="text nav-text" > Accepted Appointment</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="rejectedappointment.php">
                        <i class='bx bx-notification-off icon'></i>
                            <span class="text nav-text">Rejected Appointment</span>
                        </a>
                    </li>

                  

                </ul>
            </div>

            <div class="bottom-content" style="margin-top:-30px;">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <!-- <section class="home">
        <div class="text">Dashboard Sidebar</div>
    </section> -->

    <script>
        const body = document.querySelector('body'),
      sidebar = body.querySelector('nav'),
      toggle = body.querySelector(".toggle"),
      modeSwitch = body.querySelector(".toggle-switch"),
      modeText = body.querySelector(".mode-text");


toggle.addEventListener("click" , () =>{
    sidebar.classList.toggle("close");
})


modeSwitch.addEventListener("click" , () =>{
    body.classList.toggle("dark");
    
    if(body.classList.contains("dark")){
        modeText.innerText = "Light mode";
    }else{
        modeText.innerText = "Dark mode";
        
    }
});
    </script>
    

    <body style="background-color:#E4E9F7;">



</body>

</html>
   