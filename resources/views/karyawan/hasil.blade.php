@extends('layouts.app')
@section('content')
<div class="container">

<div class=-"row">
		<div class="panel panel-primary">
		<div class ="panel-heading">Data Karyawan
		<div class="panel-title pull-right"><a href="{{ URL::previous() }}">Kembali</a></div></div>
		<form id="searchForm">
			<center>
				<h2>Pencarian Atas Nama {{$query}}</h2>
			</center>

		</form>
		
		<div class="panel-body"></div>
		
		<table class="table">
				<thead>
			<tr>
				<th>Nama </th>
				<th>Bidang</th>
				<th>Email</th>
				<th>No Hp</th>
				<th>Alamat</th>
				<th colspan="2">Action</th>
			</tr>
			</thead>
			<body>
					@foreach($karya as $data)
					<tr>
						<td>{{$data->nama}}</td>
						<td>{{$data->bidang}}</td>
						<td>{{$data->email}}</td>
						<td>{{$data->no_hp}}</td>
						<td>{{$data->alamat}}</td>
						<td>
							<a class="btn btn-warning" href="/admin/karyawan/{{$data->id}}/edit">Edit</a>
						</td>
			
					
						<td>
						<td>
						
						<td>
						<form action="{{route('karyawan.destroy',$data->id)}}" method="post">
							
							<input type="hidden" name="_method" value="DELETE">
							<input type="hidden" name="_token" >
							<input type="submit" class="btn btn-danger" value="delete">
							{{csrf_field()}}
						</form>
					</td>

					</tr>
					@endforeach
			</body>

		

		
		</div>
</div>


@endsection
