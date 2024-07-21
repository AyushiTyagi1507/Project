<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/style.css">
    <!-- <script src="https://kit.fontawesome.com/7e1fe1fc67.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     
    <title>TRAVEL WEBSITE WELCOME</title>
</head>
<body>
    <nav class="navbar bg-dark">
        <div class="container">
            <h1 class="logo lg-heading about-heading" > WT </h1>
            <ul class="nav-items">
                <li class="nav-item"><a href="./home.php" class="home"> Home</a> </li>
                <li class="nav-item"><a href="./about.php" class="about">About</a></li>
                <li class="nav-item"><a href="./contact.php" class="contact">Contact</a></li>
            
            </ul>
            
        </div>
        </nav>
<section class="contact-form">
    <div class="container">
    <div class="form-wrapper">
        <div class="company-address">
            <div class="address-group">
<i class="  fas fa-map-marker-alt fa-3x text-red"></i>

<h2 class="text-gray md-heading"> Location </h2>
<p>#2345 Janakpuri Colony , City name , town name</p>

            </div>
            <div class="address-group">
<i class="  fas fa-envelope fa-3x text-red"></i>

<h2 class="text-gray md-heading">Email</h2>
<p>tyagiayushi@mycompany.com</p>
            </div>
            <div class="address-group">
                <i class=" fas fa-phone-square-alt   fa-3x text-red "></i>


<h2 class="text-gray md-heading">Call</h2>
<p>91023049563</p>
            </div>
<img src="./img/sean-pollock-PhYq704ffdA-unsplash.jpg" alt="Company Image">



        </div>
        <form class="form" method="POST" action="process.php"> 
<h1 class="lg-heading text-black">Contact Us </h1>

<p class="text-gray"> Let us know the questions. Suggestions and concerns by filling out the contact from below.</p>
  <div class="form-group">
<label for="username">Username</label>
<input type="text" name="username" id="username" >

  </div>
  <div class="form-group" >
    <label for="email">Email</label>
    <input type="text" name="email" id="email" >
    

  </div>
  <div class="form-group">
   
    <label for="phone">Phone</label>
    <input type="text" name="phone" id="phone " >
    
  </div>
  <div class="form-group">
<label for="message">Message</label>
<textarea name="message" id="message" ></textarea>
  </div>
<button type="submit" class="form-btn" name=" submit"> Submit </button>

        </form>
    </div>
    </div>

</section>


<footer class="footer">
  <div class="social-media-links">
      <i class="fab fa-facebook fa-4x"></i>
      <i class="fab fa-twitter fa-4x"></i>
      <i class="fab fa-instagram fa-4x"></i>
      <p>World Travel &copy; 2023 , All Rights Reserved</p>
  </div>
</footer>
</body>
</html>