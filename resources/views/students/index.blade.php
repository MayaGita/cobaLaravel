@extends('layout/Main')
@section('title', 'Daftar Mahasiswa')

@section('container')
<div class="wrapper">
    <div class="container">
    	<div class="row">
    		<div class="col-6">
        <div class="span9">
        <div class="content">
    			<h1 class="mt-3">Daftar Mahasiswa NEO UNIVERSITY</h1>
              
                <a href='/students/create' class="btn btn-primary my-3">Tambah data mahasiswa</a>
                <br>
               
                @if (session('status'))
                  <div class="alert alert-success">
                     {{ session('status')}}
                   </div>
                @endif   
               
                <div class="module-body table">
                 <table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered table-striped	 display"
                  width="100%">
                     <thead>
                     <tr>
                       <th>
                          Student name
                       </th>
                      <th>
                         courses
                      </th>
                     <th>
                          details
                    </th>
                                                
                       </tr>
                       </thead>

                @foreach ($students as $student) 
                <tbody class="list-group-item d-flex justify-content-between align-items-center">
                <tr class="odd gradeX">
                  <td> {{$student->nama}} </td>
                  <td> {{$student->jurusan}}</td>
                  <td>  <a href='/students/{{$student->id}}' class="badge badge-info ">details</a></td>
                    </tr>    
                </tbody>
                @endforeach     
               </table>
               </div>
              </div>
            </div>
        	</div>
    	  </div>
      </div>
 </div>   
@endsection
    