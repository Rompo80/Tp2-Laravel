@extends('layouts.app')
@section('title', 'Show Post')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center pt-5">
            <div class="display-5 mt-5">
                <!-- {{ config('app.name') }} -->
            </div>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success')}}
            </div>
            @endif
        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header bg-light h5">
                    {{ $post -> title}}
                </div>
                <div class="card-body">
                    <h3>{{ $post -> article }}</h3>
                    <p>{{ $post -> body }}</p>
                    <p><strong>Category :</strong>
                        @isset($post->postHasCategory)
                        {{ $post->postHasCategory->category}}
                        @endisset
                    </p>
                    <p><strong>Author :</strong>
                        @isset($post -> postHasUser)
                        {{$post ->postHasUser->name}}
                        @endisset
                    </p>
                </div>
                @if($post->user_id == Auth::id())
                <div class="card-footer">
                    <a href="{{route('post.edit', $post->id)}}" class="btn btn-dark w-25">@lang('lang.btn_update')</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-trash3"></span>
                    </button>
                    <a href="{{ route('etudiants.show', Auth::User()->id) }}" class="btn btn-secondary ms-5" role="button">
                            @lang('lang.btn_return')
                        </a>
                    @else
                    <a href="{{route('posts.index')}}" class="btn btn-secondary">Go Back</a>
                    @endif
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Post</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure to delete this post: {{$post->title}}
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                            <form action="{{route('post.delete', ['id' => $post->id, 'user_id' => $post->user_id])}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete" class="btn btn-danger btn-sm">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





