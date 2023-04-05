@extends('layouts.app')
@section('title', 'Mettre à jour')
@section('content')
<div class="container-xxl mt-5">
    
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <form  method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-header text-center">
                       <h5>@lang('lang.text_update_info')</h5> 
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label" for="nom">Name</label>
                            <input type="text" name="nom" id="nom" class="form-control" value="{{ $etudiant->nom }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="dob">Date of Birth</label>
                            <input type="date" name="dob" id="dob" class="form-control" value="{{ $etudiant->dob }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="phone">Phone</label>
                            <input type="phone" name="phone" id="phone" class="form-control" value="{{ $etudiant->phone }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $etudiant->email }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ $etudiant->address }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="ville">City</label>
                            <select name="ville" id="ville" class="form-control">
                                @foreach($villes as $ville)
                                <option value="{{ $ville->id }}" {{ $etudiant->ville_id == $ville->id ? 'selected' : '' }}>
                                    {{ $ville->nom }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="@lang('lang.btn_update')" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>








@endsection