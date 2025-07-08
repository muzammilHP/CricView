<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <link href="{{asset('css/signup.css')}}" rel="stylesheet">
</head>

<body style="background-image: url('{{ asset('images/signup-back.avif') }}'); background-size: cover;">
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{asset('images/Logo.png')}}" alt="Logo">
                <h1>cricView</h1>
            </div>
        </nav>
        <section id="content-section">
            <div class="left">
                <h1>Create Your Account</h1>
                <h2>Ready to elevate your cricket experience? </h2>
                <h3>Sign up with CricView now and reserve your front-row seat to  unforgettable moments on the pitch!</h3>
                <button>Learn More</button>
            </div>
            <div class="right">
            <div class="signup">

    <h1>Sign Up</h1>
    <form action="{{route('store')}}" method="POST" enctype="multipart">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" placeholder="Enter Username" value="{{ old('username') }}"><br>
        @error('username')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email" placeholder="Enter Email" value="{{ old('email') }}"><br>
        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="contact">Contact No:</label><br>
        <input type="text" id="contact" name="contact" placeholder="Enter Contact No" value="{{ old('contact') }}"><br>
        @error('contact')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" placeholder="Enter Password"><br>
        @error('password')
            <div class="error">{{ $message }}</div>
        @enderror

        <label for="confirmPassword">Confirm Password:</label><br>
        <input type="password" id="confirmPassword" name="password_confirmation" placeholder="Confirm Your Password"><br>
        @error('confirmPassword')
            <div class="error">{{ $message }}</div>
        @enderror

        <a href=""><button>Signup</button></a>
    </form>
    <a style="color:white; cursor:pointer;" href="{{ route('login') }}">Already Signed up? Login>></a>
</div>
            </div>
        </section>
    </div>
</body>

</html>