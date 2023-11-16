@extends('veskai.template.main')
@section('content')

<section id="home" class="main padding-top">
     <div class="overlay"></div>
	<div class="container padding-top padding-bottom">
		<div class="row">

               <div class="col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0" data-wow-delay="0.2s">
                    <img src="assets/images/changer/changer1.png" class="img-responsive changer-bot-img" alt="Home">
               </div>

               <div class="col-md-6 col-sm-7 col-xs-12">
                    <div class="changer-bot padding-top padding-bottom">
                         <h3>Changer Bot</h3>
                         <p class="mt-1">Entertain dirimu dengan Bot Changer, melalui WhatsApp dan Discord, nikmati keseruan menggunakan Changer.</p>
                         <p></p>
                         <p>Invite Changer kedalam Group dan Server kamu sekarang juga!</p>
                         <a href="https://wa.me/6287810151440" class="custom-button mt-20 mr-3">Invite WhatsApp</a>
                         <a href="https://s.id/16PNE" class="custom-button mt-20">Invite Discord</a>
                    </div>
               </div>

		</div>
	</div>
</section>
<section id="home" class="main bg-biru-veskai ">
     <div class="overlay"></div>
	<div class="container padding-bottom padding-top">
		<div class="row">

               <div class="col-md-6 col-sm-5 col-xs-10 col-xs-offset-1 col-sm-offset-0" data-wow-delay="0.2s">
                    <img src="assets/images/changer/changer2.png" class="img-responsive changer-bot-img" alt="Home">
               </div>

               <div class="col-md-6 col-sm-7 col-xs-12">
                    <div class="changer-bot padding-top padding-bottom">
                         <h3>About Changer</h3>
                         <p class="mt-1">Entertain dirimu dengan Bot Changer, melalui WhatsApp dan Discord, nikmati keseruan menggunakan Changer.</p>
                         <p>Lihat dokumentasi Changer untuk selengkapnya</p>
                         <a href="#" class="custom-button mt-20"><del>Documentation</del> <p class="ml-3">Coming Soon</p></a>
                    </div>
               </div>

		</div>
	</div>
</section>
 <!-- ========Contact Section Starts Here======== -->
 <section class="contact-section padding-bottom padding-top">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <div class="contact-content-area pl-xl-4">
                        <div class="section-header left-style">
                            <h2 class="title">get in touch</h2>
                            <p>kirim email kepada kami jika ada keperluan, kritik, saran, dan atau keluh kesah mengenai <b>Veskai Production</b>.</p>
                        </div>
                        <form class="contact-form" id="contact_form_submit" action="send_mail.php" method="POST">
                            <div class="comment-form-group w-100">
                                <input type="text" placeholder="Name" id="name" name="name" required>
                            </div>
                            <div class="comment-form-group w-100">
                                <input type="text" placeholder="Nomor wa" id="email" name="nowa" required>
                            </div>
                            <div class="comment-form-group w-100">
                                <textarea name="message" placeholder="Bug / report / masukkan" id="report" required></textarea>
                            </div>
                            <div class="comment-form-group w-100">
                            <label class="form-label" for="customFile">Screenshot</label>
                            <input type="file" class="form-control" id="Kirim screenshot / foto random (optional)" />
                            </div>
                            <div class="comment-form-group w-100 mb-0">
                                <button type="submit" class="custom-button">Send Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========Contact Section Ends Here======== -->

@endsection