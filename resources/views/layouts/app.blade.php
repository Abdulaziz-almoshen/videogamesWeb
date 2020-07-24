<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Video Games Gallery</title>
    <link rel="stylesheet" href="/css/main.css">

</head>
<body class="bg-gray-900 text-white">
<header class="border-b border-gray-800">
    <nav class="container mx-auto items-center flex justify-between px-4 py-6">
{{--        left elements--}}
        <div class="flex items-center">
            <a href="" class="flex items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/768px-Instagram_logo_2016.svg.png" alt="lgo" class="w-16    flex-none">
            </a>
            <ul class="flex m-4 space-x-3">
                <li class="hover:text-gray-400">Games</li>
                <li class="hover:text-gray-400">Games</li>
                <li class="hover:text-gray-400">Games</li>
                <li class="hover:text-gray-400">Games</li>
            </ul>
        </div>
{{--        right elements--}}
        <div class="flex items-center">
            <div class="relative">
                <input type="text" class="relative bg-gray-800 rounded-full focus:outline-none focus:shadow-outline pl-8 py-1  w-64 px-3 text-sm " placeholder="Search ... ">
                <div class=" flex items-center h-full absolute top-0 ml-2 ">
                    <i data-feather="search" class="w-4 fill-current text-gray-400"></i>
                </div>
            </div>
            <div class="ml-4">
                <i data-feather="activity" class="w-16 shadow-lg h-full fill-current text-red-400"></i>
            </div>
        </div>
    </nav>
</header>
<main class="py-8">
    @yield('content')
</main>

<footer class="border-t border-gray-800">
    <div class="container mx-auto px-4 py-6">
        powered by <a href="#" class="underline hover:text-gray-400"> IGDP API</a>

    </div>

</footer>



<script src="https://unpkg.com/feather-icons"></script>
<script>
    feather.replace()
</script>
</body>
</html>
