<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <?php include_once("templates/head.php")?>
</head>

<body>

    <!--Header Section-->

    <header id="header">
        <?php include_once("templates/header.php")?>
        <script type="application/ld+json">
            {
              "@context": "https://schema.org/",
              "@type": "Product",
              "name": "Web, App & Software Development",
              "description": "Custom website, mobile app, and software development services to power your digital transformation.",
              "brand": {
                "@type": "Organization",
                "name": "Jemsa Media Tech"
              },
              "url": "https://jemsamediatech.africa/pages/software_dev.php",
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
            <div class="" style="height: 350px; background-image: url('https://images.pexels.com/photos/326503/pexels-photo-326503.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); background-size: cover; background-position: center;">
                <div class="uk-overlay-primary uk-position-cover"></div>
                <div class="uk-overlay uk-position-center uk-light">
                    <h2 class="uk-heading-small" data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 300">Web, App & Software Development</h2>
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
                                    <h4 class="uk-heading-small uk-margin-medium-top">Software Development</h4>
                                    <p class="uk-text-large uk-width-4-5@m">
                                        We design and develop custom web applications and software solutions that enhance user experience and drive business growth. 
                                        Our team specializes in creating responsive, high-performance applications tailored to your unique needs, 
                                        whether for e-commerce, business automation, or customer engagement. 
                                        With cutting-edge technology and intuitive design, we ensure your digital platforms are secure, 
                                        scalable, and optimized for success.
                                    </p>
                                    
                                    <div class="uk-margin-medium-top">
                                        <a href="#section-contact" class="uk-button uk-button-large uk-button-default" data-uk-scroll="offset: 80">Get a quote</a>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-2@m uk-flex uk-flex-middle" data-uk-scrollspy="cls: uk-animation-slide-right-small; repeat: true; delay: 300" style="margin: auto;">
                                <img class="uk-box-shadow-large" src="../images/hero-dark.svg" alt="Header">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Design Features Services-->

    <div class="uk-section-large uk-section-primary uk-light">
        <div class="uk-container">
            <h2 class="uk-heading-small uk-margin-large">Software Design Features</h2>
            
            <div class="uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-grid-match uk-margin-large-top" data-uk-grid>
                <div class="uk-text-left ">
                  <div class="uk-padding-medium uk-border-medium">
                    <img class=" uk-margin-medium uk-icon-large" src="../images/coding.png" alt="Icon" data-uk-svg
                      style="height: 70px;">
                    <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">User-Friendly Design</h3>
        
                    <p>We specialize in crafting user-friendly experiences, ensuring easy navigation for quick information retrieval. 
                        Plus, our designs are mobile responsive ensuring functionality wherever your users are.
                    </p>
                
                  </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding-medium uk-border-medium">
                      <img class=" uk-margin-medium uk-icon-large" src="../images/coding.png" alt="Icon" data-uk-svg
                        style="height: 70px;">
                      <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Compelling Content</h3>
          
                      <p>We specialize in crafting Clear, concise, and engaging content that communicates the brand's value proposition effectively.
                        We leverage high-quality images and graphics that enhance visual appeal.</p>
                  
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding-medium uk-border-medium">
                      <img class=" uk-margin-medium uk-icon-large" src="../images/coding.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                      <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Security</h3>
          
                      <p>
                        We mplementat SSL certificates to secure data transmission and build trust with your users. 
                        Regular updates keep your software, plugins, and security features up-to-date to protect against vulnerabilities
                      </p>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding-medium uk-border-medium">
                      <img class=" uk-margin-medium uk-icon-large" src="../images/coding.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                      <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Fast Loading Speed</h3>
          
                      <p> At Jemsamedia tech digital we optimize performance with efficient, clean code and standard software engineering principles to ensure fast loading times, reduce bounce rates, and improve user satisfaction.</p>
                  
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