<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>NeelTeluguTech-NTT</title>
 
 	<!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

	  <!-- Include Bootstrap Icons CSS (new addition) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.18.0/font/bootstrap-icons.css" rel="stylesheet">
 
 	<!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
	<!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Include Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="icon" href="1.jpg" type="image/x-icon">
  <link rel="shortcut icon" href="1.jpg" type="image/x-icon">

  </head>
  <style>
 body {
      margin: 0;
      padding: 0;
      overflow-x: hidden;
      font-family: 'Arial', sans-serif;
    }

    nav {
      background-color: #343a40;
    }

    .navbar {
      transition: background-color 0.5s ease;
    }

    .navbar.sticky {
      background-color: #212529;
    }

    header {
      position: relative;
      height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: #fff;
      text-align: center;
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('71.jpg') center/cover no-repeat;
    }

    .jumbotron-content {
      z-index: 1;
      color: #fff;
    }

    .jumbotron h1,
    .jumbotron p {
      margin: 0;
    }

    .jumbotron img {
      width: 100%;
      height: auto;
      border-radius: 10px;
      animation: fadeIn 2s;
    }

    .btn-group {
      margin-top: 20px;
    }

    .btn-group .btn {
      margin-right: 10px;
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    /* Default styles for all screen sizes */
#new-about {
  padding: 60px 0;
}

#new-about h2 {
  text-align: center;
  margin-bottom: 40px;
  font-weight: bold;
  color: #343a40;
}

#new-about .about-content {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
}

#new-about .about-image {
  flex: 1;
  text-align: center;
}

#new-about .about-image img {
  width: 80%;
  max-width: 100%; /* Ensure the image doesn't exceed its container */
  border-radius: 10px;
  margin-bottom: 20px;
  animation: fadeIn 2s;
}

#new-about .about-details {
  flex: 1;
  text-align: left;
}

#new-about .about-details h3 {
  color: #343a40;
  margin-bottom: 15px;
}

#new-about .about-details p {
  color: #6c757d;
  margin-bottom: 20px;
}

#new-about .about-buttons {
  text-align: center;
}

#new-about .btn-group {
  margin-top: 20px;
}

#new-about .btn-group .btn {
  margin-right: 10px;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
  #new-about .about-content {
    flex-direction: column;
    text-align: center;
  }

  #new-about .about-image,
  #new-about .about-details {
    flex: 1;
    width: 100%;
  }

  #new-about .about-image img {
    width: 100%;
  }
}

    #services {
      padding: 60px 0;
      background-color: #343a40;
      color: #fff;
    }

    #services h2 {
      text-align: center;
      margin-bottom: 40px;
      font-weight: bold;
    }

    #services .service-item {
      text-align: center;
      margin-bottom: 40px;
    }

    #services .service-item i {
      font-size: 3em;
      color: #007bff;
    }

    #services .service-item h3 {
      margin-top: 20px;
      margin-bottom: 10px;
    }

    #services .service-item p {
      color: #6c757d;
    }    

   /* Custom styles for the map and form */
#contact {
  padding: 60px 0;
background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('1.jpg') center/cover no-repeat;
      color: #fff;
      text-align: center;

}

#contact .map {
  width: 100%;
  height: 300px; /* Adjust the height as needed */
}

#contact .contact-form {
  max-width: 600px; /* Adjust the maximum width as needed */
  margin: 0 auto;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
  #contact .map {
    height: 200px; /* Adjust the height for smaller screens */
  }

  #contact .contact-form {
    width: 80%; /* Adjust the width for smaller screens */
  }
}
    .map-responsive,
    .contact-form {
      max-width: 1200px;
      margin: 0 auto;
    }

    .map-responsive {
      overflow: hidden;
      position: relative;
      height: 0;
      padding-bottom: 56.25%;
      margin-bottom: 20px;
    }

    .map-responsive iframe {
      left: 0;
      top: 0;
      height: 100%;
      width: 100%;
      position: absolute;
    }

    .contact-form {
flex:1;
max-width:600px;
      background-color: #fff;
      border-radius: 10px;
      padding: 40px;
    }

    .form-label {
      color: #333;
    }

    .form-control {
      color: #333;
    }

    .btn-primary {
      background-color: #007bff;
      color: #fff;
      border: none;
    }

    @media (max-width: 768px) {
      .map-responsive,
      .contact-form {
        padding: 20px;
      }
    }
    /* Added spacing between the map and form */
    .map-form-container {
      display: flex;
      justify-content: space-between;
    }

    @media (max-width: 768px) {
      .map-form-container {
        flex-direction: column;
        align-items: center;
      }
    }
