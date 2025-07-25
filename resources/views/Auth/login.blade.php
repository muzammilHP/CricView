<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>

<body style="background-image: url('{{ asset('images/login-back.avif') }}'); background-size: cover;">
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{asset('images/Logo.png')}}" alt="Logo">
                <h1>cricView</h1>
            </div>
        </nav>
        <section id="content-section">
            <div class="left">
                <h1>Login</h1>
                <p>Sign in to Continue</p>
                @if(session('error'))
               <div class="error">
               {{ session('error') }}
               </div>
            @endif
                <p>Log in to your CricView account to book your favorite cricket seats and immerse yourself in the thrill of live cricket action."
                </p>
                <button>Learn More</button>
            </div>
            <div class="right">

                <div class="signin">
                    <h1>Sign In</h1>
                    <form action="{{route('authenticate')}}" method="post">
                        @csrf
                        <label for="">Email</label><br>
                        <input type="text" name="email" placeholder="Enter Email"><br><br>
                        <label for="">Password</label><br>
                        <input type="text" name="password" placeholder="Enter Password">
                        <button value="login">Login</button>
                    </form>
                    
                </div>
            </div>
        </section>
    </div>
</body>

</html>