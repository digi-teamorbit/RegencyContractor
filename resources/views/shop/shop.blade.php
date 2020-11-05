@extends('layouts.main')
@section('content')
<?php 
$cate = DB::table('categories')->get();
//dd($cat);
$innerbanner =DB::table('inner_banners')->where('id', 1)->first();


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
              <h1 class="wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">Shop</h1>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!-- mainInnerBanner end -->

<!-- shopPg start -->
<main class="shopPg">
  <div class="shopSec">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="product_sidebar">
            <h4>Categories</h4>
            <ul class="product_list">
              @foreach($cate as $value)
             <!--  <li class="active"><a href="#">All Products<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li> -->
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>

              @endforeach
            </ul>
          </div>
          <div class="price">
            <h4>Price<i class="fa fa-chevron-down" aria-hidden="true"></i></h4>
            <div id="slider-range"></div>
            <div class="col-xs-12 caption">
                <strong></strong> <span id="slider-range-value1"></span>-<strong></strong> <span id="slider-range-value2"></span>
              </div>
              
              <form>
                  <input type="hidden" name="min-value" value="">
                  <input type="hidden" name="max-value" value="">
                </form>
          </div>
          <div class="narrow">
            <h3>Narrow your Result</h3>
            <ul>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>

              </ul>
          </div>
          <div class="products_recommend">
            <h3>Products<i class="fa fa-chevron-down" aria-hidden="true"></i></h3>
        
            <div class="col-xs-3 mr">
              <img src="{{asset('images/side_pro1.png')}}">
            </div>

            <div class="col-xs-9 mr">
              <h6>Lorem Ipsum</h6>
              <span>$22.99</span>
              <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
            </div>
          
            <div class="col-xs-3 mr ">
              <img src="{{asset('images/side_pro2.png')}}">
            </div>
            <div class="col-xs-9 mr">
              <h6>Lorem Ipsum</h6>
              <span>$22.99</span>
              <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
            </div>
            <div class="col-xs-3 mr">
              <img src="{{asset('images/side_pro3.png')}}">
            </div>
            <div class="col-xs-9 mr">
              <h6>Lorem Ipsum</h6>
              <span>$22.99</span>
              <ul>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
                <li><i class="fa fa-star" aria-hidden="true"></i></li>
              </ul>
            </div>
          </div>
          <div class="availablity">
            <h3>Availability<i class="fa fa-chevron-down" aria-hidden="true"></i></h3>
            <ul>
                <li><input type="checkbox"> Lorem Ipsum Dolor</li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <div class="shopHead">
            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <h2>Products</h2>
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="rightSec pull-right">
                  <ul class="list-inline">
                    <li>9 Products found</li>
                    <li>
                      <label>Sort By</label>
                      <select name="cars" id="cars">
                        <option value="volvo">Default</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                      </select>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- productSec start -->
          <div class="productSec">
            <div class="row">
              @foreach($shop as $value)
         <?php
             $avg_star = DB::table('reviews')->where('product_id',$value->id)->avg('rating');
  $rate = round($avg_star);
         ?>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="product">
                  <div class="proImg">
                   <a href="{{url('/shop-detail/'.$value->id )}}"> <img src="{{asset($value->image)}}" class="img-responsive" alt="product"> </a>
                    <ul class="list-inline iconBar">
                      <li><a href="{{url('/shop-detail/'.$value->id )}}"><img src="{{asset('images/icon-1.png')}}" class="img-responsive" alt="icon"></a></li>
                      <li><a href="{{url('/shop-detail/'.$value->id )}}"><img src="{{asset('images/icon-2.png')}}" class="img-responsive" alt="icon"></a></li>
                      <li><a href="{{url('/shop-detail/'.$value->id )}}"><img src="{{asset('images/icon-3.png')}}" class="img-responsive" alt="icon"></a></li>
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
          <!-- productSec end -->
        </div>
      </div>
    </div>
  </div>
</main>
@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection