<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Cost'>
	<cms:editable name='service_summary'
       label="Service Summary"
       type="richtext" height='50'>Bent u aanvullend verzekerd, dan gaat de rekening direct naar de zorg verzekeraar. Van Vliet Fysiotherapie is aangesloten bij iedere zorg verzekeraar in Nederland.</cms:editable>
	   
	   <cms:editable name='service_label_1'
       label="Service Label 1"
       type="text">screening intake onderzoek + behandeling (45 min)</cms:editable>
	   
	   <cms:editable name='service_cost_label_1'
       label="Service Cost Label 1"
       type="text">€69,-</cms:editable>
	   
	   <cms:editable name='service_label_2'
       label="Service Label 2"
       type="text">Behandeling (30 min)</cms:editable>
	   
	   <cms:editable name='service_cost_label_2'
       label="Service Cost Label 2"
       type="text">€40,-</cms:editable>
	   
	   <cms:editable name='service_label_3'
       label="Service Label 3"
       type="text">Aan huis behandeling</cms:editable>
	   
	   <cms:editable name='service_cost_label_3'
       label="Service Cost Label 3"
       type="text">€10,- toeslag</cms:editable>
	   
</cms:template>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Kosten</title>
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

<section class="mbr-section mbr-after-navbar" id="msg-box3-t" data-rv-view="18" style="background-color: #f0efea; padding-top: 3rem; padding-bottom: 3rem;">
    
    <div class="container" >
        <div class="row text-xs-center">
            <div class="col-sm-8 col-sm-offset-2">
                <h2 class="mbr-section-title display-3">Kosten</h2>
                

                <div class="lead"><p><cms:show service_summary /></p></div>
                <div class="row"><a class="btn btn-lg btn-secondary-outline fysio-info" href="physiotherapy.php">Fysiotherapie</a> <a class="btn btn-lg btn-secondary-outline fysio-info" href="dryneedling.php">Dry Needling</a>  <a class="btn btn-lg btn-secondary-outline fysio-info" href="contact.php#form1-18">Consult Now!</a></div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section-small" id="pricing-table1-14" data-rv-view="199" style="background-color: #f0efea; padding-top: 0rem; padding-bottom: 3rem;">
    

    <div class="container" >
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card text-xs-center">
                    <div class="card-header bg-fysio"><cms:show service_label_1 /></div>
                    <div class="card-block lead">
                        <span><cms:show service_cost_label_1 /></span>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Treatment</strong></li></ul></div>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card text-xs-center">
                    <div class="card-header bg-fysio"><cms:show service_label_2 /></div>
                    <div class="card-block lead">
                        <span><cms:show service_cost_label_2 /></span>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Screening</strong></li><li class="list-group-item"><strong>Intake</strong></li><li class="list-group-item"><strong>Onderzoek</strong></li></ul></div>
                    
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card text-xs-center">
                    <div class="card-header bg-fysio"><cms:show service_label_3 /></div>
                    <div class="card-block lead">
                        <span><cms:show service_cost_label_3 /></span>
                    </div>
                    <div><ul class="list-group list-group-flush"><li class="list-group-item"><strong>Toeslag behandeling aan huis </strong></li></ul></div>
                    
                </div>
            </div>
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
  <script src="assets/bootstrap-dropdownhover.min.js"></script>
  
</body>
</html>
<?php COUCH::invoke(); ?>