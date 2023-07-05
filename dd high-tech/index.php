<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
</head>
<body>
      <nav>
        <div class="wrapper" id="start">
          <div class="logo"><a href=""><img src="img/dd-hitech_logo.jpeg"></a></div>
          <input type="radio" name="slider" id="menu-btn">
          <input type="radio" name="slider" id="close-btn">
          <ul class="nav-links">
          <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
           <li>
            <form class="nav-search">
              <input class="nav-search-content" type="search" placeholder="Search..." aria-label="Search">
              <button class="nav-search-btn" type="submit">Search</button>
             </form>
            </li>
            <li><a href="../dd high-tech/index.html">Home</a></li>
            <li><a href="#web">Software</a></li>
            <li><a href="#product-design">Product-Design</a></li>
            <li><a href="#engineering">Engineering</a></li>
            <li><a href="#contact">Contact us</a></li>
            <li>
              <a href="#" class="desktop-item">Categories</i>
                <span class="material-icons-sharp">expand_more</span>
              </a>
              <input type="checkbox" id="showMega">
              <label for="showMega" class="mobile-item">Services<span class="material-icons-sharp">expand_more</span></label>
              <div class="mega-box">
                <div class="content">
                  <div class="row1">
                    <img src="img/andr.jpg" alt="">
                  </div>
                  <div class="row1">
                    <header>CONTACT US</header>
                    <ul class="mega-links">
                      <li><a href="/contact_us/index.html">Telephone</a></li>
                      <li><a href="/contact_us/index.html">Email</a></li>
                      <li><a href="/contact_us/index.html">Inquiry Status</a></li>
                      <li><a href="/contact_us/index.html">Customer Feedback</a></li>
                      <li><a href="/contact_us/index.html">WhatsApp</a></li>
                    </ul>
                  </div>
                  <div class="row1">
                    <header>COURSES</header>
                    <ul class="mega-links">
                      <li><a href="../dd high-tech/courses/web_devpt.html">Web Development</a></li>
                      <li><a href="../dd high-tech/courses/app_devpt.html">App Development</a></li>
                      <li><a href="../dd high-tech/courses/database.html">Database Systems</a></li>
                      <li><a href="../dd high-tech/courses/user_research.html">User research and analysis</a></li>
                      <li><a href="../dd high-tech/courses/user_experience.html">User experience(UX)</a></li>
                    </ul>
                  </div>
                  <div class="row1">
                    <header>COURSES</header>
                    <ul class="mega-links">
                      <li><a href="#"></a></li>
                      <li><a href="../dd high-tech/courses/brand_identity.html">Design for Brand Identity</a></li>
                      <li><a href="../dd high-tech/courses/electrical_circuit.html">Electrical circuit</a></li>
                      <li><a href="../dd high-tech/courses/control_system.html">Control System</a></li>
                      <li><a href="../dd high-tech/courses/robotics.html">Robotics and Automation</a></li>
                    </ul>
                  </div>
                </div>  
              </div>
          </li>
          <a href="../dd high-tech/form/signup.php" class="start" style="margin-top: 1%;"><span style="background-color: #14abe5; color: white;padding: 10px; border-radius: 10px;
            ">Get Started</span></a>
            <!--<button type="button" class="btn-subscribe">Subscribe</button>----->
          </ul>
          <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
        </div>
    </nav>
      <section class="video-section">
        <div class="video-container">
            <video src="video/pexels-cottonbro-studio-6804109-4096x2160-25fps.mp4" muted autoplay loop></video>
        </div>
      </section>

      <section class="info">
        <div class="info-words">
          <div>
            <h1>A comprehensive  selection of courses</h1>
          </div>
          <p>Choose from over 100 online and onsite courses with new additions every month</p>
        </div>
      </section>

      <div class="container">
              <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
      <div class="swiper-slide"><img src="img/software.jpg" alt=""><div class="swipe-words"><h1>SOFTWARE</h1></div></div>
      <div class="swiper-slide"><img src="img/product design.jpg" alt=""><div class="swipe-words"><h1>PRODUCT DESIGN</h1></div></div>
      <div class="swiper-slide"><img src="img/engineer.jpg" alt=""><div class="swipe-words"><h1>ENGINEERING</h1></div></div>

      </div>
        <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

        <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

      </div>

      <section class="offers" id="web">
        <div><h2>SOFTWARE DEVELOPMENT</h2></div>
        <div class="services">
        <a href="../dd high-tech/courses/web_devpt.html">
          <div class="things">
            <div><span class="material-icons-sharp">api</span></div>
            <div class="describe"><h4>Web Development</h4>
            <p>"Unlock your potential in web development at DD HI-TECH: Learn <br> HTML, CSS, JavaScript, and more!"</p>
            </div>
          </div>
        </a>
        <a href="../dd high-tech/courses/app_devpt.html">
          <div class="things">
            <div><span class="material-icons-sharp">apps</span></div>
            <div class="describe"><h4>App Development</h4>
            <p>Discover the world of app development at DD HI-TECH and unleash <br> your coding potential today!</p>
            </div>
          </div>
        </a>
       <a href="../dd high-tech/courses/database.html">
        <div class="things">
          <div><span class="material-icons-sharp">description</span></div>
          <div class="describe"><h4>Database Systems</h4>
          <p>Explore the power of databases at DD HI-TECH. Join us to master <br> the world of database systems today!</p>
          </div>
        </div>
      </div>
       </a>
      </section>

      <section class="offers" id="product-design">
        <div><h2>PRODUCT DESIGN</h2></div>
        <div class="services">
         <a href="../dd high-tech/courses/user_research.html">
          <div class="things">
            <div><span class="material-icons-sharp">analytics</span></div>
            <div class="describe"><h4>User Research and Analysis</h4>
            <p>Discover the power of user research and analysis at DD HI-TECH. <br> Join us to learn and grow together</p>
            </div>
          </div>
         </a>
          <a href="../dd high-tech/courses/user_experience.html">
            <div class="things">
              <div><span class="material-icons-sharp">streetview</span></div>
              <div class="describe"><h4>User Experience (UX)</h4>
              <p>Unlock the power of UX at DD HI-TECH! Join our immersive <br> User Experience (UX) learning program today!</p>
              </div>
            </div>
          </a>
          <a href="../dd high-tech/courses/brand_identity.html">
            <div class="things">
              <div><span class="material-icons-sharp">branding_watermark</span></div>
              <div class="describe"><h4>Design for Brand Identity</h4>
              <p>Embark on a transformative journey into brand identity at DD HI-TECH. <br> Unleash your potential in brand design mastery!</p>
              </div>
            </div>
          </div>
          </a>
      </section>

      <section class="offers" id="engineering">
        <div><h2>ENGINEERING</h2></div>
        <div class="services">
         <a href="../dd high-tech/courses/electrical_circuit.html">
          <div class="things">
            <div><span class="material-icons-sharp">ev_station</span></div>
            <div class="describe"><h4>Electrical Circuits</h4>
            <p>"Unlock your potential in web development at DD HI-TECH: Learn <br> HTML, CSS, JavaScript, and more!"</p>
            </div>
          </div>
         </a>
          <a href="../dd high-tech/courses/control_system.html">
            <div class="things">
              <div><span class="material-icons-sharp">keyboard_command_key</span></div>
              <div class="describe"><h4>Control Systems</h4>
              <p>Discover the world of app development at DD HI-TECH and unleash <br> your coding potential today!</p>
              </div>
            </div>
          </a>
           <a href="../dd high-tech/courses/robotics.html">
            <div class="things">
              <div><span class="material-icons-sharp">smart_toy</span></div>
              <div class="describe"><h4>Robotics and Automation</h4>
              <p>Discover the power of databases at DD HI-TECH. Join us to master <br> the world of database systems today!</p>
              </div>
            </div>
          </div>
           </a>
      </section>

      <section id="contact">
        <div class="foot-contact">
         <div class="contact-form">
          <form action="" method="post">
            <h1>LET´S STAY IN TOUCH!</h1>
            <input type="email" placeholder="Email"  name="email" required><br>
             <button type="submit">submit</button>
          </form>
         </div>
        </div>
    </section>
    

      <footer>
        <div class="contacts">
          <div class="follow">
             <a href=""> 
              <h3>FOLLOW US</h3>
              <h5>Linkedin</h5>
              <h5>facebook</h5>

            </a>
          </div>
          <div class="touch">
            <a href="">
              <h3>CONTACT</h3>
              <h5>info@ddhitech.com</h5>
            </a>
          </div>
          <div class="touchs">
            <a href="">
              <h3>CALL US</h3>
              <h5>+2348092451844</h5>
              <h5>+2349157451803</h5>
              <h5>+2348055464138</h5>
              <h5>+2349018654747</h5>
            </a>
          </div>
          <div class="fot-logo">
            <a href="#start"><img src="img/dd-hitech_logo-r.png" alt=""></a>
          </div>
        </div>
      </footer>


      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
      <script>
        $(document).ready(function() {
          $('a').click(function() {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
              var target = $(this.hash);
              target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
              if (target.length) {
                $('html, body').animate({
                  scrollTop: target.offset().top
                }, 1000); // Adjust the animation speed as needed
                return false;
              }
            }
          });
        });
      
        
        const swiper = new Swiper('.swiper', {
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
  loop: true,

  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },


});

      
      </script>

<?php
require 'db.php';

$email = $_POST['email'];
$date = $_POST['date'] = date("Y-m-d H:i:s");


$sql = "INSERT INTO  mail(mail,dates) VALUES('".$email."', '".$date."')";

     if ($conn->query($sql) === FALSE){
         echo "error:" .$sql. ".<br>." .$conn->error;
     }

?>
<?php mysqli_close($conn); ?>
</body>
</html>