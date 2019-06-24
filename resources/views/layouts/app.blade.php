<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title', env('APP_NAME'))</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/font-awesome/css/all.css') }}" />
</head>
<body class="bg-primary-light pt-16">
	<nav class="bg-primary fixed w-full p-5 top-0 border-b-2 border-primary-shade">
		<div class="container mx-auto flex items-center justify-between flex-wrap">
			<div class="flex items-center flex-shrink-0 text-primary-light mr-6">
				<a href="{{ route('home') }}" class="font-lato font-black tracking-widest text-xl">{{ strtoupper(env('APP_NAME')) }}</a>
			</div>
			<div class="flex items-center text-sm">
				@guest
					<a href="{{ route('login') }}" class="block lg:inline-block {{ Request::url() === route('login') ? 'text-primary-light' : 'text-primary-shade hover:text-primary-light transition-color mx-2' }}">
						<span class="fas fa-sign-in-alt text-xl sm:text-sm mt-2 ml-4"></span>
						<span class="hidden sm:inline-block ml-1">LOGIN</span>
					</a>
					<a href="{{ route('register') }}" class="block sm:inline-block {{ Request::url() === route('register') ? 'text-primary-light' : 'text-primary-shade hover:text-primary-light transition-color mx-2' }}">
						<span class="fas fa-user-plus text-xl sm:text-sm mt-2 ml-4"></span>
						<span class="hidden sm:inline-block ml-1">REGISTER</span>
					</a>
				@elseauth
					<a href="{{ route('profile') }}" class="lg:inline-block text-primary-light mx-2">
						<span class="fas fa-user text-xl sm:text-sm mt-2 ml-4"></span>
						<span class="hidden sm:inline-block ml-1 font-bold">{{ strtolower(Auth::user()->username) }}</span>
					</a>
					<form method="POST" action="{{ route('logout') }}" class="block sm:inline-block text-primary-shade hover:text-primary-light transition-color mx-2">
						@csrf
						<button type="submit" class="focus:outline-none">
							<span class="fas fa-sign-out-alt text-xl sm:text-sm mt-2 ml-4"></span>
							<span class="hidden sm:inline-block ml-1">LOGOUT</span>
						</button>
					</form>
				@endguest
			</div>
		</div>
	</nav>
	<main class="container mx-auto px-2">
		@yield('content')
	</main>
</body>
</html>


