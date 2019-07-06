@extends('layouts.app')

@section('title', Auth::user()->username.' - '.env('APP_NAME'))

@section('content')
	<section class="my-2 lg:my-4 text-primary-shade">
		<form method="POST" action="{{ route('stories.store') }}" class="max-w-3xl mx-auto p-8 bg-primary-tint border-primary-shade border-t-4 border-b-4 rounded-lg shadow-lg">
			@csrf
			<h1 class="font-lato font-black text-3xl text-center mb-4 tracking-wider uppercase">Write story</h1>
			<div class="mt-4">
				<input type="text" name="title" autocomplete="off" class="w-full bg-transparent border-b-2 {{ $errors->has('title') ? 'border-red-700' : 'border-primary-shade' }} px-2 py-3 my-2 rounded-lg font-lato font-bold text-xl focus:outline-none" placeholder="Story's title" value="{{ old('title') }}" />
				@error('title')
				<div class="text-sm text-red-700">{{ $message }}</div>
				@enderror
			</div>
			<div class="mb-4 lg:mt-2">
				<textarea name="content" rows="4" class="w-full bg-transparent border-b-2 {{ $errors->has('content') ? 'border-red-700' : 'border-primary-shade' }} px-2 py-3 my-2 rounded-lg tracking-wider focus:outline-none" placeholder="What's your story?">{{ old('content') }}</textarea>
				@error('content')
					<div class="text-sm text-red-700">{{ $message }}</div>
				@enderror
			</div>
			<div class="flex justify-between items-center">
				<button type="submit" class="py-3 px-5 mt-2 mb-3 bg-primary-shade hover:bg-primary text-primary-light font-bold rounded-lg focus:outline-none">
					<span class="fas fa-paper-plane"></span>&nbsp;&nbsp;Create story
				</button>
			</div>
		</form>
	</section>
	<section class="my-6 lg:my-8">
		<h1 class="uppercase font-lato text-primary-shade text-4xl tracking-wider font-black">
			Following
		</h1>
		<hr class="border-primary-shade border-t-2" />
		@include('layouts.stories', ['stories' => Auth::user()->followedStories()])
	</section>
@endsection
