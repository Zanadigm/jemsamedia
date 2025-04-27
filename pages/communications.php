<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <?php include_once("templates/head.php") ?>
</head>

<body>

    <!--Header Section-->

    <header id="header">
        <?php include_once("templates/header.php")?>
        <script type="application/ld+json">
            {
              "@context": "https://schema.org/",
              "@type": "Product",
              "name": "Communications & Public Relations Services",
              "description": "Strategic communications and PR services to enhance your brand reputation and media presence.",
              "brand": {
                "@type": "Organization",
                "name": "Jemsa Media Tech"
              },
              "url": "https://jemsamediatech.africa/pages/communications.php",
              "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+254740953042",
                "contactType": "Customer Service",
                "areaServed": "Africa",
                "availableLanguage": "English"
              }
            }
</script>
    </header>

    <!--Hero-->

    <div id="" class="uk-width-1-1" style="position: relative;">
        <div class="container uk-margin-medium-top" style="position: relative; width: 93%; margin: auto;">
            <div class="" style="height: 350px; background-image: url('https://plus.unsplash.com/premium_photo-1683733841845-29e325968e27?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover; background-position: center;">
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-overlay uk-position-center uk-light">
                    <h2 class="uk-heading-small" data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 300">Communications & Public Relations</h2>
                </div>
            </div>
        </div>
    </div>

    <!--About the service-->

    <div class="uk-section">
       <div class="uk-container">
           <div class="uk-flex uk-flex-middle">
               <div class="uk-width-1-1">
                   <div class="uk-container">
                       <div class="uk-grid-large" data-uk-grid>
                           <div class="uk-width-1-2@m uk-flex uk-flex-middle">
                               <div>
                                   <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small uk-margin-medium-top">About the service</h3>
                                   <hr class="uk-margin-auto-top uk-separator-small">
                                   <h2 class="uk-heading-small uk-margin-medium-top">Communications & PR</h2>
                                   <p class="uk-text-large uk-width-4-5@m">
                                        Build a strong brand reputation with our expert communication and public relations services. 
                                        We craft compelling messages, manage media relations, and develop strategic campaigns to enhance your brand’s visibility and credibility. 
                                        Whether through press releases, influencer partnerships, or crisis management, 
                                        we ensure your brand stays in the spotlight for all the right reasons.
                                   </p>
                                   
                                   <div class="uk-margin-medium-top">
                                         <a href="#section-contact" class="uk-button uk-button-large uk-button-default" data-uk-scroll="offset: 80">Get a quote</a>
                                   </div>
                               </div>
                           </div>
                           <div class="uk-width-1-2@m uk-flex uk-flex-middle" data-uk-scrollspy="cls: uk-animation-slide-right-small; repeat: true; delay: 300" style="margin: auto;">
                               <img src="../images/accelerate.svg" alt="Header">
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>

    <!--Communication Services-->

    <div class="uk-section-large uk-section-primary uk-light">
        <div class="uk-container">

            <h2 class="uk-heading-small uk-margin-large" style="margin-bottom: 0;" >Our Communications & PR Services</h2>
 
            <div class="uk-visible-toggle" tabindex="-1" data-uk-slider="autoplay: true; autoplay-interval: 6000;">
                <div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match uk-margin-large-top uk-slider-items"
                    data-uk-grid>
                    <div class="uk-text-left ">
                        <div class="uk-padding-medium uk-border-medium">
                            <img class=" uk-margin-medium uk-icon-large" src="../images/influencer.png" alt="Icon"
                                data-uk-svg style="height: 70px;">
                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Influencer Identification and Outreach
                            </h3>

                            <p>We identify influencers who align with your brand values and audience, handling outreach to secure authentic partnerships that enhance your brand’s visibility.</p>

                        </div>
                    </div>

                    <div class="uk-text-left">
                        <div class="uk-padding-medium uk-border-medium">
                            <img class=" uk-margin-medium uk-icon-large" src="../images/influencer.png" alt="Icon"
                                data-uk-svg style="height: 70px;">
                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Campaign Strategy and Planning</h3>

                            <p>
                                We design tailored influencer marketing strategies, including content planning, collaboration guidelines, and goals, ensuring campaigns align with your overall marketing objectives.
                            </p>
                        </div>
                    </div>

                    <div class="uk-text-left">
                        <div class="uk-padding-medium uk-border-medium">
                            <img class=" uk-margin-medium uk-icon-large" src="../images/influencer.png" alt="Icon"
                                data-uk-svg style="height: 70px;">
                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Content Collaboration and Creation
                            </h3>

                            <p>We facilitate collaboration between your brand and influencers to create engaging, authentic content that resonates with their followers and promotes your products or services.</p>
                        </div>
                    </div>

                    <div class="uk-text-left">
                        <div class="uk-padding-medium uk-border-medium">
                            <img class=" uk-margin-medium uk-icon-large" src="../images/influencer.png" alt="Icon"
                                data-uk-svg style="height: 70px;">
                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Performance Tracking and Reporting
                            </h3>

                            <p>We monitor campaign performance using key metrics, providing detailed reports that highlight successes and offer insights for optimizing future influencer marketing efforts.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <!--Contact-->

    <div id="section-contact" class="uk-section uk-section-large">
        <?php include_once("templates/contact.php")?>
    </div>

    <!--Whatsapp-floating-icon-->

    <a href="https://wa.me/254740953042" target="_blank" class="whatsapp-button uk-animation-slide-bottom-small">
        <span uk-icon="whatsapp"></span> WhatsApp Us
    </a>

    <!--Footer-->

    <footer class="uk-section uk-section-primary uk-border-large-top">
        <?php include_once("templates/footer.php")?>
    </footer>

    <!--Mobile Menu-->

    <div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
        <?php include_once("templates/mobile_menu.php")?>
    </div>

</body>

</html>
</body>