<h1> 
			By {{ $author->name}} 
</h1>


@foreach ($posts as $post)
	<article>
		<h1>
			<a href="/post/{{ $post->slug }}">
			{{ $post->title}}
			</a>
		</h1>
		in <a href="/categories/{{ $post->category->slug}}">{{ $post->category->name }} </a>
		<div>
			{{ $post->excerpt}}
		</div>
		
	</article>
   @endforeach
