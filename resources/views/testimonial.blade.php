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

<!-- testimonialPg start -->
<main class="testimonialPg">
  <!-- testSec start -->
  <div class="testSec">
    <div class="container">
      <div class="row">
        @foreach($testimonial as $value)
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="testimonial wow zoomIn" data-wow-delay="0.2s" data-wow-duration="2s">
            <h5>{{$value->name}}</h5>
            <h6>{{$value->verified}}</h6>
           <?=html_entity_decode($value->comments)?>
            <a href="#">Read More</a>
            <img src="{{asset('images/commaImg.png')}}" class="img-responsive" alt="commaImg">
          </div>
        </div>
        @endforeach
    
        </div>
      </div>
    </div>
  </div>
  <!-- testSec end -->
</main>


@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection