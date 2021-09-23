@extends('frontend.layout.app')

@section('content')
<div class="site-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12">
          <h2>Recent Posts</h2>
        </div>
      </div>
      <div class="row">
        @foreach ($posts as $post)
        <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="single.html"><img src="{{ asset($post->image) }}" alt="Image"
                  class="img-fluid rounded" width="370px" height="250px"></a>
              <div class="excerpt">
                <span class="post-category text-white mb-3" style="background-color: {{ $post->category->color }}">{{ $post->category->name }}</span>
                <h2><a href="single.html">{{ $post->title }}</a></h2>
                <div class="post-meta align-items-center text-left clearfix">
                  <span class="d-inline-block mt-1">By <a href="#">{{ $post->author->name }}</a></span>
                  <span>&nbsp;-&nbsp; {{ $post->created_at->format('d M Y') }}</span>
                </div>
                <p>{{ Str::substr($post->category->description , 0, 10 ) }}</p>
                <p><a href="#">Read More</a></p>
              </div>
            </div>
          </div>
        @endforeach

      </div>

    {{ $posts->links() }}

    </div>
  </div>
@endsection
