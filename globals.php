<?php require_once( 'couch/cms.php' ); ?>
    <cms:template title='Global Settings' executable='0'>
        <cms:editable name='site_name' label='Your Site\'s name' type='text'>Van Vliet Therapie</cms:editable>
		<cms:editable name='site_desc' label='Your Site\'s description' type='text'>Waddinxveen</cms:editable>
        <cms:editable name='home_caption' label='Home Caption' type='text'>
            Visie op herstel
        </cms:editable>
        <cms:editable name='home_summary' label='Home Summary' type='text'>
            Voor lichamelijke klachten die niet goed uit zichzelf herstellen! Wij zoeken uit wat de klacht in stand houdt. Dit betekend een behandelplan voor u op maat.
        </cms:editable>
        <cms:editable name='blog_caption' label='Blog Caption' height='50' type='textarea'>Our <span>blog</span>, keeping you up-to-date on our latest news.
        </cms:editable>
        <cms:editable name='contact_info' label='Contact Info' type='richtext'>
            <p><strong>Address</strong><br />
Prins Bernhardlaan 93<br />
2741 DM, Waddinxveen<br />
<br />
Raadhuisplein 43<br />
2914 KM, Nieuwerkerk<br />
<br />
<strong>Contacts</strong><br />
Email: <a href="mailto:info@vanvlietfysio.nl?subject=Contact%20Us!&amp;body=Hello%2C%0A%0AMy%20details%20are%20as%20below%3A%0AName%3A%0AEmail%20Address%3A%0ATelephone%20No.%3A%0AMessage%3A%0A%0AThanks" rel="noopener noreferrer" target="_blank">info@vanvlietfysio.nl</a><br />
Phone:<br />
<a href="tel:+31614475229">+31 (0)6-14475229 (Davey van Vliet)</a><br />
<a href="tel:+31639731280">+31 (0)6-39731280 (Joally Jonker)</a></p>
        </cms:editable>
		<cms:editable name='mission'
       label="Mission"
       type="richtext">
	   Wij zijn een eerste lijn fysiotherapie praktijk. Luisteren en een persoonlijke sfeer worden zijn onze sterke kant. Onze missie is <u>het vinden van uw herstel-belemmerende factoren</u>. Onze lichamelijke intakegesprek/onderzoek focust zich niet alleen op uw pijnlijke plek maar onderzoeken ook alles daar omheen. Onze missie is dat u als client zich waarlijk gehoord voelt en niet met twee oefeningen na 20 minuten weer buiten staat.
	   </cms:editable>
		<cms:editable name='vision'
       label="Vision"
       type="richtext">
	   Met een steeds veranderende zorg waarbij de tijd voor de client steeds korter wordt en de druk steeds hoger is. Wordt het moeilijk om zorg te vinden die aandacht heeft voor u. Door gericht naar uw klacht te vragen en luisteren proberen we uw klacht in-stand-houdenende factoren eruit te halen. Maar ook uw life-style daarin mee te nemen. Dit zodat u na iedere behandeling handvaten heeft om uw lichamelijke klachten aan te pakken.
	   </cms:editable>
    </cms:template>
<?php COUCH::invoke(); ?>