<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="{{ asset('css/profile.css') }}" rel="stylesheet">
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
        <a  href="{{route('datatables')}}"><button style="cursor:pointer;">Total Users</button></a>
      </div>
      </div>
    </nav>
        <div id="profile">
            <div class="box">
                <form action="{{ route('updateProfile') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Display user image -->
                    @if ($user->images)
                        <img src="{{ asset('storage/' . $user->images) }}" alt="My Image"><br><br>
                    @else
                        <img src="{{ asset('images/default.png') }}" alt="Default Image"><br><br>
                    @endif

                    <!-- Allow user to upload a new image -->
                    <button style="width:300px;"><input type="file" name="images" accept=".jpg,.jpeg,.png"></button><br><br>
                    
                    <!-- Allow user to edit other details -->
                    <label for="username">Username:</label><br>
                    <input type="text" id="name" name="username" value="{{ $user->username }}"><br><br>
                    @error('username')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" value="{{ $user->email }}"><br><br>
                    @error('email')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="contact">Contact:</label><br>
                    <input type="number" id="contact" name="contact" value="{{ $user->contact }}"><br><br>
                    @error('contact')
                        <div class="error">{{ $message }}</div>
                    @enderror

                    <label for="password">Password:</label><br>
                    <input style="width:250px" type="password" id="password" name="password" value="{{ $user->password }}" readonly>
                    <button style="width:50px; " type="button" onclick="togglePasswordVisibility()">View</button><br><br>

                    <button type="submit" class="btn">Update Profile</button>
                    <a href="{{route('pchange_v')}}"><button class="btn" type="button">Change Password</button></a>
                </form>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById("password");
            if (passwordField.type === "password") {
                passwordField.type = "text";
            } else {
                passwordField.type = "password";
            }
        }
    </script>
</body>

</html>
