<?php


$footerabt = DB::table('pages')->where('id', 6)->first();

?>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="ftr-logo ftr-links">
       <?=html_entity_decode($footerabt->content)?>
        </div>
      </div>
      <div class="col-md-2 col-sm-3 col-xs-12">
        <div class="ftr-links">
          <h4>Links</h4>
          <ul>
            <li><a href="">Lorem Ipsum Dolor</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum Dolor</a></li>
            <li><a href="">Lorem Ipsum </a></li>
            <li><a href="">Lorem Ipsum Dolor</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12">
        <div class="ftr-links">
          <h4>Navigation</h4>
          <ul>
            <li><a href="">Lorem Ipsum Dolor</a></li>
            <li><a href="">Lorem Ipsum</a></li>
            <li><a href="">Lorem Ipsum Dolor</a></li>
            <li><a href="">Lorem Ipsum </a></li>
            <li><a href="">Lorem Ipsum Dolor</a></li>
          </ul>
        </div>
      </div>
        @include('widgets.newsletter')
    </div>
  </div>
  <p class="copyrit">{{ App\Http\Traits\HelperTrait::returnFlag(499) }}</p>
</footer>