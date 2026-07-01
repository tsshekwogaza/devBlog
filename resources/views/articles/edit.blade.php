<x-layout title="Edit Article">
    <main class="mx-auto max-w-7xl px-4 py-9 sm:px-4 lg:px-8 lg:py-20">
        <div class="grid grid-cols-1 gap-y-12 lg:grid-cols-12 lg:gap-x-12">

            <aside class="mt-5 lg:col-span-2">
                <a href="/articles" class="sticky top-28 inline-flex items-center gap-2 text-sm font-medium text-neutral-500 transition-colors hover:text-neutral-950">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                    Back to all articles
                </a>
            </aside>
            
            <main class="lg:col-span-8">
                <!-- Page Header -->
                <div class="mb-8">
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900">Edit Article <span class="font-mono font-normal text-slate-400">ID: #{{ $article->id }}</span></h1>
                    <p class="mt-2 text-sm text-slate-500">Modify your content, category, and update your published article.</p>
                </div>

                <!-- Form -->
                <form action="/articles/{{ $article->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PATCH')

                    <!-- Cover Image Upload Area -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
                        <h2 class="text-base font-semibold text-slate-900 mb-1">Article Image</h2>
                        <p class="text-xs text-slate-500 mb-4">This image will appear at the top of your article.</p>
                        
                        <div class="group relative flex flex-col items-center justify-center rounded-lg border-2 border-dashed border-slate-300 p-6 text-center hover:border-slate-400 transition-colors bg-slate-50/50">
                            <div class="relative mb-4 h-40 w-full overflow-hidden rounded-md bg-slate-100 border border-slate-200">
                                <img src="/storage/{{ $article->image }}" alt="Current image" class="h-full w-full object-cover">
                                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 flex items-center justify-center transition-opacity">
                                    <span class="text-xs font-medium text-white rounded-sm">
                                        <input type="file" name="image" value="{{ $article->image }}" class="p-16">
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex text-sm text-slate-600">
                                <p class="pl-1">Click  to upload or drag and drop</p>
                            </div>
                            <p class="text-xs text-slate-500 mt-1">PNG, JPG, WEBP up to 5MB</p>
                        </div>

                        <x-forms.error name="image" />
                    </div>

                    <!-- Author Information -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
                        <h2 class="text-base font-semibold text-slate-900 mb-4">Author Information</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="relative h-12 w-12 overflow-hidden rounded-full border border-slate-200 bg-slate-100">
                                    <img src="/storage/{{ $article->authors_image }}" alt="Author avatar" class="h-full w-full object-cover">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-indigo-600 hover:text-indigo-500 cursor-pointer">
                                        <input id="authors_image" name="authors_image" type="file">
                                    </label>
                                    <p class="text-xs text-slate-400 mt-0.5">Square JPG/PNG</p>
                                </div>

                                <x-forms.error name="authors_image" />
                            </div>

                            <div>
                                <label for="authors_name" class="block text-sm font-medium text-slate-700 mb-1.5">Author Name</label>
                                <input type="text" name="authors_name" value="{{ $article->authors_name }}" required class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">
                            
                                <x-forms.error name="authors_name" />
                            </div>

                            <div>
                                <label for="authors_profession" class="block text-sm font-medium text-slate-700 mb-1.5">Author Profession</label>
                                <input type="text" name="authors_profession" value="{{ $article->authors_profession }}" required class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">
                            
                                <x-forms.error name="authors_profession" />
                            </div>
                        </div>
                    </div>

                    <!-- Title & Category Inputs -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
                        <h2 class="text-base font-semibold text-slate-900 mb-4">Article Settings</h2>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="category_id" class="block text-sm font-medium text-slate-700 mb-1.5">Category</label>
                                <select id="category_id" name="category_id" required class="w-full rounded-lg border border-slate-300 bg-white px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">
                                    <option value="">Select a category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>

                                <x-forms.error name="category_id" />
                            </div>

                            <div class="grid grid-cols-2 gap-4 text-xs">
                                <div>
                                    <span class="block text-slate-400 font-medium uppercase tracking-wider">Created At</span>
                                    <span class="block text-slate-600 mt-0.5 font-mono">{{ $article->created_at }}</span>
                                </div>
                                <div>
                                    <span class="block text-slate-400 font-medium uppercase tracking-wider">Last Updated</span>
                                    <span class="block text-slate-600 mt-0.5 font-mono">{{ $article->updated_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Content Editor Panel -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
                        <div class="space-y-5">
                            <div>
                                <h2 class="text-base font-semibold text-slate-900 mb-4">Post Content</h2>
                                <label for="title" class="block text-sm font-medium text-slate-700 mb-1.5">Article Title</label>
                                <input type="text" id="title" name="title" value="{{ $article->title }}" required class="w-full px-3.5 py-2 text-base bg-white border border-slate-300 rounded-lg shadow-2xs placeholder-slate-400 focus:outline-hidden focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition">
                            </div>
                        </div>

                        <x-forms.error name="title" />
                    </div>

                    <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                        <div class="bg-slate-50 border-b border-slate-200 px-4 py-2.5 flex flex-wrap items-center gap-1.5">
                            <button type="button" class="p-1.5 text-slate-600 rounded-md hover:bg-slate-200/70 hover:text-slate-900 transition">
                                <span class="font-bold text-sm block min-w-5">B</span>
                            </button>
                            <button type="button" class="p-1.5 text-slate-600 rounded-md hover:bg-slate-200/70 hover:text-slate-900 transition">
                                <span class="italic text-sm block min-w-5">I</span>
                            </button>
                            <div class="w-px h-5 bg-slate-300 mx-1"></div>
                            <button type="button" class="p-1.5 text-slate-600 rounded-md hover:bg-slate-200/70 hover:text-slate-900 transition">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" /></svg>
                            </button>
                            <button type="button" class="p-1.5 text-slate-600 rounded-md hover:bg-slate-200/70 hover:text-slate-900 transition">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75L22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3l-4.5 16.5" /></svg>
                            </button>
                        </div>
                        <div>
                            <textarea type="text" id="text" name="text" rows="12" required class="w-full px-4 py-4 text-base bg-white border-0 placeholder-slate-400 focus:outline-hidden focus:ring-0 resize-y min-h-62.5 font-sans leading-relaxed">{{ $article->text }}</textarea>
                        </div>
                    </div>

                    <x-forms.error name="text" />


                    <div class="flex items-center justify-end gap-3 pt-2">
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg shadow-2xs hover:bg-indigo-500 active:bg-indigo-700 transition cursor-pointer">
                            Save Changes
                        </button>
                        <button type="submit" form="delete-article"
                            class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-slate-300 rounded-lg shadow-2xs hover:bg-red-500 active:bg-red-100 transition cursor-pointer">
                            Delete
                        </button>
                    </div>
                </form>

                <form action="/articles/{{ $article->id }}" method="POST" id="delete-article" class="space-y-6">
                    @csrf
                    @method('DELETE')
                </form>
            </main>

            <aside class="lg:col-span-2">
				<div class="sticky top-24 rounded-2xl border border-neutral-200 bg-white p-6 shadow-xs">
					<h3 class="text-sm font-bold text-neutral-950 uppercase tracking-wider">Editor's Guidelines</h3>
					<p class="mt-2 text-xs text-neutral-600 leading-relaxed">Receive architectural walkthroughs, deep-dive component builds, and systems advice directly in your inbox twice a month.</p>
					<p class="mt-2 text-xs text-neutral-600 leading-relaxed">Receive architectural walkthroughs, deep-dive component builds, and systems advice directly in your inbox twice a month.</p>
				</div>
			</aside>
        </div>
    </main>
</x-layout>