<?php require_once( 'couch/cms.php' ); ?>
    <cms:template title='Blog' clonable='1' commentable='0'>
        <cms:editable name='blog_content' type='richtext' />

        <cms:editable name='blog_image' crop='1' width='610' height='150' type='image' />

        <cms:folder name="informative" title="Informative" />
        <cms:folder name="clients" title="Clients" />

    </cms:template>

    <cms:if k_is_page>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">

        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="shortcut icon" href="assets/images/van-vliet-fysio-94x128.png" type="image/x-icon">
            <meta name="description" content="">
            <title>
                <cms:get_custom_field 'site_name' masterpage='globals.php' /> | Blog >>
                <cms:show k_page_title />
            </title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700&subset=latin,cyrillic">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans:400,700&subset=latin,vietnamese,latin-ext">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/puritym/css/style.css">
  <link rel="stylesheet" href="assets/dropdown-menu/style.light.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
            <!-- Stylesheets -->
			<link rel="stylesheet" href="<cms:show k_site_link />css/reset.css" />
            <link rel="stylesheet" href="<cms:show k_site_link />css/styles.css" />
        </head>

        <body>
            <cms:embed 'header.html' />

            <section class="mbr-section mbr-section-small mbr-after-navbar" id="msg-box1-1a" data-rv-view="223" style="background-color: #eae9e1; padding-top: 3rem; padding-bottom: 0rem;">

                <div class="container">
                    <div class="row">
                        <div>
                            <div class="col-sm-8">            
                                <!-- Blog Post -->
                                <div class="post">
                                    <!-- Post Title -->
                                    <h3 class="title"><a class="blog" href="<cms:show k_page_link />"><cms:show k_page_title /></a></h3>
                                    <!-- Post Title -->
                                    <cms:if k_page_foldertitle>
                                        <cms:set my_category=k_page_foldertitle />
                                        <cms:else />
                                        <cms:set my_category='Uncategorised' />
                                    </cms:if>
                                    <p class="sub">
                                        <a class="blog" href="#">
                                            <cms:show my_category />
                                        </a> &bull;
                                        <cms:date k_page_date format='jS M, Y' /> </p>
                                    <div class="hr dotted clearfix">&nbsp;</div>
                                    <!-- Post Title -->
									<cms:if blog_image ne ''>
									<img class="thumb" src="<cms:show blog_image />" alt="" />
									</cms:if>
                                    <!-- Post Content -->
                                    <cms:show blog_content />
                                    <!-- Post Links -->
                                    <p class="clearfix">
                                        <a href="<cms:link masterpage='blog.php' />" class="button float">&lt;&lt; Back to Blog</a>
                                    </p>
                                </div>
                                <div class="hr clearfix">&nbsp;</div>
                            </div>
                            <div class="col-sm-4">
                                <cms:embed 'blog_sidebar.php' />
                            </div>
                        </div>
                    </div>

                </div>
                <!--end wrapper-->
            </section>
            <!-- Footer -->
            <cms:embed "footer.html" />

            <script src="assets/web/assets/jquery/jquery.min.js"></script>
            <script src="assets/tether/tether.min.js"></script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/smooth-scroll/smooth-scroll.js"></script>
            <script src="assets/jarallax/jarallax.js"></script>
            <script src="assets/puritym/js/script.js"></script>
			  <script src="assets/dropdown-menu/script.js"></script>  
        </body>

        </html>
        <cms:else />
        <cms:embed 'blog_list.php' />
    </cms:if>

    <?php COUCH::invoke(); ?>