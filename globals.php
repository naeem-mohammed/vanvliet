<?php require_once( 'couch/cms.php' ); ?>
    <cms:template title='Global Settings' executable='0'>
        <cms:editable name='site_name' label='Your Site\'s name' type='text'>Van Vliets Fysio</cms:editable>
		<cms:editable name='site_desc' label='Your Site\'s description' type='text'>Waddinxveen</cms:editable>
        <cms:editable name='home_caption' label='Home Caption' height='50' type='richtext'>
            <h1 class="mbr-section-title display-1">Visie op herstel</h1>
        </cms:editable>
        <cms:editable name='home_summary' label='Home Summary' height='50' type='richtext'>
            <p class="lead">Do you have physical symptoms that do not recover well from themselves? We find out what the complaint holds. This means a customized treatment plan for you.</p>
        </cms:editable>
        <cms:editable name='blog_caption' label='Blog Caption' height='50' type='textarea'>Our <span>blog</span>, keeping you up-to-date on our latest news.
        </cms:editable>
        <cms:editable name='contact_info' label='Contact Info' type='richtext'>
            <p><strong>Address</strong>
                <br> Onderweg 12
                <br> 2742 LA, Waddinxveen
                <br>
                <br>
                <strong>Contacts</strong>
                <br>Email: <a href="mailto:info@vanvlietfysio.nl?subject=Contact%20Us!&body=Hello%2C%0A%0AMy%20details%20are%20as%20below%3A%0AName%3A%0AEmail%20Address%3A%0ATelephone%20No.%3A%0AMessage%3A%0A%0AThanks" target="_blank" rel="noopener noreferrer">info@vanvlietfysio.nl</a>
                <br>Phone:
                <br>+31 (0)6-14475229 (Davey van Vliet)
                <br>+31 (0)6-39731280 (Joally Jonker)
                <br>
            </p>
        </cms:editable>
    </cms:template>
<?php COUCH::invoke(); ?>