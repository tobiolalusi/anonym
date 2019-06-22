<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>@yield('title', 'Anonym')</title>
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}" />
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/font-awesome/css/all.css') }}" />
</head>
<body class="bg-primary-light pt-16">
	<nav class="bg-primary fixed w-full p-5 top-0 border-b-2 border-primary-shade">
		<div class="container mx-auto flex items-center justify-between flex-wrap">
			<div class="flex items-center flex-shrink-0 text-primary-light mr-6">
				<a href="{{ route('home') }}" class="font-lato font-black tracking-widest text-xl">ANONYM</a>
			</div>
			<div class="flex items-center text-sm">
				<a href="{{ route('login') }}" class="block lg:inline-block {{ Request::url() === route('login') ? 'text-primary-light' : 'text-primary-shade' }} hover:text-primary-light transition-color mx-2">
					<span class="fas fa-user text-xl sm:text-sm mt-2 ml-4"></span>
					<span class="hidden sm:inline-block ml-1">LOGIN</span>
				</a>
				<a href="{{ route('register') }}" class="block sm:inline-block text-primary-shade hover:text-primary-light transition-color mx-2">
					<span class="fas fa-user-plus text-xl sm:text-sm mt-2 ml-4"></span>
					<span class="hidden sm:inline-block ml-1">REGISTER</span>
				</a>
			</div>
		</div>
	</nav>
	<main class="container mx-auto lg:flex pt-2">
		@yield('content')
	</main>
</body>
</html>


