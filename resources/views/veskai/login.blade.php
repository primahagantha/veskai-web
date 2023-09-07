@extends('veskai.template.main')
@section('content')

<!-- =======Account Section Starts Here======== -->
    <section class="account-section padding-bottom padding-top" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
        <div class="container">
            <div class="account-login">
            <div class="account-wrapper padding-top ">
                <div class="account-area">
                    <h2 class="title">Login Veskai</h2>

                    @if($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                    <form class="account-form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="account-form-group">
                            <input type="text" placeholder="Username" name="username" required>
                        </div>
                        <div class="account-form-group">
                            <input type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="account-form-group">
                            <button class="custom-button" type="submit">sign in</button>
                        </div>
                        <div class="account-check-group mb-0">
                            Don't have an account <a href="{{url("/register")}}">Register</a>
                        </div>
                    </form>
                </div>
            </div>
                <!-- <div class="newslatter-area">
                    <img src="https://w0.peakpx.com/wallpaper/327/588/HD-wallpaper-aesthetic-sunset-aesthetic-alleyway-city-sunset-town-thumbnail.jpg" alt="gambar sementara">
                </div> -->
            </div>
        </div>
    </section>
<!-- =======Account Section Ends Here======== -->

@endsection