/* Parallax Effect for Services Section */
.parallax {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
  
}

/* Parallax Overlay */
.parallax-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
}
#services.parallax {
  background-image: url('your-background-image.jpg');
  background-size: cover;
  background-position: center;
}

       footer {
      background-color: #343a40;
      color: #fff;
      padding: 20px 0;
      text-align: center;
      position: relative;
    }

    .social-icons {
      font-size: 24px;
      position: absolute;
      top: 50%;
      right: 20px;
      transform: translateY(-50%);
    }

    .social-icons a {
      color: #fff;
      margin-left: 10px;
    }
    .up-arrow {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 50%;
      padding: 10px;
      cursor: pointer;
    }



   
  </style>
<body>
  

	
	<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="1.jpg" alt="Your Logo" width="40" height="40" class="d-inline-block align-text-top">
        NeelTeluguTech
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#new-about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#video-gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  	<!-- Header - Jumbotron -->
  <header class="jumbotron">
    <div class="jumbotron-content">
      <h1 class="display-4 animate__animated animate__fadeInDown">NeelTeluguTech</h1>
      <p class="lead animate__animated animate__fadeIn">Learn | Explore | Connect</p>
      <div class="btn-group">
        <a href="#contact" class="btn btn-primary btn-lg">Contact</a>
        <a href="https://youtube.com/@neeltelugutech" class="btn btn-outline-light btn-lg">Subscribe</a>
      </div>
    </div>
  </header>

 	 <!-- New About Section -->
  <section id="new-about">
    <div class="container">
      <h2 class="text-center">About NTT</h2>
      <div class="about-content">
        <div class="about-image animate__animated animate__fadeIn">
          <img src="1.jpg" alt="About Me">
        </div>
        <div class="about-details animate__animated animate__fadeIn">
          <h3>NTT-NeelTeluguTech</h3>
          <p>Welcome to NeelTeluguTech – your gateway to a world of tech wonders! Dive into our YouTube channel for captivating tech videos, from web development and app creation to WordPress mastery and programming basics like JAVA, C, C++. What sets us apart? We're not just about tutorials; we're a community of learners. Subscribe to access free source codes and files, making learning accessible for all. <br/>At NeelTeluguTech, we're on a mission to demystify tech and make it fun.<br/> Join our community, and let's explore the limitless possibilities of technology together! Subscribe now! <br/> #NeelTeluguTech #TechExploration #SubscribeNow
</p>
          <div class="about-buttons btn-group">
 
            <a href="https://youtube.com/@neeltelugutech" class="btn btn-primary">Subscribe</a>
            <a href="#contact" class="btn btn-outline-dark">Contact</a>

          </div>
        </div>
      </div>
    </div>
  </section>
<br/>
<h2 class="text-center">Services</h2>
      <br/>
	

	  <!-- Services Section -->
  <section id="services" class="parallax" style="background-image: url('1.jpg');">

