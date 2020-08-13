<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media_queries.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <title>Book Rental</title>
</head>
<body>
     <!----------------------------------Navbar----------------------------------->
     <header>
        <nav class="navbar navbar-expand-sm">
            <!-- Brand/logo -->
            <div class="nav-logo">
            <a class="navbar-brand" href="#">Book Rental</a>
            </div>
            <!-- Links -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"><i class="fa fa-bars"></i>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">Browse Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sign up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">My Cart</a>
              </li>
            </ul>
            </div>
        </nav>
    </header>

    <section class="payment-section">
        <!----------------------------------Page Heading----------------------------------->
        <div class="row">
            <div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
               <div class="cart-heading">
                 <h1>My Cart</h1>
               </div>
            </div>
        </div>
       <!----------------------------------Item Info Table----------------------------------->
       <div class="row">
        <div class="col-xl-12 col-md-12 col-sm-12">
        <table class="payment-info-table">
            <tr>
                <th>Item</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>Lorem ipsum dolor sit amet.</td>
                <td>1</td>
                <td>Tk. 20</td>
                <td>Tk. 20</td>
            </tr>
            <tr>
                <td colspan="3">Delivery cost</td>
                <td>50</td>
            </tr>
        </table>
    </div>
    </div>
     <!----------------------------------Payment Buttons----------------------------------->
          <div class="cash-pay-button">
            <a class="btn btn-default" href="#" role="button">Cash On Delivery</a>
          </div>
          <div class="bkash-button">
            <a class="btn btn-default" href="#" role="button">Pay through bkash</a>
          </div>
    </section>

     <!----------------------------------Footer----------------------------------->
        
<footer class="panel-footer-2 text-center">
  <div class="container">
    <div class="row">
      <section id="hours" class="col-xs-12 col-sm-12 col-md-4">
        <span>Hours:</span><br>
        <p>Sun-Thurs: 10:00am - 6.00pm</p>
        <p>Dhaka, Bangladesh</p>
        <hr class="visible-xs">
      </section>
      <section id="address" class="col-xs-12 col-sm-12 col-md-4">
        <span>Contact:</span><br>
        <p>Email: bookrentalsystem@gmail.com</p>
        <p>Phone: +88 01711 111 111</p>
        <hr class="visible-xs">
      </section>
      <section id="social" class="col-xs-12 col-sm-12 col-md-4">
        <span>Social Media: </span><br> 
        <a href="" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-instagram"></a>
      </section>
    </div>
    <div class="text-center">&copy; Book Rental System 2020</div>
  </div>
</footer>
</body>
</html>