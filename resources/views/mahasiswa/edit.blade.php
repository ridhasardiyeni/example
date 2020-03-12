@extends('layouts.app')
@section('content')

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Update Kategori</h3>
				<hr>
				<link rel="stylesheet" href="">
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
	<form action="{{route('mahasiswa.update',$mahasiswa->id_mahasiswa)}}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')
		<div class="row">
			<div class="col-md-12">
				<strong>NIM</strong>
				<input class="form-control" type="text" name="nim" style="width:50%"  value="{{$mahasiswa->nim}}">
			</div>
            <div class="col-md-12">
				<strong>Nama Mahasiswa</strong>
				<input class="form-control" type="text" name="nama_mahasiswa" style="width:50%"  value="{{$mahasiswa->nama_mahasiswa}}">
			</div>
            <div class="col-md-12">
				<strong>JK</strong>
				<input class="form-control" type="text" name="jk" style="width:50%"  value="{{$mahasiswa->jk}}">
			</div>
            <div class="col-md-12">
				<strong>Alamat</strong>
				<textarea class="form-control" name="alamat" rows="5" style="width:50%">{{$mahasiswa->alamat}}</textarea>
			</div>
			<div class="col-md-12">
                <br>
                 <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> Save </button>
				<a href="{{route('mahasiswa.index')}}" class="btn btn-sm  btn-success"><i class="fa fa-arrow-left"> Back </i></a>
				
			</div>
            </div>
		</div>
	</form>

</div>
@endsection