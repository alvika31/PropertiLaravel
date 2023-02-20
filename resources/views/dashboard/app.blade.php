<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons@latest/iconfont/tabler-icons.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>



    <div class="min-h-screen flex">
        @include('dashboard.sidebar')
        <div class="w-3/4 mt-10 ml-10 sm:ml-72 p-6">
            {{ $slot }}
        </div>
    </div>

    <script src="{{ asset('js/script.js') }}"></script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>
