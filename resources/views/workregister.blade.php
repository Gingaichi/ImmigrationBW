<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Immigration Services</title>
    <link rel="stylesheet" href="{{ url('CSS/registerstyle.css') }}">
</head>
<body>

    <div class="container">
        <h2>Create an Account</h2>
        <form action='/workregister' method="POST">
            @csrf
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required placeholder="Enter your full name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required placeholder="Enter your email">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required placeholder="Enter your password">

            <button class="btn">Register</button>
        </form>

        <div class="footer">
            <p>Already have an account? <a href="{{ route('home') }}">Login here</a></p>
        </div>
    </div>

</body>
</html>
