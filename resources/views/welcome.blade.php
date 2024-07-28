<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Techno - MMS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="index-page">
   <header id="header" class="header sticky-top">
    <div class="branding d-flex align-items-cente">
      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.html" class="logo d-flex align-items-center">
          <h1 class="sitename">Techno - MMS</h1>
        </a>
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
              @if (Route::has('login'))
               <livewire:welcome.navigation />
              @endif
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
      </div>
    </div>
   </header>

  <main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1>Welcome to <br><span>Techno - MMS</span></h1>
            <p>Our goal at Techno MMS is to connect with companies and support their development through innovative technology ideas.</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Connect with Us</a>
            </div>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">
              <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p><span>Check Our</span> <span class="description-title">Services</span></p>
      </div><!-- End Section Title -->

        <div class="row gy-4">

          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-code-slash icon"></i></div>
              <h4><a href="" class="stretched-link">Website Development</a></h4>
              <p>Creating responsive and engaging websites to enhance your online presence and drive growth.</p>
            </div>
          </div><!-- End Service Item -->
        
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-camera-reels icon"></i></div>
              <h4><a href="" class="stretched-link">Video Editing</a></h4>
              <p>Professional video editing services to captivate your audience and tell your story effectively.</p>
            </div>
          </div><!-- End Service Item -->
        
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-bullseye icon"></i></div>
              <h4><a href="" class="stretched-link">Digital Marketing</a></h4>
              <p>Innovative digital marketing strategies to boost your brand's visibility and engagement online.</p>
            </div>
          </div><!-- End Service Item -->
        
          <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-palette icon"></i></div>
              <h4><a href="" class="stretched-link">Graphic Designing</a></h4>
              <p>Creative graphic design solutions to make your brand stand out and leave a lasting impression.</p>
            </div>
          </div><!-- End Service Item -->
        
        </div>
        

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
        <p><span>Discover</span> <span class="description-title">Our Expertise</span></p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-3">
    
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/about.jpg" alt="" class="img-fluid">
          </div>
    
          <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="about-content ps-0 ps-lg-3">
              <h3>Transforming Your Business with Cutting-Edge Web Development and Digital Marketing</h3>
              <p class="fst-italic">
                At Techno MMS, we specialize in web development and social media digital marketing, ensuring your business evolves into a brand icon.
              </p>
              <ul>
                <li>
                  <i class="bi bi-diagram-3"></i>
                  <div>
                    <h4>Web Development Excellence</h4>
                    <p>We build responsive, user-friendly websites that drive engagement and growth for your business.</p>
                  </div>
                </li>
                <li>
                  <i class="bi bi-fullscreen-exit"></i>
                  <div>
                    <h4>Comprehensive Digital Marketing</h4>
                    <p>Our innovative digital marketing strategies enhance your brand’s visibility and connect with your target audience effectively.</p>
                  </div>
                </li>
              </ul>
              <p>
                With our expertise, your business will not only compete but thrive in the digital world. Let us help you transform into a brand icon.
              </p>
            </div>
    
          </div>
        </div>
    
      </div>
    
    </section><!-- /About Section -->
    

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-emoji-smile"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-journal-richtext"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-headset"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6 d-flex flex-column align-items-center">
            <i class="bi bi-people"></i>
            <div class="stats-item">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

