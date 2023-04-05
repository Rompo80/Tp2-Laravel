@extends('layouts.app')
@section('title', 'Blog List')
@section('content')
@php $lang = session()->get('lang') @endphp

<div class="container mt-5 mb-4">
    <!-- <div class="row">
        <div class="col-12 text-center pt-2">
            <h2 class="display-one">
                Publish your article
            </h2>
        </div>
    </div> -->
   
    <div class="row justify-content-center">
        <div class="col-md-6">
            @if($errors->any())
            @foreach($errors->all() as $error)
            <li class="text-danger">{{$error}}</li>
            @endforeach
            @endif
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        <h4> Publish your article</h4>
                   
                    </div>
                    <div class="card-body">
                        <div class="col-12 mb-3">
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message">Post</label>
                            <textarea class="form-control" id="message" name="body"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="title">{{ __('Title (French)') }}</label>
                            <input type="text" id="title" name="title_fr" class="form-control">
                        </div>
                        <div class="col-12 mb-3">
                            <label for="message"> {{ __('Post (French)') }}</label>
                            <textarea class="form-control" id="message" name="body_fr"></textarea>
                        </div>
                        <div class="col-12 mb-3">
                            <label for="category">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                <option value="Selectionner Categorie"></option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="@lang('lang.btn_publish')" class="btn btn-outline-primary">
                        <a href="{{ route('etudiants.show', Auth::User()->id) }}" class="btn btn-secondary" role="button">
                        @lang('lang.btn_return')
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection