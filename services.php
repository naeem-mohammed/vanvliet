<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Services'>
		<cms:editable name='fysio'
       label="Fysiotherapie Summary"
       type="richtext">
	   Fysio text here
	   </cms:editable> 
	   
	   <cms:editable name='echo'
       label="Echografie Summary"
       type="richtext">
	   Echo text here
	   </cms:editable> 
	   
	   <cms:editable name='osteo'
       label="Osteopathie Summary"
       type="richtext">
	   Osteo text here
	   </cms:editable> 
	   
	   <cms:editable name='oefen'
       label="Oefentherapie Summary"
       type="richtext">
	   Oefen text here
	   </cms:editable> 
	   
	   <cms:editable name='kaaktherapie'
       label="Kaaktherapie Summary"
       type="richtext">
	   Kaak text here
	   </cms:editable> 
	   
	   <cms:editable name='dry_needling'
       label="Dry Needling Summary"
       type="richtext">
	   Dry Needling text here
	   </cms:editable> 
</cms:template>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Diensten</title>
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

<section class="mbr-section mbr-after-navbar" id="msg-box3-t" data-rv-view="18" style="padding-top: 3rem; padding-bottom: 3rem;">
    
    <div class="container" >
        <div class="row text-xs-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="mbr-section-title display-3">Diensten</h2>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-4 text-xs-center" style="color: #6e8b9b">Fysiotherapie</h3>
        <div class="lead"><cms:show fysio /></div>
    <hr/>
	</div>
</section>

<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-4 text-xs-center" style="color: #ccc8c1">Echografie</h3>
        <div class="lead"><cms:show echo /></div>
    <hr/>
	</div>
</section>

<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-4 text-xs-center" style="color: #a2bfa9">Osteopathie</h3>
        <div class="lead"><cms:show osteo /></div>
    <hr/>
	</div>
</section>

<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-4 text-xs-center" style="color: #f0efea">Oefentherapie</h3>
        <div class="lead"><cms:show oefen /></div>
    <hr/>
	</div>
</section>


<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-4 text-xs-center" style="color: #dec3c3">Kaaktherapie</h3>
        <div class="lead"><cms:show kaaktherapie /></div>
    <hr/>
	</div>
</section>

<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-4 text-xs-center">Dry Needling</h3>
        <div class="lead"><cms:show dry_needling /></div>
    <hr/>
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