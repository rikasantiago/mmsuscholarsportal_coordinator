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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 0vw;
}

td, th {
  border: 0.1vw solid #000;
  text-align: center;
  padding: 1vw;
}

td:hover{
    background-color: #0c4b05;
    color: #FFCD00; 
}

.button {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  padding: 0vw 2vw;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 1vw;
  margin-left: 3vw;
  margin-right: -3vw;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: #F3EEED;
  border-style: solid;
  color: #0C4B05;
  border-color: #0C4B05;
  border: -1vw solid #0C4B05;
  border-radius: 4vw;
}

.button1:hover {
    background-color: #FFCD00;
    color: #0c4b05;
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
       <div class="123" style="overflow-x:hidden;width:20%; height:50vw; background: #E8E8E8;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Coordinator</a><br><br>
  <a href="home" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br><br>
  <a href="calendar" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br><br>
  <a href="listcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br><br>
  <a href="welcome" class="w3-bar-item w3-button" style="font-size:1.4vw; color:red;"><i class="glyphicon glyphicon-log-out" style="font-size:2vw; left:-0.5vw;color:black;"></i>Logout</a><br>
</div><br>

    <!-- Page Content -->
    <div style="margin-left:20%;  margin-top:-50vw;">
    <div class="w3-container" style="background: #034b05; height:3vw;">
    <h1 style="text-align:center; font-family:sans-serif; font-weight:bolder; color:#fff; font-size:2vw;">College of Arts and Sciences</h1>
    </div>



<div class="w3-container">
</div>

<!--List of Scholars-->

<table>
  <tr style="background-color: #fff;">
    <th>Name</th>
    <th>Student Number</th>
    <th>Course</th>
    <th>Scholarship Program</th>
    
  </tr>
  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>
  </tr>
 
  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>

  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>
  </tr>

  <tr>
    <td><a href="scholarsprofilecoordinator">Rika Santiago</td></a>
    <td>18-020007</td>
    <td>BS in Computer Science</td>
    <td>College Scholar<button class="button button1" onclick="deletefunction()">Delete</button></td>
  </tr>
</table>
<br>
<button type="button" onclick="updateProfileFunction()" class="greenbutton" style="  margin-top: 2vw; margin-bottom:2vw; margin-right:22vw;margin-left:0vw">UPDATE</button>
<button type="button" onclick="download()" class="greenbutton" style="  margin-top:2vw;margin-right:10vw;">DOWNLOAD</button>
            
  
    </body>
</html>
