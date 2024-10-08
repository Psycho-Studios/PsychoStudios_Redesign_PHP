<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Psycho Studios</title>
  
  <link rel="icon" href="/public/images/newpsychostudios.png" type="image/x-icon">

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Theme CSS -->
  <link href="/public/css/main.css" rel="stylesheet">
    <!-- Bootstrap cdn -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" 
        crossorigin="anonymous">
  <!-- font awesome cdn -->
  <script defer src="https://kit.fontawesome.com/f030b35153.js" crossorigin="anonymous"></script>
   <!-- Bootstrap JS bundle cdn -->
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" 
          crossorigin="anonymous">
  </script>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg sticky-top" id="mainNav">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">PsychoStudios</a>
      <button class="navbar-toggler bg-warning" 
              type="button" 
              data-bs-toggle="collapse" 
              data-bs-target="#navBar" 
              aria-controls="navBar" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navBar">
        <ul class="navbar-nav">
          <li class="nav-item mb-2 px-3">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Current Projects</a>
          </li>
          <li class="nav-item px-3">
            <a class="nav-link  js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item px-3" >
            <a class="nav-link  js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="container d-flex align-items-center flex-column">

      <!-- Masthead Avatar Image -->
      <img class="masthead-avatar mb-4" src="/images/newpsychostudios.png" alt="psycho studios logo ">

      <!-- Masthead Heading -->
      <h1 class="masthead-heading text-uppercase my-5">Psycho Studios</h1>
        <p>"Where creativity meets enginuity"</p>

      <!-- Masthead Subheading -->
    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section bg-white portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5">Current Projects</h2>

 
      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="/images/Screenshot1.png" alt="">
          </div>
        </div>

        <!-- Portfolio Item 2  -->
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="/images/ComingSoon.png" alt="">
          </div>
        </div>
     
        <!-- Portfolio Item 3 
        <div class="col-md-6 col-lg-4">
          <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/circus.png" alt="">
          </div>
        </div>
      -->
      <!-- /.row -->

    </div>
  </section>

  <!-- About Section -->
  <section class="about-section page-section text-white mb-0" id="about">
    <div class="container">

      <!-- About Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>


      <!-- About Section Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid " src="/images/Screenshot1.png" alt="">
        </div>
        <div class="col-lg-6 ">
            <p> 
                Games can be art, and very well should be. Heart and soul can make a video game timeless. 
                To be remembered is to have a legacy.If you aren't addicted to playing what you created, there's room for improvement. 
                This philosophy is what makes studios psycho... and I'm proud of it.
            </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="page-section bg-white" id="contact">
    <div class="container">

      <!-- Contact Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-4">Contact Us</h2>


      <!-- Contact Section Form -->
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <!-- To configure the contact form email address, go to and index.js the email address in the index.js file on line 19. -->
          <form name="sentMessage" id="contactForm" novalidate="novalidate" action="/email" method="post">
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" 
                        id="name" 
                        name="name" 
                        type="text" 
                        placeholder="Name" 
                        required="required" 
                        data-validation-required-message="Please enter your name." 
                        required autofocus>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" 
                        id="email" name="email" 
                        type="email" 
                        placeholder="Email Address" 
                        required="required" 
                        data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" 
                        id="phone" 
                        name="phone" 
                        type="tel" 
                        placeholder="phone " 
                        required="required" 
                        data-validation-required-message="Please enter your phone number.">    
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Message</label>
                <textarea class="form-control" 
                          id="text" 
                          rows="5" 
                          name="message" 
                          placeholder="Message" 
                          required="required" 
                          data-validation-required-message="Please enter a message.">
                </textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <br>
            <div id="success"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Submit</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </section>
<div class="container"></div>
  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <div class="row">

        <!-- Footer Location -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-black  mb-4">Location</h4>
          <p class="lead mb-0"> Metro Detrot Area
            <br>Michigan</p>
        </div>

        <!-- Footer Social Icons -->
        <div class="col-lg-4 mb-5 mb-lg-0">
          <h4 class="text-uppercase mb-4">Connect with Us</h4>
          <a class="btn btn-outline-dark btn-social mx-1" 
             href="https://twitter.com/JChrite" 
             target="_blank">
            <i class="fab fa-fw fa-twitter">
            </i>
          </a>
          <a class="btn btn-outline-dark btn-social mx-1" 
             href="https://www.linkedin.com/in/jeshawn-chrite"  
             target="_blank">
            <i class="fab fa-fw fa-linkedin-in">
            </i>
          </a>
          <a class="btn btn-outline-dark  btn-social mx-1" 
             href="https://instagram.com/" 
             target="_blank">
            <i class="fa-brands fa-instagram fa-xl">
            </i>
          </a>
          <a class="btn btn-outline-dark btn-social mx-1" 
             href="https://youtube.com/"
             target="_blank">
            <i class="fa-brands fa-youtube fa-xl">
            </i>
          </a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-black">
    <div class="container">
      <small> created by psychostudios <span>&copy;</span></small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  <!-- Portfolio Modals -->

  <!-- Portfolio Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Beast Modon</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5 img1" src="/images/Screenshot1.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5">Beast Modon is my first project, a labor of love for fans of hip hop, shootem' ups, and weapons... Lots of weapons. Made with Unity via C# and entirely by myself. You can find it on the Google Play Store, App Store, or Steam (click below). Turn your Beast Mode on... You're going to need it.</p>
                <a href="https://store.steampowered.com/app/917810/Beast_Modon/"><button class="btn btn-primary">
                  
                  Download Here!
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/cake.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"></p>
                <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Portfolio Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Circus Tent</h2>
                <!-- Icon Divider -->
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                  </div>
                  <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Modal - Image -->
                <img class="img-fluid rounded mb-5" src="img/portfolio/circus.png" alt="">
                <!-- Portfolio Modal - Text -->
                <p class="mb-5"></p>
                <a href="https://store.steampowered.com/app/917810/Beast_Modon/"><button class="btn btn-primary">
                  <i class="fas fa-fw"></i>
                  Download Here!
                </button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<script src="/js/index.js"></script>

</body>

</html>
