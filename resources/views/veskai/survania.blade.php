@extends('veskai.template.main')
@section('content')


   <!-- ========Hero Section Starts Here======== -->
    <section class="hero-section bg_img" id="slideshow" data-background="https://cdn.discordapp.com/attachments/1029591487995985941/1143463648585588886/1175865.jpg">
        <div class="container">
            <div class="hero-content">
                <h1 class="title">Survania Minecraft</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="{{url("/home")}}">Home</a>
                    </li>
                    <li>
                        Survania
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ========Hero Section Ends Here======== -->


    <!-- ========Game Details Section Starts Here======== -->
    <div class="blog-section padding-top padding-bottom">
        <div class="container">
            <div class="row mb-40-65-none">
                <div class="col-12">
                    <div class="blog-item">
                        <div class="blog-content">
                            <div class="content">
                                <div class="copy-container">
                                    <h5 class="mb-3">Server Address</h5>
                                    <div class="copy-text" id="text-to-copy">
                                        mc.veskai.com
                                    </div>
                                    <h5 class="mb-3 mt-4">Server Port</h5>
                                    <div class="copy-text" id="text-to-copy">
                                        25570
                                    </div>
                                    <h5 class="mb-3 mt-4">Support Version</h5>
                                        <p>Minecraft Bedrock / JAVA / PE - Latest Version</p>
                                    <h5>More About Survania</h5>
                                </div>
                                <a href="https://discord.gg/4qbmhC3deZ" class="custom-button mb-5">Discord</a>
                                <a href="https://trakteer.id/survania" class="custom-button ml-3">VIP</a>
                                <a href="https://minecraft-mp.com/server/324704/vote/" class="custom-button ml-3">Vote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========Game Details Section Ends Here======== -->

    <!-- ========Lends Section Starts Here======== -->
<section class="about-section padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-xl-5">
                <div class="membership_text">
                    <h2 style="padding-bottom: 30px;">Survania Minecraft</h2>
                    <p>Survania adalah server Minecraft Multiplayer dengan tema Survival yang berbeda dari minecraft pada biasanya. Jelajahi biome yang berbeda dari minecraft pada umumnya bersama teman - teman kamu dan dirikan Clan mu untuk mendominasi Survania! buat base bersama teman - teman kamu atau base pribadi kamu sendiri di dunia Survania ini. </p>
                    <p></p>
                    <p>Memakan atau dimakan! bertahan dari PVP dan PVE, temukan dan jelajahi Dungeon yang belum pernah ada sebelumnya di Minecraft pada umumnya dan dapatkan reward yang menarik!</p>
                    <p></p>
                    <p>Grinding Resource sebanyak mungkin tanpa khawatir kehabisan resource dan perkuat karakter mu! jangan lupa buat karakter kamu makin keren dengan VIP Exclusive dari kami dan lawan Ender Dragon dengan gaya</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="trakteer">
                    <div class="section-header">
                        <div class="embed-responsive embed-responsive-1by1">
                            <iframe class="embed-responsive-item" src="https://stream.trakteer.id/top-supporter-retro.html?ts_count=10&ts_theme=retro&ts_2_clr2=rgba%28255%2C+200%2C+73%2C+1%29&ts_interval=90&key=trstream-4NVoweqVXe8UtUHfsWfl"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ========Lends Section Ends Here======== -->

    <!-- ========Winner Section Starts Here======== -->
    <section class="blog-section padding-bottom padding-top" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Guide</h2>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="post-item-2">
                        <div class="post-thumb">
                            <img src="assets/images/blog/blog04.jpg" alt="blog">
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <div class="meta-post"></div>
                                <h6 class="title">Coming Soon</h6>
                            </div>
                            <div class="post-body">
                                <p>Coming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="post-item-2">
                        <div class="post-thumb">
                            <img src="assets/images/blog/blog05.jpg" alt="blog">
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <div class="meta-post"></div>
                                <h6 class="title">Coming Soon</h6>
                            </div>
                            <div class="post-body">
                                <p>Coming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="post-item-2">
                        <div class="post-thumb">
                            <img src="assets/images/blog/blog06.jpg" alt="blog">
                        </div>
                        <div class="post-content">
                            <div class="post-header">
                                <div class="meta-post"></div>
                                <h6 class="title">Coming Soon</h6>
                            </div>
                            <div class="post-body">
                                <p>Coming Soon</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Winner Section Ends Here======== -->

@endsection
