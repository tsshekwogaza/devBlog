@props([
    'title' => 'Dev.blog'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="Author" content="Timothy Samuel">
        <meta name="description" content="Ideas - Your one stop shop for Daily articles">
        <meta name="keywords" content="news, issues, info, report">
        <title>{{ $title }}</title>
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=1" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
        <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="flex min-h-full flex-col font-sans antialiased">
        <header class="sticky top-0 z-50 border-b border-neutral-200/80 bg-white/80 backdrop-blur-md">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <a href="{{ route('welcome') }}" class="text-xl font-bold tracking-tight text-neutral-950 flex items-center">
                        <img src="{{ asset('images/blog.png') }}" class="w-20 h-10 object-contain">
                    </a>

                    @auth
                        <div class="flex items-center gap-6">
                            <!-- Navigation Links -->
                            <nav class="flex items-center gap-6 text-sm font-medium text-neutral-600">
                                <a href="{{ url('articles') }}" class="transition-colors hover:text-[#45b7be] font-semibold">Articles</a>
                                <a href="{{ route('about') }}" class="transition-colors hover:text-[#45b7be] font-semibold">About</a>
                            </nav>
                            <!-- Divider -->
                            <span class="h-5 w-px bg-neutral-200" aria-hidden="true"></span>

                            <div class="flex items-center gap-4">
                                <a href="{{ url('/articles/create') }}" class="inline-flex items-center gap-1.5 rounded-lg bg-[#45b7be] px-3.5 py-2 text-sm font-semibold text-white shadow-xs transition-all hover:bg-[#3ba3a9] hover:shadow-sm  focus-visible:outline-offset-2 focus-visible:outline-[#45b7be]">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    <span>Create</span>
                                </a>

                                <a href="{{ url('/users'.'/'.Auth::user()->id.'/profile') }}">
                                    <div class="flex items-center gap-2 rounded-lg border border-neutral-200 bg-neutral-50/50 px-3 py-1.5 text-sm font-medium text-neutral-700 transition-colors hover:bg-neutral-50">
                                        <img src="{{ Storage::url(Auth::user()->avatar) }}" alt="Avatar" class="h-8 w-8 shrink-0 rounded-full object-cover bg-neutral-100">

                                        {{-- <img src="/storage/{{ Auth::user()->avatar }}" alt="Avatar" class="h-8 w-8 shrink-0 rounded-full object-cover bg-neutral-100"> --}}
                                        {{-- <span class="max-w-2500 truncate">{{ Auth::user()->name }}</span> --}}
                                    </div>
                                </a>

                                <form method="POST" action="/sessions">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" title="Log Out" class="group p-2 rounded-lg text-neutral-500 hover:text-red-600 hover:bg-red-50 transition-all focus-visible:outline-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.8" stroke="currentColor" class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15M12 9l-3 3m0 0 3 3m-3-3h12.75" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @else
                        <a href="{{ url('/register') }}" class="rounded-lg bg-[#45b7be] px-3.5 py-2 text-sm font-semibold text-white shadow-xs transition-all hover:bg-[#3ba3a9] hover:shadow-sm focus-visible:outline-offset-2 focus-visible:outline-[#45b7be]">Sign In</a>
                    @endauth         
                </div>             
            </div>
        </header>

        <main>
            {{ $slot }}
        </main>

        <footer class="flex flex-col mt-auto border-t border-neutral-200 bg-white py-8">
            <div class="flex items-center gap-7 mx-auto max-w-7xl px-4 text-center text-xs text-neutral-500 sm:px-6 lg:px-8">
                <span class="font-bold">&copy; {{ date('Y') }}</span>
                <span>Built with ❤️ by tsshekwogaza</span>
            </div>
        </footer>
    </body>
</html>