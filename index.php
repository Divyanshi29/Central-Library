

<!-- header part -->

<?php
include("include/main.php");
include("include/header.php");
//include("include/content.php");
?>


     <!-- Divyanshi's Code-->

<section class="slide-image">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

     <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active img-size">
        <img src="image/library.jpg" alt="Los Angeles" style="width:100%; height:100%">
      </div>

      <div class="item img-size">
        <img src="image/4.jpg" alt="Chicago" style="width:100%;height:100%">
      </div>
    
      <div class="item img-size">
        <img src="image/3.jpg" alt="New york" style="width:100%;height:100%">
      </div>
    </div>

 <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>

    <!-- <div id="demo" class="carousel slide" data-ride="carousel">

//   <ul class="carousel-indicators">
//     <li data-target="#demo" data-slide-to="0" class="active"></li>
//     <li data-target="#demo" data-slide-to="1"></li>
//     <li data-target="#demo" data-slide-to="2"></li>
//   </ul>
  

//   <div class="carousel-inner">
//     <div class="carousel-item active">
//       <img src="image/1.jpg" alt="Los Angeles" width="1100" height="500">
//     </div>
//     <div class="carousel-item">
//       <img src="image/2.jpg" alt="Chicago" width="1100" height="500">
//     </div>
//     <div class="carousel-item">
//       <img src="image/3.jpg" alt="New York" width="1100" height="500">
//     </div>
//   </div>
  

//   <a class="carousel-control-prev" href="#demo" data-slide="prev">
//     <span class="carousel-control-prev-icon"></span>
//   </a>
//   <a class="carousel-control-next" href="#demo" data-slide="next">
//     <span class="carousel-control-next-icon"></span>
//   </a>
// </div>-->





   <!---- Abhilasha code ------------->
    <section class="desc">
  <div class="container-fluid">
    <div class="row" style="background-color: white; ">
      <div class="col-sm-3">
        <div class="queck-link" style="box-shadow: 5px 5px 20px black;">
          <div class="queck-link_cap">
             <i class="fa fa-bell-o" aria-hidden="true"></i> 
              Ebook Collection
          </div>
          <ul>
            <li><a href="www.google.com">IEEE (IEL ONLINE)</a></li>
            <li><a href="www.google.com">ASCE</a></li>
            <li><a href="www.google.com">ASME</a></li>
            <li><a href="www.google.com">Springer - Verlag</a></li>
            <li><a href="www.google.com">SCIENCE-DIRECT</a></li>
          </ul>
        </div> 
      </div>
      <div class="col-sm-6">
        <div class="queck-link" style="box-shadow: 5px 5px 20px black;">
          <div class="queck-link_cap">
             <i class="fa fa-bell-o" aria-hidden="true"></i> 
             <b>Welcome To Central Library</b><br><p style="font-size: 18px;padding-left: 5px;"></p>
          </div>
          <p>
            National Institute of Technology, Jamshedpur takes extreme pride in the fact that it has been occupying a unique position in imparting technological education to Indian youth. Since its inception, the institute has had a vision to provide quality technical education and to facilitate scientific and technological research, coupled with a mission to develop human potential to its zenith.
          </p>
<div id="check"></div>
        </div> 
      </div>
    <div class="col-sm-3">
    <div class="notification" style="box-shadow: 5px 5px 20px black;">
      <div class="notification_cap">
        <i class="fa fa-bell-o" aria-hidden="true"></i> 
        News & Announcements
      </div>
      <marquee direction="up" scrollamount="4" onmouseover="this.stop()" onmouseout="this.start()" style="height:280px; cursor: pointer;">
        <ul>
          <?php 
            include('comman/connect.php');
            $res=$con->query("select * from news order by(nid) desc");
            while($row=mysqli_fetch_array($res))
            {
              echo "<li>".$row['news']."</li>";
            }
          ?>
        </ul>
      </marquee>
    </div>
    </div>
    </div>
  </div>
</section>

    <!-- -------------------------------------------- -->
