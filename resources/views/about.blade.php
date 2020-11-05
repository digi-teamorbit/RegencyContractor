@extends('layouts.main')
@section('content')
<?php


$innerbanner =DB::table('inner_banners')->where('id', 2)->first();


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

<!-- aboutPg start -->
<main class="aboutPg">
  <!-- aboutSec start -->
  <div class="aboutSec">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="aboutImg">
            <img src="{{asset($cms_home4->image)}}" class="img-responsive img-1" alt="aboutImg">
            <img src="{{asset($cms_home5->image)}}" class="img-responsive img-2" alt="aboutImg">
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="aboutCntnt">
           <?=html_entity_decode($cms_home4->content)?>
          </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="furtherAboutCntnt">
       <?=html_entity_decode($cms_home5->content)?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- aboutSec end -->
</main>
@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection