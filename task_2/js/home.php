<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lviv tech marketplace</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php bloginfo( 'template_directory' )?>/css/style.css">
    <script src="<?php bloginfo( 'template_directory' )?>/js/code.js" defer></script>
</head>

<body>
    <header style="background-image: url('<?php bloginfo( 'template_directory' )?>/img/home-banner.png');">
        <div class="header__top">
            <img src="<?php bloginfo( 'template_directory' )?>/img/lviv-tech-logo.svg" alt="logo" class="logo">
            <nav class="nav__menu">
                <a href="#" class="nav__menu__item">About</a>
                <a href="#" class="nav__menu__item">Companies</a>
                <a href="#" class="nav__menu__item">Why Lviv?</a>
                <a href="#" class="nav__menu__item">News</a>
            </nav>
            <div class="header__search">
                <a class="search__container"><img src="<?php bloginfo( 'template_directory' )?>/img/Looking glass.svg" alt="Looking search" class="search"></a>
                <span class="language">ENG</span>
            </div>
            <div class="burger">
                <input type="checkbox" class="toggler" id="hamburger">
                <div class="hamburger">
                    <div></div>
                </div>
            </div>

        </div>

        <div class="nav__menu__mobile" id="nav__menu__mobile">
            <a href="#" class="close" id="close"></a>
            <nav class="nav__menu__mobile__item">
                <a href="#" class="nav__menu__item__link">About</a>
                <a href="#" class="nav__menu__item__link">Companies</a>
                <a href="#" class="nav__menu__item__link">Why Lviv?</a>
                <a href="#" class="nav__menu__item__link">News</a>
            </nav>
        </div>
        <div class="header__content">
            <h1 class="header__content__title">MAKE YOUR BUSINESS THRIVE WITH A TRUSTED PARTNER FROM LVIV</h1>
            <p class="header__content__paragraph">Lviv Tech Marketplace offers an effective one-click tool to connect with tech companies, consultancy agencies, and service providers from Ukraine’s fastest-growing tech hub – Lviv. </p>
            <a href="#" class="header__content__btn">BROWSE COMPANIES</a>
        </div>
    </header>
    <main>
        <div class="main__benefits">
            <div class="main__benefits__wrapper">

                <h2 class="main__benefits__title">BENEFITS OF WORKING WITH UKRAINIAN COMPANIES</h2>

                <div class="main__benefits__arrows">
                    <a href="#carouselExampleIndicators" role="button" data-slide="prev" class="arrow prev">
                    </a>
                    <a href="#carouselExampleIndicators" data-slide="next" class="arrow next">

                    </a>
                </div>
                <div class="row d-flex align-items-center">

                    <!--Start carousel-->
                    <div id="carouselExampleIndicators" class="carousel slide  benefits__desktop" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/01.png')" class="col-12 col-md col-slider d-flex">
                                        <h4 class="slider__title">MATURE AND GLOBALLY RECOGNIZED TECH MARKET</h4>
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/02.png')" class="col-12 col-md col-slider d-flex ">
                                        <h4 class="slider__title">ACTIVE TECH COMMUNITY</h4>
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/03.png')" class="col-12 col-md  col-slider d-flex">
                                        <h4 class="slider__title">COST-EFFICIENT SERVICES</h4>
                                        <p class="slider__paragraph">Average hourly rates for hiring software engineers in Lviv are considerably lower compared to e.g. hiring in the US</p>
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/04.png')" class="col-12 col-md col-slider d-flex">
                                        <h4 class="slider__title">STRONG EDUCATIONAL BACKGROUND</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/02.png')" class="col-12 col-md col-slider d-flex ">
                                        <h4 class="slider__title">ACTIVE TECH COMMUNITY</h4>
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/04.png')" class="col-12 col-md col-slider d-flex">
                                        <h4 class="slider__title">STRONG EDUCATIONAL BACKGROUND</h4>
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/01.png')" class="col-12 col-md col-slider d-flex">
                                        <h4 class="slider__title">MATURE AND GLOBALLY RECOGNIZED TECH MARKET</h4>
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/03.png')" class="col-12 col-md  col-slider d-flex">
                                        <h4 class="slider__title">COST-EFFICIENT SERVICES</h4>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div>
                    <div id="carouselExampleIndicators" class="carousel slide benefits__mobile" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/01.png')" class="col-12 col-md col-slider d-flex">
                                    <h4 class="slider__title">MATURE AND GLOBALLY RECOGNIZED TECH MARKET</h4>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/02.png')" class="col-12 col-md col-slider d-flex ">
                                    <h4 class="slider__title">ACTIVE TECH COMMUNITY</h4>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/04.png')" class="col-12 col-md col-slider d-flex">
                                        <h4 class="slider__title">STRONG EDUCATIONAL BACKGROUND</h4>
                                    </div>



                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/03.png')" class="col-12 col-md  col-slider d-flex">
                                        <h4 class="slider__title">COST-EFFICIENT SERVICES</h4>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--End carousel-->

                </div>
            </div>
        </div>
        <div class="lviv__hub">

            <div class="lviv__hub__content">
                <h2 class="lviv__hub__content__title">
                    LVIV-UKRAINE’S MOST VIBRANT TECH HUB
                </h2>

                <p class="lviv__hub__content__paragraph">
                    Located in close proximity to the EU and on crossroads of international transport routes, Lviv has long become an attractive spot for talents thirsty for opportunities, aspiring entrepreneurs, and foreign investors. As of 2020, over 450 tech companies
                    operate from Lviv, providing outsourcing, outstaffing, or nearshoring services from global clients coming mostly from the USA, Western Europe, and Nordic countries. Information technology industry share in the GRP of Lviv equals 20%,
                    and the number of tech professionals amounts to 25,000, with forecasts to increase to 30,000 by the end of 2021. Lviv is the student center of Western Ukraine: it boasts well-known universities providing education in technical fields
                    with over 4,000 tech graduates annually. In 2019, the total economic effect of the tech sector in Lviv amounted to $1.255 billion.
                </p>
                <a href="#" class="lviv__hub__content__btn">WHY LVIV?</a>
            </div>
            <div class="lviv__hub__img">
                <img src="<?php bloginfo( 'template_directory' )?>/img/lviv_hub.png" alt="" class="lviv__hub__img__item">
            </div>
        </div>
        <div class="platform__features">
            <div class="platform__features__wrapper">
                <h2 class="platform__features__title">PLATFORM FEATURES</h2>
                <div class="platform__features_cards">
                    <div class="platform__features__card">
                        <img src="<?php bloginfo( 'template_directory' )?>/img/icon_browse.svg" alt="">
                        <p class="platform__features__paragraph">BROWSE AVAILABLE PARTNERS OR VENDORS</p>
                        <<?php bloginfo( 'template_directory' )?>/img>
                    </div>
                    <div> <img class="illustrarion" src="<?php bloginfo( 'template_directory' )?>/img/icon_arrow_illustration.svg" alt=""></div>
                    <div class="platform__features__card">
                        <img src="<?php bloginfo( 'template_directory' )?>/img/icon_filter.svg" alt="">
                        <p class="platform__features__paragraph">FILTER BY AREA OF EXPERTISE, COMPANY SIZE, ETC.</p>
                        <<?php bloginfo( 'template_directory' )?>/img>
                    </div>
                    <div> <img class="illustrarion" src="<?php bloginfo( 'template_directory' )?>/img/icon_arrow_illustration.svg" alt=""></div>
                    <div class="platform__features__card">
                        <img src="<?php bloginfo( 'template_directory' )?>/img/icon_connect.svg" alt="">
                        <p class="platform__features__paragraph">CONNECT WITH THE CHOSEN PARTNER IN ONE CLICK </p>
                        <<?php bloginfo( 'template_directory' )?>/img>
                    </div>
                </div>
            </div>
        </div>
        <div class="search__for__service">
            <div class="search__for__service__wrapper">
                <h2 class="search__for__service__title">
                    SEARCH FOR SERVICE PROVIDERS
                </h2>
                <div class="search__for__service__tab__container">
                    <div class="search__for__service__tab">
                        <button class="search__for__service__tab__item " onmouseover="openCity(event, 'London')">
                            <h3>TECHNOLOGIES & PLATFORMS</h3>
                        </button>
                        <button class="search__for__service__tab__item " onmouseover="openCity(event, 'London2')">
                            <h3>SERVICES</h3>
                        </button>
                        <button class="search__for__service__tab__item " onmouseover="openCity(event, 'London3')">
                            <h3>INDUSTRIES</h3>
                        </button>

                    </div>

                    <div id="search__for__service__list" class="search__for__service__list">
                        <div id="London" class="search__for__service__list__item " style="display: flex;">
                            <div class="search__for__service__list__small_item ">
                                <span class="search__for__service__technologies__title">Explore the most popular1:</span><span class="search__for__service__technologies">Microsoft SharePoint  </span><span class="search__for__service__technologies">Ruby on Rails</span>
                                <span class="search__for__service__technologies">WordPress</span>
                                <span class="search__for__service__technologies">PHP </span><span class="search__for__service__technologies">Magento</span></div>
                            <div class="search__for__service__list__small_item ">
                                <span class="search__for__service__technologies">C#1</span><span class="search__for__service__technologies">Salesforce</span><span class="search__for__service__technologies">Ruby on Rails</span><span class="search__for__service__technologies">WordPress</span>
                                <span class="search__for__service__technologies">PHP </span><span class="search__for__service__technologies">Magento </span></div>
                            <div class="search__for__service__list__small_item "><span class="search__for__service__technologies">Python & Django1</span><span class="search__for__service__technologies">Java Script</span><span class="search__for__service__technologies">Python & Django</span><span class="search__for__service__technologies">Java Script</span>
                                <span class="search__for__service__technologies">Python & Django</span><span class="search__for__service__technologies">Java Script</span></div>
                        </div>
                        <div id="London2" class="search__for__service__list__item ">

                            <div class="search__for__service__list__small_item ">
                                <span class="search__for__service__technologies__title">Explore the most popular2:</span><span class="search__for__service__technologies">Microsoft SharePoint  </span><span class="search__for__service__technologies">Ruby on Rails</span>
                                <span class="search__for__service__technologies">WordPress</span>
                                <span class="search__for__service__technologies">PHP </span><span class="search__for__service__technologies">Magento</span></div>
                            <div class="search__for__service__list__small_item ">
                                <span class="search__for__service__technologies">C#2</span><span class="search__for__service__technologies">Salesforce</span><span class="search__for__service__technologies">Ruby on Rails</span><span class="search__for__service__technologies">WordPress</span>
                                <span class="search__for__service__technologies">PHP </span><span class="search__for__service__technologies">Magento </span></div>
                            <div class="search__for__service__list__small_item "><span class="search__for__service__technologies">Python & Django2</span><span class="search__for__service__technologies">Java Script</span><span class="search__for__service__technologies">Python & Django</span><span class="search__for__service__technologies">Java Script</span>
                                <span class="search__for__service__technologies">Python & Django</span><span class="search__for__service__technologies">Java Script</span></div>
                        </div>
                        <div id="London3" class="search__for__service__list__item ">

                            <div class="search__for__service__list__small_item ">
                                <span class="search__for__service__technologies__title">Explore the most popular3:</span><span class="search__for__service__technologies">Microsoft SharePoint  </span><span class="search__for__service__technologies">Ruby on Rails</span>
                                <span class="search__for__service__technologies">WordPress</span>
                                <span class="search__for__service__technologies">PHP </span><span class="search__for__service__technologies">Magento</span></div>
                            <div class="search__for__service__list__small_item ">
                                <span class="search__for__service__technologies">C#3</span><span class="search__for__service__technologies">Salesforce</span><span class="search__for__service__technologies">Ruby on Rails</span><span class="search__for__service__technologies">WordPress</span>
                                <span class="search__for__service__technologies">PHP </span><span class="search__for__service__technologies">Magento </span></div>
                            <div class="search__for__service__list__small_item "><span class="search__for__service__technologies">Python & Django3</span><span class="search__for__service__technologies">Java Script</span><span class="search__for__service__technologies">Python & Django</span><span class="search__for__service__technologies">Java Script</span>
                                <span class="search__for__service__technologies">Python & Django3</span><span class="search__for__service__technologies">Java Script</span></div>
                        </div>
                    </div>
                </div>
                <a href="#" class="search__for__service__btn">BROWSE COMPANIES</a>
            </div>
        </div>
        <div class="latest__news">
            <div class="latest__news__wrapper">
                <h2 class="latest__news__title">LATEST NEWS</h2>


                <div class="row d-flex align-items-center">
                    <a href="#carouselIndicators" role="button" data-slide="prev" class="arrow prev-new">
                    </a>
                    <div id="carouselIndicators" class="carousel slide news__slider" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n1.png')" class="col-12 col-sm col-new">
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n2.png')" class="col-12 col-sm col-new">
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n3.png')" class="col-12 col-sm col-new">
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n1.png')" class="col-12 col-sm col-new">
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n2.png')" class="col-12 col-sm col-new">
                                    </div>
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n3.png')" class="col-12 col-sm col-new">
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="carouselIndicators" class="carousel slide news__slider__mobile" data-ride="carousel">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n1.png')" class="col-12 col-sm col-new">
                                    </div>


                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n2.png')" class="col-12 col-sm col-new">
                                    </div>



                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">

                                    <div style="background-image:url('<?php bloginfo( 'template_directory' )?>/img/n3.png')" class="col-12 col-sm col-new">
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

                    <a href="#carouselIndicators" data-slide="next" class="arrow next-new">

                    </a>

                </div>
                <a href="#" class="latest__news__btn">READ ALL ARTICLES</a>
            </div>

        </div>
    </main>


    <footer>

        <div class="footer__main">
            <div class="footer__main__wrapper">
                <div class="footer__main__first__section">
                    <div class="footer__main__first__section__left">
                        <img src="<?php bloginfo( 'template_directory' )?>/img/lviv-tech-logo.svg" alt="logo" class="logo">
                        <div class="footer__main__first__section__left__row">
                            <div class="footer__main__column  footer__main__container"><span class="footer__titles">Menu</span>
                                <a href="#">About</a>
                                <a href="#">Companies</a>
                                <a href="#">Why Lviv?</a>
                                <a href="#">News</a>
                                <a href="#">FAQ</a>
                                <a href="#">Terms of Use</a>
                            </div>


                            <div class="footer__main__column footer__main__container"><span class="footer__titles">Quick links</span><a href="#">Lviv IT Cluster</a><a href="#">IT Research</a>
                                <a href="#">Join community</a>
                            </div>

                            <div class="footer__main__column footer__main__container"><span class="footer__titles">Social</span>

                                <div class="footer__main__column">
                                    <a href="#" class="footer__social"><img src="<?php bloginfo( 'template_directory' )?>/img/Facebook.svg" alt="facebook">
                                    </a>
                                    <a href="#" class="footer__social"><img src="<?php bloginfo( 'template_directory' )?>/img/Linkedin icon.svg" alt="linkedin"></a>
                                    <a href="#" class="footer__social"><img src="<?php bloginfo( 'template_directory' )?>/img/twitter.svg" alt="twitter"></a>
                                    <a href="#" class="footer__social"><img src="<?php bloginfo( 'template_directory' )?>/img/Instagram.svg" alt="instagram"></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer__main__first__section__right footer__main__container">
                        <h3 class="footer__news__title">Get our latest research news in your inbox
                        </h3>
                        <div class="footer__main__first__input__container"><input type="email" placeholder="Email" class="footer__main__first__section__right__input">
                            <div class="footer__main__first__section__right__oval"><img src="<?php bloginfo( 'template_directory' )?>/img/icon_email.svg" alt="icon_email"></div>
                        </div>
                    </div>

                </div>
                <hr class="footer__line">
                <div class="footer__main__second__section">
                    <div class="footer__main__column  footer__main__container"><span class="footer__titles">IT Solutions and Platforms </span>
                        <a href="#">Software Development</a>

                        <a href="#">Web Development </a>
                        <a href="#">  Mobile App Development</a>
                        <a href="#"> Design & Advertising</a>
                        <a href="#"> Marketing & SEO</a>
                        <a href="#">More<span class="footer__more"></span> </a>




                    </div>
                    <div class="footer__main__column footer__main__container"><span class="footer__titles">Industries</span>

                        <a href="#">eCommerce </a>
                        <a href="#">EdTech</a>
                        <a href="#">FinTech</a>
                        <a href="#">Healthcare</a>
                        <a href="#">Automotive</a>
                        <a href="#">More <span class="footer__more"></span></a>
                    </div>
                    <div class="footer__main__column  footer__main__container"><span class="footer__titles">Services</span>

                        <a href="#">Outsourcing</a>
                        <a href="#">Outstaffing</a>
                        <a href="#">Staff Augmentation</a>
                        <a href="#">Consulting</a>
                        <a href="#">Product Development</a>
                        <a href="#">More <span class="footer__more"></span></a>
                    </div>
                    <div class="footer__main__column  footer__main__container"><span class="footer__titles">Contacts</span>
                        <a href="tel:0800 300 33">0800 300 33</a>
                        <a href="mailto:info@itcluster.lviv.ua">info@itcluster.lviv.ua</a>
                        <a href="#">79019, 4 Vesniana st, Business Incubator, “Startup Depot”,
Lviv, Ukraine</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom__wrapper">
                <div class="footer__bottom__left">
                    <p class="footer__bottom__paragraph">This project became possible due to the support of the American People through the United States Agency for International Development (USAID) under the Competitive Economy Program in Ukraine (via the № IKA_027 for implementation of
                        the grant activity platform «Lviv Tech Marketplace»). The Lviv Tech Marketplace project and its results do not necessarily reflect the views of the United States Agency for International Development or the United States Government.
                    </p>
                    <span class="footer__bottom__cluster">©Lviv IT Cluster | 2020</span>
                </div>

                <div class="footer__bottom__logos"><img src="<?php bloginfo( 'template_directory' )?>/img/it-cluster.png" alt="IT Cluster" class="it__cluster__img"><img src="<?php bloginfo( 'template_directory' )?>/img/usaid.png" alt="USAID"></div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
    </script>
</body>

</html>