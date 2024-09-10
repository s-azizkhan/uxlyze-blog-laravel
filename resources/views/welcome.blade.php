<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    @vite('resources/css/app.css')
</head>

<body class="antialiased font-sans">
    <div class="fixed left-0 top-0 -z-10 h-full w-full">
        <div
            class="absolute top-0 z-[-2] h-screen w-screen rotate-180 transform bg-white bg-[radial-gradient(60%_120%_at_50%_50%,_hsla(0,0%,100%,0)_0,rgb(183_180_238/50%)_100%)]">
        </div>
    </div>

    <header class="fixed w-full z-50 top-4">
        <nav class="container mx-auto px-6 py-3 max-w-5xl bg-white/30 backdrop-blur-md rounded-full shadow-lg">
            <div class="flex justify-between items-center">
                <a href="#" class="">

                    <span
                        class="text-xl font-bold bg-gradient-to-r from-black to-purple-600 bg-clip-text text-transparent">
                        UXlyze
                    </span>

                    <span class="text-sm">
                        Blog
                    </span>


                </a>
                <div class="hidden md:flex space-x-6 text-secondary">
                    <a href="#" class="text-gray-700 hover:text-purple-600 transition duration-300">Home</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 transition duration-300">Categories</a>
                    <a href="#" class="text-gray-700 hover:text-purple-600 transition duration-300">About</a>
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
        <section class="container mx-auto px-6 py-20 md:py-24 max-w-5xl" id="hero-section">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="md:w-1/2 mb-8 md:mb-0">
                    <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-6 leading-tight">Explore UI/UX Insights
                        and Best Practices</h1>
                    <p class="text-xl text-secondary text-gray-700 font-medium mb-8">
                        Dive into our collection of articles on UI/UX design, trends, and best practices. Stay informed
                        and inspired with UXlyze's curated content.
                    </p>
                    <div class="flex space-y-4 md:space-y-0 md:space-x-4 flex-col md:flex-row">
                        <a href="#"
                            class="bg-purple-600 text-white px-8 py-4 rounded-full hover:bg-purple-700 transition duration-300 inline-block font-semibold">
                            Latest Articles</a>
                        <a href="#"
                            class="bg-white text-purple-600 px-8 py-4 rounded-full border-2 border-purple-600 hover:bg-purple-50 transition duration-300 inline-block font-semibold">
                            Categories
                        </a>
                    </div>
                </div>
                <div
                    class="md:w-1/2 bg-gradient-to-br from-purple-100 to-purple-100 rounded-2xl p-8 shadow-xl relative">
                    <div class="bg-white rounded-xl p-6 shadow-inner">
                        <div class="h-8 w-3/4 bg-gray-200 rounded mb-4"></div>
                        <div class="h-4 w-full bg-gray-200 rounded mb-2"></div>
                        <div class="h-4 w-5/6 bg-gray-200 rounded mb-2"></div>
                        <div class="h-4 w-4/5 bg-gray-200 rounded mb-6"></div>
                        <div class="flex justify-between">
                            <div class="h-10 w-10 bg-purple-200 rounded-full"></div>
                            <div class="h-10 w-10 bg-purple-200 rounded-full"></div>
                            <div class="h-10 w-10 bg-pink-200 rounded-full"></div>
                        </div>
                    </div>
                    <div class="absolute bottom-2 right-4 text-purple-400 opacity-50 text-sm font-semibold">UXlyze Blog
                    </div>
                </div>
            </div>
        </section>

        <section class="py-16 mx-auto max-w-5xl" id="knoladge-base-section">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Explore Our Knowledge Base</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-6 h-6 text-purple-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                    </path>
                                </svg>
                                <h3 class="text-xl font-semibold text-gray-900">Getting Started</h3>
                            </div>
                            <p class="text-gray-600 mb-4 text-secondary">Learn the basics of UXlyze and how to set up
                                your first
                                project.</p>
                            <a href="#" class="text-purple-600 hover:underline font-medium">Read More →</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-6 h-6 text-purple-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                                    </path>
                                </svg>
                                <h3 class="text-xl font-semibold text-gray-900">Best Practices</h3>
                            </div>
                            <p class="text-gray-600 mb-4 text-secondary">Discover industry-leading UI/UX practices to
                                enhance your
                                designs.</p>
                            <a href="#" class="text-purple-600 hover:underline font-medium">Read More →</a>
                        </div>
                    </div>
                    <div class="bg-white rounded-xl shadow-md hover:shadow-lg transition duration-300">
                        <div class="p-6">
                            <div class="flex items-center mb-4">
                                <svg class="w-6 h-6 text-purple-600 mr-3" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                                <h3 class="text-xl font-semibold text-gray-900">Tips & Tricks</h3>
                            </div>
                            <p class="text-gray-600 mb-4 text-secondary">Explore advanced techniques to maximize your
                                UXlyze
                                experience.</p>
                            <a href="#" class="text-purple-600 hover:underline font-medium">Read More →</a>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-block bg-purple-600 text-white font-semibold px-6 py-3 rounded-xl hover:bg-purple-700 transition duration-300">View
                        All Articles</a>
                </div>
            </div>
        </section>

        @php
            $blogs = [
                [
                    'image' => 'https://placehold.co/800x400',
                    'alt' => 'UI/UX Trends',
                    'date' => 'May 15, 2023',
                    'category' => 'Trends',
                    'category_color' => 'purple',
                    'read_time' => '5 min read',
                    'title' => '10 UI/UX Trends Shaping 2023',
                    'description' =>
                        'Dive into the cutting-edge trends revolutionizing the world of UI/UX design this year.',
                ],
                [
                    'image' => 'https://placehold.co/800x400',
                    'alt' => 'Data-Driven UX',
                    'date' => 'June 2, 2023',
                    'category' => 'Data',
                    'category_color' => 'green',
                    'read_time' => '7 min read',
                    'title' => 'Leveraging Data for Superior UX',
                    'description' =>
                        'Unlock the power of data analytics to create user experiences that truly resonate with your audience.',
                ],
                [
                    'image' => 'https://placehold.co/800x400',
                    'alt' => 'Color Psychology',
                    'date' => 'July 10, 2023',
                    'category' => 'Psychology',
                    'category_color' => 'purple',
                    'read_time' => '6 min read',
                    'title' => 'The Impact of Color in UI Design',
                    'description' =>
                        'Explore how strategic use of color can influence user behavior and evoke powerful emotions.',
                ],
                [
                    'image' => 'https://placehold.co/800x400',
                    'alt' => 'Data-Driven UX',
                    'date' => 'June 2, 2023',
                    'category' => 'Data',
                    'category_color' => 'green',
                    'read_time' => '7 min read',
                    'title' => 'Leveraging Data for Superior UX',
                    'description' =>
                        'Unlock the power of data analytics to create user experiences that truly resonate with your audience.',
                ],
                [
                    'image' => 'https://placehold.co/800x400',
                    'alt' => 'Color Psychology',
                    'date' => 'July 10, 2023',
                    'category' => 'Psychology',
                    'category_color' => 'purple',
                    'read_time' => '6 min read',
                    'title' => 'The Impact of Color in UI Design',
                    'description' =>
                        'Explore how strategic use of color can influence user behavior and evoke powerful emotions.',
                ],
            ];
        @endphp

        <section class="py-16 mx-auto max-w-5xl" id="blogs-section">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-bold text-center text-gray-900 mb-12">Latest UI/UX Design Insights</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($blogs as $blog)
                        <div
                            class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 transform hover:-translate-y-1">
                            <div class="relative">
                                <img src="{{ $blog['image'] }}" alt="{{ $blog['alt'] }}"
                                    class="w-full h-56 object-cover">
                                <div class="absolute top-0 left-0 h-full flex items-center">
                                    <div class="bg-white/80 py-2 px-1 rounded-r-lg shadow-md">
                                        <span
                                            class="text-gray-700 text-sm font-semibold writing-vertical transform -rotate-180"
                                            style="writing-mode: vertical-rl;">{{ $blog['date'] }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <span
                                        class="bg-{{ $blog['category_color'] }}-100 text-{{ $blog['category_color'] }}-800 text-xs font-semibold px-2.5 py-0.5 rounded">{{ $blog['category'] }}</span>
                                    <span class="text-gray-500 text-sm ml-auto">{{ $blog['read_time'] }}</span>
                                </div>
                                <h3 class="text-xl font-semibold text-gray-900 mb-3">{{ $blog['title'] }}</h3>
                                <p class="text-gray-600 mb-4 text-secondary text-secondary">{{ $blog['description'] }}
                                </p>
                                <a href="#"
                                    class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-800">
                                    Read More
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-12">
                    <a href="#"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-xl text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 transition duration-300">
                        View All Articles
                        <svg class="ml-2 -mr-1 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                            fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>


    </main>

    <footer class="bg-white/30">
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

    <script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "name": "UXlyze Blog",
        "url": "{{ url('/') }}",
        "description": "Explore the latest UI/UX design trends, best practices, and insights on the UXlyze blog."
    }
    </script>
</body>

</html>
