<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Kaaktherapie'>

	<cms:editable name='kaak_text'
       label="Kaaktherapie Text"
       type="richtext">
					Kaaktherapie text here
	</cms:editable>
	
	<cms:editable name='kaak_summary'
		label="Kaaktherapie Summary"
		type='text'>
		Some text here!
		</cms:editable>
	
<cms:editable
    name='kaak_image'
    label='Kaak Image'
    desc='Upload image here'
    type='image'
/>	
</cms:template>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.1.2, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Kaaktherapie</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
</head>
<body style="color: #dec3c3">
<cms:embed 'header.html' />

        <section class="mbr-section mbr-section-nopadding mbr-after-navbar" id="msg-box4-1k" data-rv-view="40" style="padding-top: 3rem; padding-bottom: 0rem;">

            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-lg-8 mbr-inner-padding text-xs-center mbr-table-cell-lg">
                        <h3 class="mbr-section-title display-4"><u>Kaaktherapie</u></h3>
                        <div class="lead">
                            <p><cms:show kaak_summary /></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4 mbr-table-cell-lg image-size" style="width: 50%;">
                        <div class="mbr-figure"><img src="<cms:show kaak_image />" alt="Image will be displayed here"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mbr-section mbr-after-navbar" id="content5-1i" data-rv-view="37" style="padding-top: 0rem; padding-bottom: 3rem;">
            <div class="container">
                <div class="lead">
                    <cms:show kaak_text />
                </div>
            </div>
        </section>

<cms:embed "footer.html" />


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/puritym/js/script.js"></script>
  <script src="assets/dropdown-menu/script.js"></script>  
  
</body>
</html>
<?php COUCH::invoke(); ?>