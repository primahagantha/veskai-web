@extends('veskai.template.main')
@section('content')

<!-- =======Profile Section Starts Here======== -->
<section class="profile-section padding-bottom padding-top" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
    <div class="container border-account padding-top padding-bottom">
        <div class="row">
            <div class="col-md-4">
                <!-- Profile Sidebar -->
                <div class="nav-profile">
                    <h3 class="profile-username mb-3">Username</h3>
                    <p class="profile-email mb-5">youremail@example.com</p>
                    <ul class="nav flex-column nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#password-tab">Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#email-tab">Change Email</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("/logout") }}">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <!-- Profile Content -->
                <div class="profile-content">
                    <h2 class="title">Profile Account</h2>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <!-- Tab "Ganti Password" -->
                        <div id="password-tab" class="tab-pane show active">
                            <form class="profile-form" method="POST" action="">
                                @csrf
                                <div class="profile-form-group mt-5">
                                    <label for="current-password">Current Password</label><div></div>
                                    <input type="password" class="fill-account" id="current-password" name="current_password">
                                </div>
                                <div class="profile-form-group mt-4">
                                    <label for="new-password">New Password</label><div></div>
                                    <input type="password" class="fill-account" id="new-password" name="new_password">
                                </div>
                                <div class="profile-form-group mt-3">
                                    <label for="confirm-password">Confirm Password</label><div></div>
                                    <input type="password" class="fill-account" id="confirm-password" name="confirm_password">
                                </div>
                                <div class="profile-form-group">
                                    <button class="custom-button mt-5" type="submit">Change Password</button>
                                </div>
                            </form>
                        </div>

                        <!-- Tab "Ganti Email" -->
                        <div id="email-tab" class="tab-pane">
                            <form class="profile-form" method="POST" action="">
                                @csrf
                                <div class="profile-form-group mt-5">
                                    <label for="new-email">New Email</label><div></div>
                                    <input type="email" class="fill-account" id="new-email" name="new_email">
                                </div>
                                <div class="profile-form-group">
                                    <button class="custom-button mt-5" type="submit">Change Email</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======Profile Section Ends Here======== -->

@endsection
