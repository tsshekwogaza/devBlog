<x-layout>
    <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8 lg:py-20">
		<div class="grid grid-cols-1 gap-y-12 lg:grid-cols-12 lg:gap-x-12">
			
			<aside class="lg:col-span-2">
				<a href="/articles" class="inline-flex items-center gap-2 text-sm font-medium text-neutral-500 transition-colors hover:text-neutral-950">
					<svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
					</svg>
					Back to all articles
				</a>
				<div class="mt-20 sticky top-24 rounded-2xl border border-neutral-200 bg-white p-6 shadow-xs h-120">
					<h2 class="font-semibold mb-2">Advert Placement</h2>
					<p class="mt-2 text-xs text-neutral-600 leading-relaxed">Receive architectural walkthroughs, deep-dive component builds, and systems advice directly in your inbox twice a month.</p>
					<p class="mt-2 text-xs text-neutral-600 leading-relaxed">Receive architectural walkthroughs, deep-dive component builds, and systems advice directly in your inbox twice a month.</p>
				</div>
			</aside>

			<main class="lg:col-span-8">
				<article>
					<header class="flex flex-col">
						<div class="flex items-center gap-3 text-xs font-semibold tracking-wide uppercase text-[#45b7be]">
							<span>{{ $article->category->name ?? 'No Category' }}</span>
							<span class="h-1 w-1 rounded-full bg-neutral-300"></span>
							<time datetime="2026-06-01">{{ $article->created_at->format('F j, Y') }}</time>
							
							@auth			
								@can('view-edit', $article)		
									<span class="h-1 w-1 rounded-full bg-neutral-300"></span>
		
									<a href="{{ url('/articles'.'/'.$article->id.'/edit') }}">
										<span class="px-1.5 py-1 text-sm font-medium text-white bg-[#45b7be] border border-slate-300 rounded-lg shadow-2xs hover:bg-[#3ba3a9] active:bg-blue-100 transition cursor-pointer">
											Edit
										</span>
									</a>
								@endcan
							@endauth
						</div>
						
						<h1 class="mt-4 text-3xl font-extrabold tracking-tight text-neutral-950 sm:text-4xl lg:text-5xl lg:leading-[1.15]">
							{{ $article->title }}
						</h1>

						<div class="mt-6 flex items-center gap-3 border-y border-neutral-200/80 py-4">
							<img src="/storage/{{ $article->user->avatar }}" alt="authors avatar" class="h-10 w-10 rounded-full bg-neutral-100 object-cover">
							<div>
								<p class="text-sm font-semibold text-neutral-950">Written by {{ $article->user->name }}</p>
								<p class="text-xs text-neutral-500">{{ $article->user->profession }}</p>
							</div>
						</div>
					</header>

					<div class="mt-8 overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-100 aspect-video">
						<img src="/storage/{{ $article->image }}" alt="Hero banner markup representation" class="h-full w-full object-cover">
					</div>

					<!-- Editorial Typography/Body Area -->
					<div class="mt-10 max-w-none text-base text-neutral-800 sm:text-lg leading-relaxed space-y-6">
						<p class="text-xl font-normal text-neutral-600 leading-relaxed">
							{{ $article->text }}
						</p>
						<!-- Semantic Section Callouts -->
						<h2 class="pt-4 text-2xl font-bold tracking-tight text-neutral-950 sm:text-3xl">The Shift Toward Pure Native Variables</h2>
						<p>
							In previous architectures, extending core design systems required declarative keys nested structural patterns within <code class="rounded bg-neutral-200/60 px-1.5 py-0.5 text-sm font-mono text-neutral-900">tailwind.config.js</code>. With version 4, utility parameters resolve via engine variable definitions.
						</p>
						<!-- Blockquote Integration -->
						<blockquote class="border-l-4 border-[#45b7be] bg-neutral-100/60 p-5 rounded-r-xl my-6 italic text-neutral-700">
							"By moving theme structures into standardized engine layers, the build pipeline completely drops runtime file parsing operations, resulting in lightning-fast initial hot reloads."
						</blockquote>
						<p>
							Let's evaluate how theme maps transform when processing parameters through compilation steps inside your updated style engine configurations.
						</p>

						<div class="my-6 overflow-hidden rounded-xl border border-neutral-300 bg-neutral-950 p-5 font-mono text-xs sm:text-sm text-neutral-200 shadow-inner">
							<div class="flex items-center justify-between pb-3 border-b border-neutral-800 text-neutral-500 text-xs">
								<span>global.css</span>
								<span>CSS</span>
							</div>
							<pre class="mt-4 overflow-x-auto">
								<code>
									<span class="text-indigo-400">@import</span> <span class="text-emerald-400">"tailwindcss"</span>;
									<span class="text-indigo-400">@theme</span>
									<span class="text-neutral-500">--color-brand-primary</span>: #4f46e5;
									<span class="text-neutral-500">--font-display</span>: "Inter Display", sans-serif;
								</code>
							</pre>
						</div>

						<h2 class="pt-4 text-2xl font-bold tracking-tight text-neutral-950 sm:text-3xl">Conclusion and Strategy</h2>
						<p>
							Begin incremental refactors on decoupled modules before upgrading major structural packages all at once. Isolating styles reduces regressions and verifies visual component layout continuity perfectly.
						</p>
					</div>

					<footer class="mt-16 rounded-2xl border border-neutral-200 bg-white p-6 sm:p-8">
						<div class="flex flex-col sm:flex-row items-start gap-4 sm:gap-6">
							
							<img src="/storage/{{ $article->user->avatar }}" alt="Sarah Jenkins" class="h-14 w-14 shrink-0 rounded-full object-cover bg-neutral-100">
							
							<div class="space-y-2">
								<h3 class="text-base font-bold text-neutral-950">About {{ $article->user->name }}</h3>
								<p class="text-sm text-neutral-600 leading-relaxed">{{ $article->user->bio }}</p>

								<div class="pt-2 flex gap-4 text-xs font-semibold text-[#45b7be]">
									<a href="https://twitter.com/{{ $article->user->twitter_handle }}" class="hover:underline" target="_blank">Follow on Twitter</a>
									<a href="https://github.com/{{ $article->user->github_handle }}" class="hover:underline" target="_blank">View GitHub Profile</a>
								</div>
							</div>
							
						</div>
					</footer>
				</article>
			</main>

			<aside class="lg:col-span-2">
				<div class="sticky top-24 rounded-2xl border border-neutral-200 bg-white p-6 shadow-xs">
					<h3 class="text-sm font-bold text-neutral-950 uppercase tracking-wider">Join our newsletter</h3>
					<p class="mt-2 text-xs text-neutral-600 leading-relaxed">Receive architectural walkthroughs, deep-dive component builds, and systems advice directly in your inbox twice a month.</p>
					
					<form class="mt-4 space-y-2" onsubmit="event.preventDefault();">
						<div>
							<label for="email-address" class="sr-only">Email address</label>
							<input id="email-address" type="email" required placeholder="Email" class="w-full rounded-lg border border-neutral-300 bg-neutral-50 px-3 py-2 text-sm text-neutral-950 placeholder-neutral-400 focus:border-[#45b7be] focus:bg-white focus:ring-1 focus:ring-[#45b7be] outline-none transition-all">
						</div>
						<button type="submit" class="w-full rounded-lg bg-[#45b7be] px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-neutral-950 transition-colors cursor-pointer">
							Subscribe
						</button>
					</form>
				</div>
			</aside>

		</div>
    </div>
</x-layout>