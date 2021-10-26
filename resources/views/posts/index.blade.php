@foreach ($posts as $post)
	<article>
		<h1>{{ $post->title}}</h1>
		<div>
			{{ $post->excerpt}}
		</div>
		
	</article>
	@endforeach