<h1 style="text-align: center;margin-top:60px;margin-bottom: 60px;font-weight: bolder;font-family: 'Montserrat', sans-serif;">FACILITIES</h1>
     <section id="portfolio">
      <div class="project">
        <img src="image/libFine.jpg" alt="" class="project-image" />
        <div class="grid-overlay">
          <button
            onclick="window.location.href='Overlap.html';"
            class="viewbutton"
          >
            Library Fine
          </button>
        </div>
      </div>
      <div class="project">
        <img src="image/searchBooks17.jpg" alt="" class="project-image" style="height:80%" />
        <div class="grid-overlay">
          <button
            onclick="window.location.href='Overlap.html';"
            class="viewbutton"
          >
            Search Books
          </button>
        </div>
      </div>
      <div class="project">
        <img src="image/studyGroup2.png" alt="" class="project-image" style="height:80%" />
        <div class="grid-overlay">
          <button
            onclick="window.location.href='Overlap.html';"
            class="viewbutton"
          >
            Study Group
          </button>
        </div>
      </div>
      <div class="project">
        <img src="image/thesis1.jpg" alt="" class="project-image" />
        <div class="grid-overlay">
          <button
            onclick="window.location.href='Overlap.html';"
            class="viewbutton"
          >
            Thesis
          </button>
        </div>
      </div>
    </section> 

  <!-- Image carousal
   <div >
   <div class="carousel carousel1" >
      <div class="carousel-item carousel-item1">
        <a href="https://www.google.com"><img  style="border:3px solid red ;" src="image/1.jpg" alt="" /></a>
        <p style="text-align: center;font-weight: bold;">National Digital Library</p>
      </div>
      <div class="carousel-item carousel-item1">
         <a href="https://www.google.com">
        <img  style="border:3px solid red ;" src="image/2.jpg" alt="" /></a>
        <p style="text-align: center;font-weight: bold;">JGate-NIT Lib. Consortium</p>
      </div>
      <div class="carousel-item carousel-item1">
          <a href="https://www.google.com">
        <img  style="border:3px solid red ;" src="image/3.jpg" alt="" /></a>
        <p style="text-align: center;font-weight: bold;">Institutional Digital Repository<p>
      </div>
    </div>
    </div> -->

  <!-- Image card -->

 <div class="card-parent">
  <div class="card">

  <!-- <div class="title">Standard</div> -->

  <div class="icon">
     <a href="https://ndl.iitkgp.ac.in/index.php">
    <img src="image/jgate.jpg" width="400px"/></a>
    <!-- <svg enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M468.493,101.637L371.955,5.098H159.57v77.231H43.724v424.769h308.923v-77.231h115.846V101.637z   M371.955,32.401l69.236,69.235h-69.236V32.401z M63.031,487.79V101.637h173.769v96.538h96.538V487.79H63.031z M256.108,109.632  l69.236,69.235h-69.236V109.632z M352.647,410.56V178.867l-96.538-96.538h-77.231V24.406h173.769v96.538h96.538V410.56H352.647z" fill="#37404D"/></svg> -->
  </div><!--/icon-->

  <div class="features">
    <p>NATIONAL DIGITAL LIBRARY</p>
  </div><!--/features-->

  <!-- <a href="#" class="btn">Check it out</a> -->

</div><!--/card-->

<div class="card">

  <!-- <div class="title">Expert</div> -->

  <div class="icon">
    <a href="https://www.google.com">
    <img src="image/jgate3.jpg" width="400px" height="270px" /></a>
    <!-- <svg enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M285.928,113.067c62.492,0,113.327,50.827,113.327,113.327c0,0.344-0.041,0.705-0.066,1.049  c-0.049,0.836-0.107,1.672-0.123,2.525l-0.426,17.133l17.159,0.065c41.53,0.115,75.313,34.005,75.313,75.535  c0,41.415-33.718,75.305-75.157,75.518l-3.664,0.016H104.977c-46.244-0.049-83.872-37.693-83.872-83.929  c0-35.825,22.806-67.714,56.737-79.356l9.444-3.229l1.664-9.838c4.115-24.282,24.97-41.907,49.588-41.907  c7.846,0,15.428,1.82,22.536,5.394l15.306,7.689l7.386-15.444C202.531,138.398,242.635,113.067,285.928,113.067 M285.928,96.277  c-51.778,0-96.358,30.315-117.303,74.092c-9.059-4.558-19.256-7.182-30.086-7.182c-33.233,0-60.762,24.184-66.14,55.893  C32.82,232.657,4.316,270.104,4.316,314.307c0,55.597,45.063,100.669,100.644,100.718h311.084v-0.016  c50.777-0.263,91.856-41.481,91.856-92.308c0-50.909-41.177-92.177-92.053-92.324c0.033-1.344,0.197-2.639,0.197-3.984  C416.044,154.532,357.79,96.277,285.928,96.277L285.928,96.277z" fill="#37404D"/></svg> -->
  </div><!--/icon-->

  <div class="features">
    <p>JGATE-NIT LIB. CONSORTIUM</p>
  </div><!--/features-->

  <!-- <a href="#" class="btn">Check it out</a> -->

</div>

