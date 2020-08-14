<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Slideshow Page' order='10'>

<cms:repeatable name='content_slides' >

<cms:editable type='image' name='my_image' label='Photo' />
<cms:editable type='text' name='youtube_id' label='Youtube Video ID' />
<cms:editable type='text' name='my_heading' label='heading' />
<cms:editable type='textarea' name='my_caption' label='description' />
<cms:editable type='text' name='my_link' label='button text' />
   
</cms:repeatable>

</cms:template>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Slideshow</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.min.css">
  <link rel="stylesheet" href="assets/bootstrap-dropdownhover.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
    
</head>
<body>
<cms:embed 'header.html' />

<section class="mbr-section mbr-section-nopadding mbr-after-navbar" id="msg-box4-1k" data-rv-view="40" style="padding-top: 3rem; padding-bottom: 0rem;">
<div id="MiddleCarousel" class="carousel slide UACarousel" data-ride="carousel">
<ol class="carousel-indicators">
            <cms:show_repeatable 'content_slides'>
               <li data-target="#MiddleCarousel" data-slide-to="<cms:show k_count/>" <cms:if k_count='1'>class="active"</cms:if>></li>
            </cms:show_repeatable>
         </ol>
  <div class="carousel-inner">
  <cms:show_repeatable 'content_slides'>
  <cms:if k_count=='1'>
  <div class="carousel-item active">
      <cms:else />
    <div class="carousel-item">
    </cms:if>
      <cms:if "<cms:not_empty youtube_id />" >
          <iframe width="100%" src="//www.youtube.com/embed/<cms:show youtube_id />" frameborder="0" id="video" allowfullscreen></iframe>
        </cms:if>
      <cms:else />
      <img class="d-block w-100" src="<cms:show my_image />" alt="" />
      <div class="carousel-caption">
                <h4 class=""><cms:show my_heading /></h4>
                <p class="">
                   <cms:show my_caption />
                </p>

                <a class="button readmore" href="<cms:show my_link/>"><span class="buttontext"><cms:show my_link/></span></a>
            </div>
    </div>
   </cms:show_repeatable>
	</div>
  </div>
  <a class="left carousel-control" href="#MiddleCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>

          <a class="right carousel-control" href="#MiddleCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
</div>
</section>
<cms:embed "footer.html" />

  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>    
  <script src="assets/bootstrap-dropdownhover.min.js"></script>
  
</body>
</html>
<?php COUCH::invoke(); ?>