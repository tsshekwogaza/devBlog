<x-layout title="About Us">

	<!-- Section 1: Hero Intro -->
	<section class="py-16 sm:py-24 bg-white border-b border-neutral-200/60">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="max-w-3xl">
				<span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">Our Mission</span>
				<h1 class="mt-4 text-4xl font-extrabold tracking-tight text-neutral-950 sm:text-5xl lg:text-6xl lg:leading-[1.1]">
					We build reference documentation for the next generation of engineers.
				</h1>
				<p class="mt-6 text-xl text-neutral-600 leading-relaxed">Dev.blog started in 2025 as a internal repository for sharing architectural system designs. Today, we support millions of monthly developers looking for clear, performance-first technical engineering blueprints.</p>
			</div>
		</div>
	</section>

	<!-- Section 2: Core Metrics / Stats Grid -->
	<section class="py-16 sm:py-20">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="grid grid-cols-2 gap-8 md:grid-cols-4">
				<!-- Stat 1 -->
				<div class="border-l-2 border-indigo-600 pl-4">
					<dd class="text-3xl font-extrabold tracking-tight text-neutral-950 sm:text-4xl">2.5M+</dd>
					<dt class="mt-2 text-sm font-medium text-neutral-500">Monthly Active Readers</dt>
				</div>
				<!-- Stat 2 -->
				<div class="border-l-2 border-indigo-600 pl-4">
					<dd class="text-3xl font-extrabold tracking-tight text-neutral-950 sm:text-4xl">400+</dd>
					<dt class="mt-2 text-sm font-medium text-neutral-500">Technical Articles Written</dt>
				</div>
				<!-- Stat 3 -->
				<div class="border-l-2 border-indigo-600 pl-4">
					<dd class="text-3xl font-extrabold tracking-tight text-neutral-950 sm:text-4xl">99.9%</dd>
					<dt class="mt-2 text-sm font-medium text-neutral-500">Build Performance Focus</dt>
				</div>
				<!-- Stat 4 -->
				<div class="border-l-2 border-indigo-600 pl-4">
					<dd class="text-3xl font-extrabold tracking-tight text-neutral-950 sm:text-4xl">15+</dd>
					<dt class="mt-2 text-sm font-medium text-neutral-500">Global Core Contributors</dt>
				</div>
			</div>
		</div>
	</section>

	<!-- Section 3: Leadership/Team Component -->
	<section class="bg-white py-16 sm:py-24 border-t border-b border-neutral-200/60">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="max-w-2xl">
			<h2 class="text-3xl font-bold tracking-tight text-neutral-950 sm:text-4xl">The minds behind the code</h2>
			<p class="mt-4 text-base sm:text-lg text-neutral-600 leading-relaxed">We are a small, entirely distributed team of software engineers, open-source contributors, and visual designers working across continents.</p>
		</div>

		<!-- 4-Column Profile Grid -->
		<div class="mt-12 grid grid-cols-1 gap-x-8 gap-y-12 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
			
			<!-- Team Member 1 -->
			<div class="space-y-4">
			<div class="overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-100 aspect-square">
				<img src="{{ asset('images/image-kira.jpg') }}" alt="Sarah Jenkins" class="h-full w-full object-cover">
			</div>
			<div>
				<h3 class="text-base font-bold text-neutral-950 tracking-tight">Sarah Jenkins</h3>
				<p class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Founder / Principal Architect</p>
			</div>
			</div>

			<!-- Team Member 2 -->
			<div class="space-y-4">
			<div class="overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-100 aspect-square">
				<img src="{{ asset('images/image-patrick.jpg') }}" alt="Marcus Chen" class="h-full w-full object-cover">
			</div>
			<div>
				<h3 class="text-base font-bold text-neutral-950 tracking-tight">Marcus Chen</h3>
				<p class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Head of Performance Engineering</p>
			</div>
			</div>

			<!-- Team Member 3 -->
			<div class="space-y-4">
			<div class="overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-100 aspect-square">
				<img src="{{ asset('images/image-jeanette.jpg') }}" alt="Elena Rostova" class="h-full w-full object-cover">
			</div>
			<div>
				<h3 class="text-base font-bold text-neutral-950 tracking-tight">Elena Rostova</h3>
				<p class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Lead Product Designer</p>
			</div>
			</div>

			<!-- Team Member 4 -->
			<div class="space-y-4">
			<div class="overflow-hidden rounded-2xl border border-neutral-200 bg-neutral-100 aspect-square">
				<img src="{{ asset('images/image-daniel.jpg') }}" alt="David Kim" class="h-full w-full object-cover">
			</div>
			<div>
				<h3 class="text-base font-bold text-neutral-950 tracking-tight">David Kim</h3>
				<p class="text-xs font-semibold text-indigo-600 uppercase tracking-wide">Core Ecosystem Relations</p>
			</div>
			</div>

		</div>
		</div>
	</section>

	<!-- Section 4: Modern CTA Footer Banner -->
	<section class="py-16 sm:py-24">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="rounded-3xl bg-neutral-950 p-8 sm:p-12 md:p-16 lg:flex lg:items-center lg:justify-between shadow-xl">
				<div class="max-w-xl">
				<h2 class="text-2xl font-bold tracking-tight text-white sm:text-3xl">Want to contribute to Dev.blog?</h2>
				<p class="mt-3 text-sm sm:text-base text-neutral-400 leading-relaxed">We are always hunting for technical writers to construct deep core execution walkthroughs. We pay premium industry rates for verified architectural documentation content.</p>
				</div>
				<div class="mt-8 flex flex-wrap gap-4 lg:mt-0 lg:shrink-0">
				<a href="#" class="rounded-lg bg-white px-4 py-2.5 text-sm font-semibold text-neutral-950 shadow-xs hover:bg-neutral-100 transition-colors">
					Read writer guidelines
				</a>
				<a href="#" class="rounded-lg border border-neutral-700 bg-neutral-900 px-4 py-2.5 text-sm font-semibold text-white hover:bg-neutral-800 hover:border-neutral-600 transition-all">
					Contact our editors
				</a>
				</div>
			</div>
		</div>
	</section>
</x-layout>