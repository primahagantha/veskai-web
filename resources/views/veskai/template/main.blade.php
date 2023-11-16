
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Server Indonesia yang membahas berbagai macam topic, mulai dari anime, game, film, art, otomotive, hardware, dan lain sebagainya, intinya kita nongkrong bareng. Di server ini juga memiliki bot dan channel yang tertata rapi dengan fitur yang jarang ada di server lain. Ajak teman mu untuk meramaikan server! kita sangat welcome ke user discord lama maupun baru, dan siap untuk memberi guide/tutorial juga buat kalian yang masih kurang faham.">
    <meta name="keywords" content="veskai, discord, discord indo, komunitas, chatting, gaming">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Veskai - {{$tittle}}</title>

    <link rel="stylesheet" href="{{url("/")}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/nice-select.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://media.discordapp.net/attachments/810658900134723606/1174430252341137518/veskai-icon.png" type="image/x-icon">

</head>


<body>
    @include('veskai.template.navbar')
    @yield('content')
    @include('veskai.template.footer')
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.3.1.min.js"></script>
<script src="{{url("/")}}/assets/js/modernizr-3.6.0.min.js"></script>
<script src="{{url("/")}}/assets/js/plugins.js"></script>
<script src="{{url("/")}}/assets/js/bootstrap.min.js"></script>
<script src="{{url("/")}}/assets/js/isotope.pkgd.min.js"></script>
<script src="{{url("/")}}/assets/js/magnific-popup.min.js"></script>
<script src="{{url("/")}}/assets/js/swiper.min.js"></script>
<script src="{{url("/")}}/assets/js/wow.min.js"></script>
<script src="{{url("/")}}/assets/js/odometer.min.js"></script>
<script src="{{url("/")}}/assets/js/viewport.jquery.js"></script>
<script src="{{url("/")}}/assets/js/nice-select.js"></script>
<script src="{{url("/")}}/assets/js/main.js"></script>
<script>
    $(document).ready(function () {
        var galleryThumbs = new Swiper('.slider-thumbs', {
            slidesPerView: 3,
            loop: false,
            watchSlidesVisibility: true,
            watchSlidesProgress: true,
            spaceBetween: 15,
        });
        var galleryTop = new Swiper('.review-slider', {
            slidesPerView: 1,
            loop: false,
            thumbs: {
                swiper: galleryThumbs,
            },
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;
    })
</script>
</body>

</html>

