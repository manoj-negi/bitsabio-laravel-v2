<h2>
    New {{ ucfirst($post->type) }} Published
</h2>

<h3>
    {{ $post->title }}
</h3>

<p>
    {{ $post->short_description }}
</p>

<a href="{{ url($post->type . '/' . $post->slug) }}">
    Read More
</a>