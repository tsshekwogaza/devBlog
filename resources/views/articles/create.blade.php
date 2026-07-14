<x-layout title="Create Article">

    <main class="flex-1 max-w-3xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-10">        
        <div class="mb-8">
            <h1 class="text-3xl font-bold tracking-tight text-slate-900">Create New Article</h1>
            <p class="mt-2 text-sm text-slate-500">Draft your content, add category, and publish it to your live feed.</p>
        </div>

        <form action="/articles" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <!-- Cover Image Upload Area -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-xs">
                <label class="block text-sm font-medium text-slate-700 mb-2">Article image</label>
                <div class="border-2 border-dashed border-slate-200 rounded-lg p-8 flex flex-col items-center justify-center bg-slate-50/50 hover:bg-slate-50 transition cursor-pointer group">
                    <svg class="w-8 h-8 text-slate-400 group-hover:text-indigo-500 transition mb-3" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.183 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.183 0L21.75 16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                    </svg>
                    <p class="text-sm font-medium text-slate-700">Click to upload or drag and drop</p>
                    <input type="file" name="image" required class="w-full rounded-lg border border-gray-300 p-3">
                    <p class="text-xs text-slate-400 mt-1">PNG, JPG, or WEBP up to 2MB</p>
                </div>

                <x-forms.error name="image" />
            </div>

            <!-- Title & Category Inputs -->
            <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-xs grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label for="title" class="block text-sm font-medium text-slate-700 mb-1.5">Article title</label>
                    <input type="text" id="title" name="title" placeholder="e.g., Getting Started with Python v4.0" required class="w-full px-3.5 py-2 text-base bg-white border border-slate-300 rounded-lg shadow-2xs placeholder-slate-400 focus:outline-hidden focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition">
                   
                    <x-forms.error name="title" />
                </div>
                
                <div>
                    <label for="category_id" class="block text-sm font-medium text-slate-700 mb-1.5">Article category</label>
                    <select id="category_id" name="category_id" required class="w-full px-3.5 py-2 text-base bg-white border border-slate-300 rounded-lg shadow-2xs focus:outline-hidden focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 transition appearance-none">
                        <option value="">Select a category</option>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>

                    <x-forms.error name="category_id" />
                </div>
            </div>

            <!-- Content Editor Panel -->
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
                    <textarea type="text" id="text" name="text" rows="12" required class="w-full px-4 py-4 text-base bg-white border-0 placeholder-slate-400 focus:outline-hidden focus:ring-0 resize-y min-h-62.5 font-sans leading-relaxed"></textarea>
                </div>
            </div>

            <x-forms.error name="text" />

            {{-- <div class="bg-white rounded-xl border border-slate-200 shadow-xs overflow-hidden">
                <div class="bg-slate-50 border-b border-slate-200 px-4 py-2.5 flex flex-wrap items-center gap-1.5">
                    <button type="button" class="p-1.5 text-slate-600 rounded-md transition">Write your content here... Support's Markdown formatting.
                    </button>
                </div>
                <div>
                    <textarea type="text" id="text" name="text" rows="12" required class="w-full px-4 py-4 text-base bg-white border-0 placeholder-slate-400 focus:outline-hidden focus:ring-0 resize-y min-h-62.5 font-sans leading-relaxed tinymce"></textarea>
                </div>              
            </div>
            <x-forms.error name="text" /> --}}

            <div class="flex items-center justify-end gap-3 pt-2">
                <button type="button" class="px-4 py-2 text-sm font-medium text-slate-700 bg-white border border-slate-300 rounded-lg shadow-2xs hover:bg-slate-50 active:bg-slate-100 transition cursor-pointer">
                    Save draft
                </button>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg shadow-2xs hover:bg-indigo-500 active:bg-indigo-700 transition cursor-pointer">
                    Publish
                </button>
            </div>
        </form>
    </main>

    {{-- <script src="/tinymce/tinymce.min.js"></script> --}}
    {{-- <script src="/tinymce/init-tinymce.min.js"></script> --}}

</x-layout>