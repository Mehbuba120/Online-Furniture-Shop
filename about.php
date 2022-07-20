<?php 
   require('common.php');
   ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fourniture-About_Us</title>

    <?php 
     require('links.php');
      ?>
    <link rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    
    <style>
       
    </style>
    
</head>
<body class="bg-light">
  
  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About Us</h2>
    <div class="h-line bg-dark" ></div>
    <p class="text-center mt-5">
    . . . is a fast-growing Global Furniture Brand with customers and connoisseurs around the globe.
     The brand presents an impeccable range of wooden furniture products manufactured from 
    the best-sourced materials and with a deft touch of seasoned artisanship.
    </p>
  </div>

  <div class="container my-5">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
        <h3 class="mb-3 ">Founder</h3>
        <p>
       . . . traces its roots to H.A. Timber Industries Ltd, a company established in 1963 by late Al-Haj Habibur Rahman. Following his footsteps, HATIL, as a singular furniture brand, came into being under the leadership of Selim H. Rahman, a veteran and visionary leader in country’s furniture industry.
        Over the years, HATIL made itself a synonym to Elegant, Contemporary and Affordable furniture collection. Outstanding product quality and design backed by unique customer service are a few traits that helped HATIL lead being in the front. It’s worth mentioning that to ensure the best possible quality HATIL has been practicing Japanese Quality Management Philosophy “Kaizen” since 2007. And, being an environment-sensible company.
        All these things contributed in a great way making HATIL a favorite name across markets like US, Canada, Australia, Saudi Arabia, Kuwait, UAE, Thailand, Egypt, Russia, Nepal, Bhutan and India. In Bangladesh market, HATIL Furniture has been a proud awardee of HSBC-Daily Star Climate Award, 2013 in Green Operation Category.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
        <img src="./image/Light.jpg" alt="Owner" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-2 order-md-1 order-2">
        <h3 class="mb-3 ">Principle</h3>
        <p>

        To do Justice and behave Ethically with our Customers, Partners, Insiders and the Communities
        </p>
        <h3 class="mb-3 ">Vision</h3>
        <p>
        To help elevate the lifestyle and living of people in general with our Innovations, Creations and Business Practices
        </p>
        <h3 class="mb-3 ">Mission</h3>
        <p>
          
        To stay contemporary and contextual being innovative and cutting-edge
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-1 order-md-1 order-1">
        <img src="./image/about_us.png" alt="Owner" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5 ">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./image/download.jpg" width=200px height=150px>
          <h4 class="mt-3">1000+ Fournitures</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./image/customer.jpg" width=200px height=150px>
          <h4 class="mt-3">500+ Customers</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="./image/staff.png" width=200px height=150px>
          <h4 class="mt-3">50+ Staffs</h4>
        </div>
       
    </div>
  </div>

  







<!-- Footer -->
<?php 
   require('footer.php');
   ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
      var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        effect: "fade",
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
      });
    </script>
</body>
</html>