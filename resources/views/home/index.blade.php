@extends('layouts.app')
@section('content')
<!-- Portfolio Section-->

@if(session()->get('data') != '')
<div class="alert alert-danger " role="alert-block">
    <h4 class="alert-heading text-center">ERROR!</h4>
    <h4 class="alert-heading text-center">{{ session()->get('data') }}</h4>
</div>
@endif
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">{{ __('menu.portfolio') }}</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 btn"
                        href="{{ route('handbag.catalogue') }}">
                    </a>
                    <img class="img-fluid" src="{{ asset('/img/portfolio/handbag.png') }}" alt="" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto">
                    <a class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 btn"
                        href="{{ route('accesory.catalogue') }}">
                    </a>
                    <img class="img-fluid" src="{{ asset('/img/portfolio/user.png') }}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <p class="lead">Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes
                    the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets
                    for easy customization.</p>
            </div>
            <div class="col-lg-4 mr-auto">
                <p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers,
                    and add your email address to the contact form to make it fully functional!</p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                <i class="fas fa-download mr-2"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                <form id="contactForm" name="sentMessage" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" placeholder="Name" required="required"
                                data-validation-required-message="Please enter your name." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" placeholder="Email Address"
                                required="required"
                                data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number"
                                required="required"
                                data-validation-required-message="Please enter your phone number." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                            type="submit">Send</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection