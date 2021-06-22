<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food Studio</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/png" href="img/logo-fs.png" sizes="32x32"/>

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '281583542716961');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=281583542716961&ev=PageView&noscript=1"/></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-VQHDJLTY9Y"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-VQHDJLTY9Y');
    </script>
    <link rel="stylesheet" type="text/css" href="css/aos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/274adbce03.js"></script> -->
</head>
<body>

@include('frontend.includes.nav')


@yield('content')


<footer>

    <div class="container-fuild">
        <div class="row footer-container m-0">
            <div class="logo-img-div">
                <img src="img/logo-fs.png">
            </div>
            <div class="socail-media-panel">
                <a href="https://www.facebook.com/FoodStudioSL" target="_blank"><span> <i class="fa fa-facebook-f"></i> </span></a>
                <a href="https://www.youtube.com/channel/UCEnRw1p2P0Qjx_DjxYkY9kw" target="_blank"> <span> <i class="fa fa-youtube"></i> </span></a>
                <a href="https://www.instagram.com/foodstudiosl/" target="_blank">  <span> <i class="fa fa-instagram"></i> </span></a>
            </div>
            <div class="footer-navigation">
                <ul class="nav navbar-nav navbar-center">
                    <li class="active">
                        <a href="https://www.foodstudio.lk/">
                            Home              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/about-us">
                            About Us              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/tenant-and-cuisines">
                            Tenants &amp; Cuisines              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/whats-on">
                            What's On              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/event-spaces">
                            Event Spaces              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/media">
                            Media              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/fs-store">
                            FS Store              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/careers">
                            Careers              </a>
                    </li>
                    <li>
                        <a href="https://www.foodstudio.lk/contact-us">
                            Contact Us              </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="rights">
        <div class="container-fuild">
            <div class="row m-0">
                <div class="col-sm-6 text-left">
                    <p>&copy;  All Rights Reserved.</p>
                </div>
                <div class="col-sm-6 text-right">
                    <p>Web Design &amp; Development by <a href="https://www.enspirer.com" target="_blank"><b>Enspirer</b></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a id="button"></a>