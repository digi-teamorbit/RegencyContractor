@extends('layouts.main')
@section('content')

<!-- banner starts -->
<div class="banner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset($banner->image)}}" alt="img">
        <div class="carousel-caption">
          <div class="container">
            <div class="bannerCntnt">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 flexCol">
                <?=html_entity_decode($banner->description) ?>
                  <a href="#" class="bgRed wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">Learn more</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!-- banner ends -->

<!-- shippingRow start -->
<div class="shippingRow">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="shippingCntnt">
          <img src="{{asset($cms_home1->image)}}" class="img-responsive pull-left" alt="truck">
          <span>
          <?=html_entity_decode($cms_home1->content)?>
          </span>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="shippingCntnt">
          <img src="{{asset($cms_home2->image)}}" class="img-responsive pull-left" alt="truck">
          <span>
          <?=html_entity_decode($cms_home2->content)?>
          </span>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="shippingCntnt">
          <img src="{{asset($cms_home3->image)}}" class="img-responsive pull-left" alt="truck">
          <span>
           <?=html_entity_decode($cms_home3->content)?>
          </span>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- shippingRow end -->

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
          <a href="{{url('about')}}" class="webBtn">Learn More</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- aboutSec end -->

<!-- productSec start -->
<div class="productSec">
  <div class="container">
    <div class="head">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <h2>Our Top Selling Products</h2>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <a href="{{url('shop')}}" class="allLinks">View All Products</a>
        </div>
      </div>
    </div>
    <div class="productSlider">
               @foreach($shop as $value)
         <?php
             $avg_star = DB::table('reviews')->where('product_id',$value->id)->avg('rating');
  $rate = round($avg_star);
         ?>
      <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="product">
                  <div class="proImg">
                   <a href="{{route('shopDetail',['id' => $value->id])}}"> <img src="{{asset($value->image)}}" class="img-responsive" alt="product"> </a>
                    <ul class="list-inline iconBar">
                      <li><a href="{{route('shopDetail',['id' => $value->id])}}"><img src="{{asset('images/icon-1.png')}}" class="img-responsive" alt="icon"></a></li>
                      <li><a href="{{route('shopDetail',['id' => $value->id])}}"><img src="{{asset('images/icon-2.png')}}" class="img-responsive" alt="icon"></a></li>
                      <li><a href="{{route('shopDetail',['id' => $value->id])}}"><img src="{{asset('images/icon-3.png')}}" class="img-responsive" alt="icon"></a></li>
                    </ul>
                  </div>
                  <h4><a href="{{route('shopDetail',['id' => $value->id])}}">{{$value->product_title}}</a></h4>
              
                  <ul class="list-inline rating">

                  {!! str_repeat('<span class="fa fa-star" aria-hidden="true"></span>', $rate) !!}

                  {!! str_repeat('<span class="fa fa-star-o" aria-hidden="true"></span>', 5 - $rate) !!}
                  </ul>
                     
                  <h5>${{$value->price}}</h5>
                </div>
              </div>
              @endforeach
    </div>
  </div>
</div>
<!-- productSec end -->
<!-- categoriesSec start -->
<div class="categoriesSec">
  <div class="container">
    <div class="head">
      <div class="row">
        <div class="col-md-5 col-sm-5 col-xs-12">
          <h2>Place Your Heading Here.</h2>
        </div>
        <div class="col-md-7 col-sm-7 col-xs-12">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard dummy since the 1500s...</p>
        </div>
      </div>
    </div>
    <div class="categoriesSlider">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="categories">
          <img src="{{asset('images/cat-1.jpg')}}" class="img-responsive" alt="cat">
          <h6>Irrigation Supplies</h6>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="categories">
          <img src="{{asset('images/cat-2.jpg')}}" class="img-responsive" alt="cat">
          <h6>Pond & Water Features</h6>
        </div>
      </div>
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="categories">
          <img src="{{asset('images/cat-3.jpg')}}" class="img-responsive" alt="cat">
          <h6>Landscape Lighting</h6>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection