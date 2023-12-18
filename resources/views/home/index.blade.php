@extends('layouts.master')

@section('content')
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html"
                ><img src="./assets/images/logo.png" class="img-fluid" alt="logo"
                    /></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                En
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Bangla</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link my-account" href="#">My Account</a>
                        </li>
                        <li class="nav-item" >
                            <a class="nav-link bg-white text-black" href="#"
                            ><i class="bi bi-text-right"></i
                                ></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- banner -->
        <div class="banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="single">
                            <h2>Exceptional Moving Service</h2>
                            <h1>Washing Machine Move</h1>
                            <p>
                                No more hassle with renting transport and carrying it
                                yourself. Fixed price, book directly online with date! Go for
                                convenience and have your washing machine moved throughout the
                                Netherlands.
                            </p>
                            <a href="{{ url('/order') }}" class="btn btn-blue mb-3"
                            >Book time & date<i class="bi bi-calendar2 ms-2"></i
                                ></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="img">
                            <div class="row justify-content-end">
                                <div class="col-lg-10 mb-4">
                                    <div class="book-now">
                                        <img
                                            src="./assets/images/shape-corner.png"
                                            class="img-fluid shape-corner"
                                            alt="img"
                                        />
                                        <h2 class="common-subtitle mb-3">
                                            Washing machine moving
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <p class="mb-1">All-inclusive Prijs</p>
                                                <button type="button" class="btn p-0">
                                                    <span>€89</span> / Eur Incl. Btw
                                                </button>
                                            </div>
                                            <div class="col-md-6 align-self-end">
                                                <a href="#" class="btn btn-dark-blue"
                                                >Book Now<i class="bi bi-chevron-right ms-2"></i
                                                    ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-9 mb-3">
                                    <div class="book-now">
                                        <img
                                            src="./assets/images/shape-corner.png"
                                            class="img-fluid shape-corner"
                                            alt="img"
                                        />
                                        <h2 class="common-subtitle mb-3">
                                            Washing machine & Dryer
                                        </h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex">
                                                    <div class="me-2">
                                                        <img
                                                            src="./assets/images/delivery.png"
                                                            class="img-fluid"
                                                            alt="icon"
                                                        />
                                                    </div>
                                                    <div>
                                                        <p class="mb-1">Moving workers</p>
                                                        <h6>2 Person</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <p class="mb-1">All-inclusive Prijs</p>
                                                <button type="button" class="btn p-0">
                                                    <span>€89</span> /Eur Incl. Btw
                                                </button>
                                            </div>
                                            <div class="col-md-6 align-self-end">
                                                <a href="{{ url('/order') }}" class="btn btn-dark-blue"
                                                >Book Now<i class="bi bi-chevron-right ms-2"></i
                                                    ></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 text-md-end">
                                    <a href="#"
                                    ><img
                                            src="./assets/images/banner3.png"
                                            class="img-fluid mb-3"
                                            alt="img"
                                        /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- service -->
    <div class="service">
        <div class="container">
            <!-- section-title  -->
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title text-center">
                        <h2>How It Works</h2>
                        <h3>Arranged Easily, Stress-Free Within 3 Minutes</h3>
                        <p>
                            Easily move your washing machine: Click on the button, fill in
                            your details, confirm and pay online, we will take care of the
                            rest
                        </p>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="row">
                <!-- single -->
                <div class="col-md-4">
                    <div class="single">
                        <span>01</span>
                        <i class="bi bi-calendar-check-fill"></i>
                        <h2 class="common-subtitle">Start Booking</h2>
                        <p>
                            Click on one of the 'Book directly' buttons above or below and
                            proceed to our booking system to start your booking.
                        </p>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single">
                        <span>02</span>
                        <i class="bi bi-calendar-check-fill"></i>
                        <h2 class="common-subtitle">Enter Your Information</h2>
                        <p>
                            Complete the online booking form with your contact details,
                            departure and destination addresses, desired date and any special instructions.
                        </p>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single">
                        <span>03</span>
                        <i class="bi bi-calendar-check-fill"></i>
                        <h2 class="common-subtitle">Confirm And Pay</h2>
                        <p>
                            Check your booking details and confirm your booking by paying online. You willr eceive
                            immediately the booking confirmation by email. See you soon! PAy Now
                        </p>
                        <button type="button" class="btn p-0 pay-now">
                            <img
                                src="./assets/images/pay-now.png"
                                class="img-fluid me-2"
                                alt="icon"
                            />Pay Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials -->
    <section class="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="section-title">
                        <h2>Testimonials</h2>
                        <h3>Words From Our Customer</h3>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem a Ipsum has been the industry's standard fu
                            dummy text ever since the 1500s.
                        </p>
                    </div>
                    <div class="single">
                        <div class="d-flex align-items-center">
                            <div class="me-5">
                                <img
                                    src="./assets/images/google.png"
                                    class="img-fluid"
                                    alt="google"
                                />
                            </div>
                            <div>
                                <button type="button" class="btn btn-dark-blue">
                                    View<i class="bi bi-chevron-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 position-relative">
                    <div class="text-end">
                        <button type="button" class="btn btn-dark-blue">
                            Show All<i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                    <div class="single-right">
                        <div id="testimonial-slider" class="carousel slide">
                            <div class="carousel-indicators">
                                <button
                                    type="button"
                                    data-bs-target="#testimonial-slider"
                                    data-bs-slide-to="0"
                                    class="active"
                                    aria-current="true"
                                    aria-label="Slide 1"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#testimonial-slider"
                                    data-bs-slide-to="1"
                                    aria-label="Slide 2"
                                ></button>
                                <button
                                    type="button"
                                    data-bs-target="#testimonial-slider"
                                    data-bs-slide-to="2"
                                    aria-label="Slide 3"
                                ></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-single">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img
                                                            src="./assets/images/right-quote-sign.png"
                                                            class="img-fluid"
                                                            alt="quote"
                                                        />
                                                    </div>
                                                    <div>
                                                        <h2 class="common-subtitle">Ahmed Khal</h2>
                                                        <p class="text-blue">The Holand Shop</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of lk Lorem
                                                    Ipsum available, but the majority
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-single">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img
                                                            src="./assets/images/right-quote-sign.png"
                                                            class="img-fluid"
                                                            alt="quote"
                                                        />
                                                    </div>
                                                    <div>
                                                        <h2 class="common-subtitle">Ahmed Khal</h2>
                                                        <p class="text-blue">The Holand Shop</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of lk Lorem
                                                    Ipsum available, but the majority .
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-single">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img
                                                            src="./assets/images/right-quote-sign.png"
                                                            class="img-fluid"
                                                            alt="quote"
                                                        />
                                                    </div>
                                                    <div>
                                                        <h2 class="common-subtitle">Ahmed Khal</h2>
                                                        <p class="text-blue">The Holand Shop</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of lk Lorem
                                                    Ipsum available, but the majority
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-single">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img
                                                            src="./assets/images/right-quote-sign.png"
                                                            class="img-fluid"
                                                            alt="quote"
                                                        />
                                                    </div>
                                                    <div>
                                                        <h2 class="common-subtitle">Ahmed Khal</h2>
                                                        <p class="text-blue">The Holand Shop</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of lk Lorem
                                                    Ipsum available, but the majority
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="carousel-single">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img
                                                            src="./assets/images/right-quote-sign.png"
                                                            class="img-fluid"
                                                            alt="quote"
                                                        />
                                                    </div>
                                                    <div>
                                                        <h2 class="common-subtitle">Ahmed Khal</h2>
                                                        <p class="text-blue">The Holand Shop</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of lk Lorem
                                                    Ipsum available, but the majority
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="carousel-single">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img
                                                            src="./assets/images/right-quote-sign.png"
                                                            class="img-fluid"
                                                            alt="quote"
                                                        />
                                                    </div>
                                                    <div>
                                                        <h2 class="common-subtitle">Ahmed Khal</h2>
                                                        <p class="text-blue">The Holand Shop</p>
                                                    </div>
                                                </div>
                                                <p>
                                                    There are many variations of passages of lk Lorem
                                                    Ipsum available, but the majority
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Compare -->
    <section class="compare">
        <div class="container">
            <img
                src="./assets/images/shape03.png"
                class="img-fluid shape03"
                alt="img"
            />
            <!-- section-title  -->
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title text-center">
                        <h2>Compare and Contrast</h2>
                        <h3>Always affordable</h3>
                        <p>
                            Your options for transporting, for example, one queen size bed
                            from The Hague to Rotterdam.
                        </p>
                    </div>
                </div>
            </div>
            <!-- content -->
            <div class="row">
                <!-- single -->
                <div class="col-md-4">
                    <div class="single">
                        <figure>
                            <img
                                src="./assets/images/car1.png"
                                class="img-fluid"
                                alt="img"
                            />
                            <p>Price of a rental van</p>
                        </figure>
                        <ul class="list-unstyled">
                            <li>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                            <li>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                            <li>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                        </ul>
                        <div class="button">
                            <button type="button" class="btn btn-blue">
                                Book Now<i class="bi bi-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single">
                        <figure>
                            <img
                                src="./assets/images/car1.png"
                                class="img-fluid"
                                alt="img"
                            />
                            <p>Price of a rental van</p>
                        </figure>
                        <ul class="list-unstyled">
                            <li>
                                <img
                                    src="./assets/images/cross.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                            <li>
                                <img
                                    src="./assets/images/cross.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                            <li>
                                <img
                                    src="./assets/images/cross.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                        </ul>
                        <div class="button">
                            <button type="button" class="btn btn-blue">
                                Book Now<i class="bi bi-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single">
                        <figure>
                            <img
                                src="./assets/images/car1.png"
                                class="img-fluid"
                                alt="img"
                            />
                            <p>Price of a rental van</p>
                        </figure>
                        <ul class="list-unstyled">
                            <li>
                                <img
                                    src="./assets/images/cross.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                            <li>
                                <img
                                    src="./assets/images/cross.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                            <li>
                                <img
                                    src="./assets/images/cross.png"
                                    class="img-fluid me-2"
                                    alt="ing"
                                />
                                <span class="align-middle"> Cost of rental and petrol</span>
                            </li>
                        </ul>
                        <div class="button">
                            <button type="button" class="btn btn-blue">
                                Book Now<i class="bi bi-chevron-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Additional Services -->
    <section class="addition">
        <div class="container">
            <img
                src="./assets/images/bg-blue.png"
                class="img-fluid additional-bg"
                alt="bg"
            />
            <!-- section-title  -->
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="section-title text-center">
                        <h2>Additional Services</h2>
                        <h3 class="text-white">
                            Optional Services Available For Booking
                        </h3>
                        <p class="text-white">
                            Your options for transporting, for example, one queen size bed
                            from The Hague to Rotterdam.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- single -->
                <div class="col-md-4">
                    <div class="single card">
                        <img
                            src="./assets/images/gallery3.png"
                            class="img-fluid w-100 d-block"
                            alt="img"
                        />
                        <div class="card-body">
                            <h2 class="common-subtitle">Old Machine Disposal</h2>
                            <p>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="img"
                                />
                                <span
                                >Included is undocking, downstairs from any floor and/or
                    bringing machine</span
                                >
                            </p>
                            <button type="button" class="btn">
                                <span>€25</span> /per machine
                            </button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-8">
                    <div class="single card">
                        <img
                            src="./assets/images/gallery2.png"
                            class="img-fluid w-100 d-block"
                            alt="img"
                        />
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="common-subtitle">
                                        Refresh Service (Washing Machine)
                                    </h2>
                                    <p>
                                        <img
                                            src="./assets/images/check.png"
                                            class="img-fluid me-2"
                                            alt="img"
                                        />
                                        <span
                                        >Included with washing machine is cleaning hoses,
                        outside machine, filter, washing machine rubber, drum
                        and turning of 90 degrees program with special cleaning
                        agent.</span
                                        >
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <h2 class="common-subtitle">Refresh Service (Dryer)</h2>
                                    <p>
                                        <img
                                            src="./assets/images/check.png"
                                            class="img-fluid me-2"
                                            alt="img"
                                        />
                                        <span
                                        >Included with dryer is external cleaning of machine,
                        filter, drum.</span
                                        >
                                    </p>
                                </div>
                            </div>

                            <button type="button" class="btn">
                                <span>€10</span> /per machine
                            </button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single card">
                        <img
                            src="./assets/images/gallery1.png"
                            class="img-fluid w-100 d-block"
                            alt="img"
                        />
                        <div class="card-body">
                            <h2 class="common-subtitle">Hose Replacement</h2>
                            <p>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="img"
                                />
                                <span
                                >Includes disassembly and assembly of new water hose</span
                                >
                            </p>
                            <button type="button" class="btn">
                                <span>€15</span> /per machine
                            </button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single card">
                        <img
                            src="./assets/images/gallery4.png"
                            class="img-fluid w-100 d-block"
                            alt="img"
                        />
                        <div class="card-body">
                            <h2 class="common-subtitle">Drip Tray</h2>
                            <p>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="img"
                                />
                                <span
                                >Includes places of drip tray under the washing machine as a
                    prevention</span
                                >
                            </p>
                            <button type="button" class="btn">
                                <span>€15</span> /per machine
                            </button>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-4">
                    <div class="single card">
                        <img
                            src="./assets/images/gallery5.png"
                            class="img-fluid w-100 d-block"
                            alt="img"
                        />
                        <div class="card-body">
                            <h2 class="common-subtitle">Rubber Mat</h2>
                            <p>
                                <img
                                    src="./assets/images/check.png"
                                    class="img-fluid me-2"
                                    alt="img"
                                />
                                <span
                                >Includes disassembly and assembly of new water hose</span
                                >
                            </p>
                            <button type="button" class="btn">
                                <span>€20</span> /per machine
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ -->
    <section class="faq">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="single">
                        <!-- section-title  -->
                        <div class="section-title mb-3">
                            <h2>FAQ</h2>
                            <h3 class="text-white" style="font-size: 36px">Frequently Asked Questions</h3>
                        </div>
                        <div class="accordion bg-transparent" id="accordionExample">
                            <!-- accordion-item -->
                            <div class="accordion-item bg-transparent mt-3">
                                <h2 class="accordion-header mb-1 rounded">
                                    <button
                                        class="accordion-button rounded"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq1"
                                        aria-expanded="true"
                                        aria-controls="faq1"
                                    >
                                        What’s included in this moving service?
                                    </button>
                                </h2>
                                <div
                                    id="faq1"
                                    class="accordion-collapse collapse show bg-transparent"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body text-white">
                                        Our service includes safely disconnecting, moving and
                                        reconnecting your washing machine at the desired location
                                        including floors. We also provide the necessary packaging
                                        service to protect your washing machine and floor.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-item -->
                            <div class="accordion-item bg-transparent mt-3">
                                <h2 class="accordion-header mb-1 rounded">
                                    <button
                                        class="accordion-button rounded"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq2"
                                        aria-expanded="true"
                                    >
                                        Can I also book without transport?
                                    </button>
                                </h2>
                                <div
                                    id="faq2"
                                    class="accordion-collapse collapse bg-transparent"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body text-white">
                                        Our service includes safely disconnecting, moving and
                                        reconnecting your washing machine at the desired location
                                        including floors. We also provide the necessary packaging
                                        service to protect your washing machine and floor.
                                    </div>
                                </div>
                            </div>
                            <!-- accordion-item -->
                            <div class="accordion-item bg-transparent mt-3">
                                <h2 class="accordion-header mb-1 rounded">
                                    <button
                                        class="accordion-button rounded"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq3"
                                        aria-expanded="true"
                                    >
                                        How can I make an appointment for my washing
                                        machine move?
                                    </button>
                                </h2>
                                <div
                                    id="faq3"
                                    class="accordion-collapse collapse  bg-transparent"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body text-white">
                                        Our service includes safely disconnecting, moving and
                                        reconnecting your washing machine at the desired location
                                        including floors. We also provide the necessary packaging
                                        service to protect your washing machine and floor.
                                    </div>
                                </div>
                            </div>
                            <!--/ accordion-item -->
                            <div class="accordion-item bg-transparent mt-3">
                                <h2 class="accordion-header mb-1 rounded">
                                    <button
                                        class="accordion-button rounded"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq4"
                                        aria-expanded="true"
                                    >
                                        Do you work throughout the Netherlands?
                                    </button>
                                </h2>
                                <div
                                    id="faq4"
                                    class="accordion-collapse collapse  bg-transparent"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body text-white">
                                        Our service includes safely disconnecting, moving and
                                        reconnecting your washing machine at the desired location
                                        including floors. We also provide the necessary packaging
                                        service to protect your washing machine and floor.
                                    </div>
                                </div>
                            </div>
                            <!--/ accordion-item -->
                            <div class="accordion-item bg-transparent mt-3">
                                <h2 class="accordion-header mb-1 rounded">
                                    <button
                                        class="accordion-button rounded"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#faq5"
                                        aria-expanded="true"
                                    >
                                        Can I also have my dryer moved?
                                    </button>
                                </h2>
                                <div
                                    id="faq5"
                                    class="accordion-collapse collapse  bg-transparent"
                                    data-bs-parent="#accordionExample"
                                >
                                    <div class="accordion-body text-white">
                                        Our service includes safely disconnecting, moving and
                                        reconnecting your washing machine at the desired location
                                        including floors. We also provide the necessary packaging
                                        service to protect your washing machine and floor.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single -->
                <div class="col-md-6">
                    <div class="single-right">
                        <h2 class="common-subtitle" style="padding-left: 50px">How we work</h2>
                        <div class="play-vdo"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact -->
    <section class="contact">
        <div class="container">
            <!-- <img
              src="./assets/images/shape03.png"
              class="img-fluid shape03"
              alt="img"
            /> -->
            <div class="row mt-5" style="color: #000000">
                <!-- single -->
                <div class="col-md-6">
                    <div class="single">
                        <div class="section-title">
                            <h2>Contact</h2>
                            <h3>Contact Information</h3>
                            <p>
                                Need help assessing difficult situations? Or if you have any
                                other questions, please feel free to contact us. We are happy
                                to help you!
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mt-3">
                                <h6 style="font-weight: bold">Phone</h6>
                                <p>+4733378901</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h6>Official Email</h6>
                                <p>info@digital.com</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h6>Business Hours</h6>
                                <p>Monday to Saturday</p>
                                <p>9:00 AM and 8:00 PM</p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h6>Location</h6>
                                <p>
                                    55 Main Street, The Grand Avenue 2nd Block, New York City
                                </p>
                            </div>
                            <div class="col-md-6 mt-3">
                                <h6>Legal Info</h6>
                                <p>Lorem Ipsum is simply dummy text</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single -->
                <div class="col-md-6">
                    <div class="single right contactSingleRight">
                        <div class="section-title">
                            <h6 class="text-blue">Have Questions?</h6>
                            <h3>Send a Message</h3>
                        </div>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="uname"
                                            placeholder="Name"
                                        />
                                        <label for="uname">Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="email"
                                            class="form-control"
                                            id="Email"
                                            placeholder="Email"
                                        />
                                        <label for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-floating">
                                        <input
                                            type="tel"
                                            class="form-control"
                                            id="Phone"
                                            placeholder="Phone"
                                        />
                                        <label for="Phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-floating">
                      <textarea
                          class="form-control h-30"
                          placeholder="Tell us about your query"
                          id="notez"
                      ></textarea>
                                        <label for="notez">Tell us about your query</label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-dark-blue mt-3">
                                Get in touch<i class="bi bi-arrow-right ms-2"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!-- single -->
            </div>
        </div>
    </section>
@endsection


@section('page_scripts')
@stop