<!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section dark-background">

  <img src="assets/img/testimonials-bg.jpg" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Alex Johnson</h3>
            <h4>CEO & Founder</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Techno MMS transformed our online presence with their top-notch web development services. Our website is now more engaging and user-friendly than ever.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Linda Williams</h3>
            <h4>Marketing Director</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Their digital marketing strategies have significantly increased our brand's visibility. We've seen a tremendous boost in our online engagement.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Michael Brown</h3>
            <h4>Small Business Owner</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Thanks to Techno MMS, our social media management is now seamless. They helped us connect with our audience like never before.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Emily Davis</h3>
            <h4>Freelancer</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>The expertise of Techno MMS in digital marketing has taken my freelance business to new heights. Highly recommend their services.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Smith</h3>
            <h4>Entrepreneur</h4>
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Working with Techno MMS has been a game-changer for our online strategy. Their web development and marketing expertise are unmatched.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

    </section><!-- /Testimonials Section -->

    <section id="team" class="team section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p><span>Our Dedicated</span> <span class="description-title">Team</span></p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-4">
    
          <!-- CEO -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="Mohamed Nabrees">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>BM Nabrees</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
    
          <!-- Software Engineer -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="Software Engineer">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sahana</h4>
                <span>Designer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
    
          <!-- Designer -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="Designer">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Jane Smith</h4>
                <span>Software Engineer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
    
          <!-- Digital Marketer -->
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="team-member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="Digital Marketer">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amjath</h4>
                <span>Digital Marketer</span>
              </div>
            </div>
          </div><!-- End Team Member -->
    
        </div>
    
      </div>
    
    </section><!-- /Team Section -->
    
  
    <!-- Pricing Section -->
    <section id="pricing" class="pricing section">
    
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Pricing</h2>
        <p><span>Explore Our</span> <span class="description-title">Pricing Plans</span></p>
      </div><!-- End Section Title -->
    
      <div class="container">
    
        <div class="row gy-3">
    
          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="pricing-item">
              <h3>Starter</h3>
              <h4><sup>$</sup>99<span> / month</span></h4>
              <ul>
                <li>Basic Web Development</li>
                <li>1 Social Media Channel</li>
                <li>Monthly Analytics Report</li>
                <li class="na">SEO Optimization</li>
                <li class="na">Content Creation</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
    
          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="pricing-item featured">
              <h3>Professional</h3>
              <h4><sup>$</sup>199<span> / month</span></h4>
              <ul>
                <li>Advanced Web Development</li>
                <li>Up to 3 Social Media Channels</li>
                <li>Bi-weekly Analytics Report</li>
                <li>SEO Optimization</li>
                <li class="na">Content Creation</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
    
          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="pricing-item">
              <h3>Business</h3>
              <h4><sup>$</sup>299<span> / month</span></h4>
              <ul>
                <li>Custom Web Development</li>
                <li>Up to 5 Social Media Channels</li>
                <li>Weekly Analytics Report</li>
                <li>SEO Optimization</li>
                <li>Content Creation & Strategy</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
    
          <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="pricing-item">
              <span class="advanced">Premium</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>499<span> / month</span></h4>
              <ul>
                <li>Comprehensive Web Development</li>
                <li>Unlimited Social Media Channels</li>
                <li>Daily Analytics Report</li>
                <li>SEO Optimization</li>
                <li>Content Creation, Strategy, & Management</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Choose Plan</a>
              </div>
            </div>
          </div><!-- End Pricing Item -->
    
        </div>
    
      </div>
    
    </section><!-- /Pricing Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Address</h3>
                  <p>111 Eravur, Batticaloa, Sri Lanka</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Call Us</h3>
                  <p>+94 765 641 078</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Email Us</h3>
                  <p>infotechnomms@gmail.com</p>
                </div>
              </div><!-- End Info Item -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31624.459474377694!2d81.60614199609246!3d7.783735579651139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afad474cfc87353%3A0x9d3fd8ac4c081b6a!2sEravur%2C%20Sri%20Lanka!5e0!3m2!1sen!2som!4v1721894358399!5m2!1sen!2som" frameborder="0" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

              
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Your Name</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Your Email</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Message</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

 
    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Techno MMS</span>
          </a>
          <div class="footer-contact pt-3">
            <p>111 Eravur, Batticaloa, Sri Lanka</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+94 765 641 078</span></p>
            <p><strong>Email:</strong> <span>infotechnomms@gmail.com</span></p>
          </div>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">About Us</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Contact</a></li>
          </ul>
        </div>
  
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Digital Marketing</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Social Media Management</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Brand Development</a></li>
          </ul>
        </div>
  
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <p>Connect with us on social media and stay updated with our latest news and updates.</p>
          <div class="social-links d-flex">
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
      </div>
    </div>
  
    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Techno MMS</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        BM Nabrees <a href="https://linkedin.com/in/bmnabrees">linkedin</a>
      </div>
    </div>
  
  </footer>
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>