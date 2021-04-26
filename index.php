<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ALMS</title>
  <link rel="icon" type="image/png" href="images/alms-logo.png" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Gothic+A1:wght@400;700;800&display=swap" rel="stylesheet" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous" />
  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />
  <link rel="stylesheet" href="login.css" />
</head>

<body>
  <div class="whole-container">
    <div class="image-container">
      <img src="images/alms-logo.png" alt="alms-logo-img" />
    </div>

    <div class="login-container">
      <form action="includes/login.php" method="POST">
        <h1>Welcome</h1>
        <p class="message">
          Enter username and password to access your account
        </p>
        <div class="input-container">
          <div class="username-container">
            <div class="input-group input-group-lg border border-secondary rounded-lg">
              <span class="input-group-text border-0" id="basic-addon1"><i class="fas fa-user-circle fa-lg"></i></span>
              <input type="text" class="form-control border-0" placeholder="Enter your username" aria-label="Username" aria-describedby="basic-addon1" name="username" />
            </div>
          </div>
          <div class="password-container">
            <div class="input-group input-group-lg border border-secondary rounded-lg">
              <span class="input-group-text border-0" id="basic-addon1"><i class="fas fa-unlock-alt fa-lg"></i></span>
              <input type="password" class="form-control border-0" placeholder="Enter your password" aria-label="Password" aria-describedby="basic-addon1" name="password" />
            </div>
          </div>
          <p class="verification"></p>
          <button type="submit" class="btn btn-primary">Sign In</button>
          <p class="forgot"><a href="">Forgot password?</a></p>
        </div>
      </form>
    </div>



    <p class="create">
      Not yet registered? <a href="dashboard.php">Create an account</a>
    </p>
  </div>


  <!-- Bootstrap Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>