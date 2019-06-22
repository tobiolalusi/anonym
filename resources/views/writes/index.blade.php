@extends('layouts.app')

@section('title', 'Anonym Writes')

@section('content')
	<section class="w-full lg:w-3/4 px-4">
		@if($writes->count())
			@foreach($writes as $write)
				<div class="shadow hover:shadow-2xl bg-primary-tint p-6 my-4 border-l-4 border-primary-shade rounded-lg">
					<a href="#" class="block text-xl text-primary-shade font-lato font-bold">{{ $write->title }}</a>
					<p class="small text-primary-shade text-sm mt-3">{{ Str::limit($write->content, 200, '...') }}</p>
					<div class="mt-4 text-sm text-primary">
						<div class="inline-block mr-4">
							<span class="fas fa-comment-alt"></span>&nbsp;200
						</div>
						<div class="inline-block">
							<span class="fas fa-rss"></span>&nbsp;200
						</div>
					</div>
				</div>
			@endforeach
		@endif
	</section>
	<aside class="w-full lg:w-1/4 bg-primary-dark px-4">
	</aside>
@endsection
