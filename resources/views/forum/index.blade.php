@extends('layouts.app')
@section('title', 'Students forum')
@section('content')


<div class="container-xxl mt-5">
    <div class="row g-3">
        @foreach ($students as $student)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Student: <mark>{{$student->nom}}</mark></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-danger lead">
                        Records that have been permanently deleted will not be recoverable.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                       
                        <form action="{{route('etudiant.delete', $student->student_id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger"><span class="bi bi-trash3"></span></button>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
    
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nom }}</h5>
                    <p class="card-text"><strong>Since: </strong>{{ date('m-d-Y', strtotime($student->created_at)) }}</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="{{ route('etudiants.show', $student->student_id) }}" class="btn btn-outline-secondary me-2 text-nowrap" role="button">More info</a>
                        @if($student->student_id == Auth::id())
                        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="bi bi-trash3"></button>
                        @endif
                    </div>

                </div>
            </div>
        </div>
        
        @endforeach
    </div>
    
    
           
            
</div>

@endsection

