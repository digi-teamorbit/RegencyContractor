@extends('layouts.main')
@section('content')


<!-- mainInnerBanner start -->
<div class="mainInnerBanner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset('images/InnerBanner.jpg')}}" alt="img">
        <div class="carousel-caption">
          <div class="container">
            <div class="bannerCntnt">
              <h1 class="wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">Shop Detail</h1>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>
<!-- mainInnerBanner end -->

<!-- shopDetPg start -->
<main class="shopDetPg">
  <div class="shopSec">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
          <div class="product_sidebar">
            <h4>Categories</h4>
            <ul class="product_list">
              <li class="active"><a href="#">All Products<i class="fa fa-chevron-down" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>

              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="#">Lorem Ipsum Dolor<i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
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

          <div class="row">
            <form  method="post" action="{{route('save_cart')}}"  id="add-cart">
              {{ csrf_field() }}
            <input type="hidden" name="product_id" id="product_id" value="{{ $product_detail->id }}">
            <div class="product_detail">
              <h2>{{$product_detail->product_title}}</h2>
              <div class="col-sm-6">
                <div class="detail_img">
                  <img src="{{asset($product_detail->image)}}">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="detail_content">
                  <h3>Garment Bags</h3>

                                  <div class="col-sm-6 pd">
                    <ul class="star">
                       {!! str_repeat('<span class="fa fa-star" aria-hidden="true"></span>', $rate) !!}
                 
                  {!! str_repeat('<span class="fa fa-star-o" aria-hidden="true"></span>', 5 - $rate) !!}
                      <li><span>(18 Reviews)</span></li>
                    </ul>
                  </div>
            
                  <div class="col-sm-6">
                    <h6>${{$product_detail->price}}</h6>
                  </div>
                  <div class="clearfix"></div>
            <?=html_entity_decode($product_detail->description) ?>
                  <div class="col-sm-6">
                    <div class="plu">
                       <input type="button" value="-" class="qty-minus" data-field="quant[1]">
                       <input type="number" name="quant[1]"  value="1" min="1" max="10" class="qty">
                       <input type="button" value="+" class="qty-plus" data-field="quant[1]">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <a class="add_btn " href="javascript:void(0)" id="addCart">ADD TO CART</a>
                      
                  </div>
                  <ul class="stock_list">
                    <li><span>Available: </span>In Stock</li>
                    <li><span>Dimension:</span>W 37.00” D 38.00” H 37.00”</li>
                    <li><span>Weight:</span>63 lbs. (27.5 kgs.)</li>
                    <li><span>Share On:</span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div class="navTabs">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active">
                <a href="#all" aria-controls="all" role="tab" data-toggle="tab">Description 
                </a>
              </li>
              <li role="presentation">
                <a href="#bands" aria-controls="bands" role="tab" data-toggle="tab">Review</a>
              </li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="all">
                <div class="tabCntnt">
                  <h6>Lorem Ipsum Dolor Amet</h6>
                  <p>High-resiliency foam cushions wrapped in thick poly fiberin warm weather. Corner-blocked frame. Loose seat and attached back and armrest cushions. Exposed feet with faux wood finish. Polyester upholstery Excluded from promotional discounts and coupons. </p>
                </div>
                <div class="tabCntnt">
                  <h6>Lorem Ipsum Dolor Amet</h6>
                  <p>High-resiliency foam cushions wrapped in thick poly fiberin warm weather. Corner-blocked frame. Loose seat and attached back and armrest cushions. Exposed feet with faux wood finish. Polyester upholstery Excluded from promotional discounts and coupons. </p>
                </div>
                <div class="tabCntnt">
                  <h6>Lorem Ipsum Dolor Amet</h6>
                  <p>High-resiliency foam cushions wrapped in thick poly fiberin warm weather. Corner-blocked frame. Loose seat and attached back and armrest cushions. Exposed feet with faux wood finish. Polyester upholstery Excluded from promotional discounts and coupons. </p>
                </div>
              </div>
              <div role="tabpanel" class="tab-pane" id="bands">
                         <div class="leavereply">
                          <h1>leave a comment</h1>
              <form action="{{route('review_us')}}" method="POST" >

                   
              @csrf

                    <input type="hidden" name="product_id" value="{{$_GET['id']}}">
              <div>
             <select name="rating" id="rating" class="dropdownSelect" >
                         <option>Please Rate Us</option>             
             <option value="1">1</option>
             <option value="2">2</option>
             <option value="3">3</option>
             <option value="4">4</option>
             <option value="5">5</option>
              </select>
              <input name="name" type="text" placeholder="Name">
              <input name="email" type="email" placeholder="Email">
               <textarea name="message" placeholder="Message"></textarea>
                <input type="submit" value="POST COMMENT">
              </form>
                        </div>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- shopDetPg end -->

<!--footer Start-->

@endsection
@section('css')
<style>
#review h2 {
    font-size: 26px;
    color: #000;
    margin-top: 0;
}
.stars span {
    color: #d9a420 !important;
}
.leavereply h1 {
    color: #000;
    font-size: 60px;
}
.leavereply input[type="text"], .leavereply input[type="email"] {
    width: 100%;
    margin-bottom: 20px;
    border: 1px solid #e6e6e6;
    background: transparent;
    border-radius: 2px;
    color: #000;
    height: 50px;
    padding: 0 30px;
}
.leavereply input[type="submit"] {
    float: right;
    text-align: center;
    border: 0;
    display: inline-block;
    padding: 12px 32px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 13px;
    color: #333;
}
.leavereply textarea {
    width: 100%;
    min-height: 200px;
    margin-bottom: 20px;
    resize: none;
    border: 1px solid #e6e6e6;
    background: transparent;
    border-radius: 2px;
    color: #000;
    padding: 20px 30px;
}
.dropdownSelect{
    width: 100%;
    margin-bottom: 20px;
    border: 1px solid #e6e6e6;
    background: transparent;
    border-radius: 2px;
    color: #000;
    height: 50px;
    padding: 0 30px;
}


.span.fa.fa-star {
    color: #ea9e33;
}
</style>
@endsection

@section('js')
  <script type="text/javascript">

$(document).on('click', "#addCart", function(e){
$('#add-cart').submit();
});

$(document).on('keydown keyup', ".qty", function(e) {
if ( $(this).val() <= 1 ) {
e.preventDefault();
$(this).val( 1 );
}
});

</script>

@endsection