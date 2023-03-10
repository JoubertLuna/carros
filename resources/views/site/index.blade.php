<!doctype html>
<html lang="pt-br">

<head>
    <title>Colocar Titulo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('site/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap-datepicker.css') }} ">
    <link rel="stylesheet" href="{{ asset('site/css/jquery.fancybox.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('site/css/owl.carousel.min.css') }}  ">
    <link rel="stylesheet" href="{{ asset('site/css/owl.theme.default.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('site/fonts/flaticon/font/flaticon.scss') }} ">
    <link rel="stylesheet" href="{{ asset('site/css/aos.css') }}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">

</head>

<body>

    @include('site.cabecalho')

    <div class="hero" style="background-image: url('site/images/hero_1_a.jpg');">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-10">

                    <div class="row mb-5">
                        <div class="col-lg-7 intro">
                            <h1><strong>Alugar um carro</strong> está ao seu alcance.</h1>
                        </div>
                    </div>

                    <form class="trip-form">

                        <div class="row align-items-center">

                            <div class="mb-3 mb-md-0 col-md-3">
                                <select name="" id="" class="custom-select form-control">
                                    <option value="">Select Type</option>
                                    <option value="">Ferrari</option>
                                    <option value="">Toyota</option>
                                    <option value="">Ford</option>
                                    <option value="">Lamborghini</option>
                                </select>
                            </div>
                            <div class="mb-3 mb-md-0 col-md-3">
                                <div class="form-control-wrap">
                                    <input type="text" id="cf-3" placeholder="Pick up"
                                        class="form-control datepicker px-3">
                                    <span class="icon icon-date_range"></span>

                                </div>
                            </div>
                            <div class="mb-3 mb-md-0 col-md-3">
                                <div class="form-control-wrap">
                                    <input type="text" id="cf-4" placeholder="Drop off"
                                        class="form-control datepicker px-3">
                                    <span class="icon icon-date_range"></span>
                                </div>
                            </div>
                            <div class="mb-3 mb-md-0 col-md-3">
                                <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <h2 class="section-heading"><strong>Como funciona?</strong></h2>
            <p class="mb-5">Etapas fáceis para você começar</p>

            <div class="row mb-5">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">01.</span>
                            <h3>Select a car</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">02.</span>
                            <h3>Fill up form</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="step">
                        <div class="step-inner">
                            <span class="number text-primary">03.</span>
                            <h3>Payment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, laboriosam!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 text-center order-lg-2">
                    <div class="img-wrap-1 mb-5">
                        <img src="{{ asset('site/images/feature_01.png') }}" alt="Image" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-4 ml-auto order-lg-1">
                    <h3 class="mb-4 section-heading"><strong>You can easily avail our promo for renting a
                            car.</strong></h3>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae,
                        explicabo iste a labore id est quas, doloremque veritatis! Provident odit pariatur dolorem
                        quisquam, voluptatibus voluptates optio accusamus, vel quasi quidem!</p>

                    <p><a href="#" class="btn btn-primary">Meet them now</a></p>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>Car Listings</strong></h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="images/car_6.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>Mitsubishi Pajero</h3>
                            <div class="rent-price">
                                <strong>$389.00</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">8</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">4</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">4</span>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                    voluptatem quibusdam.</p>
                                <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="images/car_5.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>Nissan Moco</h3>
                            <div class="rent-price">
                                <strong>$389.00</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">8</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">4</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">4</span>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                    voluptatem quibusdam.</p>
                                <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="images/car_4.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>Honda Fitta</h3>
                            <div class="rent-price">
                                <strong>$389.00</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">8</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">4</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">4</span>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                    voluptatem quibusdam.</p>
                                <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="images/car_3.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>Skoda Laura</h3>
                            <div class="rent-price">
                                <strong>$389.00</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">8</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">4</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">4</span>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                    voluptatem quibusdam.</p>
                                <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="images/car_2.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>Mazda LaPuta</h3>
                            <div class="rent-price">
                                <strong>$389.00</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">8</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">4</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">4</span>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                    voluptatem quibusdam.</p>
                                <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-md-6 col-lg-4 mb-4">

                    <div class="listing d-block  align-items-stretch">
                        <div class="listing-img h-100 mr-4">
                            <img src="images/car_1.jpg" alt="Image" class="img-fluid">
                        </div>
                        <div class="listing-contents h-100">
                            <h3>Buick LaCrosse</h3>
                            <div class="rent-price">
                                <strong>$389.00</strong><span class="mx-1">/</span>day
                            </div>
                            <div class="d-block d-md-flex mb-3 border-bottom pb-3">
                                <div class="listing-feature pr-4">
                                    <span class="caption">Luggage:</span>
                                    <span class="number">8</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Doors:</span>
                                    <span class="number">4</span>
                                </div>
                                <div class="listing-feature pr-4">
                                    <span class="caption">Passenger:</span>
                                    <span class="number">4</span>
                                </div>
                            </div>
                            <div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eos at eum,
                                    voluptatem quibusdam.</p>
                                <p><a href="#" class="btn btn-primary btn-sm">Rent Now</a></p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="site-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <h2 class="section-heading"><strong>Testimonials</strong></h2>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="testimonial-2">
                        <blockquote class="mb-4">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                eveniet veniam. Ipsam, nam, voluptatum"</p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">
                            <img src="images/person_1.jpg" alt="Image" class="img-fluid mr-3">
                            <div class="author-name">
                                <span class="d-block">Mike Fisher</span>
                                <span>Owner, Ford</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="testimonial-2">
                        <blockquote class="mb-4">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                eveniet veniam. Ipsam, nam, voluptatum"</p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">
                            <img src="images/person_2.jpg" alt="Image" class="img-fluid mr-3">
                            <div class="author-name">
                                <span class="d-block">Jean Stanley</span>
                                <span>Traveler</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <div class="testimonial-2">
                        <blockquote class="mb-4">
                            <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, deserunt
                                eveniet veniam. Ipsam, nam, voluptatum"</p>
                        </blockquote>
                        <div class="d-flex v-card align-items-center">
                            <img src="images/person_3.jpg" alt="Image" class="img-fluid mr-3">
                            <div class="author-name">
                                <span class="d-block">Katie Rose</span>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('site.rodape')

    </div>

    <script src="{{ asset('site/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('site/js/popper.min.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('site/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('site/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('site/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('site/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('site/js/aos.js') }}"></script>

    <script src="{{ asset('site/js/main.js') }}"></script>

</body>

</html>
