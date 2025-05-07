<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <?php include_once("templates/head.php") ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Jemsa Media Tech",
          "url": "https://jemsamediatech.africa",
          "logo": "https://jemsamediatech.africa/images/logo.png",
          "sameAs": [
            "https://www.facebook.com/share/1E65yEBLHT/"
            "https://www.instagram.com/jemsamediatech?igsh=NWxibTZpc3NvMzhl"
          ],
          "contactPoint": [
            {
              "@type": "ContactPoint",
              "telephone": "+254740953042",
              "contactType": "Customer Service",
              "areaServed": "Africa",
              "availableLanguage": "English"
            }
          ]
        }
   </script>

</head>

<!-- Modal Trigger Script -->

<script>
    let popupTriggered = false;

    window.addEventListener('scroll', function () {
        const scrollTriggerPoint = 400;

        if (!popupTriggered && window.scrollY > scrollTriggerPoint) {
            
            if (!sessionStorage.getItem('videoPopupShown')) {
                popupTriggered = true;

                setTimeout(() => {
                    UIkit.modal('#video-popup').show();

                    document.documentElement.style.overflow = 'auto';
                    document.body.style.overflow = 'auto';

                    sessionStorage.setItem('videoPopupShown', 'true');
                }, 2000);
            }
        }
    });

</script>

<!-- UIKit Modal -->

<div id="video-popup" class="uk-flex-top" uk-modal>
    <?php include_once("templates/popup.php") ?>
</div>

