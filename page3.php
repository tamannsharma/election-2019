<!DOCTYPE html>
<html>
<style>

.middle-heading h3{
  margin-top: 50px;
}
.mb-60 {
    margin-bottom: 60px;
}
.services-inner {
    border: 2px solid #445c6e;
    transition: .3s;
    border-radius: 4px;
  border-radius: 4px;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -o-border-radius: 4px;
    -ms-border-radius: 4px;
}
.our-services-text {
    overflow: hidden;
    padding: 25px;
    text-align: center;
}
.our-services-text h4 {
    color: #222222;
    font-size: 18px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 8px;
    padding-bottom: 10px;
    position: relative;
    text-transform: uppercase;
}
.our-services-text h4::before {
    background: #445c6e none repeat scroll 0 0;
    bottom: 0px;
    content: "";
    height: 1px;
    position: absolute;
    width: 90px;
    margin-left: 58px;
}
.our-services-wrapper:hover .services-inner {
    background: #fff none repeat scroll 0 0;
    border: 2px solid transparent;
    box-shadow: 0px 1px 10px 0px #445c6e;
}
.our-services-text p {
    margin-bottom: 0;
}
.services p {
    font-size: 14px;
    font-weight: 400;
    line-height: 26px;
    color: #666;
}
.services  {
    position: relative;
}
/*-- //services-- */

</style>
<head>
    <title>2019 ELECTIONS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

      <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
      <!-- font-awesome icons -->
      <link href="css/fontawesome.css" rel="stylesheet"> 
      <!-- font-awesome icons --> 
      <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
      <link href="//fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

      </head>   
<body>
<!-- banner -->
    <div class="banner" id="home">
<!-- //header -->
<header>  
  <div class="container">
    <!-- nav -->
    <nav class="py-3">
        <div id="logo">
       <a href="index.php"><img src="images/logo.png" alt="" width="60%" height="50%">
</a>
    </div>

        <label for="drop" class="toggle">Menu</label>
       <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left cl-effect-14">
              <li><a href="index.php" class="active">Home</a></li>
                <li><a href="p2.php" class="scroll">DETAILS</a></li>
              
            </ul>
            <div class="clearfix"> </div>
          </div>
        </nav>
    <!-- //nav -->
  </div>
</header>
<!-- <div class="wrapper">
  <div class="box1">One</div>
  <img id="box2" >
  <div class="box3">Three</div>
  <div class="box4">Four</div>
  <img id="box5">
  <div id='box8'></div>
  <div id='box9'></div>
  <img id ="something">

</div> -->
<!-- services -->
<section class="services py-5" id="services">
  <div class="container py-5">
  <div class="middle-heading text-center mb-5">
      <h3>Details</h3>
    </div>

    <div class="row pt-lg-0 pt-10">
      <div class="">
        <div class="our-services-wrapper mb-60">
         
            <div class="our-services-text">
              <h4></h4>
              </div>
          </div>
        </div>
      </div>

      <div class="">
        <div class="">
          
            <div class="our-services-text">
              <h4>Word Cloud</h4>
              <img id="box2">
             </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="our-services-wrapper mb-60">
         
            <div class="our-services-text">
              <h4></h4>
               </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="our-services-wrapper mb-md-0 mb-60">
          
            <div class="our-services-text">
              <h4>Bar Plot</h4>
               <img id="box5">
               </div>
          </div>
        </div>
      </div>
      <div class="">
        <div class="our-services-wrapper mb-md-0 mb-60">
          
            <div class="our-services-text">
              <h4></h4>
              </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>
<!-- //services -->

</body>
<script type="text/javascript">
  var partyName = localStorage.getItem('party');
  var partyDate = localStorage.getItem('date');
  var wordImage = "party/"+ partyName + "/" + partyDate + "/" + partyName + " WordCloud";
  document.getElementById('box2').src = wordImage;
  var tester=new Image();
tester.onload=function() { // when .png ok
  document.getElementById("box2").src = wordImage + '.png';
};
tester.onerror=function() { // when .png failed
  document.getElementById("box2").src = wordImage + '.jpeg';      
};
tester.src=wordImage + '.png'; // execute the test

var locationImage = "party/"+ partyName + "/" + partyDate + "/" + partyName + " Sentiment Analysis";
  document.getElementById('box5').src = locationImage;
  var tester=new Image();
tester.onload=function() { // when .png ok
  document.getElementById("box5").src = locationImage + '.png';
};
tester.onerror=function() { // when .png failed
  document.getElementById("box5").src = locationImage + '.jpeg';      
};
tester.src=locationImage + '.png';
</script>
</html>