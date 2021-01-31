@extends('layout.app', ['title' => 'Create Post'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">New post</div>
                    <div class="card-body">
                        <form action="/posts/store" method="post">
                            @csrf
                            @include('post.partial.form-control', ['submit' => 'Create'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
