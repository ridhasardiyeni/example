@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<link rel="stylesheet" href="">
				<h2>Tambah Data Mahasiswa</h2>
				<hr>
				<br>
		</div>
	</div>


	@if($errors->any())
		<div class="alert alert-danger">
			<strong>Whoops! </strong>  there where some problems with you input.<br>
			<ul>
				@foreach($errors as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{route('mahasiswa.store')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-12">
				<strong>NIM</strong>
				<input class="form-control" type="text" name="nim"  style="width:50%">
				<br>
			</div>
            <div class="col-md-12">
				<strong>Nama Mahasiswa</strong>
				<input class="form-control" type="text" name="nama_mahasiswa"  style="width:50%">
				<br>
			</div>
            <div class="col-md-12">
				<strong>JK</strong>
				<input class="form-control" type="text" name="jk"  style="width:50%">
				<br>
			</div>
            <div class="col-md-12">
				<strong>Alamat</strong>
				<textarea class="form-control" type="text" rows="5" name="alamat"  style="width:50%"></textarea>
				<br>
			</div>
			
			<div class="col-md-12">
				<br>
			
				<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save</button>
				<a href="{{route('mahasiswa.index')}}" class="btn btn-sm  btn-success"><i class="fa fa-arrow-left"></i> Back</a>
				
			</div>
		</div>
	</form>

</div>
@endsection