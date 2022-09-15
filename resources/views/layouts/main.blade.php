<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel Comics | @yield('title')</title>
</head>
<body>
    

    <header class="container-fluid">
    
        @include('includes.header')
    
    </header>
    
    <main class="container my-5">

        @yield('main-content')
    
    </main>
    
    <footer class="container">

        @include('includes.footer')

    </footer>
    
    @yield('footer-scripts')

    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>