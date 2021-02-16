<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <title>My Nails</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" type="image/png">

    <link rel="stylesheet" href="{{asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('css/LineIcons.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/default.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(72507460, "init", {
             clickmap:true,
             trackLinks:true,
             accurateTrackBounce:true,
             webvisor:true
        });
     </script>
     <noscript><div><img src="https://mc.yandex.ru/watch/72507460" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

</head>

<body>
    {{-- <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]--> --}}

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="header-area">
        <div class="navbar-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand">
                                <img style="width: 300px;" src="{{asset('images/logo.png')}}" alt="Logo">
                            </a>
                            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button> --}}

                            {{-- <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#facts">Why</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#blog">Blog</a>
                                    </li>
                                </ul>
                            </div> <!-- navbar collapse --> --}}

                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div id="home" class="header-hero bg_cover" style="background-image: url({{asset('images/banner-bg.svg')}})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" data-wow-delay="1.4s">
                            <img class="about-image" src="{{asset('images/main.png')}}" alt="hero">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h2 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">My Nails</h2>
                            <h3 class="header-title wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">Новый взгляд на мир красоты</h3>
                            {{-- <p class="text wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                            <a href="#" class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.1s">Get Started</a> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-1" class="particles"></div>
        </div>
    </header>

    {{-- <div class="brand-area pt-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="brand-logo d-flex align-items-center justify-content-center justify-content-md-between">
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <img src="{{asset('images/brand-1.png')}}" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{asset('images/brand-2.png')}}" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.3s">
                            <img src="{{asset('images/brand-3.png')}}" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.4s">
                            <img src="{{asset('images/brand-4.png')}}" alt="brand">
                        </div> <!-- single logo -->
                        <div class="single-logo mt-30 wow fadeIn" data-wow-duration="1.5s" data-wow-delay="0.5s">
                            <img src="{{asset('images/brand-5.png')}}" alt="brand">
                        </div> <!-- single logo -->
                    </div> <!-- brand logo -->
                </div>
            </div>   <!-- row -->
        </div> <!-- container -->
    </div> --}}

    <section id="features" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Все мастера в одном приложении</h3>
                        {{-- <h3 class="title">Clean and simple design, <span> Comes with everything you need to get started!</span></h3> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="{{asset('images/icon_map.svg')}}" alt="shape">
                            {{-- <img class="shape-1" src="{{asset('images/icon_map.svg')}}" alt="shape"> --}}
                            {{-- <i class="lni-baloon"></i> --}}
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a >Поиск</a></h4>
                            <p class="text">Поиск ближайших мастеров рядом с вами </p>
                            <a class="more" href="#">Узнать больше <i class="lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="{{asset('images/icon_account.svg')}}" alt="shape">
                            {{-- <img class="shape-1" src="{{asset('images/services-shape-2.svg')}}" alt="shape">
                            <i class="lni-cog"></i> --}}
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a >Маршрут</h4>
                            <p class="text">Возможность проложить маршрут к мастеру </p>
                            <a class="more" href="#">Узнать больше<i class="lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="{{asset('images/icon_favourites.svg')}}" alt="shape">
                            {{-- <img class="shape-1" src="{{asset('images/services-shape-3.svg')}}" alt="shape">
                            <i class="lni-bolt-alt"></i> --}}
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">Избранное</a></h4>
                            <p class="text">Удобный поиск и сохранение понравившихся дизайнов маникюра </p>
                            <a class="more" href="#">Узнать больше <i class="lni-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Лента дизайнов</h3>
                        </div>
                        <p class="text">Удобный поиск и сохранение понравившихся дизайнов маникюра</p>
                        {{-- <a href="#" class="main-btn">Try it Free</a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{asset('images/main_page_2.png')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-1">
            <img src="{{asset('images/about-shape-1.svg')}}" alt="shape">
        </div>
    </section>

    <section class="about-area pt-70">
        <div class="about-shape-2">
            <img src="{{asset('images/about-shape-2.svg')}}" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Интеграция с INSTAGRAM</h3>
                        </div>
                        <p class="text">
                            <strong>Возможность перейти в instagram профиль</strong>
                            <br>
                            С нами можно перейти в профиль мастера и обсудить понравившийся дизайн
                            <br>
                            <strong>Самые актуальные дизайны</strong>
                            <br>
                            Мы всегда следим за актуальностью партфолио мастеров и показываем последние новинки
                        </p>
                        {{-- <a href="#" class="main-btn">Try it Free</a> --}}
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{asset('images/post_rect.png')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">Мы<span> в цифрах</span></h3>
                            </div>
                            <p class="text">Наше предложение не стоит на месте. <strong>My Nails</strong> растёт и развивается.</p>
                        </div>
                        <div class="row no-gutters">
                            <div class="col-4">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">500</span></span>
                                        <p class="text">Дизайнов</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">100</span></span>
                                        <p class="text">Действующих мастеров</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count">+<span class="counter">20</span></span>
                                        <p class="text">Точек ежедневно</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img src="{{asset('images/profile_2.png')}}" alt="about">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-1">
            <img src="{{asset('images/about-shape-1.svg')}}" alt="shape">
        </div>
    </section>

    {{-- <section id="facts" class="video-counter pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="video-content mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <img class="dots" src="{{asset('images/dots.svg')}}" alt="dots">
                        <div class="video-wrapper">
                            <div class="video-image">
                                <img src="{{asset('images/video.png')}}" alt="video">
                            </div>
                            <div class="video-icon">
                                <a href="https://www.youtube.com/watch?v=r44RKWyfcFw" class="video-popup"><i class="lni-play"></i></a>
                            </div>
                        </div> <!-- video wrapper -->
                    </div> <!-- video content -->
                </div>
                <div class="col-lg-6">
                    <div class="counter-wrapper mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="counter-content">
                            <div class="section-title">
                                <div class="line"></div>
                                <h3 class="title">Cool facts <span> this about app</span></h3>
                            </div> <!-- section title -->
                            <p class="text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, seiam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                        </div> <!-- counter content -->
                        <div class="row no-gutters">
                            <div class="col-4">
                                <div class="single-counter counter-color-1 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">125</span>K</span>
                                        <p class="text">Downloads</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-2 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">87</span>K</span>
                                        <p class="text">Active Users</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                            <div class="col-4">
                                <div class="single-counter counter-color-3 d-flex align-items-center justify-content-center">
                                    <div class="counter-items text-center">
                                        <span class="count"><span class="counter">4.8</span></span>
                                        <p class="text">User Rating</p>
                                    </div>
                                </div> <!-- single counter -->
                            </div>
                        </div> <!-- row -->
                    </div> <!-- counter wrapper -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <section id="testimonial" class="testimonial-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Пользовательский опыт <br><span> О нас говорят</span></h3>
                    </div>
                </div>
            </div>
            <div class="row testimonial-active wow fadeInUpBig" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Ранее приходилось долго и упорно путешествовать по просторам интернета, чтобы подобрать понравившегося мастера или работу, теперь это всё есть в одном приложении.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('images/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('images/author-1.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Анна</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Мне кажется, это одно из лучших приложений чтобы подобрать понравившийся дизайн маникюра.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('images/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('images/author-2.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Мария</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Ногти я себе не делаю, но это приложение позволило не пропускать через себя кучу предложений на других ресурсах, а сразу выбрать необходимый, договориться с мастером и отправить туда свою девушку)</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('images/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('images/author-3.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Иван</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-testimonial">
                        <div class="testimonial-review d-flex align-items-center justify-content-between">
                            <div class="quota">
                                <i class="lni-quotation"></i>
                            </div>
                            <div class="star">
                                <ul>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                    <li><i class="lni-star-filled"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p class="text">Очень удобно, что есть возможность посмотреть ближайших мастеров в округе. Не приходится ехать в другой конец Москвы.</p>
                        </div>
                        <div class="testimonial-author d-flex align-items-center">
                            <div class="author-image">
                                <img class="shape" src="{{asset('images/textimonial-shape.svg')}}" alt="shape">
                                <img class="author" src="{{asset('images/author-2.png')}}" alt="author">
                            </div>
                            <div class="author-content media-body">
                                <h6 class="holder-name">Ксения</h6>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="blog" class="blog-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-35">
                        <div class="line"></div>
                        <h3 class="title"><span>Our Recent</span> Blog Posts</h3>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <div class="blog-image">
                            <img src="{{asset('images/blog-1.jpg')}}" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Admin</a></li>
                                <li>03 June, 2023</li>
                            </ul>
                            <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                        <div class="blog-image">
                            <img src="{{asset('images/blog-2.jpg')}}" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Admin</a></li>
                                <li>03 June, 2023</li>
                            </ul>
                            <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="single-blog mt-30 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="blog-image">
                            <img src="{{asset('images/blog-3.jpg')}}" alt="blog">
                        </div>
                        <div class="blog-content">
                            <ul class="meta">
                                <li>Posted By: <a href="#">Admin</a></li>
                                <li>03 June, 2023</li>
                            </ul>
                            <p class="text">Lorem ipsuamet conset sadips cing elitr seddiam nonu eirmod tempor invidunt labore.</p>
                            <a class="more" href="#">Learn More <i class="lni-chevron-right"></i></a>
                        </div>
                    </div> <!-- single blog -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section> --}}

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            {{-- <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Subscribe Our Newsletter <span>get reguler updates</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                 </div> <!-- row -->
            </div> <!-- subscribe area --> --}}
            <div class="footer-widget pb-100">
                <div class="row ">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="{{asset('images/logo.png')}}" alt="logo">
                            </a>
                            {{-- <p class="text">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p> --}}
                            <ul class="social">
                                <li><a href="https://www.instagram.com/mynails.app/"><i class="lni-instagram-filled"></i></a></li>
                                {{-- <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-linkedin-original"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-link d-flex mt-50 justify-content-md-between">
                             <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="title">Quick Link</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Road Map</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Refund Policy</a></li>
                                    <li><a href="#">Terms of Service</a></li>
                                    <li><a href="#">Pricing</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                             <div class="link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="title">Resources</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Приложение</a></li>
                                    <li><a href="#">Page</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div> <!-- footer link -->
                    </div> --}}
                    <div class="col-lg-5 col-md-7 col-sm-7">
                        <div class="footer-contact mt-80 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Контакты</h4>
                            </div>
                            <ul class="contact">
                                <li>Почта: <a style="color: #fff" href="mailto:mynailsapp@gmail.com">mynailsapp@gmail.com</a></li>
                                <li>Instagram: <a style="color: #fff" href="https://www.instagram.com/mynails.app/">mynails.app</a></li>
                                {{-- <li>+809272561823</li>
                                <li>www.yourweb.com</li>
                                <li>123 Stree New York City , United <br> States Of America 750.</li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                {{-- <p class="text">Придумано и разработано <a href="https://t.me/gossteer" rel="nofollow">Игнатьевым Антоном</a> и <a href="https://t.me/intrart" rel="nofollow">Бокаревым Стефаном</a></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-2"></div>
    </footer>

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

{{-- <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
--> --}}

    <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}" defer></script>
    <script src="{{asset('js/vendor/modernizr-3.7.1.min.js')}}" defer></script>

    <script src="{{asset('js/popper.min.js')}}" defer></script>
    <script src="{{asset('js/bootstrap.min.js')}}" defer></script>

    <script src="{{asset('js/plugins.js')}}" defer></script>

    <script src="{{asset('js/slick.min.js')}}" defer></script>

    <script src="{{asset('js/ajax-contact.js')}}" defer></script>

    <script src="{{asset('js/waypoints.min.js')}}" defer></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}" defer></script>

    <script src="{{asset('js/jquery.magnific-popup.min.js')}}" defer></script>

    <script src="{{asset('js/jquery.easing.min.js')}}" defer></script>
    <script src="{{asset('js/scrolling-nav.js')}}" defer></script>

    <script src="{{asset('js/wow.min.js')}}" defer></script>

    <script src="{{asset('js/particles.min.js')}}" defer></script>

    <script src="{{asset('js/main.js')}}" defer></script>

</body>

</html>
