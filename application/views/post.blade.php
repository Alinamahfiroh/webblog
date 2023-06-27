@extends('template.frontend.theme')

@section('content')

@forelse($post_list as $post)
<article class="blog-post">
        <h2 class="blog-post-title">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ $post->created_at->isoFormat('MMMM DD, YYYY- h:mm:ss a') }}</p>
        <p class="blog-post-meta">{{ substr($post->article, 0, 200) }}</p>
        <a href="{{ site_url('post/baca/' . $post->id) }}">Baca selengkapnya</a>
    </article>
@empty
<div class="alert alert-info">Artikel yang anda cari tidak tersedia</div>
@endforelse
@endsection