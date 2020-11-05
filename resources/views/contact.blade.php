@extends('layouts.main')
@section('content')
<?php


$innerbanner =DB::table('inner_banners')->where('id', 4)->first();


?>
<!-- mainInnerBanner start -->
<div class="mainInnerBanner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset($innerbanner->image)}}" alt="img">
        <div class="carousel-caption">
          <div class="container">
            <div class="bannerCntnt">
              <h1 class="wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">{{$innerbanner->name}}</h1>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!-- mainInnerBanner end -->

<!-- contactPg start -->
<main class="contactPg">
  <!-- contactSec start -->
  <div class="contactSec">
    <!-- googleapis start -->
    <div class="googleapis">
      <div class="container">
          <iframe src="https://maps.google.com/maps?q='+{{ App\Http\Traits\HelperTrait::returnFlag(1966) }}+'&output=embed" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <!-- googleapis end -->
    <!-- contactPro start -->
    <div class="contactPro">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="process">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
             <p> {{ App\Http\Traits\HelperTrait::returnFlag(519) }}</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="process">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <p>Phone<a href="tel:{{ App\Http\Traits\HelperTrait::returnFlag(59) }}">+{{ App\Http\Traits\HelperTrait::returnFlag(59) }}</a></p>
              <p>Mail <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">{{ App\Http\Traits\HelperTrait::returnFlag(218) }}</a></p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="process">
              <i class="fa fa-clock-o" aria-hidden="true"></i>
              <p>Week Days:<a href="#">{{ App\Http\Traits\HelperTrait::returnFlag(682)}}</p>
              <p>Sunday: <a href="#">{{ App\Http\Traits\HelperTrait::returnFlag(1960) }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contactPro end -->
    <!-- contactPgForm start -->
    <div class="contactPgForm">
      <div class="container">
        <form action="{{route('contactUsSubmit')}}" method="Post">
           @CSRF  
          <h2>Leave Message</h2>
          <p>Our staff will call back later and answer your questions.</p>
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <input type="text" name="fname" class="form-control" id="exampleInputPassword1" placeholder="Your name" required="">
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="exampleInputPassword1" placeholder="Your Email" required="">
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <textarea name="message" placeholder="Your Message" rows="5" placeholder="Your message" required=""></textarea>
            </div>
          </div>
          <button class="webBtn">Send Message</button>
        </form>
      </div>
    </div>
    <!-- contactPgForm end -->
  </div>
  <!-- contactSec end -->
</main>


@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection