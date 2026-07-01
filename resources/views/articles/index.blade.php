<x-layout title="Explore Our Articles Page">
    {{-- <main class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
        <!-- Grid Layout -->
        <div class="grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <article class="flex flex-col items-start bg-white rounded-2xl border border-slate-100 p-5 shadow-xs transition-all hover:shadow-md hover:-translate-y-0.5">
            <div class="aspect-video w-full overflow-hidden rounded-xl bg-slate-100">
                <img src="{{ asset('images/Balm.jpg') }}" alt="Laptop on desk" class="h-full w-full object-cover">
            </div>
            <div class="mt-4 flex items-center gap-2 text-xs font-medium text-indigo-600">
                <span>Development</span>
            </div>
            <h3 class="mt-2 text-xl font-bold text-slate-900 leading-snug hover:text-indigo-600 transition-colors">
                <a href="#">Mastering React Server Components</a>
            </h3>
            <p class="mt-2 text-sm line-clamp-3 text-slate-600">Understand data fetching architectures, performance impacts, and best practices for writing secure server side logic.</p>
            <div class="mt-6 flex w-full items-center gap-3 border-t border-slate-100 pt-4">
                <img src="{{ asset('images/Balm.jpg') }}" alt="Alex Rivera" class="h-8 w-8 rounded-full object-cover">
                <div>
                <p class="text-xs font-semibold text-slate-900">Alex Rivera</p>
                <p class="text-[11px] text-slate-500">March 12, 2026</p>
                </div>
            </div>
            </article>

            <!-- Card 2 -->
            <article class="flex flex-col items-start bg-white rounded-2xl border border-slate-100 p-5 shadow-xs transition-all hover:shadow-md hover:-translate-y-0.5">
            <div class="aspect-video w-full overflow-hidden rounded-xl bg-slate-100">
                <img src="{{ asset('images/nail.jpg') }}" alt="Yoga position" class="h-full w-full object-cover">
            </div>
            <div class="mt-4 flex items-center gap-2 text-xs font-medium text-emerald-600">
                <span>Productivity</span>
            </div>
            <h3 class="mt-2 text-xl font-bold text-slate-900 leading-snug hover:text-emerald-600 transition-colors">
                <a href="#">The Developer's Guide to Avoiding Burnout</a>
            </h3>
            <p class="mt-2 text-sm line-clamp-3 text-slate-600">Practical routines, workspace optimization tactics, and mental models to maintain deep focus without losing sanity.</p>
            <div class="mt-6 flex w-full items-center gap-3 border-t border-slate-100 pt-4">
                <img src="{{ asset('images/nail.jpg') }}" alt="Emma Watson" class="h-8 w-8 rounded-full object-cover">
                <div>
                <p class="text-xs font-semibold text-slate-900">Emma Watson</p>
                <p class="text-[11px] text-slate-500">March 10, 2026</p>
                </div>
            </div>
            </article>

            <!-- Card 3 -->
            <article class="flex flex-col items-start bg-white rounded-2xl border border-slate-100 p-5 shadow-xs transition-all hover:shadow-md hover:-translate-y-0.5">
            <div class="aspect-video w-full overflow-hidden rounded-xl bg-slate-100">
                <img src="{{ asset('images/cleaning.jpg') }}" alt="UI Design sketches" class="h-full w-full object-cover">
            </div>
            <div class="mt-4 flex items-center gap-2 text-xs font-medium text-pink-600">
                <span>UI/UX Design</span>
            </div>
            <h3 class="mt-2 text-xl font-bold text-slate-900 leading-snug hover:text-pink-600 transition-colors">
                <a href="#">Micro-interactions that elevate User Experience (UX)</a>
            </h3>
            <p class="mt-2 text-sm line-clamp-3 text-slate-600">How subtle animations, state transitions, and responsive gestures can make an interface delightful. This is a continued topis secnes aldkna asklfsadf dasdfaklda.</p>
            <div class="mt-6 flex w-full items-center gap-3 border-t border-slate-100 pt-4">
                <img src="{{ asset('images/cleaning.jpg') }}" alt="Sarah Jenkins" class="h-8 w-8 rounded-full object-cover">
                <div>
                <p class="text-xs font-semibold text-slate-900">Sarah Jenkins</p>
                <p class="text-[11px] text-slate-500">March 08, 2026</p>
                </div>
            </div>
            </article>

        </div>
        </section>
    </main> --}}


    <main class="grow pb-20">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <!-- Section: Featured Post Layout -->
            {{-- <div class="group relative grid grid-cols-1 overflow-hidden rounded-3xl border border-neutral-200 bg-white shadow-xs transition-all duration-300 hover:border-neutral-300 hover:shadow-md lg:grid-cols-12">
                <!-- Image Wrapper with v4 aspect utility -->
                <div class="aspect-video w-full bg-neutral-100 lg:col-span-7 lg:aspect-auto lg:h-full">
                    <img src="{{ asset('images/image-kira') }}" alt="Featured article illustration" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-[1.02]">
                </div>
                <!-- Text Box -->
                <div class="flex flex-col justify-center p-8 sm:p-10 lg:col-span-5 lg:p-12">
                    <div class="flex items-center gap-3 text-xs font-semibold tracking-wide uppercase text-indigo-600">
                    <span>Architecture</span>
                    <span class="h-1 w-1 rounded-full bg-neutral-300"></span>
                    <time datetime="2026-06-01">June 1, 2026 </time>
                </div>
                    <h2 class="mt-4 text-2xl font-bold tracking-tight text-neutral-950 sm:text-3xl">
                    <a href="#" class="hover:underline">
                        <span class="absolute inset-0"></span>
                        Migrating Complex Codebases onto Tailwind CSS v4.0
                    </a>
                    </h2>
                    <p class="mt-4 line-clamp-3 text-base text-neutral-600 leading-relaxed">Tailwind v4 fundamentally changes package dependencies, moving heavy configurations to native CSS. Learn how to map your configuration to pure CSS variables without performance regression.</p>
                    <div class="mt-6 flex items-center gap-3">
                        <img src="{{ asset('images/image-kira.jpg') }}" alt="Author avatar" class="h-10 w-10 rounded-full bg-neutral-100 object-cover">
                        <div>
                            <p class="text-sm font-semibold text-neutral-950">Sarah Jenkins</p>
                            <p class="text-xs text-neutral-500">Principal Architect</p>
                        </div>
                    </div>
                </div>
            </div> --}}

            <!-- Categories -->
            <section class="mt-12 mb-1 rounded-2xl border border-neutral-200 bg-white p-5 shadow-xs">
                <h2 class="text-xs font-bold text-neutral-400 uppercase tracking-wider">Explore Topics</h2>
                <div class="mt-3 flex flex-wrap gap-2">
                    <!-- Active Category State -->
                    <a href="articles" class="inline-flex items-center gap-1.5 rounded-full bg-[#45b7be] px-3.5 py-1.5 text-xs font-semibold text-white shadow-xs hover:bg-[#45a7be] transition-colors">All categories
                        <span class="inline-flex h-2 w-2 rounded-full bg-indigo-200"></span>
                    </a>
                    <!-- Inactive Category States -->
                    @foreach($categories as $category)
                        <a href="?category_id={{ $category->id }}" class="rounded-full border border-neutral-200 bg-neutral-50 px-3.5 py-1.5 text-xs font-medium text-neutral-600 hover:border-neutral-300 hover:bg-white hover:text-neutral-900 transition-all">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>
            </section>

            <!-- Section: Standard Grid Posts Layout -->
            <section class="mt-12">
                <h3 class="text-2xl font-bold tracking-tight text-neutral-950">Latest Publications</h3>
                
                <!-- Three-Column Responsive Grid Structure -->
                <div class="mt-10 grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                    
                    <!-- Post Card -->
                    @foreach ($articles as $article)
                        <article class="group flex flex-col items-start justify-between">
                            <div class="relative w-full overflow-hidden rounded-2xl border border-neutral-200/60 bg-neutral-100 aspect-16/10">
                                <a href="{{ url('articles/' . $article->id) }}">
                                    <img src="/storage/{{ $article->image }}" alt="Post thumbnail" class="h-full w-full object-cover transition-transform duration-300 group-hover:scale-[1.03]">
                                </a>
                            </div>
                            <div class="max-w-xl">
                                <div class="mt-6 flex items-center gap-x-3 text-xs text-neutral-500">
                                    <time datetime="2026-05-24">{{ $article->created_at->format('M d, Y') }}</time>
                                    <span class="h-1 w-1 rounded-full bg-neutral-300"></span>
                                    {{-- View categories using the null-coalescing operator --}}
                                    <span class="font-medium text-neutral-700">{{ $article->category->name ?? 'No Category' }}</span>
                                </div>
                                <div class="group relative">
                                    <h4 class="mt-3 text-xl font-semibold tracking-tight text-neutral-950 group-hover:text-[#45b7be]">
                                        <a href="{{ url('articles/' . $article->id) }}">
                                            <span class="absolute inset-0"></span>
                                            {{ $article->title }}
                                        </a>
                                    </h4>
                                    <p class="mt-2 line-clamp-3 text-sm text-neutral-600 leading-relaxed">{{ $article->text }}</p>
                                </div>
                            </div>
                        </article>
                    @endforeach

                    <div class="pagination">
                        {{ $articles->links() }}
                    </div>
                </div>
            </section>

            <!-- Newsletter Banner -->
            <section class="mt-20 rounded-2xl bg-slate-900 px-6 py-10 sm:p-12 lg:p-16 shadow-xl">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Stay ahead of the tech stack loop</h2>
                    <p class="mt-3 text-base text-slate-400">Get curated front-end architecture articles, UI/UX breakdowns, and modern web tips delivered straight to your inbox weekly.</p>
                    <form class="mt-8 flex flex-col sm:flex-row gap-3 max-w-md mx-auto">
                        <input type="email" placeholder="Enter your email address" required class="w-full min-w-0 flex-auto rounded-lg border-0 bg-white/10 px-4 py-2.5 text-white placeholder-slate-500 shadow-xs ring-1 ring-white/10 focus:ring-2 focus:ring-[#45b7be] focus:outline-hidden text-sm">
                        <button type="submit" class="flex-none rounded-lg bg-[#45b7be] px-4 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-[#45a7be] focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-[#45b7be]">Subscribe</button>
                    </form>
                </div>
            </section>
        </div>
    </main>
</x-layout>
