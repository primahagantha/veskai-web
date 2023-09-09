@extends('veskai.template.main')
@section('content')

<!-- =======Profile Section Starts Here======== -->
<section class="profile-section padding-bottom padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Profile Sidebar -->
                <div class="profile-sidebar">
                    <div class="profile-img">
                        <img src="https://your-profile-image-url.com" alt="Your Profile Image">
                    </div>
                    <h3 class="profile-name">Your Name</h3>
                    <p class="profile-email">youremail@example.com</p>
                    <ul class="profile-menu">
                        <li><a href="#">Ganti Password</a></li>
                        <li><a href="#">Ganti Email</a></li>
                        <li><a href="{{ url("/logout") }}">Keluar</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Profile Content -->
                <div class="profile-content">
                    <h2 class="title">Profil Anda</h2>

                    <!-- Form untuk mengganti password dan email -->
                    <form class="profile-form" method="POST" action="{{ route('update-profile') }}">
                        @csrf
                        <div class="profile-form-group">
                            <label for="current-password">Password Saat Ini</label>
                            <input type="password" id="current-password" name="current_password" required>
                        </div>
                        <div class="profile-form-group">
                            <label for="new-password">Password Baru</label>
                            <input type="password" id="new-password" name="new_password" required>
                        </div>
                        <div class="profile-form-group">
                            <label for="confirm-password">Konfirmasi Password Baru</label>
                            <input type="password" id="confirm-password" name="confirm_password" required>
                        </div>
                        <div class="profile-form-group">
                            <label for="new-email">Email Baru</label>
                            <input type="email" id="new-email" name="new_email" required>
                        </div>
                        <div class="profile-form-group">
                            <button class="custom-button" type="submit">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======Profile Section Ends Here======== -->

@endsection
