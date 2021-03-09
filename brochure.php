<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Brochure'>
<cms:editable
  name='brochure_pdf'
  label='Brochure PDF file'
  desc='Upload the file here'
  type='file'>couch/uploads/file/VanVlietFysio_brochure.pdf</cms:editable>

</cms:template>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Brochure</title>
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

<section class="mbr-section mbr-section-small" id="content4-h" data-rv-view="165" style="background-color: #f0efea; padding-top: 6rem; padding-bottom: 0rem;">

    <div class="container">
	<embed src="<cms:show brochure_pdf/>" type="application/pdf" width="100%" height="600px" />
	</div>
  
</section>


<cms:embed "footer.html" />


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>
  <script src="assets/bootstrap-dropdownhover.min.js"></script>
  
</body>
</html>
<?php COUCH::invoke(); ?>