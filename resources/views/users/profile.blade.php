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
                    <h1 class="text-3xl font-bold tracking-tight text-slate-900">Edit Profile <span class="font-mono font-normal text-slate-400">ID: #{{ Auth::user()->id }}</span></h1>
                    <p class="mt-2 text-sm text-slate-500">View, and make changes to your account credentials.</p>
                </div>

                <!-- Form -->
                <form action="/users/{{ Auth::user()->id }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('PATCH')

                    <!-- Author Information -->
                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
                        <h2 class="text-base font-semibold text-slate-900 mb-4">Author Information</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div class="relative h-12 w-12 overflow-hidden rounded-full border border-slate-200 bg-slate-100">
                                    <img src="/storage/{{ Auth::user()->avatar }}" alt="Author avatar" class="h-full w-full object-cover">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-indigo-600 hover:text-indigo-500 cursor-pointer">
                                        <input name="avatar" type="file">
                                    </label>
                                    <p class="text-xs text-slate-400 mt-0.5">Square PNG, JPG, WEBP up to 2MB</p>
                                </div>

                                <x-forms.error name="avatar" />
                            </div>

                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" required class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">
                                    
                                    <x-forms.error name="authors_name" />
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" required class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">

                                     <x-forms.error name="email" />
                                </div>
                            </div>

                            <div>
                                <label for="profession" class="block text-sm font-medium text-gray-700 mb-1">Profession</label>
                                <input type="text" name="profession" id="profession" value="{{ Auth::user()->profession }}" placeholder="e.g. Full Stack Developer, Writer" required  class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">

                                <x-forms.error name="profession" />
                            </div>

                            <div>
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">Bio</label>
                                <textarea  name="bio" id="bio" rows="4" value="{{ Auth::user()->bio }}" required  class="w-full rounded-lg border border-slate-300 px-3 py-2 text-sm shadow-xs focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">{{ Auth::user()->bio }}</textarea>

                                 <x-forms.error name="bio" />
                            </div>


                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="github_handle" class="block text-sm font-medium text-gray-700 mb-1">GitHub Username</label>
                                    <div class="flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">github.com/</span>
                                        <input type="text" name="github_handle" id="github_handle" value="{{ Auth::user()->github_handle }}" required class="w-full border border-slate-300 px-3 py-2 text-sm shadow-xs rounded-r-md focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">
                                    </div>

                                     <x-forms.error name="github_handle" />
                                </div>

                                <div>
                                    <label for="twitter_handle" class="block text-sm font-medium text-gray-700 mb-1">X / Twitter Username</label>
                                    <div class="flex rounded-md shadow-sm">
                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">@</span>
                                        <input type="text" name="twitter_handle" id="twitter_handle" value="{{ Auth::user()->twitter_handle }}" required class="w-full border border-slate-300 px-3 py-2 text-sm shadow-xs rounded-r-md focus:border-indigo-500 focus:ring-2 focus:ring-indigo-100 focus:outline-hidden transition-all">
                                    </div>

                                     <x-forms.error name="twitter_handle" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">                        
                        <div class="space-y-4">
                            <div class="grid grid-cols-2 gap-4 text-xs">
                                <div>
                                    <span class="block text-slate-400 font-medium uppercase tracking-wider">Created At</span>
                                    <span class="block text-slate-600 mt-0.5 font-mono">{{ Auth::user()->created_at }}</span>
                                </div>
                                <div>
                                    <span class="block text-slate-400 font-medium uppercase tracking-wider">Last Updated</span>
                                    <span class="block text-slate-600 mt-0.5 font-mono">{{ Auth::user()->updated_at }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-xl border border-slate-200 bg-white p-6 shadow-xs">
                        <h3 class="text-lg font-medium text-gray-900 mb-4">Update Password</h3>
                        <p class="text-xs text-gray-500 mb-4">Leave these fields blank if you don't want to change your password.</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
                                <input type="password" name="password" id="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                            </div>

                            <div>
                                <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 outline-none">
                            </div>
                        </div>
                    </div>

                    <div class="flex items-center justify-end gap-3 pt-2">
                        <button type="submit" form="delete-user"
                            class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-slate-300 rounded-lg shadow-2xs hover:bg-gray-50 active:bg-red-100 transition cursor-pointer">
                            Cancel
                        </button>

                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-indigo-600 rounded-lg shadow-2xs hover:bg-indigo-500 active:bg-indigo-700 transition cursor-pointer">
                            Save Changes
                        </button>
                    </div>
                </form>

                <form action="/" method="POST" id="delete-user" class="space-y-6">
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