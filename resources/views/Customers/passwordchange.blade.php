<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
    <link rel="stylesheet" href="{{ asset('css/pchange.css') }}">
</head>
<body>
    <div class="container">
        <nav>
            <div class="left">
                <div class="logo">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo">
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
                    <a href="{{ route('profile') }}"><button style="cursor:pointer;">My Profile</button></a>
                </div>
            </div>
        </nav>
        <div id="changepassword">
            <div class="box">
                <form action="{{ route('changepassword') }}" method="post">
                    @csrf
                    <label for="newPassword">New Password:</label><br>
                    <input type="password" id="newPassword" name="newPassword" required><br><br>
                    @error('newPassword')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <label for="confirmPassword">Confirm Password:</label><br>
                    <input type="password" id="confirmPassword" name="newPassword_confirmation" required><br><br>
                    @error('confirmPassword')
                    <div class="error">{{ $message }}</div>
                    @enderror
                    <button class="btn" type="submit">Update Password</button>
                    <a href="{{route('profile')}}"><button class="btn" type="button">Cancel</button></a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
