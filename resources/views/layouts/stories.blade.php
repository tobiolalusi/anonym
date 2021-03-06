<section class="flex flex-wrap lg:my-2">
	@if($stories->count())
		@foreach($stories as $story)
			<div class="w-full md:w-1/2 lg:w-1/3 my-2 lg:my-4 md:px-2 lg:px-4">
				<div class="h-full flex flex-col justify-between shadow hover:shadow-2xl bg-primary-tint p-6 border-l-4 border-primary-shade rounded-lg">
					<div>
						<a href="{{ route('stories.show', $story->id) }}" class="block text-xl text-primary-shade font-lato font-bold">{{ $story->title }}</a>
						<p class="small text-primary-shade text-sm mt-3">{{ Str::limit($story->content, 200, '...') }}</p>
					</div>
					<div class="mt-4 text-sm text-primary">
						<div class="inline-block mr-4">
							<span class="fas fa-comment-alt"></span>&nbsp;200
						</div>
						<div class="inline-block">
							<span class="fas fa-rss"></span>&nbsp;{{ $story->num_follows }}
						</div>
					</div>
				</div>
			</div>
		@endforeach
	@endif
</section>
