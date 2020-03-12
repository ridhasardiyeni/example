@extends('layouts.app')
@section('content')

	<div class="container">
			<div class="row">
				<div class="col-md-10">
					<h3>List Data Mahasiswa</h3>
					
					
					<hr>
				</div>
			
				<br>
				<div classs="col-md-2 text-right">
					<a class="btn btn-sm btn-primary" href="{{route('mahasiswa.create')}}"><i class="fa big-icon fa fa-plus-square"></i> Tambah Data</a>

				</div>
			</div>
			
			@if($message= Session::get('success'))
				<div class="alert alert-success">
					<p>{{$message}}</p>
				</div>
			@endif

			<table class="table table-striped">
				<tr  class="">
					<th width="50px"><b>No.</b></th>
					<th width="300px">NIM</th>
                    <th width="300px">Nama Mahasiswa</th>
                    <th width="300px">JK</th>
                    <th width="300px">Alamat</th>
					<th width="200">Action</th>
				</tr>
                <?php $i=0 ?>
				@foreach($mahasiswas as $mahasiswa)
					<tr>
						<td><b>{{++$i}}.</b></td>
						<td>{{$mahasiswa->nim}}</td>
						<td>{{$mahasiswa->nama_mahasiswa}}</td>
                        <td>{{$mahasiswa->jk}}</td>
                        <td>{{$mahasiswa->alamat}}</td>
						<td>
							<form action="{{route('mahasiswa.destroy', $mahasiswa->id_mahasiswa)}}" method="post"> 
								<a class="btn btn-sm btn-warning" href="{{route('mahasiswa.edit', $mahasiswa->id_mahasiswa)}}"><i class="fa big-icon fas fa-edit"></i></a>
 
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-sm btn-danger"><i class="fa big-icon fas fa-trash"></i></button>
							</form>
						</td>
					</tr>
				@endforeach
			</table>

	</div>
@endsection