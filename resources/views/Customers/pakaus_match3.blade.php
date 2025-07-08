<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets</title>
    <link rel="stylesheet" href="{{asset('css/tickets.css')}}">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="{{asset('images/Logo.png')}}" alt="Logo">
                <h1>cricView</h1>
            </div>
        </nav>
        <div id="ticket-heading">
            <h1>3rd Match Tickets Live Now!</h1>
            <h3>CricView: Your Window to Cricket's Unfiltered Emotions</h3>
        </div>
        <div id="events">
            <h1>Events</h1>
            <div class="two-parts">
                <div class="days">
                <div class="box">
                    <div class="one">
                        <p>JAN</p>
                        <h2>03</h2>
                    </div>
                    <div class="two">
                        <p>Thu-10:20 am</p>
                        <h2>Burswood, WAOptus Stadium</h2>
                        <p>NRMA Insurance West Test - Australia v Pakistan (Day 1)</p>
                    </div>
                    <div class="three">
                    <a href="{{route('optus')}}"><button>Find Tickets <span>></span></button></a>
                    </div>
                </div>
                <div class="box">
                <div class="one">
                        <p>JAN</p>
                        <h2>04</h2>
                    </div>
                    <div class="two">
                        <p>Fri-10:20 am</p>
                        <h2>Burswood, WAOptus Stadium</h2>
                        <p>NRMA Insurance West Test - Australia v Pakistan (Day 2)</p>
                    </div>
                    <div class="three">
                    <a href="{{route('optus')}}"><button>Find Tickets <span>></span></button></a>
                    </div>
                </div>
                <div class="box">
                <div class="one">
                        <p>JAN</p>
                        <h2>05</h2>
                    </div>
                    <div class="two">
                        <p>Sat-10:20 am</p>
                        <h2>Burswood, WAOptus Stadium</h2>
                        <p>NRMA Insurance West Test - Australia v Pakistan (Day 3)</p>
                    </div>
                    <div class="three">
                    <a href="{{route('optus')}}"><button>Find Tickets <span>></span></button></a>
                    </div>
                </div>
                <div class="box">
                <div class="one">
                        <p>JAN</p>
                        <h2>06</h2>
                    </div>
                    <div class="two">
                        <p>Sun-10:20 am</p>
                        <h2>Burswood, WAOptus Stadium</h2>
                        <p>NRMA Insurance West Test - Australia v Pakistan (Day 4)</p>
                    </div>
                    <div class="three">
                    <a href="{{route('optus')}}"><button>Find Tickets <span>></span></button></a>
                    </div>
                </div>
                <div class="box">
                <div class="one">
                        <p>JAN</p>
                        <h2>07</h2>
                    </div>
                    <div class="two">
                        <p>Mon-10:20 am</p>
                        <h2>Burswood, WAOptus Stadium</h2>
                        <p>NRMA Insurance West Test - Australia v Pakistan (Day 5)</p>
                    </div>
                    <div class="three">
                    <a href="{{route('optus')}}"><button>Find Tickets <span>></span></button></a>
                    </div>
                </div>
            </div>
            <div class="pictures">
                <div class="img">
                <a href="https://www.cricbuzz.com/profiles/8359/babar-azam"><img src="{{asset('images/babar.webp')}}" alt="Babar"></a>
                </div>
                <div class="img">
                <a href="https://www.cricbuzz.com/profiles/8095/pat-cummins"><img src="{{asset('images/cummins.webp')}}" alt="Cummins"></a>
                </div>
                <div class="img">
                <a href="https://www.espncricinfo.com/story/pak-vs-aus-2nd-test-2022-stats-babar-azam-record-knock-pakistan-marathon-effort-and-more-1305914"><img src="{{asset('images/bobby.jpg')}}" alt="Bobby"></a>
                </div>
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
