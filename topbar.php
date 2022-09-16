 <?php
    session_start();
    if ($_SESSION['user'] == "") {
        header('location:index.html');
    }
    include('php/dbconn.php');
    $user = $_SESSION['user'];

    $sql = "select * from login_user where username='$user'";
    $query = mysqli_query($db, $sql);
    $fetch = mysqli_fetch_array($query);
    // user avatar
    $avatar = $fetch[6];
    if (empty($avatar)) $avatar = 'avatar.png';

    ?>
 <!-- TOP NAVBAR -->
 <nav role="navigation" class="navbar navbar-static-top">
     <div class="container-fluid">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
             <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                 <span class="entypo-menu"></span>
             </button>

             <div id="logo-mobile" class="visible-xs">
                 <h1>
                     <span>VMS</span>
                 </h1>
             </div>

         </div>


         <!-- Collect the nav links, forms, and other content for toggling -->
         <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">


             </ul>
             <div id="nt-title-container" class="navbar-left running-text">
                 <ul class="date-top">
                     <li class="entypo-calendar" style="margin-right:5px"></li>
                     <li id="Date"></li>
                 </ul>

                 <ul id="digital-clock" class="digital">
                     <li class="entypo-clock" style="margin-right:5px"></li>
                     <li class="hour"></li>
                     <li>:</li>
                     <li class="min"></li>
                     <li>:</li>
                     <li class="sec"></li>
                     <li class="meridiem"></li>
                 </ul>

             </div>

             <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                 <li>
                     <a href="#">

                         <img alt="" class="admin-pic img-circle" 
                         src="<?php echo '/vms/php/folder/' . $avatar; ?>">
                         <?php echo $fetch['name'] ?>
                     </a>

                 </li>

             </ul>

         </div>
         <!-- /.navbar-collapse -->
     </div>
     <!-- /.container-fluid -->
 </nav>