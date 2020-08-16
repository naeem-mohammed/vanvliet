<?php require_once( 'couch/cms.php' ); ?>
<cms:template title='Physiotherapy'>

	<cms:editable name='fysio_text'
       label="Physiotherapy Text"
       type="richtext">
					<p>Een fysiotherapeut kan een belangrijke bijdrage leveren aan het verhelpen van lichamelijke klachten. <u>Het in beeld brengen wat de klacht in stand houdt</u> heeft prioriteit bij Van Vliet Fysio. Hierin onderscheiden wij ons van andere praktijken en bent u bij ons op het juiste adres als niemand u kan vertellen wat er aan de hand is. <u>Wij zetten dan net een stap extra!</u>
					</p>
                    <p>We beginnen met een intakegesprek. We zijn niet alleen geïnteresseerd in uw klacht zelf, maar ook over het ontstaan en beloop ervan. Deze oorzaken kunnen uiteenlopen van trauma, overbelasting tot klachten die eigenlijk zonder aanwijsbare oorzaak zijn gestart. Iedere ontstaan heeft bij ons een andere aanpak. Klachten waarvan u niet weet wat de oorzaak is gaan we op onderzoek uit welke factoren uw specifieke klacht kan beïnvloeden. <u>Voorbeelden zijn problematiek met houding, over/onderbelasting, spier/pees/ligament, gewrichten, mechanische balans tussen spieren en gewrichten, hormonaal, orgaan problematiek, omgeving, stress in brede zin, medicatie, voeding/vocht en ga zo maar door</u>. 
					</p>
                    <p>In het eerste consult brengen we deze factoren in kaart. Bij Van Vliet Fysio stapt u <u>niet de deur uit voordat er een concreet beeld met een logische aanpak opgesteld is</u>.  Wij helpen u op weg met een aanpak op de hierboven genoemde herstel belemmerende factoren om uw algemene belastbaarheid omhoog te brengen. Zo kan u uit de vicieuze cirkel van de klacht stappen. Dit is onze kracht en halen we onze goede resultaten. Let op, we zijn geen wonderdokters en beweren niet dat we met alles kunnen helpen. <u>Wij helpen u door uw zelf herstellend vermogen te vergroten zodat uw lichaam zelf kan herstellen</u>. Indien dit door wat voor reden niet kan, houdt het voor ons ook op.
					</p>
                    <p>Uiteraard kunnen we u niet altijd helpen met iedere factor die de klacht in stand houd. Daarom is het ook <u>van belang om samen te werken met andere specialisten zodat u de beste hulp krijgt</u>. Dit hoort ook bij een goede aanpak van herstel belemmerende factoren.
					</p>
                    <p>Dan komt het vakmanschap in beeld. Met verschillende technieken activeren we extra het herstelvermogen of maken er juist ruimte voor herstel. Er wordt gebruik gemaakt van technieken zoals massages, mobilisaties, bindweefsel technieken, manipulaties, leefstijl adviezen, specifieke gespreksvoering, oefeningen en eventueel u helpen aan een persoon die u verder kan helpen als wij dit niet kunnen. Als extra specialisatie is er dry needling, meer uitleg hierover kunt u hier vinden of op www.dryneedling.nl.
					</p>
                    <p><b>Van Vliet Fysio kijkt niet naar de klok maar naar u. U stapt de deur niet uit met 2 oefeningen na 20 min zonder dat u nu precies weet wat er aan de hand is.  We zijn er in eerste instantie om u en de puzzel die u brengt. Passie voor ons vaak staat bij ons op de voorgrond, en dat gaat u merken.
					</b></p>
                    <p>Wij nemen graag de tijd zodat er niets over het hoofd wordt gezien. De duur van de eerste behandeling is om en nabij 50 minuten. Zo wordt er een screening, anamnese, onderzoek en een behandeling gedaan in deze tijd. <u>Let op, de eerste behandeling kost 2 behandelingen via de verzekering omdat de verzekeraar dit als 2 verschillende behandelingen ziet</u>.
					</p>
	</cms:editable>
	
	<cms:editable name='fysio_summary'
		label="Physiotherapy Summary"
		type='text'>
		Some text here!
		</cms:editable>
					
					<cms:editable
    name='fysio_image'
    label='Fysio Image'
    desc='Upload image here'
    type='image'
/>
</cms:template>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Fysiotherapie</title>
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
<body style="color: #6e8b9b">
<cms:embed 'header.html' />

        <section class="mbr-section mbr-section-nopadding mbr-after-navbar" id="msg-box4-1k" data-rv-view="40" style="padding-top: 3rem; padding-bottom: 0rem;">

            <div class="container">
                <div class="row">

                    <div class="col-xs-12 col-lg-8 mbr-inner-padding text-xs-center mbr-table-cell-lg">
                        <h3 class="mbr-section-title display-4"><u>Fysiotherapie</u></h3>
                        <div class="lead">
                            <p><cms:show fysio_summary /></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-4 mbr-table-cell-lg image-size" style="width: 50%;">
                        <div class="mbr-figure"><img src="<cms:show fysio_image />" alt="Image will be displayed here"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="mbr-section mbr-after-navbar" id="content5-1i" data-rv-view="37" style="padding-top: 0rem; padding-bottom: 3rem;">
            <div class="container">
                <div class="lead">
                    <cms:show fysio_text />
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