<!DOCTYPE html>
<html>
    <head>
        <title>
      
        </title>
       
  </style>
        <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
       <link rel="stylesheet" type="text/css" href="css/style.css">
      
    </head>
    <body>
    <div class="container fluid">      
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark justified-content-">
        <div class="col-12 col-sm-8 col-md-8 col-lg-8 col-xl-8">
          <ul class="navbar-nav ml-center ">
           <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
             <li class="nav-item active">
               <a class="nav-link" href="index.php">Home</a>
             </li>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <li class="nav-item active">
               <a class="nav-link" href="reservation.php">Find Reservations</a>
              </li>
            </div>
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
              <li class="nav-item active">
               <a class="nav-link" href="packages.php">About Lakshadweep</a>
              </li>
            </div>
         </ul>
        </div>    
        <div class="col-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
   
        <ul class="navbar-nav">
         <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
           <li class="nav-item justify-content-center padding">
           <a class="nav-link " href="login.php">Login</a>
          </li> 
           </div>
           <div class="col-12 col-sm-2 col-md-2 col-lg-2 col-xl-2">
            <li class="nav-item  justify-content-end padding ">
            <a class="nav-link " href="signup.php">Signup</a>
            </li>
           </div> 
        </ul>
      </div>
        </nav>
    </div>

 

<div class="container fluid py-3">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

       <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/lakshadweep3.jpg" alt="Los Angeles" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="image/land3.jpg" alt="Chicago" width="1100"height="500" >
      <div class="carousel-caption" >
    <h1 style ="text-align:center" >The Exotic Lakshadweep Islands </h1>
   
  </div>
    </div>
    <div class="carousel-item">
      <img src="image/land1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
    <h1>The Exotic Lakshadweep Islands</h1>
   
  </div>
    </div>
  </div>
</div>
</div>
</div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<div class="container fluid">
    <h3 class="text-center"> Login </h3>
    <div class="w-50 m-auto" >
    <form action="login.php" method ="post">
        <div class="form-group">
          <lable> Username </lable> 
          <input type="text" name="user" autocomplete="off" class="form-control"> 
        </div>
        <div class="form-group">
          <lable> Email Id </lable> 
          <input type="text" name="email" autocomplete="off" class="form-control"> 
        </div>
        <div class="form-group">
          <lable> Mobile No </lable> 
          <input type="text" name="mobile" autocomplete="off" class="form-control"> 
        </div>
        <button type="submit" class="btn btn-primary">Submit </button>
</form>
</div>
</div>
<div class="container">
    <footer class="py-2">
    <p class="p-3 bg-dark py-1 text-white"><b> Mayuri Patil</b></p>
</footer>
</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   
  <?php
  $con = mysqli_connect('localhost', 'root');
  if($con){
    echo" connection successful";
  } else{
    echo " No connection";
  }
  mysqli_select_db($con, 'taskdata');
  $user = $_POST['user'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $query = "insert into login( user,email, mobile) values( '$user', '$email', '$mobile')";
  mysqli_query($con , $query);
 header('locstion:index.php');
  ?>
</body>
</html>