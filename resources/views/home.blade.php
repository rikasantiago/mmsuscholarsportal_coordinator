<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MMSU Scholar's Portal</title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Scholar.css">  
        <!-- SCRIPT -->
        <script src="/studentDormFinder.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="fonts/simple-line-icons/simple-line-icons.min.css">
        <link rel="stylesheet" href="fonts/font-awesome-css/font-awesome.min.css">
        <link rel="stylesheet" href="fonts/material-design-icons/material-icon.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="icon" href="/images/mmsu logo.png">

<style>

.column {
  float: left;
  width: 33.33%;
  padding: 1vw;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>
        
    </head>
    
    <body class="antialiased">
        
        <!--Navigation-->

        <div class="topnav" id="myTopnav">
        <img style="float:left;margin-left:6vw;" src="/images/mmsu logo.png"  height="6%" width="6%">
        <p style="color: #fff; font-size: 1.2vw; font-weight: bolder; margin-top:2.5vw; margin-right:70vw;">MMSU SCHOLAR'S PORTAL</p>
</div>  
        

       <!-- Sidebar -->
    <div class="w3-sidebar w3-bar-block" style="width:20%; background: #E8E8E8; border-color: black;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Coordinator</a><br>
  <a href="home" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br>
  <a href="calendar" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br>
  <a href="listcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br>
  <a href="welcome" class="w3-bar-item w3-button" style="font-size:1.4vw; color:red;"><i class="glyphicon glyphicon-log-out" style="font-size:2vw; left:-0.5vw;color:black;"></i>Logout</a><br>
</div><br><br>

    <!-- Page Content -->
    <div class="row">
  <div class="column">
    <img src="/images/left.jpg" alt="Snow" style="width:70%; margin-left:30vw; border-radius:2vw;">
  </div>
  <a href="calendar"><button type="button" class="homebutton" style="top: 65%; left: 34%;">Calendar of Events</button></a>

  <div class="column">
    <img src="/images/middle.jpg" alt="Forest" style="width:70%; margin-left:30vw; border-radius:2vw;">
  </div>
  <a href="listcoordinator"><button type="button" class="homebutton" style="top: 65%; left: 68%;">List of Scholars</button></a>
</div>




</div>
            
  
    </body>
</html>
