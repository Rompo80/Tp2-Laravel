@extends('layouts.app')
@section('title', 'Inscription')
@section('content')
<div class="container-xxl mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form action="{{ route('etudiants.store') }}" method="POST">
                    @csrf
                    <div class="card-header text-center">
                        <h5>@lang('lang.text_info_registration')</h5>
                        
                    </div>
                    
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="dob">Anniversaire</label>
                            <input type="date" name="dob" id="dob" class="form-control">
                        </div>
                            
                     
                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Courriel</label>
                            <input type="email" name="email" id="email" class="form-control">
                            
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label" for="address">Adresse</label>
                            <input type="text" name="address" id="address" class="form-control">
                        </div> 
                        <div class="mb-3"> 
                        <label class="form-label" for="ville">Ville</label>
                            <select class="form-control" name="ville" id="ville">
                                @foreach($villes as $ville)
                                <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="@lang('lang.btn_save')" class="btn btn-success me-2">
                        <a class="btn btn-secondary" href="{{ route('forum.index') }}">@lang('lang.btn_return')</a>
                    </div>
                </form>
            </div>
                          
                      
                        
        </div>
    </div>
</div>
@endsection