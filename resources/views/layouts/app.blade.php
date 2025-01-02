<!-- resources/views/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/Styles.css') }}">
</head>
<body>
    <header>
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary text-white">
        <a class="navbar-brand  text-white" href="/">Al-Hassan's Educations</a>
        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item"><a class="nav-link   text-white" href="#courses">Courses</a></li>
                <li class="nav-item"><a class="nav-link   text-white" href="#about">About</a></li>
                <li class="nav-item"><a class="nav-link   text-white" href="">Contact</a></li>
                <li class="nav-item"><a class="nav-link   text-white" href="/children">Annual Examination Result</a></li>
                @if (session()->has('User Name'))
                <li class="nav-item"><a class="nav-link   text-white" href="/login">{{session()->get('User Name')}}</a></li>
                <li class="nav-item"><a class="nav-link   text-white" href="/login">{{session()->get('status')}}</a></li>
                    @else
                    <li class="nav-item"><a class="nav-link   text-white" href="/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link   text-white" href="/register">Register</a></li>
                    @endif


            </ul>
        </div>
    </nav>
   <!--  End Navbar -->
    </header>

    <main>
        @yield('content')
    </main>
   <!-- End Content Section -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
