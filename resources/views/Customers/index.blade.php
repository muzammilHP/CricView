<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body style="background-image:url('{{asset('images/background-real.jpg')}}'); background-size:cover;">
<div class="container">
    <nav>
      <div class="left">
      <div class="logo">
                <img src="{{asset('images/Logo.png')}}" alt="Logo">
                <h1>cricView</h1>
            </div>
      </div>
      <div class="right">
        <div class="one">
        <ul>
          <li>
            <a href="">Home</a>
          </li>
          <li>
            <a href="">About us</a>
          </li>
          <li>
            <a href="">Contact us</a>
          </li>
        </ul>
      </div>
      <div class="two">
        <a  href="{{route('login')}}"><button style="cursor:pointer;">Login</button></a>
        <a   href="{{route('signup')}}"><button style="cursor:pointer;">Register Now</button></a>
      </div>
      </div>
    </nav>
    <section id="content-section">
      <div class="left">
        <h1>"Get Ready for the Roar of the Stadium"</h1>
        <h1>"Secure Your Spot with CricView!"</h1>
        <p>Welcome to CricView – Your Gateway to Unmatched Cricket Experiences! CricView ensures every cricket enthusiast a front-row experience. Don't just watch, witness. Secure your seat today and elevate your cricket passion with CricView – where the game comes alive!"</p>
        <div class="buttons">
        <button>Read More</button>
        <button>Get Started</button>
      </div>
      </div>
      <div class="right">
        <img src="{{asset('images/homepage.jpg')}}" alt="Cricket Image">
      </div>
    </section>
</div>
</body>
</html>