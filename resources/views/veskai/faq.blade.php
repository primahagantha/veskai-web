@extends('veskai.template.main')
@section('content')


    <!-- ========Hero Section Starts Here======== -->
    <section class="hero-section bg_img" id="slideshow" data-background="https://cdn.discordapp.com/attachments/1029591487995985941/1143463648585588886/1175865.jpg">
        <div class="container">
            <div class="hero-content">
                <h1 class="title">FAQ</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        faq
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- ========Hero Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <!--<section class="faq-section padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Style 01</h2>
             </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title">pellentesque ipsum urna</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title"> pellentesque sociis turpis ?</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-2">
                        <div class="faq-content">
                            <h6 class="title">commodo libero ultricies elit, ?</h6>
                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit
                                pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in, sit euismod porta ante
                                nulla, tellus nulla metus at. Bibendum</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ========Faq Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <section class="faq-section padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Quick Answer For You</h2>
            </div>
            <div class="theme-style">
                <ul class="nav nav-tabs faq-tab-menu justify-content-center">
                    <li>
                        <a data-toggle="tab" href="#veskai" class="active">Veskai</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#refund">Refunds</a>
                    </li>
                    <li>
                        <a data-toggle="tab" href="#losing">Losing</a>
                    </li>
                </ul>
                <div class="tab-content mb--20">
                    <div class="tab-pane show active fade" id="veskai">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title"> Apa itu Veskai?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Veskai adalah Komunitas Indonesia yang terbangun berawal dengan Discord Server dan terus berusaha memperluas jangkauannya dengan membuat berbagai hal</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">untuk apa Membership pada veskai?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Membership Veskai diadakan untuk pendanaan Veskai Production agar tetap berjalan dan terus berkembang, setiap tipe membership memiliki keuntungannya sendiri</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">akun veskai</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>kamu diharuskan mendaftar pada Veskai jika ingin memainkan Game Server Veskai, akun Veskai dapat digunakan di semua branch Game Server Veskai, mulai dari Minecraft, SA-MP, dan lainnya</p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Kenapa Veskai?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>karena Veskai mudah untuk segala jenis kalangan, kita juga mengutamakan pengembangan komunitas agar lebih dekat dengan satu sama lain</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO install THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">what is the benifit of the game?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Why we are the best?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="refund">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO install THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">what is the benifit of the game?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Why we are the best?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO install THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">what is the benifit of the game?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Why we are the best?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="losing">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO install THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">what is the benifit of the game?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Why we are the best?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="faq-wrapper">
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO install THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">what is the benifit of the game?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                    <div class="faq-item">
                                        <div class="faq-title">
                                            <h6 class="title">Why we are the best?</h6>
                                            <span class="right-icon"></span>
                                        </div>
                                        <div class="faq-content">
                                            <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida,
                                                et
                                                sit,
                                                blandit pretium. Cras ad, morbi iaculis amet accumsan nullam nulla in,
                                                sit
                                                euismod porta ante nulla, tellus </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".nav-tabs a").click(function(){
                    $(this).tab('show');
                });
            });
        </script>
    </section>
    <!-- ========Faq Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <!--<section class="faq-section padding-top">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Style 03</h2>
            </div>
            <div class="row justify-content-center mb-30-none">
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">PELLENTESQUE IPSUM URNA</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">HOW TO DOWNLOAD THE GAME?</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">COMMODO LIBERO ULTRICIES ELIT, ?</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="faq-item-3">
                        <h6 class="title">PELLENTESQUE IPSUM URNA</h6>
                        <p>Mauris sed duis aliquam laudantium. Suscipit nunc, eros error mi gravida, et sit, blandit pretium. Cras ad, morbi iaculis amecumsan nullam nulla in, sit euismod porta ante nulla, tellus nulla metus at. Bibendum phasellus tempus viverra</p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->
    <!-- ========Faq Section Ends Here======== -->


    <!-- ========Faq Section Starts Here======== -->
    <!--<div class="faq-section padding-top padding-bottom pos-rel">
        <div class="container">
            <div class="section-header">
                <h2 class="title">Style 04</h2>
            </div>
            <div class="row align-items-end">
                <div class="col-xl-7">
                    <div class="faq-style-four">
                        <div class="faq-item-4">
                            <div class="faq-number">
                                <div class="thumb"></div>
                            </div>
                            <div class="faq-content">
                                <h5 class="faq-title">Nibh vehicula ante adipiscing ?</h5>
                                <p>Mollis nam ante libero netElit massa ut egestas nisl lacus. Libero litora montes
                                    vulpuporta vel orci maioreltricies maecenas, placerat vehicula non. Ipsum
                                    suspendisse metus</p>
                            </div>
                        </div>
                        <div class="faq-item-4">
                            <div class="faq-number">
                                <div class="thumb"></div>
                            </div>
                            <div class="faq-content">
                                <h5 class="faq-title">Placerat nunc blandit felis ?</h5>
                                <p>Mollis nam ante libero netElit massa ut egestas nisl lacus. Libero litora montes
                                    vulpuporta vel orci maioreltricies maecenas, placerat vehicula non. Ipsum
                                    suspendisse metus</p>
                            </div>
                        </div>
                        <div class="faq-item-4">
                            <div class="faq-number">
                                <div class="thumb"></div>
                            </div>
                            <div class="faq-content">
                                <h5 class="faq-title">Agnissim nisl erat mauris aliqu ?</h5>
                                <p>Mollis nam ante libero netElit massa ut egestas nisl lacus. Libero litora montes
                                    vulpuporta vel orci maioreltricies maecenas, placerat vehicula non. Ipsum
                                    suspendisse metus</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="faq-four-thumb">
                        <img src="assets/images/faqs/faq.png" alt="faqs">
                    </div>
                </div>
            </div>
        </div>
    </div>-->
    <!-- ========Faq Section Ends Here======== -->

@endsection
