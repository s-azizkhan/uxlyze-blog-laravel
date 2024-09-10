<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <x-seo::meta />

    <title>UXlyze Blog | UI/UX Design Insights and Best Practices</title>
    <meta name="description"
        content="Explore the latest UI/UX design trends, best practices, and insights on the UXlyze blog. Stay informed and inspired with our curated content.">
    <meta name="keywords" content="UI/UX design, user experience, user interface, design trends, UX best practices">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="UXlyze Blog | UI/UX Design Insights">
    <meta property="og:description"
        content="Explore the latest UI/UX design trends and best practices on the UXlyze blog.">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="UXlyze Blog | UI/UX Design Insights">
    <meta property="twitter:description"
        content="Explore the latest UI/UX design trends and best practices on the UXlyze blog.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="fixed left-0 top-0 -z-10 h-full w-full">
        <div
            class="absolute top-0 z-[-2] h-screen w-screen rotate-180 transform bg-white bg-[radial-gradient(60%_120%_at_50%_50%,_hsla(0,0%,100%,0)_0,rgb(183_180_238/50%)_100%)]">
        </div>
    </div>

    <header class="fixed w-full z-50 top-4">
        <nav class="container mx-auto px-6 py-3 max-w-5xl bg-white/30 backdrop-blur-md rounded-full shadow-lg">
            <div class="flex justify-between items-center">
                <a href="{{ route('home') }}" class="">

                    <span
                        class="text-xl font-bold bg-gradient-to-r from-black to-purple-600 bg-clip-text text-transparent">
                        UXlyze
                    </span>

                    <span class="text-sm">
                        Blog
                    </span>

                </a>
                <div class="hidden md:flex space-x-6 text-secondary">
                    <a href="{{ route('blogs.index') }}"
                        class="text-gray-700 hover:text-purple-600 transition duration-300">Categories</a>
                    <a href="{{ route('home') }}"
                        class="text-gray-700 hover:text-purple-600 transition duration-300">About</a>
                </div>
                <div class="flex items-center space-x-4">
                    <form action="#" method="GET" class="relative hidden md:flex">
                        <input type="text" name="search" placeholder="Search articles"
                            class="pl-3 pr-10 py-2 rounded-full border-gray-300 focus:border-purple-300 focus:ring focus:ring-purple-200 focus:ring-opacity-50">
                        <button type="submit" class="absolute right-3 top-1/2 transform -translate-y-1/2">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>
                    </form>
                    <button
                        class="bg-purple-600 text-white px-5 py-2 rounded-full hover:bg-purple-700 transition duration-300">Subscribe</button>
                </div>
            </div>
        </nav>
    </header>

    <main class="pt-20">

        {{ $slot }}
    </main>

    <footer class="bg-white/30 bottom-0 left-0 right-0">
        <div class="container mx-auto px-6 py-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <a href="https://uxlyze.com">
                        <span class="text-gray-600 font-bold">&copy; {{ date('Y') }} UXlyze</span>
                    </a>
                    <span class="text-gray-600 font-bold">|</span> <span class="text-gray-600 font-medium">All rights
                        reserved.</span>
                </div>
                <div class="flex space-x-4 text-secondary">
                    <a href="#" class="text-gray-600  hover:text-purple-600 ">Privacy
                        Policy</a>
                    <a href="#" class="text-gray-600  hover:text-purple-600 ">Terms
                        of Service</a>
                    <a href="#" class="text-gray-600  hover:text-purple-600 ">Contact</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
