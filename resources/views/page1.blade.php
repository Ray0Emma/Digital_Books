
@extends('template')

@section('content')

<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-10 col-12 d-flex flex-column justify-content-center align-items-center">
                <div class="hero-text">

                     <h1 class="text-white" data-aos="fade-up">We are ready for your creative content</h1>
                     <a href="page2" class="custom-btn btn-bg btn mt-3" data-aos="fade-up" data-aos-delay="100">
                     Let us discuss together!</a>
                     <strong class="d-block py-3 pl-5 text-white" data-aos="fade-up" data-aos-delay="200">
                     <i class="fa fa-phone mr-2"></i>  +212 633 366 {{$numero}}</strong>
                </div>
            </div>

            <div class="col-lg-6 col-12">
                <div class="hero-image" data-aos="fade-up" data-aos-delay="300">
                     <img src="{{ asset('images/working-girl.png')}}" class="img-fluid" alt="working girl">
                </div>
            </div>

        </div>
    </div>
</section>


<!-- ABOUT -->
<section class="about section-padding pb-0" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-7 mx-auto col-md-10 col-12">
                <div class="about-info">

                    <h2 class="mb-4" data-aos="fade-up">the best <strong>Digital Marketing agency</strong>
                        in Morocco
                    </h2>

                    <p class="mb-0" data-aos="fade-up">For more informations about us.
                    Please check <a href="#">blog</a> pages,
                    <a href="#">project</a> page, and <a href="page2">Contact </a> page.
                    <br><br>These are the words we <strong>live by</strong> in everything we do. Every story
                     we tell, every book we share , and every interaction we create must not only look beautiful
                     but has to feel and function beautifully, too.
                    </p>
                </div>

                <div class="about-image" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('images/office.png')}}" class="img-fluid" alt="office">
                </div>
             </div>

        </div>
    </div>
</section>


    <!-- PROJECT -->
        <section class="project section-padding" id="project">
          <div class="container-fluid">
               <div class="row">

                    <div class="col-lg-12 col-12">

                        <h2 class="mb-5 text-center" data-aos="fade-up">
                            Please take a look through our
                            <strong>featured Digital Books</strong>
                        </h2>

                         <div class="owl-carousel owl-theme" id="project-slide">
                              <div class="item project-wrapper" data-aos="fade-up" data-aos-delay="100">
                                   <img src="{{ asset('images/project/project-image01.jpg')}}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Marketing</small>

                                        <h3>
                                             <a href="#">
                                                  <span>Sweet Go Agency</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/project/project-image02.jpg')}}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Website</small>

                                        <h3>
                                             <a href="#">
                                                  <span>Smarty</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/project/project-image03.jpg')}}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Branding</small>

                                        <h3>
                                             <a href="#">
                                                  <span>Covers factory</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/project/project-image04.jpg')}}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Social Media</small>

                                        <h3>
                                             <a href="#">
                                                  <span>Race Bicycle</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>

                              <div class="item project-wrapper" data-aos="fade-up">
                                   <img src="{{ asset('images/project/project-image05.jpg')}}" class="img-fluid" alt="project image">

                                   <div class="project-info">
                                        <small>Video</small>

                                        <h3>
                                             <a href="#">
                                                  <span>Ultimate HealthCare</span>
                                                  <i class="fa fa-angle-right project-icon"></i>
                                             </a>
                                        </h3>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
</section>


<!-- TESTIMONIAL -->
<section class="testimonial section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                    <div class="contact-image" data-aos="fade-up">

                        <img src="{{ asset('images/female-avatar.png')}}" class="img-fluid" alt="website">
                    </div>
            </div>

            <div class="col-lg-6 col-md-7 col-12">
                <h4 class="my-5 pt-3" data-aos="fade-up" data-aos-delay="100">Client Testimonials</h4>

                <div class="quote" data-aos="fade-up" data-aos-delay="200"></div>

                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">

                      Digital Books was able to nail down a great Book for me.
                      They even helped me out with a strong tagline and creative
                      writing throughout the app and marketing website.
                </h2>

                <p data-aos="fade-up" data-aos-delay="400">
                <strong>Maria</strong>

                <span class="mx-1">/</span>

                <small>Digital Agency (CEO)</small>
                </p>
            </div>

        </div>
    </div>
</section>

@endsection



