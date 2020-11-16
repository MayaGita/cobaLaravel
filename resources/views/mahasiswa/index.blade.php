@extends('layout/Main')
@section('title', 'Daftar Mahasiswa')

@section('container')
    <div class="container">
    	<div class="row">
    		<div class="col-10">
    			<h1 class="mt-3">Daftar Mahasiswa NEO UNIVERSITY</h1>
 
				<table class='table'>
				<thead class='thead-dark'>
				<tr>
				  <th scope='col'>No</th>
				  <th scope='col'>Nama</th>
				  <th scope='col'>NRP</th>
				  <th scope='col'>Email</th>
				  <th scope='col'>Jurusan</th>
				  <th scope='col'>aksi</th>
				</tr>

				<tbody>
				  
				  @foreach( $mahasiswa as $mhs)
				  
				<tr>
				  <th scope='row'>{{ $loop->iteration }}</th>
				  <td>{{ $mhs->nama }}</td>
				  <td>{{ $mhs->NRP }}</td>
				  <td>{{ $mhs->email }}</td>
				  <td>{{ $mhs->jurusan }}</td>	 
				  <td>
				    <a href="" class="badge badge-success">edit</a>
				    <a href="" class="badge badge-danger">delete</a>
				  </td>
				</tr>
				@endforeach
				</tbody>
				  
				</thead>

				
				</table>
    		</div>
    	</div>
    </div>
    
@endsection
    