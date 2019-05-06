<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/responsiveNavbar.css">
  </head>
  <body>
    <header>
      <h1>Pseudo University</h1>
      <input type="checkbox" class="nav-toggle" id="nav-toggle">
      <nav>
        <ul>
          <li class="nav-item active">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Academics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Admissions</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Student Life</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Research</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Athletics</a>
          </li>
          <li class="nav-item signUpButton">
            <a class="nav-link btn btn-info" href="userRegister.php">Sign Up</a>
          </li>
          <li class="nav-item loginButton">
            <a class="nav-link btn btn-info" data-toggle="modal" data-target="#myModal">Login</a>
          </li>
        </ul>
      </nav>
      <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
      </label>

    </header>
  </body>
</html>
