<!-- ============================================================== -->
<!-- All SCRIPTS AND JS LINKS BELOW  -->
<!-- ============================================================== -->


<!-- All JS -->
<script src="{{asset('js/all.js')}}"></script>

<!-- Custom JS -->
<script src="{{asset('js/jquery.slicknav.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('js/custom.js')}}"></script>



  <!-- Notification JS Below  -->

  <script src="{{ asset('/plugins/vendors/toast-master/js/jquery.toast.js') }}"></script>

  <script>

       $(document).ready(function () {

             @if(\Session::has('message')) 
                  $.toast({
                      heading: 'Success!',
                      position: 'bottom-right',
                      text:  '{{session()->get('message')}}',
                      loaderBg: '#ff6849',
                      icon: 'success',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif
              
              
              @if(\Session::has('flash_message')) 
                  $.toast({
                      heading: 'Error!',
                      position: 'bottom-right',
                      text:  '{{session()->get('flash_message')}}',
                      loaderBg: '#ff6849',
                      icon: 'error',
                      hideAfter: 3000,
                      stack: 6
                  });
              @endif

              
          })


$(document).on('click', "#addCart", function(e){
$('#add-cart').submit();
});
$(document).on('keydown keyup', ".qty", function(e) {
if ( $(this).val() <= 1 ) {
e.preventDefault();
$(this).val( 1 );
}
});

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
