@extends('layouts.app')

@section('title', 'Login - Anonym')

@section('content')
	<div class="w-full px-4 mt-4 text-primary-shade">
		<form method="POST" action="{{ route('login') }}" class="max-w-sm mx-auto p-8 bg-primary-tint border-primary-shade border-t-4 border-b-4 rounded-lg shadow-lg">
			@csrf
			<h1 class="font-lato font-black text-3xl text-center mb-4 tracking-wider">LOGIN</h1>
			<div class="my-4">
				<input type="text" name="username" autofocus onfocus="this.setSelectionRange(this.value.length, this.value.length);" autocomplete="off" class="w-full bg-transparent border-b-2 {{ $errors->has('username') ? 'border-red-700' : 'border-primary-shade' }} px-2 py-3 my-2 rounded-lg tracking-widest focus:outline-none" placeholder="Username" value="{{ old('username') }}" />
				@error('username')
					<div class="text-sm text-red-700">{{ $message }}</div>
				@enderror
			</div>
			<div class="my-4">
				<input type="password" name="password" class="w-full bg-transparent border-b-2 {{ $errors->has('password') ? 'border-red-700' : 'border-primary-shade' }} px-2 py-3 my-2 rounded-lg tracking-widest focus:outline-none" placeholder="Password" />
				@error('password')
					<div class="text-sm text-red-700">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-4 pretty p-default">
				<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}  />
				<div class="state p-primary-o">
					<label class="text-primary-shade hover:text-primary">Keep me logged in</label>
				</div>
			</div>
			<div class="flex justify-between items-center">
				<button type="submit" class="py-3 px-5 mt-2 mb-3 bg-primary-shade hover:bg-primary text-primary-light font-bold rounded-lg focus:outline-none">
					<span class="fas fa-sign-in-alt"></span>&nbsp;Login
				</button>
				<a href="#" class="text-sm text-primary hover:text-primary-shade">Forgot password?</a>
			</div>
		</form>
	</div>
@endsection
