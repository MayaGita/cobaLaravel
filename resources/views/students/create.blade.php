@extends('layout/Main')
@section('title', 'Form tambah data Mahasiswa')

@section('container')
<div class="wrapper">   
    <div class="container">
    	<div class="row">
    		<div class="col-10">
    			<h1 class="mt-3">Form tambah data Mahasiswa NEO UNIVERSITY</h1>
            </div>
              <div class="col-6">    
                <form method='POST' action="/students ">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror"  id="nama" placeholder="Masukan nama" name="nama" 
                    value="{{old('nama')}}" >
                    @error('nama') <div class="invalid-feedback">{{$message}} </div> @enderror
                </div>
                <div class="form-group">
                    <label for="NRP">NRP</label>
                    <input type="text" class="form-control  @error('NRP') is-invalid @enderror" id="NRP" placeholder="Masukan nomor NRP" name="NRP"
                    value="{{old('NRP')}}">
                    @error('NRP') <div class="invalid-feedback">{{$message}} </div> @enderror
                </div>
                <div class="form-group">
                    <label for="emai;">Email</label>
                    <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" placeholder="Masukan nama" name="email"
                    value="{{old('email')}}">
                    @error('email') <div class="invalid-feedback">{{$message}} </div> @enderror
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control  @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Masukan nama jurusan" name="jurusan"
                    value="{{old('jurusan')}}">
                    @error('jurusan') <div class="invalid-feedback">{{$message}} </div> @enderror
                </div>

                <button type='submit' class='btn btn-primary'>Tambah data</button>
              
                </form> 
		      </div>
    	</div>
    </div>
</div>    
@endsection
    