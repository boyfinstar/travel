@extends ('pages.master')

@section ('content')

<body>

    <!--==========================
    Header
    ============================-->
    
    <main id="main" style="margin-top: 50px";>
  
      <!--==========================
        Portfolio Section
      ============================-->
      <section id="portfolio" class="clearfix">
        <div class="container">
  
          <header class="section-header">
            <h3 class="section-title">Our Portfolio</h3>
          </header>
  
          <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>
  
          <div class="row portfolio-container">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="img/portfolio/app1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">App 1</a></h4>
                  <p>App</p>
                  <div>
                    <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/web3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Web 3</a></h4>
                  <p>Web</p>
                  <div>
                    <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/app2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">App 2</a></h4>
                  <p>App</p>
                  <div>
                    <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="img/portfolio/card2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Card 2</a></h4>
                  <p>Card</p>
                  <div>
                    <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/web2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Web 2</a></h4>
                  <p>Web</p>
                  <div>
                    <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/app3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">App 3</a></h4>
                  <p>App</p>
                  <div>
                    <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                <img src="img/portfolio/card1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Card 1</a></h4>
                  <p>Card</p>
                  <div>
                    <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/card3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Card 3</a></h4>
                  <p>Card</p>
                  <div>
                    <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
              <div class="portfolio-wrap">
                <img src="img/portfolio/web1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><a href="#">Web 1</a></h4>
                  <p>Web</p>
                  <div>
                    <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                    <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #portfolio -->
  
      <!--==========================
        Clients Section
      ============================-->
      <section id="testimonials" class="section-bg">
        <div class="container">
  
          <header class="section-header">
            <h3>Testimonials</h3>
          </header>
  
          <div class="row justify-content-center">
            <div class="col-lg-8">
  
              <div class="owl-carousel testimonials-carousel wow fadeInUp">
      
                <div class="testimonial-item">
                  <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  </p>
                </div>
      
                <div class="testimonial-item">
                  <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  </p>
                </div>
      
                <div class="testimonial-item">
                  <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  </p>
                </div>
      
                <div class="testimonial-item">
                  <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  </p>
                </div>
      
                <div class="testimonial-item">
                  <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  </p>
                </div>
  
              </div>
  
            </div>
          </div>
  
  
        </div>
      </section><!-- #testimonials -->
  
      <!--==========================
        Team Section
      ============================-->
      <section id="team">
        <div class="container">
          <div class="section-header">
            <h3>Team</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
          </div>
  
          <div class="row">
  
            <div class="col-lg-3 col-md-6 wow fadeInUp">
              <div class="member">
                <img src="img/team-1.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Walter White</h4>
                    <span>Chief Executive Officer</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="member">
                <img src="img/team-2.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Sarah Jhonson</h4>
                    <span>Product Manager</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="member">
                <img src="img/team-3.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>William Anderson</h4>
                    <span>CTO</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="member">
                <img src="img/team-4.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Amanda Jepson</h4>
                    <span>Accountant</span>
                    <div class="social">
                      <a href=""><i class="fa fa-twitter"></i></a>
                      <a href=""><i class="fa fa-facebook"></i></a>
                      <a href=""><i class="fa fa-google-plus"></i></a>
                      <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #team -->
  
      <!--==========================
        Clients Section
      ============================-->
      <section id="clients" class="section-bg">
  
        <div class="container">
  
          <div class="section-header">
            <h3>Our CLients</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque dere santome nida.</p>
          </div>
  
          <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
  
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-1.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-2.png" class="img-fluid" alt="">
              </div>
            </div>
          
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-3.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-4.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-5.png" class="img-fluid" alt="">
              </div>
            </div>
          
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-6.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-7.png" class="img-fluid" alt="">
              </div>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6">
              <div class="client-logo">
                <img src="img/clients/client-8.png" class="img-fluid" alt="">
              </div>
            </div>
  
          </div>
  
        </div>
  
      </section>
  
      <!--==========================
        Contact Section
      ============================-->
      <section id="contact">
        <div class="container-fluid">
  
          <div class="section-header">
            <h3>Contact Us</h3>
          </div>
  
          <div class="row wow fadeInUp">
  
            <div class="col-lg-6">
              <div class="map mb-4 mb-lg-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
              </div>
            </div>
  
            <div class="col-lg-6">
              <div class="row">
                <div class="col-md-5 info">
                  <i class="ion-ios-location-outline"></i>
                  <p>A108 Adam Street, NY 535022</p>
                </div>
                <div class="col-md-4 info">
                  <i class="ion-ios-email-outline"></i>
                  <p>info@example.com</p>
                </div>
                <div class="col-md-3 info">
                  <i class="ion-ios-telephone-outline"></i>
                  <p>+1 5589 55488 55</p>
                </div>
              </div>
  
              <div class="form">
                <div id="sendmessage">Your message has been sent. Thank you!</div>
                <div id="errormessage"></div>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-row">
                    <div class="form-group col-lg-6">
                      <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                      <div class="validation"></div>
                    </div>
                    <div class="form-group col-lg-6">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                      <div class="validation"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                </form>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- #contact -->
  
    </main>

@endsection