<div class="card">

  <!-- <div class="title">Elite</div> -->

  <div class="icon">
     <a href="https://www.google.com">
    <img src="image/institutionalDigital1.jpg" width="400px" height="270px"/></a>
    <!-- <svg enable-background="new 0 0 512 512" height="512px" id="Layer_1" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M316.01,199.02L256.134,14.817L196.239,199.02H1.134l158.102,113.324L98.53,496.487l157.604-114.232  l157.585,114.232l-60.687-184.143L511.134,199.02H316.01z M335.084,318.257l42.407,128.63L267.22,366.963l-11.086-8.033  l-11.086,8.033l-110.291,79.923l42.408-128.63l4.353-13.18l-11.289-8.08L59.903,217.909h136.336h13.724l4.242-13.051l41.929-128.957  l41.91,128.957l4.242,13.051h13.724h136.336l-110.327,79.088l-11.27,8.08L335.084,318.257z" fill="#37404D"/></svg> -->
  </div><!--/icon-->

  <div class="features">
    
    <p>INSTITUTIONAL DIGITAL REPOSITORY</p>
  </div><!--/features-->

  <!-- <a href="#" class="btn">Check it out</a> -->

</div><!--/card-->
  

</div>

    
<!-------Counter start------->
<div style="background-color:#8c92ac">
<div class="container-fluid">
  <div class="container counter-section">
        <div class="row text-center">
            <div class="col-sm-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-book"></i>
                </div>
                <p class="counter">12000</p>
                <p class="">Book</p>
            </div>
            <div class="col-sm-3 counter-box">
                <div class="icon-box">
                    <i class="far fa-address-card"></i>
                </div>
                <p class="counter">12000</p>
                <p class="">e-Journals</p>
            </div>
            <div class="col-sm-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-book-open"></i>
                </div>
                <p class="counter">12000</p>
                <p class="">eBook</p>
            </div>
            <div class="col-sm-3 counter-box">
                <div class="icon-box">
                    <i class="fa fa-book-open"></i>
                </div>
                <p class="counter">12000</p>
                <p class="">Bound Volumes</p>
            </div>
        </div>
    </div>
</div>
</div>
<!-------Counter end------->


<!-------Footer  start------->
<div style="background-color:#8c92ac">
<div class="container-fluid footer">
<div class="container">
  <div class="row">
    <div class="col-sm-4 wow fadeInUp" data-wow-duration="3s">
      <div style="color: rgb(48, 36, 36);" class="footname">Site Map</div>
      <a style="color: rgb(48, 36, 36);" href="index"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Home</a><br>
      <a style="color: rgb(48, 36, 36);" href="about"><i class="fa fa-angle-double-right" aria-hidden="true"></i> About</a><br>
      <a style="color: rgb(48, 36, 36);" href="course"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Services</a><br>
      <a style="color: rgb(48, 36, 36);" href="gallery"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Resources</a><br>
      <a style="color: rgb(48, 36, 36);" href="contact"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</a>
    </div>
    <div class="col-sm-4 wow fadeInUp" data-wow-duration="3s">
      <div style="color: rgb(48, 36, 36);" class="footname">Collaboration To</div>
      <div style="opacity: 1;">
        <img src="image/logo.png" class="logo" style="  -webkit-filter: invert(100%); color:black; filter: invert(100%); margin-left: 90px;">
      </div>
      
    </div>
    <div class="col-sm-4 wow fadeInUp" data-wow-duration="3s">
      <div style="color: rgb(48, 36, 36);" class="footname">Address</div>
      <p>
        <table style="color: rgb(48, 36, 36);">
          <tr>
            <td valign="top" style="padding-right:10px;"><i class="fa fa-map-marker" aria-hidden="true"></i></td>
            <td>
              National Institute of Technology,<br> Jamshedpur<br>
               Adityapur, Jamshedpur, Jharkhand<br> 831014
            </td>
          </tr>
          <tr>
            <td style="padding-right:10px;"><i class="fa fa-phone" aria-hidden="true"></i>
            </td>
            <td>+91 8507107839</td>
          </tr>
          <tr>
            <td style="padding-right:10px;"><i class="fa fa-envelope" aria-hidden="true"></i></td>
            <td style="text-transform:lowercase;">kapil.kr909@gmail.com</td>
          </tr>
        </table>
      </p>

      <div style="color: rgb(48, 36, 36);" class="visiter">
         Visitors :- 
         <?php
         include('Admin/comman/connect.php');
          $res=$con->query("select * from visiter");
          $row=mysqli_fetch_array($res);
          echo $visit=$row['vcount'];
        ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-------Footer  start------->
 <script>
        jQuery(document).ready(function($){
            $('.counter').counterUp({
            delay: 10,
            time: 1000
            });
        });
    </script>
<script src="jquery.counterup.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var elems = document.querySelectorAll('.carousel');
        var instances = M.Carousel.init(elems, options);
      });

      // Or with jQuery

      $(document).ready(function () {
        $('.carousel').carousel();
      });
    </script>
    