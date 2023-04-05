@extends('layouts.app')
@section('title', 'Mettre à jour')
@section('content')
<div class="container">
    <!-- <div class="row">
        <div class="col-12 text-center pt-2">
            <h1 class="display-one">
                Mettre à jour un article
            </h1>

        </div>
    </div>
    <hr> -->
    <div class="row justify-content-center mt-5 mb-3">
        <div class="col-md-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('PUT')
                    <div class="card-header h4">
                        @lang('lang.text_update_post')
                    </div>
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{$forumPost -> title}}">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message">Post</label>
                            <textarea class="form-control" id="message" name="body">{{$forumPost -> body}}</textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="title">{{ __('Title (Français)') }}</label>
                            <input type="text" id="title" name="title_fr" class="form-control" value="{{$forumPost -> title_fr}}">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message"> {{ __('Post (Français)') }}</label>
                            <textarea class="form-control" id="message" name="body_fr">{{$forumPost -> body_fr}}</textarea>
                        </div>
                        <div class="col-12">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="">Selectionner la categorie</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{$category->id == $forumPost->category_id ? 'selected' : ''}}>{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="@lang('lang.btn_update')" class="btn btn-success">
                        <a href="{{ route('etudiants.show', Auth::User()->id) }}" class="btn btn-secondary" role="button">
                        @lang('lang.btn_return')
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div><!--/container-->




@endsection