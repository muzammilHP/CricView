<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matches_Detail</title>
    <link rel="stylesheet" href="{{asset('css/matches.css')}}">
</head>
<body>
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
        <a  href="{{route('profile')}}"><button style="cursor:pointer;">My Profile</button></a>
        <a  href="{{route('datatables')}}"><button style="cursor:pointer;">Total Users</button></a>
      </div>
      </div>
    </nav>
        <div id="ticket-heading">
            <h1>TICKETS</h1>
            <h3>Unlock the gateway to cricket excitement – your ticket to unforgettable moments on the pitch!</h3>
        </div>
        <div id="series">
        <h1>UPCOMING SERIES</h1>
            <div class="box-region">
                <div class="box">
                    <div class="box-img">
                   <a href="{{route('pak_aus')}}"> <img src="{{asset('images/pak vs aus.jpg')}}" alt="Pak vs Aus"></a>
                    </div>
                    <h3>Pakistan vs Australia-Men</h3>
                    <h5>14 Dec 2023 - 07 Jan 2024</h5>
                </div>
                <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/big bash.png')}}" alt="Big Bash">
                    </div>
                    <h3>KFC BBL-Men</h3>
                    <h5>07 Dec 2023 - 14 Jan 2024</h5>
                </div>
                <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/pak vs nz.jpg')}}" alt="Pak vs Nz">
                    </div>
                    <h3>Pakistan vs Newzeland-Men</h3>
                    <h5>15 Jan 2024 - 27 Jan 2024</h5>
                </div>
                <div class="box">
                <div class="box-img">
                    <img src="{{asset('images/psl.jpg')}}" alt="PSL">
                    </div>
                    <h3>HBL PSL-Men</h3>
                    <h5>9 Feb 2024 - 14 Mar 2024</h5>
                </div>
            </div>
        </div>
        <div id="last-section">
            <div class="left">
                <p>© 2023 cricView. All rights reserved.</p>
                <p>cricView offers a modern and efficient solution for managing ticket sales and promoting events.</p>
                <div class="anchor-t">
                <a href="#">Privacy Policy</a>
                <a href="#">Contact us</a>
                <a href="#">Feedback</a>
                </div>
            </div>
            <div class="right">
                <div class="logo-l">
                <img src="{{asset('images/Logo.png')}}" alt="Logo">
                <h1>cricView</h1>
                </div>
                <div class="social-media">
                    <a href=""><img src="{{asset('images/insta2.webp')}}" alt="Insta"></a>
                    <a href=""><img src="{{asset('images/fb.png')}}" alt="FB"></a>
                    <a href=""><img src="{{asset('images/twitter.png')}}" alt="Twitter"></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
