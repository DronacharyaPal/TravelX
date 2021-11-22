<?php
if(isset($_POST['submit'])){
    $un=$_POST['username'];
    $pw=$_POST['password'];
    $con= mysqli_connect('localhost','devil','password','travelx');  
    $query = "select * from users where username='$un' and password = '$pw'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        session_start();
        $_SESSION['userid']=$row['id'];
        header('location:home1.html');
    }else{
        echo "incorrect username/password";
    }
}
?>



<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <title>travelX</title>
  </head>
  <body>
   
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container">
        <a class="navbar-brand t-1" href="#">
          <i class="fas fa-map-marker-alt fa-1x"></i>     Tra<span class="x">velX</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link btn text-black-50 btn-1" href="#" >Contact</a> -->
              <a class="nav-link btn text-black-50 btn-1" aria-current="page" href="./registeraccount.php">Signup</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" aria-current="page" href="registeraccount.php">Signup</a>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <div class="header">
      <div class="d-flex justify-content-center align-items-center flex-column text-area">
        <h1 class="display-3">TravelX</h1>
        
         <h1 class="display-3">The New Adventure</h1>
        <p class="lead text-center">Hold your seat belts for a breathtaking experience!</p>
        <button class="btn btn-1" data-bs-toggle="modal" data-bs-target="#exampleModal">Log In</button>
      </div>
    </div>
</div>
<section class="services">
  <div class="container text-center">
    <h1 class="mb-5 mt-5">Our Best services</h1>
    <div class="row">
      <div class="col-lg-4">
        <i class="fas fa-umbrella-beach fa-5x"></i>
      <h3>Amazing travel</h3>
      <p class="lead">We offer exclusive travel experience to create memories with your loved ones!</p>
      </div>
      <div class="col-lg-4">
        <i class="fas fa-route fa-5x"></i>
        <h3>Best location</h3>
        <p class="lead">We suggest best locations and shortest routes to witness them at a perfect timing!

        </p>
        </div>
        <div class="col-lg-4">
          <i class="fas fa-headset fa-5x"></i>
          <h3>24X7 support</h3>
          <p class="lead">Nobody likes to wait.Lets stay in touch round the clock!</p>
          </div>
    </div>
    
    
  </div>
</section>
<section class="image-hero mb-5 mt-5">
  <div class="overlay d-flex flex-column align-items-center justify-content-center">
  <div class="container  ">
<div class="row">
  <div class="col-md-8">
  <h1 class="display-3 text-white">Book now and get 50% off</h1>
        <p class="About-p text-white">Hurry! Limited spots available.</p></div>
        <div class="col-lg-4 d-flex flex-column align-items-center justify-content-center">
        <button class="btn btn-info ">Read More</button>
        </div>
</div>
</div>
</div>
</section>
<section class="mb-5 mt-5">
  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div  id="carouselExampleFade" class="carousel slide carousel-fade caro-s" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="9.jpg" class="d-block w-100 caro-img">
          </div>
          <div class="carousel-item">
            <img src="10.jpg" class="d-block w-100 caro-img" alt="...">
          </div>
          <div class="carousel-item">
            <img src="11.jpg" class="d-block w-100  caro-img" alt="...">
          </div>
         
        </div>
    </div>
    
  </div>
  <div class="col-md-6">
    <h1>About TravelX</h1>
    
    <p class="lead mt-5">One stop solution to all your travel fantasies! </p>
    <button class="btn btn-1 mt-2">Join us!</button>
  </div>
  </div>
</section>
<section>
  <div class="container text-center">
    <h1 class="mb-5 mt-5">Most popular places</h1>
    
  <div class="row">
    <div class="col-lg-4 ">
      <div class="card">
        <h2 class="c-1 overlay-c">Poland</h2>
        <img src="3.jpg" class="img-card">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <h2 class="c-1 overlay-c">India</h2>
        <img src="4.jpg" class="img-card">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <h2 class="c-1 overlay-c">Switzerland</h2>
        <img src="5.jpg" class="img-card">
      </div>
    </div>
  </div>
  <div class="row mt-3 mb-5">
    <div class="col-lg-4 ">
      <div class="card">
        <h2 class="c-1 overlay-c">London</h2>
        <img src="6.jpg" class="img-card">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <h2 class="c-1 overlay-c">New york</h2>
        <img src="7.jpg" class="img-card">
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card">
        <h2 class="c-1 overlay-c">Paris</h2>
        <img src="8.jpg" class="img-card">
      </div>
    </div>
  </div>
  </div>
</section>
<section class="tips">
  <div class="container">
    <div class="row mb-5 mt-5">
      <div class="col-md-6">
        <h1>Tips on travel</h1>
        
        <p class="mt-3 lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro ab tenetur, a itaque repellendus, dolor alias eius quis adipisci nemo laboriosam voluptas esse minima! Numquam, velit! Porro minus unde veniam, deserunt illo dolore similique fugiat sit nostrum aperiam quo tenetur animi libero at voluptatibus et culpa minima eius sint ab</p>
        <button class="btn btn-1">Read more</button>
      </div>
      <div class="col-md-5">
        <img src="12.jpg" class="img-n" alt="">
      </div>
    </div>
  </div>

</section>
<section>
  
  <div class="container">
    <h1 class="text-center">contact us</h1>
    <form class="d-flex justify-content-center align-items-center flex-column">
      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="email" class="form-control input" placeholder="Name">
      </div>
      <div class="mb-3">
        <label class="form-label">Email address</label>
        <input type="email" class="form-control input" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label class="form-label">Your message</label>
        <input type="text" class="form-control input" placeholder="message">
      </div>
     <div class="mb-3">
      <input type="submit" name="submit" class="btn btn-1">
     </div>
    </form>
    
  </div>
</section>
<footer>
	<h1>Tra<span class="x">velX</span></h1>

	<p>&copy 2021</p>


</footer>
<section>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
             <div class="modal-body">
          <form action="index1.php"  method="post">
            Username <input type="text" name="username" class="text" autocomplete="off" required> <br>
            Password <input type="password" name="password" class="text" required> <br>
            <input type="submit" name="submit" id="sub">            
          </form>         
          </div>
</section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    
  </body>
</html>



