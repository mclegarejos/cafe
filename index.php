<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee and Beyond</title>

    <!--CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!--JQUERY LINK -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- BOOTSTRAP LINKS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">


    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <!-- CSS LINK -->
    <link rel="stylesheet" href="style.css">

    <!-- BOX ICONS -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        $('#myModal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus');
        });
    });
    </script>

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
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#customers">Customers</a></li>
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
        <div class="home-text">
            <h1>Start your day <br> with coffee </h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Neque repellendus ut labore deleniti odit mollitia doloribus? Asperiores, ratione. Veniam voluptatem sunt accusantium ex numquam? Nesciunt nobis aspernatur dolore nulla excepturi?</p>
            <a href="#" class="btn">Shop Now</a>
        </div>
        <div class="home-img">
            <img src="img/main.png" alt="">
        </div>
    </section>

    <!--ABOUT -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora rerum culpa quos provident unde fugit ex animi, assumenda recusandae corrupti numquam minus beatae, ut exercitationem voluptatibus vel placeat deserunt distinctio!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum officia dignissimos tenetur in possimus?</p>
            <a href="#" class="btn">Learn More</a>
        </div>
    </section>

    <!-- PRODCUCTS -->
    <section class="products" id="products">
        <div class="heading">
            <h2>Our Popular Products</h2>
        </div>
    
        <!-- CONTAINER -->
        <div class="products-container">
            <div class="box">
                <img src="img/p1.jpg" alt="">
                <h3>Salted Caramel</h3>
                <div class="content">
                    <span>₱100</span>
                    <a class="add-to-cart-btn" data-toggle="modal" data-target="#saltedcaramelModal">Add to Cart</a>
                </div>
            </div>

            <div class="box">
                <img src="img/p2.jpg" alt="">
                <h3>Lemon Yakult</h3>
                <div class="content">
                    <span>₱100</span>
                    <a class="add-to-cart-btn" data-toggle="modal" data-target="#lemonyakultModal">Add to Cart</a>
                </div>
            </div>

            <div class="box">
                <img src="img/p3.jpg" alt="">
                <h3>Java Chip Frappe</h3>
                <div class="content">
                    <span>₱100</span>
                    <a class="add-to-cart-btn" data-toggle="modal" data-target="#javachipModal">Add to Cart</a>
                </div>
            </div>
            
            <div class="box">
                <img src="img/p4.jpg" alt="">
                <h3>Watermelon Yakult</h3>
                <div class="content">
                    <span>₱100</span>
                    <a class="add-to-cart-btn" data-toggle="modal" data-target="#watermelonyakultModal">Add to Cart</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CUSTOMER -->
    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our Customer's</h2>
        </div>

    <!-- CONTAINER -->
    <div class="customers-container">
        <div class="box">
            <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half'></i>    
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore consectetur harum voluptates esse alias dignissimos!</p>
            <h2>Roger Mae</h2>
            <img src="img/rev1.jpg" alt="">
        </div>

        <div class="box">
            <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half'></i>    
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore consectetur harum voluptates esse alias dignissimos!</p>
            <h2>Mam Maria</h2>
            <img src="img/rev2.jpg" alt="">
        </div>

        <div class="box">
            <div class="stars">
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star' ></i>
                <i class='bx bxs-star-half'></i>    
            </div>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore consectetur harum voluptates esse alias dignissimos!</p>
            <h2>Mam Kath</h2>
            <img src="img/rev3.jpg" alt="">
        </div>
    </div>
    </section>
    <section class="footer">
        <div class="footer-box">
            <h2>Coffee And Beyond</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, aspernatur.</p>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook' ></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></a>
                <a href="#"><i class='bx bxl-tiktok' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
        </div>
        <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog Posts</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bxs-map'></i>Dasmarinas City, Cavite, Barangay Langkaan 1</span>
                <span><i class='bx bxs-phone'></i>1 800 8000</span>
                <span><i class='bx bxs-envelope'></i>coffeeandbeyond@gmail.com</span>
            </div>
        </div>
    </section>


    <!-- MODAL SALTED CARAMEL -->

<div class="modal fade product-modal" id="saltedcaramelModal" tabindex="-1" role="dialog" aria-labelledby="saltedcaramelModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
      </div>

        <div class="modal-body">
            <h3>Salted Caramel</h3>
        </div>

    <!-- QUANTITY -->

    <p><b>Quantity</b></p>
        <input type="number" class="form-control saltedcaramelQuantity" value="1">
    <br>

    
        <!--SIZES -->
    <p><b>Size</b></p>
        <select class="form-control saltedcaramelSize" required>
            <option value="">Select size</option>
            <option value="30">12 oz</option>
            <option value="40">16 oz</option>
            <option value="50">22 oz</option>
        </select>
    <br>

    <!--ADD ONS -->
    <p><b>Add Ons</b></p>
        <form action="">
            <input type="checkbox" class="addOns" name="addon1" value="10"> Syrup ₱10.00
            <br>
            <input type="checkbox" class="addOns" name="addon2" value="15"> Pearl ₱15.00
            <br>
            <input type="checkbox" class="addOns" name="addon3" value="20"> Milk ₱20.00
        </form>
    <br>

    <!-- TOTAL -->
    <p><b>Total</b></p>
        <span class="grandtotal">₱0.00</span>
            <input type="hidden" class="txtgrandtotal" name="total" required>
            <br>
                <div class="text-center">
                    <div class="col-xs-12 text-right">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-info" onclick="addToCart('saltedcaramel')">Add to Cart</button>
                    </div>
                </div>
            

        
    </div>
  </div>
