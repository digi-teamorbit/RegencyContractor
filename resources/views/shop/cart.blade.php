@extends('layouts.main')

@section('content')

<div class="mainInnerBanner">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="{{asset('images/InnerBanner.jpg')}}" alt="img">
        <div class="carousel-caption">
          <div class="container">
            <div class="bannerCntnt">
              <h1 class="wow fadeInLeft" data-wow-delay="0.2s" data-wow-duration="2s">add to cart</h1>
            </div>
          </div>
        </div>
      </div>
     </div>
  </div>
</div>


<main class="cartPg">
  <div class="cartSec">
    <div class="container">
     <form method="post" action="{{ route('update_cart') }}" id="update-cart">

  {{ csrf_field() }}  

  <input type="hidden" name="type" id="type" value="">

  <?php $subtotal  = 0; $addon_total = 0; ?>  
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div>
            <table class="table">
              <thead>
                <tr class="table-head">
                  <th class="#" colspan="2">Products</th>
                  <th class="text-center" colspan="1">Price</th>
                  <th class="">Quantity</th>
                  <th class="text-center" colspan="2">Total</th>
                </tr>
              </thead>
              <tbody class="shadow-around">

                @foreach($cart as $key=>$value)
        
          <?php 
              if($key == 'shipping') {
                  continue;
              }
            $prod_image = App\Product::where('id',$value['id'])->first();
          ?>
                <tr class="table-body">
                  <td class="">
                  <img alt="img" src="{{asset($prod_image->image)}}"></td>
                  <td class="text-center">
                    <div class="rank">
                      <ul>
                        <li>
                          <h3>{{($value['name'])}}</h3>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <td class="text-center"><span class="cart-price">${{$value['baseprice']}}</span></td>
                  <td class="text-center">
                    <label class="visible-xs">Qty: <input class="qtystyle" type="text" value="1"></label>
                    <div id="field1">
                       <button type="button" id="sub" class="sub">-</button>
                         <input type="number" max="10" min="1" name="qty[]" class="qtystyle" value="{{ $value['qty'] }}">
                          <button type="button" id="add" class="add">+</button>
                    </div>
                  </td>
                  <td class="text-center"><span class="cart-price">${{ $value['baseprice'] * $value['qty'] }}</span></td>
                   
               <td class="text-center remove"><span class="cart-price"><a href="javascript:void(0)" onclick="window.location.href='{{ route('remove_cart',[$value['id']]) }}'" class="remove">x</a></span>
                <span class="cart-price"><a href="javascript:void(0)" class="updateCart remove">✓</a></span></td> 
                </tr>
                
                   <input type="hidden" name="product_id[]" id="" value="<?php echo $value['id']; ?>">
          <?php $subtotal+= $value['baseprice'] * $value['qty']; ?>  
        @endforeach
              </tbody>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="updateCart">
                <ul class="list-inline">
                  <li class="pull-left"><a href="{{ url('shop') }}">Continue ShopPing</a></li>
                  <li class="pull-right"> <a class="checkout_css" href="{{ url('checkout') }}">Proceed To Checkout</a></li>
                  <div class="clearfix"></div>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    </div>
  </div>  
</main>

@endsection

@section('css')

<style type="text/css">

a.checkout_css {
    color: #fff;
    height: 41px;
    padding-top: 8px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-transform: uppercase;
    background: #bd2323;
    font-family: 'Oswald', sans-serif;
}

</style>

@endsection

@section('js')

<script type="text/javascript">

  
 $(document).on('click', ".updateCart", function(e){

   $('#type').val($(this).attr('data-attr'));
   $('#update-cart').submit();
    
 });
 
 $(document).on('keydown keyup', ".qtystyle", function(e) {
  if ( $(this).val() <= 1 ) {
    e.preventDefault();
    $(this).val( 1 ); 
  }

});


</script>

<script>

  function validate(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
    } else {
    // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
    }
  }

  $(document).on('click', ".addCoupon", function(e){
    $('#addCoupon').submit(); 
  });  
  
  
  $('input.qtystyle').on('input',function(e){
    // alert('Changed!')
    // alert($(this).val());
    // alert($(this).attr('data-attr-stock'));
    
    if( parseInt($(this).val()) >   parseInt($(this).attr('data-attr-stock')) ) {
      $(this).val(parseInt($(this).attr('data-attr-stock')));
      generateNotification('danger','please select only available '+parseInt($(this).attr('data-attr-stock'))+' items in stock');
    }
    
  });

</script>

<script>
function myFunction() {
  alert("Please Calculate Shipping First!");
}
</script>

@endsection

