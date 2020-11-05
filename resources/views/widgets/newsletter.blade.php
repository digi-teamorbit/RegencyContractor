<?php
$footerNews = DB::table('pages')->where('id',7)->first();
?>
<div class="col-md-4 col-sm-3 col-xs-12">
        <div class="ftr-links ftr-links-form">
   <?=html_entity_decode($footerNews->content)?>
          <form action="{{route('newsletterSubmit')}}" method="post">
          	@CSRF
            <input type="email" name="email" placeholder="Enter Your Email" required="">
            <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>