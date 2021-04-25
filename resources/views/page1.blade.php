
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
                     <i class="fa fa-phone mr-2"></i>  +212 633 366 901</strong>
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

                    <h2 class="mb-4" data-aos="fade-up">the best <strong>Digital Books agency</strong>
                        in Morocco
                    </h2>

                    <p class="mb-0" data-aos="fade-up">For more informations about us.
                    Please check <a href="page2">Contact </a> page.
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



