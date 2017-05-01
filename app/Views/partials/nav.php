<?php
/*
* If page template get image in the header
* - include a div#header-image
* - load the url of the picture
* - add a margin to nav because of the absolute position of the div#header-image
*/

if($header_image == true)
{
?>
  <div id="header-image">
    <img class="img-responsive" src="/akaoptics/public/<?= $header_image_name ?>" alt="<?= $header_image_name ?>"/>
  </div>
  <nav class="navbar navbar-default" style="margin-bottom: 200px;" role="navigation">
<?php } else {
?>

  <nav class="navbar navbar-default" role="navigation">
<?php
}
?>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--logo ici-->
        <a class="navbar-brand" href="/akaoptics/public/"><img src="/akaoptics/public/uploads/default_logo.png" class="logo" alt="Aka Optics"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right" role="navigation">
          <li class="menu" <?= $this->uri('/products', 'class="selected"')?> aria-label="products page"><a href="/akaoptics/public/products">Products</a></li>
  		    <li class="menu" <?= $this->uri('/company', 'class="selected"')?> aria-label="company page"><a href="/akaoptics/public/company">Company</a></li>
  		    <li class="menu" <?= $this->uri('/achievements', 'class="selected"')?> aria-label="achievements page"><a href="/akaoptics/public/achievements">Achievements</a></li>
  		    <li class="menu" <?= $this->uri('/contact', 'class="selected"')?> aria-label="contact page"><a href="/akaoptics/public/contact">Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
