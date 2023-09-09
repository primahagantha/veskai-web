@extends('veskai.template.main')
@section('content')

<!-- =======Profile Section Starts Here======== -->
<section class="profile-section padding-bottom padding-top" style="background-image: url('https://i.pinimg.com/originals/d0/e0/e2/d0e0e259bf0aba4da742bedff1d4b8a5.gif');">
    <div class="container border-account padding-top padding-bottom">
    <main>
        <section class="forgot-password-section">
            <div class="container"><center>
                <h3>Forgot Password</h3>
                <p class="mt-3">Enter your email address below to reset your password.</p>

                <!-- Forgot Password Form -->
                <form method="POST" action="forgot_password_process.php">
                    <label for="email">Email:</label><div></div>
                    <div class="profile-form-group">
                        <input class="fill-account" type="email" id="email" name="email" required>
                    </div>
                    <div class="profile-form-group">
                        <button class="custom-button mt-4" type="submit">Forgot Password</button>
                    </div>
                </form>

                <!-- Display success or error message here -->
            </div>
        </section>
    </main>
    </div>
</section>
<!-- =======Profile Section Ends Here======== -->

@endsection
