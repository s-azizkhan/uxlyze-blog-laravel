{{-- Update the metadata --}}
@php
    seo()
        ->title($blog->title . ' | UXlyze | Bridging the Gap Between Design & Reality')
        ->description($blog->desc ?? Str::limit(strip_tags($blog->content), 160))
        ->image($blog->image ? asset('storage/' . $blog->image) : '');

    $parsedContent = Str::markdown($blog->content);
@endphp

<x-guest-layout>
    <nav class="py-3 md:mb-2">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex">
            <ol class="flex items-center space-x-2 text-sm text-gray-600">
                <li><a href="{{ route('home') }}" class="hover:text-gray-900">Home</a></li>
                <li><span class="text-gray-400">/</span></li>
                <li class="text-gray-900 font-medium">{{ Str::limit($blog->title, 30) }}</li>
            </ol>
        </div>
    </nav>

    <article class="py-4 px-2 lg:py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm rounded-lg">
                @if ($blog->image)
                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->alt }}"
                        class="w-full h-64 object-cover">
                @endif
                <div class="p-6">
                    <h1 class="text-3xl font-bold text-gray-900 mb-4">{{ $blog->title }}</h1>
                    <div class="flex items-center text-gray-500 text-sm mb-4">
                        <time
                            datetime="{{ $blog->created_at->toIso8601String() }}">{{ $blog->created_at->format('M d, Y') }}</time>
                        <span class="mx-2">•</span>
                        <span>{{ $blog->read_time }}</span>
                        <span class="mx-2">•</span>
                        <span>{{ $blog->category }}</span>
                    </div>
                    <div class="prose max-w-none text-secondary">
                        {!! $parsedContent !!}
                    </div>
                </div>
            </div>
        </div>
    </article>

    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "{{ $blog->title }}",
        "image": "{{ $blog->image ? asset('storage/' . $blog->image) : '' }}",
        "datePublished": "{{ $blog->created_at->toIso8601String() }}",
        "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
        "author": {
            "@type": "Person",
            "name": "UXlyze"
        },
        "publisher": {
            "@type": "Organization",
            "name": "UXlyze Blog",
        },
        "description": "{{ $blog->desc ?? Str::limit(strip_tags($blog->content), 160) }}"
    }
    </script>
</x-guest-layout>
