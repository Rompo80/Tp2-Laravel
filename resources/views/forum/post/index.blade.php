<!-- extends va toujours regarder a partir le view -->
@extends('layouts.app')
@section('title', 'Post List')
@section('content')

<div class="container-xxl mt-5">
    <div class="row g-3">
        @foreach ($posts as $post)
        <!-- <a href="{{ route('post.show', $post->id) }}"> -->
            <div class="col-sm-6">
                <div class="card shadow-sm">
                
                    <div class="card-header post-header bg-light d-flex  align-items-center">
                        <img src="https://picsum.photos/80/80.webp" alt="rundom_avatar_img" class="rounded-circle mr-2">
                        <span class="text-dark h5 mb-0" style="margin-left: 10px">{{ $post->user->name }}</span>
                        <span class="text-muted ml-4 mb-0" style="margin-left: 20px">{{ date('m-d-Y', strtotime($post->created_at)) }}</span>
                    </div>
                <div class="card-body">
                <a href="{{ route('post.show', $post->id) }}" style="text-decoration: none;">
                    <h3 class="card-title" style="color: black;">{{ $post -> title }}</h3>
                    <p class="text-secondary h5">{{$post -> body}}</p>
                </a>
                </div>
            
           
            </div>
        </div>
        <!-- </a> -->
        @endforeach
    </div>
</div>

@endsection