<body> 
    <!--Header Section-->

    <header id="">
        <?php include_once("templates/header.php") ?>
    </header>

    <!-- Section hero -->

    <div id="scetion_hero" class="uk-section-large uk-padding-remove-top uk-flex uk-flex-middle uk-flex-center">
        <div class="uk-container">
            <video autoplay muted loop playsinline style="max-width:100%; height: auto; border-radius: 6px"
                src="images/hero.mp4">
            </video>
        </div>
    </div>

    <!-- Section about -->

    <div id="section-about" class="uk-section uk-section-primary uk-section-medium">
        <div class="uk-container">
            <div class="uk-child-width-1-2@m uk-grid-match" data-uk-grid>
                <div data-uk-scrollspy="cls: uk-animation-slide-left-small; repeat: true; delay: 100">
                    <div class="uk-padding-large uk-padding-remove-left uk-padding-remove-vertical uk-flex uk-flex-column">
                        <h2 class="uk-heading-small uk-margin-medium-top">About Us</h2>
                        <hr class="uk-margin-auto-top uk-separator-small">
                        <div class="uk-margin-auto-bottom">
                            <p>
                                JemsaMediaTech - Leading marketing agency in Kenya is a bold, innovative digital agency redefining how brands connect and grow. 
                                We deliver cutting-edge solutions in Social Media Management, Digital Production, Web & Software Development, SEO, Media Buying, Design & Branding, and PR Communication.
                            </p>
                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Our Mission</h3>
                            <p>
                                To empower brands to thrive in the digital landscape by delivering innovative, data-driven marketing
                                solutions that transcend boundaries, spark conversations, and cultivate lasting brand loyalty.
                            </p>

                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Our Vision</h3>
                            <p>To create the strongest bond between brands and consumers in Africa</p>

                        </div>

                        <div class="uk-margin-medium-top">
                            <a href="#section-contact" class="uk-button uk-button-large uk-button-primary"
                                data-uk-scroll="offset: 80">Get in
                                Touch
                            </a>
                        </div>
                    </div>
                </div>
                <div class="uk-visible@m" data-uk-scrollspy="cls: uk-animation-slide-right-small; repeat: true; delay: 300" style="margin:auto">
                    <div class="uk-height-1-1 uk-background-center-center uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-retreat" style="background-image: url();">
                        <img class="" src="images/aboutus.png" alt="About Us">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section Services -->

    <div id="section-services" class="uk-section uk-section-large">
        <div class="uk-container">

            <div class="uk-margin-large">
                <h2 class="uk-text-center uk-heading-small"
                    data-uk-scrollspy="cls: uk-animation-slide-top-small; repeat: true; delay: 100">Our Services
                </h2>
            </div>

            <div class="uk-child-width-1-3@l uk-child-width-1-2@m uk-child-width-1-1@s uk-grid-match uk-margin-large-top" data-uk-grid>

                <div class="uk-text-left ">
                    <div class="uk-padding">

                        <img class="uk-margin-medium uk-icon-large" src="images/digital-marketing.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Digital Marketing</h3>

                        <p>We provide cutting-edge digital marketing solutions designed to amplify your brand’s online presence and drive real results. Our services include...</p>

                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/digital_marketing.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>

                    </div>
                </div>

                <div class="uk-text-left ">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/media-production.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Media Production</h3>

                        <p>Our media production services bring your brand to life with high-quality visuals that captivate and engage your audience...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/media_production.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/design-branding.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Design, Printing & Branding
                        </h3>

                        <p>We offer top-tier design, printing, and branding services tailored to elevate your business presence. Our creative team specializes in...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/printing_branding.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/web-app-dev.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Web, App & Software
                            Development</h3>

                        <p>We design and develop custom web applications and software solutions that enhance user experience and drive business growth...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/software_dev.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/seo.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Search Engine Optimization
                            (SEO)</h3>

                        <p>Boost your online visibility and attract more organic traffic with our expert SEO services. We optimize your website with strategic keywords...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/seo.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/digital-strategy.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Digital Strategies</h3>

                        <p>We focus on creating customized plans that help businesses leverage digital channels and technologies to achieve their objectives. Our agency works closely with...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/digital_strategies.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/paid-ads.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Paid Advertising</h3>

                        <p>Maximize your reach and drive instant results with our targeted paid advertising campaigns. We create and manage ads across platforms like...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/paid_ads.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/public-relation.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Communications & PR</h3>

                        <p>Build a strong brand reputation with our expert communication and public relations services. We craft compelling messages, manage media relations...</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/communications.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

                <div class="uk-text-left">
                    <div class="uk-padding">
                        <img class=" uk-margin-medium uk-icon-large" src="images/media-buying.png" alt="Icon" data-uk-svg
                            style="height: 70px;">
                        <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">Media Buying</h3>

                        <p>We plan, negotiate, and purchase ad placements across digital, print, TV, radio, and outdoor platforms to ensure your brand reaches..</p>
                        <h5 class="uk-margin-remove uk-h5 uk-letter-spacing-small">
                            <a class="hvr-forward" href="pages/media_buying.php">Learn More
                                <span class="uk-margin-left" data-uk-icon="arrow-right"></span>
                            </a>
                        </h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Section Projects -->

    <div id="section-projects" class="uk-section uk-section-large">
        <div class="uk-container">
            <div class="uk-visible-toggle uk-box-shadow-xlarge" tabindex="-1"
                data-uk-slider="autoplay: true; autoplay-interval: 4000;">
                <div class="uk-position-relative">
                    <div class="uk-slider-container uk-box-shadow-medium uk-background-secondary-light">
                        <ul class="uk-slider-items uk-child-width-1-1">

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/densmile/463259578_1283475192683336_2446229085720325516_n (1).jpg" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">Densmile Dental Clinics</h2>
                                            <div>
                                                Densmile Dental Clinics, partnered with us to revamp their marketing strategy. The #SmileCraft
                                                campaign on boosted brand recognition with a 20% rise in Instagram followers and 30% on Facebook
                                                within 3 months. Engaging content fostered higher social media interaction, while positive
                                                reviews reflected improved brand perception, enhancing patient trust.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/densmile.php">Project Details<span class="uk-margin-left"
                                                        data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/white_crescent/462381141_1062243051779519_8384778534719405517_n.webp" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">The White Crescent Hospital</h2>
                                            <div>
                                                White Crescent Hospital partnered with JemsaMediaTech Digital to enhance its digital
                                                presence and patient engagement. By redefining brand messaging and leveraging targeted ads,
                                                the hospital achieved a 20% increase in online bookings, improved social media interaction,
                                                higher patient satisfaction, and expanded visibility in Ongata Rongai and Nairobi.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/whitecrescent.php">Project Details<span
                                                        class="uk-margin-left" data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/moonlight/Moonlight 2025 (2).png" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">Prestige Moonlight Traders Limited
                                            </h2>
                                            <div>
                                                Moonlight Traders Ltd partnered with JemsaMediaTech Digital to revamp its digital
                                                presence through a tailored social media strategy.
                                                Within three months, the company achieved a 70% growth in followers,
                                                60% higher engagement, a 50% rise in inquiries, and a 40% increase in sales,
                                                solidifying its brand in the automotive industry.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/prestige.php">Project Details<span class="uk-margin-left"
                                                        data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/obc/WhatsApp Image 2024-12-04 at 10.00.55_314af6c0.jpg" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">OBC Mall Kitengela</h2>
                                            <div>
                                                The OBC Mall Kitengela partnered with JemsaMediaTech Digital to enhance its digital presence
                                                with a tailored social media strategy. The mall saw a 65% increase in followers,
                                                70% higher engagement, and a 45% rise in foot traffic.
                                                Tenant businesses benefited from increased visibility, leading to more customer inquiries and
                                                sales.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/obc.php">Project Details<span class="uk-margin-left"
                                                        data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/blitz/468348994_937959108223512_2625536165663091943_n.webp" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">Blitz Vision Limited</h2>
                                            <div>
                                                Blitz Vision, a new player in the digital out-of-home (DOOH) advertising sector partnered
                                                with JemsaMediaTech in building a strong online foundation. We designed a user-friendly,
                                                SEO-optimized website and implemented a comprehensive social media strategy.
                                                This included consistent branding, engaging content, and targeted advertising campaigns,
                                                effectively enhancing brand visibility, attracting clients, and positioning Blitz Vision
                                                competitively in the market.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/blitz.php">Project Details<span class="uk-margin-left"
                                                        data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/billboard/20250219_180640.jpg" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">Billboard Project</h2>
                                            <div>
                                                Our billboard campaign for The White Crescent Hospital was designed to boost local 
                                                visibility and build trust within the community. We created and placed eye-catching billboards in high-traffic areas, 
                                                that highlighted the hospital’s key services and strengths. 
                                                These billboards raised awareness and increasing patient inquiries, 
                                                and reinforcing the hospital’s reputation.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/billboard.php">Project Details<span class="uk-margin-left"
                                                        data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-2@s uk-visible@l uk-visble@m">
                                        <img src="images/megaplay/get_ready.jpg" alt="Slide"
                                            style="height: 640px; aspect-ratio: 1/1; object-fit: cover;">
                                    </div>
                                    <div class="uk-width-expand@s uk-flex uk-flex-middle uk-light">
                                        <div class="uk-padding-large">
                                            <h3 class="uk-text-uppercase uk-h5 uk-letter-spacing-small">Featured Project</h3>
                                            <h2 class="uk-heading-small uk-margin-medium-top">Mega Play Arcade</h2>
                                            <div>
                                            Mega Play Arcade, a premier kids’ gaming area, partnered with JemsaMediaTech to
                                            successfully launch their brand into the market. The campaign was designed to create
                                            massive awareness, drive foot traffic to the arcade, and position Mega Play as the
                                            ultimate destination for family fun. Our comprehensive strategy spanned across digital
                                            platforms, physical marketing, influencer engagement, and TikTok viral content to ensure maximum impact.
                                            </div>
                                            <hr class="uk-margin-medium-top uk-separator-small">
                                            <h3 class="uk-margin-remove uk-text-uppercase uk-h5 uk-letter-spacing-small">
                                                <a class="hvr-forward" href="pages/megaplay.php">Project Details<span class="uk-margin-left"
                                                        data-uk-icon="arrow-right"></span></a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>

                    <div class="uk-hidden@l">
                        <a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous
                            data-uk-slider-item="previous">
                        </a>
                        <a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next
                            data-uk-slider-item="next">
                        </a>
                    </div>

                    <div class="uk-visible@l">
                        <a class="uk-position-center-left-out uk-slidenav-large" href="#" data-uk-slidenav-previous
                            data-uk-slider-item="previous">
                        </a>
                        <a class="uk-position-center-right-out uk-slidenav-large" href="#" data-uk-slidenav-next
                            data-uk-slider-item="next">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Section Clients -->

    <div id="section-clients" class="uk-section uk-section-large">
        <div class="uk-container">

            <h2 class="uk-heading-small uk-margin-medium">Our Clients</h2>

            <div uk-slider="autoplay: true; autoplay-interval: 4000; pause-on-hover: true; sets: 2">
                <div class="uk-position-relative">

                    <div class="uk-slider-container uk-light">
                        <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-4@s uk-child-width-1-5@m">

                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/obc-kitengela.png" alt="Logo" data-uk-svg>
                                </div>
                            </li>
                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/densmile.png" alt="Logo" data-uk-svg>
                                </div>
                            </li>
                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/aa-lodges.jpg" alt="Logo" data-uk-svg>
                                </div>
                            </li>
                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/tanqueray.png" alt="Logo" data-uk-svg>
                                </div>
                            </li>

                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/eujim-logo.png" alt="Logo" data-uk-svg>
                                </div>
                            </li>

                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/kcb.png" alt="Logo" data-uk-svg>
                                </div>
                            </li>

                            <li>
                                <div class="uk-padding uk-flex uk-flex-center uk-flex-middle" style="height: 100%">
                                    <img src="images/megaplay/logo.jpg" alt="Logo" data-uk-svg>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="uk-hidden@s uk-light">
                        <a class="uk-position-center-left uk-position-small" href uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                    <div class="uk-visible@s">
                        <a class="uk-position-center-left-out uk-position-small" href uk-slidenav-previous
                            uk-slider-item="previous"></a>
                        <a class="uk-position-center-right-out uk-position-small" href uk-slidenav-next uk-slider-item="next"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Section Contact -->

    <div id="section-contact" class="uk-section uk-section-large">
        <?php include_once("templates/contact.php") ?>
    </div>

    <a href="https://wa.me/254740953042" target="_blank" class="whatsapp-button uk-animation-slide-bottom-small">
        <span uk-icon="whatsapp"></span> WhatsApp Us
    </a>

    <!-- Footer -->

    <footer class="uk-section uk-section-primary uk-border-large-top">
        <?php include_once("templates/footer.php") ?>
    </footer>

    <!--Mobile menu-->

    <div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
        <?php include_once("templates/mobile_menu.php") ?>
    </div>

</body>

</html>
