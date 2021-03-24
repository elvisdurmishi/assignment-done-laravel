<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment Done</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body class="bg-gray-200">
<nav class="p-6 bg-white flex justify-between flex-col items-center mb-2 lg:flex-row lg:items-flex-start lg:mb-6">
    <ul class="flex items-center justify-around">
        <li>
            <a href="" class="p-3 text-xl lg:text-l">Assignment <span class="text-red-500">Done!</span></a>
        </li>
        <li>
        <p id="hamburgerbtn" class="p-2 px-3 border-2 border-black rounded lg:hidden bg-grey-800">
            <i class="fas fa-bars"></i>
        </p>
        </li>
    </ul>
    <ul class="hidden lg:flex items-center flex-col lg:flex-row" id="mobileMenu">
        <li>
            <a href="" class="p-3 text-xl lg:text-l">Home</a>
        </li>
        <li>
            <a href="" class="p-3 text-xl lg:text-l">Assignments</a>
        </li>
        <li>
            <a href="" class="p-3 text-xl lg:text-l">Quiz</a>
        </li>
        <li>
            <a href="" class="p-3 text-xl lg:text-l">About Us</a>
        </li>
    </ul>

    <ul class="hidden lg:flex items-center flex-col lg:flex-row" id="loginMenu">
        @auth
        <li>
            <a href="" class="p-3 text-xl lg:text-l">Elvis Durmishi</a>
        </li>
        <li>
            <form action="{{ route('logout') }}" method="post" class="inline">
                @csrf
                <button type="submit" class="text-xl lg:text-l">Logout</button>
            </form>
        </li>
        @endauth

        @guest
        <li>
            <a href="" class="p-3 text-xl lg:text-l">Login</a>
        </li>
        <li>
            <a href="{{ route('register')}}" class="p-3 text-xl lg:text-l">Register</a>
        </li>
        @endguest
    </ul>
</nav>
    @yield('content')
    <script src="{{asset('js/index.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>