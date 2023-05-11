<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="css/services.css">
  </head>
  <body>
    <header>
        <div class="main">
        <div class="logo">
           <a href="front.php"><img src="img/logo.jpg"></a>
        <ul class="nav">
<li><a href="front.php">Home</a></li>
<li><a href="services.php">Services</a></li>
<li><a href="contact.php">Contact us</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>

 </header>
    <section class="services-section">
      <div class="inner-width">
        <h1>Our <strong>Services</strong></h1>
        <div class="services owl-carousel">

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <div class="service-name">Paints</div>
            <div class="service-desc">We have all types of paints from metal to walls both indoor and outdoor with brushes and mixing machines in the shop provided by Nerolac Paints Company limited! </div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="service-name">Home Delivery</div>
            <div class="service-desc">Home Delivery of Products Purchased Through website and from store itself!</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-code"></i>
            </div>
            <div class="service-name">Electronics</div>
            <div class="service-desc">We further Deal in Electronic Items with different variety of companies and types.</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-database"></i>
            </div>
            <div class="service-name">Kitchen Chimneys</div>
            <div class="service-desc">We also Deal in kitchen chimneys with different variety of companies and types.</div>
          </div>

          <div class="service">
            <div class="service-icon">
              <i class="fas fa-headset"></i>
            </div>
            <div class="service-name">24/7 Support</div>
            <div class="service-desc">24/7 call support</div>
          </div>
        </div>
      </div>
    </section>

    <script>
      $(".services").owlCarousel({
        margin:20,
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        autoplayHoverPause:true,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:3
          }
        }
      });
    </script>
  </body>
</html>