</div>

<!-- MODAL LEMON YAKULT -->

<div class="modal fade product-modal" id="lemonyakultModal" tabindex="-1" role="dialog" aria-labelledby="lemonyakultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
      </div>

        <div class="modal-body">
            <h3>Lemon Yakult</h3>
        </div>

    <!-- QUANTITY -->

    <p><b>Quantity</b></p>
        <input type="number" class="form-control lemonyakultQuantity" value="1">
    <br>

    
        <!--SIZES -->
    <p><b>Size</b></p>
        <select class="form-control lemonyakultSize" required>
            <option value="">Select size</option>
            <option value="30">12 oz</option>
            <option value="40">16 oz</option>
            <option value="50">22 oz</option>
        </select>
    <br>

    <!--ADD ONS -->
    <p><b>Add Ons</b></p>
        <form action="">
            <input type="checkbox" class="addOns" name="addon1" value="10"> Syrup ₱10.00
            <br>
            <input type="checkbox" class="addOns" name="addon2" value="15"> Pearl ₱15.00
            <br>
            <input type="checkbox" class="addOns" name="addon3" value="20"> Milk ₱20.00
        </form>
    <br>

    <!-- TOTAL -->
    <p><b>Total</b></p>
        <span class="grandtotal">₱0.00</span>
            <input type="hidden" class="txtgrandtotal" name="total" required>
            <br>
                <div class="text-center">
                    <div class="col-xs-12 text-right">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-info" onclick="addToCart('lemonyakult')">Add to Cart</button>
                    </div>
                </div>       
    </div>
  </div>
</div>


<!-- MODAL JAVA CHIP -->

<div class="modal fade product-modal" id="javachipModal" tabindex="-1" role="dialog" aria-labelledby="javachipModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
      </div>

        <div class="modal-body">
            <h3>Java Chip Frappe</h3>
        </div>

    <!-- QUANTITY -->

    <p><b>Quantity</b></p>
        <input type="number" class="form-control javachipQuantity" value="1">
    <br>

    
        <!--SIZES -->
    <p><b>Size</b></p>
        <select class="form-control javachipSize" required>
            <option value="">Select size</option>
            <option value="30">12 oz</option>
            <option value="40">16 oz</option>
            <option value="50">22 oz</option>
        </select>
    <br>

    <!--ADD ONS -->
    <p><b>Add Ons</b></p>
        <form action="">
            <input type="checkbox" class="addOns" name="addon1" value="10"> Syrup ₱10.00
            <br>
            <input type="checkbox" class="addOns" name="addon2" value="15"> Pearl ₱15.00
            <br>
            <input type="checkbox" class="addOns" name="addon3" value="20"> Milk ₱20.00
        </form>
    <br>

    <!-- TOTAL -->
    <p><b>Total</b></p>
        <span class="grandtotal">₱0.00</span>
            <input type="hidden" class="txtgrandtotal" name="total" required>
            <br>
                <div class="text-center">
                    <div class="col-xs-12 text-right">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-info" onclick="addToCart('javachip')">Add to Cart</button>
                    </div>
                </div>
    </div>
  </div>
</div>


<!-- MODAL WATERMELON YAKULT -->

<div class="modal fade product-modal" id="watermelonyakultModal" tabindex="-1" role="dialog" aria-labelledby="watermelonyakultModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add to cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
      </div>

        <div class="modal-body">
            <h3>Watermelon yakult</h3>
        </div>

    <!-- QUANTITY -->

    <p><b>Quantity</b></p>
        <input type="number" class="form-control watermelonyakultQuantity" value="1">
    <br>

    
        <!--SIZES -->
    <p><b>Size</b></p>
        <select class="form-control watermelonyakultSize" required>
            <option value="">Select size</option>
            <option value="30">12 oz</option>
            <option value="40">16 oz</option>
            <option value="50">22 oz</option>
        </select>
    <br>

    <!--ADD ONS -->
    <p><b>Add Ons</b></p>
        <form action="">
            <input type="checkbox" class="addOns" name="addon1" value="10"> Syrup ₱10.00
            <br>
            <input type="checkbox" class="addOns" name="addon2" value="15"> Pearl ₱15.00
            <br>
            <input type="checkbox" class="addOns" name="addon3" value="20"> Milk ₱20.00
        </form>
    <br>

    <!-- TOTAL -->
    <p><b>Total</b></p>
        <span class="grandtotal">₱0.00</span>
            <input type="hidden" class="txtgrandtotal" name="total" required>
            <br>
                <div class="text-center">
                    <div class="col-xs-12 text-right">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-sm btn-info" onclick="addToCart('watermelonyakult')">Add to Cart</button>
                    </div>
                </div>        
    </div>
  </div>
</div>


    <!-- COPYRIGHT -->
    <div class="copyright">
        <p>Coffee and Beyond & Emsaay All Right Reserved</p>
    </div>
    
  <!-- JS LINK -->
    <script src="main.js"></script>

    

</body>
</html>