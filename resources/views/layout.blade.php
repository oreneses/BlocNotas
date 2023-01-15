<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="height:100%">
    <div id="app">
        <div class="d-flex flex-column h-screen justify-content-between">
            <header>
                @include('nav')
            </header>
            <main class="py-4 justify-content-between align-items-center">
                @yield('content')
            </main>
            <footer class="bg-white text-center text-black-50 p-3 shadow">
                {{ config('app.name') }} | Copyright @ {{date('Y')}}
            </footer>
        </div>
    </div>
    {{-- <footer class="bg-white text-center text-black-50 p-5 shadow" style="position: fixed; bottom:0; text-align:center;">
        {{ config('app.name') }} | Copyright @ {{date('Y')}}
    </footer> --}}
    {{-- <footer class="w-100 flex-shrink-0">
        <div class="container py-5">
            <footer class="bg-white text-center text-black-50 p-4 shadow" style="bottom:0; flex: 0 0 auto;">
                {{ config('app.name') }} | Copyright @ {{date('Y')}}
            </footer>
        </div> --}}
    </footer>
</body>
</html>