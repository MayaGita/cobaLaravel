@extends('layout/Main')
@section('title', 'Detail Mahasiswa')

@section('container')
    <div class="container">
    	<div class="row">
    		<div class="col-6">
    			<h1 class="mt-3">Detail Mahasiswa NEO UNIVERSITY</h1>

                <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{ $student->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{$student->NRP}}</h6>
                    <br>
                    <p class="card-text"><strong>E-mail  :</strong> {{$student->email}}</p>
                    <p class="card-text"><strong>Jurusan :</strong> {{$student->jurusan}}</p>
                    <a href="{{ $student->id}}/edit" class="btn btn-primary">Edit</a>
                    <form action="{{$student->id}}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="/students" class="card-link">back</a>
                </div>
                </div>
		</div>
    	</div>
    </div>
    
@endsection
    