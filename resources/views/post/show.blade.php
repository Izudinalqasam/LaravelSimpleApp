@extends('layout.app')

@section('title', $post->title)

@section('content')
    <div class="container">
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {{ $post->body }}
        </p>
        <div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-link text-danger btn-sm p-0" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Apakah anda benar-benar ingin menghapusnya ?
                            </h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-2">
                                <div>{{ $post->title }}</div>
                                <div class="text-black-50 form-text">
                                    <small class="fs-6"> Published: {{ $post->created_at->format('d F, Y') }}</small>
                                </div>
                            </div>
                            <form action="/posts/{{ $post->slug }}/delete" method="post">
                                @csrf
                                @method('delete')
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-danger me-2" type="submit">Ya</button>
                                    <button type="button" data-bs-dismiss="modal" class="btn btn-success">Tidak</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
