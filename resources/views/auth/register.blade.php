<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for social icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }
        .form-bg {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .form-container {
            background-color: #fff;
            text-align: center;
            padding: 30px 25px;
            border-radius: 10px;
            box-shadow: 0 0 25px -15px rgba(0,0,0,0.3);
            position: relative;
        }
        .form-container:before,
        .form-container:after {
            content: '';
            background-color: #4E4C97;
            height: 50%;
            width: 4px;
            position: absolute;
            left: 10px;
            top: 10px;
        }
        .form-container:after {
            top: auto;
            bottom: 10px;
            left: auto;
            right: 10px;
        }
        .form-container .title {
            color: #4E4C97;
            font-size: 25px;
            font-weight: 700;
            text-transform: capitalize;
            margin-bottom: 15px;
        }
        .form-container .social-links {
            padding: 0;
            margin-bottom: 15px;
            list-style: none;
        }
        .form-container .social-links li {
            display: inline-block;
            margin: 0 3px;
        }
        .form-container .social-links li a {
            color: #555;
            line-height: 27px;
            height: 28px;
            width: 28px;
            border: 1px solid #555;
            border-radius: 50%;
            display: block;
            transition: all 0.3s ease;
        }
        .form-container .social-links li a:hover {
            color: #fff;
            background-color: #4E4C97;
        }
        .form-container .description {
            color: #555;
            font-size: 13px;
            margin-bottom: 10px;
            display: block;
        }
        .form-horizontal .form-group {
            margin-bottom: 15px;
        }
        .form-horizontal .form-control {
            color: #4E4C97;
            background: #F7F8F9;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 1px;
            height: 40px;
            padding: 6px 12px;
            border-radius: 5px;
            border: 2px solid #F2F5F6;
            box-shadow: none;
        }
        .form-horizontal .form-control:focus {
            border-color: rgba(78, 76, 151, 0.5);
            box-shadow: none;
        }
        .form-horizontal .form-control::placeholder {
            color: lightgrey;
            font-size: 14px;
            font-weight: 300;
        }
        .form-horizontal .form-group .form-check-label {
            color: #555;
            font-size: 12px;
            font-weight: 400;
            text-transform: none;
            margin-left: 5px;
        }
        .form-horizontal .btn {
            color: #fff;
            background-color: #4E4C97;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: 0.5px;
            text-transform: capitalize;
            width: 130px;
            padding: 11px;
            margin: 0 10px 10px 0;
            border: 2px solid #4E4C97;
            border-radius: 15px;
            transition: all 0.3s ease;
        }
        .form-horizontal .btn.signin {
            color: #4E4C97;
            background-color: #fff;
        }
        .form-horizontal .btn:hover,
        .form-horizontal .btn:focus {
            color: #4E4C97;
            background-color: #fff;
            box-shadow: 0 0 5px #4E4C97, 0 0 15px #4E4C97 inset;
        }
        .form-horizontal .btn.signin:hover,
        .form-horizontal .btn.signin:focus {
            text-shadow: 3px 3px rgba(0,0,0,0.3);
            box-shadow: 0 0 5px #4E4C97;
        }
    </style>
</head>
<body>
    <div class="form-bg">
        <div class="form-container">
            <h3 class="title">Create Account</h3>
            <ul class="social-links">
                <li><a href="#"><i class="fab fa-google"></i></a></li>
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
            <span class="description">or use your email for registration:</span>
            <form method="POST" action="{{ route('register') }}" class="form-horizontal">
            @csrf
                <!-- Name -->
                <div class="form-group">
                <x-text-input id="name" class="form-control" type="text" placeholder="Enter your name" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <!-- Email Address -->
                <div class="form-group">
                <x-text-input id="email" class="form-control" type="email" placeholder="Enter your email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <!-- Phone Number -->
                <div class="form-group">
                <x-text-input id="phone" class="form-control" type="text" placeholder="Enter your Phone Number" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                </div>
                <!-- Address -->
                <div class="form-group">
                <x-text-input id="address" class="form-control" type="text" placeholder="Enter your Address" name="address" :value="old('address')" required autofocus autocomplete="address" />
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
                </div>
                <!-- Password -->
                <div class="form-group">
                <x-text-input id="password" placeholder="Enter your Password" class="form-control"
                type="password"
                name="password"
                required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <!-- Confirm Password -->
                <div class="form-group">
                <x-text-input id="password_confirmation" placeholder="Confirm your Password" class="form-control"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>
                <div class="form-group form-check text-left">
                <u><a href="{{ route('login') }}">
                {{ __('Already registered?') }}</a></u>
                
                <x-primary-button class="btn signup">
                    {{ __('Register') }}
                </x-primary-button>
            </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <
::contentReference[oaicite:0]{index=0}
 
