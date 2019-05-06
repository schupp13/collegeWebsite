<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Pseudo University</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/index.css">
  <link rel="stylesheet" href="display/css/review.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<header>
<body>
  <div class="desktopNavDiv">
    <? include 'display/desktopNav.php' ?>
  </div>
  </header>

    <div class="jumbotron jumbotron-fluid" id="indexHeader">
      <div class="container text-center">
        <h1 id="indexHeader">Pseudo University</h1>
        <p id="indexP">Home of the Knights</p>
      </div>
    </div>

  <section>
    <div class="container">
      <div class="row ">
        <div class="col-lg-4 text-center article article1"><a href="index.php">
          <img src="img/student/student1.jpg" class="studentImage" alt="">
          <h4>First Time in College</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p></a>
        </div>
        <div class="col-lg-4 text-center article"><a href='index.php'>
          <img src="img/student/student2.jpg" class="studentImage" alt="">
          <h4>Transfer Services</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p></a>
        </div>
        <div class="col-lg-4 text-center article "><a href="index.php">
          <img src="img/student/student3.jpg" class="studentImage" alt="">
          <h4>Visit Pseudo University</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p></a>
        </div>
      </div>
    </div>
  </section>
  <hr>
    <div class="container-fluid">
      <div class="parallax">
      </div>
    </div>
    <hr>
    <br>
    <div class="reviewDiv">
      <?include 'display/reviews.php'?>
    </div>
  <br>
  <div>
    <?php include 'display/loginModal.php'; ?>
  </div>
  <hr>
  <br>
  <br>
  <footer>
    <div class="container ">
    <div class="row">
      <div class="col-sm-6 text-center">
          <h5>Contact us</h5>
          <p>Phone: 555-5555-555</p>
          <p>Email: support@PseudoUniversity.com</p>
          <p>twitter: @supportpseudoUniversity</p>
      </div>
      <div class="col-sm-6 text-center" >
          <img width="60%" src="img/horse.png" alt="">
      </div>

    </div>
  </div>
  <div class="container-fluid footerListDiv">
    <div class="row">
      <div class="col-sm-12">
        <ul class="d-flex justify-content-around " id="footerList">
          <li>&copy; PseudoUniversity 2019</li>
          <li>Admissions</li>
          <li>Athletics</li>
          <li>Academics</li>
          <li>Research</li>
          <li>Alumni</li>
        </ul>
      </div>
    </div>
  </div>
 </footer>

</body>

</html>
