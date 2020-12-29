@extends('layout/Main')
@section('title', 'Detail Mahasiswa')

@section('container')
<div class="wrapper">
    <div class="container">
    	<div class="row">
    		<div class="col-6">
    			<h1 class="mt-3">Detail Mahasiswa NEO UNIVERSITY</h1>
                <div class="span9">
				  <div class="content">
                  <div class="module">
                    <div class="module-body">
      
                      <div class="media-body">  
                      <div class="stream-headline">
                      <h5 class="stream-author">{{ $student->nama }} </h5>
                      <h6 class="card-subtitle mb-2 text-muted">{{$student->NRP}}</h6>
                      <br>
                      <p ><strong>E-mail  :</strong> {{$student->email}}</p>
                      <p ><strong>Jurusan :</strong> {{$student->jurusan}}</p>
                      <div class="stream-options">
                      <a href="{{ $student->id}}/edit" class="btn btn-primary btn-small">Edit</a>
                      <form action="{{$student->id}}" method="post" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-small">Delete</button>
                      </form>
                      </div>
                      <a href="/students" class="card-link">back</a>
                      </div>
                      </div>
                     </div>
                 </div>    
		         </div>  
                </div>  
         </div>

    	</div>
    </div>
</div>    
@endsection
    