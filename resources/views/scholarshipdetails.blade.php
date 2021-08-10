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
       <div class="123" style="overflow-x:hidden;width:20%; height:100vw; background: #E8E8E8;">
  <a href="#" class="w3-bar-item w3-button" style="font-size:2vw;"></i>Coordinator</a><br><br>
  <a href="home" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-home" style="font-size:2vw; left:-0.5vw;color:black;"></i>Home</a><br><br>
  <a href="calendar" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-calendar" style="font-size:2vw; left:-0.5vw;color:black;"></i>Calendar of Events</a><br><br>
  <a href="listcoordinator" class="w3-bar-item w3-button" style="font-size:1.4vw;"><i class="glyphicon glyphicon-list" style="font-size:2vw; left:-0.5vw;color:black;"></i>List of Scholars</a><br><br>
  <a href="welcome" class="w3-bar-item w3-button" style="font-size:1.4vw; color:red;"><i class="glyphicon glyphicon-log-out" style="font-size:2vw; left:-0.5vw;color:black;"></i>Logout</a><br>
</div>

    <!-- Page Content -->
    <div style="margin-left:22%;  margin-top:-100vw;">
    </div><br>


<!--Scholar's Profile-->
<div class="w3-card-4" style="width: 70vw; margin-left:25vw; height:35vw;">
  <div class="w3-container" style="text-align:center; background-color:#0C4B05; color:#FFCD00;">
  <h2 style="color:#fff; font-weight:bolder;">Scholarship Details</h2>
  </div>

  <form class="w3-container" action="/action_page.php" ><br><br>

<label class="w3-text-black" style="font-size:1.5vw;">Scholarship Program</label><br>
<select id = "ddlModels" style="width:67vw;" onchange = "EnableDisableTextBox(this)" disabled="true">
    <option value = "1">University Scholar</option>
    <option value = "2">College Scholar</option>
    <option value = "3">Incentive for USC Officers and SC Presidents</option>
    <option value = "4">Training Allowance for Athletes and Artists</option>
    <option value="5">Student Assistanship Program</option>
    <option value="6">Special Program for Employment of Students (SPES)</option>
    <option value="7">ATI Scholarship - Youth in Agriculture and Fisheries Program (YAFP)</option>
    <option value="8">Cash Grant to Medical Students enrolled in State Universities and Colleges (CGMS-SUCs)</option>
    <option value="9">CHED Expanded Grants-in-Aid Program for Poverty Alleviation (ESGPPA)</option>
    <option value="10">CHED FDP II</option>
    <option value="11">CHED K12 Scholarship</option>
    <option value="12">CHED SUC-Tulong Dunong</option>
    <option value="13">CHED Universal Access to Quality Education Tertiary Education (TES2)</option>
    <option value="14">Department of Agriculture-Agricultural Competitiveness Enhancement Fund Grants-in-Aid in Higher Educational (DA-ACEF GIAHEP) Scholarship</option>
    <option value="15">DAR Apayao</option>
    <option value="16">DA BFAR Scholarship</option>
    <option value="17">DOH Pre-Service Scholarship Program</option>
    <option value="18">DOST-Science Education Institute Undergraduate Scholarship/Junior Level Science Scholarship</option>
    <option value="19">Landbank Gawad Patnubay Scholarship Program</option>
    <option value="20">CHED Partylist/SSGP/Congressional/ Senate</option>
    <option value="21">CHED State Scholarship Program (Full/Half Merit)</option>
    <option value="22">CHED SAFE</option>
    <option value="23">CHED Student Financial Assistance Program (STUFAP)</option>
    <option value="24">City Government of Batac Sirib Mannalon</option>
    <option value="25">LGU Scholarships (City of Batac, City of Laoag, Bacarra, Cabugao, Dingras)</option>
    <option value="26">GSIS Scholarship Program</option>
    <option value="27">NCIP Merit-based Scholarship and Educational Assistance Program</option>
    <option value="28">OWWA Scholarship</option>
    <option value="29">Sirib Scholarship (Academic, Youth)</option>
    <option value="30">PBED Step-up Scholarship</option>
    <option value="31">Toyota Motor Philippine Foundation, Inc. Scholarship</option>
    <option value="32">Gokongwei Scholarship Program</option>
    <option value = "33">Other</option>
</select>
<br>
Other(please specify): <br>
<input type="text" id="txtOther" disabled="disabled"> <br>


        <label class="w3-text-black" style="font-size:1.5vw;">Inclusive Year/Semester</label><br>
        <select name="room" id="room" style="width:100%;"class="inputapp" disabled="true">
            <option value="yearsem1">2024-2025 / Second Semester</option>
            <option value="yearsem2">2024-2025 / First Semester</option>
            <option value="yearsem3">2023-2024 / Second Semester</option>
            <option value="yearsem4">2023-2024 / First Semester</option>
            <option value="yearsem5">2022-2023 / Second Semester</option>
            <option value="yearsem6">2022-2023 / First Semester</option>
            <option value="yearsem7">2021-2022 / Second Semester</option>
            <option value="yearsem8">2021-2022 / First Semester</option>
        </select>
   
    <p>      
    <label class="w3-text-black" style="font-size:1.5vw;">GWA</label>
    <input class="w3-input w3-border w3-sand" name="last" type="text" placeholder="1.75" readonly></p><br>

    
    <label class="w3-text-indigo" style="margin-top:-2vw; font-size:1.5vw;"><a href="proofcoordinator">Proof of Scholarship</a></label>
 
   
</form>
</div><br>

<a href="home"><button type="button" class="greenbutton" style="  margin-top:-0vw; margin-right:18vw;margin-left:5vw">CANCEL</button></a>
        <button type="button" onclick="download()" class="greenbutton" style="  margin-top:-0vw; margin-right:5vw;"> DOWNLOAD</button>

</body>
</html>