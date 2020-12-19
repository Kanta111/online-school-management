<html>
 
<head>
  <meta charset="UTF-8">
  <title>Back To School</title>
  <style type="text/css">
 body{
  font-family:sans-serif; ;
  margin: 0;
  padding:0 ;

 }
 .wrapper{
  background:url(5.jpg);
  no-repeat center center;
  min-height:35rem ;
 }
 nav{
  width: 100%;
  height:80px ;
  background-color:#0005 ;
  line-height:80px ;
 }
 nav ul{
  float: right;
  margin:0 ;
  margin-right:1.9rem ;
 }
 nav ul li{
  list-style-type:none ;
  display:inline-block; ;

 }
 nav ul li a{
  text-decoration:none ;
  color:#fff;
  padding: 20px;
 }
 img{
  width:50% ;
  margin-left:1.9rem ;
  margin-top:-4% ;
 }
 .section{
  width:80% ;
  margin:auto; ;
  overflow:hidden; ;
  margin-top:4% ;
 }
 nav ul li:hover{
  background-color: black;
  color:#000 ;
  font-weight: bold;
  font-size:1.2rem ;
 }
 showcase h1{
  margin-top: 5%;
  margin-bottom:5% ;
  text-align: center;
  font-family: serif;

 }
 #courses{
  text-align:center;
  display: flex;
 }
 #courses img{
  width:250px ;
  border-radius:10px ;
  border: 2px solid #000;
 }
 .apply{
  margin-top:4% ;
  background-color:orangered ;
  padding:.7rem 1rem ;
  color: #fff;
  border: none;
  border-radius:10px ;
 }
 .panel-footer {
  margin-top: 30px;
  padding-top: 35px;
  padding-bottom: 30px;
  background-color: #222;
  border-top: 0;
  text-align: center;
}
.panel-footer div.row {
  margin-bottom: 35px;
}
#hours {
  line-height: 2;
  color:white;
}
}
#hours > span {
  font-size: 2.1rem;
  
}
#testimonials {
  font-style: italic;
  color: white;
}
#testimonials p:nth-child(2) {
  margin-top: 25px;
}
showcase.sh{
  background-color:black;
}



  </style>
 
</head>
 
<body>
  <div class="wrapper">
    <nav>
      <img src="" class="img" alt="logo">
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">Notice</a></li>
        <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
       
  
      </ul>
    </nav>

   
  </div>

  <showcase class="sh">
    <h1>Popular Activities In Our School</h1>
    <div id ="courses">
      <div class="cs">
        <h3>Computer Science</h3>
        <img src="comp.jpg" width="50%" >
        
      </div>

        <div class="business">
      
        <h3>Sports Activities</h3>
        <img src="kids-sp.jpg"  alt="business">
        
      </div>

        <div class="journalism">
      
        <h3>Chemestry Labrotary</h3>
        <img src="ch.jpg" width="50%">
        
      </div>

      <div class="journalism">
      
        <h3>Physics Labrotary</h3>
        <img src="phy.jpg" width="50%">
        
      </div>
      <div class="journalism">
      
        <h3>Field Trip</h3>
        <img src="fie.jpg" width="50%">
        
      </div>
    </div>

  </showcase>
  
  <footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm<br>
          Fri: 11:15am - 2:30pm<br>
          Saturday Closed
          <hr class="visible-xs">
        </section>

        <section id="testimonials" class="col-sm-4">
          <p>"One Of The Best School.We won't disappoint you at all!"</p>
          <p>"So PLease keep your trust on us!"</p>
        </section>
     </div>
   </div>
    
  </footer>
  
  
 
  
</body>
 
</html><?php /**PATH C:\xampp\htdocs\online_school\resources\views/frontend/layouts/home.blade.php ENDPATH**/ ?>