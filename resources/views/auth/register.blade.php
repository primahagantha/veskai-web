{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Server Indonesia yang membahas berbagai macam topic, mulai dari anime, game, film, art, otomotive, hardware, dan lain sebagainya, intinya kita nongkrong bareng. Di server ini juga memiliki bot dan channel yang tertata rapi dengan fitur yang jarang ada di server lain. Ajak teman mu untuk meramaikan server! kita sangat welcome ke user discord lama maupun baru, dan siap untuk memberi guide/tutorial juga buat kalian yang masih kurang faham.">
    <meta name="keywords" content="veskai, discord, discord indo, komunitas, chatting, gaming">
    <title>Veskai</title>

    <link rel="stylesheet" href="{{url("/")}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/all.min.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/animate.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/nice-select.css             ">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/swiper.min.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/odometer.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{url("/")}}/assets/css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="https://veskai.com/img/favicon.png" type="image/x-icon">

</head>

<!-- =======Account Section Starts Here======== -->
<section class="account-section padding-bottom padding-top bg-overlay" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
    <div class="container">
        <div class="account-wrapper">
            <div class="account-area">
                <h2 class="title">Register Veskai</h2>
                <x-validation-errors class="mb-4" />
                
                <form class="account-form" method="POST" action="{{ route('register') }}">
                    @csrf
                    <!-- CSRF token would be here in Laravel but has been omitted since it's not applicable in plain HTML -->

                    <div class="account-form-group">
                        <input type="text" id="name" placeholder="Name" name="name" required autocomplete="name">
                    </div>

                    <div class="account-form-group">
                        <input type="email" id="email" placeholder="Email" name="email" required autocomplete="username">
                    </div>

                    <div class="account-form-group">
                        <input type="password" id="password" placeholder="Password" name="password" required autocomplete="new-password">
                    </div>

                    <div class="account-form-group">
                        <input type="password" id="password_confirmation" placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="account-check-group">
                        <input type="checkbox" name="terms" id="agree" required>
                        <label for="agree">I agree to the <a href="terms.html">Terms & Service</a></label>
                    </div>

                    <div class="account-form-group">
                        <button class="custom-button" type="submit">Create Account</button>
                    </div>

                    <div class="account-check-group mb-0">
                        Already have an account? <a href="/login">Log in</a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- =======Account Section Ends Here======== -->


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

