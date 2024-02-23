@php
use Illuminate\Support\Facades\Storage;
@endphp

@extends('layouts.app')
@section('content')
<div class="container">
   
 <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Prathiksha<br>Hegde</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">All the profits go to Animal Sanctuaries</p>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
 <div id="about-section" div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{asset('assets/img/about-1.jpg') }}">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="{{asset('assets/img/about-2.jpg') }}" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.5s" src="{{asset('assets/img/about-3.jpg') }}">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="{{asset('assets/img/about-4.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">About Us</h5>
                        <h1 class="mb-4">Welcome to <i class="fa fa-utensils text-primary me-2"></i>Happy Vegan</h1>
                        <p class="mb-4">Happy Vegan is a restaurant founded by Prathiksha Hegde, an animal rights activist and is run by other activists. All the profits go
                            to animal sanctuaries. We serve 100% vegan food and drinks. We are committed to providing delicious and healthy food to our customers.</p>
                        </p>
                        <p class="mb-4">If you are an activist you get an additional 25% discount.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">1</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">50</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Master Chefs</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="#moreAbout" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="moreAbout">Read More</a>
                        <div class="collapse" id="moreAbout">
                            <div class="mt-3">
                                <h4>Benefits of Being Vegan</h4>
                                <p>Veganism helps reduce animal exploitation, supports environmental sustainability, and promotes health benefits associated with plant-based diets.</p>
                                <h4>Animal Rights</h4>
                                <p>Embracing veganism also stands as a statement against animal cruelty and the unethical treatment of animals in various industries.</p>
                                <!-- Add more content about veganism and animal rights here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div id="menu-section" class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Popular</small>
                                    <h6 class="mt-n1 mb-0">Breakfast</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Special</small>
                                    <h6 class="mt-n1 mb-0">Launch</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Lovely</small>
                                    <h6 class="mt-n1 mb-0">Dinner</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                            @foreach($breakfastFoods as $breakfastFoods)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets/img/' . $breakfastFoods->image) }}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{ $breakfastFoods->name }}</span>
                                                <span class="text-primary">${{ $breakfastFoods->price }}</span>
                                            </h5>
                                            <small class="fst-italic">{{ $breakfastFoods->description }}</small>
                                            <a type="button" href="{{ route('food.details',  $breakfastFoods->id) }}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                                
                     <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($lunchFoods as $lunchFoods)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{asset('assets/img/' .$lunchFoods ->image) }}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{$lunchFoods ->name}}</span>
                                                <span class="text-primary">{{$lunchFoods -> price}}</span>
                                            </h5>
                                            <small class="fst-italic">{{$lunchFoods->description}}</small>
                                            <a type="button" href="{{ route('food.details',  $lunchFoods->id) }}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>

                                        </div>
                                    </div>
                                </div>
                                    @endforeach
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                @foreach($dinnerFoods as $dinnerFoods)
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="{{ asset('assets/img/' . $dinnerFoods->image) }}" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>{{ $dinnerFoods->name }}</span>
                                                <span class="text-primary">${{ $dinnerFoods->price }}</span>
                                            </h5>
                                            <small class="fst-italic">{{ $dinnerFoods->description }}</small>
                                            <a type="button" href="{{ route('food.details',  $dinnerFoods->id) }}" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">view</a>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->


        


        <!-- Team Start -->
        <div class="container-xxl pt-5 pb-3">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Team Members</h5>
                    <h1 class="mb-5">Our Superhero Activists</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{asset('assets/img/team-1.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Ashlyn Dojac</h5>
                            <small>Manager</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{asset('assets/img/team-2.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">David Magina</h5>
                            <small>Volunteer Waiter</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{asset('assets/img/team-3.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Jenny McQueen</h5>
                            <small>Volunteer Waitress</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="team-item text-center rounded overflow-hidden">
                            <div class="rounded-circle overflow-hidden m-4">
                                <img class="img-fluid" src="{{asset('assets/img/team-4.jpg') }}" alt="">
                            </div>
                            <h5 class="mb-0">Mary Chris</h5>
                            <small>Volunteer Cashier</small>
                            <div class="d-flex justify-content-center mt-3">
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Testimonial Start -->

        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="text-center mb-5">
                <h2 class="mb-4">Leave Your Review</h2>
                <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <input type="text" name="client_name" class="form-control" placeholder="Your Name" required>
                    </div>
                    <div class="form-group mb-3">
                        <textarea name="review" class="form-control" placeholder="Your Review" rows="3" required></textarea>
                    </div>
                    <div class="form-group mb-3">
                        <input type="text" name="profession" class="form-control" placeholder="Your Profession (optional)">
                    </div>
                    <div class="form-group mb-3">
                        <label for="image">Upload a picture of your food:</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Review</button>
                </form>
            </div>
        <div class="text-center">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Testimonial</h5>
            <h1 class="mb-5">Our Clients Say!!!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel">
        @foreach($reviews as $review)
    <div class="testimonial-item bg-transparent border rounded p-4">
        <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
        <p>{{ $review->review }}</p>
        <div class="d-flex align-items-center">
        @if($review->image)
    <img class="img-fluid flex-shrink-0 rounded-circle" src="{{ Storage::url($review->image) }}" alt="Review image" style="width: 50px; height: 50px;">
@endif
            <div class="ps-3">
                <h5 class="mb-1">{{ $review->client_name }}</h5>
                <small>{{ $review->profession }}</small>
            </div>
        </div>
    </div>
@endforeach
            
           
            
        </div>
    </div>
</div>
<!-- Testimonial End -->
</div>
@endsection
