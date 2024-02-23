@extends('layouts.app')
@section('content')

<div class="container">
                
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if($cartItems->count() > 0)
                            @foreach($cartItems as $cart)
                            <tr>
                                <th><img src="{{asset('assets/img/' . $cart ->image) }}" width="100"></th>
                                <td>{{ $cart->name }}</td>
                                <td>${{ $cart->price }}</td>
                                <td><a href ="{{route('food.delete.cart', $cart -> food_id)}}"  class="btn btn-danger text-white">delete</td>

                            </tr>
                            @endforeach
                         @else
                            <h3 class = "alert alert-success">No items in cart</h3>
                            @endif
                            </tbody>
                        
                      </table>
                      <div class="position-relative mx-auto" style="max-width: 400px; padding-left: 679px;">
                        <p style="margin-left: -7px;" class="w-19 py-3 ps-4 pe-5" type="text"> Total: {{$total}}</p>
                        <form method = "POST" action = "{{route('prepare.checkout')}}">
                        @csrf
                        <input type ="text" value = "{{$total}}" name = "price" >
                        <button type="submit" class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Checkout</button>
                    </div>
                </div>
            </div>

@endsection