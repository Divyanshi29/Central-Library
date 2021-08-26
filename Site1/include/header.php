<header class="myhead">
      <div class="container">
        <div class="row head">
          <div class="col-sm-5 head-text" style="text-align: left;">
            <h2 style="color:white;">Central Library</h2> 
            <h4 style="color:white;">National Institute of Technology, Jamshedpur</h4>
          </div>
           <div class="col-sm-2" style="text-align:right">
            <img class="logo" src="image/logo.png">
          </div>
          <div class="col-sm-5 head-text" style="text-align:right">
            <h2 style="color:white;">केंद्रीय पुस्तकालय</h2> 
            <h4 style="color:white;">   राष्ट्रीय प्रौद्योगिकी संस्थान, जमशेदपुर</h4>
          </div>
        </div>
      </div>

  <!--  nav part -->
<nav  class="navbar navbar-inverse" data-spy="affix" data-offset-top="197" style="background-color:#030218; ">
 <div class="container-fluid container ">

    <ul class="nav navbar-nav">
      <li class="tabOuter" ><a class="borderOuter" href="index.php">Home</a></li>
      <li class="tabOuter" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li><a class="borderInner" href="#">About Us</a></li>
          <li><a class="borderInner" href="library-team.php">Library Team</a></li>
          <li><a class="borderInner" href="workinghrs.php">Working Hours</a></li>
          <li><a class="borderInner" href="rules.php">Rules</a></li>
  <li><a class="borderInner" href="space.php">Space</a></li>
  <li><a class="borderInner" href="acq&procunit.php">Acquistion and Processing Team</a></li>
  <li><a href="photogal.php">Photo Gallery</a></li>
        </ul>
      </li>
<li class="tabOuter" class="dropdown"><a class="borderOuter" class="dropdown-toggle" data-toggle="dropdown" href="#">Services<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a class="borderInner" href="#check">Facilities</a></li>
 <li><a class="borderInner" href="https://nitjsr.irins.org/">Faculty Profiles</a></li>
          <li><a class="borderInner" href="feedbacks.php">Feedback</a></li>
          <li><a class="borderInner" href="bookbank.php">Book Bank</a></li>
  <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScoQ8kPko6lyihRMhQHr04L3b6M0vqY5WkztGh_YGjOckP5JQ/viewform">Recommend a Book</a></li>
  
        </ul>
      </li>
<li class="tabOuter" class="dropdown"><a class="borderOuter" class="dropdown-toggle" data-toggle="dropdown" href="#">Resources<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="borderInner" href="Ebook.php">E-TextBooks</a></li>
          <li><a class="borderInner" href="">Online-Journals</a></li>
          <li><a  href="Magazines.php">Magazines</a></li>
  
        </ul>
      </li>
<li class="tabOuter" class="dropdown"><a class="borderOuter"  href="Site1/index.php">Contributors</a></li>
      </ul>
      
   <ul class="nav navbar-nav navbar-right">
      
      <?php
        if(!$user_ses)
        { ?>
          <li class="tabOuter" class="dropdown"><a class="borderOuter" href="RegistrationOtp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
      <!-- <ul class="dropdown-menu">
      <li><a class="borderInner" href="#">Admin</a></li>
      <li><a  href="#">Student</a></li>
      </ul> -->
      </li>
      <li class="tabOuter" class="dropdown"><a class="borderOuter"  href="SignIn.php"><span class="glyphicon glyphicon-log-in"></span> Login </a>
      <!-- <ul class="dropdown-menu">
      <li><a class="borderInner" href="#">Admin</a></li>
      <li><a  href="#">Student</a></li>
      </ul> -->
      </li>
        <?php
         }
        else
        { ?>
          <li class="tabOuter" class="dropdown"><a class="borderOuter" class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $data['Name'];?><span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="profile">Profile</a></li>  
          <li><a href="editprofile">Edit Profile</a></li>
          <li><a href="changeimage">Change Image</a></li>  
          <li><a href="changepsw">Change PSW</a></li>
          <li><a href="logout">Log Out</a></li>
      </ul>
      </li>
        <?php }
        ?>
    </ul>
  </div>
</nav>
</header>