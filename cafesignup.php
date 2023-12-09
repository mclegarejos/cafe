<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--MY CSS FILE-->
    <link rel="stylesheet" href="style.css">

    <!-- BOX ICONS -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


    <title>Coffee and Beyond</title>
  </head>

  <body>

      <!--NAVBAR-->
    <header>
        <a href="#" class="logo">
            <img src="img/logo.jpg" alt="">
        </a>

    <!-- LOGIN AND SIGNUP -->
        <div class="login-signup-links">
            <a href="cafelogin.php" class="login-link">Login</a>
            <a href="cafesignup.php" class="signup-link">Signup</a>
        </div>

        <!-- MENU ICON -->
        <i class='bx bx-menu' id="menu-icon"></i>

        <!-- LINKS -->
        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php">About Us</a></li>
            <li><a href="index.php">Products</a></li>
            <li><a href="index.php">Customers</a></li>
        </ul>

        <!-- ICON -->
        <div class="header-icon">
            <i class='bx bx-cart-alt' ></i>
            <i class='bx bx-search' id="search-icon"></i>
        </div>

        <!-- SEARCH BOX -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here...">
        </div>

    </header>
      <!-- HOME -->
    <section class="home" id="home">
    <div class="container">
        <!--SIGNUP FORM-->
        <form class="form" method="post">
            <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="signupEmail" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="signupPassword">
                </div>
                    <div class="form-group">
                        <label>Password Again</label>
                        <input type="password" class="form-control" name="signupPassword2">
                    </div>
                      <a href="cafelogin.php">Are you already a member?</a><br>
                        <button name="signup" type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>

    </section>




    <section>

  </section>






  
    <!--BOOTSTRAP JS-->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


  </body>
</html>