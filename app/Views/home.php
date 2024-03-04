<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CRISTI 3A</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="sara mazal lessons">
<meta name="keywords" content="HTML, CSS, JavaScript, mazal, icons">
<meta name="author" content="Sara Mazal">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500&family=Raleway:wght@100;200;300;400;500&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.3/particles.min.js"></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./ryan/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>

<sectio class="nav">
  <h1>RYAN CRISTI</h1>
  <h3 class="span loader">
    <span class="m">P</span>
    <span class="m">R</span>
    <span class="m">E</span>
    <span class="m">L</span>
    <span class="m">I</span>
    <span class="m">M</span>
    <span class="m">S</span>
    <span class="m">&nbsp;</span>
    <span class="m">O</span>
    <span class="m">N</span>
    <span class="m">&nbsp;</span>
    <span class="m">W</span>
    <span class="m">E</span>
    <span class="m">B</span>
    <span class="m">S</span>
    <span class="m">Y</span>
    <span class="m">S</span>
    <span class="m">T</span>
    <span class="m">E</span>
    <span class="m">M</span>
    <span class="m">S</span>
    <span> &</span>
    <span class="m">T</span>
    <span class="m">E</span>
    <span class="m">C</span>
    <span class="m">H</span>
    <span class="m">N</span>
    <span class="m">O</span>
    <span class="m">L</span>
    <span class="m">O</span>
    <span class="m">G</span>
    <span class="m">I</span>
    <span class="m">E</span>
    <span class="m">S</span>
  </h3>
  <div class="nav-container">
    <a class="nav-tab" style="text-decoration: none;" href="#tab-home">HOME</a>
    <a class="nav-tab" style="text-decoration: none;" href="#tab-about">ABOUT</a>
    <a class="nav-tab" style="text-decoration: none;" href="#tab-passion">PASSION</a>
  </div>
</sectio>
<main class="main">
  <section class="slider" id="tab-home">
    <h1>Ryan Joseph Cristi</h1>
    <h2>BSIT3A PRELIMS</h2>
  </section>


  <section class="slider" id="tab-about">
    <div class="container mt-5">  
      <div class="row justify-content-center" style="background-image: url(./images/ryan.jpg);">
        <div class="col-md-6 light-animation">
          <div class="card">
            <img src="./ryan/images/ryan.jpg" style="width: 250px; margin: auto;" class="card-img-top" alt="Profile Picture">
            <div class="card-header bg-dark text-light text-center">
              Personal Information
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="text-muted">Name:</label>
                <div class="text-primary">Ryan Joseph Cristi</div>
              </div>
              <div class="mb-3">
                <label class="text-muted">Birthday:</label>
                <div class="text-primary">April 9, 2001</div>
              </div>
              <div class="mb-3">
                <label class="text-muted">Email:</label>
                <div class="text-primary">ryncrst@gmail.com</div>
              </div>
              <div class="mb-3">
                <label class="text-muted">Contact:</label>
                <div class="text-primary">0949-302-0567</div>
              </div>
          
            </div>
            
          </div>
        </div>
        
      </div>
      <br>
  
      <a href="<?php echo base_url('about')?>" class="btn btn-primary" style="text-align: center; text-decoration: none; color: aqua;"><h3>VIEW</h3></a>
    </div>
  </section>
  


  <section class="slider" id="tab-passion">
    <div class="container mt-5">
      <div class="row justify-content-center slider-row">
        <div class="col-md-6 light-animation">
          <div class="card">
            <img src="./ryan/images/eating.jpg" class="card-img-top" alt="Profile Picture">
            <div class="card-header bg-dark text-light text-center">
              Eating
            </div>
          </div>
        </div>
        <div class="col-md-6 light-animation">
          <div class="card">
            <img src="./ryan/images/music.jpg" class="card-img-top" alt="Profile Picture">
            <div class="card-header bg-dark text-light text-center">
              Music
            </div>
          </div>
        </div>
        <div class="col-md-6 light-animation">
          <div class="card">
            <img src="./ryan/images/gaming.jpg" class="card-img-top" alt="Profile Picture">
            <div class="card-header bg-dark text-light text-center">
              Gaming
            </div>
          </div>
        </div>
        <div class="col-md-6 light-animation">
          <div class="card">
            <img src="./ryan/images/bball.png" class="card-img-top" alt="Profile Picture">
            <div class="card-header bg-dark text-light text-center">
              Basketball
            </div>
          </div>
        </div>
      </div>
      <br>
      <a href="<?php echo base_url('passion')?>" class="btn btn-primary" style="text-align: center; text-decoration: none; color: aqua;"><h3>VIEW</h3></a>
    </div>
  </section>
</main>
<canvas class="background"></canvas>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
  <script  src="./ryan/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

  <footer class="footer py-4 mt-5">
    <div class="container text-center">
      <span>&copy; RYAN CRISTI BSIT3A 2023-2024</span>
    </div>
  </footer>
</body>
</html>
