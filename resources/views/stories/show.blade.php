@extends('layouts.app')

@section('title', $story->title.' - '.env('APP_NAME'))

@section('content')
	<section class="my-2 lg:my-4 text-primary-shade">
		<h1 class="text-3xl lg:text-5xl font-lato font-black leading-tight mr-4 lg:my-4">{{ $story->title }}</h1>
		<div class="my-4 text-primary">
			<div class="inline-block mr-2">
				<span class="fas fa-rss"></span>&nbsp;{{ $story->follows->count() }} followers
			</div>
			<div class="inline-block ml-2">
				<span class="fas fa-comment-alt"></span>&nbsp;0 comments
			</div>
		</div>
		@if(Auth::user())
			@if($user_follows_post = Auth::user()->followsThisStory($story->id)) @endif
			<form method="POST" action="{{ $user_follows_post ? route('follow.destroy', $user_follows_post->id) : route('follow.store') }}">
				@csrf
				@method($user_follows_post ? 'DELETE' : 'POST')
				<input type="hidden" name="story_id" value="{{ $story->id }}" />
				<input type="hidden" name="user_id" value="{{ Auth::user()->id }}" />
				<button type="submit" class="py-2 px-4 bg-primary-shade hover:bg-primary text-primary-light font-bold rounded-lg focus:outline-none text-sm">
					<span class="fas fa-rss"></span>&nbsp;{{ Auth::user()->followsThisStory($story->id) ? 'Unfollow' : 'Follow' }}
				</button>
			</form>
		@endif
		<p class="my-4 text-lg md:text-xl">{{ $story->content }}</p>
	</section>
@endsection
