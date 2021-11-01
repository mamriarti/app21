@foreach ($posts as $post)
	<article>
		<h1>
			<a href="/post/{{ $post->slug }}">
			{{ $post->title}}
			</a>
		</h1>
		<p> 
			By <a href="/author/{{ $post->author->username }}">{{ $post->author->name}}</a> in <a href="/category/{{ $post->category->slug}}">{{ $post->category->name }} </a>
		</p>
		<div>
			{{ $post->excerpt}}
		</div>
		
	</article>
   @endforeach