<div class="parallax-overlay"></div>
 
    <div class="container">
      <div class="row">
        <!-- Service Item 1 -->
        <div class="col-lg-4 service-item animate__animated animate__fadeIn">
          <i class="bi bi-laptop"></i>
          <h3>HTML Web Development</h3>
        </div>
        <!-- Service Item 2 -->
        <div class="col-lg-4 service-item animate__animated animate__fadeIn">
          <i class="bi bi-palette"></i>
          <h3>WordPress</h3>
          </div>
        <!-- Service Item 3 -->
        <div class="col-lg-4 service-item animate__animated animate__fadeIn">
          <i class="bi bi-mobile"></i>
          <h3>Mobile App Development</h3>
                </div>
        <!-- Service Item 4 -->
        <div class="col-lg-4 service-item animate__animated animate__fadeIn">
          <i class="bi bi-camera"></i>
          <h3>Logo Design</h3>
          </div>
        <!-- Service Item 5 -->
        <div class="col-lg-4 service-item animate__animated animate__fadeIn">
          <i class="bi bi-journal"></i>
          <h3>Video Editing</h3>
           </div>
        <!-- Service Item 6 -->
        <div class="col-lg-4 service-item animate__animated animate__fadeIn">
          <i class="bi bi-headphones"></i>
          <h3>SEO</h3>
           </div>
      </div>
    </div>
  </section><br/><br/>

 
	 <!-- YouTube Video Gallery Section -->
  <section id="video-gallery">
    <div class="container">
      <h2 class="text-center">Video Gallery</h2><br/><br/>
      <div class="row">
        <!-- YouTube Video 1 -->
        <div class="col-lg-4 video-item">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/UwYBESQlAoU?si=MwNpDTCdpHvCDPHW" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- YouTube Video 2 -->
        <div class="col-lg-4 video-item">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/bz7o-09ljjA?si=-MO270jGyRV0A8uk" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- YouTube Video 3 -->
        <div class="col-lg-4 video-item">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/y5fyVQ7gfM8?si=QNDkBZ74tLP8Q2Vp" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- YouTube Video 4 -->
        <div class="col-lg-4 video-item">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/lRVbLpDK2k8?si=lIu-RHtgVL4Y8V89" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- YouTube Video 5 -->
        <div class="col-lg-4 video-item">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/FRF4-7G-_1k?si=molCOd8jibpoWtzk" frameborder="0" allowfullscreen></iframe>
        </div>
        <!-- YouTube Video 6 -->
        <div class="col-lg-4 video-item">
          <iframe width="100%" height="250" src="https://www.youtube.com/embed/AiVt6x6lOmo?si=r85Bb19s_ZufN6Ul" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
<br/><br/>


     <section id="contact">
    <div class="container">
      <h2 class="text-center">Contact Me</h2><br/>
      <div class="row map-form-container">
        <!-- Google Map -->
        <div class="col-lg-6 map-responsive">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3856.6737187814247!2d83.21848101481587!3d17.686815788092748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a3958e4f6b8d147%3A0x30f1830c70557f92!2sVisakhapatnam%2C%20Andhra%20Pradesh!5e0!3m2!1sen!2sin!4v1652694509580!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Contact Form -->
        <div class="col-lg-6 contact-form">
                  <form class="contact-form" method="post" action="https://formspree.io/f/mkndwyyg">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer>   
    <div class="container">
      <div class="social-icons">
        <!-- Visible Icons (replace with your preferred icons) -->
        <a href="#" target="_blank"><i class="bi bi-linkedin"></i></a>
        <a href="#" target="_blank"><i class="bi bi-twitter"></i></a>
        <a href="#" target="_blank"><i class="bi bi-github"></i></a>
        <!-- Add more social media icons as needed -->
      </div>
    </div>
    <p>&copy; 2023-24 NeelTeluguTech. All Rights Reserved.</p>
        <div class="col-lg-6">
          <!-- Up Arrow Button -->
          <button class="up-arrow" onclick="scrollToTop()">↑</button>
        </div>
      </div>
    </div>
  </footer>

  
  <!-- Scroll to Top Function -->
  <script>
    function scrollToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    // Show/hide up arrow based on scroll position
    window.addEventListener('scroll', function() {
      var upArrowButton = document.querySelector('.up-arrow');
      if (window.scrollY > 300) {
        upArrowButton.style.display = 'block';
      } else {
        upArrowButton.style.display = 'none';
      }
    });
</script>
  </script>
</body>
</html>
