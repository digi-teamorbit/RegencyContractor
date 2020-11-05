<?php
$cart = Session::get('cart');

?>
<header>
  <div class="topRow">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="logoSec">
            <a href="index.html">
              <img src="{{asset($logo->img_path)}}" class="img-responsive" alt="logo">
            </a>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="serachSec">
            <form action="{{route('shop')}}">
              <input type="text" name="q" placeholder="I'm looking for...">
              <button class="webBtn">Search</button>
            </form>
          </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-6">
          <div class="cartSection">
            <ul class="list-inline">
              <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
              <li><a href="{{route('cart')}}"><i class="fa fa-shopping-cart"> </i><small>{{count($cart)}}</a></li>
            </ul>
          </div>
        </div>
            <div class="col-md-2 col-sm-2 col-xs-6">
          <div class="regSec">
            <ul class="list-inline">
              @if (auth::check())
              <li><a href="{{url('account')}}">My Account</a></li>
              @else
              <li><a href="{{url('signin')}}">Login/Register</a></li>
              @endif
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="navigation">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-sm-7 col-xs-12">
          <div class="menuSec">
            <ul id="menu">

              <li><a class="{{request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a></a></li>
              <li><a class="{{request()->routeIs('shop') ? 'active' : '' }}" href="{{ url('shop') }}">Shop</a></li>
              <li><a class="{{request()->routeIs('about') ? 'active' : '' }}" href="{{ url('/about') }}">About Us <i class="fa fa-angle-down"></i></a></li>
              <li><a class="{{request()->routeIs('testimonial') ? 'active' : '' }}" href="{{ url('/testimonial') }}">Testimonials</a></li>
              <li><a class="{{request()->routeIs('contactus') ? 'active' : '' }}" href="{{ url('/contactus') }}">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-5 col-sm-5 col-xs-12">
          <div class="langSec pull-right">
            <div class="selection pull-left">
              <select name="cars" id="cars">
                <option value="volvo">US Dollar</option>
                <option value="saab">Euro</option>
                <option value="mercedes">UED</option>
              </select>
            </div>
            <div class="selection pull-right">
              <img src="{{asset('images/flag.png')}}" class="img-responsive pull-left" alt="flag">
              <select name="cars" id="cars">
                <option value="volvo">English</option>
                <option value="saab">Spanish</option>
                <option value="mercedes">German</option>
              </select>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>