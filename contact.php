<?php require_once( 'couch/cms.php' ); ?>
    <cms:template title='Contact' >
	
	<cms:editable name='d1_1'
       label="Monday_Morning"
       type="text" />
    <cms:editable name='d1_2'
       label="Monday_Afternoon"
       type="text" />
	
	<cms:editable name='d2_1'
       label="Tuesday_Morning"
       type="text" />
    <cms:editable name='d2_2'
       label="Tuesday_Afternoon"
       type="text" />
	
	<cms:editable name='d3_1'
       label="Wednesday_Morning"
       type="text" />
    <cms:editable name='d3_2'
       label="Wednesday_Afternoon"
       type="text" />
	
	<cms:editable name='d4_1'
       label="Thursday_Morning"
       type="text" />
    <cms:editable name='d4_2'
       label="Thursday_Afternoon"
       type="text" />
	
	<cms:editable name='d5_1'
       label="Friday_Morning"
       type="text" />
    <cms:editable name='d5_2'
       label="Friday_Afternoon"
       type="text" />
	   
	</cms:template>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
        <meta name="description" content="">
        <title>Contact</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
          <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
        <style>
            th {
                text-align: right;
            }
        </style>
    </head>

    <body>
        <cms:embed 'header.html' />

        <section class="mbr-section mbr-section-small mbr-after-navbar" id="msg-box1-1a" data-rv-view="223" style="background-color: #eae9e1; padding-top: 3rem; padding-bottom: 0rem;">

            <div class="container">
                <div class="row">

                    <div>

                        <div class="col-sm-8">
                            <div data-form-type="formoid">
                                <h2 class="mbr-section-title display-5 text-xs-left">Contact Us!</h2>
                                <div data-form-alert="true">
                                    <div hidden="" data-form-alert-success="true">Thanks for filling out form. We will get back to you shortly!</div>
                                </div>
                                <form action="https://mobirise.com/" method="post" data-form-title="Feel free to contact us!">
                                    <input type="hidden" value="D4RACja2y0WyHvQolpDxo/FnBeFcfwlJIBCZ5sNN6kUIBRVQgVz/8jR9ui7JHHlJwjNdd6AxT8C9tSDDvaZurUYmVJaddGPXeQZ5JIG9ULfaRsXlb9cl73H81SJVN2wd" data-form-email="true">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" required="" placeholder="Uw naam (verplicht)" data-form-field="Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" required="" placeholder="Uw e-mail (verplicht)" data-form-field="Email">
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" name="phone" placeholder="Uw telefoon" data-form-field="Phone">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" rows="3" placeholder="Uw bericht" data-form-field="Message"></textarea>
                                    </div>
                                    <div class="text-xs-left">
                                        <button type="submit" class="btn btn-secondary-outline fysio-info">Vestuur</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <h2 class="mbr-section-title display-5 text-xs-center">Openingstijden</h2>

                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Maandag</th>
                                        <td><cms:show d1_1 /></td>
                                        <td><cms:show d1_2 /></td>
                                    </tr>
                                    <tr>
                                        <th>Dinsdag</th>
                                        <td><cms:show d2_1 /></td>
                                        <td><cms:show d2_2 /></td>
                                    </tr>
                                    <tr>
                                        <th>Woensdag</th>
                                        <td><cms:show d3_1 /></td>
                                        <td><cms:show d3_2 /></td>
                                    </tr>
                                    <tr>
                                        <th>Donderdag</th>
                                        <td><cms:show d4_1 /></td>
                                        <td><cms:show d4_2 /></td>
                                    </tr>
                                    <tr>
                                        <th>Vrijdag</th>
                                        <td><cms:show d5_1 /></td>
                                        <td><cms:show d5_2 /></td>
                                    </tr>
                                </tbody>
                            </table>
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
        <script src="assets/formoid/formoid.min.js"></script>
		<script src="assets/dropdown-menu/script.js"></script>  

    </body>

    </html>
    <?php COUCH::invoke(); ?>