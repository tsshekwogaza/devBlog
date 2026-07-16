<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50">
    <head>
        <meta charset="utf-8">
		<title>Signin/Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}?v=1" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
        <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

	<body class="h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8 font-sans antialiased text-slate-900">

		<div class="sm:mx-auto w-full sm:max-w-md">
			<div class="mx-auto  flex items-center justify-center">
				<img src="{{ asset('images/blog.png') }}" class="w-20 h-10">
			</div>
			<h2 id="form-title" class="mt-1 text-center text-3xl font-bold tracking-tight text-slate-900">Sign in your account</h2>
			<p id="form-subtitle" class="mt-1 text-center text-sm text-slate-600">
				Or 
				<button onclick="toggleForms()" id="toggle-link" class="font-medium text-[#45b7be] hover:text-[#45a7be] focus:outline-hidden focus:underline cursor-pointer">create a new account</button>
			</p>
		</div>

		<div class="mt-8 sm:mx-auto w-full sm:max-w-md px-4 sm:px-0">
			<div class="bg-white py-8 px-4 shadow-sm rounded-2xl border border-slate-100 sm:px-10">
				<!-- LOGIN FORM -->
				<form id="login-form" class="space-y-6" action="/sessions" method="POST">
					@csrf
					
					<div>
						<input id="login-email" name="email" type="email" autocomplete="email" placeholder="Email address" required class="block w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-[#45b7be] focus:ring-2 focus:ring-indigo-200/50 focus:outline-hidden text-sm sm:leading-6 transition-all">
						<x-forms.error name="email" />
					</div>
					<div>
						<input id="login-password" name="password" type="password" autocomplete="current-password" placeholder="Password" required class="block w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-[#45b7be] focus:ring-2 focus:ring-indigo-200/50 focus:outline-hidden text-sm sm:leading-6 transition-all">
						<x-forms.error name="password" />
					</div>
					<div class="flex items-center justify-between">
						<div class="text-sm">
							<a href="/" class="font-medium text-[#45b7be] hover:text-[#45a7be]">Forgot password?</a>
						</div>
					</div>
					<div>
						<button type="submit" class="flex w-full justify-center rounded-lg bg-[#45b7be] px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-[#45a7be] focus-visible:outline-offset-2 focus-visible:outline-[#45b7be] transition-all cursor-pointer">Sign in</button>
					</div>
				</form>

				<!-- SIGNUP FORM (Hidden by default) -->
				<form id="signup-form" class="space-y-6 hidden" action="/register" method="POST">
					@csrf

					<div>
						<input id="signup-name" name="name" type="text" autocomplete="name" placeholder="Full Name" required class="block w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-[#45b7be] focus:ring-2 focus:ring-indigo-200/50 focus:outline-hidden text-sm sm:leading-6 transition-all">
						<x-forms.error name="name" />
					</div>

					<div>
						<input id="signup-email" name="email" type="email" autocomplete="email" placeholder="Email address" required class="block w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-[#45b7be] focus:ring-2 focus:ring-indigo-200/50 focus:outline-hidden text-sm sm:leading-6 transition-all">
						<x-forms.error name="email" />
					</div>

					<div>
						<input id="signup-password" name="password" type="password" placeholder="Password" required class="block w-full rounded-lg border border-slate-200 bg-white px-3 py-2 text-slate-900 placeholder-slate-400 focus:border-[#45b7be] focus:ring-2 focus:ring-indigo-200/50 focus:outline-hidden text-sm sm:leading-6 transition-all">
						<x-forms.error name="password" />
					</div>

					<div class="flex items-center">
						<input id="terms" name="terms" type="checkbox" required class="h-4 w-4 rounded border-slate-300 text-[#45b7be] focus:ring-[#45b7be]">
						<label for="terms" class="ml-2 block text-sm text-slate-700">I agree to the <a href="/" class="text-[#45b7be] hover:text-[#45b7be]">Terms</a> and <a href="/" class="text-[#45b7be] hover:text-[#45b7be]">Privacy Policy</a></label>
					</div>

					<div>
						<button type="submit" class="flex w-full justify-center rounded-lg bg-[#45b7be] px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-[#45a7be] focus-visible:outline-offset-2 focus-visible:outline-[#45b7be] transition-all cursor-pointer">Create account</button>
					</div>
				</enctype=>

				<!-- Social Logins -->
				{{-- <div class="mt-6">
					<div class="relative flex justify-center text-sm font-medium leading-6">
					<span class="bg-white px-6 text-slate-400 relative z-10">Or continue with</span>
					<div class="absolute inset-x-0 top-1/2 h-px bg-slate-200"></div>
					</div>

					<div class="mt-6 grid grid-cols-2 gap-4">
					<a href="#" class="flex w-full items-center justify-center gap-3 rounded-lg bg-white px-3 py-2 text-sm font-semibold text-slate-900 shadow-xs ring-1 ring-inset ring-slate-200 hover:bg-slate-50 focus-visible:ring-transparent transition-all">
						<svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12.24 10.285V13.4h6.887c-.275 1.565-1.88 4.604-6.887 4.604-4.33 0-7.866-3.577-7.866-8s3.536-8 7.866-8c2.46 0 4.105 1.025 5.047 1.926l2.427-2.334C17.955 2.192 15.34 1 12.24 1c-6.075 0-11 4.925-11 11s4.925 11 11 11c6.34 0 10.557-4.437 10.557-10.74 0-.723-.078-1.275-.173-1.636H12.24z"/></svg>
						<span class="text-sm font-semibold leading-6">Google</span>
					</a>

					<a href="#" class="flex w-full items-center justify-center gap-3 rounded-lg bg-white px-3 py-2 text-sm font-semibold text-slate-900 shadow-xs ring-1 ring-inset ring-slate-200 hover:bg-slate-50 focus-visible:ring-transparent transition-all">
						<svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
						<span class="text-sm font-semibold leading-6">GitHub</span>
					</a>
					</div>
				</div> --}}

			</div>
		</div>

		<script>
			let isLogin = true;
			const loginForm = document.getElementById('login-form');
			const signupForm = document.getElementById('signup-form');
			const formTitle = document.getElementById('form-title');
			const formSubtitle = document.getElementById('form-subtitle');
			const toggleLink = document.getElementById('toggle-link');

			function toggleForms() {
				isLogin = !isLogin;
				if (isLogin) {
					loginForm.classList.remove('hidden');
					signupForm.classList.add('hidden');
					formTitle.innerText = "Sign in your account";
					formSubtitle.innerHTML = 'Or <button onclick="toggleForms()" id="toggle-link" class="font-medium text-[#45b7be] hover:text-[#45a7be] focus:outline-hidden focus:underline cursor-pointer">create a new account</button>';
				} else {
					loginForm.classList.add('hidden');
					signupForm.classList.remove('hidden');
					formTitle.innerText = "Create an account";
					formSubtitle.innerHTML = 'Or <button onclick="toggleForms()" id="toggle-link" class="font-medium text-[#45b7be] hover:text-[#45a7be] focus:outline-hidden focus:underline cursor-pointer">sign in to existing account</button>';
				}
			}
		</script>
	</body>
</html>