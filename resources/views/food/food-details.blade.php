@extends('layouts.app')
@section('content')
<div class  = "container">
    @if (Session::has('success') )
<p class = "alert{{Session::get('alert-class', 'alert-success')}}">{{Session::get('success')}}</p>    
@endif
</div>
<div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row g-3">
                            <div class="col-12 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="{{asset('assets/img/' . $foodItem ->image) }}">
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h1 class="mb-4">{{$foodItem -> name}}</h1>
                        <p class="mb-4">{{$foodItem -> description}}</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h3>{{$foodItem -> price}} </h3>                                   
                                </div>
                            </div>
                           
                        </div>
                        <form method="POST" action="{{route('food.cart', $foodItem->id)}}">
                            @csrf
                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                            <input type="hidden" name="food_id" value="{{$foodItem->id}}">
                            <input type="hidden" name="name" value="{{$foodItem->name}}">
                            <input type="hidden" name="price" value="{{$foodItem->price}}">
                            <input type="hidden" name="image" value="{{$foodItem->image}}">
                            <input type="hidden" name="food_quantity" value="1">
                            @if($cartverify > 0)
                            <button  class="btn btn-primary py-3 px-5 mt-2" disabled>Added to Cart</button>
                            @else
                            <button type="submit" name ="submit" class="btn btn-primary py-3 px-5 mt-2">Add to Cart</button>
                            @endif
                    </div>
                </div>
            </div>
        </div>
@endsection
