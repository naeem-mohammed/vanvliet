<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Home Page'>
<cms:repeatable name="testimonials" label='Testimonials' >
    <cms:editable name='quote'
       label="Quote"
       type="text" />
           
    <cms:editable name='name'
       label="Name"
       type="text" />

</cms:repeatable>

<cms:editable name='kennis_summary'
       label="Kennis Summary"
       type="richtext">
	   Wij staan voor een uitgebreide anamnese waarin alles wat de klacht in stand houdt uitgevraagd wordt. Kennis leidt tot heldere en logische conclusies.
	   </cms:editable>
	   
<cms:editable name='vaardigheid_summary'
       label="Vaardigheid Summary"
       type="richtext">
	   Vaardigheid en precisie in het handelen is van belang om effectieve behandelingen te verzorgen.
	   </cms:editable>
	   
<cms:editable name='echte_zorg_summary'
       label="Echte Zorg Summary"
       type="richtext">
	   Echte zorg kan alleen worden gegeven door aandacht voor de persoon.  Luisteren en observeren is de kracht achter deze missie.
	   </cms:editable>
	   
<cms:editable name='verzekering_summary'
       label="Verzekering Summary"
       type="richtext">
	   Controleer van tevoren of u verzekerd bent voor fysiotherapie. U bent hier ten allen tijden zelf verantwoordelijk voor. Voor meer informatie kunt u contact opnemen met uw zorgverzekeraar.
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
  <title><cms:get_custom_field 'site_name' masterpage='globals.php' /> | 
			<cms:get_custom_field 'site_desc' masterpage='globals.php' />
	</title>
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
<section class="mbr-section mbr-section-full mbr-parallax-background mbr-after-navbar" id="header2-g" data-rv-view="162" style="background-image: url(assets/images/new-bg.jpg);">
    <div class="mbr-table-cell">
        <div class="mbr-overlay" style="opacity: 0.5; background-color: #f0efea;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
					<h1 class="mbr-section-title display-1" style="background: rgba(255, 255, 255, 0.6);
   padding: 10px; "><cms:get_custom_field 'home_caption' masterpage='globals.php' /></h1>
					<p class="lead" style="background: rgba(255, 255, 255, 0.6);
   padding: 10px; "><cms:get_custom_field 'home_summary' masterpage='globals.php' /></p>
					
					<div class="mbr-buttons--left"><a class="btn btn-lg btn-secondary-outline fysio-info" href="services.php">Leer meer</a> </div>
                </div>
			
            </div>
        </div>
        <a class="mbr-arrow" href="#content4-h"><span class="mbri-down mbr-iconfont"></span></a>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="content4-h" data-rv-view="165" style="background-color: #f0efea; padding-top: 3rem; padding-bottom: 0rem;">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center" >Kennis</h4>
                        <p class="card-text"><cms:show kennis_summary /></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center" >Vaardigheid</h4>
                        <p class="card-text" ><cms:show vaardigheid_summary /></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center" >Echte zorg</h4>
                        <p class="card-text" ><cms:show echte_zorg_summary /></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card cart-block">
                    <div class="card-block">
                        <h4 class="card-title text-xs-center" >Verzekering</h4>
                        <p class="card-text" ><cms:show verzekering_summary /></p>
                    </div>
                </div>
            </div>
        </div>
		<hr/>
    </div>
</section>
<section class="mbr-section col-undefined" id="content5-12" data-rv-view="168" style="background-color: #f0efea; padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-3 text-xs-center" >Missie</h3>
        <div class="lead"><p><cms:get_custom_field 'mission' masterpage='globals.php' /></p></div>
    <hr/>
	</div>
	
</section>

<section class="mbr-section col-undefined" id="content5-13" data-rv-view="171" style="background-color: #f0efea; padding-top: 0rem; padding-bottom: 0rem;" >
    
    <div class="container">
        <h2 class="mbr-section-title display-3 text-xs-center">Visie</h3>
        <div class="lead"><p><cms:get_custom_field 'vision' masterpage='globals.php' /></p></div>
    <hr/>
	</div>
</section>

<section class="mbr-section mbr-section-small" id="testimonials1-u" data-rv-view="174" style="background-color: #f0efea; padding-top: 0rem; padding-bottom: 1.5rem;">
    <div>
        
        <div class="container" >
            <h2 class="mbr-section-title display-3 text-xs-center">Wat de clienten van de therapie vinden</h2>

            <div class="row mbr-testimonial-cards">
				<cms:show_repeatable 'testimonials'>
				<cms:if k_count="1" >
					<cms:set random_number="<cms:php>echo rand(1, <cms:show k_total_records />);</cms:php>" />
				</cms:if>
						<cms:if k_count="<cms:show random_number />" >
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="card">
									<div class="card-block"><em><cms:show quote /></em></div>
									<div class="card-footer text-muted">
										<div><cms:show name /></div>
										<small></small>
									</div>
								</div>
							</div>
						</cms:if>
				</cms:show_repeatable>
            </div>
        </div>
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