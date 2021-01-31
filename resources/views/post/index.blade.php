@extends('layout.app')

@section('content')
    <div class="container">
        @if ($posts->count())
            <div class="d-flex justify-content-between">
                <div>
                    <h4>All Post</h4>
                    <hr>
                </div>
                <div>
                    <a href="/posts/create" class="btn btn-primary">New Post</a>
                </div>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <div class="card-header">

                                {{ $post->title }}

                            </div>
                            <div class="card-body">
                                <div class="div">
                                    {{ Str::limit($post->body, 100) }}
                                </div>

                                <a href="/post/{{ $post->slug }}">Read more...</a>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                Published on {{ $post->created_at->format('d F, Y') }}
                            <a href="/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-success">Edit</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="d-flex justify-content-center">
                <div>
                    {{ $posts->links() }}
                </div>
            </div>
        @else
            <div class="d-flex justify-content-between">
                <div class="alert alert-info">
                    There are no posts.
                </div>
                <div>
                    <a href="/posts/create" class="btn btn-primary">New Post</a>
                </div>
            </div>

        @endif
    </div>
@endsection
